<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakontrak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('Auth');
        } else {
            // $userid = $this->ion_auth->get_user_id();
            $user_groups = $this->ion_auth->get_users_groups()->row();
            if ($user_groups->name == "members") {
                redirect('Auth');
            }
        }
        $this->load->library(['ion_auth', 'form_validation', 'Loguserlib']);

        $this->load->model(['M_emonitoring', 'M_daerahirigasi', 'M_setting', 'M_wilayah', 'M_log']);
    }

    public function index()
    {
        $data['wil_kab'] = $this->M_wilayah->get_all_kab();
        $setting = $this->M_setting->list_setting();
        $this->load->library('googlemaps');
        $config['center'] = "$setting->latitude, $setting->longitude";
        $config['zoom'] = "$setting->zoom";
        $config['apiKey'] = "$setting->apikey";
        $this->googlemaps->initialize($config);

        $marker['position'] = "$setting->latitude, $setting->longitude";
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);

        $map = $this->googlemaps->create_map();
        $data['map'] = $map;
        $user_groups = $this->ion_auth->get_users_groups()->row();

        if ($user_groups->name == "admin") {
            $data['datakontrak'] = $this->M_emonitoring->get_all_datakontrak();
        } elseif ($user_groups->name == "operator") {
            $data['datakontrak'] = $this->M_emonitoring->get_dk_by_user_id($this->ion_auth->user()->row()->id);
        }

        $data['title'] = 'DATA KONTRAK';
        $data['_view'] = "admin/datakontrak";
        $this->load->view('admin/layout', $data);
    }

    public function tambah_datakontrak()
    {

        $config['upload_path'] = FCPATH . './upload/dokumendatakontrak';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // Daftar nama field input gambar yang ingin Anda proses
        $gambar_fields = array(
            'dp_dokkontrak',
            'dp_gbrrencana',
            'dp_lapharian',
            'dp_lapmingguan',
            'dp_lapbulanan',
            'dp_dokumentasi',
            'dp_gbrasbuild',
            'dp_mcnol',
            'dp_mcseratus',
        );

        // Inisialisasi data array
        $data = array();

        // Melakukan proses upload gambar untuk setiap field
        foreach ($gambar_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $_FILES['userfile'] = $_FILES[$field];

                // Menambahkan kondisi untuk mereplace spasi dengan underscore pada nama file
                $config['file_name'] = str_replace(' ', '_', $_FILES['userfile']['name']);

                if ($this->upload->do_upload('userfile')) {
                    $data[$field] = $this->upload->file_name;
                } else {
                    // Tangani kesalahan unggah, misalnya:
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    return; // Hentikan proses jika terjadi kesalahan unggah
                }
            }
        }
        // Proses input data non-gambar   
        $data['nama_paket'] = $this->input->post('nama_paket');
        $data['penyedia_jasa'] = $this->input->post('penyedia_jasa');
        $data['no_kontrak'] = $this->input->post('no_kontrak');
        $data['tgl_kontrak'] = $this->input->post('tgl_kontrak');
        $data['no_spmk'] = $this->input->post('no_spmk');
        $data['tgl_spmk'] = $this->input->post('tgl_spmk');
        $data['sumber_dana'] = $this->input->post('sumber_dana');
        $data['tahun_sumberdana'] = $this->input->post('tahun_sumberdana');
        $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
        $data['lok_kabupaten'] = $this->input->post('lok_kabupaten');
        $data['lok_distrik'] = $this->input->post('lok_distrik');
        $data['titik_koordinat'] = $this->input->post('latitude') . ', ' . $this->input->post('longitude');
        $data['output_produk'] = $this->input->post('output_produk');
        $data['tgl_rencanapho'] = $this->input->post('tgl_rencanapho');
        $data['masa_pelaksanaan'] = $this->input->post('masa_pelaksanaan');
        $data['pk_januari'] = $this->input->post('pk_januari');
        $data['pk_februari'] = $this->input->post('pk_februari');
        $data['pk_maret'] = $this->input->post('pk_maret');
        $data['pk_april'] = $this->input->post('pk_april');
        $data['pk_mei'] = $this->input->post('pk_mei');
        $data['pk_juni'] = $this->input->post('pk_juni');
        $data['pk_juli'] = $this->input->post('pk_juli');
        $data['pk_agustus'] = $this->input->post('pk_agustus');
        $data['pk_september'] = $this->input->post('pk_september');
        $data['pk_oktober'] = $this->input->post('pk_oktober');
        $data['pk_november'] = $this->input->post('pk_november');
        $data['pk_desember'] = $this->input->post('pk_desember');
        // $data['kurvas'] = $this->input->post('kurvas');
        $data['kode_di'] = $this->input->post('kode_di');
        $data['user_id'] = $this->ion_auth->user()->row()->id;


        // Panggil fungsi insert_datakontrak pada model
        if ($this->M_emonitoring->insert_datakontrak($data)) {
            // $this->Loguser->add_activity('6', 'menambahkan data kontrak');
            // Tambah Activity User
            $user_id = $this->ion_auth->user()->row()->id;
            $user_name = $this->ion_auth->user()->row()->username;
            $user_act = "<strong>" . ucwords($user_name) . "</strong>" . " menambahkan Data Kontrak No. " . $this->input->post('no_kontrak');
            $this->loguserlib->add_activity($user_id, $user_act);
        }
        // Redirect ke halaman yang sesuai
        redirect('admin/datakontrak');
    }

    function add_ajax_kec($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 8 AND LEFT(kode,5) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kecamatan/Distrik - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    public function download_dok_datakontrak($namafile)
    {
        $url = "upload/dokumendatakontrak/" . $namafile;
        force_download($url, NULL);
    }

    public function delete_data_kontrak()
    {
        $user_name = $this->session->userdata('username');
        $this->M_log->add("<strong>" . $user_name . "</strong> menghapus 1 data kontrak");

        $idDatakontrak = $this->input->post('id_datakontrak');

        // Panggil model untuk menghapus berita
        $this->M_emonitoring->delete_datakontrak($idDatakontrak);

        // Redirect ke halaman berita setelah penghapusan
        redirect('admin/datakontrak');
    }

    public function get_data_by_id()
    {
        $data['wil_kab'] = $this->M_wilayah->get_all_kab();
        $setting = $this->M_setting->list_setting();
        $this->load->library('googlemaps');
        $config['center'] = "$setting->latitude, $setting->longitude";
        $config['zoom'] = "$setting->zoom";
        $config['apiKey'] = "$setting->apikey";
        $this->googlemaps->initialize($config);

        $marker['position'] = "$setting->latitude, $setting->longitude";
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);

        $map = $this->googlemaps->create_map();
        $data['map'] = $map;

        $idDatakontrak = $this->input->post('id_datakontrak');
        $data['result'] = $this->M_emonitoring->get_data_by_id($idDatakontrak);

        // Load view dengan data yang diterima dari model
        $html = $this->load->view('admin/datakontrak_form', $data, TRUE);

        // Mengembalikan data HTML ke JavaScript
        echo json_encode(array('html' => $html));
    }

    public function update_data()
    {
        $user_name = $this->session->userdata('username');
        $this->M_log->add("<strong>" . $user_name . "</strong> mengubah 1 data kontrak");

        $idDatakontrak = $this->input->post('id_datakontrak');
        $data = $this->M_emonitoring->get_data_by_id($idDatakontrak);

        // Tangkap data yang dikirimkan dari formulir
        $namaPaket = $this->input->post('nama_paket');
        $penyediaJasa = $this->input->post('penyedia_jasa');
        $noKontrak = $this->input->post('no_kontrak');
        $tglKontrak = $this->input->post('tgl_kontrak');
        $noSpmk = $this->input->post('no_spmk');
        $tglSpmk = $this->input->post('tgl_spmk');
        $sumberDana = $this->input->post('sumber_dana');
        $tahunSumberDana = $this->input->post('tahun_sumberdana');
        $nilaiKontrak = $this->input->post('nilai_kontrak');
        $lokKabupaten = $this->input->post('lok_kabupaten');
        $lokDistrik = $this->input->post('lok_distrik');
        $titikKoordinat = $this->input->post('titik_koordinat');
        $outputProduk = $this->input->post('output_produk');
        $tglRencanaPho = $this->input->post('tgl_rencanapho');
        $masaPelaksanaan = $this->input->post('masa_pelaksanaan');
        $pkJanuari = $this->input->post('pk_januari');
        $pkFebruari = $this->input->post('pk_februari');
        $pkMaret = $this->input->post('pk_maret');
        $pkApril = $this->input->post('pk_april');
        $pkMei = $this->input->post('pk_mei');
        $pkJuni = $this->input->post('pk_juni');
        $pkJuli = $this->input->post('pk_juli');
        $pkAgustus = $this->input->post('pk_agustus');
        $pkSeptember = $this->input->post('pk_september');
        $pkOktober = $this->input->post('pk_oktober');
        $pkNovember = $this->input->post('pk_november');
        $pkDesember = $this->input->post('pk_desember');
        $dpDokkontrak = $this->input->post('edit_dp_dokkontrak');
        $dpGbrRencana = $this->input->post('edit_dp_gbrrencana');
        $dpGbrAsbuild = $this->input->post('edit_dp_gbrasbuild');
        $dpMcnol = $this->input->post('edit_dp_mcnol');
        $dp_LapHarian = $this->input->post('edit_dp_lapharian');
        $dpLapMingguan = $this->input->post('edit_dp_lapmingguan');
        $dpLapBulanan = $this->input->post('edit_dp_lapbulanan');
        $dpMcSeratus = $this->input->post('edit_dp_mcseratus');
        $dpDokumentasi = $this->input->post('edit_dp_dokumentasi');
        $kodeDi = $this->input->post('kode_di');
        $userId = $this->ion_auth->user()->row()->id;

        // Panggil model untuk melakukan pembaruan data
        $this->M_emonitoring->update_datakontrak(
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
        );
        // Redirect ke halaman yang sesuai atau kirim respons JSON sesuai kebutuhan
        redirect('admin/datakontrak');
    }
}
