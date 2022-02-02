<?php
include "../model/login.php";

$mail = (isset($_POST['email-input'])) ? $_POST['email-input'] : "";
$password = (isset($_POST['password-input'])) ? $_POST['password-input'] : "";

$b = new Login($mail,$password);
$b->loginUser();


