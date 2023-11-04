<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIRIPABAR - Kontak';
        $this->load->view('header', $data);
        $this->load->view('kontak');
        $this->load->view('footer');
    }
}
