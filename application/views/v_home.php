<!--Body Content-->
<div id="page-content">
	<!--Home slider-->
	<div class="slideshow slideshow-wrapper pb-section sliderFull">
		<div class="home-slideshow">
			<div class="slide">
				<div class="blur-up lazyload bg-size">
					<img class="blur-up lazyload bg-img" data-src="<?= base_url() ?>frontend/assets/images/slideshow-banners/slidersa.jpg" src="<?= base_url() ?>frontend/assets/images/slideshow-banners/slidersa.jpg" alt="Shop Our New Collection" title="Shop Our New Collection" />
					<div class="slideshow__text-wrap slideshow__overlay classic bottom">
						<div class="slideshow__text-content bottom">
							<div class="wrap-caption center">
								<h2 class="h1 mega-title slideshow__title">Servis Motor Anda Ditempat Kami</h2>
								<span class="mega-subtitle slideshow__subtitle">Minimal Pembelanjaan Rp.40.000</span>
								<!-- <span class="btn">Shop now</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="blur-up lazyload bg-size">
					<img class="blur-up lazyload bg-img" data-src="<?= base_url() ?>frontend/assets/images/slideshow-banners/sliders.jpg" src="<?= base_url() ?>frontend/assets/images/slideshow-banners/sliders.jpg" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
					<div class="slideshow__text-wrap slideshow__overlay classic bottom">
						<div class="slideshow__text-content bottom">
							<div class="wrap-caption center">
								<h2 class="h1 mega-title slideshow__title">Koleksi Sperpat Motor</h2>
								<span class="mega-subtitle slideshow__subtitle">Diskon Hingga 50%</span>
								<!-- <span class="btn">Shop now</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Home slider-->
	<!--Collection Tab slider-->
	<div class="tab-slider-product section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="section-header text-center">
						<h2 class="h2">Produk Baru</h2>
						<p>Produk Pilihan Ditoko kami</p>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!--Collection Tab slider-->

	<!--Collection Box slider-->
	<div class="collection-box section">
		<div class="container-fluid">
			<div class="collection-grid">
				<?php foreach ($kategori as $key => $value) { ?>
					<div class="collection-grid-item">
						<a href="collection-page.html" class="collection-grid-item__link">
							<img data-src="<?= base_url('assets/kategori/' . $value->img) ?>" src="<?= base_url('assets/kategori/' . $value->img) ?>" alt="Fashion" class="blur-up lazyload" />
							<div class="collection-grid-item__title-wrapper">
								<h3 class="collection-grid-item__title btn btn--secondary no-border"><?= $value->nama_kategori ?></h3>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--End Collection Box slider-->

	<!--Featured Product-->
	<div class="product-rows section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="section-header text-center">
						<h2 class="h2">Featured collection</h2>
						<p>Our most popular products based on sales</p>
					</div>
				</div>
			</div>
			<div class="grid-products">
				<div class="row">
					<?php foreach ($produk['menu'] as $key => $value) { ?>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
							<div class="grid-view_image">
								<!-- start product image -->
								<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="grid-view-item__link">
									<!-- image -->
									<img class="grid-view-item__image primary blur-up lazyload" data-src="<?= base_url('assets/produk/' . $value->gambar) ?>" src="<?= base_url('assets/produk/' . $value->gambar) ?>" alt="image" title="product">
									<!-- End image -->
									<!-- Hover image -->
									<img class="grid-view-item__image hover blur-up lazyload" data-src="<?= base_url('assets/produk/' . $value->gambar) ?>" src="<?= base_url('assets/produk/' . $value->gambar) ?>" alt="image" title="product">
									<!-- End hover image -->
									<!-- product label -->
									<div class="product-labels rectangular"><span class="lbl on-sale"><?= number_format($value->diskon, 0);  ?>%</span> <span class="lbl pr-label1">new</span></div>
									<!-- End product label -->
								</a>
								<!-- end product image -->
								<!--start product details -->
								<div class="product-details hoverDetails text-center mobile">
									<!-- product name -->
									<div class="product-name">
										<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><?= $value->nama_produk ?></a>
									</div>
									<!-- End product name -->
									<!-- product price -->
									<div class="product-price">
										<?php if ($value->diskon != '0') { ?>
											<span class="old-price">Rp. <?= number_format($value->harga, 0) ?></span>
											<span class="price">Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga), 0) ?></span>
										<?php } elseif ($value->diskon === '0') { ?>
											<span class="price">Rp. <?= number_format($value->harga, 0) ?></span>
										<?php } ?>


									</div>
									<!-- End product price -->

									<!-- product button -->
									<div class="button-set">
										<a href="javascript:void()" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview<?= $value->id_produk ?>">
											<i class="icon anm anm-search-plus-r"></i>
										</a>
										<!-- Start product button -->
										<form class="variants add" action="<?= base_url('Cart/add_cart') ?>" onclick="window.location.href='<?= base_url('cart') ?>'" method="post">
											<input type="hidden" name="name" value="<?= $value->nama_produk ?>">
											<input type="hidden" name="id" value="<?= $value->id_diskon ?>">
											<input type="hidden" name="price" value="<?= $value->harga - ($value->harga * $value->diskon / 100) ?>">
											<input type="hidden" name="stok" value="<?= $value->stok ?>">
											<input type="hidden" name="picture" value="<?= $value->gambar ?>">
											<input type="hidden" name="qty" value="1">
											<input type="hidden" name="diskon" value="<?= $value->diskon ?>">
											<button class="btn cartIcon btn-addto-cart" type="submit" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
										</form>

									</div>
									<!-- end product button -->
								</div>
								<!-- Variant -->
								<!-- <ul class="swatches text-center">
									<li class="swatch medium rounded"><img src="<?= base_url() ?>frontend/assets/images/product-images/variant1.jpg" alt="image" /></li>
									<li class="swatch medium rounded"><img src="<?= base_url() ?>frontend/assets/images/product-images/variant2.jpg" alt="image" /></li>
									<li class="swatch medium rounded"><img src="<?= base_url() ?>frontend/assets/images/product-images/variant3.jpg" alt="image" /></li>
									<li class="swatch medium rounded"><img src="<?= base_url() ?>frontend/assets/images/product-images/variant4.jpg" alt="image" /></li>
									<li class="swatch medium rounded"><img src="<?= base_url() ?>frontend/assets/images/product-images/variant5.jpg" alt="image" /></li>
									<li class="swatch medium rounded"><img src="<?= base_url() ?>frontend/assets/images/product-images/variant6.jpg" alt="image" /></li>
								</ul> -->
								<!-- End Variant -->
								<!-- End product details -->
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!--End Featured Product-->

	<!--Store Feature-->
	<div class="store-feature section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="display-table store-info">
						<li class="display-table-cell">
							<i class="icon anm anm-truck-l"></i>
							<h5>Free Shipping &amp; Return</h5>
							<span class="sub-text">Free shipping on all US orders</span>
						</li>
						<li class="display-table-cell">
							<i class="icon anm anm-dollar-sign-r"></i>
							<h5>Money Guarantee</h5>
							<span class="sub-text">30 days money back guarantee</span>
						</li>
						<li class="display-table-cell">
							<i class="icon anm anm-comments-l"></i>
							<h5>Online Support</h5>
							<span class="sub-text">We support online 24/7 on day</span>
						</li>
						<li class="display-table-cell">
							<i class="icon anm anm-credit-card-front-r"></i>
							<h5>Secure Payments</h5>
							<span class="sub-text">All payment are Secured and trusted.</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--End Store Feature-->
</div>
<!--End Body Content-->