<?php
session_start();
require_once('config.php');
$db = new Config();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$users = $db->runQuery("SELECT * FROM users WHERE id='$id'");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
    $saldo = mysqli_real_escape_string($db->getCon(), $_POST['saldo']);
    
  	$db->runQuery("UPDATE users SET saldo='$saldo' WHERE id='$id'");
  	
  	echo "<font color='green'>Data added successfully.";
	header("location:user.php");
  	exit;
}
?>
<html>
<body>
	<a href="user.php">Home</a>
	<br/><br/>
	
	<form name="form2" method="post" action="updatesaldo.php?id=<?php echo $id ?>">
		<table border="0">
			<tr> <?php foreach($users as $row) { ?>
				<td>nama</td>
				<td><a type="text" name="nama"><?php echo $row['username']?></a></td>
			</tr>
			<tr> 
				<td>email</td>
				<td><a type="text" name="email"><?php echo $row['email']?></a></td>
			</tr>
			<tr> 
				<td>saldo</td>
				<td><input type="text" name="saldo" value="<?php echo $row['saldo']?>"></td>
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