<br>
<br>
<br>
<br>
<!--Body Content-->
<div id="page-content">
	<!--Collection Banner-->
	<div class="collection-header">
		<div class="collection-hero">
			<div class="collection-hero__image"><img class="blur-up lazyload" data-src="<?= base_url() ?>frontend/assets/images/busi.jpg" src="<?= base_url() ?>frontend/assets/images/cat-women.jpg" alt="Women" title="Women" /></div>
			<div class="collection-hero__title-wrapper">
				<h1 class="collection-hero__title page-width">Shop Left Sidebar</h1>
			</div>
		</div>
	</div>
	<!--End Collection Banner-->
	<br>
	<br>
	<div class="container">
		<div class="row">
			<!--Sidebar-->
			<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
				<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
				<div class="sidebar_tags">
					<!--Categories-->
					<div class="sidebar_widget categories filter-widget">
						<div class="widget-title">
							<h2>Categories</h2>
						</div>
						<div class="widget-content">
							<ul class="sidebar_categories">
								<?php foreach ($kategori as $key => $goris) { ?>
									<li class="lvl-1"><a href="<?= base_url('home/kategori/' . $goris->id_kategori) ?>" class="site-nav"><?= $goris->nama_kategori ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<!--Categories-->
					<!--Popular Products-->
					<div class="sidebar_widget">
						<div class="widget-title">
							<h2>Popular Products</h2>
						</div>
						<div class="widget-content">
							<div class="list list-sidebar-products">
								<div class="grid">
									<?php foreach ($best_produk as $key => $best) { ?>
										<div class="grid__item">
											<div class="mini-list-item">
												<div class="mini-view_image">
													<a class="grid-view-item__link" href="<?= base_url('home/detail_produk/' . $best->id_produk) ?>">
														<img class="grid-view-item__image" src="<?= base_url('assets/produk/' . $best->gambar) ?>" alt="" />
													</a>
												</div>
												<div class="details"> <a class="grid-view-item__title" href="<?= base_url('home/detail_produk/' . $best->id_produk) ?>"><?= $best->nama_produk ?></a>
													<div class="grid-view-item__meta"><span class="product-price__price"><span class="money">Rp. <?= number_format($best->harga), 0 ?></span></span></div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<!--End Popular Products-->
					<!--Information-->
					<div class="sidebar_widget">
						<div class="widget-title">
							<h2>Information</h2>
						</div>
						<div class="widget-content">
							<p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p>
						</div>
					</div>
					<!--end Information-->
				</div>
			</div>
			<!--End Sidebar-->
			<!--Main Content-->
			<div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
				<div class="productList product-load-more">
					<div class="grid-products grid--view-items">
						<div class="row">
							<?php if (count($produk['menu']) > 0) : ?>
								<?php foreach ($produk['menu'] as $value) :
								?>
									<div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
										<!-- start product image -->
										<div class="product-image">
											<!-- start product image -->
											<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>">
												<!-- image -->
												<img class="primary blur-up lazyload" data-src="<?= base_url('assets/produk/' . $value->gambar) ?>" src="<?= base_url('assets/produk/' . $value->gambar) ?>" alt="image" title="product">
												<!-- End image -->
												<!-- Hover image -->
												<img class="hover blur-up lazyload" data-src="<?= base_url('assets/produk/' . $value->gambar) ?>" src="<?= base_url('assets/produk/' . $value->gambar) ?>" alt="image" title="product">
												<!-- End hover image -->
												<!-- product label -->
												<div class="product-labels rectangular"><span class="lbl on-sale">-<?= $value->diskon ?>%</span> <span class="lbl pr-label1">new</span></div>
												<!-- End product label -->
											</a>
											<!-- end product image -->

											<!-- Start product button -->
											<form class="variants add" action="<?= base_url('Cart/add_cart') ?>" onclick="window.location.href='cart.html'" method="post">
												<input type="hidden" name="name" value="<?= $value->nama_produk ?>">
												<input type="hidden" name="id" value="<?= $value->id_diskon ?>">
												<input type="hidden" name="price" value="<?= $value->harga - ($value->harga * $value->diskon / 100) ?>">
												<input type="hidden" name="stok" value="<?= $value->stok ?>">
												<input type="hidden" name="picture" value="<?= $value->gambar ?>">
												<input type="hidden" name="qty" value="1">
												<input type="hidden" name="diskon" value="<?= $value->diskon ?>">
												<button class="btn btn-addto-cart" type="submit">add cart</button>
											</form>
											<div class="button-set">
												<a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview<?= $value->id_produk ?>">
													<i class="icon anm anm-search-plus-r"></i>
												</a>
											</div>
											<!-- end product button -->
										</div>
										<!-- end product image -->

										<!--start product details -->
										<div class="product-details text-center">
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
										</div>
										<!-- End product details -->
									</div>
								<?php endforeach; ?>
							<?php else : ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<!--End Main Content-->
		</div>
	</div>

</div>
<!--End Body Content-->