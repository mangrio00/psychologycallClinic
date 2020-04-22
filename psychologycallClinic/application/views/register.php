<div class="container mt-4 mb-4">
	<div class="row h-50 align-items-center">
		<div class="col-md-6">
			<h2 class="title-register">Psychologycall-Clinic</h2>
			<h3 class="title-register">Pusat Konsultasi Psikologi Terbaik se-Indonesia</h3>

			<div class="akses-button">
				<?php
				$dataAnchor = ['class' => 'btn btn-outline-primary mr-2'];
				echo anchor('user/login', 'LOGIN', $dataAnchor);

				$dataAnchor = ['class' => 'btn btn-outline-primary mr-2 active'];
				echo anchor('user/register', 'REGISTER', $dataAnchor);

				?>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card frame-form-psyco">

				<div class="card-header">Daftar Akun</div>

				<div class="card-body">

					<?php
					echo form_open(base_url('user/register'), ['class' => 'form-psycho']);
					?>

					<div class="form-group row">
						<label for="nama_depan" class="col-3">Nama Depan</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'nama_depan',
								'id' => 'nama_depan',
								'class' => 'form-control',
								'placeholder' => 'Nama Depan',
								'value' => set_value('nama_depan')
							];
							echo form_input($data);
							?>
							<small class="text-danger"><?php echo form_error('nama_depan'); ?></small>

						</div>
					</div>

					<div class="form-group row">
						<label for="nama_belakang" class="col-3">Nama Belakang</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'nama_belakang',
								'id' => 'nama_belakang',
								'class' => 'form-control',
								'placeholder' => 'Nama Belakang',
								'value' => set_value('nama_belakang')
							];
							echo form_input($data);
							?>
							<small class="text-danger"> <?php echo form_error('nama_belakang'); ?></small>

						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-3">Email</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'email',
								'id' => 'email',
								'class' => 'form-control',
								'placeholder' => 'Email',
								'value' => set_value('email')
							];
							echo form_input($data);
							?>
							<small class="text-danger"><?php echo form_error('email'); ?></small>

						</div>
					</div>
					<div class="form-group row">
						<label for="dob" class="col-3">Tanggal Lahir</label>
						<div class="col-9">
							<?php
							$data = [
								'type' => 'date',
								'name' => 'dob',
								'id' => 'dob',
								'class' => 'form-control',
								'placeholder' => 'Tanggal Lahir',
								'value' => set_value('dob')
							];
							echo form_input($data);
							?>
							<small class="text-danger"> <?php echo form_error('dob'); ?></small>

						</div>
					</div>
					<div class="form-group row">
						<label for="no_hp" class="col-3">Nomor Handphone</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'no_hp',
								'id' => 'no_hp',
								'class' => 'form-control',
								'placeholder' => 'Nomor Handphone',
								'value' => set_value('no_hp')
							];
							echo form_input($data);
							?>
							<small class="text-danger"><?php echo form_error('no_hp'); ?></small>

						</div>
					</div>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-3">Jenis Kelamin</label>
						<div class="col-9">
							<div class="row">
								<div class="col-4">
									<label class="radio-inline">
										<?php
										$data = [
											'name' => 'jenis_kelamin',
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
										$data = [
											'name' => 'jenis_kelamin',
											'id' => 'jenis_kelamin'
										];
										echo form_radio($data, 'Wanita');
										?>
										Wanita
									</label>
								</div>
							</div>
							<small class="text-danger"><?php echo form_error('jenis_kelamin'); ?></small>

						</div>
					</div>
					<div class="form-group row">
						<label for="username" class="col-3">Username</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'username',
								'id' => 'username',
								'class' => 'form-control',
								'placeholder' => 'Masukan Username',
								'value' => set_value('username')
							];
							echo form_input($data);
							?>
							<small class="text-danger"><?php echo form_error('username'); ?></small>

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
								'placeholder' => 'Masukan Password'
							];
							echo form_password($data);
							?>
							<small class="text-danger"><?php echo form_error('password'); ?></small>

						</div>

					</div>
					<div class="form-group row">
						<label for="konfirmasi_password" class="col-3">Konfirmasi Password</label>
						<div class="col-9">
							<?php
							$data = [
								'name' => 'konfirmasi_password',
								'id' => 'konfirmasi_password',
								'class' => 'form-control',
								'placeholder' => 'Masukan Kembali Password Anda'
							];
							echo form_password($data);
							?>
							<small class="text-danger"><?php echo form_error('konfirmasi_password'); ?></small>

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