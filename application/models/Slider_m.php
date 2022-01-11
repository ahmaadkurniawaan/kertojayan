<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function getAllDataSlider()
    {
        $this->db->order_by('idslider', 'DESC');
        return $this->db->get('tb_slider')->result_array();
    }
    public function getAllDataSliderRow()
    {
        return $this->db->get('tb_slider')->row();
    }

    public function getAllDataSliderById($idslider)
    {
        return $this->db->get_where('tb_slider', array('idslider' => $idslider))->row();
    }

    public function tambahDataSlider()
    {


        $gambar                 =  $_FILES['image']['name'];

        if ($gambar != 0) {

            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-8">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gambar <strong>gagal</strong> Diunggah
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');

            redirect('slider/insert');
        } else {

            $config['upload_path']      =   './uploads/slider/';
            $config['allowed_types']    =   'jpg|jpeg';
            $config['max_size']         = 50000;
            $config['overwrite']        = TRUE;

            $this->upload->initialize($config);

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $this->upload->data('file_name');
            }
        }

        $data = [

            "img_slider"            => $gambar,
            "date_created"          => date('Y-m-d')


        ];

        return $this->db->insert('tb_slider', $data);
    }



    public function hapusDataSlider($idslider)
    {
        //Mengambil data Slider 
        $this->db->where('idslider', $idslider);
        $query = $this->db->get('tb_slider');
        $row = $query->row();

        //Menghapus Image pada Folder
        unlink("./assets/img/slider/$row->img_slider");

        $this->db->delete('tb_slider', array('idslider' => $idslider));
    }
}
