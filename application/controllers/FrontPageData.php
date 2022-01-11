<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FrontPageData extends CI_Controller {

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
            $this->load->view('admin/frontPage');
        }
    }

    public function editFront() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $config['upload_path'] = './assets/img/header/'; //path folder
            $config['allowed_types'] = 'jpg'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

            $config2['upload_path'] = './assets/img/header/'; //path folder
            $config2['allowed_types'] = 'jpg'; //type yang dapat diakses bisa anda sesuaikan
            $config2['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
            $this->upload->initialize($config);
            if (!empty($_POST['visi'] && $_POST['misi'])) {
                if ($this->upload->do_upload('gbr1')) {
                    $gbr = $this->upload->data();
                    //Compress Image               
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/img/header/' . $gbr['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = FALSE;
                    $config['quality'] = '80%';
                    $config['new_image'] = './assets/img/header/' . $gbr['file_name'];
                    $this->load->library('image_lib', $config);
                }
                if ($this->upload->do_upload('gbr2')) {
                    $gbrx = $this->upload->data();
                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = './assets/img/header/' . $gbrx['file_name'];
                    $config2['create_thumb'] = FALSE;
                    $config2['maintain_ratio'] = FALSE;
                    $config2['quality'] = '80%';
                    $config2['new_image'] = './assets/img/header/' . $gbrx['file_name'];
                    $this->load->library('image_lib', $config2);
                    $this->image_lib->resize();

                    $gambar = $gbr['file_name'];
                    $gambar2 = $gbrx['file_name'];
                }
                $a = $this->input->post('kata_pembuka');
                $b = $this->input->post('sub_kata_pembuka');
                $c = $this->input->post('visi');
                $d = $this->input->post('misi');
                $e = $this->input->post('tentang');
                $f = $this->input->post('demografi');
                $g = $this->input->post('penduduk');
                $h = $this->input->post('keluarga');
                $i = $this->input->post('wilayah');
                $j = $this->input->post('umkm');

                $data = array(
                    'frontdata_head' => $a,
                    'frontdata_subhead' => $b,
                    'tentang' => $e,
                    'demografi' => $f,
                    'frontdata_visi' => $c,
                    'frontdata_misi' => $d,
                    'penduduk' => $g,
                    'keluarga' => $h,
                    'wilayah' => $i,
                    'umkm' => $j,
                    'frontdata_img_head' => $gambar,
                    'frontdata_img_subhead' => $gambar2
                );

                $where = array(
                    'idfrontdata' => '1'
                );
                $this->main_models->edit($where, $data, 'frontdata');
                $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
                redirect('frontPageData');
            } else {
                echo "Data Harus Terisi Semua";
            }
        }
    }

}