<?php 
 include "../connect-db.php";


$NewPrice = isset($_POST["price"])?$_POST["price"]: false;
$NewTitle= isset($_POST["title"])?$_POST["title"]:false;
$NewDescr= isset($_POST["descr"])?$_POST["descr"]:false;
$id_cat = $_POST["cat"];
$NewImage = $_POST["newImage"];


$queryProd= mysqli_query($con,"INSERT INTO `Product`( `Name`, `Description`, `Category_id`, `Price`, `Image`) 
VALUES ('$NewTitle','$NewDescr',$id_cat,$NewPrice,'$NewImage')");




?>