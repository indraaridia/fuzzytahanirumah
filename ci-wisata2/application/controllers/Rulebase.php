<?php 


Class Rulebase extends CI_Controller
{
	public function __construct()
	{
		 parent ::__construct();
		$this->load->model('Rulebase_model');
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$data['judul'] = 'Halaman Rule Base System';
		$data['rulebase'] =  $this->Rulebase_model->getAllRulebase();
		if ($this->input->post('keyword')) {
			$data['rulebase'] = $this->Rulebase_model->cariDataRulebase();
		}
		$this->load->view('templates_admin/header', $data);
		$this->load->view('rulebase/rulebase',$data);
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Rulebase';

		$this->form_validation->set_rules('rulename', 'Rulename', 'required');
		
		$this->form_validation->set_rules('nilai_fuzzy', 'Nilai Fuzzy', 'required');

		if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates_admin/header', $data);
			   		$this->load->view('rulebase/tambah');
					$this->load->view('templates_admin/footer');
                }
                else
                {
                    $this->Rulebase_model->tambahDataRulebase();
                    $this->session->set_flashdata('flash','Ditambahkan!');
                    redirect('rulebase');
                }
		
	}


	public function hapus($id)
	{
		 $this->Rulebase_model->hapusDataRulebase($id);
		 $this->session->set_flashdata('flash','Dihapus!');
         redirect('rulebase/rulebase');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Rulebase';
		$data['rulebase'] = $this->Rulebase_model->getRulebaseById($id);
		$data['biaya'] = ['Murah','Sedang', 'Mahal'];
		$data['jarak'] = ['Dekat','Sedang', 'Jauh'];
		$data['akses_jalan'] = ['Gampang','Sedang', 'Sulit'];
		$data['penginapan'] = ['Sedikit','Sedang', 'Banyak'];
		$data['output_fuzzy'] = ['Direkomendasikan','Cukup Direkomendasikan', 'Tidak Direkomendasikan'];
		$data['fasilitas'] = ['Sedikit','Sedang', 'Banyak'];

		$this->form_validation->set_rules('rulename', 'Rulename', 'required');
		$this->form_validation->set_rules('output_fuzzy', 'Output Fuzzy', 'required');
		$this->form_validation->set_rules('nilai_fuzzy', 'Nilai Fuzzy', 'required');
		

		if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates_admin/header', $data);
			   		$this->load->view('rulebase/ubah', $data);
					$this->load->view('templates_admin/footer');
                }
                else
                {
                    $this->Rulebase_model->ubahDataRulebase();
                    $this->session->set_flashdata('flash','Diubah!');
                    redirect('rulebase');
                }
		
	}

}
