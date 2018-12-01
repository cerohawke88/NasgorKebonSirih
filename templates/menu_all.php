<?php
session_start();
require_once('../config.php');
$db = new Config();
$db->cekLogin();
$makanan = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Makanan'");
$minuman = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Minuman'");
$snack = $db->runQuery("SELECT * FROM menu WHERE jenis = 'Snack'");
?>
<div class="col-md-6">
	<div class="fh5co-food-menu to-animate-2">
		<h2 class="fh5co-dishes">FOOD</h2>
		<ul>
			<?php
				for ($i = 0; $i < count($makanan) / 2; $i++) {
					$item = $makanan[$i];
					include 'menu_makanan.php';
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
					include 'menu_makanan.php';
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
						include 'menu_minuman.php';
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
							include 'menu_minuman.php';
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
						include 'menu_snack.php';
					}
				?>
			</ul>
		</div>
	</div>
</div>