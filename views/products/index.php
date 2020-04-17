<ul>
<?php foreach ($products as $product): ?>
    <li>
	<div class="products" style="margin-left: 0px;">

		<a  href="index.php?controller=products&action=show&id=<?= $product->id ?>">
			<div class="products_info">
				<h3><?= $product->name ?></h3>
				<div class="info">
					<p>$ <?= $product->price ?></p>
					<p class="see_details">See products details...</p>
				</div>
			</div>
		</a>
	</div>
    </li>
<?php endforeach ?>
</ul>
