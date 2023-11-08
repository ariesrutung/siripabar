<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DAERAH IRIGASI';
        $data['_view'] = "admin/daerahirigasi";
        $this->load->view('admin/layout', $data);
    }
}
