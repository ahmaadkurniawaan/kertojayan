<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('main_models');
    }

    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['front'] = $this->main_models->all_data('saran')->result();
            $this->load->view('admin/home', $data);
        }
    }

    public function home()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("index.php/admin"));
        } else {
            $data['news_count'] = $this->main_models->jumlah_data_news();
            $data['usaha_count'] = $this->main_models->jumlah_data_usaha();
            $data['team_count'] = $this->main_models->jumlah_data_team();
            $data['testi_count'] = $this->main_models->jumlah_data_testi();
            $this->load->view('admin/home', $data);
        }
    }
 
    public function delete($id)
    {
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("index.php/admin"));
        } else {
            $where = array('idsaran' => $id);
            $this->main_models->deleteData($where, 'saran');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('admin');
        }
    }
}
