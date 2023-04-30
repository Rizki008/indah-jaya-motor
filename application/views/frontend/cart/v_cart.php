<br>
<br>
<br>
<!--Body Content-->
<div id="page-content">
	<!--Page Title-->
	<div class="page section-header text-center">
		<div class="page-title">
			<div class="wrapper">
				<h1 class="page-width">Shopping Cart</h1>
			</div>
		</div>
	</div>
	<!--End Page Title-->

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
				<div class="alert alert-success text-uppercase" role="alert">
					<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
				</div>
				<form action="<?= base_url('cart/update_cart') ?>" method="post" class="cart style2">
					<table>
						<thead class="cart__row cart__header">
							<tr>
								<th colspan="2" class="text-center">Product</th>
								<th class="text-center">Price</th>
								<th class="text-center">Quantity</th>
								<th class="text-right">Total</th>
								<th class="action">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $key => $value) {
							?>
								<tr class="cart__row border-bottom line1 cart-flex border-top">
									<td class="cart__image-wrapper cart-flex-item">
										<a href="#"><img class="cart__image" src="<?= base_url('assets/produk/' . $value['picture']) ?>" alt="Elastic Waist Dress - Navy / Small"></a>
									</td>
									<td class="cart__meta small--text-left cart-flex-item">
										<div class="list-view-item__title">
											<a href="#"><?= $value['name'] ?> </a>
										</div>

										<!-- <div class="cart__meta-text">
											Color: Navy<br>Size: Small<br>
										</div> -->
									</td>
									<td class="cart__price-wrapper cart-flex-item">
										<span class="money">Rp. <?= number_format($value['price']) ?></span>
									</td>
									<td class="cart__update-wrapper cart-flex-item text-right">
										<div class="cart__qty text-center">
											<div class="qtyField">
												<button type="button" class="qtyBtn minus" data-type="minus" data-field="<?= $i . '[qty]' ?>">
													<i class="icon icon-minus"></i>
												</button>
												<!-- <a class="qtyBtn minus" href="<?= $i . '[qty]' ?>"><i class="icon icon-minus"></i></a> -->
												<input class="cart__qty-input qty" type="text" name="<?= $i . '[qty]' ?>" id="qty" data-min="1" data-max="<?= $value['stok'] ?>" value="<?= $value['qty'] ?>" pattern="[0-9]*">
												<!-- <a class="qtyBtn plus" href="<?= $i . '[qty]' ?>"><i class="icon icon-plus"></i></a> -->
												<button type="button" class="qtyBtn plus" data-type="plus" data-field="<?= $i . '[qty]' ?>">
													<i class="icon icon-plus"></i>
												</button>
											</div>
										</div>
									</td>
									<td class="text-right small--hide cart-price">
										<div><span class="money">Rp. <?= number_format($value['qty'] * $value['price'])  ?></span></div>
									</td>
									<td class="text-center small--hide"><a href="<?= base_url('Cart/delete/' . $value['rowid']) ?>" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
								</tr>
							<?php
								$i++;
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3" class="text-left"><a href="<?= base_url() ?>" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
								<td colspan="3" class="text-right">
									<button type="submit" name="update" class="btn btn-secondary btn--small cart-continue ml-2">Update Cart</button>
								</td>
							</tr>
						</tfoot>
					</table>
				</form>
			</div>


			<div class="container mt-4">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
						<!-- <h5>Discount Codes</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label for="address_zip">Enter your coupon code if you have one.</label>
								<input type="text" name="coupon">
							</div>
							<div class="actionRow">
								<div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
							</div>
						</form> -->
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
						<h5>Alamat Pengiriman</h5>
						<form action="<?= base_url('Cart/pesan') ?>" method="post">
							<?php $id_transaksi = date('Ymd') . strtoupper(random_string('alnum', 8));
							?>
							<input type="hidden" name="total" value="<?= $this->cart->total() ?>">
							<input type="hidden" name="ongkir" id="ong_kirim">
							<input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $items) {
								echo form_hidden('qty' . $i++, $items['qty']);
							}
							?>
							<div class="form-group">
								<label for="kota">Kota</label>
								<select id="kota" name="kota" data-default="United States">
									<option value="" selected="selected">Pilih Kota Tujuan ...</option>
									<!-- <option value="2">Cirebon</option> -->
									<option value="1">Kuningan</option>
								</select>
							</div>

							<div class="form-group">
								<label>State</label>
								<select id="kecamatan" name="kecamatan" data-default="">

								</select>
							</div>
							<div class="form-group">
								<label for="alamat">Detail Alamat</label>
								<input type="text" id="alamat" name="alamat">
							</div>

							<?php
							if ($this->cart->total() >= 40000) {
							?>
								<input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Proceed To Checkout">
							<?php
							}
							?>
						</form>
					</div>

					<div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
						<div class="solid-border">
							<div class="row border-bottom pb-2">
								<span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
								<span class="col-12 col-sm-6 text-right"><span class="money">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></span></span>
							</div>
							<div class="row border-bottom pb-2 pt-2">
								<span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
								<span class="col-12 col-sm-6 text-right" id="ongkir"></span>
							</div>
							<div class="row border-bottom pb-2 pt-2">
								<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
								<span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" id="total"></span></span>
							</div>
							<div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
							<p class="cart_tearm">
							<p>Minimal pembelian kamu sebesar <strong>Rp. <?= number_format(40000) ?></strong> yak!!!</p>
							</p>
						</div>

					</div>
				</div>
			</div>

		</div>

	</div>

</div>
<!--End Body Content-->