<?php
defined('BASEPATH') or exit('No direct script access alowed');
class Main extends CI_Controller{
    
    public function index(){
        $this->load->helper('url');
        //$this->load->view('v_header');
        $this->load->view('v_index');
    }
    
    public function login()
    {

        $this->load->view('v_login');
    }
    
    public function cek_login()
    {
        
    }
    
    
    
}
?>