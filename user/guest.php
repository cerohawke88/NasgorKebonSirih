<?php
session_start();

if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../login.php";</script>';
}
?>