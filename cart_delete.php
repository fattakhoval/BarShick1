<?php 
require_once "connect-db.php";
session_start();

$IdCart = $_GET['IdProduct'];


unset($_SESSION['cart'][$IdCart]);

header('Location: /cart.php');
?>