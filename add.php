<?php
require_once('config.php');
include('server.php');
$db = new Config();
$menu = $db->runQuery("SELECT * FROM menu");
?>
<html>
<body>
	<a href="tables.php"> </a>
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
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>