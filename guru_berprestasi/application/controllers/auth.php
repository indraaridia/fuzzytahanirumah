<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() 
	{
		
	}
    
    public function cek_login()
    {
        $this->session->sess_destroy();
   	    $data = array('username' => $this->input->post('username', TRUE),
                      'password' => md5($this->input->post('password', TRUE)));
                      
        $hasil = $this->db->get_where('user',$data);
        
        if ($hasil->num_rows() == 1) 
		{
			foreach ($hasil->result() as $sess) 
			{
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['uid'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->jenis_akun;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='Administrator') 
			{
                redirect('admin/c_admin');
			}
			else if ($this->session->userdata('level')=='User') 
			{
				redirect('admin/c_user');
			}		
		}
		else 
		{
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
        
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }


}

?>