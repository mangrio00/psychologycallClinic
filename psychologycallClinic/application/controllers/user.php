<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_depan', 'Fisrt Name', 'required|trim');
		$this->form_validation->set_rules('nama_belakang', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pasien.email]');
		$this->form_validation->set_rules('dob', 'DOB', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Gender', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pasien.username]'); //
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('konfirmasi_password', 'Re-type Password', 'required|matches[password]');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header2');
			$this->load->view('register');
		} else {
			$data = [
				'firstname' => $this->input->post('nama_depan', true),
				'lastname' => $this->input->post('nama_belakang', true),
				'email' => $this->input->post('email', true),
				'dob' => $this->input->post('dob', true),
				'phone' => $this->input->post('no_hp', true),
				'gender' => $this->input->post('jenis_kelamin', true),
				'username' => $this->input->post('username', true),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
				'id_level' => 2
			];
			$this->User_model->tambah_pasien($data);
			redirect('user/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim'); //
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header2');
			$this->load->view('login');
		} else {
			//lolos validasi
			$this->_login();
		}
	}
	private function _login()
	{
		$user = [
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password', true)
		];
		$cekPasien = $this->User_model->getPasienbyUsername($user);
		$cekAdmin = $this->User_model->getAdminbyUsername($user);
		$cekKonselor = $this->User_model->getKonselorbyUsername($user);

		if ($cekPasien) {
			if (password_verify($user['password'], $cekPasien['password'])) {
				$data = [
					'username' => $cekPasien['username'],
					'id_level' => $cekPasien['id_level']
				];
				$this->session->set_userdata($data);
				redirect('PasienC');
			} else {
				$this->session->set_flashdata('flash', 'Password Salah');
				redirect('user/login');
			}
		} else if ($cekAdmin) {
			if ($user['password'] == $cekAdmin['password']) {
				$data = [
					'username' => $cekAdmin['username'],
					'id_level' => $cekAdmin['id_level']
				];
				$this->session->set_userdata($data);
				redirect('AdminC/adminKonselor');
			} else {
				$this->session->set_flashdata('flash', 'Password Salah');
				redirect('user/login');
			}
		} else if ($cekKonselor) {
			if ($user['password'] == $cekKonselor['password']) {
				$data = [
					'username' => $cekKonselor['username'],
					'id_level' => $cekKonselor['id_level']
				];
				$this->session->set_userdata($data);
				redirect('KonselorC');
			} else {
				$this->session->set_flashdata('flash', 'Password Salah');
				redirect('user/login');
			}
		} else {
			//set flash data  username tidak ada, silahkan regis
			$this->session->set_flashdata('flash', 'Username tidak ditemukan');
			redirect('user/login');
		}
	}
}
