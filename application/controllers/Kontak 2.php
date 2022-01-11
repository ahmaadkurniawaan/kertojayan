<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('main_models');
    }

    public function index() {
        $data['front'] = $this->main_models->all_data('frontdata')->result();
        $this->load->view('kontak', $data);
    }

   
    

}
