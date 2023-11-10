<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'GALERI';
        $data['_view'] = "admin/galeri";
        $this->load->view('admin/layout', $data);
    }
}
