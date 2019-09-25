<?php
require("components/header.php");

$photos = ["Диваны", "Люстры", "Коврики", "Столы", "Кошачьи радости"];
$index = 0;
$num = count($items);

require("components/products_list.php");
require("components/footer.php");
?>
