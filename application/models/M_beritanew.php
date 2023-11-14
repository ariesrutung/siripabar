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

    public function get_berita_by_id($id)
    {
        return $this->db->get_where('news', array('id' => $id))->row();
    }

    public function delete_berita($idBerita)
    {
        // Lakukan operasi penghapusan berita berdasarkan ID
        $this->db->where('id', $idBerita);
        $this->db->delete('news');
    }

    public function get_all_berita()
    {
        $query = $this->db->get('news');
        return $query->result();
    }


    public function get_berita_by_slug($slug)
    {
        return $this->db->get_where('news', array('slug' => $slug))->row();
    }

    public function get_berita_terbaru($detail)
    {
        $this->db->select("*")
            ->from("news as n")
            ->where('n.id !=', $detail)
            ->order_by('n.tanggal', 'DESC')
            ->limit(4);

        $query = $this->db->get();
        return $query->result();
    }
}
