<section class="catalog">
  <div class="container">
    <h1 class="catalog-title">Каталог товаров</h1>
    <ul class="products-list">
      <?php while ($index < $num): ?>
      <li>
        <a class="product-card" href="product.php?product_id=1">
          <h3><?=$products[$index]['name']; ?></h3>
          <span class="price"><?=$products[$index]['price']; ?></span>
          <img src="<?=$products[$index]['photo']; ?>" width="156" height="120" alt="Напольная лампа «Мсеюлида»">
        </a>
      </li>
      <?php $index ++; ?>
      <?php endwhile; ?>
    </ul>
  </div>
</section>