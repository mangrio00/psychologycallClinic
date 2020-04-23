<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PsychologicalCall</title>
</head>
<body>
    <div class="container" id="containerPasien">
    <h1 style= margin-top:70px;>UBAH PROFILE</h1><br><br>
    <div class="modal-content">
      <div class="modal-body">
      <form method="POST" action="#">
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-3">USERNAME</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Username baru" name="username" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-3">NAMA DEPAN</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Depan" name="nama_depan"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-3">NAMA BELAKANG</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang" name="nama_belakang"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-3">EMAIL</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-3">TANGGAL LAHIR</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Lahir" name="dob"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-3">NOMOR HANDPHONE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor Handphone" name="no_hp"required>
        </div> 
        <input type="submit" class="btn btn-primary" id="hapus" value="SIMPAN" placeholder="save"></button>
        <div class="modal-footer">
      </div>
      </form>
</body>
</html>
