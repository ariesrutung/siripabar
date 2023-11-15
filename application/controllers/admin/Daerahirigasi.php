<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_daerahirigasi', 'M_wilayah']);
    }
    public function index()
    {
        $data['wil_kab'] = $this->M_wilayah->get_all_kab();
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_all();

        $data['title'] = 'DAERAH IRIGASI';
        $data['_view'] = "admin/daerahirigasi";
        $this->load->view('admin/layout', $data);
    }


    public function getGambarDetail($id)
    {
        // Ambil data gambar dari database berdasarkan ID
        $gambarPath = $this->M_daerahirigasi->getGambarPathById($id);

        // Lakukan validasi jika data tidak ditemukan atau kosong
        if ($gambarPath) {
            // Tentukan path lengkap gambar
            $gambarFullPath = base_url('public/company/img/skema/') . $gambarPath;

            // Kirim path gambar sebagai response
            echo json_encode(['gambarPath' => $gambarFullPath]);
        } else {
            // Kirim response jika gambar tidak ditemukan
            echo json_encode(['gambarPath' => null]);
        }
    }

    public function updateData($id)
    {
        // Ambil data dari form
        $data = array(
            'provinsi' => $this->input->post('provinsi'),
            'kabupaten_di' => $this->input->post('kabupaten_di'),
            'nama_di' => $this->input->post('nama_di'),
            'kode_di' => $this->input->post('kode_di'),
            'jenis_di' => $this->input->post('jenis_di'),
            'luas_fungsional' => $this->input->post('luas_fungsional'),
            'luas_alih_fungsi_lahan' => $this->input->post('luas_alih_fungsi_lahan'),
            'kewenangan' => $this->input->post('kewenangan'),
            // ... (tambahkan bidang lainnya sesuai kebutuhan)
        );

        // Update data di database
        $this->M_daerahirigasi->updateData($id, $data);

        // Kirim respons ke Ajax
        // echo json_encode(array('status' => 'success'));
    }

    public function tambah_dataskemairigasi()
    {
        $selected_nama_kabupaten = $this->input->post('kabupaten_di_nama');
        $selected_nama_kabupaten_formatted = ucwords(strtolower($selected_nama_kabupaten));
        $this->load->library('upload');
        // Konfigurasi upload untuk gambar di daerah irigasi
        $config_daerah_irigasi['upload_path'] = './upload/datairigasi/';
        $config_daerah_irigasi['allowed_types'] = 'gif|jpg|png';
        $config_daerah_irigasi['max_size'] = 10000;

        $this->upload->initialize($config_daerah_irigasi);

        // Formulir untuk Daerah Irigasi
        $dataDaerahIrigasi = array(
            'provinsi' => $this->input->post('provinsi'),
            'kabupaten' => $selected_nama_kabupaten_formatted,
            'nama_di' => $this->input->post('nama_di'),
            'kode_di' => $this->input->post('kode_di'),
            'jenis_di' => $this->input->post('jenis_di'),
            'luas_fungsional' => $this->input->post('luas_fungsional'),
            'luas_alih_fungsi_lahan' => $this->input->post('luas_alih_fungsi_lahan'),
            'kewenangan' => $this->input->post('kewenangan'),
        );

        // Upload gambar di daerah irigasi
        if ($this->upload->do_upload('gambar_di')) {
            $dataDaerahIrigasi['gambar'] = $this->upload->data('file_name');

            // Simpan data daerah irigasi ke tabel
            $this->M_daerahirigasi->insert_daerah_irigasi($dataDaerahIrigasi);

            // Konfigurasi upload untuk gambar di skema
            $config_skema['upload_path'] = './public/company/img/skema/';
            $config_skema['allowed_types'] = 'gif|jpg|png';
            $config_skema['max_size'] = 10000;

            // Inisialisasi objek upload untuk skema
            $this->upload->initialize($config_skema);

            // Formulir untuk Skema
            $dataSkema = array(
                'jumlah_aset' => $this->input->post('jumlah_aset'),
                'jumlah_subsistem' => $this->input->post('jumlah_subsistem'),
                'data_aknop' => $this->input->post('data_aknop'),
                'saluran_induk' => $this->input->post('saluran_induk'),
                'saluran_muka' => $this->input->post('saluran_muka'),
                'pengelak_banjir' => $this->input->post('pengelak_banjir'),
                'saluran_pembuang_tersier' => $this->input->post('saluran_pembuang_tersier'),
                'saluran_sekunder' => $this->input->post('saluran_sekunder'),
                'saluran_pembuang' => $this->input->post('saluran_pembuang'),
                'saluran_tersier' => $this->input->post('saluran_tersier'),
                'saluran_suplesi' => $this->input->post('saluran_suplesi'),
                'saluran_gendong' => $this->input->post('saluran_gendong'),
                'kode_di' => $this->input->post('kode_di'),
                'saluran_kuarter' => $this->input->post('saluran_kuarter'),
            );

            // Upload gambar di skema
            if ($this->upload->do_upload('dokumen_skema')) {
                $dataSkema['dokumen'] = $this->upload->data('file_name');

                // Simpan data skema ke tabel
                $this->M_daerahirigasi->insert_skema($dataSkema);

                redirect('admin/daerahirigasi');
            } else {
                // Jika upload gambar di skema gagal, tampilkan pesan kesalahan
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            // Jika upload gambar di daerah irigasi gagal, tampilkan pesan kesalahan
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
    }

    public function delete_data()
    {
        $id = $this->input->post('id');

        // Nama tabel untuk daerah_irigasi
        $this->M_daerahirigasi->delete_data($id, 'daerah_irigasi');

        // Nama tabel untuk skema
        $this->M_daerahirigasi->delete_data($id, 'skema');

        // Kirim respons ke klien (misalnya JSON)
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
    }
}
