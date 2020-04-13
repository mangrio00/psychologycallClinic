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
				
				<div class="card-header">Daftar Akun</div>

				<div class="card-body">
					
					<?php 
						echo form_open(base_url('welcome/register'), ['class' => 'form-psycho']);
					?>

					<div class="form-group row">
						<label for="nama_depan" class="col-3">Nama Depan</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'nama_depan',
										 'id' => 'nama_depan',
										 'class' => 'form-control',
										 'placeholder' => 'Nama Depan'
										];
								echo form_input($data);
							?>
						</div>
					</div>

					<div class="form-group row">
						<label for="nama_belakang" class="col-3">Nama Belakang</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'nama_belakang',
										 'id' => 'nama_belakang',
										 'class' => 'form-control',
										 'placeholder' => 'Nama Belakang'
										];
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-3">Email</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'email',
										 'id' => 'email',
										 'class' => 'form-control',
										 'placeholder' => 'Email'
										];
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="dob" class="col-3">Tanggal Lahir</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'dob',
										 'id' => 'dob',
										 'class' => 'form-control',
										 'placeholder' => 'Tanggal Lahir'
										];
								echo form_input($data);
							?>
						</div>
					</div>
					<div class="form-group row">
						<label for="no_hp" class="col-3">Nomor Handphone</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'no_hp',
										 'id' => 'no_hp',
										 'class' => 'form-control',
										 'placeholder' => 'Nomor Handphone'
										];
								echo form_input($data);
							?>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-3">Jenis Kelamin</label>
						<div class="col-9">
							<div class="row">
								<div class="col-4">
									<label class="radio-inline">
										<?php
											$data = ['name' => 'jenis_kelamin',
										 			 'id' => 'jenis_kelamin'
													];
											echo form_radio($data, 'Pria');
										?>
										Pria
									</label>
								</div>
							<div class="col-4">
									<label class="radio-inline">
										<?php
											$data = ['name' => 'jenis_kelamin',
										 			 'id' => 'jenis_kelamin'
													];
											echo form_radio($data, 'Wanita');
										?>
										Wanita
									</label>
								</div>
						</div>
					</div>
				</div>
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
					<div class="form-group row">
						<label for="konfirmasi_password" class="col-3">Konfirmasi Password</label>
						<div class="col-9">
							<?php
								$data = ['name' => 'konfirmasi_password',
										 'id' => 'konfirmasi_password',
										 'class' => 'form-control',
										 'placeholder' => 'Masukan Kembali Password Anda'
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