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
    // public function get_data_by_id($idDatakontrak)
    // {
    //     return $this->db->where('id', $idDatakontrak)
    //         ->get('data_kontrak')
    //         ->row_array();
    // }

    public function get_data_by_id($idDatakontrak)
    {
        $result = $this->db->where('id', $idDatakontrak)
            ->get('data_kontrak')
            ->row_array();

        return $result;
    }

    public function update_datakontrak(
        $idDatakontrak,
        $namaPaket,
        $penyediaJasa,
        $noKontrak,
        $tglKontrak,
        $noSpmk,
        $tglSpmk,
        $sumberDana,
        $tahunSumberDana,
        $nilaiKontrak,
        $lokKabupaten,
        $lokDistrik,
        $titikKoordinat,
        $outputProduk,
        $tglRencanaPho,
        $masaPelaksanaan,
        $pkJanuari,
        $pkFebruari,
        $pkMaret,
        $pkApril,
        $pkMei,
        $pkJuni,
        $pkJuli,
        $pkAgustus,
        $pkSeptember,
        $pkOktober,
        $pkNovember,
        $pkDesember,
        $dpDokkontrak,
        $dpGbrRencana,
        $dpGbrAsbuild,
        $dpMcnol,
        $dp_LapHarian,
        $dpLapMingguan,
        $dpLapBulanan,
        $dpMcSeratus,
        $dpDokumentasi,
        $kodeDi,
        $userId
    ) {
        $data = array(
            'nama_paket' => $namaPaket,
            'penyedia_jasa' => $penyediaJasa,
            'no_kontrak' => $noKontrak,
            'tgl_kontrak' => $tglKontrak,
            'no_spmk' => $noSpmk,
            'tgl_spmk' => $tglSpmk,
            'sumber_dana' => $sumberDana,
            'tahun_sumberdana' => $tahunSumberDana,
            'nilai_kontrak' => $nilaiKontrak,
            'lok_kabupaten' => $lokKabupaten,
            'lok_distrik' => $lokDistrik,
            'titik_koordinat' => $titikKoordinat,
            'output_produk' => $outputProduk,
            'tgl_rencanapho' => $tglRencanaPho,
            'masa_pelaksanaan' => $masaPelaksanaan,
            'pk_januari' => $pkJanuari,
            'pk_februari' => $pkFebruari,
            'pk_maret' => $pkMaret,
            'pk_april' => $pkApril,
            'pk_mei' => $pkMei,
            'pk_juni' => $pkJuni,
            'pk_juli' => $pkJuli,
            'pk_agustus' => $pkAgustus,
            'pk_september' => $pkSeptember,
            'pk_oktober' => $pkOktober,
            'pk_november' => $pkNovember,
            'pk_desember' => $pkDesember,
            'dp_dokkontrak' => $dpDokkontrak,
            'dp_gbrrencana' => $dpGbrRencana,
            'dp_gbrasbuild' => $dpGbrAsbuild,
            'dp_mcnol' => $dpMcnol,
            'dp_lapharian' => $dp_LapHarian,
            'dp_lapmingguan' => $dpLapMingguan,
            'dp_lapbulanan' => $dpLapBulanan,
            'dp_mcseratus' => $dpMcSeratus,
            'dp_dokumentasi' => $dpDokumentasi,
            'kode_di' => $kodeDi,
            'user_id' => $userId
        );

        $this->db->where('id', $idDatakontrak);
        $this->db->update('data_kontrak', $data);
    }

    public function update_datakontrak_files($idDatakontrak, $data)
    {
        $this->db->where('id', $idDatakontrak);
        $this->db->set($data);
        $this->db->update('data_kontrak');
    }

    public function get_data_kontrak_by_tahun_sumberdana()
    {
        $this->db->select("tahun_sumberdana, COUNT(*) as jumlah_kontrak");
        $this->db->from("data_kontrak");
        $this->db->group_by("tahun_sumberdana");
        $query = $this->db->get();
        return $query->result();
    }
}
