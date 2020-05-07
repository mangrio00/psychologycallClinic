<!-- ISI WEB -->
<center>
  <div class="container" id="containerAdmin">
    <h1 style=margin-top:70px;> Counselor PsychologyCallClinic </h1><br><br>
    <div class="instruksiAdd">
      <a class="btn btn-success btn-sm" id="tambahKonselor" href="<?= base_url(); ?>AdminC/tambahKonselor"><img src="https://www.freeiconspng.com/uploads/add-icon--mono-general-icons--softiconsm-24.png" width="20" alt="Add Icon  Mono General Icons  SoftIconsm" /></a>
    </div><span>
      <div class="instruksiSearch">
        <form class="form-inline" action="" method="POST">
          <input class="form-control " type="search" placeholder="Search" name="keyword" aria-label="Search">
          <button class="btn btn-warning " type="submit"><img src="https://www.freeiconspng.com/uploads/search-icon-png-10.png" width="22px" alt="Library Search Icon" /></button>
        </form>
      </div>
    </span><br><br>

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
            <td class="text-center" scope="col">Full Name</td>
            <td class="text-center" scope="col">Username</td>
            <td class="text-center" scope="col">Password</td>
            <td class="text-center" scope="col">Email</td>
            <td class="text-center" scope="col">Role</td>
            <td class="text-center" scope="col">Schedule</td>
            <td class="text-center" scope="col">Speciality</td>
            <td class="text-center" scope="col">Capacity</td>
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
        url: '<?php echo base_url(); ?>AdminC/ambilDataKonselor',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
          console.log(response);
          var i;
          var no = 0;
          var html = "";
          for (i = 0; i < response.length; i++) {
            no++;
            response[i].pass = response[i].password.substring(0, 6);
            html = html + '<tr>' +
              '<td>' + no + '</td>' +
              '<td>' + response[i].fullname + '</td>' +
              '<td>' + response[i].username + '</td>' +
              '<td>' + response[i].pass + '</td>' +
              '<td>' + response[i].email + '</td>' +
              '<td>' + response[i].role + '</td>' +
              '<td>' + response[i].schedule + '</td>' +
              '<td>' + response[i].speciality + '</td>' +
              '<td>' + response[i].capacity + '</td>' +
              '<td style="width: 16.66%;">' + '<span><a data-id="' + response[i].id_konselor + '" class="btn btn-success btn_edit" href="<?= base_url(); ?>AdminC/editKonselor/' + response[i].id_konselor + '"><img src="https://www.freeiconspng.com/uploads/edit-icon-3.png" width="20" alt="Free Edit Vector" /></a><a style="margin-left: 5px;" data-id="' + response[i].id_konselor + '" class="btn btn-danger btn_hapus" href="<?= base_url(); ?>AdminC/hapusKonselor/' + response[i].id_konselor + '"><img src="https://www.freeiconspng.com/uploads/trash-can-icon-24.png" width="20" alt="Icon Drawing Trash Can" /></a></span>' + '</td>' +
              '</tr>';
          }
          $("#tbl_data").html(html);
        }
      });
    }

  });
</script>