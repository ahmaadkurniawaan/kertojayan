<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Slider_m');
        $this->load->model('main_models');
        $this->load->library(array('upload', 'image_lib'));
    }
    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['slider']               = $this->Slider_m->getAllDataSlider();
            $this->load->view('admin/slider/index', $data);
        }
    }


    public function insert()
    {



        $config['upload_path'] = './assets/img/slider/'; //path folder
        $config['allowed_types'] = 'jpg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload


        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $gbr = $this->upload->data();
            //Compress Image               
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img/slider/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            // $config['quality'] = '80%';
            // $config['width'] = 500;
            $config['new_image'] = './assets/img/slider/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $gambar = $gbr['file_name'];
        }

        $a = date('Y-m-d');
        $img = $gambar;

        $data = array(
            'date_created' => $a,
            'img_slider' => $img
        );

        $this->main_models->insert($data, 'tb_slider');
        $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
        redirect('slider');



        // $data['slider']               = $this->Slider_m->getAllDataSlider();


        // $this->form_validation->set_rules('img_hewan', 'Foto Hewan');


        // if ($this->form_validation->run() == FALSE) {

        //     $this->load->view('admin/slider/index', $data);
        // } else {

        //     $this->Slider_m->tambahdataSlider();

        //     $this->session->set_flashdata('message', ' <div class="row mt-3">
        //     <div class="col-md-12">
        //         <div class="alert alert-success alert-dismissible fade show" role="alert">
        //             Data <strong>berhasil</strong> Disimpan
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                 <span aria-hidden="true">&times;</span>
        //             </button>
        //         </div>
        //     </div>
        // </div>');

        //     redirect('slider', $data);
        // }
    }



    public function delete($idslider)
    {



        if (empty($idslider)) {
            show_404();
        } else {


            $this->Slider_m->hapusDataSlider($idslider);

            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data <strong>berhasil</strong> Dihapus
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');

            redirect('slider');
        }
    }
}