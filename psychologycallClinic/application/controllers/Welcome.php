<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$data['title'] = 'Home Page';
		$this->load->view('template/headerDefault', $data);
		$this->load->view('default/home', $data);
		$this->load->view('template/footer');
	}
	public function konselor()
	{
		$data['title'] = 'Our Counselor Page';
		$this->load->view('template/headerDefault', $data);
		$this->load->view('default/konselor', $data);
		$this->load->view('template/footer');
	}

	// //KONSELOR PAGE
	// public function konselorReservasi()
	// {
	// 	$this->load->view('template/headerKonselor');
	// 	$this->load->view('konselor/konselorReservasi');
	// 	$this->load->view('template/footer');
	// }

	// //PROFILE   
	// public function profileKonselor()
	// {
	// 	$this->load->view('template/headerKonselor');
	// 	$this->load->view('konselor/profileKonselor');
	// 	$this->load->view('template/footer');
	// }
}
