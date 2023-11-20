<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_log');
    }

    public function index()
    {
        // // Contoh pemanggilan dengan pesan aktivitas
        // $user_name = $this->session->userdata('username');
        // // $this->M_log->add("Data daerah irigasi telah ditambahkan oleh: " . $user_name);

        // $activity_message = "User viewed the log" . $user_name; // Sesuaikan dengan pesan aktivitas yang sesuai
        // $this->M_log->add($activity_message);

        // Load view dengan data logs
        $data['logs'] = $this->M_log->get_logs(); // Sesuaikan dengan fungsi yang ada di model
        $data['title'] = 'LOG';
        $data['_view'] = "admin/log";
        $this->load->view('admin/layout', $data);
    }
}
