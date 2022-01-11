<?php

class Detail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('main_models');
        $this->load->helper('url');
    }

   function detail($id) {
        $where = $id;
        $data['data'] = $this->main_models->detail_news($where,'news')->result();
        $this->load->view('detailnews', $data);
    }

    function category($id) {
        $where = array('idcategory' => $id);
        $data['data'] = $this->main_models->get_category($where, 'news')->result();
        $this->load->view('newscat', $data);
    }

    function search() {
        $keyword = $this->input->post('keyword');
        $data['res'] = $this->main_models->find_title($keyword)->result();         
        $this->load->view('result', $data);
    }

}
