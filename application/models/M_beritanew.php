<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_beritanew extends CI_Model
{
    public function insert_berita($data)
    {
        $this->db->insert('news', $data);
    }

    public function get_semua()
    {
        return $this->db->select("*")
            ->from("news as n")
            ->get()
            ->result();
    }

    public function update_berita($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }
}
