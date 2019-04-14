<?php 


Class Wisata extends CI_Controller
{
	public function __construct()
	{
		 parent ::__construct();
		$this->load->model('Wisata_model');
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$data['judul'] = 'Halaman Wisata';
		$data['wisata'] =  $this->Wisata_model->getAllWisata();
		if ($this->input->post('keyword')) {
			$data['wisata'] = $this->Wisata_model->cariDataWisata();
		}
		$this->load->view('templates_admin/header', $data);
		$this->load->view('wisata/index',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Wisata';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('biaya', 'Biaya', 'required');
		$this->form_validation->set_rules('jarak', 'Jarak', 'required');
		$this->form_validation->set_rules('akses_jalan', 'Akses_Jalan', 'required');
		$this->form_validation->set_rules('penginapan', 'Penginapan', 'required');
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

		if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates_admin/header', $data);
			   		$this->load->view('wisata/tambah');
					$this->load->view('templates_admin/footer');
                }
                else
                {
                    $this->Wisata_model->tambahDataWisata();
                    $this->session->set_flashdata('flash','Ditambahkan!');
                    redirect('wisata/index');
                }

                
		
	}


	public function hapus($id)
	{
		 $this->Wisata_model->hapusDataWisata($id);
		 $this->session->set_flashdata('flash','Dihapus!');
         redirect('wisata/index');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Wisata';
		$data['wisata'] = $this->Wisata_model->getWisataById($id);
		$data['jenis'] = ['Wisata Alam Bahari','Wisata Alam Hutan', 'Wisata Budaya'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('biaya', 'Biaya', 'required');
		$this->form_validation->set_rules('jarak', 'Jarak', 'required');
		$this->form_validation->set_rules('akses_jalan', 'Akses_Jalan', 'required');
		$this->form_validation->set_rules('penginapan', 'Penginapan', 'required');
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

		if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates_admin/header', $data);
			   		$this->load->view('wisata/ubah', $data);
					$this->load->view('templates_admin/footer');
                }
                else
                {
                    $this->Wisata_model->ubahDataWisata();
                    $this->session->set_flashdata('flash','Diubah!');
                    redirect('wisata/index');
                }
		
	}


}
