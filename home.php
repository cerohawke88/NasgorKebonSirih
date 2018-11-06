<?php
session_start();
require_once('config.php');
$db = new Config();
$db->cekLogin();
$makanan = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Makanan'");
$minuman = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Minuman'");
$snack = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Snack'");
?>
<?php include('header.php'); ?>
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
						<a href="logout.php" onclick="window.location.href='logout.php'"> Logout</a>
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
				
				<div class="col-md-6">
					<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-dishes">FOOD</h2>
						<ul>
							<?php
								for ($i = 0; $i < count($makanan) / 2; $i++) {
									$item = $makanan[$i];
									include 'templates/menu_makanan.php';
								}
							?>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-dishes">FOOD</h2>
						<ul>
							<?php
								for ($i = count($makanan) / 2; $i < count($makanan); $i++) {
									$item = $makanan[$i];
									include 'templates/menu_makanan.php';
								}
							?>
						</ul>
					</div>
				</div>
				<div class="row row-center">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Drinks</h2>
							<ul>
								<?php
									for ($i = 0; $i < count($minuman) / 2; $i++) {
										$item = $minuman[$i];
										include 'templates/menu_minuman.php';
									}
								?>
							</ul>
						</div>
					</div>
					<div class="row row-padded">
						<div class="col-md-6">
							<div class="fh5co-food-menu to-animate-2">
								<h2 class="fh5co-drinks">Drinks</h2>
								<ul>
									<?php
										for ($i = count($minuman) / 2; $i < count($minuman); $i++) {
											$item = $minuman[$i];
											include 'templates/menu_minuman.php';
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-center">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">Snack</h2>
							<ul>
								<?php
									for ($i = 0; $i < count($snack); $i++) {
										$item = $snack[$i];
										include 'templates/menu_snack.php';
									}
								?>
							</ul>
						</div>
					</div>
					<!-- <div class="row row-padded">
						<div class="col-md-6">
							<div class="fh5co-food-menu to-animate-2">
								<h2 class="fh5co-drinks">Snack</h2>
								<ul>
									
								</ul>
							</div>
						</div>
					</div> -->
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
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Tanah Abang</h3>
							<span class="fh5co-event-meta">Telp: 0811864011</span>
							<p>Jl. Kebon Sirih Raya. <br>
							Buka Tiap Hari dari jam 11.00 - 02.00 </p>
							<p><a href="map.php" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Lebak Bulus</h3>
							<span class="fh5co-event-meta">Telp: (021)7666302 </span>
							<p>Jl. Karang Tengah Raya no.1C. <br>
							Buka Tiap Hari dari jam 11.00 - 23.00 </p>
							<p><a href="#" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Pasaraya Grande</h3>
							<span class="fh5co-event-meta">Telp: 085945040267</span>
							<p>Jl.Dapur Raya PG Lt LG#W1. <br>
							Buka Tiap Hari dari jam 10.00 - 21.00 </p>
							<p><a href="#" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Bintaro Exchange Mall</h3>
							<span class="fh5co-event-meta">Telp: 085727555723 </span>
							<p> Food Exchange, Lt 1 BEMall. <br>
							Buka Tiap Hari dari jam 10.00 - 22.00 </p>
							<p><a href="#" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Taman Kuliner</h3>
							<span class="fh5co-event-meta">Telp: 085776567351 </span>
							<p>Jl. Otista Raya,Ciputat. <br>
							Buka Tiap Hari dari jam 04.00 - 23.00 </p>
							<p><a href="#" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Tangerang Selatan</h3>
							<span class="fh5co-event-meta">Telp: (021)7415881 </span>
							<p>Jl. Pajajaran No.45,Pamulang. <br>
							Buka Tiap Hari dari jam 11.00 - 23.00 </p>
							<p><a href="#" class="btn btn-primary btn-outline">See Map</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Reserve a Menu</h2>
						<p class="sub-heading to-animate">Buat semuanye yang lagi dijalan atau sibuk dapet mesen dulu nih makanannye nanti diambil. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Contact Info</h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address ">
								<li><i class="icon-phone"></i> 0811190775 <br> 0811864011 <br> (021) 74702499 </li>
								<li><i class="icon-facebook"></i>nasigorengkebonsirih</li>
								<li><i class="icon-instagram"></i>nasigorengkambingkebonsirih_ </li>
							</ul>
						</div>
						<?
						session_start();
						if (!isset($_SESSION['username'])){
						header('Location:./login.php');
						}
						echo'anda sukses login';
						?>
						<div class="col-md-6 to-animate-2">
							<h3>Order Form</h3>
							<div class="form-group ">
								<label for="name" class="sr-only">Name</label>
								<input id="name" class="form-control" placeholder="Name" type="text">
							</div>
							<div class="form-group ">
								<label for="No Telp" class="sr-only">Number</label>
								<input id="No Telp" class="form-control" placeholder="No Telp" type="No Telp">
							</div>
							
							<div class="form-group">
								<label for="occation" class="sr-only">Occation</label>
								<select class="form-control" id="occation">
									<option>Pilih Menu</option>
									<?php
										include('server.php');
										$query = "SELECT nama FROM menu";
										$db = mysqli_query($db, $query);
										while ($d=mysqli_fetch_assoc($db)) {
											echo "<option value='{".$d['nama']."}'>".$d['nama']."</option>";
										}
									?>
								</select>
							</div>
							<div class="form-group ">
								<label for="date" class="sr-only">Date</label>
								<input id="date" class="form-control" placeholder="Date &amp; Time" type="text">
							</div>
							
							<div class="form-group ">
								<label for="message" class="sr-only">Message</label>
								<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group ">
								<input class="btn btn-primary" value="Send Message" type="submit">
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>