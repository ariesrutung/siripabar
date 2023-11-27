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
    public function get_di()
    {
        $this->db->select("*");
        $this->db->from("daerah_irigasi");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_di_by_user_id($user_id)
    {
        $this->db->select("*");
        $this->db->from("daerah_irigasi");
        $this->db->where("user_id", $user_id);
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

        $this->db->select("*");
        $this->db->from("daerah_irigasi");
        $this->db->where("kode_di", $kode);
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
        $this->db->insert('daerah_irigasi', $data);
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

    public function getGambarPathById($kode_di)
    {
        $this->db->select('gambar'); // Sesuaikan dengan nama kolom gambar pada tabel Anda
        $this->db->from('daerah_irigasi');
        $this->db->where('kode_di', $kode_di);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->gambar;
        }

        return null;
    }

    public function getDokPathById($kode_di)
    {
        $this->db->select('dokumen'); // Sesuaikan dengan nama kolom gambar pada tabel Anda
        $this->db->from('daerah_irigasi');
        $this->db->where('kode_di', $kode_di);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->dokumen;
        }

        return null;
    }

    public function delete_data($id, $table)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }

    public function count_by_kewenangan($kewenangan)
    {
        $this->db->select("COUNT(*) as total");
        $this->db->from("daerah_irigasi");
        $this->db->where("kewenangan", $kewenangan);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['total'];
    }

    public function count_di_by_kabupaten()
    {
        $this->db->select("kabupaten, COUNT(*) as jumlah_daerah_irigasi");
        $this->db->from("daerah_irigasi");
        $this->db->group_by("kabupaten");
        $query = $this->db->get();
        return $query->result();
    }

    public function updateDaerahIrigasi($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('daerah_irigasi', $data);
    }

    public function getGambarLama($id_daerah)
    {
        $this->db->select('gambar');
        $this->db->where('id', $id_daerah);
        $query = $this->db->get('daerah_irigasi');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->gambar;
        }

        return null;
    }

    public function getDokumenLama($id_daerah)
    {
        $this->db->select('dokumen');
        $this->db->where('id', $id_daerah);
        $query = $this->db->get('daerah_irigasi');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->dokumen;
        }

        return null;
    }
}
