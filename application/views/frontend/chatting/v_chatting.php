<br>
<br>
<br>
<!--Body Content-->
<div id="page-content">
	<!--Page Title-->
	<div class="page section-header text-center">
		<div class="page-title">
			<div class="wrapper">
				<h1 class="page-width">Chatting</h1>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				<div class="comments">

					<h1 class="comment-title">History</h1>
					<!-- Single Comment -->
					<?php
					foreach ($chat as $key => $value) {

						if ($value->pelanggan_send != 0) {
					?>
							<div class="direct-chat-messages">
								<div class="single-comment">
									<div class="content">
										<h4>Anda <span><?= $value->time ?></span></h4>
										<p><?= $value->pelanggan_send ?></p>
									</div>
								</div>
							</div>

						<?php
						} else if ($value->admin_send != 0) {
						?>

							<div class="single-comment left">
								<div class="content">
									<h4 class="text-danger">Admin <span><?= $value->time ?></span></h4>
									<p><?= $value->admin_send ?></p>

								</div>
							</div>
						<?php
						}
						?>
					<?php
					}
					?>

					<!-- End Single Comment -->
					<!-- Single Comment -->

					<!-- End Single Comment -->
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
				<h2>Ajukan Pertanyaan terkait produk kami</h2>
				<!-- <p>Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500 </p> -->
				<div class="formFeilds contact-form form-vertical">
					<form action="<?= base_url('cChatting') ?>" method="post" id="contact_form" class="contact-form">
						<?php
						$id_pelanggan = $this->session->userdata('id_pelanggan');
						?>
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
									<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<input type="submit" class="btn" value="Send Message">
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
<!--End Body Content-->