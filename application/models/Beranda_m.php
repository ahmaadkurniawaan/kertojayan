<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_m extends CI_Model
{
    public function getAllDataRow()
    {
        return $this->db->get('frontdata')->row();
    }
    public function getAllDataArray()
    {
        return $this->db->get('frontdata')->result_array();
    }

    public function getDataNews()
    {
        return $this->db->get('news')->result_array();
    }

    public function getDataNewsfront()
    {
        $this->db->order_by('idnews', 'DESC');
        return $this->db->get('news', 3)->result_array();
    }
    public function getDataNewsRow()
    {
        return $this->db->get('news')->row();
    }
    public function getDataUser()
    {
        return $this->db->get('user')->row();
    }
    public function getDatapimpinan()
    {
        return $this->db->get('pimpinan')->result_array();
    }
    public function getDatapimpinanFront()
    {
        return $this->db->get('pimpinan', 4)->result_array();
    }
    public function getDataPengumuman()
    {
        $this->db->order_by('idpengumuman', 'DESC');
        return $this->db->get('pengumuman')->result_array();
    }
    public function getDataPengumumanFront()
    {
        $this->db->order_by('idpengumuman', 'DESC');
        return $this->db->get('pengumuman', 2)->result_array();
    }
    public function getDataPengumumanById($idpengumuman)
    {
        return $this->db->get_where('pengumuman', array('idpengumuman' => $idpengumuman))->row();
    }
    public function getDataUnduh()
    {
        $this->db->order_by('idunduh', 'DESC');
        return $this->db->get('unduh')->result_array();
    }
    public function getDataTestimonials()
    {
        return $this->db->get('testimonials')->result_array();
    }
    public function getDataAgenda()
    {
        $this->db->order_by('idagenda', 'DESC');
        return $this->db->get('agenda')->result_array();
    }
    public function getDataAgendaFront()
    {
        $this->db->order_by('idagenda', 'DESC');
        return $this->db->get('agenda', 3)->result_array();
    }
    public function getDataAgendaById($idagenda)
    {
        return $this->db->get_where('agenda', array('idagenda' => $idagenda))->row();
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

    public function getDataKategori()
    {
        return $this->db->get('category')->result_array();
    }
    public function getDataKategoriRow()
    {
        return $this->db->get('category')->row();
    }
    public function getDataKategoriById($idcategory)
    {
        return $this->db->get_where('category', array('idcategory' => $idcategory))->row();
    }


    public function submitDataSaran()
    {

        $nama                   =  $this->input->post('nama', true);
        $email                  =  $this->input->post('email', true);
        $topik                  =  $this->input->post('topik', true);
        $saran                  =  $this->input->post('saran');

        $data = [

            "nama_saran"              => $nama,
            "email_saran"             => $email,
            "topik_saran"             => $topik,
            "pesan_saran"             => $saran,

        ];

        return $this->db->insert('saran', $data);
    }
}
