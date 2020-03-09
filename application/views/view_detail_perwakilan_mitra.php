<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Detail Lembaga</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Detail Data Lembaga -->
		<form> <!--method="POST" action="http://localhost/avenxo/index.php/c_input_perwakilan_Mitra/simpanmitra"-->
			<?php
				foreach ($mitra as $value) {
			?>
				<div class="row">
					<label class="col-sm-2 col-form-label">ID PERWAKILAN LEMBAGA</label>
					<label for="kodelembaga" class="col-sm-2 col-form-label">
						<?= $value["ID_PERWAKILAN_LEMBAGA"] ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label">Nama</label>
					<label for="namalembaga" class="col-sm-2 col-form-label">
						<?= $value["NAMA"] ?>
					</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<label for="alamatlembaga" class="col-sm-2 col-form-label">
						<?= $value["JENIS_KELAMIN_PERWAKILAN_LEMBAGA"] ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label">jabatan</label>
					<label for="regional" class="col-sm-2 col-form-label">
						<?= $value["JABATAN"] ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> alamat </label>
					<label for="negara" class="col-sm-2 col-form-label">
						<?= $value["ALAMAT_PERWAKILAN_LEMBAGA"] ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Kode Pos </label>
					<label for="kodepos" class="col-sm-2 col-form-label">
						<?= $value["KODEPOS_PERWAKILAN_LEMBAGA"] ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Nomor Telepon </label>
					<label for="nomortelepon" class="col-sm-2 col-form-label">
						<?= $value["NOTELP_PERWAKILAN_LEMBAGA"] ?>
					</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> Email </label>
					<label for="email" class="col-sm-2 col-form-label">
						<?= $value["EMAIL_PERWAKILAN_LEMBAGA"] ?>
					</label>
				</div>
			<?php
				}
			?>
		</form>
		<!-- End Form -->
	</div>
</div>