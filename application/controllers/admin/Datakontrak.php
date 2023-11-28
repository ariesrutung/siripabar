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

                $noKontrak = $this->input->post('no_kontrak');

                $noKontrak1 = str_replace('/', '-', $noKontrak);
                $noKontrak2 = str_replace(' ', '', $noKontrak1);

                // $namaPaket = $this->input->post('nama_paket');
                $subfolderPath = FCPATH . './upload/dokumendatakontrak/' . $noKontrak2;

                // Jika subfolder belum ada, buat subfolder
                if (!is_dir($subfolderPath)) {
                    mkdir($subfolderPath, 0777, true);
                }

                $config['upload_path'] = $subfolderPath;  // Ganti path upload ke subfolder
                $this->upload->initialize($config);

                if ($this->upload->do_upload('userfile')) {
                    // Simpan nama file di dalam data
                    $data[$field] = $_FILES[$field]['name'];
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
        $data['kode_di'] = $this->input->post('kode_di');
        $data['user_id'] = $this->ion_auth->user()->row()->id;

        // Panggil fungsi untuk mengecek nomor kontrak
        if ($this->cek_nomor_kontrak($data['no_kontrak'])) {
            // Nomor kontrak sudah ada, tampilkan pesan error
            echo json_encode(array('status' => 'error', 'message' => 'Nomor kontrak sudah ada.'));
            return;
        }

        // Panggil fungsi insert_datakontrak pada model
        if ($this->M_emonitoring->insert_datakontrak($data)) {
            // Membuat folder sesuai dengan nama_paket
            $noKontrak = $this->input->post('no_kontrak');

            $noKontrak1 = str_replace('/', '-', $noKontrak);
            $noKontrak2 = str_replace(' ', '', $noKontrak1);

            $folder_path = './upload/dokumendatakontrak/' . $noKontrak2;
            if (!is_dir($folder_path)) {
                mkdir($folder_path, 0777, true);
            }

            // Tambah Activity User
            $user_id = $this->ion_auth->user()->row()->id;
            $user_name = $this->ion_auth->user()->row()->username;
            $user_act = "<strong>" . ucwords($user_name) . "</strong>" . " menambahkan Data Kontrak No. " . $this->input->post('no_kontrak');
            $this->loguserlib->add_activity($user_id, $user_act);
        }

        // Redirect ke halaman yang sesuai
        redirect('admin/datakontrak');
    }

    // Fungsi untuk mengecek nomor kontrak di database
    private function cek_nomor_kontrak($nomor_kontrak)
    {
        $result = $this->M_emonitoring->cek_nomor_kontrak($nomor_kontrak);
        return $result > 0; // Jika hasil lebih dari 0, berarti nomor kontrak sudah ada
    }

    // public function cek_nomor_kontrak_ajax()
    // {
    //     // Ambil nomor kontrak dari data POST atau GET
    //     $nomor_kontrak = $this->input->post('nomor_kontrak'); // Sesuaikan dengan metode pengiriman data Anda

    //     // Panggil metode pribadi
    //     $result = $this->cek_nomor_kontrak($nomor_kontrak);
    // }

    public function unduh_dokumen($nama_paket, $nama_file)
    {
        $subfolderPath = FCPATH . './upload/dokumendatakontrak/' . str_replace(' ', ' ', $nama_paket);
        $filePath = $subfolderPath . '/' . $nama_file;

        // Pastikan file ada sebelum diunduh
        if (file_exists($filePath)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $nama_file . '"');
            readfile($filePath);
        } else {
            echo "File not found.";
        }
    }

    public function delete_data_kontrak()
    {
        $idDatakontrak = $this->input->post('id_datakontrak');

        // Panggil model untuk menghapus berita
        $this->M_emonitoring->delete_datakontrak($idDatakontrak);

        $user_id = $this->ion_auth->user()->row()->id;
        $user_name = $this->ion_auth->user()->row()->username;
        $user_act = "<strong>" . ucwords($user_name) . "</strong>" . " menghapus Data Kontrak dengan id " . $idDatakontrak;
        $this->loguserlib->add_activity($user_id, $user_act);

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
        $id = $this->input->post('edit_id_datakontrak');
        $data = array(
            'nama_paket' => $this->input->post('edit_nama_paket'),
            'penyedia_jasa' => $this->input->post('edit_penyedia_jasa'),
            'no_kontrak' => $this->input->post('edit_no_kontrak'),
            'tgl_kontrak' => $this->input->post('edit_tgl_kontrak'),
            'no_spmk' => $this->input->post('edit_no_spmk'),
            'tgl_spmk' => $this->input->post('edit_tgl_spmk'),
            'sumber_dana' => $this->input->post('edit_sumber_dana'),
            'tahun_sumberdana' => $this->input->post('edit_tahun_sumberdana'),
            'nilai_kontrak' => $this->input->post('edit_nilai_kontrak'),
            'lok_kabupaten' => $this->input->post('edit_lok_kabupaten'),
            'lok_distrik' => $this->input->post('edit_lok_distrik'),
            'titik_koordinat' => $this->input->post('edit_titik_koordinat'),
            'output_produk' => $this->input->post('edit_output_produk'),
            'tgl_rencanapho' => $this->input->post('edit_tgl_rencanapho'),
            'masa_pelaksanaan' => $this->input->post('edit_masa_pelaksanaan'),
            'pk_januari' => $this->input->post('edit_pk_januari'),
            'pk_februari' => $this->input->post('edit_pk_februari'),
            'pk_maret' => $this->input->post('edit_pk_maret'),
            'pk_april' => $this->input->post('edit_pk_april'),
            'pk_mei' => $this->input->post('edit_pk_mei'),
            'pk_juni' => $this->input->post('edit_pk_juni'),
            'pk_juli' => $this->input->post('edit_pk_juli'),
            'pk_agustus' => $this->input->post('edit_pk_agustus'),
            'pk_september' => $this->input->post('edit_pk_september'),
            'pk_oktober' => $this->input->post('edit_pk_oktober'),
            'pk_november' => $this->input->post('edit_pk_november'),
            'pk_desember' => $this->input->post('edit_pk_desember'),
        );

        // Proses upload untuk setiap kolom yang memerlukan upload
        $uploadColumns = array('dp_dokkontrak', 'dp_gbrrencana', 'dp_gbrasbuild', 'dp_mcnol', 'dp_lapharian', 'dp_lapmingguan', 'dp_lapbulanan', 'dp_mcseratus', 'dp_dokumentasi');

        foreach ($uploadColumns as $column) {
            // Memproses file jika ada yang diunggah
            if (!empty($_FILES['edit_' . $column]['name'])) {
                // Tentukan path folder yang akan menjadi tujuan upload atau update
                $namaPaket = $data['nama_paket'];
                $folderPath = FCPATH . 'upload/dokumendatakontrak/' . $namaPaket;
                $config['upload_path'] = $folderPath;
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 10000;

                // Pastikan folder tujuan sudah ada atau buat folder baru
                if (!is_dir($folderPath)) {
                    mkdir($folderPath, 0777, true);
                }

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('edit_' . $column)) {
                    // Hapus file lama dari sistem file
                    $dokLama = $this->M_emonitoring->getGambarPathById($id);
                    if (!empty($dokLama->$column)) {
                        $filePath = FCPATH . 'upload/dokumendatakontrak/' . $namaPaketFolder . '/' . $dokLama->$column;
                        if (file_exists($filePath) && unlink($filePath)) {
                            echo 'File lama berhasil dihapus.';
                        } else {
                            echo 'Gagal menghapus file lama.';
                        }
                    }

                    // Perbarui nama file di database
                    $data[$column] = $_FILES['edit_' . $column]['name'];
                } else {
                    // Handle error jika upload gagal
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    return;
                }
            }
        }

        $this->M_emonitoring->update_data_kontrak($id, $data);
        // Tambah Activity User
        $user_id = $this->ion_auth->user()->row()->id;
        $user_name = $this->ion_auth->user()->row()->username;
        $user_act = "<strong>" . ucwords($user_name) . "</strong>" . " mengubah Data Kontrak No. " . $this->input->post('edit_no_kontrak');
        $this->loguserlib->add_activity($user_id, $user_act);
        redirect('admin/datakontrak');
    }



    public function get_distrik_by_kabupaten()
    {
        $kode_kab = $this->input->post('kode_kab');
        $data = $this->M_wilayah->get_distrik_by_kabupaten($kode_kab);
        echo json_encode($data);
    }

    public function getGambarDetail($id)
    {
        // Ambil data gambar dari database berdasarkan ID
        $gambarPath = $this->M_emonitoring->getGambarPathById($id);

        // Lakukan validasi jika data tidak ditemukan atau kosong
        if ($gambarPath) {
            // Kirim path gambar sebagai response
            echo json_encode([
                'dp_dokkontrak' => $gambarPath->dp_dokkontrak,
                'dp_gbrrencana' => $gambarPath->dp_gbrrencana,
                'dp_gbrasbuild' => $gambarPath->dp_gbrasbuild,
                'dp_mcnol' => $gambarPath->dp_mcnol,
                'dp_lapharian' => $gambarPath->dp_lapharian,
                'dp_lapmingguan' => $gambarPath->dp_lapmingguan,
                'dp_lapbulanan' => $gambarPath->dp_lapbulanan,
                'dp_mcseratus' => $gambarPath->dp_mcseratus,
                'dp_dokumentasi' => $gambarPath->dp_dokumentasi,
            ]);
        } else {
            // Kirim response jika gambar tidak ditemukan
            echo json_encode(['gambarPath' => null]);
        }
    }
}
