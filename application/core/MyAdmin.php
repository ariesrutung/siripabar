<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);
    }
}
