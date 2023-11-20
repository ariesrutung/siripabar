<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_log extends CI_Model
{
    public function insert_log($user_id, $activity)
    {
        $data = array(
            'user_id' => $user_id,
            'activity' => $activity
        );

        $this->db->insert('log_users', $data);
        return $this->db->insert_id();
    }

    public function get_logs()
    {
        $this->db->order_by('waktu', 'desc');
        return $this->db->get('log_users')->result();
    }


    public function add($activity_message)
    {
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'activity' => $activity_message
        );

        $this->db->insert('log_users', $data);
        return $this->db->insert_id();
    }
}
