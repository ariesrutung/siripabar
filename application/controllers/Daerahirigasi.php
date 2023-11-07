<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DAERAH IRIGASI';
        $this->load->view('company/header', $data);
        $this->load->view('company/daerahirigasi');
        $this->load->view('company/footer');
    }
}
