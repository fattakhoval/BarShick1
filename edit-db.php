<?php 
session_start();
require "connect-db.php";

$user_id = $_SESSION['User_id'];
$NewEmail = trim($_POST['email']);
$Newpass = trim($_POST['password']);


$changeUser = mysqli_query($con , "UPDATE `Users` SET `Email`='$NewEmail',`Password_hash`=$Newpass,`Bonus_points`=0 WHERE `User_id`=$user_id");


if($changeUser){
    echo "<script>
    alert(\"Данные успешно изменены\");
    location.href='account.php';
    </script>";
}
?>