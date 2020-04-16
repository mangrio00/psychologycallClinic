<?php
class Pasien_model extends CI_model
{
    public function tambah_pasien($data)
    {
        return $this->db->insert('pasien', $data);
    }

    public function get_pasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function get_pasienbyId($id)
    {
        return $this->db->get_where('pasien', ['id_pasien' => $id])->row_array();
    }

    public function cariDataPasien()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('firstname', $keyword);
        $this->db->like('lastname', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('phone', $keyword);
        $this->db->or_like('dob', $keyword);
        $this->db->or_like('gender', $keyword);
        return $this->db->get('pasien')->result_array();
    }

    public function hapus_pasien($id)
    {
        $this->db->where('id_pasien', $id);
        $this->db->delete('pasien');
    }

    public function edit_pasien($id, $data)
    {
        $this->db->where('id_pasien', $id);
        return $this->db->update('pasien', $data);
    }
}
