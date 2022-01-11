<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class NewsData extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form', 'url', 'file');
        $this->load->model('main_models');
        $this->load->library(array('upload', 'image_lib'));
    }

    public function index() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['front'] = $this->main_models->all_data('news')->result();
            $this->load->view('admin/news', $data);
        }
    }

    public function delete($id) {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idnews' => $id);
            $this->main_models->deleteData($where, 'news');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('newsData');
        }
    }

    public function insert() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {

            $a = $this->input->post('nama');
            $data = array(
                'name_category' => $a,
                'status_category' => '1',
            );

            $this->main_models->insert($data, 'category');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('newsData');
        }
    }
    
    public function edit() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $a = $this->input->post('kategori');
            $where = array(
                'idcategory' => $a
            );
            
            $b = $this->input->post('visibilitas');
            $data = array(
                'status_category' => $b
            );

            $this->main_models->edit($where, $data, 'category');
            $this->session->set_flashdata('category_success', 'Data Berhasil Diubah');
            redirect('newsData');
        }
    }

}
