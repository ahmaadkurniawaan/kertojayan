<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
        $this->load->model('Slider_m');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['frontdataarray']     = $this->Beranda_m->getAllDataArray();
        $data['news']               = $this->Beranda_m->getDataNews();
        $data['newsfront']          = $this->Beranda_m->getDataNewsFront();
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $data['user']               = $this->Beranda_m->getDataUser();
        $data['pimpinan']           = $this->Beranda_m->getDataPimpinan();
        $data['pimpinanfront']      = $this->Beranda_m->getDataPimpinanFront();
        $data['pengumuman']         = $this->Beranda_m->getDataPengumuman();
        $data['pengumumanfront']    = $this->Beranda_m->getDataPengumumanFront();
        $data['testimonials']       = $this->Beranda_m->getDataTestimonials();
        $data['agenda']             = $this->Beranda_m->getDataAgenda();
        $data['agendafront']        = $this->Beranda_m->getDataAgendaFront();
        $data['slider']             = $this->Slider_m->getAllDataSlider();

        $this->load->view('templates/header', $data);
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer');
    }
}
