<?php
class m_user extends CI_Model{
    

    function get_user_data($id_user){
        $this->db->select('*');
        $this->db->from('ev_user');
        $this->db->where('id',$id_user);
        return $this->db->get();
    }
    function get_kandidat(){
        return $this->db->get('ev_kandidat');

    }
    function get_kandidat_aktif(){
        $this->db->select('*');
        $this->db->from('ev_kandidat');
        $this->db->where('kandidat_aktif',1);
        return $this->db->get();
    }

    function get_sesi_vote($user_id){
        $this->db->select('*');
        $this->db->from('ev_sesi','ev_vote');
        $this->db->join('ev_vote','ev_vote.vote_sesi_kode=ev_sesi.sesi_kode','left');
       
        $this->db->where('sesi_status',1);
   

        return $this->db->get();

    }
    // function check_sesi($sesi_kode){
    //     $user=$this->session->userdata('user_id');
    //     $this->db->select('*');
    //     $this->db->from('ev_vote');
    //     $this->db->where('vote_sesi_kode',$sesi_kode);
    //     $this->db->where('vote_user_id',$user);
    //     $rows=$this->db->get()->num_rows();
    //     if($rows==1){
    //         return $sesi_kode;
    //     }

    // }
    function get_vote_data($sesi_kode){
       $this->db->select('*');
       $this->db->from('ev_sesi');
       $this->db->where('sesi_kode',$sesi_kode);
       return $this->db->get();
    }
    function get_vote_kandidat($sesi_kode){
        $this->db->select('*');
        $this->db->from('ev_kandidat');
        $this->db->where('kandidat_sesi_kode',$sesi_kode);
        return $this->db->get();
    }
    function kandidat_vote_count($kandidat_id){
        $this->db->select('*');
        $this->db->from('ev_vote');
        $this->db->where('vote_kandidat_id',$kandidat_id);
        return $this->db->get()->num_rows();
    }
    function vote_submit($vote_result){
        $this->db->insert('ev_vote',$vote_result);
        
        
        $update_kandidat_vote=array(
            'kandidat_vote'=>$this->kandidat_vote_count($vote_result['vote_kandidat_id']),
        );

        $this->db->where('kandidat_id',$vote_result['vote_kandidat_id']);
        $this->db->update('ev_kandidat',$update_kandidat_vote);
    }
    function get_sesi_aktif(){
        $this->db->select('*');
        $this->db->from('ev_sesi');
        $this->db->join('ev_kandidat','ev_kandidat.kandidat_sesi_kode=ev_sesi.sesi_kode','left');
        $this->db->where('sesi_status',1);
        return $this->db->get();
    }
    function get_kandidat_vote_result($sesi_kode){
        $this->db->select('*');
        $this->db->from('ev_kandidat');
        $this->db->where('kandidat_sesi_kode',$sesi_kode);
        $this->db->order_by('kandidat_vote','desc');
        return $this->db->get();
    }
    

}