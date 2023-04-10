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
			<div class="col-lg-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<!-- <h4 class="card-title">Striped Table</h4> -->
						<!-- <p class="card-description">
							<a href="<?= base_url('produk/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah Produk</a>
						</p> -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										No
									</th>
									<th>
										Nama Kecamatan
									</th>
									<th>
										Biaya Kirim
									</th>
									<th>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($kecamatan as $key => $value) { ?>
									<tr>
										<td class="py-1">
											<?= $no++ ?>
										</td>
										<td>
											<?= $value->nm_kecamatan ?>
										</td>
										<td>
											<?= number_format($value->ongkir, 0)  ?>
										</td>
										<td>
											<a href="<?= base_url('ongkir/update/' . $value->id_kecamatan) ?>" class="btn btn-warning">Edit</a>
											<a href="<?= base_url('ongkir/delete/' . $value->id_kecamatan) ?>" class="btn btn-danger">Hapus</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							Tambah Data Biaya Ongkos Kirim
						</p>
						<form class="forms-sample" action="<?= base_url('ongkir') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputName1">Nama Kecamatan</label>
								<input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama Kecamatan">
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Ongkir</label>
								<input type="text" name="ongkir" class="form-control" id="exampleInputName1" placeholder="Biaya Pengiriman">
							</div>
							<button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>