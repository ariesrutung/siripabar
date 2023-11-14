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

    public function get_gambar_by_kategori_dan_index($kategori, $index)
    {
        $this->db->select('id'); // Sesuaikan dengan kolom ID yang sesuai di tabel gambar
        $this->db->where('nama_folder', $kategori);
        $this->db->limit(1, $index - 1); // Karena index dimulai dari 1, kurangkan 1 untuk offset

        $query = $this->db->get('galeri');

        return $query->row(); // Mengembalikan satu baris hasil query
    }

    public function get_kategori_folders()
    {
        $this->db->select('nama_folder');
        $this->db->group_by('nama_folder');
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
}
