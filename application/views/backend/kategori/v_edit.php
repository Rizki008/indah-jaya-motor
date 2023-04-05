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
						<form class="forms-sample" action="<?= base_url('kategori/update/' . $kategori->id_kategori) ?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
							<div class="form-group">
								<label for="exampleInputName1">Nama Kategori</label>
								<input type="text" name="nama_kategori" value="<?= $kategori->nama_kategori ?>" class="form-control" id="exampleInputName1" placeholder="Nama Kategori">
							</div>
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="img" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
							<button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
							<a href="<?= base_url('kategori') ?>" class="btn btn-light">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>