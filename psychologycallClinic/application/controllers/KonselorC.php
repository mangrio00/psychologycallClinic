<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonselorC extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Reserv_model');
        // $this->load->model('profilKonselor_model')
        $this->load->library('form_validation');
    }

    // public function index($id)
    // {
    //     $data['konselor'] = $this->profilKonselor_model->getProfilById($id);
    //     $this->load->view('template/headerKonselor');
    //     $this->load->view('konselor/profileKonselor');
    //     $this->load->view('template/footer');
    // }

    public function index()
    {
        $data['reservasi'] = $this->Reserv_model->getAllResev();
        if ($this->input->post('keyword')) {
            $data['reservasi'] = $this->Reserv_model->cariDataReserv();
        }
        $this->load->view('template/headerKonselor', $data);
        $this->load->view('konselor/konselorReservasi', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id_reservasi)
    {
        $this->Reserv_model->hapusData($id_reservasi);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('KonselorC');
    }

    public function ubah($id_reservasi)
    {
        $data['reservasi'] = $this->Reserv_model->getResevById($id_reservasi);
        $data['role'] = ['Counselor', 'Psychologist', 'Psychiatrist'];
        $data['status'] = ['Schedule', 'Pending', 'Cancel'];


        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('tgl_resev', 'tgl_resev', 'required');
        // $this->form_validation->set_rules('role', 'role', 'required');
        $this->form_validation->set_rules('nama_konselor','nama_konselor', 'required');

        if ( $this->form_validation->run() ==  FALSE) {
            $this->load->view('template/headerKonselor', $data);
            $this->load->view('konselor/ubahReservasi', $data);
            $this->load->view('template/footer');
        } else {
            $this->Reserv_model->ubahDataReserv($id_reservasi, $data);
            $this->session->set_flashdata('flash', 'Ubah');
            redirect('KonselorC');
        }
    }
 }
