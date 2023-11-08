<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DAERAH IRIGASI';
        $data['_view'] = "company/daerahirigasi";
        $this->load->view('company/layout', $data);
    }

    public function detail_daerahirigasi()
    {
        $data['title'] = 'DETAIL DAERAH IRIGASI';
        $data['_view'] = "company/detail_daerahirigasi";
        $this->load->view('company/layout', $data);
    }
}
