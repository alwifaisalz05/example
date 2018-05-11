<!-- Ergandhi Yudha Kurniawan -->
<!-- 1301154147 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validation Form 1301154147</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Style -->
    <style>
	 #input{
	 	margin-top:10px;
	 }
	</style>
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
       	<br>
        <?php echo form_open(); ?>
        <table align="center">
          <tr>
          	<td><h3 align="center">REGISTRASI MAHASISWA</h3></td>
          </tr>
          <tr>
          	<td><input type="nim" placeholder="Nomor Induk Mahasiswa" class="form-control" name="nim" id="input"></td>
          </tr>
          <tr>
            <td><input type="nama" placeholder="Masukkan Nama Anda" class="form-control" name="nama" id="input"></td>
          </tr>
          <tr>
          	<td><hr></td>
          </tr>
          <tr>
            <td><input type="submit" name="register" class="form-control btn btn-warning" value="DAFTAR"></td>
          </tr>
          <?php echo form_close(); ?>
      </table>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css/js/bootstrap.min.js"></script>
  </body>
</html>