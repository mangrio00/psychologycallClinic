<center>
    <div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <<h1 style= margin-top:70px;> Reservation PsychologyCallClinic </h1><br><br>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        
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
                            <label for="nama_konselor">COUNSELOR NAME</label>
                            <input type="text" class="form-control" id="nama_konselor" name="nama_konselor" value="<?= $reservasi['nama_konselor']; ?>" readonly="">
                            <small class="form-text text-danger"><?= form_error('nama_konselor') ?>.</small>
                        </div>
                           <div class="form-group">
                            <label for="role">ROLE</label>
                            <select class="form-control" id="role" name="role">
                                <?php foreach ($role as $r) : ?>
                                <?php if ($r == $reservasi['role']) : ?>
                                <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                <?php else : ?>
                                <option value="<?= $r; ?>"><?= $r; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
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
                        <button type="submit" name="tambah" class="btn btn-primary float-right">CHANGE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 
</center>