<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        //  if ( ! $this->session->userdata('username'))
        // { 
        //     redirect('Auth');
        // }
        // $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_daerahirigasi']);
    }

    public function index()
    {
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_all();
        $data['title'] = 'DAERAH IRIGASI';
        $data['_view'] = "company/daerahirigasi";
        $this->load->view('company/layout', $data);
    }

    public function pusat()
    {
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_by_kewenangan("Pusat");
        $data['title'] = 'D.I. KEWENANGAN PUSAT';
        $data['_view'] = "company/daerahirigasipusat";
        $this->load->view('company/layout', $data);
    }
    
    public function provinsi()
    {
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_by_kewenangan("Provinsi");
        $data['title'] = 'D.I. KEWENANGAN PROVINSI';
        $data['_view'] = "company/daerahirigasiprovinsi";
        $this->load->view('company/layout', $data);
    }

    public function kabkota()
    {
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_by_kewenangan("Kabupaten/Kota");
        $data['title'] = 'D.I. KEWENANGAN KAB/KOTA';
        $data['_view'] = "company/daerahirigasikabkota";
        $this->load->view('company/layout', $data);
    }

    public function nonstatus()
    {
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_by_kewenangan("Non Status");
        $data['title'] = 'D.I. NON STATUS';
        $data['_view'] = "company/daerahirigasinonstatus";
        $this->load->view('company/layout', $data);
    }

    public function detail($kode)
    {
        $data['ddi'] = $this->M_daerahirigasi->get_by_kode($kode);
        $data['datakontrak'] = $this->M_daerahirigasi->get_datakontrak($kode);
        $data['title'] = 'DETAIL DAERAH IRIGASI';
        $data['_view'] = "company/detail_daerahirigasi";
        $this->load->view('company/layout', $data);
    }
}
