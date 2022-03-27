<?php
session_start();
include 'functions.php';

$email = $_POST['email'];
$pass = $_POST['password'];

login($email, $pass);

header('Location: /home.php');
exit;

?>