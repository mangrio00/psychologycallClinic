<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PasienC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('user/login');
        } else if ($this->session->userdata('id_level') != 2) {
            redirect('user/akses_blocked');
        }
        $this->load->model('Konselor_model');
        $this->load->model('Reserv_model');
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home Page Patient';
        $data['pasien'] = $this->db->get_where('pasien', ['username' =>
        $this->session->userdata('username')])->row_array();
        $id_pasien = $this->session->userdata('id_pasien');
        $data['reservasi'] = $this->Reserv_model->getResevByIdPasien($id_pasien);
        if ($this->input->post('keyword')) {
            $data['reservasi'] = $this->Reserv_model->cariDataReservbyId($id_pasien);
        }
        $this->load->view('template/headerPasien', $data);
        $this->load->view('pasien/pasienReservasi', $data);
        $this->load->view('template/footer');
    }

    public function profilePasien()
    {
        $data['title'] = 'Account Page';
        $data['pasien'] = $this->db->get_where('pasien', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('template/headerPasien', $data);
        $this->load->view('pasien/profilePasien', $data);
        $this->load->view('template/footer');
    }

    public function ubahprofilePasien($id)
    {
        $data['title'] = 'Edit Account Page';
        $data['pasien'] = $this->db->get_where('pasien', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama_depan', 'First Name', 'required|trim');
        $this->form_validation->set_rules('nama_belakang', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('dob', 'DOB', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerPasien', $data);
            $this->load->view('pasien/ubahprofilePasien', $data);
        } else {
            $reserv = $this->db->get_where('reservasi', ['id_pasien' =>
            $data['pasien']['id_pasien']])->result_array();
            $data = [
                'firstname' => $this->input->post('nama_depan'),
                'lastname' => $this->input->post('nama_belakang'),
                'dob' => $this->input->post('dob'),
                'phone' => $this->input->post('no_hp'),
            ];
            $name = [
                'nama' => $this->input->post('nama_depan') . " " . $this->input->post('nama_belakang')
            ];
            $this->Pasien_model->edit_pasien($id, $data);
            $this->session->set_flashdata('flash', 'Congratulation! Your Account Has Been Updated');
            foreach ($reserv as $r) :
                $this->Reserv_model->ubahDataReserv($r['id_reservasi'], $name);
            endforeach;
            redirect('PasienC/profilePasien');
        }
    }
    public function ubahPassword()
    {
        $data['title'] = 'Change Password Page';
        $data['pasien'] = $this->db->get_where('pasien', ['username' =>
        $this->session->userdata('username')])->row_array();
        $pasien = $data['pasien'];
        $this->form_validation->set_rules('oldpass', 'Password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|min_length[3]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerPasien', $data);
            $this->load->view('pasien/ubahPassword', $data);
        } else {
            $current = $this->input->post('oldpass');
            if ((password_verify($current, $data['pasien']['password'])) || ($current == $data['pasien']['password'])) {
                $password_hash = password_hash($this->input->post('newpass'), PASSWORD_DEFAULT);
                $this->Pasien_model->edit_passpasien($data['pasien']['id_pasien'], $password_hash);
                $this->session->set_flashdata('flash', 'Congratulation! Password Changed Successfully');
                redirect('PasienC/profilePasien');
            } else {
                $this->session->set_flashdata('flash', 'Wrong Current Password!');
                redirect('PasienC/ubahPassword');
            }
        }
    }


    public function tambahReservasi($id_pasien)
    {
        $data['title'] = 'Create Reservation Page';
        $data['konselor'] = $this->Konselor_model->get_konselor();
        $data['pasien'] = $this->db->get_where('pasien', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('res_date', 'Reservation Date', 'required|trim');
        $this->form_validation->set_rules('counselorName', 'Counselor Name', 'required|trim');
        $tgl = new DateTime($this->input->post('res_date'));
        $tglsekarang = new DateTime();

        if (($this->form_validation->run() == false) || ($tgl < $tglsekarang)) {
            $this->load->view('template/headerPasien', $data);
            $this->load->view('pasien/tambahPasienReservasi', $data);
        } else {
            $konselor = $this->db->get_where('konselor', ['fullname' =>
            $this->input->post('counselorName')])->row_array();
            $data = [
                'nama' => $this->input->post('name'),
                'tgl_reserv' => $this->input->post('res_date'),
                'nama_konselor' => $this->input->post('counselorName'),
                'status' => 'pending',
                'id_pasien' => $id_pasien,
                'id_konselor' => $konselor['id_konselor']
            ];
            $this->Reserv_model->tambahDataReserv($data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambah');
            redirect('PasienC/');
        }
    }

    public function hapusReservasi($id)
    {
        $this->Reserv_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
        redirect('PasienC/');
    }

    public function ubahReservasi($id_reservasi)
    {
        $data['title'] = 'Edit Reservation Page';
        $data['reservasi'] = $this->Reserv_model->getResevById($id_reservasi);
        $data['konselor'] = $this->Konselor_model->get_konselor();
        $data['pasien'] = $this->db->get_where('pasien', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('res_date', 'Reservation Date', 'required|trim');
        $this->form_validation->set_rules('counselorName', 'Counselor Name', 'required|trim');
        $tgl = new DateTime($this->input->post('res_date'));
        $tglsekarang = new DateTime();
        if (($tglsekarang > $data['reservasi']['tgl_reserv']) && ($data['reservasi']['status'] == 'schedule')) {
            $this->session->set_flashdata('flash', 'Can not be changed because reservation date has passed');
            redirect('PasienC/');
        } else if (($this->form_validation->run() == false) || ($tgl < $tglsekarang)) {
            $this->load->view('template/headerPasien', $data);
            $this->load->view('pasien/ubahPasienReservasi', $data);
        } else {
            $konselor = $this->db->get_where('konselor', ['fullname' =>
            $this->input->post('counselorName')])->row_array();
            $reservasi = $this->db->get_where('reservasi', ['id_reservasi' => $id_reservasi])->row_array();
            $data = [
                'nama' => $this->input->post('name'),
                'tgl_reserv' => $this->input->post('res_date'),
                'nama_konselor' => $this->input->post('counselorName'),
                'status' => 'pending',
                'id_pasien' => $reservasi['id_pasien'],
                'id_konselor' => $konselor['id_konselor']
            ];
            $this->Reserv_model->ubahDataReserv($id_reservasi, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('PasienC/');
        }
    }
}
