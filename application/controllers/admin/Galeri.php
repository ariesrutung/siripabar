<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galeri');
    }

    public function index()
    {
        $data['title'] = 'GALERI';
        $data['_view'] = "admin/galeri";
        $this->load->view('admin/layout', $data);
    }

    public function tambah()
    {
        $namaGaleri = trim($this->input->post('nama_galeri'));

        if (empty($namaGaleri)) {
            // Handle error jika nama galeri kosong
            redirect('admin/galeri');
        }

        // Jika folder belum ada, buat folder
        $uploadPath = FCPATH . 'upload/galeri/' . $namaGaleri;
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $config['upload_path']   = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 10240; // 10 MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $uploadData = $this->upload->data();
            $data = array(
                'nama_galeri' => $namaGaleri,
                'tanggal'     => date('Y-m-d H:i:s'),
                'gambar'      => 'upload/galeri/' . $namaGaleri . '/' . $uploadData['file_name']
            );

            $this->M_galeri->tambahDataGaleri($data);

            // Perbarui lokasi redirect ke 'admin/galeri'
            redirect('admin/galeri');
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/galeri', $error);
        }
    }
}
