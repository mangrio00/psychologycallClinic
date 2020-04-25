<!-- <!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PsychologicalCall</title>
</head>

<body>
  <center>
    <div class="container" id="containerKonselor">
      <h1 style=margin-top:70px;> Profile <?= $konselor['fullname'] ?> </h1><br><br>
      <div class="modal-content">
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <?= form_label('ID KONSELOR') ?>
              <?= form_input(['name' => 'id_konselor', 'class' => 'form-control', 'required' => 'required', 'value' => $konselor['id_konselor']]) ?>
            </div>
            <!-- <div class="form-group">
          <label for="formGroupExampleInput">USERNAME</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="username" required >
        </div>
 -->
<!-- <div class="form-group">
              <?= form_label('FULLNAME') ?>
              <?= form_input(['name' => 'fullname', 'class' => 'form-control', 'required' => 'required', 'value' => $konselor['fullname']]) ?>

            </div> -->
<!-- <div class="form-group">
          <label for="formGroupExampleInput">EMAIL</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email" name="email"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">ROLE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="role" name="role"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">SCHEDULE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="schedule" name="schedule"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">SPECIALIST</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="specialist" name="specialist"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">CAPACITY</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="capacity" name="capacity"required>
        </div> -->

<!-- <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="save"></button>
            <div class="modal-footer">
            </div>
          </form>
  </center> -->

<div class="head" style="margin: 70px 0px 0px 350px;width:600px;background-color: #588da8;border-radius: 5px 5px 5px 5px ">
  <center>
    <h1 style="margin: 20px"> YOUR ACCOUNT </h1>
  </center>
</div>
<?php if ($this->session->flashdata('flash')) : ?>
  <div class="row mt-3" style="width: 600px;margin:5px 0px 0px 350px">
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('flash'); ?></strong>
    </div>
  </div>
<?php endif; ?>
<div class="row" style="margin:5px 0px 0px 350px;">
  <div class="col-sm-6" style="width: 300px;background-color: #588da8;border-radius: 5px 0px 0px 5px">
    <div class="card " style="margin: 20px 0px 60px 0px">
      <div class="card-body">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $konselor['fullname'] ?>" readonly>
        </div>
      </div>
    </div>
    <div class="card" style="margin: 20px 0px 60px 0px">
      <div class="card-body">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?= $konselor['email'] ?>" readonly>
        </div>
      </div>
    </div>
    <div class="card" style="margin: 20px 0px 60px 0px">
      <div class="card-body">
        <div class="form-group">
          <label for="role">Role</label>
          <input type="text" class="form-control" id="role" name="role" value="<?= $konselor['role'] ?>" readonly>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="width: 300px;background-color: #588da8;border-radius: 0px 5px 5px 0px">
    <div class="card" style="margin: 20px 0px 60px 0px">
      <div class="card-body">
        <div class="form-group">
          <label for="schedule">Schedule</label>
          <input type="text" class="form-control" id="schedule" name="schedule" value="<?= $konselor['schedule'] ?>" readonly>
        </div>
      </div>
    </div>
    <div class="card" style="margin: 20px 0px 60px 0px">
      <div class="card-body">
        <div class="form-group">
          <label for="speciality">Speciality</label>
          <input type="text" class="form-control" id="speciality" name="speciality" value="<?= $konselor['speciality'] ?>" readonly>
        </div>
      </div>
    </div>
    <div class="card" style="margin: 20px 0px 60px 0px">
      <div class="card-body">
        <div class="form-group">
          <label for="capacity">Capacity</label>
          <input type="text" class="form-control" id="capacity" name="capacity" value="<?= $konselor['capacity'] ?>" readonly>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="head" style="margin: 10px 0px 0px 350px;width:600px;background-color: #588da8;border-radius: 5px 5px 5px 5px; padding: 20px">
  <center>
    <a href="<?= base_url(); ?>konselorC/ubahprofileKonselor/<?= $konselor['id_konselor'] ?>" class="btn btn-link" style="background-color: #6b5e51;color: whitesmoke">Edit Your Account</a>
    <a href="<?= base_url(); ?>konselorC/ubahPassword/" class="btn btn-link" style="background-color: #6b5e51;color: whitesmoke">Change Password</a>
    <a href="<?= base_url(); ?>User/logout" class="btn btn-link" style="background-color: #6b5e51;color: whitesmoke">Logout</a>
  </center>
</div>
<br>
<br>