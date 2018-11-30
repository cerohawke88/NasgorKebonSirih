<?php
  session_start();
  require_once('config.php');
  $db = new Config();
    $namapengguna = $_SESSION["username"];
    $email = $db->runQuery("SELECT email FROM users WHERE username = '".$namapengguna."'");
    $password = $db->runQuery("SELECT password FROM users WHERE username = '".$namapengguna."'");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $username = mysqli_real_escape_string($db->getCon(), $_POST['username']);
    $newEmail = mysqli_real_escape_string($db->getCon(), $_POST['newEmail']);

    if($_POST['inputPassword']==$password && $_POST['inputPassword']==$_POST['reinputPassword']) {

    $db->runQuery("UPDATE users SET username='$newName', email='$userEmail' WHERE username='$namapengguna'");
    
    echo "<font color='green'>Your profile has been updated successfully";
    header("location:profile.php");
    exit;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


        <div class="container">
            <h1>Edit Profile</h1>
          	<hr>
        	<div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src="images/profilePicture.png" class="avatar img-circle" alt="avatar">
                </div>
              </div>
              
              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                <h3>Personal info</h3>
                
                <form class="form-horizontal" role="form">

                    <div class="form-group">
                      <label class="col-lg-3 control-label">Username:</label>
                      <div class="col-lg-8">
                        <input name="newName" class="form-control" type="text" value="<?php echo $namapengguna; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-lg-3 control-label">Email:</label>
                      <div class="col-lg-8">
                        <input name="nerEmail" class="form-control" type="text" value="<?php echo $email[0]['email']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Password:</label>
                      <div class="col-md-8">
                        <input name="inputPassword" class="form-control" type="password" value="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Confirm password:</label>
                      <div class="col-md-8">
                        <input name="reinputPassword" class="form-control" type="password" value="">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <input type="submit" name="POST" class="btn btn-primary" value="Save Changes" href="profile.php">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                      </div>
                    </div>

                </form>
              </div>
          </div>
        </div>
        <hr>

</body>
</html>