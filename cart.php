<?php
require("components/header.php");

$products = [
  0 => [
        'photo' => 'img/item-mseyulida.jpg',
        'name' => 'Лампа Мсеюлида',
        'price' => 4000
  ],

  1 => [
        'photo' => 'img/item-nnulm.jpg',
        'name' => 'Рабочий стол Ннулм',
        'price' => 5000
  ],

  2 => [
        'photo' => 'img/item-tre.jpg',
        'name' => 'Набор мебели Тре',
        'price' => 20000
  ]
];

$index = 0;
$num = count($products);

require("components/cart_info.php");
require("components/footer.php");
?>
