<?php

class Detailnews extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('main_models');
        $this->load->helper('url');
    }

    function detail($id) {
        $where = $id;
        $data['data'] = $this->main_models->detail_news($where, 'news')->result();
        $this->load->view('detailnews', $data);
    }

   

}
