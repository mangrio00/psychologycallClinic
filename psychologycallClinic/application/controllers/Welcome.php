<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Konselor_model');
    }

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
		$data['konselor'] = $this->Konselor_model->get_konselor();
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
