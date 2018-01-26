<?php
session_start();
$recepient = strip_tags($_SESSION['e-mail']);
$sitename = "nagel-mebel.by";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$cena = trim($_POST["cena"]);
$r_1= trim($_POST["r_1"]);
$r_2= trim($_POST["r_2"]);
$v_mod= trim($_POST["v_mod"]);
$m_mod= trim($_POST["m_mod"]);


$message = "Имя: $name \nТелефон: $phone \nОриентировочная цена в белоруссских рублях: $cena \nРазмер первой стенки: $r_1 \nРазмер второй стенки: $r_2 \nВысота модулей: $v_mod \nТип модулей: $m_mod";
$pagetitle = "Заказ на оценку стоимости кухни с сайта: \"$sitename\"";
$from_email="webmaster@nagel-mebel.by";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email"); 