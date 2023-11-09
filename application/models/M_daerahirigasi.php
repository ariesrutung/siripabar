<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_daerahirigasi extends CI_Model
{
    public function get_all()
    {
        $this->db->select("*");
        $this->db->from("daerah_irigasi");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_kode($kode)
    {

        $this->db->select("di.*, sk.*");
        $this->db->from("daerah_irigasi di");
        $this->db->join("skema sk", "sk.kode_di=di.kode_di", "LEFT");
        $this->db->where("sk.kode_di", $kode);
        $query = $this->db->get();
        return $query->row();
    }
}
