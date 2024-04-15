<?php 

include "../connect-db.php";

$NewCateg = isset($_POST["cat_name"])? $_POST["cat_name"]: false;

$query_categ = mysqli_query($con, "INSERT INTO `Category`( `Name`) VALUES ('$NewCateg')");

if($query_categ){
    echo "<script>
                alert(\"Товар добавлен!\");
                location.href='categories.php'
            </script>";
}else {
    echo "<script>
                alert(\"Ошибка добавления товара!\");
                location.href='categories.php'
            </script>";
}



?>