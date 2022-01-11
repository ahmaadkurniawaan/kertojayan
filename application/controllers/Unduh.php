<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unduh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
        $this->load->model('Berita_m');
    }

    public function index()
    {
        $data['unduh']          = $this->Beranda_m->getDataUnduh();
        $data['frontdatarow']   = $this->Beranda_m->getAllDataRow();
        $data['newsrow']        = $this->Beranda_m->getDataNewsRow();


        $this->load->view('templates/header', $data);
        $this->load->view('unduh/index', $data);
        $this->load->view('templates/footer');
    }
}
