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
							<a href="<?= base_url('kategori/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah Kategori</a>
						</p>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										Gambar
									</th>
									<th>
										Nama Kategori
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kategori as $key => $value) { ?>
									<tr>
										<td class="py-1">
											<img src="<?= base_url('assets/kategori/' . $value->img) ?>" alt="image" />
										</td>
										<td>
											<?= $value->nama_kategori ?>
										</td>
										<td>
											<a href="<?= base_url('kategori/update/' . $value->id_kategori) ?>" class="btn btn-warning">Edit</a>
											<a href="<?= base_url('kategori/delete/' . $value->id_kategori) ?>" class="btn btn-danger">Hapus</a>
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