<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <head>
    <div class="header">
    <title>Masuk - NGKKS</title>
      <p>
        <a href="index.php" class="btn btn-info btn-lg" style="background-color: tan">
          <span class="glyphicon glyphicon-home"></span>
        </a>
      </p>
      <h2>Nasi Goreng Kambing Kebon Sirih</h2>
    </div>
  </head>
  <body class="login-body">
    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
        Belum bikin akun? <a href="register.php">Bikin dulu dong</a>
      </p>
    </form>
  </body>
</html>