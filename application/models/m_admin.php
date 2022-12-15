<?php
class m_admin extends CI_Model
{

    public function tambah_kandidat($insertData)
    {
        $this->db->insert('ev_kandidat', $insertData);
    }
    public function tambah_pemilih($insertData){
        $this->db->insert('ev_user',$insertData);
    }
    public function get_kandidat()
    {
        return $this->db->get('ev_kandidat');
    }
    public function edit_kandidat($kandidat_id, $insertData)
    {
        $this->db->where('kandidat_id', $kandidat_id);
        $this->db->update('ev_kandidat', $insertData);
    }
    public function get_pemilih()
    {
        $this->db->select('*');
        $this->db->from('ev_user');
        $this->db->where('role_id', 1);
        $this->db->order_by('username','desc');
        return $this->db->get();
    }
    public function search_pemilih($keyword){
        $this->db->select('*');
        $this->db->from('ev_user');
        $this->db->where('role_id', 1);
        $this->db->like('username',$keyword);
        $this->db->or_like('nama',$keyword);
        return $this->db->get();
    }
    public function get_sesi()
    {
        return $this->db->get('ev_sesi');
    }
    public function tambah_sesi($insertData)
    {
        $rows_count = $this->db->get('ev_sesi')->num_rows();
        $sesi_kode = $rows_count . '-' . rand(10, 100);
        $insertData = array(
            'sesi_kode' => $sesi_kode,
            'sesi_status' => 0,
            'sesi_nama' => $insertData['sesi_nama']

        );
        $this->db->insert('ev_sesi', $insertData);
    }
    public function get_kandidat_aktif()
    {
        $this->db->select('*');
        $this->db->from('ev_kandidat');
        $this->db->where('kandidat_aktif', 1);
        return $this->db->get();
    }
    public function get_sesi_details($sesi_kode)
    {
        $this->db->select("*");
        $this->db->from('ev_sesi');
        $this->db->where('sesi_kode', $sesi_kode);
        return $this->db->get();
    }
    function get_kandidat_sesi($sesi_kode)
    {
        $this->db->select('*');
        $this->db->from('ev_kandidat');
        $this->db->where('kandidat_sesi_kode', $sesi_kode);
        $this->db->order_by("kandidat_vote", "desc");
        return $this->db->get();
    }
    function get_pemilih_sesi($limit, $start)
    {   
        $this->db->select('*');
        $this->db->from('ev_user');
        $this->db->join('ev_vote', 'ev_vote.vote_user_id=ev_user.id','left');
        $this->db->where('role_id', 1);
        $this->db->limit($limit,$start);
        return $this->db->get();
    }
    function get_pemilih_sesi_search($limit, $start,$keyword)
    {   
        $this->db->select('*');
        $this->db->from('ev_user');
        $this->db->join('ev_vote', 'ev_vote.vote_user_id=ev_user.id','left');
        $this->db->where('role_id', 1);
        $this->db->like('username',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->limit($limit,$start);
        return $this->db->get();
    }
    function count_all_pemilih()
    {
        $this->db->select('*');


        $this->db->where('role_id', 1);
        return $this->db->get('ev_user')->num_rows();
    }

    function get_kandidat_overall_statistics_data($sesi_kode)
    {
        $jumlah_pemilih = $this->db->get_where('ev_user', ['role_id' => 1])->num_rows();
        $jumlah_kandidat = $this->db->get_where('ev_kandidat', ['kandidat_sesi_kode' => $sesi_kode])->num_rows();
        $suara_terkumpul = $this->db->get_where('ev_vote', ['vote_sesi_kode' => $sesi_kode])->num_rows();
        $result = array(
            'count_pemilih' => $jumlah_pemilih,
            'count_kandidat' => $jumlah_kandidat,
            'count_suara' => $suara_terkumpul
        );
        return $result;
    }
    function mulai_sesi($sesi_kode)
    {
        $updateData = array(
            'sesi_status' => 1
        );
        $this->db->where('sesi_kode', $sesi_kode);
        $this->db->update('ev_sesi', $updateData);
    }
    function stop_sesi($sesi_kode)
    {
        $updateData = array(
            'sesi_status' => 0
        );
        $this->db->where('sesi_kode', $sesi_kode);
        $this->db->update('ev_sesi', $updateData);
    }
    function get_dashboard_ov_stats(){
        $count_pemilih=$this->db->get_where('ev_user',['role_id'=>1])->num_rows();
        $count_sesi=$this->db->get_where('ev_sesi',['sesi_status'=>1])->num_rows();
        $return =array(
            'count_pemilih'=>$count_pemilih,
            'count_sesi'=>$count_sesi,
        );
        return $return;
    }
}
