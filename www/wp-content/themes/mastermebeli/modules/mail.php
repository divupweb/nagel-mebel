<?php
session_start();
$recepient = strip_tags($_SESSION['e-mail']);
$sitename = "nagel-mebel.by";
$phone = trim($_POST["phone"]);
$message = "Телефон: $phone";
$pagetitle = "Заказ на консультацию с сайта: \"$sitename\"";
$from_email="webmaster@nagel-mebel.by";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email");