<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
        $this->load->model('Berita_m');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = "Teknologi Informasi | Universitas Muhammadiyah Purworejo";
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['frontdataarray']     = $this->Beranda_m->getAllDataArray();
        $data['news']              = $this->Berita_m->getDataNews();
        $data['user']               = $this->Beranda_m->getDataUser();
        $data['data_kategori']           = $this->Berita_m->getDataKategori();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $config['base_url']         = base_url() . 'berita/index';
        $config['total_rows']       = $this->Berita_m->countAllNews();
        $config['per_page']         = 6;

        $config['full_tag_open'] = '<nav aria-label=""><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="icofont-arrow-right" style="color:  #02295A;"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="icofont-arrow-left" style="color:  #02295A;"></i>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item "><a class="page-link" href="#" style="background-color:  #02295A; color:#FFF003;">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');



        $this->pagination->initialize($config);

        $data['start']              = $this->uri->segment(3);
        $data['news_paginate']      = $this->Berita_m->getDataNewsPaginate($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($idnews)
    {
        $data['title']              = "Teknologi Informasi | Universitas Muhammadiyah Purworejo";
        $data['detail']             = $this->Berita_m->getDataNewsById($idnews);
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $data['news']               = $this->Berita_m->getDataNews();
        $data['kategori']           = $this->Beranda_m->getDataKategori();
        $data['data_kategori']      = $this->Berita_m->getDataKategori();
        $data['user']               = $this->Beranda_m->getDataUser();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('berita/detailberita', $data);
        $this->load->view('templates/footer');
    }

    public function kategori($idcategory)
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $data['news']               = $this->Berita_m->getDataNews();
        $data['user']               = $this->Beranda_m->getDataUser();
        $data['kategori']           = $this->Berita_m->kategori($idcategory);
        $data['data_kategori']      = $this->Berita_m->getDataKategori();
        $data['kategori_news']      = $this->Berita_m->getDataNewsCategory($idcategory);
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('berita/kategori_berita', $data);
        $this->load->view('templates/footer');
    }
}