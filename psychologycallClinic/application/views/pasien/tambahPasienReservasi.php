</script>
<div class="container">
    <div class="row mt-3">
        <center>
            <div class="col">
                <div class="card">
                    <br><br>
                    <br>
                    <div class="head" style="width:500px;background-color: #588da8;border-radius: 5px 5px 5px 5px ">
                        <center>
                            <h1 style="margin: 20px"> RESERVATION </h1>
                        </center>
                    </div>
                    <br>
                    <div class="card-body" style="width: 500px;background-color:#588da8;padding:3rem">
                        <form method="POST" action="">
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('name'); ?></small>
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= $pasien['firstname'] ?> <?= $pasien['lastname'] ?>">
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('res_date'); ?></small>
                                <label for="res_date">Reservation Date</label>
                                <input type="date" class="form-control" id="res_date" placeholder="res_date" name="res_date" required>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('counselorName'); ?></small>
                                <label for="counselorName">Counselor Name</label>
                                <select class="form-control" id="counselorName" name="counselorName">
                                    <option value="">Select Counselor</option>
                                    <?php
                                    foreach ($konselor as $k) : ?>
                                        <option value="<?= $k['fullname'] ?>"><?= $k['fullname'] ?> - <?= $k['role'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <small class="text-danger"><?php echo form_error('status'); ?></small>
                                <label for="status">Status </label>
                                <input type="text" class="form-control" id="status" placeholder="pending" name="status" readonly>
                            </div>
                            <div class="footer">
                                <a class="btn btn-success btn-sm" href="<?= base_url(); ?>pasienC/">Back</a>
                                <input type="submit" class="btn btn-primary btn-sm" id="add" value="Submit">
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