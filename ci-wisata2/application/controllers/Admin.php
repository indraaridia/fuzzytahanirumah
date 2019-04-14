<?php 

Class Admin extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('administrator/administrator');
		$this->load->view('templates_admin/footer');
	}
}