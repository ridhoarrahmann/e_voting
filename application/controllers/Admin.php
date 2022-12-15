<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller
{

    public function index()
    {
        $data['dashboard_ov_stats'] = $this->m_admin->get_dashboard_ov_stats();
        $data['user'] = $this->m_auth->get_user_data()->row_array();

        $this->load->view('admin/header');
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
    public function kandidat()
    {
        $data['user'] = $this->m_auth->get_user_data()->row_array();
        $data['kandidat'] = $this->m_admin->get_kandidat()->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kandidat');
        $this->load->view('admin/footer');
    }

    public function tambah_kandidat()
    {



        $config['upload_path']          = './assets/kandidat/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $this->upload->do_upload('foto_kandidat');
        $uploaded_data = $this->upload->data();
        $insertData = array(
            'kandidat_nama' => $this->input->post('nama_kandidat'),
            'kandidat_visi' => $this->input->post('visi_kandidat'),
            'kandidat_misi' => $this->input->post('misi_kandidat'),
            'kandidat_foto' => $uploaded_data['file_name'],
        );
        $this->m_admin->tambah_kandidat($insertData);
        redirect('admin/kandidat');
    }

    public function edit_kandidat($kandidat_id)
    {
        $config['upload_path']          = './assets/kandidat/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $this->upload->do_upload('foto_kandidat');
        $uploaded_data = $this->upload->data();

        if ($uploaded_data['file_name']) {
            $insertData = array(
                'kandidat_nama' => $this->input->post('nama_kandidat'),
                'kandidat_visi' => $this->input->post('visi_kandidat'),
                'kandidat_misi' => $this->input->post('misi_kandidat'),
                'kandidat_foto' => $uploaded_data['file_name'],
            );
        } else {
            $insertData = array(
                'kandidat_nama' => $this->input->post('nama_kandidat'),
                'kandidat_visi' => $this->input->post('visi_kandidat'),
                'kandidat_misi' => $this->input->post('misi_kandidat'),

            );
        }

        $this->m_admin->edit_kandidat($kandidat_id, $insertData);
        redirect('admin/kandidat');
    }


    public function pemilih()
    {
        $data['user'] = $this->m_auth->get_user_data()->row_array();

        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $data['pemilih'] = $this->m_admin->search_pemilih($keyword)->result_array();
        } else {
            $data['pemilih'] = $this->m_admin->get_pemilih()->result_array();
        }




        $this->load->view('admin/header');
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pemilih');
        $this->load->view('admin/footer');
    }
    public function tambah_pemilih()
    {
        $insert_data = array(
            'username' => $this->input->post('user_username'),
            'nama' => $this->input->post('user_nama'),
            'password' => $this->input->post('password'),
            'role_id' => 1
        );
        $this->m_admin->tambah_pemilih($insert_data);
        redirect('admin/pemilih');
    }
    public function import_excel()
    {

        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
                
            echo "csv";
        } else if ($extension == 'xls') {
            // echo "xls";
            $reader= new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else if ($extension == 'xlsx') {
            // echo "xlsx";


            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            echo 'fail';
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        $sheetcount = count($sheetdata);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 1; $i < $sheetcount; $i++) {
                $nama = $sheetdata[$i][0];
                $username = $sheetdata[$i][1];
                $password = $sheetdata[$i][2];


                $insert = array(
                    'nama' => $nama,
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'role_id' => 1,

                );
                $this->db->insert('ev_user', $insert);
            }

            // $this->db->insert('ev_user',$insert);

            // $inserdata=$this->m_ridho_import->importAlumni($data);

            // if($inserdata)
            // {
            //     echo 'succes';

            // } else {

            //     echo "error";
            // }
        }
        redirect('admin/pemilih');
    }

    public function sesi()
    {
        $data['user'] = $this->m_auth->get_user_data()->row_array();
        $data['sesi'] = $this->m_admin->get_sesi()->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sesi');
        $this->load->view('admin/footer');
    }
    public function tambah_sesi()
    {

        $insert_data = array(
            'sesi_nama' => $this->input->post('nama_sesi'),

        );
        $this->m_admin->tambah_sesi($insert_data);
        redirect('Admin/sesi');
    }
    public function sesi_details($sesi_kode)
    {
        $data['user'] = $this->m_auth->get_user_data()->row_array();
        $data['sesi_details'] = $this->m_admin->get_sesi_details($sesi_kode)->row_array();
        $data['kandidat'] = $this->m_admin->get_kandidat_sesi($sesi_kode)->result_array();
        $data['ov_stats'] = $this->m_admin->get_kandidat_overall_statistics_data($sesi_kode);

        // konfigurasi pagination 

        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/sesi_details/' . $sesi_kode); //site url
        $config['total_rows'] = $this->m_admin->count_all_pemilih(); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $start = $this->uri->segment(4);
        $search_keyword = $this->input->get('keyword');
        if ($search_keyword == null) {
            $data['pemilih'] = $this->m_admin->get_pemilih_sesi($config['per_page'], $start)->result_array();
        } else {
            $data['pemilih'] = $this->m_admin->get_pemilih_sesi_search($config['per_page'], $start, $search_keyword)->result_array();
        }

        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('admin/header');
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sesi_details', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_kandidat_sesi($sesi_kode)
    {
        $config['upload_path']          = './assets/kandidat/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $this->upload->do_upload('foto_kandidat');
        $uploaded_data = $this->upload->data();
        $insertData = array(
            'kandidat_nama' => $this->input->post('nama_kandidat'),
            'kandidat_visi' => $this->input->post('visi_kandidat'),
            'kandidat_misi' => $this->input->post('misi_kandidat'),
            'kandidat_foto' => $uploaded_data['file_name'],
            'kandidat_sesi_kode' => $sesi_kode,
        );
        $this->m_admin->tambah_kandidat($insertData);
        redirect('admin/sesi_details/' . $sesi_kode);
    }
    public function mulai_sesi($sesi_kode)
    {
        $this->m_admin->mulai_sesi($sesi_kode);
        redirect('admin/sesi_details/' . $sesi_kode);
    }
    public function stop_sesi($sesi_kode)
    {
        $this->m_admin->stop_sesi($sesi_kode);
        redirect('admin/sesi_details/' . $sesi_kode);
    }

    public function mulai_sesi_list($sesi_kode)
    {
        $this->m_admin->mulai_sesi($sesi_kode);
        redirect('admin/sesi/');
    }
    public function stop_sesi_list($sesi_kode)
    {
        $this->m_admin->stop_sesi($sesi_kode);
        redirect('admin/sesi/');
    }
}
