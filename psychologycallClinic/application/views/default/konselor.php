<!DOCTYPE html>
<html lang="en">

<head>
    <title>Counselor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
    html,body{
        padding-top: 20px;
        width: 100%;
    }
</style>
<body>
    <center>
      <br>
      <br>
        <h1>Doctor's Schedule</h1>
        <br>
        <table class="table table-hover" style="width: 1000px;">
            <thead style="background-color: #6b5e51; color:white;">
                <th scope="col">No</th>
                <th scope="col">Doctor's Name</th>
                <th scope="col">Role</th>
                <th scope="col">Schedule</th>
                <th scope="col">Speciality</th>
                <th scope="col">Capacity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  $i = 1;
                  foreach ($konselor as $k): ?>
                <td><?= $i++ ?></td>
                <td><?= $k['fullname'] ?></td>
                <td><?= $k['role'] ?></td>
                <td><?= $k['schedule'] ?></td>
                <td><?= $k['speciality'] ?></td>
                <td><?= $k['capacity'] ?></td>
              </tr>
              <tr>
                <?php endforeach; ?>
            </tbody>
          </table>
    </center>
</body>
</html>