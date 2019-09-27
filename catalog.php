<?php
require("components/header.php");

$param = [
  0 => [
  'photo' => 'img/item-mseyulida.jpg',
  'name' => 'Лампа Мсеюлида',
  'price' => 4000,
  'colors' => ["Красный", "Зелёный", "Розовый", "Леопардовый"]
  ],

  1 => [
  'photo' => 'img/item-nnulm.jpg',
  'name' => 'Рабочий стол Ннулм',
  'price' => 5000,
  'colors' => ["Синий", "Желтый", "Непонятный"]

  ], 

  2 => [
  'photo' => 'img/item-tre.jpg',
  'name' => 'Набор мебели Тре',
  'price' => 20000,
  'colors' => ["Лиловый", "Пятнистый"]
  ], 

  3=> [
  'photo' => 'img/item-blempere.jpg',
  'name' => 'Кресло Бадета',
  'price' => 500,
  'colors' => ["Один цвет"]
  ],

  4 => [
  'photo' => 'img/item-nmyao.jpg',
  'name' => 'Подушка Нмяо',
  'price' => 1500,
  'colors' => ["Бордовый", "Черепаший", "Тигровый"]
  ]
];

$index = 1;
$number = count($param);

require("components/products_list.php");
require("components/footer.php");
?>
