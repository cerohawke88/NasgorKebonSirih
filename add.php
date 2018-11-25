<html>
<body>
	<a href="table.php"> </a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr> 
				<td>Nama Makanan</td>
				<td><input type="text" name="NamaMakanan"></td>
			</tr>
			<tr> 
				<td>Deskripsi</td>
				<td><input type="text" name="Deskripsi"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['jenis'];
		$nama = $_POST['nama'];
		$deskripsi= $_POST['deskripsi'];
		$harga = $_POST['harga'];
		
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(id,jenis,nama,gambar,deskripsi,harga) VALUES('$id','$jenis','$nama','$gambar','$harga')");
		
		// Show message when user added
		echo "User added successfully. <a href='table.php'></a>";
	}
	?>
</body>
</html>