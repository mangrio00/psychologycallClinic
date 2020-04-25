<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminC extends CI_Controller
{
    //ADMIN PAGE
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('user/login');
        } else if ($this->session->userdata('id_level') != 1) {
            redirect('user/akses_blocked');
        }
        $this->load->model('Konselor_model');
        $this->load->model('Pasien_model');
        $this->load->model('Reserv_model');
        $this->load->library('form_validation');
    }
    public function adminPasien()
    {
        $data['title'] = 'Patient Data';
        $data['pasien'] = $this->Pasien_model->get_pasien();
        if ($this->input->post('keyword')) {
            $data['pasien'] = $this->Pasien_model->cariDataPasien();
        }
        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/adminPasien', $data);
        $this->load->view('template/footer');
    }

    public function adminKonselor()
    {
        $data['title'] = 'Counselor Data';
        $data['konselor'] = $this->Konselor_model->get_konselor();
        if ($this->input->post('keyword')) {
            $data['konselor'] = $this->Konselor_model->cariDataKonselor($this->input->post('keyword'));
        }
        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/adminKonselor', $data);
        $this->load->view('template/footer');
    }

    public function adminReservasi()
    {
        $data['title'] = 'Reservation Data';
        $data['reservasi'] = $this->Reserv_model->getAllResev();
        if ($this->input->post('keyword')) {
            $data['reservasi'] = $this->Reserv_model->cariDataReserv();
        }
        $this->load->view('template/headerAdmin', $data);
        $this->load->view('admin/adminReservasi', $data);
    }

    public function tambahKonselor()
    {
        $data['title'] = 'Create Counselor';
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[konselor.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[konselor.email]');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('schedule[]', 'Schedule', 'required|trim');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required|trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAdmin', $data);
            $this->load->view('admin/tambahAdminKonselor');
        } else {
            $data = [
                'fullname' => $this->input->post('fullname'),
                'username' => $this->input->post('username'),
                'password' => 123456,
                'email' => $this->input->post('email'),
                'role' => $this->input->post('role'),
                'schedule' => (implode(', ', $this->input->post('schedule'))),
                'speciality' => $this->input->post('speciality'),
                'capacity' => $this->input->post('capacity'),
                'id_level' => 3
            ];
            $this->Konselor_model->tambah_konselor($data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambah');
            redirect('AdminC/adminKonselor');
        }
    }

    public function hapusKonselor($id)
    {
        $this->Konselor_model->hapus_konselor($id);
        $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
        redirect('AdminC/adminKonselor');
    }

    public function editKonselor($id)
    {
        $data['title'] = 'Edit Counselor';
        $data['konselor'] = $this->Konselor_model->get_konselorbyId($id);
        $data['role'] = ['Counselor', 'Psychologist', 'Psychiatrist'];

        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('schedule[]', 'Schedule', 'required|trim');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required|trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/headerAdmin', $data);
            $this->load->view('admin/editAdminKonselor', $data);
        } else {
            $data = [
                'fullname' => $this->input->post('fullname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'role' => $this->input->post('role'),
                'schedule' => (implode(', ', $this->input->post('schedule'))),
                'speciality' => $this->input->post('speciality'),
                'capacity' => $this->input->post('capacity'),
            ];
            $this->Konselor_model->edit_konselor($id, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('AdminC/adminKonselor');
        }
    }
    //ADMINPASIEN
    public function tambahPasien()
    {
        $data['title'] = 'Create Patient';
        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[konselor.email]');
        $this->form_validation->set_rules('dob', 'DOB', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAdmin', $data);
            $this->load->view('admin/tambahAdminPasien');
        } else {
            $data = [
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'dob' => $this->input->post('dob'),
                'phone' => $this->input->post('phone'),
                'gender' => $this->input->post('gender'),
                'username' => random_string('alpha', 6),
                'password' => 654321,
                'id_level' => 2
            ];
            $this->Pasien_model->tambah_pasien($data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambah');
            redirect('AdminC/adminPasien');
        }
    }

    public function hapusPasien($id)
    {
        $this->Pasien_model->hapus_pasien($id);
        $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
        redirect('AdminC/adminPasien');
    }

    public function editPasien($id)
    {
        $data['title'] = 'Edit Patient';
        $data['pasien'] = $this->Pasien_model->get_pasienbyId($id);

        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('dob', 'DOB', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/headerAdmin', $data);
            $this->load->view('admin/editAdminPasien', $data);
        } else {
            $data = [
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'dob' => $this->input->post('dob'),
                'phone' => $this->input->post('phone'),
                'gender' => $this->input->post('gender'),
            ];
            $this->Pasien_model->edit_pasien($id, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('AdminC/adminPasien');
        }
    }
}
