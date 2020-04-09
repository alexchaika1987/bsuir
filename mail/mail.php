<?php

$recepient = "alexchaika1987@gmail.com";
$siteName = "bestproperty.ml";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$repeat_password = trim($_POST["repeat_password"]);

$message = "Имя: $name \nТелефон: $phone \nПочта: $email";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
