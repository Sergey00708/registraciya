<?php
include 'functions.php';
session_start();

$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];

$user = get_user_by_email($email);

if(!empty($user)) {
	$_SESSION['error'] = "Этот эл. адрес уже занят другим пользователем.";
	header('Location: /register_form.php');
	exit;
}

add_user($email,$pass,$login);

header('Location: /auth_form.php');
exit;

?>