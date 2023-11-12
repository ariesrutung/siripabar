<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporankinerja extends CI_Model
{
    public function get_by_kode($kode)
    {
        $this->db->select("*");
        $this->db->from("laporan_kinerja");
        $this->db->where("kode_di", $kode);
        $query = $this->db->get();
        return $query->result();
    }
}
