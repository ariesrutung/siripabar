<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['title'] = 'PROFIL';
        $data['_view'] = "admin/profil";
        $this->load->view('admin/layout', $data);
    }
}
