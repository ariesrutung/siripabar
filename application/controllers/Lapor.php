<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('lapor');
        $this->load->view('footer');
    }
}
