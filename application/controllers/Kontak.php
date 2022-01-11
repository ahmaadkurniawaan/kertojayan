<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_m');
        $this->load->model('Kontak_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();
        $data['sliderRow']             = $this->Beranda_m->getAllDataSliderRow();

        $this->load->view('templates/header', $data);
        $this->load->view('kontak/index', $data);
        $this->load->view('templates/footer');
    }

    public function saran()
    {
        $data['frontdatarow']       = $this->Beranda_m->getAllDataRow();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('topik', 'Sopik', 'required');
        $this->form_validation->set_rules('saran', 'Saran', 'required');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('kontak/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kontak_m->submitDataSaran();

            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Saran<strong>Telah</strong> Dikirim
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('kontak');
        }
    }
}
