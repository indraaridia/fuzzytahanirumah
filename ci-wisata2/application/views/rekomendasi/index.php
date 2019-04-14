<div class="container">

 <?php if ($this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
  <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Wisata 
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
			<h3>Daftar Wisata</h3>
      <?php if(empty($hasil_rekomendasi) ) :?>
        <div class="alert alert-danger" role="alert">
          Data Wisata Tidak Ditemukan.
        </div>
      <?php endif; ?>
      <a href="<?= base_url(); ?>rekomendasi/tambah" class="btn btn-primary">Tambah Data</a>
				<br>
				<br>
      </div>
    </div>


    <div class="row mt-3">
      <div class="col-md-6">
        <form action="" method="post">
          <div class="input-group">
            <!-- <input type="text" class="form-control" placeholder="Cari Data Wisata" name="keyword"> -->
            <div class="input-group-append">
              <!-- <button class="btn btn-primary" type="submit">Cari</button>  -->
            </div>
          </div>
        </form>

      </div>


    </div>


    <div class="row mt-3">
      <div class="col-md-12">

	<table class="table table-stripped table-bordered">
    <thead align="center">
      
      <tr>
      	<th>Id</th>
        <th>Biaya</th>
        <th>Jarak (Km)</th>
        <th>Akses Jalan (%)</th>
        <th>penginapan</th>
        <th>fasilitas (%)</th>
      </tr>

      </thead>

      <tbody align="center">
<?php foreach($hasil_rekomendasi as $hrek){


?>
      <tr>
      	
        <td><?php echo $hrek['id']; ?></td>
        <td><?php echo $hrek['biaya']; ?></td>
        <td><?php echo $hrek['jarak']; ?></td>
        <td><?php echo $hrek['akses_jalan']; ?></td>
        <td><?php echo $hrek['penginapan']; ?></td>
        <td><?php echo $hrek['fasilitas']; ?></td>
      


      </tr>

<?php
}
?>

    </tbody>
    
    
  </table>
				
				

  				
		

		</div>
	</div>
</div>