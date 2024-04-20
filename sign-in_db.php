<?php
require "connect-db.php";
$email = strip_tags(trim($_POST['email']));
$pass = strip_tags(trim($_POST['pass']));

$result =  mysqli_query($con,"SELECT*FROM `Users` WHERE `Email`='$email' and `Password_hash` = '$pass'");

$user = mysqli_fetch_assoc($result); // Конвертируем в массив
if(empty($user)){
	echo "Такой пользователь не найден.";
	exit();
}else{
    session_start();

    $_SESSION["User_id"] = $user["User_id"];

    header('Location: account.php');
}
?>