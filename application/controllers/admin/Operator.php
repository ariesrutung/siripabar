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
        $this->load->library(['ion_auth', 'form_validation', 'loguserlib']);
        $this->load->model(['Ion_auth_model']);
    }
    public function index()
    {
        $user_data = $this->ion_auth->user()->row();

        // Now, $user_data contains the user information
        $data['user_data'] = $user_data;

        $data['operator'] = $this->ion_auth->users()->result();
        $data['title'] = 'OPERATOR';
        $data['_view'] = "admin/operator";
        $this->load->view('admin/layout', $data);
    }

    public function hapus_user($id)
    {
        // Ambil informasi pengguna sebelum dihapus
        $user_info = $this->ion_auth->user($id)->row();

        // Buat respons JSON untuk Ajax
        $response = array();

        if (!$user_info) {
            // Jika pengguna tidak ditemukan, kembalikan pesan kesalahan
            $response['status'] = 'error';
            $response['message'] = 'Pengguna tidak ditemukan.';
        } else {
            // Simpan informasi pengguna sebelum dihapus
            $user_first_name = $user_info->first_name;

            // Panggil fungsi delete_user dari model Ion Auth
            $delete_user = $this->ion_auth->delete_user($id);

            if ($delete_user) {
                // Jika penghapusan berhasil
                $response['status'] = 'success';
                $response['message'] = 'Administrator menghapus user ' . $user_first_name;

                $user_id = $this->ion_auth->user()->row()->id;
                $user_name = $this->ion_auth->user()->row()->username;

                $user_act = "<strong>" . ucwords($user_name) . "</strong>" . " menghapus user " . "<strong>" . $user_first_name . "</strong>";
                $this->loguserlib->add_activity($user_id, $user_act);
            } else {
                // Jika penghapusan gagal
                $response['status'] = 'error';
                $response['message'] = 'Gagal menghapus pengguna.';
            }
        }

        // Mengembalikan respons JSON
        echo json_encode($response);
    }


    public function check_email_availability()
    {
        $email = $this->input->post('email');

        // Check if the email already exists
        $email_exists = $this->ion_auth->is_email_exists($email);

        // Prepare the response
        $response = array('exists' => $email_exists);

        // Send the JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    public function buat_user()
    {
        $data['operator'] = $this->ion_auth->users()->result();

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;

        $email = strtolower($this->input->post('email'));

        // Check if the email already exists
        $email_exists = $this->ion_auth->is_email_exists($email);

        if ($email_exists) {
            // Email already exists, show Sweet Alert error
            $this->session->set_flashdata('message', 'Maaf, email telah digunakan.');
            redirect('admin/operator');
        } else {
            // Email doesn't exist, proceed with user creation
            $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');

            $additional_data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            ];

            $user_level_id = $this->input->post('user_level');

            $user_levels = array(
                '1' => 'Admin',
                '2' => 'General User',
                '3' => 'Operator', // Atur sesuai dengan nama level yang sesuai
                // tambahkan level lainnya sesuai kebutuhan
            );

            // Pastikan bahwa $user_level_id ada dalam array $user_levels
            if (array_key_exists($user_level_id, $user_levels)) {
                $user_level_name = $user_levels[$user_level_id];
            } else {
                // Jika $user_level_id tidak ditemukan dalam array, berikan nilai default atau lakukan tindakan lain sesuai kebutuhan Anda
                $user_level_name = 'Unknown Level';
            }

            if ($user_id = $this->ion_auth->register($identity, $password, $email, $additional_data)) {
                $this->ion_auth->add_to_group($user_level_id, $user_id);
                $this->session->set_flashdata('message', $this->ion_auth->messages());

                $user_id = $this->ion_auth->user()->row()->id;
                $user_name = $this->ion_auth->user()->row()->username;
                $user_act = "<strong>" . ucwords($user_name) . "</strong>" . " menambahkan user " . "<strong>" . $this->input->post('first_name') . "</strong>" . " sebagai " . "<strong>" . $user_level_name . "</strong>";
                $this->loguserlib->add_activity($user_id, $user_act);

                redirect('admin/operator');
            }
        }

        $data['title'] = 'OPERATOR';
        $data['_view'] = "admin/operator";
        $this->load->view('admin/layout', $data);
    }

    // Fungsi untuk update user
    public function update_data_user($id)
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'username' => $this->input->post('username'),
            'company' => $this->input->post('company'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'password' => $this->input->post('password'),
        );

        $this->Ion_auth_model->updateDataUser($id, $data);
        redirect('admin/operator');
    }
}
