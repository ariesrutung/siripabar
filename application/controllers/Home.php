<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_slider');
	}

	public function index()
	{
		$data['active_sliders'] = $this->M_slider->get_active_sliders();

		$data['title'] = 'BERANDA';
		$data['_view'] = "company/home";
		$this->load->view('company/layout', $data);
	}
}
