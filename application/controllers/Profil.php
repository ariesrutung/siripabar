<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('profil');
        $this->load->view('footer');
    }
}
