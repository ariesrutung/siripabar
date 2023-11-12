<?php
class M_galeri extends CI_Model
{

    public function tambahDataGaleri($data)
    {
        return $this->db->insert('galeri', $data);
    }
}
