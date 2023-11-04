<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIRIPABAR - Profil';
        $this->load->view('header', $data);
        $this->load->view('profil');
        $this->load->view('footer');
    }
}
