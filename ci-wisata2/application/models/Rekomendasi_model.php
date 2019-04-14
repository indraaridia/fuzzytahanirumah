<?php 

Class Rekomendasi_model extends CI_model
{
	public function getAllRekomendasi()
	{
		return $this->db->get('hasil_rekomendasi')->result_array();
		// return $this->db->get('wisata')->result_array();
	}

	public function tambahRekomendasi()
	{
		$data = [
			"biaya" => $this->input->post('biaya', true),
			"jarak" => $this->input->post('jarak', true),
			"akses_jalan" => $this->input->post('akses_jalan', true),
			"penginapan" => $this->input->post('penginapan', true),
			"fasilitas" => $this->input->post('fasilitas', true),
				];
		
				$this->db->insert('hasil_rekomendasi', $data);
				
	}

	public function insertData()
	{	$data = [
		$biaya = $this->input->post('biaya', true),
		$jarak = $this->input->post('jarak', true),
		$akes_jalan = $this->input->post('akses_jalan', true),
		$penginapan = $this->input->post('penginapan', true),
		$fasilitas = $this->input->post('fasilitas', true),
	];

	return array($data);
	}
                      
            
}