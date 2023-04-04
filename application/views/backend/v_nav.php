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
						<span class="font-weight-bold mb-2">David Grey. H</span>
						<span class="text-secondary text-small">Project Manager</span>
					</div>
					<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<span class="menu-title">Dashboard</span>
					<i class="mdi mdi-home menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
					<span class="menu-title">Data User</span>
					<i class="menu-arrow"></i>
					<i class="mdi mdi-crosshairs-gps menu-icon"></i>
				</a>
				<div class="collapse" id="ui-basic">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Admin</a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Pelanggan</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pages/icons/mdi.html">
					<span class="menu-title">Kategori</span>
					<i class="mdi mdi-contacts menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pages/forms/basic_elements.html">
					<span class="menu-title">Produk</span>
					<i class="mdi mdi-format-list-bulleted menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pages/charts/chartjs.html">
					<span class="menu-title">Diskon</span>
					<i class="mdi mdi-chart-bar menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pages/tables/basic-table.html">
					<span class="menu-title">Ongkos Kirim</span>
					<i class="mdi mdi-table-large menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
					<span class="menu-title">Pesanan</span>
					<i class="menu-arrow"></i>
					<i class="mdi mdi-medical-bag menu-icon"></i>
				</a>
				<div class="collapse" id="general-pages">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Pesanan Masuk </a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Konfirmasi Pembayaran </a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Pesanan Diproses </a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Pesanan Dikirim </a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Pesanan Selesai </a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
					<span class="menu-title">Analisis</span>
					<i class="menu-arrow"></i>
					<i class="mdi mdi-medical-bag menu-icon"></i>
				</a>
				<div class="collapse" id="general-pages">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Laporan Transaksi </a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Analisis Produk </a></li>
						<li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Analisis Pelanggan </a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
	<!-- partial -->