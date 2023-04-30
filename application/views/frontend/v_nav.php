<!--Header-->
<?php
$kategoris = $this->m_home->kategori();
$produks = $this->m_home->produk_all();
?>
<div class="header-wrap classicHeader animated d-flex">
	<div class="container-fluid">
		<div class="row align-items-center">
			<!--Desktop Logo-->
			<div class="logo col-md-2 col-lg-2 d-none d-lg-block">
				<a href="<?= base_url() ?>">
					<img src="<?= base_url() ?>frontend/assets/images/logo/logos.png" alt="indah jaya motor" title="indah jaya motor" />
				</a>
			</div>
			<!--End Desktop Logo-->
			<div class="col-2 col-sm-3 col-md-3 col-lg-8">
				<div class="d-block d-lg-none">
					<button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
						<i class="icon anm anm-times-l"></i>
						<i class="anm anm-bars-r"></i>
					</button>
				</div>
				<!--Desktop Menu-->
				<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
					<ul id="siteNav" class="site-nav medium center hidearrow">
						<li class="lvl1 parent megamenu"><a href="<?= base_url() ?>">Home <i class="anm anm-angle-down-l"></i></a>
						</li>
						<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-angle-down-l"></i></a>
							<div class="megamenu style4">
								<ul class="grid grid--uniform mmWrapper">
									<li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Shop Pages</a>
										<?php foreach ($kategoris as $key => $kategori) { ?>
											<ul class="subLinks">
												<li class="lvl-2"><a href="<?= base_url('home/kategori/' . $kategori->id_kategori) ?>" class="site-nav lvl-2"><?= $kategori->nama_kategori ?></a></li>
											</ul>
										<?php } ?>
									</li>
								</ul>
							</div>
						</li>
						<li class="lvl1 parent megamenu"><a href="#">Product <i class="anm anm-angle-down-l"></i></a>
							<div class="megamenu style2">
								<ul class="grid mmWrapper">
									<li class="grid__item one-whole">
										<ul class="grid">

											<li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Page</a>
												<?php foreach ($produks as $key => $prod) { ?>
													<ul class="subLinks">
														<li class="lvl-2"><a href="<?= base_url('home/detail_produk/' . $prod->id_produk) ?>" class="site-nav lvl-2"><?= $prod->nama_produk ?></a></li>
													</ul>
												<?php } ?>
											</li>

										</ul>
									</li>
									<!-- <li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="<?= base_url() ?>frontend/assets/images/megamenu-bg2.jpg" alt=""></a></li> -->
								</ul>
							</div>
						</li>
						<!-- <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
							<ul class="dropdown">
								<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-angle-right-l"></i></a>
									<ul class="dropdown">
										<li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
										<li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
									</ul>
								</li>
								<li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-angle-right-l"></i></a>
									<ul class="dropdown">
										<li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
										<li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
									</ul>
								</li>
								<li><a href="checkout.html" class="site-nav">Checkout</a></li>
								<li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
								<li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
								<li><a href="faqs.html" class="site-nav">FAQs</a></li>
								<li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-angle-right-l"></i></a>
									<ul>
										<li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
										<li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
									</ul>
								</li>
								<li><a href="404.html" class="site-nav">404</a></li>
								<li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label1">New</span> </a></li>
							</ul>
						</li> -->
					</ul>
				</nav>
				<!--End Desktop Menu-->
			</div>
			<!--Mobile Logo-->
			<div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
				<div class="logo">
					<a href="index.html">
						<img src="<?= base_url() ?>frontend/assets/images/logo.svg" alt="indah jaya motor" title="indah jaya motor" />
					</a>
				</div>
			</div>
			<!--Mobile Logo-->
			<div class="col-4 col-sm-3 col-md-3 col-lg-2">
				<?php if ($this->session->userdata('email') == "") { ?>
					<div class="site-cart">
						<a href="#">
							<i class="icon anm anm-bag-l"></i>
							<span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
						</a>
					</div>
				<?php } else { ?>
					<div class="site-cart">
						<?php $keranjang = $this->cart->contents();
						$jml_item = 0;
						foreach ($keranjang as $key => $value) {
							$jml_item = $jml_item + $value['qty'];
						} ?>
						<!-- <a href="<?= base_url('cart') ?>">cart</a> -->
						<a href="<?= base_url('cart') ?>">
							<i class="icon anm anm-bag-l"></i>
							<span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?= $jml_item ?></span>
						</a>
					</div>
				<?php } ?> <!-- <div class="site-header__search">
						<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
			</div> -->
			</div>
		</div>
	</div>
</div>
<!--End Header-->