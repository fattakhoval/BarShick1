<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Товары</a></li>
                <li><a href="">О нас</a></li>
                <li><button type="button" class="a-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Личный кабинет</button></li>
                <li><a href="">Корзина</a></li>
                
            </ul>
        </nav>
        <div class="header_bg">
            <div class="header_text">
                <h1>ENJOY EVERY SIP</h1>
                <p>The ultimate refreshing drink to enjoy in every festival</p>
                <button class="btn_my">Купить</button>
            </div>
            <div class="pot_img">
                <img src="imges/pot.png" alt="" class="pot">
                <img src="imges/fizz.png" alt="" class="fizz">
            </div>

            
        </div>
    </header>

    <main>


    <nav>
        
    </nav>
        <div class="container_my">
            <div class="card">
                <img src="imges/product.png" alt="">
                <p>fizz</p>
                <button class="btn_my btn_buy">КУпить</button>
            </div>


            <div class="card">
                <img src="imges/product.png" alt="">
                <p>fizz</p>
                <button class="btn_my btn_buy">Купить</button>
            </div>

            <div class="card">
                <img src="imges/product.png" alt="">
                <p>fizz</p>
                <button class="btn_my btn_buy">Купить</button>
            </div>

            <div class="card">
                <img src="imges/product.png" alt="">
                <p>fizz</p>
                <button class="btn_my btn_buy">Купить</button>
            </div>

            <div class="card">
                <img src="imges/product.png" alt="">
                <p>fizz</p>
                <button class="btn_my btn_buy">Купить</button>
            </div>
        </div>
    </main>

    <footer>
        <div class="logo">
            <img src="imges/fizz.png" alt="">
        </div>

        <div class="links">
            <ul>
                <li><a href="">qwertyuio</a></li>
                <li><a href="">qwertyuio</a></li>
                <li><a href="">qwertyuio</a></li>
                <li><a href="">qwertyuio</a></li>
                <li><a href="">qwertyuio</a></li>
            </ul>
        </div>

        <div class="contacts">
        <ul>
                <li>qwertyuio</li>
                <li>qwertyuio</li>
                <li>qwertyuio</li>
                <li>qwertyuio</li>
                <li>qwertyuio</li>
            </ul>
        </div>
    </footer>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container mt-4">
<h1>Вход</h1>
<form action="sign-in_db.php" method="post">
	<input type="text" name="email" class="form-control" id="email" placeholder="Почта"><br>
	<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>

	<button class="btn"> Войти </button><br>
    <a href="sign-up.php">нет аккаунта?</a>
</form> 
</div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
</body>
</html>