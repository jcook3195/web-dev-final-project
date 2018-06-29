<?php

$title = "Menu";
$desc = "The Frozen Bean Menu options.";
$home = false;
$bdyClass = "menu";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>

<div class="text-container">
	<p>Here at the Frozen Bean we offer a wide variety of the finest gourmet coffees, twelve different kinds of delicious frozen yogurt with over 100 toppings to choose from, freshly baked pastries and melt-in-your-mouth cakes, and many different café style lunch specials.</p>

	<p>Click below to view all the options we have in each category.</p>
</div>

<div class="menu-grid">
	<div class="one-half first menu-link center">
		<a href="<?php echo $config["url"]; ?>/menu/coffee.php">
			<h2 class="menu-title">Coffee</h2>
			<img src="<?php echo $config["url"]; ?>/images/frothy-coffee.jpg" alt="Placeholder Image">
		</a>
	</div>
	<div class="one-half menu-link center">
		<a href="<?php echo $config["url"]; ?>/menu/froyo.php">
			<h2 class="menu-title">Froyo</h2>
			<img src="<?php echo $config["url"]; ?>/images/froyo.jpg" alt="Placeholder Image">
		</a>
	</div>
	<div class="one-half first menu-link center">
		<a href="<?php echo $config["url"]; ?>/menu/lunch.php">
			<h2 class="menu-title">Lunch</h2>
			<img src="<?php echo $config["url"] ?>/images/cut-sandwich.jpg" alt="Placeholder Image">
		</a>
	</div>
	<div class="one-half menu-link center">
		<a href="<?php echo $config["url"]; ?>/menu/bakery.php">
			<h2 class="menu-title">Bakery</h2>
			<img src="<?php echo $config["url"] ?>/images/bagel.jpg" alt="Placeholder Image">
		</a>
	</div>
	<div class="clear"></div>
</div><!-- end menu-grid -->

<?php
	echo $config["footer"]();
?>