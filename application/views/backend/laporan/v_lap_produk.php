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
						<canvas id="laporan_produk" style="height:250px"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?= base_url('analisis_produk/lap_harian_produk') ?>" method="POST">
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
						<form class="forms-sample" action="<?= base_url('analisis_produk/lap_bulanan_produk') ?>" method="POST">
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
						<form class="forms-sample" action="<?= base_url('analisis_produk/lap_tahunan_produk') ?>" method="POST">
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
		</div>
	</div>