<?php
class User_model extends CI_model
{
    public function tambah_pasien($data)
    {
        return $this->db->insert('pasien', $data);
    }
    public function getPasienbyUsername($user)
    {
        return $this->db->get_where('pasien', ['username' => $user['username']])->row_array();
    }
    public function getAdminbyUsername($user)
    {
        return $this->db->get_where('admin', ['username' => $user['username']])->row_array();
    }
    public function getKonselorbyUsername($user)
    {
        return $this->db->get_where('konselor', ['username' => $user['username']])->row_array();
    }
}
