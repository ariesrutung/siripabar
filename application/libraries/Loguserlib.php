<?php defined('BASEPATH') or exit('No direct script access allowed');

class Loguserlib
{
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('M_log');
    }

    public function add_activity($user, $activity)
    {
        $this->CI->M_log->addlog($user, $activity);
        return $user . $activity;
    }
}
