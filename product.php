<?php
require("products_db.php");
require("components/header.php");

$id = $_GET["product_id"];
$title = get_product_title($id);
$img_url = get_img_url($id);
$price = 2000;
$discount = 1000;
$is_new = true;
$is_last = true;
$product_class = "item";
$features = ["Натуральные материалы", "Экологичность", "Большой срок службы", "Гарантия возврата"];
$index = 0;
$num = count($features);

if ($discount > 0) {
  $price_with_discount = $price - $discount;
}

if ($discount > 1400 || $is_last) {
  $product_class = $product_class . " item-hot";
  keks_log($product_class);
};

if ($is_new) {
  $product_class = $product_class . " item-new";
}

require("components/product_info.php");
require("components/footer.php");
?>
