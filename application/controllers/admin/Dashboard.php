<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('Auth');
        } else {
            // $userid = $this->ion_auth->get_user_id();
            $user_groups = $this->ion_auth->get_users_groups()->row();
            if ($user_groups->name == "members") {
                redirect('Auth');
            }
        }

        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_daerahirigasi', 'M_emonitoring']);
    }

    public function index()
    {
        $dataKontrak = $this->M_emonitoring->get_data_kontrak_by_tahun_sumberdana();
        $di_perKba = $this->M_daerahirigasi->count_di_by_kabupaten();

        // Menyiapkan data untuk ditampilkan di view
        $data['di_kabkota'] = json_encode($di_perKba);
        $data['dataKontrak'] = json_encode($dataKontrak);

        // Menghitung jumlah berdasarkan kewenangan
        $jumlahPusat = $this->M_daerahirigasi->count_by_kewenangan('Pusat');
        $jumlahProvinsi = $this->M_daerahirigasi->count_by_kewenangan('Provinsi');
        $jumlahKabKota = $this->M_daerahirigasi->count_by_kewenangan('Kabupaten/Kota');
        $jumlahNonStatus = $this->M_daerahirigasi->count_by_kewenangan('Non Status');

        // Menampilkan data di view
        $data['jumlahPusat'] = $jumlahPusat;
        $data['jumlahProvinsi'] = $jumlahProvinsi;
        $data['jumlahKabKota'] = $jumlahKabKota;
        $data['jumlahNonStatus'] = $jumlahNonStatus;

        $data['title'] = 'DASHBOARD';
        $data['_view'] = "admin/dashboard";
        $this->load->view('admin/layout', $data);
    }
}
