<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('main_models');
        $this->load->library(array('upload', 'image_lib'));
    }

    public function index() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['front'] = $this->main_models->all_data('unduh')->result();
            $data['front2'] = $this->main_models->all_data('heading_unduh')->result();
            $this->load->view('admin/dokumen', $data);
        }
    }

    public function insert1() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $a = $this->input->post('nama1');
            $data = array(
                'nama_heading_unduh' => $a
            );
            $this->main_models->insert($data, 'heading_unduh');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('dokumen');
        }
    }

    public function insert() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $config['upload_path'] = './docs/'; //path folder
            $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

            $this->upload->initialize($config);

            if ($this->upload->do_upload('gbr1')) {
                $gbr = $this->upload->data();
                $gambar = $gbr['file_name'];
            } else {
                $this->session->set_flashdata('category_success', 'Terjadi Kesalahan!');
                redirect('dokumen');
            }

            $a = $this->input->post('kat');
            $b = $this->input->post('nama');
            $d = date('j F Y');
            $data = array(
                'idheading_unduh' => $a,
                'judul_unduh' => $b,
                'link_unduh' => $gambar,
                'tanggal_unduh' => $d
            );

            $this->main_models->insert($data, 'unduh');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('dokumen');
        }
    }
    
    public function delete1($id) {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idheading_unduh' => $id);
            $this->main_models->deleteData($where, 'heading_unduh');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('dokumen');
        }
    }
    
     public function delete2($id) {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idunduh' => $id);
            $this->main_models->deleteData($where, 'unduh');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('dokumen');
        }
    }

}
