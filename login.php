<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Masuk - NGKKS</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body background="images/menu1.jpg">
    <div class="header"  style="background-color: #fb6e14;">
      <a href="index.php" class="icons">Home</a>
      <h2 style="color: white">Nasi Goreng Kambing Kebon Sirih</h2>
    </div>
    
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
        <button type="submit" class="btn" name="login_user" style="background-color: #fb6e14;">Login</button>
      </div>
      <p>
        Belum bikin akun? <a href="register.php">Bikin dulu dong</a>
      </p>
    </form>
  </body>
</html>