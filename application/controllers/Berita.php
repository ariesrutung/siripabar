<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIRIPABAR - Berita';
        $this->load->view('header', $data);
        $this->load->view('berita');
        $this->load->view('footer');
    }
}
