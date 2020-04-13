    <center>
    <div class="container" id="containerKonselor">
        <h1 style= margin-top:70px;> Reservation Data PsychologyCallClinic </h1><br><br>
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
                    <td class="text-center" scope="col">Patients Name</td>
                    <td class="text-center" scope="col">Reservation Date</td>
                    <td class="text-center" scope="col">Counselor Name</td>
                    <td class="text-center" scope="col">Reservation Status</td>
                    <td calas="text-center" scope="col">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
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

    <!-- MODAL EDIT KONSELER -->
    <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center><h2>UPDATE DATA RESERVATION</h2></center>
      </div>
      <div class="modal-body">
      <!-- isi form ini -->
      <form method="POST" action="#">
      <div class="form-group">
          <label for="formGroupExampleInput">Patients Name </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="patients name" name="patient name" readonly="" >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Reservation Date</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="reservation date" name="reservation date"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Counselor Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Counselor Name" name="counselor name" readonly="">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Reservation Status </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="reservation status" name="reservation status" required >
        </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
      </form>
      </div>
    </div>
  </div>
</div>
    