<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('galeri');
        $this->load->view('footer');
    }
}
