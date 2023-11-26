<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_beritanew']);
    }

    public function index()
    {
        $data['berita'] = $this->M_beritanew->get_all_berita();
        $data['title'] = 'BERITA';
        $data['_view'] = "admin/beritanew";
        $this->load->view('admin/layout', $data);
    }

    public function add_berita()
    {
        $config['upload_path'] = './upload/berita';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $slug = url_title($this->input->post('judul'), 'dash', TRUE); // Generate slug from title
            $data = array(
                'judul' => $this->input->post('judul'),
                'isiberita' => $this->input->post('isiberita'),
                'lok_berita' => $this->input->post('lok_berita'),
                'tag' => $this->input->post('tag'),
                'tanggal' => $this->input->post('tanggal'),
                'kategori' => 'Irigasi',
                'slug' => $slug,
                'gambar' => $this->upload->data('file_name'),
                'ket_gambar' => $this->input->post('ket_gambar'),
            );

            $this->M_beritanew->insert_berita($data);
            redirect('admin/berita');
        }
    }

    public function get_berita_ajax($id)
    {
        $berita = $this->M_beritanew->get_berita_by_id($id);
        echo json_encode($berita);
    }

    public function update_berita()
    {
        $idBerita = $this->input->post('id_berita');
        $data = array(
            'judul' => $this->input->post('edit_judul'),
            'isiberita' => $this->input->post('edit_isiberita'),
            'tanggal' => $this->input->post('edit_tanggal'),
            'lok_berita' => $this->input->post('edit_lokberita'),
            'tag' => $this->input->post('edit_tag'),
            'ket_gambar' => $this->input->post('edit_ketgambar'),
        );

        // Memproses gambar jika ada yang diunggah
        if (!empty($_FILES['edit_gambar']['name'])) {
            $config['upload_path'] = './upload/berita';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;

            // Mendapatkan ekstensi file
            $fileExt = pathinfo($_FILES['edit_gambar']['name'], PATHINFO_EXTENSION);

            // Menyusun nama file baru dengan tambahan timestamp
            $newFileName = 'berita_' . date('YmdHis') . '.' . $fileExt;
            $config['file_name'] = $newFileName;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('edit_gambar')) {
                // Hapus gambar lama sebelum menyimpan yang baru
                $beritaLama = $this->M_beritanew->get_berita_by_id($idBerita);
                if (!empty($beritaLama->gambar) && file_exists($beritaLama->gambar)) {
                    unlink($beritaLama->gambar);
                }

                $data['gambar'] = $newFileName;
            } else {
                // Handle error jika upload gagal
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                return;
            }
        }

        $this->M_beritanew->update_berita($idBerita, $data);
        // Tambahkan pesan flashdata atau tindakan lain yang sesuai
        redirect('admin/berita');
    }

    public function delete_berita()
    {
        $idBerita = $this->input->post('id_berita');

        // Panggil model untuk menghapus berita
        $this->M_beritanew->delete_berita($idBerita);

        // Kirim pesan flashdata atau tindakan lain yang sesuai
        // (opsional)...

        // Redirect ke halaman berita setelah penghapusan
        redirect('admin/berita');
    }

    public function getGambarDetail($id)
    {
        // Ambil data gambar dari database berdasarkan ID
        $gambarPath = $this->M_beritanew->getGambarPathById($id);

        // Lakukan validasi jika data tidak ditemukan atau kosong
        if ($gambarPath) {
            // Tentukan path lengkap gambar
            $gambarFullPath = base_url('upload/berita/') . $gambarPath;

            // Kirim path gambar sebagai response
            echo json_encode(['gambarPath' => $gambarFullPath]);
        } else {
            // Kirim response jika gambar tidak ditemukan
            echo json_encode(['gambarPath' => null]);
        }
    }
}
