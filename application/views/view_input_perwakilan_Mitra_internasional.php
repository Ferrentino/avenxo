<div class="panel panel-default">
	<div class="panel-heading">
		<h2>input perwakilan Mitra (Internasional)</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<!-- Form Mitra -->
		<form method="POST" action="http://localhost/avenxo/index.php/c_input_perwakilan_Mitra/simpanmitra">
			<div class="form-group row">
				<label for="inputperwakilan" class="col-sm-2 col-form-label">
					ID Perwakilan Lembaga
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputperwakilan" name="idperwakilan" placeholder="ID Perwakilan Lembaga">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputlembaga" class="col-sm-2 col-form-label">
					ID Lembaga
				</label>
				<div class="col-sm-10">
			     <input type="text" class="form-control" id="inputlembaga" value="<?= $result[0]->id_lembaga ?>" readonly name="idlembaga" placeholder="ID Lembaga">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputnamalembaga" class="col-sm-2 col-form-label">
					Nama Lembaga
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputnamalembaga" value="<?= $result[0]->nama_lembaga ?>" readonly name="namalembaga" placeholder="Nama Lembaga">
			    </div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Sebutan </label>
				<div class="col-sm-10">
					<select class="form-control" name="sebutan">
						<option value="Mr" selected="true"> Mr </option>
						<option value="Mrs"> Mrs </option>
						<option value="Etc" > Etc </option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputnama" class="col-sm-2 col-form-label">
					Nama
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputnama" name="nama" placeholder="Nama">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputnamalembaga" class="col-sm-2 col-form-label">
					Jabatan
				</label>
				<div class="col-sm-10">
			      <input type="text" class="form-control" id="inputjabatan" name="jabatan" placeholder="Jabatan">
			    </div>
			</div>
			<div class="form-group row">
				<label for="inputnama" class="col-sm-2 col-form-label">
					Jenis Kelamin
				</label>
				<div class="col-sm-10">
					<div class="form-check form-check-inline">
			          <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Laki - Laki">
			          <label class="form-check-label" for="gridRadios1">
			            Laki - Laki
			          </label>
			        </div>
			        <div class="form-check form-check-inline">
			          <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Perempuan">
			          <label class="form-check-label" for="gridRadios1">
			            Perempuan
			          </label>
			        </div>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputalamat" class="col-sm-2 col-form-label">
					Alamat
				</label>
				<div class="col-sm-10">
			      <textarea class="form-control" name="alamat" id="inputalamat"></textarea>
			    </div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Provinsi </label>
				<div class="col-sm-4">
					<select class="form-control" name="provinsi">
						<option disabled="true" selected="true"> Pilih Provinsi </option>
						<option></option>
					</select>
				</div>
				<label class="col-sm-2 col-form-label"> Kota </label>
				<div class="col-sm-4">
					<select class="form-control" name="kota">
						<option disabled="true"> Pilih Kota </option>
						<option value="<?= $result[0]->ID_KOTA ?>" selected="true"> <?= $result[0]->NAMA_KOTA ?> </option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Negara </label>
				<div class="col-sm-4">
					<select class="form-control" name="negara">
						<option disabled="true"> Pilih Provinsi </option>
						<option value="<?= $result[0]->ID_PROVINSI ?>" selected="true"> <?= $result[0]->NAMA_PROVINSI ?> </option>
						<option></option>
					</select>
				</div>
				<label class="col-sm-2 col-form-label"> Kode Pos </label>
				<div class="col-sm-4">
					<textarea class="form-control" name="kodepos" id="inputkodepos"><?= $result[0]->kodepos_lembaga ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> No Telepon </label>
				<div class="col-sm-2">
					<select class="form-control" name="kodenegara">
					</select>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="notelepon">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"> Email </label>
				<div class="col-sm-10">
					<input class="form-control" type="email" name="email" placeholder="email">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-11">
					<div class="pull-right">
						<button class="btn btn-primary">Simpan</button>
					</div>
				</div>
				<div class="col-sm-1">
					<div class="pull-right">
						<button class="btn">Cancel</button>
					</div>
				</div>
			</div>
		</form>
		<!-- End Form -->
	</div>
</div>