<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12">
			</div>
		</div>
		<div class="page-header">
			<h3 class="page-title">
				<span class="page-title-icon bg-gradient-primary text-white mr-2">
					<i class="mdi mdi-home"></i>
				</span>
				Dashboard
			</h3>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">
						<span></span>Dashboard
						<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
					</li>
				</ul>
			</nav>
		</div>
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Stock Produk</h4>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>
											Nama Produk
										</th>
										<th>
											Harga
										</th>
										<th>
											Stock
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($stok as $key => $value) {
									?>
										<tr>
											<td>
												<img src="<?= base_url('assets/produk/' . $value->gambar) ?>" class="mr-2" alt="image">
												<?= $value->nama_produk ?>
											</td>
											<td>
												Rp. <?= number_format($value->harga) ?>
											</td>
											<td>
												<label class="badge badge-gradient-<?php if ($value->stok < 5) {
																						echo 'danger';
																					} else {
																						echo 'primary';
																					} ?>"><?= $value->stok ?> Qty</label>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Chatting</h4>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>
											Nama Pelanggan
										</th>
										<th>
											View
										</th>
										<th>
											Tanggal Chatting
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($chatting as $key => $value) {
									?>
										<tr>
											<td>
												<img src="<?= base_url() ?>backend/images/faces/face1.jpg" class="mr-2" alt="image">
												<?= $value->nm_pel ?>
											</td>
											<td>
												<a href="<?= base_url('Admin/view_chatting/' . $value->id_pelanggan) ?>" class="badge badge-gradient-success">view</a>
											</td>
											<td>
												<?= $value->time ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Kritik Dan Saran</h4>
						<?php
						foreach ($kritik as $key => $value) {
							if ($value->isi_kritik != NULL) {


						?>
								<li class="d-flex mb-4 pb-1">

									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-info d-block mb-1"><?= $value->isi_kritik ?></small>
											<h6 class="mb-0"><?= $value->nm_pel ?></h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
										</div>
									</div>
								</li>
							<?php
							} else {
							?>
								<li class="d-flex mb-4 pb-1">

									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-danger d-block mb-1"><?= $value->jawab_kritik ?></small>
											<h6 class="mb-0">Admin</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
										</div>
									</div>
								</li>
						<?php
							}
						}
						?>
						<hr>
						<p>Balas kritik dan saran*)</p>
						<form action="<?= base_url('Admin/balas_kritik') ?>" method="POST">
							<textarea name="balas" class="form-control"></textarea>
							<button type="submit" class="btn btn-success mt-3">Kirim</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->