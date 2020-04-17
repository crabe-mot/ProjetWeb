<div class="products_info">
    <a  class="product-image" href="static/images/<?= $product->image ?>">
        <img class="standard-size" src="static/images/<?= $product->image ?>" alt="<?= $product->name ?>" title="<?= $product->name ?>">
    </a>
    <h2><?= $product->name ?></h3>
        <p><?= $product->description ?></p>
        <span>$ <?= $product->price ?></span>
        <span class="see_details">See products details...</span>
</div>
