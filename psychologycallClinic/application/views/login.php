<div class="container mt-4">
	<div class="row h-75 align-items-center">
		<div class="col-md-6">
			<h2 class="title-register">Psychologycall-Clinic</h2>
			<h3 class="title-register">Pusat Konsultasi Psikologi Terbaik se-Indonesia</h3>

			<div class="akses-button">
				<?php
				$dataAnchor = ['class' => 'btn btn-outline-primary mr-2 active'];
				echo anchor('user/login', 'LOGIN', $dataAnchor);

				$dataAnchor = ['class' => 'btn btn-outline-primary mr-2'];
				echo anchor('user/register', 'REGISTER', $dataAnchor);

				?>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card frame-form-psyco">

				<div class="card-header">Login</div>

				<div class="card-body">

					<?php
					echo form_open(base_url('user/login'), ['class' => 'form-psycho']);
					?>
					<?php if ($this->session->flashdata('flashSuccess')) { ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('flashSuccess'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php } ?>
					<?php if ($this->session->flashdata('flash')) { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('flash'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php } ?>
					<div class="form-group row">
						<label for="username" class="col-3">Username</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'username',
								'id' => 'username',
								'class' => 'form-control',
								'placeholder' => 'Enter Username',
								'value' => set_value('username')
							];
							echo form_input($data);
							?>
							<small class="text-danger"> <?php echo form_error('username'); ?></small>
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-3">Password</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'password',
								'id' => 'password',
								'class' => 'form-control',
								'placeholder' => 'Enter Password'
							];
							echo form_password($data);
							?>
							<small class="text-danger"> <?php echo form_error('password'); ?></small>
						</div>
					</div>

					<?php
					echo form_submit(['name' => 'submit', 'class' => 'btn btn-dark btn-block'], 'Login');

					echo form_close();
					?>
				</div>

			</div>

		</div>
	</div>