<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Konfigurasi extends CI_Model {

    public function __construct()
	{
		
	}
    
    function tampildata()
    {
        $hasil = $this->db->get('tbl_konfigurasi'); 
        if ($hasil->num_rows() > 0)
		{
			return $hasil->result();
		} 
		else 
		{
			return array();
		}  
    }
    
    function cariKonfigurasi($id)
    {
        $hasil = $this->db->where('id_kategori', $id)
						  ->limit(1)
						  ->get('tbl_konfigurasi');
                          
		if($hasil->num_rows() > 0)
		{
			return $hasil->row();
		} 
		else 
		{
			return array();
		}
    }
    
    function entriBobot($tabel,$data)
    {
        $this->db->where('id',$data['id']);
        $q1=$this->db->get($tabel);
            
            
        if($q1->num_rows()>0)
        {
                $this->db->where('id',$data['id']);
                $this->db->update($tabel,$data);
                
        }
        else{
            $this->db->insert($tabel,$data);
        }
    }
    
    function tampilBobot($tabel)
    {
        $hasil = $this->db->get($tabel); 
        if ($hasil->num_rows() > 0)
		{
			return $hasil->result();
		} 
		else 
		{
			return array();
		}  
    }
    
    function eksekusiQuery($query)
    {
        $hasil= $this->db->query($query);
        return $hasil->result();
    }
    
    function tampilDataKlasifikasi()
    {
        $hasil = $this->db->get('vderajat'); 
        if ($hasil->num_rows() > 0)
		{
			return $hasil->result();
		} 
		else 
		{
			return array();
		}  
    }
    
}

?>