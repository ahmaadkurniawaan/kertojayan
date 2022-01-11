<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TestimonialsData extends CI_Controller
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
            $data['front'] = $this->main_models->all_data('testimonials')->result();
            $this->load->view('admin/testimonials', $data);
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idtestimonials' => $id);
            $this->main_models->deleteData($where, 'testimonials');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('testimonialsData');
        }
    }

    public function insert()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $config['upload_path'] = './assets/img/testimonials/'; //path folder
            $config['allowed_types'] = 'jpg'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload


            $this->upload->initialize($config);

            if ($this->upload->do_upload('gbr1')) {
                $gbr = $this->upload->data();
                //Compress Image               
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/testimonials/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '80%';
                $config['width'] = 500;
                $config['new_image'] = './assets/img/testimonials/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $gambar = $gbr['file_name'];
            }

            $a = $this->input->post('nama');
            $b = $this->input->post('pekerjaan');
            $c = $this->input->post('detail');

            $tgl = date('j F Y');
            $data = array(
                'nama_testi' => $a,
                'pek_testi' => $b,
                'detil_testi' => $c,
                'link_testi' => $gambar,
                'tgl_testi' => $tgl
            );

            $this->main_models->insert($data, 'testimonials');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('testimonialsData');
        }
    }
}
