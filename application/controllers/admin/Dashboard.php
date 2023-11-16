<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('Auth');
        } else {
            // $userid = $this->ion_auth->get_user_id();
            $user_groups = $this->ion_auth->get_users_groups()->row();
            if ($user_groups->name == "members") {
                redirect('Auth');
            }
        }

        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index()
    {
        $data['title'] = 'DASHBOARD';
        $data['_view'] = "admin/dashboard";
        $this->load->view('admin/layout', $data);
    }
}
