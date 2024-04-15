<?php 
require "../connect-db.php";


$edit = isset($_POST["edit"])? $_POST["edit"]:false;
$recover = isset($_POST["recover"])? $_POST["recover"]:false;
$delete =  isset($_POST["delete"])? $_POST["delete"]:false;

$id_prod = $_POST["id_prod"];
$cat_name = isset($_POST["cat_name"])? $_POST["cat_name"]: false;

if(empty($edit)){
    if(!empty($cat_name)){
        $query= mysqli_query($con, "UPDATE `Category` SET `Name`='$cat_name' WHERE Category_id=$id_prod");
    
        echo "<script>
                    alert(\"Данные изменены!\");
                    location.href='categories.php'
                </script>";
    }else{
        echo "<script>
                    alert(\"ошибка!\");
                    location.href='categories.php'
                </script>";
    }
}

if(empty($recover)){
    $query = mysqli_query($con, "UPDATE `Category` SET `Status`='blocked' WHERE Category_id=$id_prod");

    echo "<script>
            alert(\"Товар неактивен!\");
            location.href='categories.php'
        </script>";
}

if(empty($delete)){
    $query = mysqli_query($con, "UPDATE `Category` SET `Status`='activ' WHERE Category_id=$id_prod");

    echo "<script>
            alert(\"Товар активен!\");
            location.href='categories.php'
        </script>";
}


?>