<!-- partial -->
<div class="container-fluid page-body-wrapper">
	<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			<li class="nav-item nav-profile">
				<a href="#" class="nav-link">
					<div class="nav-profile-image">
						<img src="<?= base_url() ?>backend/images/faces/face1.jpg" alt="profile">
						<span class="login-status online"></span> <!--change to offline or busy as needed-->
					</div>
					<div class="nav-profile-text d-flex flex-column">
						<span class="font-weight-bold mb-2"><?= $this->session->username ?></span>
						<span class="text-secondary text-small">Project Manager</span>
					</div>
					<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin') ?>">
					<span class="menu-title">Dashboard</span>
					<i class="mdi mdi-home menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
					<span class="menu-title">Data User</span>
					<i class="menu-arrow"></i>
					<i class="mdi mdi-account-multiple menu-icon"></i>
				</a>
				<div class="collapse" id="ui-basic">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('cUser') ?>">Admin</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('cPelanggan') ?>">Pelanggan</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('kategori') ?>">
					<span class="menu-title">Kategori</span>
					<i class="mdi mdi-format-line-weight menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('produk') ?>">
					<span class="menu-title">Produk</span>
					<i class="mdi mdi-barcode-scan menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('diskon') ?>">
					<span class="menu-title">Diskon</span>
					<i class="mdi mdi-contrast menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('ongkir') ?>">
					<span class="menu-title">Ongkos Kirim</span>
					<i class="mdi mdi-motorbike menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
					<span class="menu-title">Pesanan</span>
					<i class="menu-arrow"></i>
					<i class="mdi mdi-cart-outline menu-icon"></i>
				</a>
				<div class="collapse" id="general-pages">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('pesanan') ?>"> Pesanan Masuk </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('pesanan/pembayaran') ?>"> Konfirmasi Pembayaran </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('pesanan/proses') ?>"> Pesanan Diproses </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('pesanan/kirim') ?>"> Pesanan Dikirim </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('pesanan/selesai') ?>"> Pesanan Selesai </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('pesanan/batal') ?>"> Pesanan Batal </a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#general-pagesis" aria-expanded="false" aria-controls="general-pages">
					<span class="menu-title">Analisis</span>
					<i class="menu-arrow"></i>
					<i class="mdi mdi-chart-bar menu-icon"></i>
				</a>
				<div class="collapse" id="general-pagesis">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan') ?>"> Laporan Transaksi </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('analisis_produk') ?>"> Analisis Produk </a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('analisis_pelanggan') ?>"> Analisis Pelanggan </a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
	<!-- partial -->