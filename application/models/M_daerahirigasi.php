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
        $this->db->select("tahun_sumberdana,kode_di");
        $this->db->from("data_kontrak");
        $this->db->where("kode_di", $kode);
        $this->db->order_by("tahun_sumberdana", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_daerah_irigasi($data)
    {
        // Simpan data ke tabel daerah_irigasi
        $this->db->insert('daerah_irigasi', $data);
    }

    public function insert_skema($data)
    {
        // Simpan data ke tabel skema
        $this->db->insert('skema', $data);
    }


    public function get_laporan_by_kode_by_tahun($tahun, $kode)
    {
        $this->db->select("*");
        $this->db->from("data_kontrak");
        $this->db->where("tahun_sumberdana", $tahun);
        $this->db->where("kode_di", $kode);
        $this->db->order_by("tahun_sumberdana", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function getGambarPathById($id)
    {
        $this->db->select('gambar'); // Sesuaikan dengan nama kolom gambar pada tabel Anda
        $this->db->from('daerah_irigasi');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->gambar;
        }

        return null;
    }

    public function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('daerah_irigasi', $data);
    }

    public function delete_data($id, $table)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }
}
