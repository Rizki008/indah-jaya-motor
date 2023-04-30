<br>
<br>
<br>
<br>
<!--Body Content-->
<div id="page-content">
	<!--Page Title-->
	<div class="page section-header text-center">
		<div class="page-title">
			<div class="wrapper">
				<h1 class="page-width">Compare Product variant1</h1>
			</div>
		</div>
	</div>
	<!--End Page Title-->

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
				<div class="compare-page">
					<div class="table-wrapper table-responsive">
						<table class="table">
							<thead>
								<tr class="th-compare">
									<th valign="middle">Action</th>
									<td valign="middle" class="item-row">
										<a href="<?= base_url('order') ?>" class="btn btn-small">Kembali</a>
									</td>
								</tr>
							</thead>
							<tbody id="table-compare">
								<?php
								$no = 1;
								foreach ($detail['pesanan'] as $key => $value) {
								?>

									<tr>
										<th valign="middle" class="product-name">Nama Produk</th>
										<td valign="middle" class="grid-link__title"><?= $value->nama_produk ?></td>
									</tr>
									<tr>
										<th valign="middle" class="product-name">Harga Satuan</th>
										<td valign="middle" class="item-row">
											<div class="product-price product_price"><span>Rp. <?= number_format($value->harga - ($value->harga * $value->diskon / 100))  ?></span></div>
										</td>
									</tr>
									<tr>
										<th valign="middle" class="product-name">Total Harga</th>
										<td valign="middle" class="item-row">
											<p class="description-compare">Rp. <?= number_format(($value->harga - ($value->harga * $value->diskon / 100)) * $value->qty) ?></p>
									</tr>
									<tr>
										<th valign="middle" class="product-name">Quantity</th>
										<td valign="middle" class="available-stock">
											<p><?= $value->qty ?> x</p>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Total Amount -->
				<div class="total-amount">
					<div class="row">
						<div class="col-lg-8 col-md-5 col-12">
							<?php
							if ($detail['transaksi']->status_order == '0') {
							?>
								<?php
								//notifikasi form kosong
								echo validation_errors('<div class="alert alert-warning alert-st-three alert-st-bg2 alert-st-bg13" role="alert">
                                <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2 admin-check-pro-clr13" aria-hidden="true"></i>
                                <p class="message-mg-rt"><strong>Warning!</strong>', '</p></div>');

								//notifikasi gagal upload gambar
								if (isset($error_upload)) {
									echo '<div class="alert alert-warning alert-success-style3 alert-st-bg2">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                    <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                                    <p><strong>Warning!</strong>' . $error_upload . '</p></div>';
								} ?>
								<h3>Bukti Pembayaran</h3>
								<p>Transfer Via Bank BRI / 0123-3456-0987-09-2</p>
								<form method="post" action="<?= base_url('Order/pembayaran/' . $detail['transaksi']->id_transaksi) ?>" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
									<input type="file" name="bukti_pembayaran" class="form-control">
									<button type="submit" class="btn mt-3">Upload</button>
								</form>
							<?php
							}
							if ($detail['transaksi']->status_order == '3') {
							?>
								<h3>Pesanan Diterima</h3>
								<p>Konfirmasi jika pesanan anda telah diterima</p>
								<?php echo form_open('Order/diterima/' . $detail['transaksi']->id_transaksi); ?>
								<input type="hidden" name="pelanggan" value="<?= $detail['transaksi']->id_pelanggan ?>">
								<input type="hidden" name="total_belanja" value="<?= $detail['transaksi']->total_bayar ?>">
								<?php
								$point = 0;
								$point = (0.5 / 100) * $detail['transaksi']->total_bayar;

								?>
								<input type="hidden" name="point" value="<?= $point ?>">
								<button type="submit" class="btn mt-3">Konfirmasi</button>
								</form>
							<?php
							}
							?>
							<?php
							if ($detail['transaksi']->status_order == '4') {
							?>
								<h3>Kritik dan Saran</h3>
								<p>Silahkan Untuk mengisi kritik dan saran di kolom pesan berikut!</p>
								<label class="mt-3">Kotak Kritik dan Saran</label>
								<form action="<?= base_url('Order/kritiksaran') ?>" method="POST">
									<textarea class="form-control" type="text" name="review" required></textarea>
									<button class="btn mt-3" type="submit">Kirim</button>
								</form>
							<?php
							}
							?>

						</div>
						<div class="col-lg-4 col-md-7 col-12">
							<div class="right">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="product-name text-center alt-font">Subtotal</th>
											<th class="product-price text-center alt-font">Shipping</th>
											<th class="product-name alt-font">Total Bayar</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
									<tr>
										<td class="product-remove text-center" valign="middle">Rp. <?= number_format($detail['transaksi']->total_bayar) ?></td>
										<td class="product-thumbnail text-center">Rp. <?= number_format($detail['transaksi']->ongkir) ?></td>
										<td class="product-thumbnail text-center">Rp. <?= number_format($detail['transaksi']->total_bayar + $detail['transaksi']->ongkir) ?></td>
								</table>
								<!-- <ul>
									<li>Subtotal<span>Rp. <?= number_format($detail['transaksi']->total_bayar) ?></span></li>
									<li>Shipping<span>Rp. <?= number_format($detail['transaksi']->ongkir) ?></span></li>
									<li class="last">Total<span>Rp. <?= number_format($detail['transaksi']->total_bayar + $detail['transaksi']->ongkir) ?></span></li>
								</ul>
								<div class="button5">
									<a href="<?= base_url('pelanggan/cStatusOrder') ?>" class="btn">Kembali</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Total Amount -->
			</div>
		</div>
	</div>

</div>
<!--End Body Content-->