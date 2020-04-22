<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PsychologicalCall</title>
</head>
<body>
  <center>
    <div class="container" id="containerKonselor">
    <h1 style= margin-top:70px;> PROFILE COUNSELOR</h1><br><br>
    <div class="modal-content">
      <div class="modal-body">
      <form method="POST" action="#">
      <div class="form-group">
          <?= form_label('ID KONSELOR') ?>
          <?= form_input(['name'=>'id_konselor','class'=>'form-control','required'=>'required','value'=>$konselor['id_konselor']]) ?>
        </div> 
        <!-- <div class="form-group">
          <label for="formGroupExampleInput">USERNAME</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="username" required >
        </div>
 -->    <div class="form-group">
          <?= form_label('FULLNAME') ?>
          <?= form_input(['name'=>'fullname','class'=>'form-control','required'=>'required','value'=>$konselor['fullname']]) ?>
        
        </div>
        <!-- <div class="form-group">
          <label for="formGroupExampleInput">EMAIL</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email" name="email"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">ROLE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="role" name="role"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">SCHEDULE</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="schedule" name="schedule"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">SPECIALIST</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="specialist" name="specialist"required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">CAPACITY</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="capacity" name="capacity"required>
        </div> -->
 
                <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="save"></button>
        <div class="modal-footer">
      </div>
      </form>
  </center>
</body>
</html>
