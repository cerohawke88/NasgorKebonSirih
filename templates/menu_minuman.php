<li>
	<div class="fh5co-food-desc">
		<figure>
			<img src="<?php echo $item['gambar'] ?>" class="img-responsive" alt="Minuman segar">
		</figure>
		<div>
			<h3><?php echo $item['nama'] ?></h3>
			<p><?php echo $item['nama'] ?></p>
		</div>
	</div>
	<div class="fh5co-food-pricing">
		Rp.<?php echo $item['harga'] ?>
	</div>
	<form class="form-inline" method="post" style="border: none; margin-right: -60px;">
		<div class="form-group">
			<input type="number" name="quantity" min="1">
		</div>
		
		<div class="form-group">
			<button type="submit" class="btnPesan">Pesan</button>
		</div>
	</form>
</li>