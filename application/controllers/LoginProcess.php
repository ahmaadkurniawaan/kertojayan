<?php

class LoginProcess extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('main_models');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    function auth()
    {
        $username = $this->input->post('user_name');
        $password = sha1($this->input->post('pass_word'));
        $where = array('user_name' => $username, 'pass_word' => $password);
        $cek = $this->main_models->tableWhere($where, 'user');

        if ($cek->num_rows() > 0) {
            $data = $cek->row_array();
            $data_session = array(
                'nama' => $data['iduser'],
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('admin/home');
        } else {
            $this->session->set_flashdata('error', 'Login Gagal');
            $this->load->view('admin/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('admin/login');
    }
}
