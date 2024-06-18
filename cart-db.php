<?php
session_start();
require_once "connect-db.php";
$id_user = $_SESSION["User_id"];
$id_prod = $_POST["id_product"];

// var_dump($_SESSION['cart']);

$result = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM Orders WHERE User_id = $id_user"));
if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = [];  
}

$productFound = false;
foreach ($_SESSION['cart'] as $i => $item){
  if ($item['IdProduct'] == $id_prod) {
      $_SESSION['cart'][$i]['Count'] += 1;
      $productFound = true;
      break;
  }
}

if(!$productFound){
    array_push($_SESSION['cart'], [
      "IdProduct"=>$_POST['id_product'],
      "Count"=>1,
      "Price"=>$_POST['price'],
      "Name"=>$_POST['name_product'],
  ]);
  }
  header('Location: /cart.php');
