<?php
session_start();
$recepient = strip_tags($_SESSION['e-mail']);
$sitename = "nagel-mebel.by";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$type = trim($_POST["type"]);
$vis = trim($_POST["vis"]);
$shir = trim($_POST["shir"]);
$glyb= trim($_POST["glyb"]);


$message = "Имя: $name \nТелефон: $phone \nТип шкафа: $type \nВысота шкафа: $vis \nШирина шкафа: $shir \nГлубина шкафа: $glyb";
$pagetitle = "Заказ на оценку стоимости шкафа с сайта: \"$sitename\"";
$from_email="webmaster@nagel-mebel.by";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email"); 