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
            redirect('admin/galeri');
        }
    }

    public function hapus_galeri()
    {
        $galeri_id = $this->input->post('galeri_id');

        // Panggil model untuk melakukan penghapusan
        $result = $this->M_galeri->hapus_data_galeri($galeri_id);

        // Berikan respon Ajax
        $response['success'] = $result;
        echo json_encode($response);
    }
}
