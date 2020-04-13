<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//DEFAULT PAGE
	public function index()
	{
		$this->load->view('template/headerDefault');
		$this->load->view('default/home'); //page_home not yet
		$this->load->view('template/footer');
	}
	public function konselor()
	{
		$this->load->view('template/headerDefault');
		$this->load->view('default/konselor'); 
		$this->load->view('template/footer');
	}
	public function login()
	{
		$this->load->view('template/header2');
		$this->load->view('login'); 
	}
	public function register()
	{
		$this->load->view('template/header2');
		$this->load->view('register'); 
	}
	
	//ADMIN PAGE
	public function adminPasien()
	{
		$this->load->view('template/headerAdmin');
		$this->load->view('admin/adminPasien');
		$this->load->view('template/footer');
	}

	public function adminKonselor()
	{
		$this->load->view('template/headerAdmin');
		$this->load->view('admin/adminKonselor');
		$this->load->view('template/footer');
	}

	public function adminReservasi()
	{
		$this->load->view('template/headerAdmin');
		$this->load->view('admin/adminReservasi');
		$this->load->view('template/footer');
	}

	//KONSELOR PAGE
	public function konselorReservasi()
	{
		$this->load->view('template/headerKonselor');
		$this->load->view('konselor/konselorReservasi');
		$this->load->view('template/footer');
	}
}
