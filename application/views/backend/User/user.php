<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> User</h4>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<?= $this->session->userdata('success') ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php
		}
		?>

		<a href="<?= base_url('cUser/createUser') ?>" class="btn btn-primary mb-3"><i class='bx bxs-pencil'></i> Create User</a>
		<!-- Basic Bootstrap Table -->

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<h5 class="card-header">Informasi User</h5>
					<div class="table-responsive text-nowrap">
						<table id="myTable" class="table ">
							<thead>
								<tr>
									<th>Nama User </th>
									<th>Alamat</th>
									<th>No Telepon</th>
									<th>Username</th>
									<th>Password</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php
								foreach ($user as $key => $value) {
								?>
									<tr>
										<td><?= $value->nama_user ?></td>
										<td><?= $value->alamat ?></td>
										<td><?= $value->no_hp ?></td>
										<td><?= $value->username ?></td>
										<td><?= $value->password ?></td>
										<td>
											<a class="btn btn-warning" href="<?= base_url('cUser/update/' . $value->id_user) ?>">Edit</a><br>
											<a class="btn btn-danger" href="<?= base_url('cUser/delete/' . $value->id_user) ?>">Delete</a>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<!--/ Basic Bootstrap Table -->
	</div>
	<!-- / Content -->