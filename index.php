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
                <li><button type="button" class="a-btn"
                data-bs-toggle="modal" href="#exampleModalToggle">Личный кабинет</button></li>
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
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Вход</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="sign-in_db.php" method="post">
            <input type="text" name="email" class="form-control" id="email" placeholder="Почта" required><br>
            <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
            <button class="btn"> Войти </button><br>
        </form>         
        <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Нет аккаунта?</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Регистрация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="sign-up_db.php" method="post">
            <input type="text" name="email" class="form-control" id="email" placeholder="Почта" required><br>
            <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
            <button class="btn"> Войти </button><br>
        </form> 
        <button class="btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Есть аккаунт?</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>