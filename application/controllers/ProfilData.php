<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilData extends CI_Controller {

   function __construct() {
        parent::__construct();
        $this->load->model('main_models');
    }

    public function index() {
        $data['front'] = $this->main_models->all_data('frontdata')->result();
        $data['pimpinan'] = $this->main_models->all_data('pimpinan')->result();
        $this->load->view('profil',$data);
    }

}