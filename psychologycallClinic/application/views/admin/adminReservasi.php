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
    <center>
    <div class="container" id="containerAdmin">
        <h1 style= margin-top:70px;> Data Reservasi PsychologyCallClinic </h1><br><br>
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
                    <td class="text-center" scope="col">Nama Pasien</td>
                    <td class="text-center" scope="col">Tanggal Reservasi</td>
                    <td class="text-center" scope="col">Nama Konselor</td>
                    <td class="text-center" scope="col">Role</td>
                    <td class="text-center" scope="col">Status Reservasi</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
            </tbody>
        </table>
        <br><br>
        </div>
    </div>
    </center>

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