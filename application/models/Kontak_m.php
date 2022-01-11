<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_m extends CI_Model
{
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
