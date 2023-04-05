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
									<th>
										Gambar
									</th>
									<th>
										Nama Produk
									</th>
									<th>
										Nama Kategori
									</th>
									<th>
										Harga
									</th>
									<th>
										Stok
									</th>
									<th>
										Tipe
									</th>
									<th>
										Deskripsi
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($produk as $key => $value) { ?>
									<tr>
										<td class="py-1">
											<img src="<?= base_url('assets/produk/' . $value->gambar) ?>" alt="image" />
										</td>
										<td>
											<?= $value->nama_produk ?>
										</td>
										<td>
											<?= $value->nama_kategori ?>
										</td>
										<td>
											<?= $value->harga ?>
										</td>
										<td>
											<?= $value->stok ?>
										</td>
										<td>
											<?= $value->tipe ?>
										</td>
										<td>
											<?= $value->deskripsi ?>
										</td>
										<td>
											<a href="<?= base_url('produk/update/' . $value->id_produk) ?>" class="btn btn-warning">Edit</a>
											<a href="<?= base_url('produk/delete/' . $value->id_produk) ?>" class="btn btn-danger">Hapus</a>
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