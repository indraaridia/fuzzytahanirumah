<?php
$this->load->view('admin/v_header2');

?>
 
<div class="col-lg-12">
  <div class="card">
    <div class="card-header bg-success">
      <h6 style="color: white;"> Query Klasifikasi Guru Berprestasi</h6>
    </div>
    
    <div class="card-body">
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('admin/c_admin/queryHasil', ['class'=>'form-horizontal']) ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="col-lg-4 control-label">Kehadiran</label>
            <div class="col-lg-10">
             <select class="form-control" name="kehadiran">
              <option value="">--</option>
              <option value="rendah">Rendah</option>
              <option value="sedang">Sedang</option>
              <option value="tinggi">Tinggi</option>
              </select>
            </div>            
          </div>

          <div class="form-group">
            <label class="col-lg-4 control-label">Kinerja</label>
            <div class="col-lg-10">
                <select class="form-control" name="kinerja">
                  <option value="">--</option>
                  <option value="rendah">Rendah</option>
                  <option value="sedang">Sedang</option>
                  <option value="tinggi">Tinggi</option>
                </select>
            </div>            
          </div>  
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <label class="col-lg-4 control-label">Evaluasi Belajar</label>
            <div class="col-lg-12">
              <select class="form-control" name="evaluasi">
                <option value="">--</option>
                <option value="rendah">Rendah</option>
                <option value="sedang">Sedang</option>
                <option value="tinggi">Tinggi</option>
              </select>
            </div>            
          </div>

         <div class="form-group">
           <label class="col-lg-4 control-label">Penguasaan Materi</label>
            <div class="col-lg-12">
                <select class="form-control" name="peng_materi">
                  <option value="">--</option>
                  <option value="rendah">Rendah</option>
                  <option value="sedang">Sedang</option>
                  <option value="tinggi">Tinggi</option>
                </select>
            </div>            
          </div>
        </div>

        <div class="form-group" style="margin-left: 40%;">
          <div class="col-lg-7 col-lg-offset-6">
            <input type="submit" name="tambah" class="btn btn-primary " value="Proses Data"/>
          </div>
        </div> 
      </div>
    </div>  
  </div>
</div>  
 
 
 
 <div class="col-lg-12" style="margin-top: 20px;">
 <div class="card">
    <div class="card-header bg-success">
        <h6 style="color: white;">Hasil Guru Berprestasi</h6>
    </div>
    
     <div class="card-body">
    
     <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTable">
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">No</th>
                    <th  style="text-align: center; vertical-align: middle;">Nip/No.KK</th>
                    <th  style="text-align: center;" >Nama</th>
                    <th  style="text-align: center;" >Bobot Kehadiran</th>
                    <th  style="text-align: center;">Bobot Kinerja</th>
                    <th  style="text-align: center;">Bobot Evaluasi Belajar</th>
                    <th  style="text-align: center;">Bobot Peng. Materi</th>
                    <th  style="text-align: center;">Rata-Rata Bobot</th>
                    <th  style="text-align: center;">Derajat (%)</th>
                    
                </tr>
                
            </thead>
            <tbody>
            <?php
                $no=1;
                $totalbobot=0;
               foreach($ppa as $h)
               {
                    $totalbobot=($h->kehadiran+$h->kinerja+$h->evaluasi+$h->peng_materi)/4;
                    $derajat = $totalbobot*100;
                    echo("
                        <tr>
                            <td>$no</td>
                            <td>$h->nip</td>
                            <td>$h->nama</td>
                            <td>$h->kehadiran</td>
                            <td>$h->kinerja</td>
                            <td>$h->evaluasi</td>
                            <td>$h->peng_materi</td>
                            <td>$totalbobot</td>
                            <td>$derajat</td>
                        </tr>
                    ");
                    
                    $no++;
               }
                
            ?>
            </tbody>                
        </table>
     </div>
  </div>
</div>
</div>
    
 

