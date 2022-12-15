<?php 

class m_auth extends CI_Model{
    
    public function setup_administrator($insertData){
        $this->db->insert('ev_user',$insertData);
    }
    public function get_all_user(){
        return $this->db->get('ev_user');
    }
    public function login($username,$password){
        
        return $this->db->get_where('ev_user',['username'=>$username]);

    }
    public function get_user_data(){
        $user=$this->db->get_where('ev_user',['username'=>$this->session->userdata('username')]);
        return $user;
    }
}