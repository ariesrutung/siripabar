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

    public function get_dk_by_user_id($user_id)
    {
        $this->db->select("*");
        $this->db->from("data_kontrak dk");
        // $this->db->join("skema sk", "dk.kode_di = dk.kode_di");
        $this->db->where("dk.user_id", $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_datakontrak($data)
    {
        $this->db->insert('data_kontrak', $data);
        return TRUE;
    }

    // Di model M_emonitoring
    public function cek_nomor_kontrak($nomor_kontrak)
    {
        $this->db->where('no_kontrak', $nomor_kontrak);
        return $this->db->count_all_results('data_kontrak');
    }

    public function delete_datakontrak($idDatakontrak)
    {
        $idDatakontrak = intval($idDatakontrak);

        // Ambil nama file-file yang akan dihapus
        $filesToDelete = $this->db->select('dp_dokkontrak, dp_gbrrencana, dp_gbrasbuild, dp_mcnol, dp_lapharian, dp_lapmingguan, dp_lapbulanan, dp_mcseratus, dp_dokumentasi')
            ->where('id', $idDatakontrak)
            ->get('data_kontrak')
            ->row_array();

        // Hapus data kontrak dari tabel
        $this->db->where('id', $idDatakontrak);
        $this->db->delete('data_kontrak');

        // Hapus file-file terkait
        foreach ($filesToDelete as $field => $filename) {
            if (!empty($filename)) {
                $filepath = FCPATH . './upload/dokumendatakontrak/' . $filename;
                if (file_exists($filepath)) {
                    unlink($filepath);
                }
            }
        }
    }

    public function get_data_by_id($idDatakontrak)
    {
        $result = $this->db->where('id', $idDatakontrak)
            ->get('data_kontrak')
            ->row_array();

        return $result;
    }

    public function update_data_kontrak($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('data_kontrak', $data);
    }


    public function get_data_kontrak_by_tahun_sumberdana()
    {
        $this->db->select("tahun_sumberdana, COUNT(*) as jumlah_kontrak");
        $this->db->from("data_kontrak");
        $this->db->where_not_in("tahun_sumberdana", "0000");
        $this->db->group_by("tahun_sumberdana");
        $query = $this->db->get();
        return $query->result();
    }

    public function getGambarPathById($id)
    {
        $this->db->select('dp_dokkontrak, dp_gbrrencana, dp_gbrasbuild, dp_mcnol, dp_lapharian, dp_lapmingguan, dp_lapbulanan, dp_mcseratus, dp_dokumentasi');
        $this->db->from('data_kontrak');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return null;
    }
}
