<br>
<br>
<br>
<br>
<!--Body Content-->
<div id="page-content">
	<!--MainContent-->
	<div id="MainContent" class="main-content" role="main">
		<!--Breadcrumb-->
		<div class="bredcrumbWrap">
			<div class="container breadcrumbs">
				<a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Product Details</span>
			</div>
		</div>
		<!--End Breadcrumb-->

		<div id="ProductSection-product-template" class="product-template__container prstyle2 container">
			<!--#ProductSection-product-template-->
			<div class="product-single product-single-1">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="product-details-img product-single__photos bottom">
							<div class="zoompro-wrap product-zoom-right pl-20">
								<div class="zoompro-span">
									<img class="blur-up lazyload zoompro" data-zoom-image="<?= base_url('assets/produk/' . $data['produk']->gambar) ?>" alt="" src="<?= base_url('assets/produk/' . $data['produk']->gambar) ?>" />
								</div>
								<div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
							</div>

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="product-single__meta">
							<h1 class="product-single__title"><?= $data['produk']->nama_produk ?></h1>
							<div class="product-nav clearfix">
								<a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
							<div class="prInfoRow">
								<div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
								<!-- <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div> -->
								<div class="product-review">
									<a class="reviewLink" href="#tab2">
										<span class="spr-badge-caption">6 reviews</span></a>
								</div>
							</div>
							<p class="product-single__price product-single__price-product-template">
								<span class="visually-hidden">Regular price</span>
								<s id="ComparePrice-product-template"><span class="money"><?= number_format($data['produk']->harga) ?></span></s>
								<span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
									<span id="ProductPrice-product-template"><span class="money"><?= number_format($data['produk']->harga - ($data['produk']->diskon / 100 * $data['produk']->harga), 0) ?></span></span>
								</span>
								<span class="discount-badge"> <span class="devider">|</span>&nbsp;
									<span>Hemat</span>
									<span id="SaveAmount-product-template" class="product-single__save-amount">
										<span class="money">Rp. <?= number_format($data['produk']->harga - $data['produk']->diskon), 0 ?></span>
									</span>
									<span class="off">(<span><?= $data['produk']->diskon ?></span>%)</span>
								</span>
							</p>
							<div class="product-single__description rte">
								<p><?= $data['produk']->deskripsi ?></p>
							</div>
							<form method="post" action="<?= base_url('Cart/add_cart') ?>" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $data['produk']->id_produk ?>">
								<input type="hidden" name="id_diskon" value="<?= $data['produk']->id_diskon ?>">
								<input type="hidden" class="price" name="price" value="<?= $data['produk']->harga - ($data['produk']->diskon / 100 * $data['produk']->harga) ?>">
								<input type="hidden" name="name" value="<?= $data['produk']->nama_produk ?>">
								<input type="hidden" name="qty" value="1">
								<input type="hidden" class="stok" name="stok" value="<?= $data['produk']->stok ?>">
								<input type="hidden" name="picture" value="<?= $data['produk']->gambar ?>">
								<!-- Product Action -->
								<div class="product-action clearfix">
									<div class="product-form__item--quantity">
										<!-- <div class="wrapQtyBtn">
											<div class="qtyField">
												<a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
												<input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
												<a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
											</div>
										</div> -->
										<div class="pro-qty">
											<input type="number" id="quantity" name="qty" value="1">
											<!-- <input type="number" id="quantity" name="qty" class="form-control" value="1" min="1" max="<?= $data['produk']->stock ?>"> -->
										</div>
									</div>
									<div class="product-form__item--submit">
										<button type="submit" name="add" class="btn product-form__cart-submit">
											<span>Add to cart</span>
										</button>
									</div>
								</div>
								<!-- End Product Action -->
							</form>
						</div>
						<!--Product Tabs-->
						<div class="tabs-listing">
							<div class="tab-container">
								<h3 class="acor-ttl active" rel="tab1">Product Details</h3>
								<div id="tab1" class="tab-content">
									<div class="product-description rte">
										<p><?= $data['produk']->deskripsi ?></p>
									</div>
								</div>
								<h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
								<div id="tab2" class="tab-content">
									<div id="shopify-product-reviews">
										<div class="spr-container">

											<div class="spr-content">
												<div class="spr-reviews">
													<?php
													foreach ($review as $key => $value) {

														if ($value->isi_kritik != NULL) {
													?>
															<div class="spr-review">
																<div class="spr-review-header">
																	<!-- <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span> -->
																	<h3 class="spr-review-header-title"><?= $value->nm_pel ?></h3>
																	<!-- <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span> -->
																</div>
																<div class="spr-review-content">
																	<p class="spr-review-content-body"><?= $value->isi_kritik ?></p>
																</div>
															</div>

														<?php
														} else if ($value->jawab_kritik != NULL) {
														?>
															<div class="spr-review">
																<div class="spr-review-header">
																	<!-- <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span> -->
																	<h3 class="spr-review-header-title">Admin</h3>
																	<!-- <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span> -->
																</div>
																<div class="spr-review-content">
																	<p class="spr-review-content-body"><?= $value->jawab_kritik ?></p>
																</div>
															</div>
														<?php
														}
														?>
													<?php
													}
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Product Tabs-->
					</div>
				</div>
				<!--End-product-single-->

				<!--Related Product Slider-->
				<div class="related-product grid-products">
					<header class="section-header">
						<h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
						<p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
					</header>
					<div class="productPageSlider">
						<?php foreach ($related_produk as $key => $related_produks) { ?>
							<div class="col-12 item">
								<!-- start product image -->
								<div class="product-image">
									<!-- start product image -->
									<a href="<?= base_url('home/detail_produk/' . $related_produks->id_produk) ?>">
										<!-- image -->
										<img class="primary blur-up lazyload" data-src="<?= base_url('assets/produk/' . $related_produks->gambar) ?>" src="<?= base_url('assets/produk/' . $related_produks->gambar) ?>" alt="image" title="product">
										<!-- End image -->
										<!-- Hover image -->
										<img class="hover blur-up lazyload" data-src="<?= base_url('assets/produk/' . $related_produks->gambar) ?>" src="<?= base_url('assets/produk/' . $related_produks->gambar) ?>" alt="image" title="product">
										<!-- End hover image -->
										<!-- product label -->
										<div class="product-labels rectangular"><span class="lbl on-sale"><?= number_format($related_produks->diskon, 0);  ?>%</span> <span class="lbl pr-label1">new</span></div>
										<!-- End product label -->
									</a>
									<!-- end product image -->

									<!-- Start product button -->
									<form class="variants add" action="<?= base_url('Cart/add_cart') ?>" onclick="window.location.href='<?= base_url('cart') ?>'" method="post">
										<input type="hidden" name="name" value="<?= $related_produks->nama_produk ?>">
										<input type="hidden" name="id" value="<?= $related_produks->id_diskon ?>">
										<input type="hidden" name="price" value="<?= $related_produks->harga - ($related_produks->harga * $related_produks->diskon / 100) ?>">
										<input type="hidden" name="stok" value="<?= $related_produks->stok ?>">
										<input type="hidden" name="picture" value="<?= $related_produks->gambar ?>">
										<input type="hidden" name="qty" value="1">
										<input type="hidden" name="diskon" value="<?= $related_produks->diskon ?>">
										<button class="btn btn-addto-cart" type="submit" tabindex="0">Add cart</button>
										<!-- <button class="btn cartIcon btn-addto-cart" type="submit" tabindex="0"><i class="icon anm anm-bag-l"></i></button> -->
									</form>
									<!-- end product button -->
								</div>
								<!-- end product image -->
								<!--start product details -->
								<div class="product-details text-center">
									<!-- product name -->
									<div class="product-name">
										<a href="<?= base_url('home/detail_produk/' . $related_produks->id_produk) ?>"><?= $related_produks->nama_produk ?></a>
									</div>
									<!-- End product name -->
									<!-- product price -->
									<div class="product-price">
										<?php if ($related_produks->diskon != '0') { ?>
											<span class="old-price">Rp. <?= number_format($related_produks->harga, 0) ?></span>
											<span class="price">Rp. <?= number_format($related_produks->harga - ($related_produks->diskon / 100 * $related_produks->harga), 0) ?></span>
										<?php } elseif ($related_produks->diskon === '0') { ?>
											<span class="price">Rp. <?= number_format($related_produks->harga, 0) ?></span>
										<?php } ?>
									</div>
									<!-- End product price -->
								</div>
								<!-- End product details -->
							</div>
						<?php } ?>

					</div>
				</div>
				<!--End Related Product Slider-->

			</div>
			<!--#ProductSection-product-template-->
		</div>
		<!--MainContent-->
	</div>
	<!--End Body Content-->
</div>