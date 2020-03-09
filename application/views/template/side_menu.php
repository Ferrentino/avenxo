<li class="nav-separator"><span>Menu</span></li>
<li>
	<a href="<?php echo site_url('dashboard');?>"><i class="ti ti-home"></i><span>Dashboard</span></a>
</li>
<li>
	<a href="javascript:;"><i class="ti ti-layout"></i><span>Perwakilan STIKI</span></a>
	<ul class="acc-menu">
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_input_perwakilan_STIKI/index') ?>">Input data Perwakilan STIKI</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_data_perwakilan_STIKI/index') ?>">Data Perwakilan STIKI</a></li>
	</ul>
</li>
<li>
	<a href="javascript:;"><i class="ti ti-layout"></i><span>Kerjasama</span></a>
	<ul class="acc-menu">
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_input_kerjasama/index') ?>">Input data Kerjasama</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_data_kerjasama/index') ?>">Data Kerjasama</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_data_berkas/index') ?>">Data Berkas</a></li>
	</ul>
</li>
<li>
	<a href="javascript:;"><i class="ti ti-layout"></i><span>Mitra</span></a>
	<ul class="acc-menu">
		<li class="nav-item"><a>Input data Lembaga</a>
			<ul class="acc-menu">
				<li class="nav-item"><a>Internasional</a>
					<ul class="acc-menu">
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_input_lembaga/internasional_universitas') ?>">Universitas</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_input_lembaga/internasional_non') ?>">Non-Universitas</a></li>
					</ul>
				</li>
				<li class="nav-item"><a>Nasional</a>
					<ul class="acc-menu">
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_input_lembaga/nasional_universitas') ?>">Universitas</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_input_lembaga/nasional_non') ?>">Non-Universitas</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_data_lembaga/index') ?>">Data Lembaga</a></li>
		<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_data_perwakilan_Mitra/index') ?>">Data Perwakilan Mitra</a></li>
	</ul>
</li>
<li>
	<a href="<?php //echo site_url('dashboard');?>"><i class="ti ti-home"></i><span>Pengaturan Pengguna</span></a>
</li>