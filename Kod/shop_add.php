<?php

session_start();
require_once 'connect.php';

$id_buyer = $_SESSION['user']['id'];
$id_product = $_POST['product_id'];

mysqli_query($connect, "INSERT INTO `shopping_cart` (`id_buyer`, `id_product`) 
  VALUES ('$id_buyer', '$id_product')");


$_SESSION['message'] = 'Товар добавлен!';
header('Location: ../Page/shop.php');

