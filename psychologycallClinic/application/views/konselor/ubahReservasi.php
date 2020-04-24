<div class="container">
    <div class="row mt-3">
        <center>
            <div class="col md-6">
                <div class="card">
                    <br><br>
                    <br>
                    <div class="head" style="width:500px;background-color: #be7575;border-radius: 5px 5px 5px 5px ">
                        <center>
                            <h1 style="margin: 20px"> EDIT STATUS RESERVATION </h1>
                        </center>
                    </div>
                    <div class="card-body" style="width: 500px;background-color:#be7575;padding:3rem">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="nama">Patiens Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $reservasi['nama']; ?>" readonly="">
                                <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                            </div>
                            <div class="form-group">
                                <label for="tgl_reserv">Reservation Date</label>
                                <input type="text" class="form-control" id="tgl_reserv" name="tgl_reserv" value="<?= $reservasi['tgl_reserv']; ?>" readonly="">
                                <small class="form-text text-danger"><?= form_error('tgl_reserv') ?>.</small>
                            </div>
                            <div class="form-group">
                                <label for="nama_konselor">Counselor Name</label>
                                <input type="text" class="form-control" id="nama_konselor" name="nama_konselor" value="<?= $reservasi['nama_konselor']; ?>" readonly="">
                                <small class="form-text text-danger"><?= form_error('nama_konselor') ?>.</small>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <?php foreach ($status as $s) : ?>
                                        <?php if ($s == $reservasi['status']) : ?>
                                            <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $s; ?>"><?= $s; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary float-right" id="ubah" value="CHANGE">
                        </form>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </center>
    </div>
</div>