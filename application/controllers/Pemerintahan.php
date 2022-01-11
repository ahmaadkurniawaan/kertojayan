<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemerintahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
        $this->load->model('main_models');
    }

    public function index()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        // $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        $data['pimpinan']           = $this->Beranda_m->getDataPimpinan();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('pemerintahan/index');
        $this->load->view('templates/footer');
    }
    public function bpd()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        // $data['newsrow']            = $this->Beranda_m->getDataNewsRow();
        // $data['pimpinan']           = $this->Beranda_m->getDataPimpinan();
        $data['pimpinan'] = $this->main_models->all_data('bpd')->result_array();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('pemerintahan/bpd',$data);
        $this->load->view('templates/footer');
    }

    public function userGetAll()
    {
    $query="SELECT * FROM bpd";
    return$this->db->query($query)->result_array();
    }
    public function userGetById()
    {
    $param=$_GET['id'];
    $query = $this->db->get_where('bpd', array('idpimpinan' => $param));
    echo json_encode($query->result());
    }
    public function userGetById1()
    {
    $param=$_GET['id'];
    $query = $this->db->get_where('pimpinan', array('idpimpinan' => $param));
    echo json_encode($query->result());
    }
}