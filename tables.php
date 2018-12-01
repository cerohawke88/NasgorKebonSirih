<?php
session_start();
require_once('config.php');
// include 'server.php';
$db = new Config();
$db->cekLogin();
$menu = $db->runQuery("SELECT * FROM menu");
$order = $db->runQuery("SELECT * FROM orders");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="shortcut icon" href="images/food-menu.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    Administrator
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  </head>
  <body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/foto.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
          <a href="" class="simple-text logo-normal">
            ADMIN
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active ">
              <a class="nav-link" href="tables.php">
                <i class="material-icons">content_paste</i>
                <p>List Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">
                <i class="material-icons">account_circle</i>
                <p>List User</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="order.php">
                <i class="material-icons">shopping_cart</i>
                <p>orders</p>
              </a>
            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="btn btn-success btn-sm" href="add.php" >
                      <i class="lingkaran">Tambah</i>
                    </a>
                    <div class="menu menu-right" aria-labelledby="navbarMenuLink">
                    </div>
                  </li>
                  <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                          Account
                        </p>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="logout.php">Log out</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar -->
            <!-- Time and Date -->
            <p><img src="images/time.png" alt=""> : <span id="datetime"></span></p>
            <script>
            function date_time(id)
            {
            date = new Date;
            year = date.getFullYear();
            month = date.getMonth();
            months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            d = date.getDate();
            day = date.getDay();
            days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
            h = date.getHours();
            if(h<10)
            {
            h = "0"+h;
            }
            m = date.getMinutes();
            if(m<10)
            {
            m = "0"+m;
            }
            s = date.getSeconds();
            if(s<10)
            {
            s = "0"+s;
            }
            result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
            document.getElementById(id).innerHTML = result;
            setTimeout('date_time("'+id+'");','1000');
            return true;
            }
            </script>
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
            <!-- End Time and Date -->
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-plain">
                      <?php if(isset($_SESSION['add'])) { ?>
                      <div class="alert alert-success" role="alert"><?php echo $_SESSION['add']; ?></div>
                      <?php  } elseif(isset($_SESSION['update'])) {?>
                      <div class="alert alert-success" role="alert"><?php echo $_SESSION['update']; ?></div>
                      <?php  }?>
                      <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0">Menu</h4>
                        <p class="card-category">Mengganti atau menambahkan menu</p>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <tr>
                              <thead class="">
                                <th>
                                  ID
                                </th>
                                <th>
                                  Nama Makanan
                                </th>
                                <th>
                                  Deskripsi
                                </th>
                                <th>
                                  Harga
                                </th>
                                <th>
                                  update
                                </th>
                                <th>
                                  delete
                                </th>
                              </thead>
                              <tbody>
                                <?php foreach ($menu as $row) {
                                ?>
                                <tr>
                                  <td>
                                    <?php echo $row['id'];?>
                                  </td>
                                  <td>
                                    <?php echo $row['nama'];?>
                                  </td>
                                  <td>
                                    <?php echo $row['deskripsi'];?>
                                  </td>
                                  <td>
                                    <?php echo $row['harga'];?>
                                  </td>
                                  <td>
                                    <a class="btn btn-primary on-click" href="update.php?id=<?php echo $row['id']?>">update</a>
                                  </td>
                                  <td>
                                    <a class="btn btn-danger on-click right" onclick="return confirm('Ingin menghapus?')" href="delete.php?id=<?php echo $row['id']?>">delete</a>
                                  </td>
                                </tr>
                                <?php }

                                ?>
                              </tbody>
                            </tr>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--   Core JS Files   -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap-material-design.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="assets/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="assets/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="assets/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
        <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="assets/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="assets/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="assets/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="assets/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="assets/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <?php include('partials/con_dash.php'); ?>
        <?php unset($_SESSION['add']);?>
        <?php unset($_SESSION['update']);?>
      </body>
    </html>