<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
    }

    public function index()
    {

        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['agenda']             = $this->Beranda_m->getDataAgenda();
        $data['pimpinan']           = $this->Beranda_m->getDataPimpinan();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('usaha/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($idagenda)
    {

        $data['detail']             = $this->Beranda_m->getDataAgendaById($idagenda);
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $this->load->view('templates/header', $data);
        $this->load->view('usaha/detailusaha', $data);
        $this->load->view('templates/footer', $data);
    }
}
