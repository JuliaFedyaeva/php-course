<section class="catalog">
  <div class="container">
    <h1 class="catalog-title">Каталог товаров</h1>

    <ul class="products-list">
    <!-- Студенты пишут циклы ниже -->
    <?php foreach( $items as $key => $value ): ?>
      <li>
        <a class="product-card" href="#">
          <h3><?=$value['name']; ?></h3>
          <span class="price"><?=$value['price']; ?></span>
          <img src="<?=$value['photo']; ?>" width="156" height="120" alt="<?=$value['name']; ?>">
          <ul class="parametrs">
            <?php while ($index_color < $colors): ?>
            <li><?=$items[$index]['colors'][$index_color]; ?></li>
            <?php endwhile; ?>
          </ul>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>