<?php
session_start();
//registration
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'db_kebonsirih');

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
          $logged_in_user = mysqli_fetch_assoc($results);
          if($results>0) {
            if ($logged_in_user['level'] == '1') {
                session_start();
                $_SESSION['username'] = $logged_in_user['username'];
                header('location: tables.php');     
                consolelog($results);
            }
            elseif ($logged_in_user['level'] == '0')
            {
              session_start();
              $_SESSION['username'] = $logged_in_user['username'];
              // $data['level'] level digunakan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
              $_SESSION['level']    = $logged_in_user['level'];
              header('location:home.php');
            }

            // if (header('location: tables.php')) {
            //   header('location: login.php');
            // }
          } 
          else {
            array_push($errors, "Wrong username/password combination");
          } 
      }
  if (count($errors) == 0) { 
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) { // user found
        // check if user is admin or user
        $logged_in_user = mysqli_fetch_assoc($results);
          if($results>0){
          if ($logged_in_user['level'] == '1') {
              session_start();
              $_SESSION['username'] = $logged_in_user['username'];
              header('location: tables.php');     
              consolelog($results);
          }
          elseif ($logged_in_user['level'] == '0')
          {
            session_start();
            $_SESSION['username'] = $logged_in_user['username'];
            // $data['level'] level digunakan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
            $_SESSION['level']    = $logged_in_user['level'];
            header('location:home.php');
          }
        } 
        else {
          array_push($errors, "Wrong username/password combination");
        } 
      
    }
  }
}

}
  // Check If form submitted, insert form data into menu table.
  // nambah data(add).
  if(isset($_POST['Submit'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $jenis = mysqli_real_escape_string($db, $_POST['jenis']);
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $deskripsi= mysqli_real_escape_string($db, $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($db, $_POST['harga']);
    
    // checking empty fields
  if(empty($id) || empty($jenis) || empty($nama) || empty($deskripsi) || empty($harga)) {
        
    if(empty($id)) {
      echo "<font color='red'>Id field is empty.</font><br/>";
    }
    
    if(empty($jenis)) {
      echo "<font color='red'>Jenis field is empty.</font><br/>";
    }
    
    if(empty($nama)) {
      echo "<font color='red'>nama field is empty.</font><br/>";
    }

    if(empty($deskripsi)) {
      echo "<font color='red'>deskripsi field is empty.</font><br/>";
    }

    if(empty($harga)) {
      echo "<font color='red'>harga field is empty.</font><br/>";
    }
    
    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  } else {
        
    // Insert user data into table
    $result = "INSERT INTO menu (id,jenis,nama,deskripsi,harga) VALUES('$id','$jenis','$nama','$deskripsi','$harga')";
    
    // Show message when user added
    mysqli_query($db, $result);
    echo "<font color='green'>Data added successfully.";
    header('location: tables.php');
    }

  }


?>