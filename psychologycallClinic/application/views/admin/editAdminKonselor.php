<div class="container">
    <div class="row mt-3">
        <center>
            <div class="col">
                <div class="card">
                    <br><br>
                    <br>
                    <div class="card-header text-center mt-3">
                        <h2>TAMBAH DATA KONSELOR</h2>
                    </div>
                    <br>
                    <div class="card-body" style="width: 500px;background-color:white;padding:3rem">
                        <form method="POST" action="">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('fullname'); ?></small>
                                <label for="fullname">Full Name </label>
                                <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" value="<?= $konselor['fullname'] ?>" required>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('username'); ?></small>
                                <label for="username">Username </label>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?= $konselor['username'] ?>" required>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('email'); ?></small>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $konselor['email'] ?>" required>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('role'); ?></small>
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role">
                                    <?php foreach ($role as $r) : ?>
                                        <?php if ($r == $konselor['role']) : ?>
                                            <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $r; ?>"><?= $r; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="schedule">Schedule </label><br>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="schedule[]" id="schedule" value="Senin">Senin
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="schedule[]" id="schedule" value="Selasa">Selasa
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="schedule[]" id="schedule" value="Rabu">Rabu
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="schedule[]" id="schedule" value="Kamis">Kamis
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="schedule[]" id="schedule" value="Jumat">Jumat
                                </label>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('speciality'); ?></small>
                                <label for="speciality">Speciality </label>
                                <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality" required>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('capacity'); ?></small>
                                <label for="capacity">Capacity </label>
                                <input type="text" class="form-control" id="capacity" placeholder="Capacity" name="capacity" required>
                            </div>
                            <div class="footer">
                                <a class="btn btn-success btn-sm" href="<?= base_url(); ?>AdminC/adminKonselor">Back</a>
                                <input type="submit" class="btn btn-primary btn-sm" id="add" value="Save">
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