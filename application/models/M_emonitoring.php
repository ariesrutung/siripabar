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
        $kodeDi
        // $userId
    ) {
        // Get the existing data from the database
        $existingData = $this->db->get_where('data_kontrak', array('id' => $idDatakontrak))->row_array();

        // Compare each field with the new value and update only if it has changed
        $data = array(
            'nama_paket' => ($namaPaket != $existingData['nama_paket']) ? $namaPaket : $existingData['nama_paket'],
            'penyedia_jasa' => ($penyediaJasa != $existingData['penyedia_jasa']) ? $penyediaJasa : $existingData['penyedia_jasa'],
            'no_kontrak' => ($noKontrak != $existingData['no_kontrak']) ? $noKontrak : $existingData['no_kontrak'],
            'tgl_kontrak' => ($tglKontrak != $existingData['tgl_kontrak']) ? $tglKontrak : $existingData['tgl_kontrak'],
            'no_spmk' => ($noSpmk != $existingData['no_spmk']) ? $noSpmk : $existingData['no_spmk'],
            'tgl_spmk' => ($tglSpmk != $existingData['tgl_spmk']) ? $tglSpmk : $existingData['tgl_spmk'],
            'sumber_dana' => ($sumberDana != $existingData['sumber_dana']) ? $sumberDana : $existingData['sumber_dana'],
            'tahun_sumberdana' => ($tahunSumberDana != $existingData['tahun_sumberdana']) ? $tahunSumberDana : $existingData['tahun_sumberdana'],
            'nilai_kontrak' => ($nilaiKontrak != $existingData['nilai_kontrak']) ? $nilaiKontrak : $existingData['nilai_kontrak'],
            'lok_kabupaten' => ($lokKabupaten != $existingData['lok_kabupaten']) ? $lokKabupaten : $existingData['lok_kabupaten'],
            'lok_distrik' => ($lokDistrik != $existingData['lok_distrik']) ? $lokDistrik : $existingData['lok_distrik'],
            'titik_koordinat' => ($titikKoordinat != $existingData['titik_koordinat']) ? $titikKoordinat : $existingData['titik_koordinat'],
            'output_produk' => ($outputProduk != $existingData['output_produk']) ? $outputProduk : $existingData['output_produk'],
            'tgl_rencanapho' => ($tglRencanaPho != $existingData['tgl_rencanapho']) ? $tglRencanaPho : $existingData['tgl_rencanapho'],
            'masa_pelaksanaan' => ($masaPelaksanaan != $existingData['masa_pelaksanaan']) ? $masaPelaksanaan : $existingData['masa_pelaksanaan'],
            'pk_januari' => ($pkJanuari != $existingData['pk_januari']) ? $pkJanuari : $existingData['pk_januari'],
            'pk_februari' => ($pkFebruari != $existingData['pk_februari']) ? $pkFebruari : $existingData['pk_februari'],
            'pk_maret' => ($pkMaret != $existingData['pk_maret']) ? $pkMaret : $existingData['pk_maret'],
            'pk_april' => ($pkApril != $existingData['pk_april']) ? $pkApril : $existingData['pk_april'],
            'pk_mei' => ($pkMei != $existingData['pk_mei']) ? $pkMei : $existingData['pk_mei'],
            'pk_juni' => ($pkJuni != $existingData['pk_juni']) ? $pkJuni : $existingData['pk_juni'],
            'pk_juli' => ($pkJuli != $existingData['pk_juli']) ? $pkJuli : $existingData['pk_juli'],
            'pk_agustus' => ($pkAgustus != $existingData['pk_agustus']) ? $pkAgustus : $existingData['pk_agustus'],
            'pk_september' => ($pkSeptember != $existingData['pk_september']) ? $pkSeptember : $existingData['pk_september'],
            'pk_oktober' => ($pkOktober != $existingData['pk_oktober']) ? $pkOktober : $existingData['pk_oktober'],
            'pk_november' => ($pkNovember != $existingData['pk_november']) ? $pkNovember : $existingData['pk_november'],
            'pk_desember' => ($pkDesember != $existingData['pk_desember']) ? $pkDesember : $existingData['pk_desember'],
            'dp_dokkontrak' => ($dpDokkontrak != $existingData['dp_dokkontrak']) ? $dpDokkontrak : $existingData['dp_dokkontrak'],
            'dp_gbrrencana' => ($dpGbrRencana != $existingData['dp_gbrrencana']) ? $dpGbrRencana : $existingData['dp_gbrrencana'],
            'dp_gbrasbuild' => ($dpGbrAsbuild != $existingData['dp_gbrasbuild']) ? $dpGbrAsbuild : $existingData['dp_gbrasbuild'],
            'dp_mcnol' => ($dpMcnol != $existingData['dp_mcnol']) ? $dpMcnol : $existingData['dp_mcnol'],
            'dp_lapharian' => ($dp_LapHarian != $existingData['dp_lapharian']) ? $dp_LapHarian : $existingData['dp_lapharian'],
            'dp_lapmingguan' => ($dpLapMingguan != $existingData['dp_lapmingguan']) ? $dpLapMingguan : $existingData['dp_lapmingguan'],
            'dp_lapbulanan' => ($dpLapBulanan != $existingData['dp_lapbulanan']) ? $dpLapBulanan : $existingData['dp_lapbulanan'],
            'dp_mcseratus' => ($dpMcSeratus != $existingData['dp_mcseratus']) ? $dpMcSeratus : $existingData['dp_mcseratus'],
            'dp_dokumentasi' => ($dpDokumentasi != $existingData['dp_dokumentasi']) ? $dpDokumentasi : $existingData['dp_dokumentasi'],
            'kode_di' => ($kodeDi != $existingData['kode_di']) ? $kodeDi : $existingData['kode_di']
            // 'user_id' => $userId
        );

        // Get the existing data from the database
        $existingData = $this->db->get_where('data_kontrak', array('id' => $idDatakontrak))->row_array();

        // Debugging: Output existing and new data for comparison
        echo "Existing Data: ";
        print_r($existingData);

        // Compare each field with the new value and update only if it has changed
        $data = array(
            'nama_paket' => ($namaPaket != $existingData['nama_paket']) ? $namaPaket : $existingData['nama_paket'],
            'penyedia_jasa' => ($penyediaJasa != $existingData['penyedia_jasa']) ? $penyediaJasa : $existingData['penyedia_jasa'],
            // Repeat this for each field
        );

        // Debugging: Output the new data after comparison
        echo "New Data: ";
        print_r($data);

        $this->db->where('id', $idDatakontrak);
        $this->db->update('data_kontrak', $data);
    }

    // public function update_datakontrak_files($idDatakontrak, $data)
    // {
    //     $this->db->where('id', $idDatakontrak);
    //     $this->db->set($data);
    //     $this->db->update('data_kontrak');
    // }

    public function get_data_kontrak_by_tahun_sumberdana()
    {
        $this->db->select("tahun_sumberdana, COUNT(*) as jumlah_kontrak");
        $this->db->from("data_kontrak");
        $this->db->where_not_in("tahun_sumberdana", "0000");
        $this->db->group_by("tahun_sumberdana");
        $query = $this->db->get();
        return $query->result();
    }
}
