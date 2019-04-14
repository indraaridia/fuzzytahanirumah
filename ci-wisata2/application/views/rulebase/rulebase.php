<div class="container">

  <?php if ($this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
  <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Rules
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
      <h3>Daftar Rules</h3>
		 <?php if(empty($rulebase) ) :?>
        <div class="alert alert-danger" role="alert">
          Data Wisata Tidak Ditemukan.
        </div>
      <?php endif; ?>
      <a href="<?= base_url(); ?>rulebase/tambah" class="btn btn-primary">Tambah Data</a>
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


<div class="row mt-3">
    <div class="col-sm-12">
      <div class=""></div>
	<table class="table table-stripped table-bordered">
    <thead align="center">
      <tr role="row">
      	<th>Id Rulebase</th>
        <th>Rulename</th>
        <th>Biaya</th>
        <th>Jarak</th>
        <th>Akses Jalan</th>
        <th>penginapan</th>
        <th>fasilitas</th>
        <th>Fuzzy Output</th>
        <th>Nilai</th>
        <th>Action</th>
      </tr>

      </thead>

       <tbody align="center">
<?php foreach($rulebase as $rlbs){


?>
      <tr>
      	
        <td><?php echo $rlbs['idrule']; ?></td>
        <td><?php echo $rlbs['rulename']; ?></td>
        <td><?php echo $rlbs['biaya']; ?></td>
        <td><?php echo $rlbs['jarak']; ?></td>
        <td><?php echo $rlbs['akses_jalan']; ?></td>
        <td><?php echo $rlbs['penginapan']; ?></td>
        <td><?php echo $rlbs['fasilitas']; ?></td>
        <td><?php echo $rlbs['output_fuzzy']; ?></td>
        <td><?php echo $rlbs['nilai_fuzzy']; ?></td>
        <td>
        	 <a href="<?= base_url(); ?>rulebase/hapus/<?= $rlbs['idrule']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
         <a href="<?= base_url(); ?>rulebase/ubah/<?= $rlbs['idrule']; ?>" class="badge badge-success float-right" onclick="return confirm('yakin?');">ubah</a>

        </td>


      </tr>

<?php
}
?>

    </tbody>
    
    
  </table>
				
				

  				
			</ul>

		</div>
	</div>
</div>