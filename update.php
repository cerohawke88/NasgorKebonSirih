<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id']; 

	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$saldo = $_POST['saldo'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET id='$id',name='$name',email='$email',password='$password',saldo='$saldo' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{	
	$id = $user_data['id'];
	$name = $user_data['name'];
	$email = $user_data['email'];
	$password = $user_data['password'];
	$saldo = $user_data['saldo'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>username</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td>saldo</td>
				<td><input type="text" name="saldo"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>