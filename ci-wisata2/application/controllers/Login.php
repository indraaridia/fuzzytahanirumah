<?php 

Class Login extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Halaman Login';
		$this->load->view('templates/header', $data);
		$this->load->view('login/login');
		$this->load->view('templates/footer');
	}
}