<?php
require_once('config.php');
$db = new Config();
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
						<a href="index.html">NGKKS</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="events">Outlet</a>
						<a href="login.php" onclick="window.location.href='login.php'">Order</a>
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
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu4.jpg" alt="Nagombing" >
											</figure>
											<div>
												<h3>Nasi Goreng Kambing</h3>
												<p>Nasi Goreng yang penuh dengan rempah-rempah dan banyaknya Daging Kambing dengan rasa empuk dan tidak bau menimbulkan rasa lezat di mulut!</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp.41.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu6.jpg" class="img-responsive" alt="Nagoyam">
											</figure>
											<div>
												<h3>Nasi Goreng Ayam </h3>
												<p>Nasi Goreng yang penuh dengan rempah-rempah dan banyaknya Daging Ayam dan menimbulkan rasa lezat di mulut!</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 41.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu12.jpg" class="img-responsive" alt="Nagoso">
											</figure>
											<div>
												<h3>Nasi Goreng Sosis Bakso </h3>
												<p>Nasi Goreng yang penuh dengan rempah-rempah dan banyaknya sosis dan bakso yang menimbulkan rasa lezat di mulut!</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 45.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu14.jpg" class="img-responsive" alt="nambingling">
											</figure>
											<div>
												<h3>Nasi Ala Kambing Guling</h3>
												<p>Sensai Kambing yang empuk dan tidak abu ditambah dengan hangatnya nasi putih yang membuat sensasi rasa enak di mulut.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 50.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu10.jpg" class="img-responsive" alt="migorimbing">
											</figure>
											<div>
												<h3>Mie Goreng Kari Kambing</h3>
												<p>Mie dengan banyaknya rempah-rempah dengan Daging Kambing membuat variasi baru yang wajib untuk dicoba! </p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 38.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu6.jpg" class="img-responsive" alt="nasgor">
											</figure>
											<div>
												<h3>Nasi Goreng Polos</h3>
												<p>Nasi Goreng yang penuh dengan rempah-rempah dan menimbulkan rasa lezat di mulut!</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 27.000
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-food-menu to-animate-2">
								<h2 class="fh5co-dishes">FOOD</h2>
								<ul>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu2.jpg" class="img-responsive" alt="sambing">
											</figure>
											<div>
												<h3>Sate Kambing</h3>
												<p>Empuknye daging kambing membuat rasanya kebayang-bayang. Isi 8 tusuk.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 60.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu9.jpg" class="img-responsive" alt="satimbing">
											</figure>
											<div>
												<h3>Sate Hati Kambing</h3>
												<p>Variasi baru yang wajib dicobain nih semuanye! Isi 8 tusuk.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 60.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu15.jpg" class="img-responsive" alt="sayam">
											</figure>
											<div>
												<h3>Sate Ayam</h3>
												<p>Wajib rasakan bedanye saus kacang di sate ayam punye kite. Isi 10 tusuk.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 35.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu3.jpg" class="img-responsive" alt="sopbing">
											</figure>
											<div>
												<h3>Sop Kambing</h3>
												<p>Mau makan yang seger-seger? Wajib cobain sop kambing punye kite!</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 40.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu8.jpg" class="img-responsive" alt="kamling">
											</figure>
											<div>
												<h3>Kambing Guling </h3>
												<p>Yang mau nyobain rasa kambing utuh silahkan dicoba yang satu ini.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 40.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu16.jpg" class="img-responsive" alt="telor">
											</figure>
											<div>
												<h3>Telor dadar/Ceplok</h3>
												<p>Yang satu ini tambahan buat makan kite.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 6.000
										</div>
									</li>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="images/menu13.jpg" class="img-responsive" alt="telor">
											</figure>
											<div>
												<h3>Nasi Putih</h3>
												<p>Nasi putih hangat siap santap.</p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											Rp. 7.000
										</div>
									</li>
								</ul>
							</div>
						</div>


						<div class="row row-center">
							<div class="col-md-6">
								<div class="fh5co-food-menu to-animate-2">
									<h2 class="fh5co-drinks">Drinks</h2>
									<ul>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/drink1.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
												</figure>
												<div>
													<h3>Aneka Juice</h3>
													<p>Manisnya rasa buah membuat hati jadi senang.</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 15.000
											</div>
										</li>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/drink2.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
												</figure>
												<div>
													<h3>Mix Juice</h3>
													<p>Percampuran aneka buah membuat rasa baru di mulut.</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 18.000
											</div>
										</li>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/drink3.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
												</figure>
												<div>
													<h3>Es Kelapa Muda</h3>
													<p>Segernye Nampolll</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 20.000
											</div>
										</li>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/drink4.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
												</figure>
												<div>
													<h3>Es Jeruk/Panas</h3>
													<p>asem manis seger di mulut.</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 10.000
											</div>
										</li>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/drink5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
												</figure>
												<div>
													<h3>Es Lemon Tea</h3>
													<p>Asem seger di mulut.</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 8.000
											</div>
										</li>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/drink6.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
												</figure>
												<div>
													<h3>Es Teh Manis/Panas</h3>
													<p>Manis segerr di mulut.</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 5.000
											</div>
										</li>
									</ul>
								</div>
							</div> 
							<div class="row row-padded">
								<div class="col-md-6">
									<div class="fh5co-food-menu to-animate-2">
										<h2 class="fh5co-drinks">Drinks</h2>
										<ul>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
													</figure>
													<div>
														<h3>Es Teh Tawar</h3>
														<p>Bagi yang gak suka manis nih minumannye.</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp.4.000
												</div>
											</li>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/res_img_6.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
													</figure>
													<div>
														<h3>Teh Tawar Panas</h3>
														<p>Bagi yang gak suka manis dan pingin yang anget-anget nih minumannye.</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp. 2.000
												</div>
											</li>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/res_img_7.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
													</figure>
													<div>
														<h3>Soda Susu</h3>
														<p>Rasakan sensasinye!.</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp. 15.000
												</div>
											</li>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
													</figure>
													<div>
														<h3>Soda Gembira</h3>
														<p>Rasakan Sensasinye!.</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp.15.000
												</div>
											</li>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
													</figure>
													<div>
														<h3>Kopi Hitam</h3>
														<p>Kopi hitam pilihan, pas banget nih buat yang demen ngopi.</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp.5.000
												</div>
											</li>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/res_img_5.jpg" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
													</figure>
													<div>
														<h3>Air Mineral</h3>
														<p>Buat yang demen bening-bening.</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp.5.000
												</div>
											</li>
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
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/snack1.jpg" class="img-responsive" alt="kerupukB">
												</figure>
												<div>
													<h3>Kerupuk Bangka</h3>
													<p>Rasa Ikan Tenggiri, Gurih dan renyah!</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 7.000
											</div>
										</li>
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<img src="images/snack2.jpg" class="img-responsive" alt="emping">
												</figure>
												<div>
													<h3>Emping</h3>
													<p>Melinjo asli, super renyah</p>
												</div>
											</div>
											<div class="fh5co-food-pricing">
												Rp. 15.000
											</div>
										</li>							
									</ul>
								</div>
							</div> 
							<div class="row row-padded">
								<div class="col-md-6">
									<div class="fh5co-food-menu to-animate-2">
										<h2 class="fh5co-drinks">Snack</h2>
										<ul>
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<img src="images/snack3.jpg" class="img-responsive" alt="kerupukK">
													</figure>
													<div>
														<h3>Kerupuk kampung</h3>
														<p>Kriuk-kriuk sedaaap!!!</p>
													</div>
												</div>
												<div class="fh5co-food-pricing">
													Rp.2.000
												</div>
											</li>											
										</ul>
									</div>
								</div>
							</div>	
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

	<?php include('footer.php'); ?>
</body>
</html>

