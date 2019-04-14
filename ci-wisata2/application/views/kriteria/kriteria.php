<div class="container">

  <?php if ($this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
  <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Kriteria
          <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
   </div>
  </div>


</div>

<?php endif; ?>

<div class="row">
  <div class="col-md-6">
    
  </div>

</div>

	<div class="row mt-2">
		<div class="col-sm-12">
      <br>
      <h3>Daftar Kriteria</h3>
		 <?php if(empty($kriteria) ) :?>
        <div class="alert alert-danger" role="alert">
          Data Kriteria Tidak Ditemukan.
        </div>
      <?php endif; ?>
      <a href="<?= base_url(); ?>kriteria/tambah" class="btn btn-primary">Tambah Data</a>
				<br>
				<br>
   </div>
  </div>

<div class="row mt-3">
      <div class="col-md-6">
        <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Rules" name="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Cari</button> 
            </div>
          </div>
        </form>

      </div>


    </div>


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
    
<?php foreach($kriteria as $krt){


?>
      <tr>
      	
        <td><?php echo $krt['idkriteria']; ?></td>
        <td><?php echo $krt['0']; ?></td>
        <td><?php echo $krt['1']; ?></td>
        <td><?php echo $krt['2']; ?></td>
        
        <td>
        </td>


      </tr>

<?php
}
?>


    </div>
 </div>
 </div>
</div>



    </tbody>
    
    
  </table>
				
				

  				
			</ul>

		</div>
	</div>
</div>