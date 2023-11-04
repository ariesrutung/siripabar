<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIRIPABAR - Galeri';
        $this->load->view('header', $data);
        $this->load->view('galeri');
        $this->load->view('footer');
    }

    public function detail_galeri()
    {
        $data['title'] = 'SIRIPABAR - Detail Galeri';
        $this->load->view('header', $data);
        $this->load->view('detail_galeri');
        $this->load->view('footer');
    }
}
