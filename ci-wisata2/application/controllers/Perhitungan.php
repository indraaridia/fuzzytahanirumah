<?php 

Class Perhitungan extends CI_Controller
{

	public function __construct()
	{
		 parent ::__construct();
		$this->load->model('Perhitungan_model');
		
	}

	public function index()
	{	
		$data['judul'] = 'Halaman Perhitungan';
		$data['wisata'] =  $this->Perhitungan_model->getAllWisata();
		$data['rulebase'] = $this->Perhitungan_model->getAllRulebase();
		// $data['hasil_biaya']=$this->Perhitungan_model->getAllHasilBiaya();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('perhitungan/perhitungan',$data);
		$this->load->view('templates_admin/footer');
	}



	}