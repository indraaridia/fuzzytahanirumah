<?php 

Class Rekomendasi extends CI_Controller
{
	public function __construct()
	{
		 parent ::__construct();
		$this->load->model('Rekomendasi_model');
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$data['judul'] = 'Halaman Rekomendasi';
		$data['hasil_rekomendasi'] =  $this->Rekomendasi_model->getAllRekomendasi();
		// $data['wisata'] =  $this->Rekomendasi_model->getAllRekomendasi();
		// if ($this->input->post('keyword')) {
		// 	$data['hasil_rekomendasi'] = $this->Rekomendasi_model->cariDataRekomendasi();
		// }
		$this->load->view('templates/header', $data);
		$this->load->view('rekomendasi/tambah', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
		{
			$data['judul'] = 'Form Rekomendasi';
			$data['hasil_rekomendasi'] =  $this->Rekomendasi_model->getAllRekomendasi();
		// $data['wisata'] =  $this->Rekomendasi_model->getAllRekomendasi();
		// 	if ($this->input->post('tambah')) {
		// 	$data['hasil_rekomendasi'] = $this->Rekomendasi_model->cariDataRekomendasi();
		// }

			$this->form_validation->set_rules('biaya', 'Biaya', 'required');
			$this->form_validation->set_rules('jarak', 'Jarak', 'required');
			$this->form_validation->set_rules('akses_jalan', 'Akses_Jalan', 'required');
			$this->form_validation->set_rules('penginapan', 'Penginapan', 'required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

			if ($this->form_validation->run() == FALSE)
	                {
	                    $this->load->view('templates/header', $data);
				   		$this->load->view('rekomendasi/tambah', $data);
						$this->load->view('templates/footer');

	                }
	                else
	                {
	                    // $this->Rekomendasi_model->tambahRekomendasi();
	                    $this->Rekomendasi_model->insertData();
	                    $this->session->set_flashdata('flash','Di Proses!');
	                    redirect('rekomendasi/tambah');


	                }

	                
			
		}


// public function tambah()
// 	{
// 		$data['judul'] = 'Form Tambah Data Rekomendasi';

// 		$this->form_validation->set_rules('biaya', 'Biaya', 'required');
// 		$this->form_validation->set_rules('jarak', 'Jarak', 'required');
// 		$this->form_validation->set_rules('akses_jalan', 'Akses_Jalan', 'required');
// 		$this->form_validation->set_rules('penginapan', 'Penginapan', 'required');
// 		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

// 		if ($this->form_validation->run() == FALSE)
//                 {
              
//                     $this->Rekomendasi_model->tambahDataRekomendasi();
//                     $this->session->set_flashdata('flash','Ditambahkan!');
//                     redirect('rekomendasi/rekomendasi');
//                 }
		
// 	}
}