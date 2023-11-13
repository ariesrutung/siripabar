<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerahirigasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->is_admin()) {
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_daerahirigasi']);
    }
    public function index()
    {
        $data['daerahirigasi'] = $this->M_daerahirigasi->get_all();

        $data['title'] = 'DAERAH IRIGASI';
        $data['_view'] = "admin/daerahirigasi";
        $this->load->view('admin/layout', $data);
    }


    public function tambah_dataskemairigasi()
    {
        $config['upload_path'] = './upload/datairigasi';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('dokumen')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array(
                'jumlah_aset' => $this->input->post('jumlah_aset'),
                'jumlah_subsistem' => $this->input->post('jumlah_subsistem'),
                'data_aknop' => $this->input->post('data_aknop'),
                'saluran_induk' => $this->input->post('saluran_induk'),
                'saluran_muka' => $this->input->post('saluran_muka'),
                'pengelak_banjir' => $this->input->post('pengelak_banjir'),
                'saluran_pembuang_tersier' => $this->input->post('saluran_pembuang_tersier'),
                'saluran_sekunder' => $this->input->post('saluran_sekunder'),
                'saluran_pembuang' => $this->input->post('saluran_pembuang'),
                'saluran_tersier' => $this->input->post('saluran_tersier'),
                'saluran_suplesi' => $this->input->post('saluran_suplesi'),
                'saluran_gendong' => $this->input->post('saluran_gendong'),
                'saluran_kuarter' => $this->input->post('saluran_kuarter'),

                'dokumen' => $this->upload->data('file_name'),

                'kode_di' => $this->input->post('kode_di'),
            );

            $this->M_daerahirigasi->insert_dataskemairigasi($data);
            redirect('admin/daerahirigasi');
        }
    }
}
