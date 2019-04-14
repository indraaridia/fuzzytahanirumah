<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Form Tambah Data Wisata
				</div>
				<div class="card-body">
					

					<form action="" method="post">
				<div class="form-group">
					<label for="nama">Nama Wisata</label>
					<input type="text" name="nama" class="form-control" id="nama">
					<small class="form-text text-danger"><?= form_error('nama'); ?></small>
				</div>

				<div class="form-group">
					<label for="jenis">Jenis Wisata</label>
					<select class="form-control" id="jenis" name="jenis">
						<option value="Wisata Alam Bahari">Wisata Alam Bahari</option>
						<option value="Wisata Alam Hutan">Wisata Alam Hutan</option>
						<option value="Wisata Budaya Sejarah">Wisata Budaya Sejarah</option>
						<option value="Wisata Budaya Masyarakat">Wisata Alam Masyarakat</option>

					</select>
				</div>
				<div class="form-group">
					<label for="biaya">Biaya</label>
					<input type="number" name="biaya" class="form-control" id="biaya">
					<small class="form-text text-danger"><?= form_error('biaya'); ?></small>
				</div>
				<div class="form-group">
					<label for="jarak">Jarak</label>
					<input type="number" name="jarak" class="form-control" id="jarak">
					<small class="form-text text-danger"><?= form_error('jarak'); ?></small>
				</div>
				<div class="form-group">
					<label for="akses_jalan">Akses Jalan</label>
					<input type="number" name="akses_jalan" class="form-control" id="akses_jalan">
					<small class="form-text text-danger"><?= form_error('akses_jalan'); ?></small>
				</div>
				<div class="form-group">
					<label for="penginapan">Penginapan</label>
					<input type="number" name="penginapan" class="form-control" id="penginapan">
					<small class="form-text text-danger"><?= form_error('penginapan'); ?></small>
				</div>
				<div class="form-group">
					<label for="fasilitas">Fasilitas Umum</label>
					<input type="number" name="fasilitas" class="form-control" id="fasilitas">
					<small class="form-text text-danger"><?= form_error('fasilitas'); ?></small>
				</div>

				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

			</form>

				</div>


			</div>


			

		</div>
	</div>

</div> 