<?php
$this->load->view('admin/v_header2');


$kehadiran1=0;
$kehadiran2=0;
$kehadiran3=0;
$kehadiran4=0;
$kehadiran5=0;

$kinerja1=0;
$kinerja2=0;
$kinerja3=0;
$kinerja4=0;
$kinerja5=0;



$evaluasi1=0;
$evaluasi2=0;
$evaluasi3=0;
$evaluasi4=0;
$evaluasi5=0;

$peng_materi1=0;
$peng_materi2=0;
$peng_materi3=0;
$peng_materi4=0;
$peng_materi5=0;





foreach($this->data->tampildata() as $row)  
{
    if(strcmp($row->id_kategori,'KEHADIRAN')==0)
    {
        $kehadiran1=$row->rendah;
        $kehadiran2=$row->sedang;
        $kehadiran3=$row->tinggi;
       
        
    }
    elseif(strcmp($row->id_kategori,'Kinerja')==0)
    {
        $kinerja1=$row->rendah;
        $kinerja2=$row->sedang;
        $kinerja3=$row->tinggi;
     
        
    }
    elseif(strcmp($row->id_kategori,'Evaluasi')==0)
    {
        $evaluasi1=$row->rendah;
        $evaluasi2=$row->sedang;
        $evaluasi3=$row->tinggi;
        
    }
    elseif(strcmp($row->id_kategori,'Peng_materi')==0)
    {
        $peng_materi1=$row->rendah;
        $peng_materi2=$row->sedang;
        $peng_materi3=$row->tinggi;
        
    }
}


?>
 <?php //echo validation_errors(); ?>
 <?php echo form_open_multipart('admin/c_admin/simpankonfigurasi', ['class'=>'form-horizontal']) ?>
 
 
<div class="row">
  <div class="col-lg-6">
 <div class="card">
    <div class="card-header bg-info">
      <h6 style="color: white;">Kategori Kehadiran </h6>
    </div>
    
    <div class="card-body">
  
    <div class="col-lg-12">
      
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Rendah</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="kehadiran1" value="<?=$kehadiran1?>"/>
            </div>
         </div>
         
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Sedang </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="kehadiran2" value="<?=$kehadiran2?>"/>
            </div>
         </div>
              
    </div>
    
    <div class="col-lg-12">
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Tinggi </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="kehadiran3" value="<?=$kehadiran3?>"/>
            </div>
         </div>
    
    </div>
    </div>
 </div>
 </div>
 
 
  <div class="col-lg-6">
 <div class="card">
    <div class="card-header bg-info">
       <h6 style="color: white;">Kategori Kinerja </h6>
    </div>
    
    <div class="card-body">
  
    <div class="col-lg-12">
      
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Rendah</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="kinerja1" value="<?=$kinerja1?>"/>
            </div>
         </div>
         
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Sedang </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="kinerja2" value="<?=$kinerja2?>"/>
            </div>
         </div>
                
    </div>
    
    <div class="col-lg-12">
          <div class="form-group row">
            <label class="col-lg-2 col-form-label">Tinggi </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="kinerja3" value="<?=$kinerja3?>"/>
            </div>
         </div>
         
    </div>
    
    </div>
 </div>
 </div>

 
 
<div class="col-lg-6" style="margin-top: 20px;">
 <div class="card">
    <div class="card-header bg-info">
       <h6 style="color: white;">Kategori Evaluasi Belajar </h6> 
    </div>
    
    <div class="card-body">
  
    <div class="col-lg-12">
      
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Rendah</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="evaluasi1" value="<?=$evaluasi1?>"/>
            </div>
         </div>
         
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Sedang</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="evaluasi2"  value="<?=$evaluasi2?>"/>
            </div>
         </div>
                  
    </div>
    
    <div class="col-lg-12">
      <div class="form-group row">
            <label class="col-lg-2 col-form-label">Tinggi</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="evaluasi3"  value="<?=$evaluasi3?>"/>
            </div>
         </div>
   
        
    </div>
    
    </div>
 </div>
 </div>
 
 
  <div class="col-lg-6" style="margin-top: 20px;">
 <div class="card">
    <div class="card-header bg-info">
       <h6 style="color: white;">Kategori Penguasaan Materi </h6> 
    </div>
    
    <div class="card-body">
  
    <div class="col-lg-12">
      
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Rendah</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="peng_materi1"  value="<?=$peng_materi1?>"/>
            </div>
         </div>
         
         <div class="form-group row">
            <label class="col-lg-2 col-form-label">Sedang </label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="peng_materi2" value="<?=$peng_materi2?>"/>
            </div>
         </div>
         
      
       
    </div>
    
    <div class="col-lg-12">
     <div class="form-group row">
            <label class="col-lg-2 col-form-label">Tinggi</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="peng_materi3" value="<?=$peng_materi3?>"/>
            </div>
         </div>
         
    </div>
    
    </div>
 </div>
 </div>
 
 <div class="form-group row" style="margin-top: 10px; margin-left: 40%;">
    <div class="col-lg-9">
        <input type="submit" name="tambah" class="btn btn-primary " value="Simpan">
    </div>
 </div>

</div>