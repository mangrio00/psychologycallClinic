<div class="container">
  <div class="head" style="margin: 70px 0px 0px 0px;width:500px;background-color: #588da8;border-radius: 5px 5px 5px 5px ">
    <center>
      <h1 style="margin: 20px"> EDIT YOUR ACCOUNT </h1>
    </center>
  </div>
  <div class="modal-body" style="width: 500px;background-color:#588da8;padding:3rem">
    <form method="POST" action="#">
      <div class="form-group">
        <label for="firstname" class="col-3">FIRSTNAME</label>
        <input type="text" class="form-control" id="firstname" placeholder="Nama Depan" name="nama_depan" value="<?= $pasien['firstname'] ?>">
      </div>
      <div class="form-group">
        <label for="lastname" class="col-3">LASTNAME</label>
        <input type="text" class="form-control" id="lastname" placeholder="Nama Belakang" name="nama_belakang" value="<?= $pasien['lastname'] ?>">
      </div>

      <div class="form-group">
        <label for="dob" class="col-3">DOB</label>
        <input type="date" class="form-control" id="dob" placeholder="Tanggal Lahir" name="dob" value="<?= $pasien['dob'] ?>">
      </div>
      <div class="form-group">
        <label for="phone" class="col-3">PHONE</label>
        <input type="text" class="form-control" id="phone" placeholder="Phone" name="no_hp" value="<?= $pasien['phone'] ?>">
      </div>
      <input type="submit" class="btn btn-primary" id="edit" value="CHANGE" placeholder="save"></button>
    </form>
  </div>

  <br>
  <br>
</div>