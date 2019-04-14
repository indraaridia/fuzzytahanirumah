<?php  

Class Rulebase_model extends CI_model
{
	public function getAllRulebase()
	{
		return $this->db->get('rulebase')->result_array();
	}

	public function tambahDataRulebase()
	{
		$data = [
			"rulename" => $this->input->post('rulename', true),
			"biaya" => $this->input->post('biaya', true),
			"jarak" => $this->input->post('jarak', true),
			"akses_jalan" => $this->input->post('akses_jalan', true),
			"penginapan" => $this->input->post('penginapan', true),
			"fasilitas" => $this->input->post('fasilitas', true),
			"output_fuzzy" => $this->input->post('output_fuzzy', true),
			"nilai_fuzzy" => $this->input->post('nilai_fuzzy', true),
				];

				$this->db->insert('rulebase', $data);
	}

	public function hapusDataRulebase($id)
	{
		$this->db->where('idrule', $id);
		$this->db->delete('rulebase');
	}


	public function getRulebaseById($id)
	{
		return $this->db->get_where('rulebase', ['idrule'=> $id])->row_array();
	}

	public function ubahDataRulebase()
	{
		$data = [
			"rulename" => $this->input->post('rulename', true),
			"biaya" => $this->input->post('biaya', true),
			"jarak" => $this->input->post('jarak', true),
			"akses_jalan" => $this->input->post('akses_jalan', true),
			"penginapan" => $this->input->post('penginapan', true),
			"fasilitas" => $this->input->post('fasilitas', true),
			"output_fuzzy" => $this->input->post('output_fuzzy', true),
			"nilai_fuzzy" => $this->input->post('nilai_fuzzy', true),
				];

				$this->db->where('idrule', $this->input->post('idrule'));
				$this->db->update('rulebase', $data);
	}


	public function cariDataRulebase()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('rulename', $keyword);
		
		$this->db->or_like('output_fuzzy', $keyword);
		
		return $this->db->get('rulebase')->result_array();
	}


}
