<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dtkontrak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_datakontrak');
    }

    public function tambah_data()
    {
        $this->load->view('admin/dtkontrak');
    }

    public function proses_tambah_data()
    {
        // $config['upload_path'] = './uploads/';
        $config['upload_path'] = FCPATH . './upload/dtkontrak';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'gambar' => $this->upload->data('file_name'),
                'text' => $this->input->post('text'),
                'angka' => $this->input->post('angka')
            );

            $this->M_datakontrak->insert_datakontrak($data);
            redirect('admin/dtkontrak/tambah_data');
        }
    }
}
