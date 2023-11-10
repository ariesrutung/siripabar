<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emonitoring extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_berita']);
    }

    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = 'EMONITORING PELAKSANAAN';
        $data['_view'] = "company/emonitor";
        $this->load->view('company/layout', $data);
    }
}
