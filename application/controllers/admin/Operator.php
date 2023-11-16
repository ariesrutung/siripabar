<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['operator'] = $this->ion_auth->users()->result();
        $data['title'] = 'OPERATOR';
        $data['_view'] = "admin/operator";
        $this->load->view('admin/layout', $data);
    }

    public function hapus_user($id)
    {

        // Panggil fungsi delete_user dari model Ion Auth
        $delete_user = $this->ion_auth->delete_user($id);

        // Buat respons JSON untuk Ajax
        $response = array();

        if ($delete_user) {
            // Jika penghapusan berhasil
            $response['status'] = 'success';
            $response['message'] = 'Pengguna berhasil dihapus.';
        } else {
            // Jika penghapusan gagal
            $response['status'] = 'error';
            $response['message'] = 'Gagal menghapus pengguna.';
        }

        // Mengembalikan respons JSON
        echo json_encode($response);
    }
}
