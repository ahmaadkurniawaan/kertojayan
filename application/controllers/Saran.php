<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Saran_m');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('topik', 'Sopik', 'required');
        $this->form_validation->set_rules('saran', 'Saran', 'required');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header');
            $this->load->view('beranda/index');
            $this->load->view('templates/footer');
        } else {
            $this->Saran_m->submitDataSaran();
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Saran<strong>berhasil</strong> Dikirim
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('beranda');
        }
    }
}
