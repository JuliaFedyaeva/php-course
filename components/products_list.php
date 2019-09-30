<section class="catalog">
  <div class="container">
    <h1 class="catalog-title">Каталог товаров</h1>

    <ul class="products-list">
    <!-- Студенты пишут циклы ниже -->
      <?php while ($index < $number): ?>
      <li>
        <a class="product-card" href="#">
          <h3><?=$param[$index]['name']; ?></h3>
          <span class="price"><?=$param[$index]['price']; ?></span>
          <img src="<?=$param[$index]['photo']; ?>" width="156" height="120" alt="<?=$param[$index]['name']; ?>">
          <ul class="parametrs">
            <?php while ($index_color < $colors): ?>
            <li><?=$param[$index]['colors'][$index_color]; ?></li>
            <?php $index_color ++; ?>
            <?php endwhile; ?>
          </ul>
        </a>
      </li>
      <?php $index ++; ?>
      <?php endwhile; ?>
    </ul>
  </div>
</section>