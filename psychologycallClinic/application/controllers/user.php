<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){

		parent:: __construct();
	}

	public function register()
	{
		$this->load->view('template/header2');
		$this->load->view('register');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->load->view('template/header2');
		$this->load->view('login');
		$this->load->view('template/footer');
	}
}