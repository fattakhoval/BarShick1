<?php 
require "../connect-db.php";


$edit = isset($_POST["edit"])? $_POST["edit"]:false;
$recover = isset($_POST["recover"])? $_POST["recover"]:false;
$delete =  isset($_POST["delete"])? $_POST["delete"]:false;


$id_prod = $_POST["id_prod"];
$New_name = isset($_POST["prod_name"])? $_POST["prod_name"]:false;
$New_descr = isset($_POST["descr"])? $_POST["descr"]:false;
$New_price = isset($_POST["price"])? $_POST["price"]:false;
$image = isset($_POST["image"])? $_POST["image"]:false;
$New_image = $_POST["new_image"];
$id_categ = $_POST["categ"];

if(empty($edit)){
    if(!empty($New_image)){
        $query = mysqli_query($con, "UPDATE `Product` SET
         `Name`='$New_name',`Description`='$New_descr',`Category_id`=$id_categ,
         `Price`=$New_price,`Image`='$New_image' WHERE Product_id=$id_prod");

         echo "<script>
                    alert(\"Данные изменены!\");
                    location.href='products.php'
                </script>";
    }else {
        $query = mysqli_query($con, "UPDATE `Product` SET
        `Name`='$New_name',`Description`='$New_descr',`Category_id`=$id_categ,
        `Price`=$New_price WHERE Product_id=$id_prod");

        echo "<script>
                alert(\"Данные изменены!\");
                location.href='products.php'
            </script>";
    }
}

if(empty($recover)){
    $query = mysqli_query($con, "UPDATE `Product` SET `Status`='blocked' WHERE Product_id=$id_prod");

    echo "<script>
            alert(\"Товар неактивен!\");
            location.href='products.php'
        </script>";
}

if(empty($delete)){
    $query = mysqli_query($con, "UPDATE `Product` SET `Status`='activ' WHERE Product_id=$id_prod");

    echo "<script>
            alert(\"Товар активен!\");
            location.href='products.php'
        </script>";
}

?>