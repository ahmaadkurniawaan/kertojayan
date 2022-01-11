<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AgendaProccess extends CI_Controller
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
            $data['front'] = $this->main_models->all_data('agenda')->result();
            $this->load->view('admin/agendaAdmin', $data);
        }
    }

    public function insert1()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $a = $this->input->post('nama1');
            $data = array(
                'nama_heading_unduh' => $a
            );
            $this->main_models->insert($data, 'heading_unduh');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('agendaProccess');
        }
    }

    public function insert()
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            if (!empty($_FILES['gbr1']['tmp_name'])) {
                $config['upload_path'] = './assets/img/agenda/'; //path folder
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

                $this->upload->initialize($config);

                if ($this->upload->do_upload('gbr1')) {
                    $gbr = $this->upload->data();
                    $gambar = $gbr['file_name'];
                } else {
                    $a1 = $this->upload->display_errors();
                    $this->session->set_flashdata('category_success', $a1);
                    redirect('agendaProccess');
                }

                $a = $this->input->post('nama');
                $b = $this->input->post('lokasi');
                $c = $this->input->post('hari');
                $cc = $this->input->post('waktu');
                $tgl = $this->input->post('tanggal');
                $bln = $this->input->post('bulan');
                $thn = $this->input->post('tahun');
                $d = $tgl . " " . $bln . " " . $thn;
                $e = $this->input->post('isi');
                $f = $this->input->post('penyelenggara');
                $g = $this->input->post('kontak');
                $data = array(
                    'agenda_detail' => $a,
                    'agenda_day' => $c,
                    'agenda_time' => $cc,
                    'location_agenda' => $b,
                    'time_agenda' => $d,
                    'agenda_month' => $bln,
                    'agenda_date' => $tgl,
                    'agenda_description' => $e,
                    'agenda_penyelenggara' => $f,
                    'agenda_contact' => $g,
                    'img_agenda' => $gambar
                );

                $this->main_models->insert($data, 'agenda');
                $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
                redirect('agendaProccess');
            } else {
                $a = $this->input->post('nama');
                $b = $this->input->post('lokasi');
                $c = $this->input->post('hari');
                $cc = $this->input->post('waktu');
                $tgl = $this->input->post('tanggal');
                $bln = $this->input->post('bulan');
                $thn = $this->input->post('tahun');
                $d = $tgl . " " . $bln . " " . $thn;
                $e = $this->input->post('isi');
                $f = $this->input->post('penyelenggara');
                $g = $this->input->post('kontak');
                $data = array(
                    'agenda_detail' => $a,
                    'agenda_day' => $c,
                    'agenda_time' => $cc,
                    'location_agenda' => $b,
                    'time_agenda' => $d,
                    'agenda_month' => $bln,
                    'agenda_date' => $tgl,
                    'agenda_description' => $e,
                    'agenda_penyelenggara' => $f,
                    'agenda_contact' => $g
                );
            }

            $this->main_models->insert($data, 'agenda');
            $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
            redirect('agendaProccess');
        }
    }

    public function delete1($id)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $where = array('idagenda' => $id);
            $this->main_models->deleteData($where, 'agenda');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('agendaProccess');
        }
    }

    public function delete2($id, $id2)
    {
        if ($this->session->userdata('status') != "login") {
            $this->load->view('admin/login');
        } else {
            $this->load->helper("file");
            $path = "./assets/img/agenda/" . $id2;
            unlink($path);
            $where = array('idagenda' => $id);
            $this->main_models->deleteData($where, 'agenda');
            $this->session->set_flashdata('category_success', 'Data Berhasil Terhapus');
            redirect('agendaProccess');
        }
    }
}
