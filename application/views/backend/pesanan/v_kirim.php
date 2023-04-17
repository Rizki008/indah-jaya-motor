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
							<a href="<?= base_url('produk/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah Produk</a>
						</p>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Id Transaksi </th>
									<th>Atas Nama</th>
									<th>Tanggal Order</th>
									<th>Total Bayar</th>
									<th>Status Order</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kirim as $key => $value) { ?>
									<tr>
										<td><?= $value->id_transaksi ?></td>
										<td><?= $value->nm_pel ?></td>
										<td><?= $value->tgl_transaksi ?></td>
										<td>Rp. <?= number_format($value->total_bayar)  ?></td>
										<td><span class="badge bg-primary">Diproses</span> <a href="<?= base_url('Admin/cTransaksi/dikirim/' . $value->id_transaksi) ?>" class="btn btn-success">Kirim</a></td>
										<td><a href="<?= base_url('Admin/cTransaksi/detail_pesanan/' . $value->id_transaksi) ?>"> <i class="bx bx-dots-vertical-rounded"></i></a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>