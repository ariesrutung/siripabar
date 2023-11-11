<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datakontrak extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('dtkontrak', $data);
    }
}
