<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Guru extends CI_Model {
  
    public function __construct()
	{
		//$this->load->database();
	}
    
    
    function tampildata()
    {
        $hasil = $this->db->get('tbl_guru'); 
        if ($hasil->num_rows() > 0)
		{
			return $hasil->result();
		} 
		else 
		{
			return array();
		}  
    }
    
    function caridataguru($nip)
    {
        $hasil = $this->db->where('nip', $nip)->get('tbl_guru');
                          
		if($hasil->num_rows() > 0)
		{
			return $hasil->row();
		} 
		else 
		{
			return array();
		}
    }
    
    function hapusdataguru($nip)
    {
        $this->db->where('nip', $nip);
		$this->db->delete('tbl_guru');
    }
        
}

?>    