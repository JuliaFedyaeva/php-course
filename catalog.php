<?php
require("components/header.php");

$categories = ["Диваны", "Люстры", "Коврики", "Столы", "Кошачьи радости"];
$index = 0;
$num = count($items);

require("components/products_list.php");
require("components/footer.php");
?>
