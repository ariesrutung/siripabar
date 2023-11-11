<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakontrak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);

        $this->load->model('M_emonitoring');
    }

    public function index()
    {
        $data['datakontrak'] = $this->M_emonitoring->get_all_datakontrak();
        $data['title'] = 'DATA KONTRAK';
        $data['_view'] = "admin/datakontrak";
        $this->load->view('admin/layout', $data);
    }
}
