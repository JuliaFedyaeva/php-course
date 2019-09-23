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
$photo_cur = 2;
$photo_num = get_colors_num($id);

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

while ($photo_cur < $photo_num) {
  keks_log($photo_cur);
  $photo_cur = $photo_cur + 1;
}

require("components/product_info.php");
require("components/footer.php");
?>
