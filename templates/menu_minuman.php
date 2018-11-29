<li>
	<div class="fh5co-food-desc">
		<figure>
			<img src="<?php echo $item['gambar'] ?>" class="img-responsive" alt="Minuman segar">
		</figure>
		<div>
			<h3><?php echo $item['nama'] ?></h3>
			<p><?php echo $item['deskripsi'] ?></p>
		</div>
	</div>
	<div class="fh5co-food-pricing">
		Rp.<?php echo $item['harga'] ?>
	</div>
	<?php
	// $qty = isset($_SESSION['menu_cart']) ? ($_SESSION['menu_cart'][$item['id']] ?? 0) : 0;
	?>
	<form class="form-inline" style="border: none; margin-right: -60px;">
		<div class="form-group">
			<input type="number" name="jumlah" id="jumlah<?php echo $item['id'] ?>" min="1">
		</div>
		
		<div class="form-group">
			<input type="hidden" name="hidden_name" id="nama<?php echo $item["id"] ?>" value="<?php echo $item["nama"] ?>" />
			<input type="hidden" name="hidden_price" id="harga<?php echo $item["id"] ?>" value="<?php echo $item["harga"] ?>" />
			<input type="button" class="btnPesan add_to_cart" value="Pesan" name="add_to_cart" id="<?php echo $item['id'] ?>" />
		</div>
	</form>
</li>