<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
    }

    public function index()
    {
        $data['agenda']             = $this->Beranda_m->getDataAgenda();
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();

        $this->load->view('templates/header', $data);
        $this->load->view('agenda/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($idagenda)
    {
        $data['detail']             = $this->Beranda_m->getDataAgendaById($idagenda);
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $this->load->view('templates/header', $data);
        $this->load->view('agenda/detailagenda', $data);
        $this->load->view('templates/footer', $data);
    }
}
