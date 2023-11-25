<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
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
        $this->load->library(['ion_auth', 'form_validation', 'loguserlib']);

        $this->load->model(['M_daerahirigasi', 'M_wilayah', 'M_log']);
    }
    public function index()
    {
        $data['wil_kab'] = $this->M_wilayah->get_all_kab();
        $user_groups = $this->ion_auth->get_users_groups()->row();

        if ($user_groups->name == "admin") {
            $data['daerahirigasi'] = $this->M_daerahirigasi->get_di();
        } elseif ($user_groups->name == "operator") {
            $data['daerahirigasi'] = $this->M_daerahirigasi->get_di_by_user_id($this->ion_auth->user()->row()->id);
        }

        $data['title'] = 'DAERAH IRIGASI';
        $data['_view'] = "admin/daerahirigasi";
        $this->load->view('admin/layout', $data);
    }


    public function getGambarDetail($kode_di)
    {
        // Ambil data gambar dari database berdasarkan ID
        $gambarPath = $this->M_daerahirigasi->getGambarPathById($kode_di);

        // Lakukan validasi jika data tidak ditemukan atau kosong
        if ($gambarPath) {
            // Tentukan path lengkap gambar
            $gambarFullPath = base_url('upload/datairigasi/') . $gambarPath;

            // Kirim path gambar sebagai response
            echo json_encode(['gambarPath' => $gambarFullPath]);
        } else {
            // Kirim response jika gambar tidak ditemukan
            echo json_encode(['gambarPath' => null]);
        }
    }

    public function getDokumenDetail($kode_di)
    {
        // Ambil data gambar dari database berdasarkan ID
        $gambarPath = $this->M_daerahirigasi->getDokPathById($kode_di);

        // Lakukan validasi jika data tidak ditemukan atau kosong
        if ($gambarPath) {
            // Tentukan path lengkap gambar
            $gambarFullPath = base_url('upload/datairigasi/') . $gambarPath;

            // Kirim path gambar sebagai response
            echo json_encode(['gambarPath' => $gambarFullPath]);
        } else {
            // Kirim response jika gambar tidak ditemukan
            echo json_encode(['gambarPath' => null]);
        }
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

        // $user_name = $this->session->userdata('username');
        // $this->M_log->add("<strong>" . $user_name . "</strong> menambahkan 1 daerah irigasi di" . $selected_nama_kabupaten);


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
            'user_id' => $this->ion_auth->user()->row()->id
        );

        // Upload gambar di daerah irigasi
        if ($this->upload->do_upload('gambar_di')) {
            $dataDaerahIrigasi['gambar'] = $this->upload->data('file_name');

            // Simpan data daerah irigasi ke tabel
            $this->M_daerahirigasi->insert_daerah_irigasi($dataDaerahIrigasi);

            // Tambah Activity User
            $user_id = $this->ion_auth->user()->row()->id;
            $user_name = $this->ion_auth->user()->row()->username;
            $user_act = $user_name . " menambahkan Daerah Irigasi " . $this->input->post('nama_di') . " di " . $selected_nama_kabupaten_formatted;
            $this->loguserlib->add_activity($user_id, $user_act);
            // Konfigurasi upload untuk gambar di skema
            $config_skema['upload_path'] = './upload/datairigasi/';
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

    public function updateData()
    {
        $data = array(
            'id' => $this->input->post('edit_id_daerahirigasi'),
            'provinsi' => $this->input->post('edit_provinsi'),
            'kabupaten' => $this->input->post('edit_kabupaten'),
            'nama_di' => $this->input->post('edit_nama_di'),
            'kode_di' => $this->input->post('edit_kode_di'),
            'jenis_di' => $this->input->post('edit_jenis_di'),
            'luas_fungsional' => $this->input->post('edit_luas_fungsional'),
            'luas_alih_fungsi_lahan' => $this->input->post('edit_luas_alih_fungsi_lahan'),
            'kewenangan' => $this->input->post('edit_kewenangan'),
            'gambar' => $this->input->post('edit_gambar'),
        );

        // Update data in the 'daerah_irigasi' table
        $this->M_daerahirigasi->updateDaerahIrigasi($data);

        // Update data in the 'skema' table
        $skemaData = array(
            'id' => $this->input->post('edit_id_daerahirigasi'),
            'jumlah_aset' => $this->input->post('edit_jumlah_aset'),
            'jumlah_subsistem' => $this->input->post('edit_jumlah_subsistem'),
            'data_aknop' => $this->input->post('edit_data_aknop'),
            'saluran_induk' => $this->input->post('edit_saluran_induk'),
            'saluran_muka' => $this->input->post('edit_saluran_muka'),
            'pengelak_banjir' => $this->input->post('edit_pengelak_banjir'),
            'saluran_pembuang_tersier' => $this->input->post('edit_saluran_pembuang_tersier'),
            'saluran_sekunder' => $this->input->post('edit_saluran_sekunder'),
            'saluran_pembuang' => $this->input->post('edit_saluran_pembuang'),
            'saluran_tersier' => $this->input->post('edit_saluran_tersier'),
            'saluran_suplesi' => $this->input->post('edit_saluran_suplesi'),
            'saluran_gendong' => $this->input->post('edit_saluran_gendong'),
            'saluran_kuarter' => $this->input->post('edit_saluran_kuarter'),
        );

        $this->M_daerahirigasi->updateSkemaDaerahIrigasi($skemaData);

        redirect('admin/daerahirigasi'); // Redirect to the desired page after updating
    }

    private function uploadImage($inputName)
    {
        $config['upload_path'] = './upload/datairigasi/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($inputName)) {
            return $this->upload->data('file_name');
        } else {
            $error = $this->upload->display_errors();
            // Handle the error as needed (e.g., show an error message)
            $this->session->set_flashdata('error', $error);
            redirect('admin/daerahirigasi'); // Redirect back to the form
        }
    }

    public function delete_data()
    {
        $user_name = $this->session->userdata('username');
        $this->M_log->add("<strong>" . $user_name . "</strong> menghapus 1 daerah irigasi di");

        $id = $this->input->post('id');

        // Nama tabel untuk daerah_irigasi
        $this->M_daerahirigasi->delete_data($id, 'daerah_irigasi');

        // Nama tabel untuk skema
        $this->M_daerahirigasi->delete_data($id, 'skema');

        // Kirim respons ke klien (misalnya JSON)
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
    }
}
