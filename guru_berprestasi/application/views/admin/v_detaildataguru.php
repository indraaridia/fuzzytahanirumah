<?php
$this->load->view('admin/v_header2');


$agamaIslam=0;
$agamaHindu=0;
$agamaKristen=0;
$agamakatolik=0;
$agamaBudha=0;

$jkL=0;
$jkP=0;

$pkPNS=0;
$pkTNI=0;
$pkPolri=0;
$pkPegawaiswasta=0;
$pkPensiunan=0;
$pkWiraswasta=0;
$pkPedagang=0;
$pkPetani=0;
$pkNelayan=0;
$pkBuruhtani=0;
$pkTukang=0;


if(strcmp($mhs->jk,"L")==0){
    $jkL="selected";
}
else{
    $jkP="selected";
}


if(strcmp($mhs->pekerjaan_ortu,"PNS")==0){
    $pkPNS="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"TNI")==0){
    $pkTNI="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Polri")==0){
    $pkPolri="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Pegawa Swasta")==0){
    $pkPegawaiswasta="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Pensiunan")==0){
    $pkPensiunan="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Wiraswasta")==0){
    $pkWiraswasta="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Pedagang")==0){
    $pkPedagang="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Petani")==0){
    $pkPetani="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Nelayan")==0){
    $pkNelayan="selected";
}
elseif(strcmp($mhs->pekerjaan_ortu,"Buruh Tani")==0){
    $pkBuruhtani="selected";
}
else{
     $pkTukang="selected";
}




if(strcmp($mhs->agama,"Islam")==0){
    $agamaIslam="selected";
}
elseif(strcmp($mhs->agama,"Hindu")==0){
    $agamaHindu="selected";
}
elseif(strcmp($mhs->agama,"Kristen")==0)
{
    $agamaKristen="selected";
}
elseif(strcmp($mhs->agama,"Katolik")==0)
{
    $this->$agamakatolik="selected";
}
else
{
    $agamaBudha="selected";
}






?>

 <div class="col-lg-9">
 <div class="panel panel-default">
    <div class="panel-heading">
       DATA MAHASISWA CALON PENERIMA BEASISWA  
    </div>
    
    <div class="panel-body">
   <?php echo validation_errors(); ?>
	<?php echo form_open_multipart('admin/c_admin/datamahasiswa', ['class'=>'form-horizontal']) ?>
    <div class="col-lg-6">
      
         <div class="form-group">
            <label class="col-lg-4 control-label">NPM</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="npm" value="<?= $mhs->npm ?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">Nama </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="nama" value="<?= $mhs->nama?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">Jenis Kelamin</label>
            <div class="col-lg-7">
                <select class="form-control" name="jk" disabled="">
                <option value="">--</option>
                <option value="L" <?=$jkL?>>Laki-Laki</option>
                <option value="P" <?=$jkP?>>Perempuan</option>
                </select>
            </div>            
        </div>
        
        <div class="form-group">
            <label class="col-lg-4 control-label">TTL </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="ttl" value="<?= $mhs->ttl?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">Alamat </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="alamat" value="<?= $mhs->alamat?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">No. Tlp </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="tlp" value="<?= $mhs->no_hp?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">Jurusan/Prodi </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="prodi" value="<?= $mhs->jurusan_prodi?>" disabled=""/>
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-lg-4 control-label">Agama</label>
            <div class="col-lg-7">
                <select class="form-control" name="agama" disabled="">
                <option value="">--</option>
                <option value="Islam" <?=$agamaIslam?>>Islam</option>
                <option value="Hindu" <?=$agamaHindu?>>Hindu</option>
                <option value="Kristen" <?=$agamaKristen?>>Kristen</option>
                <option value="Katolik" <?=$agamakatolik?>>Katolik</option>
                <option value="Budha" <?=$agamaBudha?>>Budha</option>
                </select>
            </div>            
          </div>
         
       
        
       
    </div>
    
    <div class="col-lg-6">
        
          <div class="form-group">
            <label class="col-lg-4 control-label">Smester </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="smester" value="<?= $mhs->smester?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">Nama Ayah </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="nama_ayah" value="<?= $mhs->nama_ayah?>" disabled=""/>
            </div>
         </div>
            
         <div class="form-group">
            <label class="col-lg-4 control-label">Nama Ibu </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="nama_ibu" value="<?= $mhs->nama_ibu?>" disabled=""/>
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-lg-4 control-label">IPK </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="ipk" value="<?= $mhs->ipk?>" disabled=""/>
            </div>
         </div>
         
         <div class="form-group">
            <label class="col-lg-4 control-label">Pekerjaan Ortu</label>
            <div class="col-lg-7">
                <select class="form-control" name="pekerjaan_ortu" disabled="">
                <option value="">--</option>
                <option value="PNS" <?=$pkPNS?>>PNS</option>
                <option value="TNI" <?=$pkTNI?>>TNI</option>
                <option value="Polri" <?=$pkPolri?>>Polri</option>
                <option value="Pegawai Swasta" <?=$pkPegawaiswasta?>>Pegawai Swasta</option>
                <option value="Pensiunan" <?=$pkPensiunan?>>Pensiunan</option>
                <option value="Wiraswasta" <?=$pkWiraswasta?>>Wiraswasta</option>
                <option value="Pedangan" <?=$pkPedagang?>>Pedagang</option>
                <option value="Petani" <?=$pkPetani?>>Petani</option>
                <option value="Nelayan" <?=$pkNelayan?>>Nelayan</option>
                <option value="Buruh Tani" <?=$pkBuruhtani?>>Buruh Tani</option>
                <option value="Tukang" <?=$pkTukang?>>Tukang</option>
                </select>
            </div>            
          </div>
         
          <div class="form-group">
            <label class="col-lg-4 control-label">Penghasilan Ortu </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="penghasilan_ortu" value="<?= $mhs->penghasilan_ortu?>" disabled=""/>
            </div>
         </div>
         
          <div class="form-group">
            <label class="col-lg-4 control-label">Jum. Tanggungan Ortu </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="tanggungan_ortu" value="<?= $mhs->jumlah_tanggungan?>" disabled=""/>
            </div>
         </div>
         
          
          <div class="form-group">
            <label class="col-lg-4 control-label">Jum. Sertifikat </label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="sertifikat" value="<?= $mhs->jumlah_sertifikat?>" disabled=""/>
            </div>
         </div>
         
     
    </div>
     <div class="form-group">
        <div class="col-lg-7 col-lg-offset-6">
            <input type="submit" name="tambah" class="btn btn-primary " value="Kembali"/>
        </div>
     </div>
    </form>
    </div>
 </div>
 </div>


</div> <!-- CONTAINEER  -->
</body>
</html>
