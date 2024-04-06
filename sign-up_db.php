<?php 
session_start();
require "connect-db.php";
$email =strip_tags(trim($_POST['email'])); // Удаляет все лишнее и записываем значение в переменную //$login
$pass =strip_tags(trim($_POST['pass'])); 

if(mb_strlen($email) < 5 || mb_strlen($email) > 100){
	echo "Недопустимая длина логина";
	exit();
}


$result1 = mysqli_query($con,"SELECT * FROM `Users` WHERE `Email` = '$email'");
$user1 = mysqli_fetch_assoc($result1); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}else {

    mysqli_query($con,"INSERT INTO `Users` (`Email`, `Password_hash`,`Bonus_points`)VALUES('$email', '$pass', '0')");
    // setcookie('user', $user1['user_id'], time() + 3600, "/");

	$_SESSION["user_id"] = mysqli_insert_id($con);

    header('Location: account.php');
}
