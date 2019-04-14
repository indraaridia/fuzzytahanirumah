<?php 

Class Home extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/header', $data);
		$this->load->view('home/home_user');
		$this->load->view('templates/footer');
	}
}