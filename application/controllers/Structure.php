<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Structure extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('main_models');
        $this->load->library(array('upload', 'image_lib'));
    }

    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['front'] = $this->main_models->all_data('pimpinan')->result();
            $this->load->view('admin/organization', $data);
        }
    }
    public function bpd()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['front'] = $this->main_models->all_data('bpd')->result();
            $this->load->view('admin/bpd', $data);
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idpimpinan' => $id);
            $this->main_models->deleteData($where, 'pimpinan');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('structure');
        }
    }

    public function insert()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $config['upload_path'] = './assets/img/pimpinan/'; //path folder
            $config['allowed_types'] = 'jpg'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload


            $this->upload->initialize($config);

            if ($this->upload->do_upload('gbr1')) {
                $gbr = $this->upload->data();
                //Compress Image               
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/pimpinan/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '80%';
                $config['width'] = 500;
                $config['new_image'] = './assets/img/pimpinan/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $gambar = $gbr['file_name'];
            }

            $a = $this->input->post('nama');
            $b = $this->input->post('pekerjaan');
            $c = $this->input->post('tupoksi');
            $d = $gambar;

            $data = array(
                'nama_pimpinan' => $a,
                'jabatan_pimpinan' => $b,
                'tupoksi' => $c,
                'img_pimpinan' => $d
            );

            $this->main_models->insert($data, 'pimpinan');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('structure');
        }
    }
    public function insert_bpd()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
        $config['upload_path'] = './assets/img/pimpinan/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $gbr = $this->upload->data();
            //Compress Image               
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img/pimpinan/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            // $config['quality'] = '80%';
            // $config['width'] = 500;
            $config['new_image'] = './assets/img/slider/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $gambar = $gbr['file_name'];
        }

            $img = $gambar;
            $a = $this->input->post('nama');
            $b = $this->input->post('pekerjaan');
            $c = $this->input->post('tupoksi');


            $data = array(
                'nama_pimpinan' => $a,
                'jabatan_pimpinan' => $b,
                'tupoksi' => $c,
                'img_pimpinan' => $img
            );

            $this->main_models->insert($data, 'bpd');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('Structure/bpd');
        }
    }
    
    

}