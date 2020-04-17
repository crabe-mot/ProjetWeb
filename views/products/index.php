<ul class="product-grid">
    <?php foreach ($products as $product): ?>
        <li class="product">



            <a  class="product-image" href="index.php?controller=products&action=show&id=<?= $product->id ?>">
                <img class="gallery" src="static/images/<?= $product->image ?>" alt="<?= $product->name ?>" title="<?= $product->name ?>">
            </a>
            <h2 class="product-name"><?= $product->name ?></h2>
            <div class="product-price">
                $ <?= $product->price ?>
            </div>

            
        </li>
    <?php endforeach ?>
</ul>
