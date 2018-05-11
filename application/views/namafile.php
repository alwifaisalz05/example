<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cara Membuat Form Validation Pada Codeigniter Menggunakan Bootstrap</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <?php if (validation_errors()) : ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('succses')) : ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('succses'); ?>
      </div>
  <?php endif; ?>

    <div class="row">
      <div class="col-md-4"></div>
       <div class="col-md-4">
          <h1>Form Register</h1>
        <?php echo form_open(); ?> <!-- sama seperti <form action="" mathod="">...</form> -->
         
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" placeholder="Nama Depan" class="form-control" name="namadepan">
                </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <input type="text" placeholder="Nama Belakang" class="form-control" name="namabelakang">
                </div>
            </div>
          </div>

           <div class="form-group">
            <input type="email" placeholder="Email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" name="password">
          </div>
           <div class="form-group">
            <input type="password" placeholder="Retype Password" class="form-control" name="retypepassword">
          </div>
          <div class="form-group">
            <input type="submit" name="register" class="form-control btn btn-info" value="Register">
          </div>
          <?php echo form_close(); ?>
      </div>
       <div class="col-md-4"></div>
    </div>
  </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css/js/bootstrap.min.js"></script>
  </body>
</html>