<?php
session_start();
require_once('config.php');
$db = new Config();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$menu = $db->runQuery("SELECT * FROM menu WHERE id='$id'");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$nama = mysqli_real_escape_string($db->getCon(), $_POST['nama']);
    $deskripsi= mysqli_real_escape_string($db->getCon(), $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($db->getCon(), $_POST['harga']);
    
  	$db->runQuery("UPDATE menu SET nama='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id='$id'");
  	
  	echo "<font color='green'>Data added successfully.";
	header("location:tables.php");
  	exit;

}

?>
<html>
<body>
	<a href="tables.php">Home</a>
	<br/><br/>
	
	<form name="form2" method="post" action="update.php?id=<?php echo $id ?>">
		<table border="0">
			<tr> <?php foreach($menu as $row) { ?>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama']?>"></td>
			</tr>
			<tr> 
				<td>deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $row['deskripsi']?>"></td>
			</tr>
			<tr> 
				<td>harga</td>
				<td><input type="text" name="harga" value="<?php echo $row['harga']?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $row['id']?>"></td>
				<?php } ?>
				<td><input type="submit" name="POST" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>