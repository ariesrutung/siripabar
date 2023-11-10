<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unduhlaporan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'UNDUH LAPORAN';
        $data['_view'] = "admin/unduhlaporan";
        $this->load->view('admin/layout', $data);
    }
}
