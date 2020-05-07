<center>
    <div class="container" id="containerAdmin">
        <h1 style=margin-top:70px;> Reservation for <?= $konselor['fullname'] ?> </h1><br><br>
        <div class="instruksiSearch">
            <form class="form-inline" action="" method="POST">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning " type="submit"><img src="https://www.freeiconspng.com/uploads/search-icon-png-10.png" width="22px" alt="Library Search Icon" /></button>
            </form>
        </div><br><br>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3" style="font-size: large">
                <div class="alert alert-info alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?= $this->session->flashdata('flash'); ?>.</strong>
                </div>
            </div>
        <?php endif; ?>
        <div class="viewTable">
            <table class="table">
                <thead>
                    <tr style="font-weight:bold;">
                        <td class="text-center" scope="col">#</td>
                        <td class="text-center" scope="col">Patient Name</td>
                        <td class="text-center" scope="col">Reservation Date</td>
                        <td class="text-center" scope="col">Counselor Name</td>
                        <td class="text-center" scope="col">Status </td>
                        <td class="text-center" scope="col">Action </td>
                    </tr>
                </thead>
                <tbody id="tbl_data" style="text-align: center">

                </tbody>
            </table>
            <br><br>
        </div>
    </div>
</center>

<script type="text/javascript">
    $(document).ready(function() {
        tampil_data();
        //Menampilkan Data di tabel
        function tampil_data() {
            $.ajax({
                url: '<?php echo base_url(); ?>KonselorC/ambilDataReservasi',
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
                            '<td style="width: 16.66%;">' + '<a data-id="' + response[i].id_reservasi + '" class="badge badge-success" href="<?= base_url(); ?>KonselorC/ubah/' + response[i].id_reservasi + '">Ubah</a>' + '</td>' +
                            '</tr>';
                    }
                    $("#tbl_data").html(html);
                }
            });
        }

    });
</script>