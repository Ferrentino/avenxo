<div class="panel panel-default">
	<div class="panel-heading">
		<h2>data lembaga mitra</h2>
		<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
	</div>
	<div class="form-group row">
		<div class="col-sm-11">
			<div class="pull-right">
				<button class="btn btn-primary" onclick="location.href='<?php echo site_url('c_insert_data_lembaga/index') ?>'">+ Insert</button>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Nama Lembaga</th>
					<th scope="col">Jenis Lembaga</th>
					<th scope="col">Alamat Lembaga</th>
					<th scope="col">Regional</th>
					<th scope="col">Negara</th>
					<th scope="col">Kode Pos</th>
					<th scope="col">Nomor Telepon</th>
					<th scope="col">Email</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach($data as $u){ 
				?>
				<tr>
					<td><?php echo $u->nama_lembaga ?></td>
					<td><?php echo $u->jenis_lembaga ?></td>
					<td><?php echo $u->alamat_lembaga ?></td>
					<td><?php echo $u->regional ?></td>
					<td><?php echo $u->nama_negara ?></td>
					<td><?php echo $u->kodepos_lembaga ?></td>
					<td><?php echo $u->notelp_lembaga ?></td>
					<td><?php echo $u->email_lembaga ?></td>
			    	<td class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-cog"></span>
						</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item"><span class="glyphicon glyphicon-edit"></span><?php echo anchor('c_data_lembaga/edit/'.$u->id_lembaga,'Edit'); ?><br></a>
							<!--a href="#" class="dropdown-item"><span class="glyphicon glyphicon-trash"></span>Delete<br></a-->
							<div class="dropdown-divider"></div>
							<a class="dropdown-item"><span class="glyphicon glyphicon-eye-open"></span><?php echo anchor('c_detail_data_lembaga/index/'.$u->id_lembaga,'Lihat Detail'); ?><br></a>
							<!--a class="dropdown-item"><span class="glyphicon glyphicon-eye-open"></span><?php //echo anchor('c_data_lembaga/perwakilanmitra/'.$u->id_lembaga,'Mitra'); ?></a-->
						</div>
					</td>
				</tr>
			<?php 
				} 
			?>	
			</tbody>
		</table>
	</div>
</div>
	