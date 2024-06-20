<?php 
session_start();
require_once "connect-db.php";
$id_user = $_SESSION["User_id"];
// $Images = isset($_POST["Images"])?$_POST["Images"]:false;
$IdProduct = isset($_POST["IdProduct"])?$_POST["IdProduct"]:false;
$Name = isset($_POST["Name"])?$_POST["Name"]:false;
$count = isset($_POST["Count"])?$_POST["Count"]:false;


$orderdate = date("y-m-d"); 

$totalPrice = 0;
foreach($_SESSION['cart'] as $i=>$ord){
    $totalPrice += $ord['Price'] * $ord['Count'];
}

$bonus = 0;
foreach($_SESSION['cart'] as $i=>$ord){
    $bonus += $totalPrice * 0.05;
}

var_dump($count);

$query = mysqli_query($con, "INSERT INTO `Orders`( `User_id`, `Date_of_order`, `Status`, `Total_price`, `Used_bonuses`, `Accrued_bonuses`)
VALUES ('$id_user','$orderdate',
'Оформлен','$totalPrice',
'0','$bonus')");

$updateBonuses = mysqli_query($con, "UPDATE `users` SET `Bonus_points` = `Bonus_points` + $bonus WHERE `User_id` = $id_user");

if($query){

    $orser = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `Orders` ORDER BY Order_id DESC LIMIT 1"));
var_dump($orser);
    foreach($_SESSION['cart'] as $i=>$ord){
        $id_order = $orser["Order_id"];
        $idProduct = $ord['IdProduct'];
        $count = $ord['Count'];
        var_dump($count);
        $orderlist = mysqli_query($con, "INSERT INTO `Orderlist`
        (`Order_id`, `Product_id`, `count`) 
        VALUES ($id_order,$idProduct, $count)");

    }
    echo "<script>
    alert(\"заказ оформлен!\");
    location.href='cart.php';
    </script>";



}else {
    echo "<script>
    alert(\"ошибка!\");
    location.href='cart.php';
    </script>";
}


// var_dump($id_order);


// if($orderlist) {
//     echo "<script>
//   alert(\"заказ обавлен!\");
//   location.href='cart.php';
// </script>";
// }
?>

<!-- <div class="div">
    <input type="text"><a href="?id_order=<?=$orser['id_order']?>">kjljkujk</a>

</div> -->