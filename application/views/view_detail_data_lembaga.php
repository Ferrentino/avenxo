<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Detail Lembaga</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Detail Data Lembaga -->
		<form> <!--method="POST" action="http://localhost/avenxo/index.php/c_input_perwakilan_Mitra/simpanmitra"-->
			<?php foreach($detail as $u){ ?>
				<div class="row">
					<label class="col-sm-2 col-form-label">Kode Lembaga</label>
					<label for="kodelembaga" class="col-sm-2 col-form-label">
						<?php echo $u->id_lembaga ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label">Nama Lembaga</label>
					<label for="namalembaga" class="col-sm-2 col-form-label">
						<?php echo $u->nama_lembaga ?>
					</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Lembaga</label>
					<label for="alamatlembaga" class="col-sm-2 col-form-label">
						<?php echo $u->alamat_lembaga ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label">Regional</label>
					<label for="regional" class="col-sm-2 col-form-label">
						<?php echo $u->regional ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Negara </label>
					<label for="negara" class="col-sm-2 col-form-label">
						<?php echo $u->nama_negara ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Kode Pos </label>
					<label for="kodepos" class="col-sm-2 col-form-label">
						<?php echo $u->kodepos_lembaga ?>
					</label>
				</div>
				<div class="row">
					<label class="col-sm-2 col-form-label"> Nomor Telepon </label>
					<label for="nomortelepon" class="col-sm-2 col-form-label">
						<?php echo $u->notelp_lembaga ?>
					</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"> Email </label>
					<label for="email" class="col-sm-2 col-form-label">
						<?php echo $u->email_lembaga ?>
					</label>
				</div>
			<?php } ?>
			<div class="form-group">
				<label class="col-sm-2 col-form-label"> <b>Statistik Lembaga</b> </label>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Tahun</th>
							<!--th scope="col">Total Perwakilan Lembaga</th-->
							<th scope="col">Total Berkas</th>
							<th scope="col">Total Kerjasama</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($statistik as $u){ ?>
							<tr>
								<td><?php echo $u->tahun ?></td>
								<!--td><?php //echo $u->perwakilan ?></td-->
								<td><?php echo $u->berkas ?></td>
								<td><?php echo $u->kerjasama ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="form-group">
				<label class="col-sm-3 col-form-label"> <b>Data Perwakilan Lembaga</b> </label>
				<?php foreach($detail as $u){ ?>
				<a class="pull-right btn btn-primary" href="<?php echo site_url('c_input_perwakilan_Mitra/index/'.$u->id_lembaga) ?>">+ Tambah Perwakilan Lembaga</a>
				<?php } ?>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Jabatan</th>
							<th scope="col">Alamat Perwakilan</th>
							<th scope="col">Nomor Telepon</th>
							<th scope="col">Email</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($perwakilan as $u){ ?>
							<tr>
								<td><?php echo $u->nama_perwakilan_lembaga ?></td>
								<td><?php echo $u->jenis_kelamin_perwakilan_lembaga ?></td>
								<td><?php echo $u->jabatan ?></td>
								<td><?php echo $u->alamat_perwakilan_lembaga ?></td>
								<td><?php echo $u->notelp_perwakilan_lembaga ?></td>
								<td><?php echo $u->email_perwakilan_lembaga ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</form>
		<!-- End Form -->
	</div>
</div>