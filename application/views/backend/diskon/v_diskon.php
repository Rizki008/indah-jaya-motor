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
						<!-- <h4 class="card-title">Striped Table</h4> -->
						<p class="card-description">
							<a href="<?= base_url('diskon/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah Diskon</a>
						</p>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										Nama Produk
									</th>
									<th>
										Nama Diskon
									</th>
									<th>
										Tangal Selesai
									</th>
									<th>
										Besar diskon
									</th>
									<th>
										Level Diskon Member
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($diskon as $key => $value) { ?>
									<tr>
										<td>
											<?= $value->nama_produk ?>
										</td>
										<td>
											<?= $value->nama_diskon ?>
										</td>
										<td>
											<?= $value->tgl_selesai ?>
										</td>
										<td>
											<?= $value->diskon ?>
										</td>
										<td>
											<?php if ($value->member == 1) { ?>
												<p>Gold</p>
											<?php } elseif ($value->member == 2) { ?>
												<p>Silver</p>
											<?php } elseif ($value->member == 3) { ?>
												<p>Clasic</p>
											<?php } ?>
										</td>
										<td>
											<a href="<?= base_url('diskon/update/' . $value->id_diskon) ?>" class="btn btn-warning">Diskon</a>
											<a href="<?= base_url('diskon/delete/' . $value->id_diskon) ?>" class="btn btn-danger">Hapus</a>
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