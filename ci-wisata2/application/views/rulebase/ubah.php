<div class="container">
	
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Form Tambah Rules
				</div>
				<div class="card-body">

					<form action="" method="post">
						<input type="hidden" name="idrule" value="<?= $rulebase['idrule']; ?>">
						<div class="form-group">
						<label for="rulename">Rulename</label>
							<input type="text" name="rulename" class="form-control" id="rulename" value="<?= $rulebase['rulename']; ?>">
							<small class="form-text text-danger"><?= form_error('rulename'); ?></small>
						</div>

				<div class="form-group">
					<label for="biaya">Biaya</label>
					<select class="form-control" id="biaya" name="biaya" value="<?= $rulebase['biaya']; ?>">
						<?php foreach( $biaya as $b ) : ?>
							<?php if($b == $rulebase['biaya'] ) :?><option value="<?= $b;  ?>" selected><?= $b; ?></option>
						<?php else : ?>
							<option value="<?= $b;  ?>"><?= $b; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

					</select>
				</div>
				<div class="form-group">
					<label for="jarak">Jarak</label>
					<select class="form-control" id="jarak" name="jarak" value="<?= $rulebase['jarak']; ?>">
						<?php foreach( $jarak as $j ) : ?>
							<?php if($j == $rulebase['jarak'] ) :?><option value="<?= $j;  ?>" selected><?= $j; ?></option>
						<?php else : ?>
							<option value="<?= $j;  ?>"><?= $j; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

					</select>
				</div>
				<div class="form-group">
					<label for="akses_jalan">Akses Jalan</label>
					<select class="form-control" id="akses_jalan" name="akses_jalan" value="<?= $rulebase['akses_jalan']; ?>">
						<?php foreach( $akses_jalan as $a ) : ?>
							<?php if($a == $rulebase['akses_jalan'] ) :?><option value="<?= $a;  ?>" selected><?= $a; ?></option>
						<?php else : ?>
							<option value="<?= $a;  ?>"><?= $a; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

					</select>
				</div>
				<div class="form-group">
					<label for="penginapan">Penginapan</label>
					<select class="form-control" id="penginapan" name="penginapan" value="<?= $rulebase['penginapan']; ?>">
						<?php foreach( $penginapan as $p ) : ?>
							<?php if($p == $rulebase['penginapan'] ) :?><option value="<?= $p;  ?>" selected><?= $p; ?></option>
						<?php else : ?>
							<option value="<?= $p;  ?>"><?= $p; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

					</select>
				</div>
				<div class="form-group">
					<label for="fasilitas">Fasilitas</label>
					<select class="form-control" id="fasilitas" name="fasilitas" value="<?= $rulebase['fasilitas']; ?>">
						<?php foreach( $fasilitas as $f ) : ?>
							<?php if($f == $rulebase['akses_jalan'] ) :?><option value="<?= $f;  ?>" selected><?= $f; ?></option>
						<?php else : ?>
							<option value="<?= $f;  ?>"><?= $f; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

					</select>
				</div>
				<div class="form-group">
					<label for="output_fuzzy">Fuzzy Output</label>
					<select class="form-control" id="output_fuzzy" name="output_fuzzy" value="<?= $rulebase['output_fuzzy']; ?>">
						<?php foreach( $output_fuzzy as $o ) : ?>
							<?php if($o == $rulebase['output_fuzzy'] ) :?><option value="<?= $o;  ?>" selected><?= $o; ?></option>
						<?php else : ?>
							<option value="<?= $o;  ?>"><?= $o; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

					</select>
				</div>
				<div class="form-group">
					<label for="nilai_fuzzy">Nilai Fuzzy</label>
					<input type="text" name="nilai_fuzzy" class="form-control" id="nilai_fuzzy" value="<?= $rulebase['nilai_fuzzy']; ?>">
					<small class="form-text text-danger"><?= form_error('nilai_fuzzy'); ?></small>
				</div>

				<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

			</form>

				</div>


			</div>


			

		</div>
	</div>

</div> 