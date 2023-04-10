<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Forms
			</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<?= $title ?>
						</p>
						<form class="forms-sample" action="<?= base_url('ongkir/update/' . $kecamatan->id_kecamatan) ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputName1">Nama Kecamatan</label>
								<input type="text" name="nama" value="<?= $kecamatan->nm_kecamatan ?>" class="form-control" id="exampleInputName1" placeholder="Nama Kecamatan">
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Ongkir</label>
								<input type="text" name="ongkir" value="<?= $kecamatan->ongkir ?>" class="form-control" id="exampleInputName1" placeholder="Ongkos Kirim">
							</div>
							<button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
							<a href="<?= base_url('ongkir') ?>" class="btn btn-light">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>