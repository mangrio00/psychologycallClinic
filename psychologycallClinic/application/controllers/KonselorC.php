<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonselorC extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('user/login');
        } else if ($this->session->userdata('id_level') != 3) {
            redirect('user/akses_blocked');
        }
        $this->load->model('Reserv_model');
        $this->load->model('Konselor_model');
        // $this->load->model('profilKonselor_model')
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home Page Counselor';
        $data['konselor'] = $this->db->get_where('konselor', ['username' =>
        $this->session->userdata('username')])->row_array();
        $id_konselor = $this->session->userdata('id_konselor');
        $data['reservasi'] = $this->Reserv_model->getResevByIdKonselor($id_konselor);
        if ($this->input->post('keyword')) {
            $data['reservasi'] = $this->Reserv_model->cariDataReserv();
        }
        $this->load->view('template/headerKonselor', $data);
        $this->load->view('konselor/konselorReservasi', $data);
        $this->load->view('template/footer');
    }

    public function profileKonselor()
    {
        $data['title'] = 'Account Page';
        $data['konselor'] = $this->db->get_where('konselor', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('template/headerKonselor', $data);
        $this->load->view('konselor/profileKonselor', $data);
        $this->load->view('template/footer');
    }

    public function ubahprofileKonselor($id)
    {
        $data['title'] = 'Edit Account Page';
        $data['konselor'] = $this->db->get_where('konselor', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['role'] = ['Counselor', 'Psychologist', 'Psychiatrist'];
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('schedule[]', 'Schedule', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required');
        $this->form_validation->set_rules('capacity', 'Capacity', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerKonselor', $data);
            $this->load->view('Konselor/ubahprofileKonselor', $data);
        } else {
            $reserv = $this->db->get_where('reservasi', ['id_konselor' =>
            $data['konselor']['id_konselor']])->result_array();
            $data = [
                'fullname' => $this->input->post('fullname'),
                'schedule' => (implode(', ', $this->input->post('schedule'))),
                'role' => $this->input->post('role'),
                'speciality' => $this->input->post('speciality'),
                'capacity' => $this->input->post('capacity'),
            ];
            $name = [
                'nama_konselor' => $this->input->post('fullname')
            ];
            $this->Konselor_model->edit_konselor($id, $data);
            $this->session->set_flashdata('flash', 'Congratulation! Your Account Has Been Updated');
            foreach ($reserv as $r) :
                $this->Reserv_model->ubahDataReserv($r['id_reservasi'], $name);
            endforeach;
            redirect('KonselorC/profileKonselor');
        }
    }

    public function ubahPassword()
    {
        $data['title'] = 'Change Password Page';
        $data['konselor'] = $this->db->get_where('konselor', ['username' =>
        $this->session->userdata('username')])->row_array();
        $konselor = $data['konselor'];
        $this->form_validation->set_rules('oldpass', 'Password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|min_length[3]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerKonselor', $data);
            $this->load->view('konselor/ubahPassword', $data);
        } else {
            $current = $this->input->post('oldpass');
            if ((password_verify($current, $data['konselor']['password'])) || ($current == $data['konselor']['password'])) {
                $password_hash = password_hash($this->input->post('newpass'), PASSWORD_DEFAULT);
                $this->Konselor_model->edit_passkonselor($data['konselor']['id_konselor'], $password_hash);
                $this->session->set_flashdata('flash', 'Congratulation! Password Changed Successfully');
                redirect('KonselorC/profileKonselor');
            } else {
                $this->session->set_flashdata('flash', 'Wrong Current Password!');
                redirect('KonselorC/ubahPassword');
            }
        }
    }

    public function ubah($id_reservasi)
    {
        $data['title'] = 'Edit Reservation Page';
        $data['konselor'] = $this->db->get_where('konselor', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['reservasi'] = $this->Reserv_model->getResevById($id_reservasi);
        $data['status'] = ['schedule', 'pending', 'cancel'];


        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('tgl_reserv', 'Reservation Date', 'required');
        $this->form_validation->set_rules('nama_konselor', 'Counselor Name', 'required');

        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/headerKonselor', $data);
            $this->load->view('konselor/ubahReservasi', $data);
        } else {
            $id = $this->db->get_where('reservasi', ['id_reservasi' => $id_reservasi])->row_array();
            $data = [
                'nama' => $this->input->post('nama'),
                'tgl_reserv' => $this->input->post('tgl_reserv'),
                'nama_konselor' => $this->input->post('nama_konselor'),
                'status' => $this->input->post('status'),
                'id_pasien' =>  $id['id_pasien'],
                'id_konselor' => $id['id_konselor']
            ];
            $this->Reserv_model->ubahDataReserv($id_reservasi, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('KonselorC/');
        }
    }
}
