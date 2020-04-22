<?php
class profilKonselor_model extends CI_model
{

	// public function getAllProfil()
	// {
	// 	return $this->db->get('konselor')->result_array();
	// 	//use query builder to get data table "mahasiswa"

	// }

	public function getProfilById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('konselor')->row_array();
		

	}

	// public function ubahDataProfil($id, $data)
	// {
	// 	$data = [
	// 		"firstname" => $this->input->post('firstname', true),
	// 		"resrvasi_date" => $this->input->post('reservasi_date', true),
	// 		"role" => $this->input->post('role', true),
	// 		"fullname" => $this->input->post('fullname', true),
	// 		"status" => $this->input->post('status', true),
	// 	];

	// 	$this->db->where('id', $id);
	// 	return $this->db->update('reservasi', $data);

	// }


}