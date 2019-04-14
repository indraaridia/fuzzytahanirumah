<?php
$this->load->view('admin/v_header2');


$pns=0;
$non_pns=0;

$jkL=0;
$jkP=0;

$d1=0;
$d2=0;
$d3=0;
$d4=0;
$s1=0;
$s2=0;
$s3=0;


if(strcmp($gru->jk,"L")==0){
    $jkL="selected";
}
else{
    $jkP="selected";
}


if(strcmp($gru->status,"pns")==0){
    $pns="selected";
}
elseif(strcmp($gru->status,"non_pns")==0){
    $non_pns="selected";
}
else
{
    
}

if (strcmp($gru->jenjang,"d1")==0) {
    $d1="selected";
}elseif (strcmp($gru->jenjang,"d2")==0) {
    $d2="selected";
}elseif (strcmp($gru->jenjang,"d3")==0) {
    $d3="selected";
}elseif (strcmp($gru->jenjang,'d4')==0) {
    $d4="selected";
}elseif (strcmp($gru->jenjang,"s1")==0) {
    $s1="selected";
}elseif (strcmp($gru->jenjang,"s2")==0) {
    $s2="selected";
}elseif (strcmp($gru->jenjang,"s3")==0) {
    $s3="selected";
}else{
  echo "jenjang yang anda pilih tidak ada";
}


?>


<div class="col-lg-12">
 <div class="card">
    <div class="card-header">
       <h6>Form Ubah Data Guru </h6>
    </div>
    
    <div class="card-body">
   <?php echo validation_errors(); ?>
  <?php echo form_open_multipart('admin/c_admin/updatedataguru', ['class'=>'form-horizontal']) ?>
    <div class="row">
        <div class="col-lg-6">
             <div class="form-group row">
            <label class="col-lg-3 col-form-label">Nip/No. KK</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="nip" value="<?= $gru->nip?>" />
            </div>
         </div>

          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Nama </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="nama" value="<?= $gru->nama?>" />
            </div>
         </div>

         <div class="form-group row">
            <label class="col-lg-3 col-form-label">Alamat </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="alamat" value="<?= $gru->alamat?>" />
            </div>
         </div>

         <div class="form-group row">
            <label class="col-lg-3 col-form-label">TTL </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="ttl" value="<?= $gru->ttl?>" />
            </div>
         </div>

         <div class="form-group row">
               <label class="col-lg-3 col-form-label">Jenis Kelamin</label>
                <div class="col-lg-9">
                    <select class="form-control" name="jk">
                      <option value="">--</option>
                    <option value="L" <?=$jkL?>>Laki-Laki</option>
                    <option value="P" <?=$jkP?>>Perempuan</option>
                    </select>
                </div>            
            </div> 

        </div>

        <div class="col-lg-6">
    
        <div class="form-group row">
            <label class="col-lg-3 col-form-label">Jenjang </label>
            <div class="col-lg-9">
               <select class="form-control" name="jenjang">
                <option value="">--</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                </select>
            </div>
         </div>

         <div class="form-group row">
            <label class="col-lg-3 col-form-label">Program Studi </label>
            <div class="col-lg-9">
               <input type="text" name="program_studi" class="form-control" value="<?= $gru->program_studi?>">
            </div>
         </div>
         
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">status</label>
            <div class="col-lg-9">
                <select class="form-control" name="status">
                <option value="">--</option>
                <option value="PNS" <?=$pns;  ?>>PNS</option>
                <option value="NON PNS" <?=$non_pns; ?>>NON PNS</option>
                </select>
            </div>            
          </div>

           <div class="form-group row">
            <label class="col-lg-3 col-form-label">Kehadiran </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="kehadiran" value="<?= $gru->kehadiran?>" />
            </div>
         </div>
         
         
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Kinerja </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="kinerja" value="<?= $gru->kinerja?>" />
            </div>
         </div>
         
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Evaluasi Belajar </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="evaluasi" value="<?= $gru->evaluasi?>" />
            </div>
         </div>
         
          
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Penguasaan Materi </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="peng_materi" value="<?= $gru->peng_materi?>" />
            </div>
         </div>
        </div>

        <div class="form-group">
        <div class="col-lg-7 col-lg-offset-6">
            <input type="submit" name="ubah" class="btn btn-info " value="Ubah Data"/>
        </div>
     </div>
    </div>


 