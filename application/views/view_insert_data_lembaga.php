<div class="panel panel-default">
	<div class="panel-heading">
		<h2>input data lembaga mitra</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="panel-body">
		<form method="POST" action="http://localhost/avenxo/index.php/c_insert_data_lembaga/direct">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Regional Kerjasama</label>
				<div class="col-sm-4">
					<select name="regional" id="regional" class="form-control" required>          
						<option disabled="true" selected="true">Pilih Regional</option>                            
						<option value="internasional">Internasional</option>;
						<option value="nasional">Nasional</option>;                  
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Lembaga Mitra</label>
				<div class="col-sm-4">
					<select name="jenis_lembaga" id="jenis_lembaga" class="form-control" required>          
						<option disabled="true" selected="true">Pilih Jenis Lembaga</option>                            
						<option value="universitas">Universitas</option>;
						<option value="non">Non Universitas</option>;               
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-11">
					<div class="pull-right">
						<button class="btn btn-primary">Lanjut</button>
					</div>
				</div>
				<div class="col-sm-1">
					<div class="pull-right">
						<button class="btn" onclick="location.href='<?php echo site_url('c_data_lembaga/index') ?>'">Batal</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>