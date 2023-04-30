<body class="template-index belle template-index-belle">
	<div id="pre-loader">
		<img src="<?= base_url() ?>frontend/assets/images/loader.gif" alt="Loading..." />
	</div>
	<div class="pageWrapper">
		<!--Search Form Drawer-->
		<div class="search">
			<div class="search__form">
				<form class="search-bar__form" action="#">
					<button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
					<input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
				</form>
				<button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
			</div>
		</div>
		<!--End Search Form Drawer-->
		<!--Top Header-->
		<div class="top-header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-10 col-sm-8 col-md-5 col-lg-4">
						<p class="phone-no"><i class="anm anm-phone-s"></i> +62 891-2938-2121</p>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
						<div class="text-center">
							<p class="top-header_middle-text"> Indah Jaya Motor</p>
						</div>
					</div>
					<div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
						<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
						<ul class="customer-links list-inline">
							<?php if ($this->session->userdata('email') == "") { ?>
								<li><a href="<?= base_url('pelanggan/login') ?>">Login</a></li>
								<li><a href="<?= base_url('pelanggan/register') ?>">Create Account</a></li>
							<?php } else { ?>
								<li><a href="<?= base_url('pelanggan/logout') ?>">Logout</a></li>
								<li><a href="<?= base_url('pelanggan/register') ?>"><?= $this->session->userdata('nm_pel'); ?></a></li>
								<li><a href="<?= base_url('Order') ?>">Pesanan</a></li>
								<li><a href="<?= base_url('cChatting') ?>">Chatting</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--End Top Header-->