<!--Footer-->
<footer id="footer">
	<div class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
					<div class="display-table">
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
					<div class="footer-social">
						<ul class="list--inline site-footer__social-icons social-icons">
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
							<li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-footer">
		<div class="container">
			<!--Footer Links-->
			<div class="footer-top">
				<div class="row">
					<!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
						<h4 class="h4">Quick Shop</h4>
						<ul>
							<li><a href="#">Women</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Kids</a></li>
							<li><a href="#">Sportswear</a></li>
							<li><a href="#">Sale</a></li>
						</ul>
					</div> -->
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
						<h4 class="h4">Informations</h4>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Terms &amp; condition</a></li>
							<li><a href="#">My Account</a></li>
						</ul>
					</div>
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
						<h4 class="h4">Customer Services</h4>
						<ul>
							<li><a href="#">Request Personal Data</a></li>
							<li><a href="#">FAQ's</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Orders and Returns</a></li>
							<li><a href="#">Support Center</a></li>
						</ul>
					</div>
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
						<h4 class="h4">Contact Us</h4>
						<ul class="addressFooter">
							<li><i class="icon anm anm-map-marker-al"></i>
								<p>Kuningan Jawabarat<br>14251</p>
							</li>
							<li class="phone"><i class="icon anm anm-phone-s"></i>
								<p>+62 812 2712 1928 1</p>
							</li>
							<li class="email"><i class="icon anm anm-envelope-l"></i>
								<p>indahjayamotor@gmail.com</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--End Footer Links-->
			<hr>
			<div class="footer-bottom">
				<div class="row">
					<!--Footer Copyright-->
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="<?= base_url() ?>">Indah Jaya Motor</a></div>
					<!--End Footer Copyright-->
					<!--Footer Payment Icon-->
					<!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
						<ul class="payment-icons list--inline">
							<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
							<li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
							<li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
							<li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
							<li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
							<li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
						</ul>
					</div> -->
					<!--End Footer Payment Icon-->
				</div>
			</div>
		</div>
	</div>
</footer>
<!--End Footer-->
<!--Scoll Top-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<!--End Scoll Top-->

<!--Quick View popup-->

<?php $data = $this->m_home->katalog(); ?>
<?php foreach ($data['menu'] as $key => $value) { ?>
	<div class="modal fade quick-view-popup" id="content_quickview<?= $value->id_produk ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div id="ProductSection-product-template" class="product-template__container prstyle1">
						<div class="product-single">
							<!-- Start model close -->
							<a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
							<!-- End model close -->
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="product-details-img">
										<div class="pl-20">
											<img src="<?= base_url('assets/produk/' . $value->gambar) ?>" alt="" />
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="product-single__meta">
										<h2 class="product-single__title"><?= $value->nama_produk ?></h2>
										<div class="prInfoRow">
											<div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
										</div>
										<p class="product-single__price product-single__price-product-template">
											<span class="visually-hidden">Regular price</span>
											<?php if ($value->diskon != 0) { ?>
												<s id="ComparePrice-product-template"><span class="money">Rp. <?= number_format($value->harga, 0) ?></span></s>
												<span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
													<span id="ProductPrice-product-template"><span class="money">Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga), 0) ?></span></span>
												</span>
											<?php } else { ?>
												<span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
													<span id="ProductPrice-product-template"><span class="money">Rp. <?= number_format($value->harga), 0 ?></span></span>
												</span>
											<?php } ?>

										</p>
										<div class="product-single__description rte">
											<?= $value->deskripsi ?>
										</div>

										<form method="post" action="<?= base_url('Cart/add_cart') ?>" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
											<input type="hidden" name="name" value="<?= $value->nama_produk ?>">
											<input type="hidden" name="id" value="<?= $value->id_diskon ?>">
											<input type="hidden" name="price" value="<?= $value->harga - ($value->harga * $value->diskon / 100) ?>">
											<input type="hidden" name="stok" value="<?= $value->stok ?>">
											<input type="hidden" name="picture" value="<?= $value->gambar ?>">
											<input type="hidden" name="qty" value="1">
											<input type="hidden" name="diskon" value="<?= $value->diskon ?>">
											<!-- Product Action -->
											<div class="product-action clearfix">
												<div class="product-form__item--quantity">
													<div class="wrapQtyBtn">
														<div class="qtyField">
															<input type="number" id="quantity" name="qty" value="1">
														</div>
													</div>
												</div>
											</div>
											<div class="product-form__item--submit">
												<button type="submit" name="add" class="btn product-form__cart-submit">
													<span>Add to cart</span>
												</button>
											</div>
											<!-- End Product Action -->
										</form>
										<!-- <div class="display-table shareRow">
											<div class="display-table-cell">
												<div class="wishlist-btn">
													<a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
												</div>
											</div>
										</div> -->
									</div>
								</div>
							</div>
							<!--End-product-single-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Quick View popup-->
