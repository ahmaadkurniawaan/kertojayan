<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
        $this->load->model('Berita_m');
    }
    public function index()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        // $data['detail']             = $this->Berita_m->getDataNewsById($idnews);
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $data2['news']              = $this->Berita_m->getDataNews();
        $data['user']               = $this->Beranda_m->getDataUser();
        $data['kategori']           = $this->Beranda_m->getDataKategori();
        // $data['detail']             = $this->Beranda_m->getDataKategoriById($idcategory);
        $data1['detail_kategori']   = $this->Berita_m->getDetailKategori();

        $this->load->view('templates/header', $data);
        $this->load->view('berita/kategori', $data);
        $this->load->view('templates/footer');
    }
}
