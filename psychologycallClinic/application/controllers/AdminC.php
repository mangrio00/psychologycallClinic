<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminC extends CI_Controller
{
    //ADMIN PAGE
    public function adminPasien()
    {
        $this->load->view('template/headerAdmin');
        $this->load->view('admin/adminPasien');
        $this->load->view('template/footer');
    }

    public function adminKonselor()
    {
        $this->load->view('template/headerAdmin');
        $this->load->view('admin/adminKonselor');
        $this->load->view('template/footer');
    }

    public function adminReservasi()
    {
        $this->load->view('template/headerAdmin');
        $this->load->view('admin/adminReservasi');
        $this->load->view('template/footer');
    }
}
