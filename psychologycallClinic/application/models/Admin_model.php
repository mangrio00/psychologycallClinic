<?php
class Admin_model extends CI_model
{
    public function tambah_konselor($data)
    {
        return $this->db->insert('konselor', $data);
    }

    public function get_konselor()
    {
        return $this->db->get('konselor')->result_array();
    }

    public function cariDataKonselor()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('fullname', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('role', $keyword);
        $this->db->or_like('schedule', $keyword);
        $this->db->or_like('speciality', $keyword);
        $this->db->or_like('capacity', $keyword);
        return $this->db->get('konselor')->result_array();
    }
}
