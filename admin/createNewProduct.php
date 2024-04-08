<?php 
 include "../connect-db.php";


$NewPrice = isset($_POST["price"])?$_POST["price"]: false;
$NewTitle= isset($_POST["title"])?$_POST["title"]:false;
$NewDescr= isset($_POST["descr"])?$_POST["descr"]:false;
$id_cat = $_POST["cat"];
$NewImage = $_POST["newImage"];


$queryProd= mysqli_query($con,"INSERT INTO `Product`( `Name`, `Description`, `Category_id`, `Price`, `Image`, `Status`) 
VALUES ('$NewTitle','$NewDescr',$id_cat,$NewPrice,'$NewImage', 'active')");

if($queryProd){
    echo "<script>
                alert(\"Товар добавлен!\");
                location.href='products.php'
            </script>";
}else {
    echo "<script>
                alert(\"Ошибка добавления товара!\");
                location.href='products.php'
            </script>";
}


?>