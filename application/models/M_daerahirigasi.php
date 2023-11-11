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

    public function get_by_kewenangan($kewenangan)
    {

        $this->db->select("*");
        $this->db->from("daerah_irigasi");
        $this->db->where("kewenangan", $kewenangan);
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

    public function get_datakontrak($kode)
    {
        $this->db->select("dk.*, di.nama_di");
        $this->db->from("data_kontrak dk");
        $this->db->join("daerah_irigasi di", "di.kode_di=dk.kode_di");
        $this->db->where("dk.kode_di", $kode);
        $this->db->order_by("tahun_sumberdana", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_laporan_by_kode($kode)
    {
        $this->db->distinct();
        $this->db->select("tahun_sumberdana");
        $this->db->from("data_kontrak");
        $this->db->where("kode_di", $kode);
        $this->db->order_by("tahun_sumberdana", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_dataskemairigasi($data)
    {
        $this->db->insert('skema', $data);
    }
}
