<?php  
include "../connect-db.php";

$query_order = mysqli_query($con, "SELECT * FROM `Orders`");
$order = mysqli_fetch_all($query_order);

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
<section class="product_all">

<?php foreach ($order as $ord) {?>
    

    <form action="orders_db.php" method="post" class="">

        <div class="edit-prod_form">
            <label for="id_prod">id</label>
            <input readonly value="<?=$cat[0]?>" name="id_prod" required>

            <label for="cat_name">Название:</label>
            <input type="text" name="cat_name" value="<?=$cat[1]?>" required>

            <button name="edit">Изменить</button>
                    <?php 
                        if($ord[3]== 'Создан'){
                            echo "<button name='first' value='$ord[3]'>Готовим</button>";
                        }else if($ord[3]== 'Готовим') {
                            echo "<button name='second' value='$ord[3]'>Доставка</button>";
                        }else if($ord[3]== 'Доставка') {
                            echo "<button name='third' value='$ord[3]'>Выполнено</button>";
                        }else {
                            echo "<button name='third' value='$ord[3]'>Выполнено</button>";
                        }
                    
                    ?>

        </div>
    </form>
    <?}?>

</body>
</html>