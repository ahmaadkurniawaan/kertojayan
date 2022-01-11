<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_m');
        $this->load->model('Beranda_m');
    }

    public function index()
    {
        $data['pengumuman']         = $this->Pengumuman_m->getDataPengumuman();
        $data['pengumumanrow']         = $this->Pengumuman_m->getDataPengumumanRow();
        // $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        // $data['newsrow']            = $this->Beranda_m->getDataNewsRow();

        $this->load->view('templates/header', $data);
        $this->load->view('pengumuman/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($idpengumuman)
    {
        $data['detail']             = $this->Pengumuman_m->getDataPengumumanById($idpengumuman);
        $data['pengumumanrow']         = $this->Pengumuman_m->getDataPengumumanRow();
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $this->load->view('templates/header', $data);
        $this->load->view('pengumuman/detailpengumuman', $data);
        $this->load->view('templates/footer', $data);
    }
}
