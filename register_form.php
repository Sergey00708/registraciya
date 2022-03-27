<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col">
                <?php if(isset($_SESSION['error'])):?>
				<div class="alert alert-danger">
					<?php echo $_SESSION['error']; unset($_SESSION['error']);?>
				</div>
				<?php endif;?>
				<h1>Форма регистрации</h1>
	<form action="register.php" method="post">
		<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
		<input type="text" class="form-control" name="email" id="email" placeholder="Введите email"><br>
		<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль"><br>
		<button class="btn btn-success" type="submit">Зарегестрироваться</button>
	</form>
			</div>
		</div>
	</div>
</body>
</html>
