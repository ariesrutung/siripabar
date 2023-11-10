<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakontrak extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DATA KONTRAK';
        $data['_view'] = "admin/datakontrak";
        $this->load->view('admin/layout', $data);
    }
}
