<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'GALERI';
        $data['menu'] = "admin/navbar";
        $this->load->view('admin/galeri', $data);
    }
}
