<?php 

Class Perhitungan_model extends CI_model
{
	public function getAllWisata()
	{
		return $this->db->get('wisata')->result_array();
		//return $this->db->get('hasil_biaya')->result_array();
	}
	// public function getAllHasilBiaya()
	// {
	// 	return $this->db->get('hasil_biaya')->result_array();
	// }
	public function getAllRulebase()
	{
		return $this->db->get('rulebase')->result_array();
	}

	// public function tambahDataFuzzyfikasi()
	// {
	// 	$data = [
	// 		"id" => $this->load->view('id', $data, true),
	// 		"nama_wisata" => $this->load->view('nama_wisata', $data, true),
	// 		"murah" => $this->load->view('murah', $data, true),
	// 		"sedang" => $this->load->view('sedang', $data, true),
	// 		"mahal" => $this->load->view('mahal', $data, true),
	// 		];		
	// 			$this->db->insert('hasil_biaya', $data);
		
	// }



}