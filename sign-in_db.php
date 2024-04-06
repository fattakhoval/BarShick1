<?php
session_start();
require "connect-db.php";
$email = strip_tags(trim($_POST['email']));
$pass = strip_tags(trim($_POST['pass']));



    $result = "SELECT*FROM `Users` WHERE `Email`='$email' and `Password_hash` = '$pass'";

    
    $result1 = mysqli_query($con, $result);

    
    $user = mysqli_fetch_assoc($result1); // Конвертируем в массив
    var_dump($user);

if(count($user) == 0){
	echo "Такой пользователь не найден.";
	exit();
}
else if(count($user) == 1){
	echo "Логин или пароль введены неверно";
	exit();
}else{
    // setcookie('user', $user['user_id'], time() + 3600, "/");
    $_SESSION["user_id"] = $user["user_id"];

    header('Location: account.php');
}










