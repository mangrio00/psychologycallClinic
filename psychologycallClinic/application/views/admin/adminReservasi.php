<center>
    <div class="container" id="containerAdmin">
        <h1 style=margin-top:70px;> Reservation PsychologyCallClinic </h1><br><br>
        <div class="instruksiSearch">
            <form class="form-inline">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning " type="submit"><img src="https://www.freeiconspng.com/uploads/search-icon-png-10.png" width="22px" alt="Library Search Icon" /></button>
            </form>
        </div><br><br>
        <div class="viewTable">
            <table class="table">
                <thead>
                    <tr style="font-weight:bold;">
                        <td class="text-center" scope="col">#</td>
                        <td class="text-center" scope="col">Patient Name</td>
                        <td class="text-center" scope="col">Reservation Date</td>
                        <td class="text-center" scope="col">Counselor Name</td>
                        <td class="text-center" scope="col">Status </td>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php
                        $i = 1;
                        foreach ($reservasi as $r) : ?>
                            <td class="text-center"><?= $i++ ?></td>
                            <td class="text-center"><?= $r['nama']; ?></td>
                            <td class="text-center"><?= $r['tgl_reserv']; ?></td>
                            <td class="text-center"><?= $r['nama_konselor']; ?></td>
                            <td class="text-center"><?= $r['status']; ?></td>
                    </tr><?php endforeach ?>
                </tbody>
            </table>
            <br><br>
        </div>
    </div>
</center>