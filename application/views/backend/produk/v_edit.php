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
						<form class="forms-sample" action="<?= base_url('produk/update/' . $produk->id_produk) ?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
							<div class="form-group">
								<label for="exampleInputName1">Nama Produk</label>
								<input type="text" name="nama_produk" value="<?= $produk->nama_produk ?>" class="form-control" id="exampleInputName1" placeholder="Nama Produk">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Kategori Produk</label>
								<select class="form-control" name="id_kategori" id="exampleFormControlSelect2">
									<option value="<?= $produk->id_kategori ?>"><?= $produk->nama_kategori ?></option>
									<option>---Pilih Kategori---</option>
									<?php foreach ($kategori as $key => $value) { ?>
										<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Tipe Produk</label>
								<select class="form-control" name="tipe" id="exampleFormControlSelect2">
									<option value="<?= $produk->tipe ?>"><?php if ($produk->tipe == 1) { ?>
											<p>Single Produk</p>
										<?php } elseif ($produk->tipe == 2) { ?>
											<p>Double Produk</p>
										<?php } ?>
									</option>
									<option>---Pilih Tipe Produk---</option>
									<option value="1">Single Produk</option>
									<option value="2">Double Produk</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Harga Produk</label>
								<input type="text" name="harga" value="<?= $produk->harga ?>" class="form-control" id="exampleInputName1" placeholder="Harga">
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Stok Produk</label>
								<input type="text" name="stok" value="<?= $produk->stok ?>" class="form-control" id="exampleInputName1" placeholder="Stok Produk">
							</div>
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="gambar" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleTextarea1">Deskripsi</label>
								<textarea class="form-control" name="deskripsi" id="exampleTextarea1" rows="4"><?= $produk->deskripsi ?></textarea>
							</div>
							<button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
							<a href="<?= base_url('produk') ?>" class="btn btn-light">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>