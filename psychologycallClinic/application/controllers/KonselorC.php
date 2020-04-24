<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonselorC extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Reserv_model');
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
