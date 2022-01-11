<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
    }

    public function index()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        // $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $data['pimpinan']           = $this->Beranda_m->getDataPimpinan();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('profil/index');
        $this->load->view('templates/footer');
    }
}