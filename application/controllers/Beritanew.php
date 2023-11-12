<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritanew extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_beritanew']);
    }

    public function index()
    {
        $data['berita'] = $this->M_beritanew->get_all_berita();
        // $data['berita'] = $this->M_berita->get_all();
        $data['title'] = 'BERITA';
        $data['_view'] = "company/beritanew";
        $this->load->view('company/layout', $data);
    }

    public function detail_berita($slug)
    {
        $data['berita'] = $this->M_beritanew->get_berita_by_slug($slug);

        $data['title'] = 'DETAIL BERITA';
        $data['_view'] = "company/detail_beritanew";
        $this->load->view('company/layout', $data);
    }
}
