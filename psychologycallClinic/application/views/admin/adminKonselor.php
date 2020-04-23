<!-- ISI WEB -->
<center>
  <div class="container" id="containerAdmin">
    <h1 style=margin-top:70px;> Counselor PsychologyCallClinic </h1><br><br>
    <div class="instruksiAdd">
      <a class="btn btn-success btn-sm" id="tambahKonselor" href="<?= base_url(); ?>AdminC/tambahKonselor"><img src="https://www.freeiconspng.com/uploads/add-icon--mono-general-icons--softiconsm-24.png" width="20" alt="Add Icon  Mono General Icons  SoftIconsm" /></a>
    </div><span>
      <div class="instruksiSearch">
        <form class="form-inline">
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
        <tbody>
          <tr><?php
              $i = 1;
              foreach ($konselor as $k) : ?>
              <td class="text-center"><?= $i++ ?></td>
              <td class="text-center"><?= $k['fullname']; ?></td>
              <td class="text-center"><?= $k['username']; ?></td>
              <td class="text-center">
                <?php if ($k['password'] == '123456') {
                  echo $k['password'];
                } else {
                  echo substr($k['password'], 0, 6) . '...';
                } ?>
              </td>
              <td class="text-center"><?= $k['email']; ?></td>
              <td class="text-center"><?= $k['role']; ?></td>
              <td class="text-center"><?= $k['schedule']; ?></td>
              <td class="text-center"><?= $k['speciality']; ?></td>
              <td class="text-center"><?= $k['capacity']; ?></td>
              <td class="text-center">
                <a href="<?= base_url(); ?>AdminC/hapusKonselor/<?= $k['id_konselor'] ?>" class="btn btn-danger btn-sm float-center" onclick="return confirm('Are you sure you want to delete this data?');" ?><img src="https://www.freeiconspng.com/uploads/trash-can-icon-24.png" width="20" alt="Icon Drawing Trash Can" /></a>
                <a class="btn btn-success btn-sm float-center" href="<?= base_url(); ?>AdminC/editKonselor/<?= $k['id_konselor'] ?>"><img src="https://www.freeiconspng.com/uploads/edit-icon-3.png" width="20" alt="Free Edit Vector" /></a>
              </td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
      <br><br>
    </div>
  </div>
</center>

<!-- BATAS ISI WEB -->