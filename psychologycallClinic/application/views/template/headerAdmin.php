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
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <title>PsychologicalCall</title>

  </head>
  <nav class="navbar navbar-fixed-top">
      <div class="container">
          <ul class="nav navbar-nav">
          <li><a class="navbar-brand">PsychologyCall</a></li>
          <li class="active"><a href="#">Konselor</a></li>
          </ul>
          <body>
          <ul class="nav navbar-nav navbar-right text-center">
          <li class="dropdown pull-right">
              <a class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> Admin
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="<?= base_url(); ?>welcome/adminKonselor">Kelola Konselor</a></li>
              <li class="dropdown-item"><a href="<?= base_url(); ?>welcome/adminPasien">Kelola Pasien</a></li>
              <li class="dropdown-item"><a href="<?= base_url(); ?>welcome/adminReservasi">List Reservasi</a></li>
              <li class="dropdown-item"><a href="#">Log Out</a></li>
              </ul>
          </li>
          </ul>
    </div>
  </nav>