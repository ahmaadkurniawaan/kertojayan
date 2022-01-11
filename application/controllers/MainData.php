<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainData extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('main_models');
    }

    public function index() {
        $data['front'] = $this->main_models->all_data('frontdata')->result();
        $data['news'] = $this->main_models->dataLimit('news','3','idnews','DESC')->result();
        $data['pimpinan'] = $this->main_models->dataLimit('pimpinan','4','idpimpinan','ASC')->result();
        $data['testimonials'] = $this->main_models->all_data('testimonials')->result();
        $data['pengumuman'] = $this->main_models->dataLimit('pengumuman','2','idpengumuman','DESC')->result();
        $this->load->view('main', $data);
    }
    
    public function insert() {
           
            $aa = $this->input->post('nama');
            $a = $this->input->post('emailx');
            $c = $this->input->post('topik');
            $d = $this->input->post('pesan');
          

            $data = array(
                'nama_saran' => $aa,
                'email_saran' => $a,
                'topik_saran' => $c,
                'pesan_saran' => $d
               
            );
            $this->main_models->insert($data, 'saran');
            $this->session->set_flashdata('category_success', 'Saran Berhasil Terkairim');
            redirect('kontak');
    }

}
