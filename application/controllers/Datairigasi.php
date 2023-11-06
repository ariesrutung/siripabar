<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datairigasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIRIPABAR - Data Irigasi';
        $this->load->view('header', $data);
        $this->load->view('datatables');
        $this->load->view('footer');
    }
}
