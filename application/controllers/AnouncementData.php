<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AnouncementData extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url', 'file');
        $this->load->model('main_models');
        $this->load->library(array('upload', 'image_lib'));
    }

    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $data['front'] = $this->main_models->all_data('pengumuman')->result();
            $this->load->view('admin/anouncement', $data);
        }
    }

    public function delete($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idpengumuman' => $id);
            $this->main_models->deleteData($where, 'pengumuman');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('anouncementData');
        }
    }

    public function insert()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            if (!empty($_FILES['gbr1']['tmp_name'])) {
                $config['upload_path'] = './docs/'; //path folder
                $config['allowed_types'] = 'jpg|png|pdf'; //type yang dapat diakses bisa anda sesuaikan
                $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
                $config['max_size'] = 1000;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('gbr1')) {
                    $gbr = $this->upload->data();
                    $gambar = $gbr['file_name'];
                }

                $a = $this->input->post('nama');
                $c = $this->input->post('pengumuman');
                $b = strip_tags($c);
                $tgl = $this->input->post('tanggal');
                $bln = $this->input->post('bulan');
                $thn = $this->input->post('tahun');
                $d = $tgl . " " . $bln . " " . $thn;
                $data = array(
                    'judul_pengumuman' => $a,
                    'ringkasan_pengumuman' => $b,
                    'full_pengumuman' => $c,
                    'tgl_pengumuman' => $d,
                    'link_pengumuman' => $gambar
                );

                $this->main_models->insert($data, 'pengumuman');
                $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
                redirect('anouncementData');
            } else {
                $a = $this->input->post('nama');
                $c = $this->input->post('pengumuman');
                $b = strip_tags($c);
                $tgl = $this->input->post('tanggal');
                $bln = $this->input->post('bulan');
                $thn = $this->input->post('tahun');
                $d = $tgl . " " . $bln . " " . $thn;
                $data = array(
                    'judul_pengumuman' => $a,
                    'ringkasan_pengumuman' => $b,
                    'full_pengumuman' => $c,
                    'tgl_pengumuman' => $d
                );

                $this->main_models->insert($data, 'pengumuman');
                $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
                redirect('anouncementData');
            }
        }
    }
}
