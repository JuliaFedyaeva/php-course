<section class="catalog">
  <div class="container">
    <h1 class="catalog-title">Каталог товаров</h1>

    <ul class="products-list">
      <?php while ($index < $number): ?>
      <li>
        <a class="product-card" href="product.php?product_id=1">
          <h3><?=$param[index]['name']; ?></h3>
          <span class="price"><?=$param[index]['price']; ?></span>
          <img src="<?=$param[index]['photo']; ?>" width="156" height="120" alt="<?=$param[index]['name']; ?>">
          <ul class="parametrs">
            <li><?=$param[index]['height']; ?></li>
            <li><?=$param[index]['width']; ?></li>
            <li><?=$param[index]['weight']; ?></li>
            <li><?=$param[index]['color']; ?></li>
          </ul>
        </a>
      </li>
      <?php $index ++; ?>
      <?php endwhile; ?>
    </ul>
  </div>
</section>