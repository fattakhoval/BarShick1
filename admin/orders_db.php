<?php  
include "../connect-db.php";

$first = isset($_POST["first"])? $_POST["first"]: false;
$second = isset($_POST["second"])? $_POST["second"]: false;
$third = isset($_POST["third"])? $_POST["third"]: false;


if(isset($first)){
    $query = mysqli_query($con, "UPDATE `Orders` SET `Status`='Готовим'");

    echo "<script>
            alert(\"статус изменен!\");
            location.href='orders.php'
        </script>";
}else if(isset($second)){
    $query = mysqli_query($con, "UPDATE `Orders` SET `Status`='Доставка'");

    
    echo "<script>
            alert(\"статус изменен!\");
            location.href='orders.php'
        </script>";
}else if(isset($third)){
    $query = mysqli_query($con, "UPDATE `Orders` SET `Status`='Выполнено'");

    
    echo "<script>
            alert(\"статус изменен!\");
            location.href='orders.php'
        </script>";
}


?>