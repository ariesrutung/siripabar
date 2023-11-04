<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'SIRIPABAR - Beranda';
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}
}
