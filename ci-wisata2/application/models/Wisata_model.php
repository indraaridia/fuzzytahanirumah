<?php  

Class Wisata_model extends CI_model
{
	public function getAllWisata()
	{
		return $this->db->get('wisata')->result_array();
	}

	// public function baitwah()
	// {
	// 	return $this->db->get('hasil_biaya')->result_array();
	// }

	public function tambahDataWisata()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"jenis" => $this->input->post('jenis', true),
			"biaya" => $this->input->post('biaya', true),
			"jarak" => $this->input->post('jarak', true),
			"akses_jalan" => $this->input->post('akses_jalan', true),
			"penginapan" => $this->input->post('penginapan', true),
			"fasilitas" => $this->input->post('fasilitas', true),
				];
		
				$this->db->insert('wisata', $data);
				
	}

	public function hapusDataWisata($id)
	{
		$this->db->where('idwisata', $id);
		$this->db->delete('wisata');
	}


	public function getWisataById($id)
	{
		return $this->db->get_where('wisata', ['idwisata'=> $id])->row_array();
	}


		public function ubahDataWisata()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"jenis" => $this->input->post('jenis', true),
			"biaya" => $this->input->post('biaya', true),
			"jarak" => $this->input->post('jarak', true),
			"akses_jalan" => $this->input->post('akses_jalan', true),
			"penginapan" => $this->input->post('penginapan', true),
			"fasilitas" => $this->input->post('fasilitas', true),
				];

				$this->db->where('idwisata', $this->input->post('idwisata'));
				$this->db->update('wisata', $data);
	}


	public function cariDataWisata()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('jenis', $keyword);
		$this->db->or_like('biaya', $keyword);
		$this->db->or_like('jarak', $keyword);
		$this->db->or_like('akses_jalan', $keyword);
		$this->db->or_like('penginapan', $keyword);
		$this->db->or_like('fasilitas', $keyword);
		return $this->db->get('wisata')->result_array();
	}


}

