<?php

function get_user_by_email($email)
{
    $pdo = new PDO("mysql:host=localhost;dbname=workbase;", "root", "root");
    $sql1 = 'SELECT `email` FROM `users` WHERE email=:email';
    $run1 = $pdo->prepare($sql1);
    $run1->execute(['email'=>$email]);
    return $run1->fetch(PDO::FETCH_ASSOC);
}

function add_user($email,$pass,$login)
{
    $pdo = new PDO("mysql:host=localhost;dbname=workbase;", "root", "root");
    $sql = "INSERT INTO `users`(`login`, `email`, `password`) VALUES (:login,:email,:password)";
    $run = $pdo->prepare($sql);
    $run->execute(['login'=>$login,'email'=>$email,'password'=>$pass]);
}

function login($email, $pass)
{
   $user = get_user_by_email($email);
   if (empty($user)) {
    $_SESSION['error'] = 'Логин или пароль введены неверно.';
    header("Location: /auth_form.php");
    exit;
   }if(!password_verify($pass, $user['password'])) {
		$_SESSION['error'] = 'Логин или пароль введены неверно.';
		header("Location: /auth_form.php");
		exit;
   }
   $_SESSION['user'] = $user;

	return true;
}
?>