<?php } ?>

<!-- Newsletter Popup -->
<div class="newsletter-wrap" id="popup-container">
	<div id="popup-window">
		<a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
		<!-- Modal content-->
		<div class="display-table splash-bg">
			<div class="display-table-cell width40"><img src="<?= base_url() ?>frontend/assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
			<div class="display-table-cell width60 text-center">
				<div class="newsletter-left">
					<ul class="list--inline site-footer__social-icons social-icons">
						<li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
						<li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Newsletter Popup -->

<!-- Including Jquery -->
<script src="<?= base_url() ?>frontend/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/vendor/jquery.cookie.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/vendor/wow.min.js"></script>
<!-- Including Javascript -->
<script src="<?= base_url() ?>frontend/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/plugins.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/lazysizes.js"></script>
<script src="<?= base_url() ?>frontend/assets/js/main.js"></script>
<!--For Newsletter Popup-->
<script>
	jQuery(document).ready(function() {
		jQuery('.closepopup').on('click', function() {
			jQuery('#popup-container').fadeOut();
			jQuery('#modalOverly').fadeOut();
		});

		var visits = jQuery.cookie('visits') || 0;
		visits++;
		jQuery.cookie('visits', visits, {
			expires: 1,
			path: '/'
		});
		console.debug(jQuery.cookie('visits'));
		if (jQuery.cookie('visits') > 1) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		} else {
			var pageHeight = jQuery(document).height();
			jQuery('<div id="modalOverly"></div>').insertBefore('body');
			jQuery('#modalOverly').css("height", pageHeight);
			jQuery('#popup-container').show();
		}
		if (jQuery.cookie('noShowWelcome')) {
			jQuery('#popup-container').hide();
			jQuery('#active-popup').hide();
		}
	});

	jQuery(document).mouseup(function(e) {
		var container = jQuery('#popup-container');
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			cont
			ainer.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		}
	});
</script>
<!--End For Newsletter Popup-->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#kota').change(function() {
			var id = $(this).val();
			$.ajax({
				url: "<?php echo site_url('Cart/add_ajax_kec'); ?>",
				method: "POST",
				data: {
					id: id
				},
				async: true,
				dataType: 'json',
				success: function(data) {

					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {
						html += '<option data-ongkir=' + data[i].ongkir + ' value=' + data[i].id_kecamatan + '>' + data[i].nm_kecamatan + '</option>';
					}
					$('#kecamatan').html(html);
				}
			});
			return false;
		});

	});
</script>
<script>
	console.log = function() {}
	$("#kecamatan").on('change', function() {
		const ongkir = $(this).find(':selected').attr('data-ongkir');
		const total = <?= $this->cart->total() ?>

		const total_bayar = parseInt(ongkir) + parseInt(total);

		$("#ongkir").html('Rp. ' + ongkir);
		$("#ongkir").val('Rp. ' + ongkir);

		$("#ong_kirim").html(ongkir);
		$("#ong_kirim").val(ongkir);

		$("#total").html('Rp. ' + total_bayar);
		$("#total").val('Rp. ' + total_bayar);

	});
</script>
</div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>