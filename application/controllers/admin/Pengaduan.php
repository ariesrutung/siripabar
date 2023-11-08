<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // is_logged_in();
        // if (!$this->session->userdata('username')) {
        //     redirect('Auth');
        // }
        $this->load->model('M_pengaduan');
        $this->load->model('M_berita');
        $this->load->model(['M_pengaduan', 'M_wilayah']);
    }

    public function index()
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND LEFT(kode,2) = '92'");

        $data['kabupaten'] = $query->result();
        $data['pengaduan'] = $this->M_pengaduan->get_all();

        $data['title'] = 'PENGADUAN';
        $data['menu'] = "admin/navbar";
        $this->load->view('admin/pengaduan', $data);
    }

    public function terimaLaporan()
    {
        //tangkap variabel idlaporan yg di post dari ajax di halaman pengaduan
        $idlaporan = $this->input->post('idlaporan');

        //deklarasikan data yg akan diedit, disini hanya status yg akan diubah
        $data = array('status' => 'Diterima');

        //akses model untuk proses update status
        if ($this->M_pengaduan->edit($data, $idlaporan)) {
            json_encode(array('status' => TRUE, 'info' => 'Laporan berhasil diterima'));
        } else {
            json_encode(array('status' => FALSE, 'info' => 'Update status laporan gagal'));
        }
    }


    public function tolaklaporan()
    {
        //tangkap variabel idlaporan yg di post dari ajax di halaman pengaduan
        $idlaporan = $this->input->post('idlaporan');

        //deklarasikan data yg akan diedit, disini hanya status yg akan diubah
        $data = array('status' => 'Ditolak');

        //akses model untuk proses update status
        if ($this->M_pengaduan->edit($data, $idlaporan)) {
            json_encode(array('status' => TRUE, 'info' => 'Laporan berhasil Ditolak'));
        } else {
            json_encode(array('status' => FALSE, 'info' => 'Update status laporan gagal'));
        }
    }

    public function detail_laporan()
    {
        $id = $this->input->get('idlaporan');
        $get_laporan = $this->M_pengaduan->get_by_id($id);
        echo json_encode($get_laporan);
        exit();
    }

    public function get_gbrdokumentasi($kodelaporan)
    {
        $data['upload'] = $this->M_pengaduan->get_image($kodelaporan);
    }
}
