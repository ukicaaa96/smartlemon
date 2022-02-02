<?php
session_start();
include "../model/registration.php";

$mail = (isset($_POST['email-input'])) ? $_POST['email-input'] : "";
$name = (isset($_POST['name-input'])) ? $_POST['name-input'] : "";
$password = (isset($_POST['password-input'])) ? $_POST['password-input'] : "";
$password2 = (isset($_POST['password2-input'])) ? $_POST['password2-input'] : "";

$b = new Registration($name,$mail,$password,$password2);
$b->registerUser();


