<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIRIPABAR - Lapor';
        $this->load->view('header', $data);
        $this->load->view('lapor');
        $this->load->view('footer');
    }
}
