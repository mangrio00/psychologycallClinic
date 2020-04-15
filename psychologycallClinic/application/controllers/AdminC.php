<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminC extends CI_Controller
{
    //ADMIN PAGE
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }
    public function adminPasien()
    {
        $this->load->view('template/headerAdmin');
        $this->load->view('admin/adminPasien');
        $this->load->view('template/footer');
    }

    public function adminKonselor()
    {
        $data['konselor'] = $this->Admin_model->get_konselor();
        if ($this->input->post('keyword')) {
            $data['konselor'] = $this->Admin_model->cariDataKonselor();
        }
        $this->load->view('template/headerAdmin');
        $this->load->view('admin/adminKonselor', $data);
        $this->load->view('template/footer');
    }

    public function adminReservasi()
    {
        $this->load->view('template/headerAdmin');
        $this->load->view('admin/adminReservasi');
        $this->load->view('template/footer');
    }

    public function tambahKonselor()
    {
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[konselor.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[konselor.email]');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('schedule[]', 'Schedule', 'required|trim');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required|trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAdmin');
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
            $this->Admin_model->tambah_konselor($data);
            redirect('AdminC/adminKonselor');
        }
    }

    public function hapusKonselor($id)
    {
        $this->Admin_model->hapus_konselor($id);
        $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
        redirect('AdminC/adminKonselor');
    }

    public function editKonselor($id)
    {
        $data['konselor'] = $this->Admin_model->get_konselorbyId($id);
        $data['role'] = ['Counselor', 'Psychologist', 'Psychiatrist	'];

        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[konselor.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[konselor.email]');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('schedule[]', 'Schedule', 'required|trim');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required|trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/headerAdmin');
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
                'id_level' => 3
            ];
            $this->Admin_model->edit_konselor($id, $data);
            redirect('AdminC/adminKonselor');
        }
    }
}
