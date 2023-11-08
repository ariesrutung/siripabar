<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'BERITA';
        $data['menu'] = "admin/navbar";
        $this->load->view('admin/berita', $data);
    }
}
