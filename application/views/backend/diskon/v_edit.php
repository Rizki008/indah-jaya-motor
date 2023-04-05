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
						<form class="forms-sample" action="<?= base_url('diskon/update') ?>" method="POST">
							<div class="form-group">
								<label for="exampleFormControlSelect2">Produk</label>
								<select class="form-control" name="produk" id="produk-diskon">
									<option>---Pilih Produk---</option>
									<?php
									foreach ($produk as $key => $value) {
									?>
										<option data-harga="<?= number_format($value->harga, 0) ?>" value="<?= $value->id_produk ?>" <?php if (set_value('produk') == $value->id_produk) {
																																			echo 'selected';
																																		} ?>><?= $value->nama_produk ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Harga Produk</label>
								<input type="text" value="<?= $diskon->harga ?>" name="harga" class="harga form-control" id="exampleInputName1" readonly>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Tipe Produk</label>
								<select class="form-control" name="level" id="exampleFormControlSelect2">
									<option value="">Choose this Level Member...</option>
									<option value="1" <?php if ($diskon->member == '1') {
															echo 'selected';
														} ?>>Gold</option>
									<option value="2" <?php if ($diskon->member == '2') {
															echo 'selected';
														} ?>>Silver</option>
									<option value="3" <?php if ($diskon->member == '3') {
															echo 'selected';
														} ?>>Clasic</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Nama Diskon</label>
								<input type="text" value="<?= $diskon->nama_diskon ?>" name="nama_diskon" class="form-control" id="exampleInputName1" placeholder="Nama Diskon">
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Besar Diskon</label>
								<input type="number" value="<?= $diskon->diskon ?>" name="diskon" class="form-control" id="exampleInputName1" placeholder="Besar Diskon">
							</div>
							<div class="form-group">
								<label>Tanggal Selesai</label>
								<input type="date" value="<?= $diskon->tgl_selesai ?>" name="tgl" class="form-control" placeholder="dd/mm/yyyy" />
							</div>
							<button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
							<a href="<?= base_url('produk') ?>" class="btn btn-light">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>