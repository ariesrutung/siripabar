<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emonitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // is_logged_in();
        // if (!$this->session->userdata('username')) {
        //     redirect('Auth');
        // }
        $this->load->model('M_emonitoring');
    }

    public function index() 
    {
        $data['emonitoring'] = $this->M_emonitoring->get_all();
        $data['title'] = 'EMONITORING PELAKSANAAN';
        $data['_view'] = "company/emonitor";
        $this->load->view('company/layout', $data);
    }
}
