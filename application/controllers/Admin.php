<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DASBOR';
        $data['_view'] = "admin/home";
        $this->load->view('admin/layout', $data);
    }

    public function login()
    {
        $this->load->view('admin/login');
    }
}
