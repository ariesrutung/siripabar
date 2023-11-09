<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_berita']);
    }

    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = 'BERITA';
        $data['_view'] = "company/berita";
        $this->load->view('company/layout', $data);
    }

    public function detail_berita($slug)
    {
        $data['detail'] = $this->M_berita->get_by_slug($slug);
        $data['title'] = 'DETAIL BERITA';
        $data['_view'] = "company/detail_berita";
        $this->load->view('company/layout', $data);
    }
}
