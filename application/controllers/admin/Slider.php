<?php
class Slider extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_slider');
    }

    public function index()
    {
        $data['sliders'] = $this->M_slider->get_sliders();
        $data['title'] = 'SLIDER';
        $data['_view'] = "admin/slider";
        $this->load->view('admin/layout', $data);
    }


    public function add_slider()
    {
        $judul = $this->input->post('judul');
        $subjudul = $this->input->post('subjudul');
        $status = $this->input->post('status');

        // Konfigurasi upload gambar
        $config['upload_path'] = './upload/slider';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            // Jika upload gambar gagal, set pesan kesalahan dan redirect
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('admin/slider');
        } else {
            // Jika upload gambar berhasil, ambil data gambar
            $data_gambar = $this->upload->data();

            // Manipulasi nama file sesuai kebutuhan (slider + tanggal)
            // Manipulasi nama file sesuai kebutuhan (slider + timestamp)
            $timestamp = time();
            $nama_file_baru = 'slider' . $timestamp . $data_gambar['file_ext'];

            // Ubah nama file di direktori
            $path_asal = './upload/slider/' . $data_gambar['file_name'];
            $path_tujuan = './upload/slider/' . $nama_file_baru;

            // Hapus gambar yang sudah ada dengan nama yang baru
            if (file_exists($path_tujuan)) {
                unlink($path_tujuan);
            }

            rename($path_asal, $path_tujuan);


            // Simpan data ke database
            $data = array(
                'judul' => $judul,
                'subjudul' => $subjudul,
                'gambar' => $nama_file_baru,
                'status' => $status
            );

            $slider_id = $this->M_slider->insert_slider($data);

            if ($slider_id) {
                // Jika data berhasil disimpan, set pesan sukses dan redirect
                $this->session->set_flashdata('success', 'Data berhasil disimpan!');
                redirect('admin/slider');
            } else {
                // Jika terjadi kesalahan, set pesan kesalahan dan redirect
                $this->session->set_flashdata('error', 'Gagal menyimpan data');
                redirect('admin/slider');
            }
        }
    }

    public function success()
    {
        // Tampilkan halaman sukses
        $this->load->view('admin/slider');
    }

    public function ubah_status()
    {
        $slider_id = $this->input->post('id');
        $status = $this->input->post('status');

        $result = $this->M_slider->update_slider_status($slider_id, $status);

        if ($result) {
            echo json_encode(array(
                'success' => true,
                'message' => 'Status slider berhasil diubah',
                'slider_id' => $slider_id,
                'status' => $status,
            ));
        } else {
            echo json_encode(array(
                'success' => false,
                'message' => 'Gagal mengubah status slider',
                'slider_id' => $slider_id,
                'status' => $status,
            ));
        }
    }


    public function hapus_slider($id)
    {
        // Dapatkan nama gambar sebelum menghapus slider
        $gambar_slider = $this->M_slider->get_gambar_slider($id);

        $result = $this->M_slider->hapus_slider($id);

        if ($result) {
            // Hapus gambar dari direktori
            $this->hapus_gambar($gambar_slider);

            // Set pesan sukses dan redirect
            $this->session->set_flashdata('success', 'Slider berhasil dihapus!');
            redirect('admin/slider');
        } else {
            // Set pesan kesalahan dan redirect
            $this->session->set_flashdata('error', 'Gagal menghapus slider');
            redirect('admin/slider');
        }
    }


    // Fungsi untuk menghapus gambar dari direktori
    private function hapus_gambar($gambar)
    {
        $path = './upload/slider/' . $gambar;

        // Hapus gambar jika file ada
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
