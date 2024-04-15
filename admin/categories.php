<?php 
include "../connect-db.php";

$query_cat = mysqli_query($con, "SELECT * FROM `Category`");
$cat_result = mysqli_fetch_all($query_cat);

include "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btn_foot">
  добавить
</button>

<!-- Modal -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">добавление категории</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="createNewCategory.php" method="post" class="createNewProduct">
            <label for="price">Название категории</label>
            <input type="text" name="cat_name" value = "">
                
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button class="btn btn-primary"  >добавить</button>
      </div>
    </div>
    </form>
  </div>
</div>


<!-- <div class="products_conteiner">
    <form action="createNewProduct.php" method="post" class="createNewProduct">
            <label for="price">Цена</label>
            <input type="text" name="price" value = "">
            <label for="newImage">Загрузите изображение:</label>
            <input type="file" name="newImage" id="">
            <label for="title">Название</label>
            <input type="text" name="title" value = "">
            <label for="descr">Описание</label>
            <textarea name="descr"></textarea>
            <select name="cat" id="">
                <?php foreach($cat_result as $value_1){?>
                    <option value="<?=$value_1[0]?>"

                    ><?=$value_1[1]?>
                    </option>
                <?}?>
            </select>
    
        <button class="btn" >добавить</button>

    </form>
</div> -->

<section class="product_all">

<?php foreach ($cat_result as $cat) {?>
    

    <form action="categories_db.php" method="post" class="">

        <div class="edit-prod_form">
            <label for="id_prod">id</label>
            <input readonly value="<?=$cat[0]?>" name="id_prod" required>

            <label for="cat_name">Название:</label>
            <input type="text" name="cat_name" value="<?=$cat[1]?>" required>

            <button name="edit">Изменить</button>
                    <?php 
                        if($cat[2]== 'blocked'){
                            echo "<button name='recover' value='$cat[2]'>Восстановить</button>";
                        }else {
                            echo "<button name='delete' value='$cat[2]'>Удалить</button>";
                        }
                    
                    ?>

        </div>
    </form>
    <?}?>


</section>
</body>
</html>