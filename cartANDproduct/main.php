<?php
include_once "Product.php";
include_once "Cart.php";

$tovar1 = new Product("Молоко", "60", 1);
$tovar2 = new Product("Сахар", "80", 10);
$tovar3 = new Product("Соль", "30", 20);
$tovar4 = new Product("Спички", "20", 100);
$tovar5 = new Product("Вода", "40", 20);
$tovar6 = new Product("Мёд", "180", 10);




var_dump($tovar1);

$cart = new Cart();


$cart->setProduct($tovar1, $tovar2, $tovar3, $tovar4, $tovar5);


var_dump($cart);




