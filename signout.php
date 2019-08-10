<?php
session_start(); 
include ("commons.php");
$_SESSION['isLoggedInToMetHostel'] = false;
header("Location: index.php");
die();
?>
