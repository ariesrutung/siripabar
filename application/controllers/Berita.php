<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'BERITA';
        $data['_view'] = "company/berita";
        $this->load->view('company/layout', $data);
    }

    public function detail_berita()
    {
        $data['title'] = 'DETAIL BERITA';
        $data['_view'] = "company/detail_berita";
        $this->load->view('company/layout', $data);
    }
}
