<?php

defined('BASEPATH') or exit('No direct script access allowed');

class unduh extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('main_models');
    }

    public function index()
    {
        $data['front'] = $this->main_models->all_data('frontdata')->result();
        $data['unduh'] = $this->main_models->joinTable('heading_unduh', 'unduh', 'unduh.idheading_unduh = heading_unduh.idheading_unduh')->result();
        $this->load->view('unduh', $data);
    }
}
