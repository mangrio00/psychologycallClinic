
<!-- ISI WEB -->
<center>
<div class="container" id="containerAdmin">
    <h1 style= margin-top:70px;> Data Konselor PsychologyCallClinic </h1><br><br>
    <div class="instruksiAdd">
        <a class="btn btn-success btn-sm" id="tambahKonselor" data-toggle="modal" data-target="#tambahDataModal"><img src="https://www.freeiconspng.com/uploads/add-icon--mono-general-icons--softiconsm-24.png" width="20" alt="Add Icon  Mono General Icons  SoftIconsm" /></a>
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
                <td class="text-center" scope="col">Full Name</td>
                <td class="text-center" scope="col">Username</td>
                <td class="text-center" scope="col">Password</td>
                <td class="text-center" scope="col">Email</td>
                <td class="text-center" scope="col">Role</td>
                <td class="text-center" scope="col">Schedule</td>
                <td class="text-center" scope="col">Spesiality</td>
                <td class="text-center" scope="col">Capacity</td>
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
      <center><h2>TAMBAH DATA KONSELOR</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="#">
        <div class="form-group">
          <label for="formGroupExampleInput">Full Name </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="fullname" name="fullname" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Email</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email" name="email"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Role</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="role" name="role" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Schedule </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="schedule" name="schedule" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Speciality </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="speciality" name="speciality" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Capacity </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="capacity" name="capacity" required >
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
      <center><h2>EDIT DATA KONSELOR</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="#">
      <div class="form-group">
          <label for="formGroupExampleInput">Full Name </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="fullname" name="fullname" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Email</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email" name="email"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Role</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="role" name="role" readonly>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Schedule </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="schedule" name="schedule" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Speciality </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="speciality" name="speciality" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Capacity </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="capacity" name="capacity" required >
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
      
