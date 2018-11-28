<?php

session_start();

include 'config.php';

$db = new Config();

 foreach($_SESSION["menu_cart"] as $keys => $values) {
	$username = $_SESSION['username'];
    $menu = $values['nama'];
    $id_menu = $values['id'];
    $jumlah = $values['jumlah'];
    $harga = $values['harga'] * $values['jumlah'];
    $total_harga = 0;
    $total_harga = $total_harga + $harga;
    $waktu = $_GET['waktu-ambil'];
    $waktusql = date("d/m/Y H:i:s",strtotime($waktu));
    $notes = $_GET['notes'];
 }

 	$saldo = $db->runQuery("SELECT saldo FROM users WHERE username = '$username'");
 	

 	// var_dump($saldo);
 	// echo $saldo;

 	if ($saldo >= $total_harga) {
	 	$db->runQuery("INSERT INTO orders (username, total_harga, catatan, waktu_ambil) 
	 		VALUES ('$username', '$total_harga', '$notes', '$waktu')");
	 	$orderBaru = $db->runQuery("SELECT id FROM orders WHERE username = '$username' ORDER BY id DESC LIMIT 1");
	 	$id_order = reset($orderBaru)['id'];
	 	$db->runQuery("INSERT INTO orders_detail (id_order, username, id_menu, nama, harga, jumlah) 
	 		VALUES ('$id_order', '$username', '$id_menu', '$menu', '$harga', '$jumlah')");
	 	// $saldo - $total_harga;
 		$_SESSION['success'] = 'Sukses!';
 		header('location: confirm-order.php');
 	} else {
 		$_SESSION['failed'] = 'Maaf, saldo anda kurang. Silakan hubungi administrator untuk isi saldo.';
 	}




?>