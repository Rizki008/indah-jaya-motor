<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				<?= $title ?>
			</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan</h4>
						<canvas id="laporan" style="height:250px"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?= base_url('laporan/lap_harian_transaksi') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputUsername1">Tanggal</label>
								<select name="tanggal" class="form-control form-control-lg" id="exampleFormControlSelect1">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 31; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Bulan</label>
								<select name="bulan" class="form-control form-control-lg" id="exampleFormControlSelect1">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tahun</label>
								<select name="tahun" class="form-control form-control-lg" id="exampleFormControlSelect1">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?= base_url('laporan/lap_bulanan_transaksi') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Bulan</label>
								<select name="bulan" class="form-control form-control-lg" id="exampleFormControlSelect1">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tahun</label>
								<select name="tahun" class="form-control form-control-lg" id="exampleFormControlSelect1">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?= base_url('laporan/lap_tahunan_transaksi') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputPassword1">Tahun</label>
								<select name="tahun" class="form-control form-control-lg" id="exampleFormControlSelect1">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>

							<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
						</form>
					</div>
				</div>
			</div>

			<!-- <div class="col-md-4">
				<div class="card card-light">
					<div class="card-header">
						<h3 class="card-title">Laporan Transaksi Bulanan</h3>
					</div>
					<div class="card-body">
						<?php
						echo form_open('laporan/lap_bulanan_transaksi') ?>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Bulan</label>
									<select name="bulan" class="form-control">
										<?php
										$mulai = 1;
										for ($i = $mulai; $i < $mulai + 12; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Tahun</label>
									<select name="tahun" class="form-control">
										<?php
										$mulai = date('Y') - 1;
										for ($i = $mulai; $i < $mulai + 10; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
								</div>
							</div>
						</div>
						<?php
						echo form_close() ?>
					</div>
				</div>
			</div> -->


			<!-- <div class="col-md-4">
				<div class="card card-light">
					<div class="card-header">
						<h3 class="card-title">Laporan Transaksi Tahunan</h3>
					</div>
					<div class="card-body">
						<?php
						echo form_open('laporan/lap_tahunan_transaksi') ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Tahun</label>
									<select name="tahun" class="form-control">
										<?php
										$mulai = date('Y') - 1;
										for ($i = $mulai; $i < $mulai + 10; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
								</div>
							</div>
						</div>
						<?php
						echo form_close() ?>
					</div>
				</div>
			</div> -->
		</div>
	</div>