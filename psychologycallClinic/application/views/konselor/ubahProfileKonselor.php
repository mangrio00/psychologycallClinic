<div class="container">
    <div class="head" style="margin: 70px 0px 0px 0px;width:500px;background-color: #588da8;border-radius: 5px 5px 5px 5px ">
        <center>
            <h1 style="margin: 20px"> EDIT YOUR ACCOUNT </h1>
        </center>
    </div>
    <div class="modal-body" style="width: 500px;background-color:#588da8;padding:3rem">
        <form method="POST" action="#">
            <div class="form-group">
                <label for="fullname" class="col-3">FULLNAME</label>
                <small class="text-danger"><?php echo form_error('fullname'); ?></small>
                <input type="text" class="form-control" id="fullname" placeholder="fullname" name="fullname" value="<?= $konselor['fullname'] ?>">
            </div>
            <div class="form-group">
                <label for="schedule">SCHEDULE </label><br>
                <small class="text-danger"><?php echo form_error('schedule[]'); ?></small>
                <label class="checkbox-inline">
                    <input type="checkbox" name="schedule[]" id="schedule" value="Senin">Senin
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="schedule[]" id="schedule" value="Selasa">Selasa
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="schedule[]" id="schedule" value="Rabu"> Rabu
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="schedule[]" id="schedule" value="Kamis">Kamis
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="schedule[]" id="schedule" value="Jumat">Jumat
                </label>
            </div>

            <div class="form-group">
                <label for="role">ROLE</label>
                <small class="text-danger"><?php echo form_error('role'); ?></small>
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
                <label for="speciality" class="col-3">SPECIALITY</label>
                <small class="text-danger"><?php echo form_error('speciality'); ?></small>
                <input type="text" class="form-control" id="speciality" placeholder="speciality" name="speciality" value="<?= $konselor['speciality'] ?>">
            </div>
            <div class="form-group">
                <label for="capacity" class="col-3">CAPACITY</label>
                <small class="text-danger"><?php echo form_error('capacity'); ?></small>
                <input type="text" class="form-control" id="capacity" placeholder="capacity" name="capacity" value="<?= $konselor['capacity'] ?>">
            </div>
            <input type="submit" class="btn btn-primary" id="edit" value="CHANGE" placeholder="save"></button>
        </form>
    </div>

    <br>
    <br>
</div>