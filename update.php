<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id']; 

		$nama = $_POST['jenis'];
		$nama = $_POST['nama'];
		$deskripsi= $_POST['deskripsi'];
		$harga = $_POST['harga'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE menu SET id='$id',jenis='$jenis',nama='$nama',harga='$harga' WHERE id=$id");
	
	
	// Redirect to homepage to display updated user in list
	header("Location: tables.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{	
		$id = $_POST['id']; 
		$nama = $_POST['jenis'];
		$nama = $_POST['nama'];
		$deskripsi= $_POST['deskripsi'];
		$harga = $_POST['harga'];
	
}
?>
<html>
<body>
	<a href="tables.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
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
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>