<?php

session_start();

$_SESSION['session_email'] = '';
session_destroy();
header("location:login.php?logout=success");

?>