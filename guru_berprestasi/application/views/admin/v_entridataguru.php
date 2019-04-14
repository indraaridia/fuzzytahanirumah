<?php
$this->load->view('admin/v_header2');
?>

 <div class="col-lg-12">
 <div class="card">
    <div class="card-header">
       <h6>Form Tambah Data Guru </h6>
    </div>
    
    <div class="card-body">
   <?php echo validation_errors(); ?>
	<?php echo form_open_multipart('admin/c_admin/entridataguru', ['class'=>'form-horizontal']) ?>
    <div class="row">
        <div class="col-lg-6">
             <div class="form-group row">
            <label class="col-lg-3 col-form-label">Nip/No.KK</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="nip" />
            </div>
         </div>

          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Nama </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="nama" />
            </div>
         </div>

         <div class="form-group row">
            <label class="col-lg-3 col-form-label">Alamat </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="alamat" />
            </div>
         </div>

         <div class="form-group row">
            <label class="col-lg-3 col-form-label">TTL </label>
            <div class="col-lg-9">
                <input type="date" class="form-control" name="ttl" />
            </div>
         </div>

             <div class="form-group row">
               <label class="col-lg-3 col-form-label">Jenis Kelamin</label>
                <div class="col-lg-9">
                    <select class="form-control" name="jk">
                      <option value="">--</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                </div>            
            </div> 

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

        </div>

        <div class="col-lg-6">


         <div class="form-group row">
            <label class="col-lg-3 col-form-label">Program Studi </label>
            <div class="col-lg-9">
               <input type="text" name="program_studi" class="form-control">
            </div>
         </div>
         
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">status</label>
            <div class="col-lg-9">
                <select class="form-control" name="status">
                <option value="">--</option>
                <option value="PNS">PNS</option>
                <option value="NON PNS">NON PNS</option>
                </select>
            </div>            
          </div>

           <div class="form-group row">
            <label class="col-lg-3 col-form-label">Kehadiran </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="kehadiran" />
            </div>
         </div>
         
         
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Kinerja </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="kinerja" />
            </div>
         </div>
         
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Evaluasi Belajar </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="evaluasi" />
            </div>
         </div>
         
          
          <div class="form-group row">
            <label class="col-lg-3 col-form-label">Penguasaan Materi </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="peng_materi" />
            </div>
         </div>
        </div>

        <div class="form-group">
        <div class="col-lg-7 col-lg-offset-6">
            <input type="submit" name="tambah" class="btn btn-primary " value="Simpan Data"/>
        </div>
     </div>
    </div>
   
     
