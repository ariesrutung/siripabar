<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datakontrak extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('dtkontrak', $data);
    }

    public function get_by_id($id)
    {

        $query = $this->db->get_where('data_kontrak', array('id' => $id);
        return $query->row();
    }
}
