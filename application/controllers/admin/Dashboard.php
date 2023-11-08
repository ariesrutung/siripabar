<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DASHBOARD';
        $data['menu'] = "admin/navbar";
        $this->load->view('admin/dashboard', $data);
    }
}
