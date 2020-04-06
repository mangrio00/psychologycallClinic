<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PsychologicalCall</title>

  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
    <div class="container">
        <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="#">PsychologyCall</a></li>
        <li class="active"><a href="#">Konselor</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right text-center">
        <li class="dropdown pull-right">
            <a class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> Admin
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#">Kelola Konselor</a></li>
            <li class="dropdown-item"><a href="#">Kelola Pasien</a></li>
            <li class="dropdown-item"><a href="#">List Reservasi</a></li>
            <li class="dropdown-item"><a href="#">Log Out</a></li>
            </ul>
        </li>
        </ul>
    </div>
    </nav>
<!-- ISI WEB -->
<center>
<div class="container" id="containerAdmin">
    <h1 style= margin-top:70px;> Data Pasien PsychologyCallClinic </h1><br><br>
    <div class="instruksiAdd">
        <a class="btn btn-success btn-sm" id="tambahPasien" data-toggle="modal" data-target="#tambahDataModal"><img src="https://www.freeiconspng.com/uploads/add-icon--mono-general-icons--softiconsm-24.png" width="20" alt="Add Icon  Mono General Icons  SoftIconsm" /></a>
    </div><span>
    <div class="instruksiSearch">
        <form class="form-inline">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search">    
        <button class="btn btn-warning " type="submit"><img src="https://www.freeiconspng.com/uploads/search-icon-png-10.png" width="22px" alt="Library Search Icon" /></button>
        </form>
    </div></span><br><br>
    <div class="viewTable">
    <table class="table">
        <thead>
            <tr style="font-weight:bold;">
                <td class="text-center" scope="col">#</td>
                <td class="text-center" scope="col">First Name</td>
                <td class="text-center" scope="col">Last Name</td>
                <td class="text-center" scope="col">Username</td>
                <td class="text-center" scope="col">Password</td>
                <td class="text-center" scope="col">Email</td>
                <td class="text-center" scope="col">Tanggal Lahir</td>
                <td class="text-center" scope="col">No Hp</td>
                <td class="text-center" scope="col">Action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center">
                    <a href="" class="btn btn-danger btn-sm float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?><img src="https://www.freeiconspng.com/uploads/trash-can-icon-24.png" width="20" alt="Icon Drawing Trash Can" /></a>
                    <a class="btn btn-success btn-sm float-center" data-toggle="modal" data-target="#editDataModal" ><img src="https://www.freeiconspng.com/uploads/edit-icon-3.png" width="20" alt="Free Edit Vector" /></a>
                </td>
            </tr>
        </tbody>
    </table>
    <br><br>
    </div>
</div>
</center>

<!-- Modal Tambah Konselor -->

<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>TAMBAH DATA PASIEN</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="#">
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Depan</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Depan" name="nama_depan" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Belakang</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang" name="nama_belakang"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Email</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Tanggal Lahir</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Lahir" name="dob" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">No HP</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="No HP" name="no_hp" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Konselor -->

<div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>EDIT DATA PASIEN</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="#">
      <div class="form-group">
          <label for="formGroupExampleInput">Nama Depan</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Depan" name="nama_depan" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Nama Belakang</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang" name="nama_belakang"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Email</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Tanggal Lahir</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal Lahir" name="dob" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">No HP</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="No HP" name="no_hp" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>

<!-- BATAS ISI WEB -->
    <div class="fixed-bottom">
        <div class="copyright">
        © 2020 Copyright Text : 
        <a class="stretched-link right" href="http://localhost/psychologycallClinic/psychologycallClinic/"> PsychologyCallClinic</a>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>