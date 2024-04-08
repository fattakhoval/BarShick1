<?php 

session_start();
require "connect-db.php";
$user_id= $_SESSION["user_id"];

var_dump($user_id);

$query_users = mysqli_fetch_assoc(mysqli_query($con, "SELECT*FROM `Users` WHERE `User_id`= $user_id"));
var_dump($query_users);
var_dump("SELECT*FROM `Users` WHERE `User_id`= $user_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Личный кабинет</h1>
    <h2>Пользователь:</h2>

    <p>Почта: <?=$query_users["Email"]?></p>
</body>
</html>