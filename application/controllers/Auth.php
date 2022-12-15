<?php

class Auth extends CI_Controller
{

    public function index()
    {

        $check = $this->m_auth->get_all_user()->num_rows();
        if ($check < 1) {
            $this->setup_administrator();
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->m_auth->login($username, $password)->row_array();
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $userData = array(
                        'username' => $username,
                        'role_id' => $user['role_id'],
                        'user_id' => $user['id']
                    );
                    $this->session->set_userdata($userData);
                    if ($user['role_id'] == 0) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
            Password Salah!
          </div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">
            User Tidak Terdaftar
          </div>');
                redirect('Auth');
            }
        }
    }
    public function setup_administrator()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/setup');
        } else {
            $insertData = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 0,
            );
            $this->m_auth->setup_administrator($insertData);
        }
    }
    public function log_out()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
