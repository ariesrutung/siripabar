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
        $this->load->library(['ion_auth', 'form_validation']);
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

        // validate form input
        // $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
        // $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'trim|required');

        // if ($identity_column !== 'email') {
        //     $this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
        //     $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email');
        // } else {
        //     $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
        // }

        // $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
        // $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
        // $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
        // $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        // if ($this->form_validation->run() === TRUE) {
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

            $user_level = $this->input->post('user_level');
            if ($user_id = $this->ion_auth->register($identity, $password, $email, $additional_data)) {
                $this->ion_auth->add_to_group($user_level, $user_id);
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('admin/operator');
            }
        }
        // }

        // display the create user form
        // $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        // $this->data['first_name'] = [
        //     'name' => 'first_name',
        //     'id' => 'first_name',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('first_name'),
        // ];

        // $this->data['last_name'] = [
        //     'name' => 'last_name',
        //     'id' => 'last_name',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('last_name'),
        // ];

        // $this->data['identity'] = [
        //     'name' => 'identity',
        //     'id' => 'identity',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('identity'),
        // ];

        // $this->data['email'] = [
        //     'name' => 'email',
        //     'id' => 'email',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('email'),
        // ];

        // $this->data['company'] = [
        //     'name' => 'company',
        //     'id' => 'company',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('company'),
        // ];

        // $this->data['phone'] = [
        //     'name' => 'phone',
        //     'id' => 'phone',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('phone'),
        // ];

        // $this->data['password'] = [
        //     'name' => 'password',
        //     'id' => 'password',
        //     'type' => 'password',
        //     'value' => $this->form_validation->set_value('password'),
        // ];

        // $this->data['password_confirm'] = [
        //     'name' => 'password_confirm',
        //     'id' => 'password_confirm',
        //     'type' => 'password',
        //     'value' => $this->form_validation->set_value('password_confirm'),
        // ];

        $data['title'] = 'OPERATOR';
        $data['_view'] = "admin/operator";
        $this->load->view('admin/layout', $data);
    }

    public function edit_user($user_id)
    {
        // Mengambil data user berdasarkan $user_id dari model
        $data['user_data'] = $this->ion_auth->get_user_data($user_id);

        // Menampilkan view edit_user dengan data user yang diambil
        $this->load->view('edit_user', $data);
    }

    public function update_user($user_id)
    {

        // Mendapatkan data dari formulir edit
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            // Tambahkan kolom-kolom lain sesuai kebutuhan
        );

        // Memanggil fungsi update_user pada model untuk mengupdate data user
        $result = $this->ion_auth->update_user($user_id, $data);

        if ($result) {
            // Jika update berhasil, redirect ke halaman lain atau tampilkan pesan sukses
            redirect('halaman_sukses');
        } else {
            // Jika update gagal, tampilkan pesan error atau redirect ke halaman lain
            redirect('halaman_error');
        }
    }
}
