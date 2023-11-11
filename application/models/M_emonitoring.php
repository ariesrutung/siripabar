<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_emonitoring extends CI_Model
{
    public function get_all()
    {
        $this->db->distinct();
        $this->db->select("tahun_sumberdana");
        $this->db->from("data_kontrak");
        $this->db->order_by("tahun_sumberdana", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_tahun_sumberdana($tahun)
    {
        $this->db->select("*");
        $this->db->from("data_kontrak");
        $this->db->where("tahun_sumberdana", $tahun);
        $this->db->order_by("tahun_sumberdana", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_datakontrak()
    {
        $this->db->select("*");
        $this->db->from("data_kontrak");
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_datakontrak($data)
    {
        $this->db->insert('data_kontrak', $data);
    }
}
