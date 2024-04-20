<?php 

session_start();
require "connect-db.php";

$user_id= $_SESSION["User_id"];

$query_users = mysqli_fetch_all(mysqli_query($con, "SELECT*FROM `Users` WHERE `User_id`= $user_id"));


//вся инфа о заказе

$query = mysqli_query($con, "SELECT * FROM `Orderlist` INNER JOIN `Orders` ON Orders.Order_id = Orderlist.Order_id 
    INNER JOIN `Product` ON Product.Product_id = Orderlist.Product_id");
$user_order = mysqli_fetch_all($query);

var_dump($user_order);

$queryOrder = mysqli_query($con, "SELECT * FROM `Orders` WHERE `User_id`= $user_id");
$order = mysqli_fetch_all($queryOrder);

var_dump($order);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <nav class="account_header">
        <ul>
            <li><a href="sign-out.php">Выход</a></li>
        </ul>
</nav>
</header>
<h1>Личный кабинет</h1>
    <h2>Пользователь:</h2>

    <div class="user_card">
        <div class="img"></div>

        <div class="account_main">
            <form action="edit-db.php" method='post'>
                <?php foreach($query_users as $item):?>
                    <label for="email">Почта</label>
                    <input type="email" value="<?=$item[1]?>"  id="email" name="email" required>
                    <label for="password">Пароль</label>
                    <input type="password" value="<?=$item[2]?>"  id="password" name="password" required>
                    <button>Изменить</button> 
                <?endforeach;?>
            </form>
        </div>

    </div>


    <h1>История заказов</h1> 
            <div class="cart_product"> 
                <?php foreach($order as $userord):?> 

                    
                    <div> 
                        <p id="textSostav">Заказ №: <?=$userord[0]?></p> 
                        <p>Дата заказа: <?=date("d.m.Y", strtotime($userord[2]))?>г.</p> 
                        <p>Стоимость заказа: <?=$userord[4]?> руб.</p> 
                        <p>Статус заказа: <?=$userord[3]?></p>
                    </div> 
                    <p id="textSostav">Состав заказа</p> 
                    <div class="sostavOrder"> 
                        <?php foreach($user_order as $ord):?> 
                            <?php if($ord[3] == $userord[0]):?> 
                                <div> 
                                    <!-- <img src="/imges/<?=$ord[10]?>" alt="продукт <?=$ord[13]?>">  -->
                                    <p>Название:<?=$ord[13]?></p> 
                                    <p>Кол-во: <?=$ord[3]?> шт.</p> 
                                    <p>Стоимость: <?=$ord[16]?> руб.</p> 
                                </div>  
                            <?php endif;?> 
                        <?php endforeach;?> 
                    </div> 
                <?php endforeach;?> 
            </div>


</body>
</html>