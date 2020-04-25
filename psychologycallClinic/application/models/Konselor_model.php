<?php
class Konselor_model extends CI_model
{
    public function tambah_konselor($data)
    {
        return $this->db->insert('konselor', $data);
    }

    public function get_konselor()
    {
        $this->db->select('*');
        $this->db->from('konselor');
        $this->db->order_by('role');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_konselorbyId($id)
    {
        return $this->db->get_where('konselor', ['id_konselor' => $id])->row_array();
    }

    public function get_konselorbyFullname($fullname)
    {
        return $this->db->get_where('konselor', ['fullname' => $fullname])->row_array();
    }

    public function cariDataKonselor($keyword)
    {
        $this->db->like('fullname', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('role', $keyword);
        $this->db->or_like('schedule', $keyword);
        $this->db->or_like('speciality', $keyword);
        $this->db->or_like('capacity', $keyword);
        return $this->db->get('konselor')->result_array();
    }

    public function hapus_konselor($id)
    {
        $this->db->where('id_konselor', $id);
        $this->db->delete('konselor');
    }

    public function edit_konselor($id, $data)
    {
        $this->db->where('id_konselor', $id);
        return $this->db->update('konselor', $data);
    }
}
