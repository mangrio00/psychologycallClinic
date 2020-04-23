<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PasienC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $this->load->view('template/headerPasien', $data);
        $this->load->view('pasien/pasienReservasi', $data);
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
                'nama' => $this->input->post('nama'),
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

        if (($this->form_validation->run() == false) || ($tgl < $tglsekarang)) {
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
