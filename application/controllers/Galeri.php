<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'GALERI';
        $data['_view'] = "company/galeri";
        $this->load->view('company/layout', $data);
    }
}
