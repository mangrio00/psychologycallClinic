<?php
class Reserv_model extends CI_model
{
	public function getAllResev()
	{
		$this->db->select('*');
		$this->db->from('reservasi');
		$this->db->order_by('tgl_reserv');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getResevById($id_reservasi)
	{
		$this->db->where('id_reservasi', $id_reservasi);
		return $this->db->get('reservasi')->row_array();
	}

	public function getResevByIdPasien($id_pasien)
	{
		$this->db->select('*');
		$this->db->from('reservasi');
		$where = "id_pasien='" .  $id_pasien . "'";
		$this->db->where($where);
		$this->db->order_by('tgl_reserv');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getResevByIdKonselor($id_konselor)
	{
		$this->db->select('*');
		$this->db->from('reservasi');
		$where = "id_konselor='" . $id_konselor . "' AND tgl_reserv >= CURDATE()";
		$this->db->where($where);
		$this->db->order_by('tgl_reserv');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function hapusData($id)
	{
		$this->db->where('id_reservasi', $id);
		$this->db->delete('reservasi');
	}

	public function tambahDataReserv($data)
	{
		return $this->db->insert('reservasi', $data);
	}

	public function ubahDataReserv($id_reservasi, $data)
	{
		$this->db->where('id_reservasi', $id_reservasi);
		return $this->db->update('reservasi', $data);
	}

	public function cariDataReserv()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->like('nama', $keyword);
		$this->db->or_like('tgl_resev', $keyword);
		$this->db->or_like('nama_konselor', $keyword);
		$this->db->or_like('status', $keyword);
		//return data mahasiswa that has been searched
		return $this->db->get('reservasi')->result_array();
	}
}
