<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonselorC extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/headerKonselor');
        $this->load->view('konselor/konselorReservasi');
        $this->load->view('template/footer');
    }
}
