<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_m extends CI_Model
{
    public function getDataPengumuman()
    {
        $this->db->order_by('idpengumuman', 'DESC');
        return $this->db->get('pengumuman')->result_array();
    }
    public function getDataPengumumanRow()
    {
        return $this->db->get('pengumuman')->row();
    }
    public function getDataPengumumanById($idpengumuman)
    {
        return $this->db->get_where('pengumuman', array('idpengumuman' => $idpengumuman))->row();
    }
    public function getDataAgenda()
    {
        return $this->db->get('agenda')->result_array();
    }
    public function getDataAgendaById($idagenda)
    {
        return $this->db->get_where('agenda', array('idagenda' => $idagenda))->row();
    }
}
