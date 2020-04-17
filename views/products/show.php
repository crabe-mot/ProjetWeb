<div class="products_info">
    <a  class="product-image" href="static/images/<?= $product->image ?>">
        <img class="standard-size" src="static/images/<?= $product->image ?>" alt="<?= $product->name ?>" title="<?= $product->name ?>">
    </a>
    <h2 class="product-name"><?= $product->name ?></h2>
    <div class="product-desc"><?= $product->description ?></div>
    <div class="product-price">$ <?= $product->price ?></div>
</div>
