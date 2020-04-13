<div class="container mt-4">
	<div class="row">
		<div class="col-md-6">
			<h2>Psychologycall-Clinic</h2>
			<h3>Pusat Konsultasi Psikologi Terbaik se-Indonesia</h3>

			<div class="akses-button">
				<?php 
				$dataAnchor = ['class' => 'btn btn-outline-primary'];
				echo anchor('welcome/login', 'LOGIN', $dataAnchor);
				echo anchor('welcome/register', 'REGISTER', $dataAnchor);

				?>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card frame-form-psyco">
				
				<div class="card-header">Login</div>

				<div class="card-body">
					
					<?php 
						echo form_open(base_url('welcome/register'), ['class' => 'form-psycho']);
					?>

					
				<div class="form-group row">
						<label for="username" class="col-3">Username</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'username',
										 'id' => 'username',
										 'class' => 'form-control',
										 'placeholder' => 'Masukan Username'
										];
								echo form_input($data);
							?>
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-3">Password</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'password',
										 'id' => 'password',
										 'class' => 'form-control',
										 'placeholder' => 'Masukan Password'
										];
								echo form_password($data);
							?>
						</div>
					</div>

					<?php
						echo form_submit(['name' => 'submit', 'class' => 'btn btn-dark btn-block'], 'Register');

						echo form_close();
					?>
			</div>
			
		</div>

	</div>
</div>