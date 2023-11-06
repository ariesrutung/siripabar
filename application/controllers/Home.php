<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		// $data['title'] = 'SIRIPABAR - Beranda';
		// $this->load->view('header', $data);
		// $this->load->view('comming-soon');
		// $this->load->view('footer');


		$this->load->view('company/header');
		$this->load->view('company/home');
		$this->load->view('company/footer');
	}

	public function login()
	{
		$data['title'] = 'SIRIPABAR - Masuk';
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}
}
