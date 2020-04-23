<div class="container">
    <div class="row mt-3">
        <center>
            <div class="col">
                <div class="card">
                    <br><br>
                    <br>
                    <div class="card-header text-center mt-3">
                        <h2>EDIT PATIENT</h2>
                    </div>
                    <br>
                    <div class="card-body" style="width: 500px;background-color:white;padding:3rem">
                        <form method="POST" action="#">
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('firstname'); ?></small>
                                <label for="fisrtname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Fisrt Name" name="firstname" value="<?= $pasien['firstname'] ?>">
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('lastname'); ?></small>
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value="<?= $pasien['lastname'] ?>">
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('email'); ?></small>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $pasien['email'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('dob'); ?></small>
                                <label for="dob">DOB</label>
                                <input type="date" class="form-control" id="dob" placeholder="DOB" name="dob" value="<?= $pasien['dob'] ?>"">
                            </div>
                            <div class=" form-group">
                                <small class="text-danger"><?php echo form_error('gender'); ?></small>
                                <label for="gender">Gender</label><br>
                                <div class="radio-inline">
                                    <input type="radio" id="gender" name="gender" class="custom-control-input" value="Pria">
                                    <label class="custom-control-label" for="gender">Pria</label>
                                </div>
                                <div class="radio-inline">
                                    <input type="radio" id="gender" name="gender" class="custom-control-input" value="Wanita">
                                    <label class="custom-control-label" for="gender">Wanita</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('phone'); ?></small>
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="phone" name="phone" value="<?= $pasien['phone'] ?>">
                            </div>
                            <div class="footer">
                                <a class="btn btn-success btn-sm" href="<?= base_url(); ?>AdminC/adminPasien">Back</a>
                                <input type="submit" class="btn btn-primary btn-sm" id="add" value="Submit" placeholder="Add">
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </center>
    </div>
</div>