<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function __construct() 
	{
		parent::__construct();
	}

	public function index() 
	{

        $this->load->helper('url');
         $this->load->model("m_guru","data");
		$this->load->view('admin/v_index');
        //$this->load->view('v_coba');
	}
    
    public function dataguru()
    {
         $this->load->model("m_guru","data");
         $this->load->view('admin/v_dataguru');
    }
    
    public function formentridataguru()
    {
        $this->load->view('admin/v_entridataguru');
    }
    
    public function formeditdataguru($nip)
    {
        $this->load->model("m_guru");
        $data['gru'] = $this->m_guru->caridataguru($nip);
        $this->load->view('admin/v_editdataguru',$data);
    }
    
    public function formdetaildataguru($nip)
    {
        $this->load->model("m_guru");
        $data['gru'] = $this->m_guru->caridataguru($nip);
        $this->load->view('admin/v_detaildataguru',$data);
    }
    
    public function formpenentuankategori()
    {
        $this->load->model("m_konfigurasi","data");
        $this->load->view('admin/v_konfigurasi');
    }
    
    public function prosesfuzzifikasi()
    {
        $this->load->model('m_konfigurasi');
        $data['kehadiran']=$this->m_konfigurasi->tampilBobot('tbl_bobotkehadiran');
        $data['kinerja']=$this->m_konfigurasi->tampilBobot('tbl_bobotkinerja');
        $data['evaluasi']=$this->m_konfigurasi->tampilBobot('tbl_bobotevaluasi');
        $data['peng_materi']=$this->m_konfigurasi->tampilBobot('tbl_bobotpeng_materi');
        $this->load->view('admin/v_fuzzifikasi',$data);
    }
    
    public function hasilklasifikasi()
    {
        
        $this->load->model("m_konfigurasi");
        $data['ppa'] = $this->m_konfigurasi->tampilDataKlasifikasi();
        $this->load->view('admin/v_hasil',$data);
    }
    
    
    public function formdataguru_validation()
	{
		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('ttl', 'Tempat dan Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
		$this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('kehadiran', 'Kehadiran', 'require');
		$this->form_validation->set_rules('kinerja', 'Kinerja', 'required');
		$this->form_validation->set_rules('evaluasi', 'Evaluasi belajar', 'required');
		$this->form_validation->set_rules('peng_materi', 'Penguasaan Materi', 'required');
        
	}
    
    
    public function entridataguru()
    {
        $this->formdataguru_validation();
        
        if($this->form_validation->run()==TRUE)
        {
            $data=array(
                  'nip'             => $this->input->post('nip'),
                  'nama'            => $this->input->post('nama'),
                  'alamat'              => $this->input->post('alamat'),
                  'ttl'             => $this->input->post('ttl'),
                  'jk'          => $this->input->post('jk'),
                  'jenjang'           => $this->input->post('jenjang'),
                  'program_studi'   => $this->input->post('program_studi'),
                  'status'           => $this->input->post('status'),
                  'kehadiran'             => $this->input->post('kehadiran'),
                  'kinerja'=> $this->input->post('kinerja'),
                  'evaluasi'  => $this->input->post('evaluasi'),
                  'peng_materi'  => $this->input->post('peng_materi'),
                  
            );
            
            $this->db->insert('tbl_guru',$data);
            echo("<script>window.alert('Entri Data Sukses')</script>");
            $this->formentridataguru();
        }
        else{
            echo("<script>window.alert('Data tidak boleh kosong!')</script>");
           $this->formentridataguru();
        }

    }
    
    public function updatedataguru()
    {
        $this->formdataguru_validation();
        
        if($this->form_validation->run()==TRUE)
        {
            $data=array(
                  'nip'             => $this->input->post('nip'),
                  'nama'            => $this->input->post('nama'),
                  'alamat'              => $this->input->post('alamat'),
                  'ttl'             => $this->input->post('ttl'),
                  'jk'          => $this->input->post('jk'),
                  'jenjang'           => $this->input->post('jenjang'),
                  'program_studi'   => $this->input->post('program_studi'),
                  'status'           => $this->input->post('status'),
                  'kehadiran'             => $this->input->post('kehadiran'),
                  'kinerja'=> $this->input->post('kinerja'),
                  'evaluasi'  => $this->input->post('evaluasi'),
                  'peng_materi'  => $this->input->post('peng_materi'),
                  
            );
            
            $hasil=$this->db->where('nip', $data['nip'])->update('tbl_guru', $data);
            if($hasil){
                echo("<script>window.alert('Update Data Sukses')</script>");
                $this->dataguru();
            }else{
                 echo("<script>window.alert('Update Data Gagal')</script>");
            }
        }
        else{
            echo("<script>window.alert('Data tidak boleh kosong!')</script>");
           $this->formeditdataguru();
        }
    }
    
    public function hapusdataguru($nip)
    {
        $this->load->model("m_guru");
        $this->m_guru->hapusdataguru($nip);
         $this->dataguru();
    }
    
    
    public function formkonfigurasi_validation()
	 {
		    $this->form_validation->set_rules('kehadiran1', 'Kehadiran Rendah', 'required');
		    $this->form_validation->set_rules('kehadiran2', 'Kehadiran Sedang', 'required');
		    $this->form_validation->set_rules('kehadiran3', 'Kehadiran Tinggi', 'required');
		   
		    $this->form_validation->set_rules('kinerja1', 'Kinerja Rendah', 'required');
		    $this->form_validation->set_rules('kinerja2', 'Kinerja Sedang', 'required');
		    $this->form_validation->set_rules('kinerja3', 'Kinerja Tinggi', 'required');
		  
		  		   
		    $this->form_validation->set_rules('evaluasi1', 'Evaluasi Rendah', 'required');
        $this->form_validation->set_rules('evaluasi2', 'Evaluasi Sedang', 'required');
        $this->form_validation->set_rules('evaluasi3', 'Evaluasi Tinggi', 'required');
    
        
        $this->form_validation->set_rules('peng_materi1', 'Penguasaan Materi Rendah', 'required');
        $this->form_validation->set_rules('peng_materi2', 'Penguasaan Materi Sedang', 'required');
        $this->form_validation->set_rules('peng_materi3', 'Penguasaan Materi Tinggi', 'required');
        
      
	}
    
    public function simpankonfigurasi()
    {
        
        $this->formkonfigurasi_validation();
        
        if($this->form_validation->run()==TRUE)
        {
            $data1=array(
              'id_kategori'         => 'KEHADIRAN',
              'rendah'              => $this->input->post('kehadiran1'),
              'sedang'              => $this->input->post('kehadiran2'),
              'tinggi'              => $this->input->post('kehadiran3'),          
            );
            
            $data2=array(
              'id_kategori'         => 'Kinerja',
              'rendah'              => $this->input->post('kinerja1'),
              'sedang'              => $this->input->post('kinerja2'),
              'tinggi'              => $this->input->post('kinerja3'), 
            );
            
            
            $data4=array(
              'id_kategori'         => 'Evaluasi',
              'rendah'              => $this->input->post('evaluasi1'),
              'sedang'              => $this->input->post('evaluasi2'),
              'tinggi'              => $this->input->post('evaluasi3'),
            );
            
            $data5=array(
              'id_kategori'         => 'Peng_materi',
              'rendah'              => $this->input->post('peng_materi1'),
              'sedang'              => $this->input->post('peng_materi2'),
              'tinggi'              => $this->input->post('peng_materi3'),
            );
            
            
            $this->db->where('id_kategori',$data1['id_kategori']);
            $q1=$this->db->get('tbl_konfigurasi');
            
            if($q1->num_rows()>0)
            {
              $this->db->where('id_kategori',$data1['id_kategori']);
              $this->db->update('tbl_konfigurasi',$data1);               
            }
            else{
              $this->db->insert('tbl_konfigurasi',$data1);
            }
                                  
            $this->db->where('id_kategori',$data2['id_kategori']);
            $q2=$this->db->get('tbl_konfigurasi');
            
            
            if($q2->num_rows()>0)
            {
              $this->db->where('id_kategori',$data2['id_kategori']);
              $this->db->update('tbl_konfigurasi',$data2);
            }
            else{
             $this->db->insert('tbl_konfigurasi',$data2);
            }
            
            $this->db->where('id_kategori',$data4['id_kategori']);
            $q4=$this->db->get('tbl_konfigurasi');
                     
            if($q4->num_rows()>0)
            {
              $this->db->where('id_kategori',$data4['id_kategori']);
              $this->db->update('tbl_konfigurasi',$data4);     
            }
            else{
             $this->db->insert('tbl_konfigurasi',$data4);
            }
            
            $this->db->where('id_kategori',$data5['id_kategori']);
            $q5=$this->db->get('tbl_konfigurasi');
             
            if($q5->num_rows()>0)
            {
              $this->db->where('id_kategori',$data5['id_kategori']);
              $this->db->update('tbl_konfigurasi',$data5);    
            }
            else{
              $this->db->insert('tbl_konfigurasi',$data5);
            }        
            
            echo("<script>window.alert('Entri Data Sukses')</script>");
            $this->formpenentuankategori();
        }
        else{
          echo("<script>window.alert('Data tidak boleh kosong!')</script>");
          $this->formpenentuankategori();
        }   
    }
    
    public function entriHasilQuery($data)
    {
      $this->db->where('nip',$data['nip']);
      $q1=$this->db->get('tbl_ppa');
            
            
        if($q1->num_rows()>0)
        {
          $this->db->where('nip',$data['nip']);
          $this->db->update('tbl_ppa',$data);
                
        }
        else{
            $this->db->insert('tbl_ppa',$data);
        }
    }
    
    public function hapusDataPPA()
    {
        $this->load->model('admin/m_konfigurasi');
        $hasil=$this->m_konfigurasi->tampilDataKlasifikasi();
        
        foreach($hasil as $h)
        {
            $this->db->where('nip',$h->nip);
            $this->db->delete('tbl_ppa');
        }
    }
    
    public function obj2array($obj)
    {
    
        if(is_object($obj))
            $obj=get_object_vars($obj);
    
        if(is_array($obj))
            return array_map(__FUNCTION__,$obj);
        else
            return $obj;
    }
    
    public function queryHasil()
    {
        
    if(strlen($this->input->post('kehadiran'))!=0 || strlen($this->input->post('kinerja'))!=0
        || strlen($this->input->post('evaluasi'))!=0 || strlen($this->input->post('peng_materi'))!=0)
    {
        $qkehadiran="tbl_bobotkehadiran.".$this->input->post('kehadiran');
        $qkinerja="tbl_bobotkinerja.".$this->input->post('kinerja');
        $qevaluasi="tbl_bobotevaluasi.".$this->input->post('evaluasi');
        $qpeng_materi="tbl_bobotpeng_materi.".$this->input->post('peng_materi');
    
            
        $query="SELECT tbl_guru.nip , tbl_guru.nama, $qkehadiran as kehadiran, $qkinerja as kinerja, $qevaluasi as evaluasi,$qpeng_materi as peng_materi FROM tbl_guru, tbl_bobotkehadiran, tbl_bobotkinerja,tbl_bobotevaluasi,tbl_bobotpeng_materi WHERE tbl_guru.nip=tbl_bobotkehadiran.nip AND tbl_guru.nip=tbl_bobotkinerja.nip AND tbl_guru.nip=tbl_bobotevaluasi.nip AND tbl_guru.nip=tbl_bobotpeng_materi.nip AND $qkehadiran>0 AND $qkinerja >0 AND $qevaluasi >0 AND $qpeng_materi >0;";
        
        //echo($query);
        
        $this->load->model('m_konfigurasi');
        $hasil=$this->m_konfigurasi->eksekusiQuery($query);
                   
        if(sizeof($hasil) > 0)
        {
          $this->hapusDataPPA(); 
          foreach($hasil as $h)
            {
              
            $data=array(
                'nip'           =>$h->nip,
                'nama'          =>$h->nama,
                'kehadiran'           =>$h->kehadiran,
                'kinerja'   =>$h->kinerja,
                'evaluasi'    =>$h->evaluasi,
                'peng_materi'    =>$h->peng_materi
            );
              
             $this->entriHasilQuery($data);
            }
                
		      } 
		      else 
		      {
             $this->hapusDataPPA(); 
		          	
		      } 
         
          $this->hasilklasifikasi();
           
        }    
        
    }
        
 }
 
 ?>