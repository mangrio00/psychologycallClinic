<!-- ISI WEB -->
<center>
    <div class="container" id="containerPasien" style="background-color: #fff">
        <h1 style=margin-top:70px;> Data Reservasi <?= $pasien['firstname'] ?> <?= $pasien['lastname'] ?> </h1><br><br>
        <div class="instruksiAdd">
            <a class="btn btn-success btn-sm " id="tambahReservasi" href="<?= base_url(); ?>pasienC/tambahReservasi/<?= $pasien['id_pasien'] ?>"><img src="https://www.freeiconspng.com/uploads/reservation-icon-20.png" width="22px" /></a>
        </div><span>
            <div class="instruksiSearch">
                <form class="form-inline" action="" method="POST">
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
                <tbody id="tbl_data" style="text-align: center">

                </tbody>
            </table>
            <br><br>
        </div>
    </div>
</center>

<!-- BATAS ISI WEB -->

<script type="text/javascript">
    $(document).ready(function() {
        tampil_data();
        //Menampilkan Data di tabel
        function tampil_data() {
            $.ajax({
                url: '<?php echo base_url(); ?>PasienC/ambilDataReservasi',
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    var i;
                    var no = 0;
                    var html = "";
                    for (i = 0; i < response.length; i++) {
                        no++;
                        html = html + '<tr>' +
                            '<td>' + no + '</td>' +
                            '<td>' + response[i].nama + '</td>' +
                            '<td>' + response[i].tgl_reserv + '</td>' +
                            '<td>' + response[i].nama_konselor + '</td>' +
                            '<td>' + response[i].status + '</td>' +
                            '<td style="width: 16.66%;">' + '<span><a data-id="' + response[i].id_reservasi + '" class="btn btn-success btn_edit" href="<?= base_url(); ?>PasienC/ubahReservasi/' + response[i].id_reservasi + '"><img src="https://www.freeiconspng.com/uploads/edit-icon-3.png" width="20" alt="Free Edit Vector" /></a><a style="margin-left: 5px;" data-id="' + response[i].id_reservasi + '" class="btn btn-danger btn_hapus" href="<?= base_url(); ?>PasienC/hapusReservasi/' + response[i].id_reservasi + '"><img src="https://www.freeiconspng.com/uploads/trash-can-icon-24.png" width="20" alt="Icon Drawing Trash Can" /></a></span>' + '</td>' +
                            '</tr>';
                    }
                    $("#tbl_data").html(html);
                }
            });
        }

    });
</script>