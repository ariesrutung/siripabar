<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('company/header');
		$this->load->view('company/home');
		$this->load->view('company/footer');
	}
}
