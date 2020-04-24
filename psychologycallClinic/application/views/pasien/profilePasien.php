<div class="head" style="margin: 70px 0px 0px 350px;width:600px;background-color: #588da8;border-radius: 5px 5px 5px 5px ">
    <center>
        <h1 style="margin: 20px"> YOUR ACCOUNT </h1>
    </center>
</div>
<div class="row" style="margin:5px 0px 0px 350px;">
    <div class="col-sm-6" style="width: 300px;background-color: #588da8;border-radius: 5px 0px 0px 5px">
        <div class="card " style="margin: 20px 0px 60px 0px">
            <div class="card-body">
                <div class="form-group">
                    <label for="FirstName">First Name</label>
                    <input type="text" class="form-control" id="FirstName" name="firstname" value="<?= $pasien['firstname'] ?>" readonly>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 20px 0px 60px 0px">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $pasien['email'] ?>" readonly>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 20px 0px 60px 0px">
            <div class="card-body">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="email" class="form-control" id="phone" name="phone" value="<?= $pasien['phone'] ?>" readonly>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6" style="width: 300px;background-color: #588da8;border-radius: 0px 5px 5px 0px">
        <div class="card" style="margin: 20px 0px 60px 0px">
            <div class="card-body">
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $pasien['lastname'] ?>" readonly>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 20px 0px 60px 0px">
            <div class="card-body">
                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?= $pasien['dob'] ?>" readonly>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 20px 0px 60px 0px">
            <div class="card-body">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="<?= $pasien['gender'] ?>" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="head" style="margin: 10px 0px 0px 350px;width:600px;background-color: #588da8;border-radius: 5px 5px 5px 5px; padding: 20px">
    <center>
        <a href="<?= base_url(); ?>PasienC/ubahprofilePasien/<?= $pasien['id_pasien'] ?>" class="btn btn-link" style="background-color: #6b5e51;color: whitesmoke">Edit Your Account</a>
        <a href="<?= base_url(); ?>pasienC/ubahPassword/" class="btn btn-link" style="background-color: #6b5e51;color: whitesmoke">Change Password</a>
        <a href="<?= base_url(); ?>User/logout" class="btn btn-link" style="background-color: #6b5e51;color: whitesmoke">Logout</a>
    </center>
</div>
<br>
<br>