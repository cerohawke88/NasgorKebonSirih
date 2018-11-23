<?php
session_start();
require_once('config.php');
$db = new Config();
$db->cekLogin();
$alamat = $db->runQuery("SELECT * FROM alamat");
$users = $db->runQuery("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
?>
<?php include('partials/header.php'); ?>
<body>
	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">
			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate">Nasi Goreng Kambing Kebon Sirih</h1>
						</div>
					</div>
				</div>
				<ul class="slides">
					<li style="background-image: url(images/slide_1.png);" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url(images/slide_2.png);" data-stellar-background-ratio="0.5"></li>
					<li style="background-image: url(images/slide_3.png);" data-stellar-background-ratio="0.5"></li>
				</ul>
			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Beranda</a>
						<a href="#" data-nav-section="menu">Menu</a>
						
					</div>
					
					<div class="fh5co-logo">
						<a href="home.php">NGKKS</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="events">Outlet</a>
						<a href="#" data-nav-section="reservation">Order</a>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>						
						</a>
						<!-- <a href="logout.php" onclick="window.location.href='logout.php'"> Logout</a> -->
						<div class="dropdown">
							<a href="#" class="dropbtn" data-toggle="dropdown" onclick="myFunction()">
								<?php 
									foreach($users as $row) {
								?>
								<?php echo $row['username']?>
								<span class="caret"></span>
							<?php } ?>
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="myDropdown">
							    <li><a href="#">Akun saya</a></li>
							    <li><a href="logout.php" onclick="window.location.href='logout.php'">Logout</a></li>
							</ul>
						</div>
						</div>
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="#" id="cart-popover" data-placement="bottom" title="Keranjang">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Food Menu</h2>
						<p class="sub-heading to-animate">Pergi ke pasar sore-sore, ketemu bu RT lagi belanje buah, kalo mau makan kambing yang gak ada baunye, mending mampir ke NASGORKAMBONSIR dah!</p>
					</div>
				</div>
				<div id="popover_content_wrapper" class="js-sticky" style="display: none">
					<span id="cart_details"></span>
					<div align="right">
						<a href="#" class="btn btn-primary" id="check_out_cart">
							<span class="glyphicon glyphicon-shopping-cart"></span> Konfirmasi Pesanan
						</a>
						<a href="#" class="btn btn-default" id="clear_cart">
							<span class="glyphicon glyphicon-trash"></span> Hapus Keranjang
						</a>
					</div>
				</div>
				<div id="display_menu">
					<!-- retrieve data menu_all.php dari ajax.php -->
				</div>
				
			</div>
		</div>
		<div id="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading">Our Outlet</h2>
						<p class="sub-heading">Buat semuanye yang mau dateng ke lapak kite nih catet alamat-alamatnye.</p>
					</div>
				</div>
				<div class="row">
					<?php
						foreach($alamat as $row) {
					?>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3><?php echo $row['cabang'] ?></h3>
							<span class="fh5co-event-meta"><?php echo $row['telp'] ?></span>
							<p><?php echo $row['alamat'] ?><br>
							<?php echo $row['keterangan'] ?> </p>
							<p><a href="map.php?lat=<?php echo $row['lat']?>&lng=<?php echo $row['lng']?>" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		</div>
		<?php
			include('partials/footer.php');
			include('partials/ajax.php');
		?>
	</body>