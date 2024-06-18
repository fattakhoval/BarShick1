<?php 
session_start();
require_once "connect-db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script scr="js/jquery-3.7.1.js"></script>
    <script src="js/cart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jsquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="in-check" id="in-check">
        <div class="unit" id="cards" >
            
      
            <?php foreach($_SESSION['cart'] as $i=>$item): var_dump($item);?>
             <form action="order.php" method="post">
                <div>
                    <!-- <img src="imges/<?=$item['Images']?>" height ='300px' width= '300px' alt="" name="Images"> -->
                </div>
                <div class="info_card">
                <div class="card">
                                    <img src="imges/product.png" alt="">
                                    <!-- <input hidden name="id_product" value="<?=$prod[0]?>"></input>
                                    <input hidden name="price" value="<?=$prod[4]?>"></input>
                                    <input hidden name="name_product" value="<?=$prod[1]?>"></input> -->

                                    
                                    <!-- <p name="price"><?=$prod[4]?></p> -->
                                    <!-- <p name="name_product"><?=$prod[1]?></p> -->
                                    
                                </div>
                    <p name="IdProduct" value="<?=$item['IdProduct']?>">ID <b><?=$item['IdProduct']?></b></p>
                    <p name="Name">Название <b><?=$item['Name']?></b></p>
                    <p>Кол-во: <input type="number" name="Count" class="description-div-button1" 
                    value="<?=$item["Count"]?>" min = "1" max = "10"> шт.</p>
                    <p name="totalPrice">Итоговая сумма товара <b><?=$item['Price'] * $item['Count']?> руб.</b></p>
                </div>
                <div class="delete">
                    <a href="cart_delete.php?IdProduct=<?=$i?>">Удалить товар</a>
                </div>
                
             
             <?endforeach;?>
            <button>Оформить заказ</button>
       </form>
        </div>
    </div>
  
</body>
</html>