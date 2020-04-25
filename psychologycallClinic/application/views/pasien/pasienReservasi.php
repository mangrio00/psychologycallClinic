<!-- ISI WEB -->
<center>
    <div class="container" id="containerPasien" style="background-color: #fff">
        <h1 style=margin-top:70px;> Data Reservasi <?= $pasien['firstname'] ?> <?= $pasien['lastname'] ?> </h1><br><br>
        <div class="instruksiAdd">
            <a class="btn btn-success btn-sm " id="tambahReservasi" href="<?= base_url(); ?>pasienC/tambahReservasi/<?= $pasien['id_pasien'] ?>"><img src="https://www.freeiconspng.com/uploads/reservation-icon-20.png" width="22px" /></a>
        </div><span>
            <div class="instruksiSearch">
                <form class="form-inline">
                    <input class="form-control " type="search" placeholder="Search" name="keyword" aria-label="Search">
                    <button class="btn btn-warning " type="submit"><img src="https://www.freeiconspng.com/uploads/search-icon-png-10.png" width="22px" alt="Library Search Icon" /></button>
                </form>
            </div>
        </span><br><br>
        <!-- flashdata masih bermasalah -->
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?= $this->session->flashdata('flash'); ?></strong>
                </div>
            </div>
        <?php endif; ?>
        <div class="viewTable">
            <table class="table">
                <thead>
                    <tr style="font-weight:bold;">
                        <td class="text-center" scope="col">#</td>
                        <td class="text-center" scope="col">Name</td>
                        <td class="text-center" scope="col">Reservation Date</td>
                        <td class="text-center" scope="col">Counselor Name </td>
                        <td class="text-center" scope="col">Status</td>
                        <td class="text-center" scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $i = 1;
                        foreach ($reservasi as $r) : ?>
                            <td class="text-center"><?= $i++ ?></td>
                            <td class="text-center"><?= $r['nama']; ?></td>
                            <td class="text-center"><?= $r['tgl_reserv']; ?></td>
                            <td class="text-center"><?= $r['nama_konselor']; ?></td>
                            <td class="text-center"><?= $r['status']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url(); ?>pasienC/hapusReservasi/<?= $r['id_reservasi'] ?>" class="btn btn-danger btn-sm float-center" onclick="return confirm('Are you sure you want to delete this data?');" ?><img src="https://www.freeiconspng.com/uploads/trash-can-icon-24.png" width="20" alt="Icon Drawing Trash Can" /></a>
                                <a class="btn btn-success btn-sm float-center" href="<?= base_url(); ?>pasienC/ubahReservasi/<?= $r['id_reservasi'] ?>"><img src="https://www.freeiconspng.com/uploads/edit-icon-3.png" width="20" alt="Free Edit Vector" /></a>
                            </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <br><br>
        </div>
    </div>
</center>

<!-- BATAS ISI WEB -->