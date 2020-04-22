<?php
class Reserv_model extends CI_model
{
	public function getAllResev()
	{
		return $this->db->get('reservasi')->result_array();
	}

	public function getResevById($id_reservasi)
	{
		$this->db->where('id_reservasi', $id_reservasi);
		return $this->db->get('reservasi')->row_array();
	}

	public function hapusData($id_reservasi)
	{
		$this->db->where('id_reservasi', $id_reservasi);
		$this->db->delete('reservasi');
		//use query builder to delete data based on id 

	}

	

	public function ubahDataReserv($id_reservasi, $data)
	{
		$data =  [
			"nama" => $this->input->post('nama', true),
			"tgl_reserv" => $this->input->post('tgl_reserv', true),
			"nama_konselor" => $this->input->post('nama_konselor', true),
			"role" => $this->input->post('role', true),
			"status" => $this->input->post('status', true),
		];

		$this->db->where('id_reservasi', $id_reservasi);
		return $this->db->update('reservasi', $data);

	}

	public function cariDataReserv()
	{
		$keyword = $this->input->post('keyword', true);

		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->like('nama', $keyword);
		$this->db->or_like('tgl_resev', $keyword);
		$this->db->or_like('role', $keyword);
		$this->db->or_like('nama_konselor', $keyword);
		$this->db->or_like('status', $keyword);
		//return data mahasiswa that has been searched
		return $this->db->get('reservasi')->result_array();
	}
}
