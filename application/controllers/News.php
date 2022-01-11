<?php

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('main_models');
    }

    public function index() {
        $this->load->database();
        $jumlah_data = $this->main_models->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/news/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;
        $config['next_link'] = '<span class="page-link" aria-label="Next" ><span aria-hidden="true">Selanjutnya</span></a>';
        $config['prev_link'] = '<span class="page-link" aria-label="Previous" ><span aria-hidden="true">Sebelumnya</span></a>';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<div class="hidden">';
        $config['num_tag_close'] = '</div>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_open'] = '<li>';
//        $config['prev_tag_open'] = '<a href="#" class="page-link" aria-label="Next">';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['user'] = $this->main_models->data($config['per_page'], $from);
        $this->load->view('news', $data);
    }

}
