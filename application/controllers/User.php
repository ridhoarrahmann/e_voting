<?php 
class User extends CI_Controller{

    public function index(){
        $data['kandidat']=$this->m_user->get_kandidat()->result_array();
        $data['kandidat_aktif']=$this->m_user->get_kandidat_aktif()->result_array();
        $data['sesi_aktif']=$this->m_user->get_sesi_aktif()->result_array();
        $this->load->view('user/header');
        $this->load->view('user/navbar');
        $this->load->view('user/index',$data);
        $this->load->view('user/footer');
    }
    public function sesi_vote(){
        $data['user']=$this->m_user->get_user_data($this->session->userdata('user_id'))->row_array();
        $data['sesi_vote']=$this->m_user->get_sesi_vote($this->session->userdata('user_id'))->result_array();
       
        $this->load->view('user/header');
        $this->load->view('user/navbar');
        $this->load->view('user/sesi',$data);
        $this->load->view('user/footer');
    }
    public function vote($sesi_kode){
        $data['vote_data']=$this->m_user->get_vote_data($sesi_kode)->row_array();
        $data['vote_kandidat']=$this->m_user->get_vote_kandidat($sesi_kode)->result_array();
        $vote_data=$this->m_user->get_vote_data($sesi_kode)->row_array();
        $this->session->set_userdata($vote_data);
        $this->load->view('user/header');
        $this->load->view('user/navbar');
        $this->load->view('user/vote',$data);
        $this->load->view('user/footer');
    }
    public function vote_submit(){
        $vote_result=array(
            'vote_kandidat_id'=>$this->input->post('vote_kandidat'),
            'vote_sesi_kode'=>$this->session->userdata('sesi_kode'),
            'vote_user_id'=>$this->session->userdata('user_id')
        );
        $this->m_user->vote_submit($vote_result);
        redirect('user/vote_success');
        
    }
    public function vote_success(){
        
        $data['sesi']=$this->m_user->get_vote_data($this->session->userdata('sesi_kode'))->row_array();
        $data['vote_kandidat']=$this->m_user->get_kandidat_vote_result($this->session->userdata('sesi_kode'))->result_array();
        $this->load->view('user/header');
        $this->load->view('user/header');
        $this->load->view('user/navbar');
        $this->load->view('user/vote_success',$data);
        $this->load->view('user/footer');
    }
    
}