<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakontrak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);

        $this->load->model(['M_emonitoring', 'M_daerahirigasi', 'M_setting', 'M_wilayah']);
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

        // $data['daerahirigasi'] = $this->M_daerahirigasi->get_all();
        $data['datakontrak'] = $this->M_emonitoring->get_all_datakontrak();
        $data['title'] = 'DATA KONTRAK';
        $data['_view'] = "admin/datakontrak";
        $this->load->view('admin/layout', $data);
    }

    public function tambah_datakontrak()
    {
        $config['upload_path'] = FCPATH . './upload/dtkontrak';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // Daftar nama field input gambar yang ingin Anda proses
        $gambar_fields = array(
            'dokumentasi',
            'dp_dokkontrak',
            'dp_gbrrencana',
            'dp_lapharian',
            'dp_lapmingguan',
            'dp_lapbulanan',
            'dp_dokumentasi',
            'dp_lapharian',
            'dp_gbrasbuild',
            'dp_mcnol',
            'dp_mcseratus',
            'kurvas',
        );

        // Inisialisasi data array
        $data = array();

        // Melakukan proses upload gambar untuk setiap field
        foreach ($gambar_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $_FILES['userfile'] = $_FILES[$field];

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

        // Panggil fungsi insert_datakontrak pada model
        $this->M_emonitoring->insert_datakontrak($data);

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
}
