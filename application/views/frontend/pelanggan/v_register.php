<br>
<br>
<br>
<!--Body Content-->
<div id="page-content">
	<!--Page Title-->
	<div class="page section-header text-center">
		<div class="page-title">
			<div class="wrapper">
				<h1 class="page-width">Create an Account</h1>
			</div>
		</div>
	</div>
	<!--End Page Title-->

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
				<div class="mb-4">
					<form method="post" action="<?= base_url('pelanggan/register') ?>" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="FirstName">Nama Lengkap</label>
									<input type="text" name="nm_pel" placeholder="" value="<?= set_value('nm_pel') ?>" id="FirstName" autofocus="">
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="LastName">Username</label>
									<input type="text" name="username" placeholder="" value="<?= set_value('username') ?>" id="LastName">
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="LastName">No Telepon</label>
									<input type="text" name="no_tlpon" placeholder="" value="<?= set_value('no_tlpon') ?>" id="LastName">
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="CustomerEmail">Email</label>
									<input type="email" name="email" placeholder="" value="<?= set_value('email') ?>" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="CustomerPassword">Password</label>
									<input type="password" value="<?= set_value('password') ?>" name="password" placeholder="" id="CustomerPassword" class="">
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="CustomerPassword">Ulangi password</label>
									<input type="password" value="<?= set_value('ulangi_password') ?>" name="ulangi_password" placeholder="" id="CustomerPassword" class="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
								<input type="submit" class="btn mb-3" value="Create">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!--End Body Content-->