<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakontrak extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DATA KONTRAK';
        $data['menu'] = "admin/navbar";
        $this->load->view('admin/datakontrak', $data);
    }
}
