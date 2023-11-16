<?php
class M_galeri extends CI_Model
{
    public function tambahDataGaleri($data)
    {
        $this->db->insert('galeri', $data);
        return $this->db->insert_id();
    }

    public function get_galeri()
    {
        $query = $this->db->get('galeri');
        return $query->result();
    }

    public function get_gambar_galeri($id)
    {
        $this->db->select('id, nama_folder, gambar');
        $this->db->where('id', $id);
        $query = $this->db->get('galeri');

        return $query->row(); // Mengembalikan satu baris hasil query
    }

    public function folder_has_images($kategori)
    {
        $path = './upload/galeri/' . $kategori;

        // Periksa apakah folder ada dan memiliki file gambar yang valid (dengan ekstensi jpg, png, dan jpeg)
        $images = glob($path . '/*.{jpg,png,jpeg}', GLOB_BRACE);
        return is_dir($path) && count($images) > 0;
    }

    public function get_gambar_by_kategori_dan_index($kategori, $index)
    {
        if ($this->folder_has_images($kategori)) {
            $this->db->select('id');
            $this->db->where('nama_folder', $kategori);
            $this->db->limit(1, $index - 1);

            $query = $this->db->get('galeri');

            if ($query->num_rows() > 0) {
                return $query->row();
            }
        }

        return null;
    }

    public function get_kategori_folders()
    {
        $this->db->select('nama_folder');
        $this->db->group_by('nama_folder');
        $this->db->where('nama_folder IN (SELECT DISTINCT nama_folder FROM galeri)');
        $query = $this->db->get('galeri');

        return $query->result();
    }

    public function hapus_galeri_by_kategori($kategori)
    {
        // Ambil data galeri berdasarkan kategori
        $galeri = $this->db->get_where('galeri', ['nama_folder' => $kategori])->result();

        foreach ($galeri as $item) {
            // Hapus gambar dari direktori
            $this->hapus_gambar($kategori, $item->gambar);

            // Hapus data galeri dari database
            $this->db->delete('galeri', ['id' => $item->id]);
        }

        // Kembalikan true jika operasi penghapusan berhasil
        return true;
    }

    // Fungsi untuk menghapus gambar dari direktori
    private function hapus_gambar($kategori, $gambar)
    {
        $path = './upload/galeri/' . $kategori . '/' . $gambar;

        // Hapus gambar jika file ada
        if (file_exists($path)) {
            unlink($path);
        }
    }

    public function galeri_exists($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('galeri');
        return $query->num_rows() > 0;
    }

    public function hapus_galeri($id)
    {
        // Ambil nama folder dan gambar sebelum menghapus
        $galeri = $this->get_gambar_galeri($id);
        $namaFolder = $galeri->nama_folder;
        $gambar = $galeri->gambar;

        // Hapus gambar dari direktori
        $this->hapus_gambar($namaFolder, $gambar);

        // Hapus data galeri dari database
        $this->db->where('id', $id);
        $this->db->delete('galeri');

        // Kembalikan true jika operasi penghapusan berhasil
        return true;
    }

    public function hapus_data_galeri($galeri_id)
    {
        // Ambil data galeri berdasarkan ID
        $galeri = $this->get_gambar_galeri($galeri_id);

        if ($galeri) {
            // Hapus gambar dari direktori
            $this->hapus_gambar($galeri->nama_folder, $galeri->gambar);

            // Hapus data galeri dari database
            $this->db->where('id', $galeri_id);
            $this->db->delete('galeri');

            // Kembalikan true jika operasi penghapusan berhasil
            return true;
        }

        // Kembalikan false jika data galeri tidak ditemukan
        return false;
    }

    public function get_kategori_folders_with_images()
    {
        $this->db->select('nama_folder');
        $this->db->group_by('nama_folder');

        // Ambil hanya folder yang memiliki gambar
        $this->db->where('nama_folder IN (SELECT DISTINCT nama_folder FROM galeri)');

        $query = $this->db->get('galeri');

        return $query->result();
    }
}
