<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
            $this->load->view('admin/setting', $data);
        }
    }

    public function editpassword() {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $old_pass=$this->input->post('pw_baru');
            $new_pass=$this->input->post('cpw_baru');
            
            
            if ($old_pass != $new_pass) {
                $this->session->set_flashdata('category_success', 'Terdapat Kesalahan');
                redirect('settings');
            } else {
                $post = $this->input->post();
                $data = array(
                    'pass_word' => sha1($post['pw_baru']),
                );
                $this->main_models->update('1',$data, 'user');
                $this->session->set_flashdata('category_success', 'Password Berhasil Diubah');
                redirect('settings');
            }
        }
    }

}
