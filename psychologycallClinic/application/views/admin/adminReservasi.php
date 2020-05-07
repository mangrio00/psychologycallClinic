<center>
    <div class="container" id="containerAdmin">
        <h1 style=margin-top:70px;> Reservation PsychologyCallClinic </h1><br><br>
        <div class="instruksiSearch">
            <form class="form-inline" action="" method="POST">
                <input class="form-control " type="search" placeholder="Search" name="keyword" aria-label="Search">
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
                url: '<?php echo base_url(); ?>AdminC/ambilDataReservasi',
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
                            '</tr>';
                    }
                    $("#tbl_data").html(html);
                }
            });
        }
    });
</script>