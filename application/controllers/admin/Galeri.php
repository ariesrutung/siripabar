<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model('M_galeri');
    }

    public function index()
    {
        $data['kategori_folders'] = $this->M_galeri->get_kategori_folders();
        $data['galerie'] = $this->M_galeri->get_galeri();
        $data['title'] = 'GALERI';
        $data['_view'] = "admin/galerinew";
        $this->load->view('admin/layout', $data);
    }

    public function tambah()
    {
        $namaFolder = $this->input->post('nama_folder');
        $namaGaleri = $this->input->post('nama_galeri');

        // Ganti spasi dengan underscore dalam nama folder
        $namaFolder = str_replace(' ', '_', $namaFolder);
        // Buat direktori baru jika belum ada
        $path = FCPATH . '/upload/galeri/' . $namaFolder;
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $config['upload_path']   = $path;
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $tanggal = date('Y-m-d H:i:s');
            $gbr = $this->upload->data('file_name');

            $this->db->insert('galeri', array('nama_folder' => $namaFolder, 'nama_galeri' => $namaGaleri, 'tanggal' => $tanggal, 'gambar' => ''));

            // Mengganti nama file sesuai dengan format galerixxx
            $idGaleri = $this->db->insert_id(); // Mendapatkan ID terakhir yang diinsert
            $newName = 'galeri' . $idGaleri . '.' . pathinfo($gbr, PATHINFO_EXTENSION);
            $newPath = $path . '/' . $newName;

            rename($config['upload_path'] . '/' . $gbr, $newPath);

            // Update nama gambar pada database
            $this->db->where('id', $idGaleri);
            $this->db->update('galeri', array('gambar' => $newName));

            // Redirect ke halaman admin/galeri jika berhasil
            redirect('admin/galeri', 'refresh');
        }
    }

    public function hapus_galeri()
    {
        // Ambil ID dari data POST
        $idGaleri = $this->input->post('id');

        // Pastikan ID galeri ada di database sebelum menghapus
        if ($this->M_galeri->galeri_exists($idGaleri)) {
            // Hapus galeri dari database dan direktori
            $result = $this->M_galeri->hapus_galeri($idGaleri);

            if ($result) {
                // Jika berhasil, kirim respons sukses
                echo json_encode(['status' => 'success', 'message' => 'Galeri berhasil dihapus.']);
            } else {
                // Jika gagal menghapus dari database, kirim respons kesalahan
                echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus galeri dari database.']);
            }
        } else {
            // Jika ID galeri tidak ditemukan, kirim respons kesalahan
            echo json_encode(['status' => 'error', 'message' => 'ID galeri tidak valid.']);
        }
    }
}
