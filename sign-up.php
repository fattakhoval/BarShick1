<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Вход/Регистрация</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"      rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-4">
<h1>Форма регистрации</h1>
<form action="sign-up_db.php" method="post">
	<input type="text" name="email" class="form-control" id="email" placeholder="Почта"><br>
	<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
	<button class="btn btn-success"> Зарегистрироваться </button><br>
    <a href="auth.php">Уже есть аккаунт</a>
</form> 
</div>
</body>
</html>
