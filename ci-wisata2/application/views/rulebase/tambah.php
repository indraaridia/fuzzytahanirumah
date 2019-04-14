<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Form Tambah Rules
				</div>
				<div class="card-body">
					

					<form action="" method="post">
				<div class="form-group">
					<label for="rulename">Rulename</label>
					<input type="text" name="rulename" class="form-control" id="rulename">
					<small class="form-text text-danger"><?= form_error('rulename'); ?></small>
				</div>

				<div class="form-group">
					<label for="biaya">Biaya</label>
					<select class="form-control" id="biaya" name="biaya">
						<option value="0">Murah</option>
						<option value="1">Sedang</option>
						<option value="2">Mahal</option>

					</select>
				</div>
				<div class="form-group">
					<label for="jarak">Jarak</label>
					<select class="form-control" id="jarak" name="jarak">
						<option value="0">Dekat</option>
						<option value="1">Sedang</option>
						<option value="2">Jauh</option>

					</select>
				</div>
				<div class="form-group">
					<label for="akses_jalan">Akses Jalan</label>
					<select class="form-control" id="akses_jalan" name="akses_jalan">
						<option value="0">Gampang</option>
						<option value="1">Sedang</option>
						<option value="2">Sulit</option>

					</select>
				</div>
				<div class="form-group">
					<label for="penginapan">Penginapan</label>
					<select class="form-control" id="penginapan" name="penginapan">
						<option value="2">Sedikit</option>
						<option value="1">Sedang</option>
						<option value="0">Banyak</option>

					</select>
				</div>
				<div class="form-group">
					<label for="fasilitas">Fasilitas</label>
					<select class="form-control" id="fasilitas" name="fasilitas">
						<option value="2">Sedikit</option>
						<option value="1">Sedang</option>
						<option value="0">Banyak</option>

					</select>
				</div>
				<div class="form-group">
					<label for="output_fuzzy">Fuzzy Output</label>
					<select class="form-control" id="output_fuzzy" name="output_fuzzy">
						<option value="2">Direkomendasikan</option>
						<option value="1">Cukup Direkomendasikan</option>
						<option value="0">Tidak Direkomendasikan</option>
						
					</select>
				</div>
				<div class="form-group">
					<label for="nilai_fuzzy">Nilai Fuzzy</label>
					<input type="text" name="nilai_fuzzy" class="form-control" id="nilai_fuzzy">
					<small class="form-text text-danger"><?= form_error('nilai_fuzzy'); ?></small>
				</div>

				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

			</form>

				</div>


			</div>


			

		</div>
	</div>

</div> 