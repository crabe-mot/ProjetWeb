<ul>
<?php foreach ($products as $product): ?>
    <li>
	<div class="products" style="margin-left: 0px;">

		<a  href="/home.php?controller=products&action=show&id=<?= $product->id ?>">
			<div class="products_info">
				<h3><?= $product->description ?></h3>
				<div class="info">
					<span><?= $product->price ?></span>
					<span class="see_details">See products details...</span>
				</div>
			</div>
		</a>
	</div>
    </li>
<?php endforeach ?>
</ul>
