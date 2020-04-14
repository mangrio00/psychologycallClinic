<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PasienC extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/headerPasien');
        $this->load->view('pasien/pasienReservasi');
        $this->load->view('template/footer');
    }
}
