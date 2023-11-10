<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PROFIL';
        // $data['_view'] = "company/profil";
        $this->load->view('company/login', $data);
    }
}
