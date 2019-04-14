<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Fuzzifikasi extends CI_Controller {

    public function __construct() 
	{
		parent::__construct();
	}
    
    public function tampilDataBobot()
    {
        $this->load->model('m_konfigurasi');
        $data['kehadiran']=$this->m_konfigurasi->tampilBobot('tbl_bobotkehadiran');
        $this->load->view('admin/v_fuzzifikasi',$data);
    }
    
    function pisahstring($data)
    {
        $awal=(float)substr($data,0,strpos($data,"-"));
        $akhir=(float)substr($data,strpos($data,"-")+1);
        
        $data=array(
            'awal'   =>$awal,
            'akhir'  =>$akhir
        );
        
        return $data;
    }
    
    function hitungK1($k1,$a)
    {
        $hasil=0;
        
        if($a < $k1['awal'])
        {
            $hasil=1;
        }
        elseif($a >= $k1['awal'] && $a <= $k1['akhir'])
        {
            $hasil=($k1['akhir']-$a)/($k1['akhir']-$k1['awal']);
        }
        else{
            $hasil=0;
        }
        
        return $hasil;
    }
    
    function hitungK2($k1,$k2,$a)
    {
        $hasil=0;
        
        if($a < $k2['awal'] || $a > $k2['akhir'])
        {
            $hasil=0;
        }
        elseif($a >= $k2['awal'] && $a <= $k1['akhir'])
        {
            $hasil=($a-$k2['awal'])/($k1['akhir']-$k2['awal']);
        }
        elseif($a >= $k1['akhir'] && $a <= $k2['akhir'])
        {
            $hasil=($k2['akhir']-$a)/($k2['akhir']-$k1['akhir']);
        }
        
        return $hasil;
       
    }
    
    function hitungK3($k2,$k3,$a)
    {
        $hasil=0;
        
        if($a < $k3['awal'] || $a > $k3['akhir'])
        {
            $hasil=0;
        }
        elseif($a >= $k3['awal'] && $a <= $k2['akhir'])
        {
            $hasil=($a-$k3['awal'])/($k2['akhir']-$k3['awal']);
        }
        elseif($a >= $k2['akhir'] && $a <= $k3['akhir'])
        {
            $hasil=($k3['akhir']-$a)/($k3['akhir']-$k2['akhir']);
        }
        
        return $hasil;
    }
    
    function hitungK4($k4,$a)
    {
        $hasil=0;
        
        if($a < $k4['awal'])
        {
            $hasil=0;
        }
        elseif($a > $k4['awal'] && $a < $k4['akhir'])
        {
            $hasil=($a-$k4['awal'])/($k4['akhir']-$k4['awal']);
        }
        else
        {
            $hasil=1;
        }
        
        return $hasil;
    }
    
    function poinPekerjaan($pk,$kategori,$n)
    {
        $point=0;
        
        if(preg_match("/\b$pk\b/",$kategori))
            $point=$n;
        else
            $point=0;
            
        return $point;
    }
    
    
    public function hitungBobotIPK()
    {
        $this->load->model('m_konfigurasi');
        $konfKEHADIRAN=$this->m_konfigurasi-> cariKonfigurasi('KEHADIRAN');
        
        $kategori1=$this->pisahstring($konfKEHADIRAN->rendah);
        $kategori2=$this->pisahstring($konfKEHADIRAN->sedang);
        $kategori3=$this->pisahstring($konfKEHADIRAN->tinggi);
        
        
        $this->load->model("m_guru");
        
        $gru=$this->m_guru->tampildata();
        
        $id=0;
        foreach($gru as $row)
        {
            $id=$id+1;
            $a=$row->kehadiran;
            echo("KEHADIRAN : $a");
            echo('<br/>');
            
            $bobotK1=$this->hitungK1($kategori1,$a);
            $bobotK2=$this->hitungK2($kategori1,$kategori2,$a);
            $bobotK3=$this->hitungK4($kategori3,$a);
            
            $data=array(
                    'id'        =>$id,
                    'nip'       =>$row->nip,
                    'rendah' =>$bobotK1,
                    'sedang' =>$bobotK2,
                    'tinggi' =>$bobotK3,
                    
            );
            
            
            $this->m_konfigurasi->entriBobot('tbl_bobotkehadiran',$data);
            
            /*echo("Bobot K1 : $bobotK1");
            echo('<br/>');
            echo("Bobot K2 : $bobotK2");
            echo('<br/>');
            echo("Bobot K3 : $bobotK3");
            echo('<br/>');
            echo("Bobot K4 : $bobotK4");
            echo('<br/>');*/
        }
        
        
    }
    
    public function hitungBobotPenghasilan()
    {
        $this->load->model('m_konfigurasi');
        $konfKEHADIRAN=$this->m_konfigurasi-> cariKonfigurasi('Kinerja');
        
        $kategori1=$this->pisahstring($konfKEHADIRAN->rendah);
        $kategori2=$this->pisahstring($konfKEHADIRAN->sedang);
        $kategori3=$this->pisahstring($konfKEHADIRAN->tinggi);
        
        
        $this->load->model("m_guru");
        
        $gru=$this->m_guru->tampildata();
        
        $id=0;
        foreach($gru as $row)
        {
            $id=$id+1;
            $a=$row->kinerja;
            //echo("Penghasilan Ortu : $a");
            //echo('<br/>');
            
            $bobotK1=$this->hitungK1($kategori1,$a);
            $bobotK2=$this->hitungK2($kategori1,$kategori2,$a);
            $bobotK3=$this->hitungK4($kategori3,$a);
            
            $data=array(
                    'id'        =>$id,
                    'nip'       =>$row->nip,
                    'rendah' =>$bobotK1,
                    'sedang' =>$bobotK2,
                    'tinggi' =>$bobotK3,
            );
            
            
            $this->m_konfigurasi->entriBobot('tbl_bobotkinerja',$data);
            
            /*echo("Bobot K1 : $bobotK1");
            echo('<br/>');
            echo("Bobot K2 : $bobotK2");
            echo('<br/>');
            echo("Bobot K3 : $bobotK3");
            echo('<br/>');
            echo("Bobot K4 : $bobotK4");
            echo('<br/>');*/
        }
        
        
        
    }
    
    public function hitungBobotTanggungan()
    {
        $this->load->model('m_konfigurasi');
        $konfKEHADIRAN=$this->m_konfigurasi-> cariKonfigurasi('Evaluasi');
        
        $kategori1=$this->pisahstring($konfKEHADIRAN->rendah);
        $kategori2=$this->pisahstring($konfKEHADIRAN->sedang);
        $kategori3=$this->pisahstring($konfKEHADIRAN->tinggi);
        
        
        $this->load->model("m_guru");
        
        $gru=$this->m_guru->tampildata();
        
        $id=0;
        foreach($gru as $row)
        {
            $id=$id+1;
            $a=$row->evaluasi;
            //echo("Tanggungan Ortu : $a");
            //echo('<br/>');
            
            $bobotK1=$this->hitungK1($kategori1,$a);
            $bobotK2=$this->hitungK2($kategori1,$kategori2,$a);
            $bobotK3=$this->hitungK4($kategori3,$a);
            
            $data=array(
                    'id'        =>$id,
                    'nip'       =>$row->nip,
                    'rendah' =>$bobotK1,
                    'sedang' =>$bobotK2,
                    'tinggi' =>$bobotK3,
                    
            );
            
            
            $this->m_konfigurasi->entriBobot('tbl_bobotevaluasi',$data);
            
            /*echo("Bobot K1 : $bobotK1");
            echo('<br/>');
            echo("Bobot K2 : $bobotK2");
            echo('<br/>');
            echo("Bobot K3 : $bobotK3");
            echo('<br/>');
            echo("Bobot K4 : $bobotK4");
            echo('<br/>');*/
        }
        
        
    }
    
    public function hitungBobotSertifikat()
    {
        $this->load->model('m_konfigurasi');
        $konfKEHADIRAN=$this->m_konfigurasi-> cariKonfigurasi('Peng_materi');
        
        $kategori1=$this->pisahstring($konfKEHADIRAN->rendah);
        $kategori2=$this->pisahstring($konfKEHADIRAN->sedang);
        $kategori3=$this->pisahstring($konfKEHADIRAN->tinggi);
        
        $this->load->model("m_guru");
        
        $gru=$this->m_guru->tampildata();
        
        $id=0;
        foreach($gru as $row)
        {
            $id=$id+1;
            $a=$row->peng_materi;
            //echo("Jumlah Sertifikat: $a");
            //echo('<br/>');
            
            $bobotK1=$this->hitungK1($kategori1,$a);
            $bobotK2=$this->hitungK2($kategori1,$kategori2,$a);
            $bobotK3=$this->hitungK4($kategori3,$a);
            
            $data=array(
                    'id'        =>$id,
                    'nip'       =>$row->nip,
                    'rendah' =>$bobotK1,
                    'sedang' =>$bobotK2,
                    'tinggi' =>$bobotK3,
                    
            );
            
            
            $this->m_konfigurasi->entriBobot('tbl_bobotpeng_materi',$data);
            
            /*echo("Bobot K1 : $bobotK1");
            echo('<br/>');
            echo("Bobot K2 : $bobotK2");
            echo('<br/>');
            echo("Bobot K3 : $bobotK3");
            echo('<br/>');
            echo("Bobot K4 : $bobotK4");
            echo('<br/>');*/
        }
        
       
    }
    
    public function hitungBobotPekerjaan()
    {
        $this->load->model('m_konfigurasi');
        $konfKEHADIRAN=$this->m_konfigurasi-> cariKonfigurasi('Pengembangan');
        
        $kategori1=$konfKEHADIRAN->kategori1;
        $kategori2=$konfKEHADIRAN->kategori2;
        $kategori3=$konfKEHADIRAN->kategori3;
        $kategori4=$konfKEHADIRAN->kategori4;
        
        $this->load->model("m_guru");
        
        $gru=$this->m_guru->tampildata();
        
        $id=0;
        foreach($gru as $row)
        {
            $id=$id+1;
            $a=$row->pengembangan;
            //echo("Tanggungan Ortu : $a");
            //echo('<br/>');
            
            $bobotK1=$this->poinPekerjaan($a,$kategori1,1);
            $bobotK2=$this->poinPekerjaan($a,$kategori2,2);
            $bobotK3=$this->poinPekerjaan($a,$kategori3,3);
            $bobotK4=$this->poinPekerjaan($a,$kategori4,4);
            
            
            $data=array(
                    'id'        =>$id,
                    'nip'       =>$row->nip,
                    'kategori1' =>$bobotK1,
                    'kategori2' =>$bobotK2,
                    'kategori3' =>$bobotK3,
                    'kategori4' =>$bobotK4
            );
            
            
            $this->m_konfigurasi->entriBobot('tbl_bobotpengembangan',$data);
            
            /*echo("Bobot K1 : $bobotK1");
            echo('<br/>');
            echo("Bobot K2 : $bobotK2");
            echo('<br/>');
            echo("Bobot K3 : $bobotK3");
            echo('<br/>');
            echo("Bobot K4 : $bobotK4");
            echo('<br/>');*/
        }
        
        
    }
    
    public function hitungBobot()
    {
        $this->hitungBobotIPK();
        $this->hitungBobotPenghasilan();
        $this->hitungBobotTanggungan();
        $this->hitungBobotSertifikat();
        redirect('admin/c_admin/prosesfuzzifikasi');
    }
    
    
}
?>