<?php include('akses.php'); ?>
<html>
<head>
	<title>User</title>
</head>
<body>
 
	<div style="text-align:center">
		<h2>Guest Area</h2>
		<p><a href="index.php">Home</a> / <a href="../logout.php">Logout</a></p>
 
		<p>Selamat datang di Guest Area, Anda Login dengan username <?php echo $_SESSION['username']; ?></p>
	</div>
 
</body>
</html>