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
				<h1 class="page-width">Orders</h1>
			</div>
		</div>
	</div>
	<!--End Page Title-->

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
				<form action="#">
					<div class="wishlist-table table-content table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="product-name text-center alt-font">No Order</th>
									<th class="product-price text-center alt-font">Tanggan Transaksi</th>
									<th class="product-name alt-font">Total Bayar</th>
									<th class="product-price text-center alt-font">Status Order</th>
									<th class="stock-status text-center alt-font">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($status['deliv'] as $key => $value) {

								?>
									<tr>
										<td class="product-remove text-center" valign="middle"><?= $value->id_transaksi ?></td>
										<td class="product-thumbnail text-center">
											<?= $value->tgl_transaksi ?>
										</td>
										<td class="product-price text-center"><span class="amount">Rp. <?= number_format($value->total_bayar)  ?></span></td>
										<td class="stock text-center">
											<?php
											if ($value->status_order  == '0') {
												echo '<span class="badge badge-danger">Belum Bayar</span>';
											} else if ($value->status_order  == '1') {
												echo '<span class="badge badge-warning">Menunggu Konfirmasi</span>';
											} else if ($value->status_order  == '2') {
												echo '<span class="badge badge-info">Pesanan Diproses</span>';
											} else if ($value->status_order  == '3') {
												echo '<span class="badge badge-primary">Pesanan Dikirim</span>';
											} else if ($value->status_order  == '4') {
												echo '<span class="badge badge-success">Selesai</span>';
											}
											?>
											<!-- <span class="in-stock">in stock</span> -->
										</td>
										<td class="product-subtotal text-center">
											<a href="<?= base_url('Order/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-small">Detail Pesanan</a>
											<!-- <button type="button" class="btn btn-small">Add To Cart</button> -->
										</td>
									</tr>
								<?php
								} ?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
<!--End Body Content-->