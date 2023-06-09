<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Purple Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url() ?>backend/images/logos.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left p-5">
							<div class="brand-logo">
								<img src="<?= base_url() ?>backend/images/logos.png">
							</div>
							<h4>Hello! Silahkan Untuk Login Terlebih Dahulu</h4>
							<?php if ($this->session->userdata('success')) { ?><div class="alert alert-success" role="alert"><?= $this->session->userdata('success') ?></div>
							<?php } ?>
							<?php if ($this->session->userdata('error')) { ?><div class="alert alert-danger" role="alert"><?= $this->session->userdata('error') ?></div>
							<?php } ?>
							<h6 class="font-weight-light">Sign in to continue.</h6>
							<form class="pt-3" action="<?= base_url('auth/user_login') ?>" method="POST">
								<div class="form-group">
									<input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url() ?>backend/vendors/js/vendor.bundle.base.js"></script>
	<script src="<?= base_url() ?>backend/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>backend/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>backend/js/misc.js"></script>
	<!-- endinject -->
</body>

</html>