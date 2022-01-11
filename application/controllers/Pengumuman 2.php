<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman extends CI_Controller {

   function __construct() {
        parent::__construct();
        $this->load->model('main_models');
    }

    public function index() {
        $data['front'] = $this->main_models->all_data('frontdata')->result();
        $data['pengumuman'] = $this->main_models->all_data('pengumuman')->result();
//        $data['pimpinan'] = $this->main_models->all_data('pimpinan')->result();
        $this->load->view('pengumuman', $data);
    }
    
    public function detil($id){
        $where = array('idpengumuman' => $id);;
        $data['data'] = $this->main_models->getData($where, 'pengumuman')->result();
        $this->load->view('detailpengumuman', $data);
    }

}
