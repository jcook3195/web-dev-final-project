<?php

$title = "The Frozen Bean";
$desc = "Come on down to The Frozen Bean.";
$home = true;
$bdyClass = "home";
$config = include("includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);
?>

<div class="home-section section-2">
	<div class="wrapper">
		<div id="main-content" class="content-container center">
			<div class="one-third first">
				<div class="pad">
					<a href="<?php echo $config["url"]; ?>/recipes">
						<h3>Recipes</h3>
						<img src="<?php echo $config["url"]; ?>/images/recipes/turkey-panini.jpg" alt="Turkey Panini">
					</a>
				</div>
			</div>
			<div class="one-third">
				<div class="pad">
					<a href="<?php echo $config["url"]; ?>/catering">
						<h3>Catering</h3>
						<img src="<?php echo $config["url"]; ?>/images/fruit.jpg" alt="Bowl of fruit">
					</a>
				</div>
			</div>
			<div class="one-third">
				<div class="pad">
					<a href="<?php echo $config["url"]; ?>/about">
						<h3>About</h3>
						<img src="<?php echo $config["url"];?>/images/coffee-tablet.jpg" alt="Coffee and Tablet">
					</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div><!-- end .section-2 -->

<div class="home-section section-3">
	<div class="wrapper">
		<div id="main-content" class="content-container">
			<div class="one-third first">
				<a href="<?php echo $config["url"]; ?>/rewards"><img src="<?php echo $config["url"]; ?>/images/loyalty.png"></a>
			</div>
			<div class="two-thirds center">
				<div class="pad">
					<h2><a href="<?php echo $config["url"]; ?>/rewards">Join our loyalty program today!</a></h2>
					<p>We value our loyal customers and want to thank you by giving you coffee bucks to spend in store.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div><!-- end .section-3 -->

<div class="home-section section-4">
	<div class="wrapper">
		<div id="main-content" class="content-container center">
			<h3>Check out the lineup before you come see us.</h3>
			<div class="one-half first">
				<a href="<?php echo $config["url"]; ?>/menu/coffee.php">
					<h3>Coffee</h3>
					<img src="<?php echo $config["url"]; ?>/images/frothy-coffee.jpg" alt="Frothy Coffee">
				</a>
			</div>
			<div class="one-half">
				<a href="<?php echo $config["url"]; ?>/menu/froyo.jpg">
					<h3>Froyo</h3>
					<img src="<?php echo $config["url"]; ?>/images/froyo.jpg" alt="Cups of Froyo">
				</a>
			</div>
			<div class="one-half first">
				<a href="<?php echo $config["url"]; ?>/menu/lunch.jpg">
					<h3>Lunch</h3>
					<img src="<?php echo $config["url"]; ?>/images/cut-sandwich.jpg" alt="Sandwich">
				</a>
			</div>
			<div class="one-half">
				<a href="<?php echo $config["url"]; ?>/menu/bakery.jpg">
					<h3>Bakery</h3>
					<img src="<?php echo $config["url"]; ?>/images/bagel.jpg" alt="Bagel">
				</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div><!-- end .section-4 -->

<div class="home-section section-5">
	<div class="wrapper">
		<div id="main-content" class="content-container center">
			<h2>Have any questions? Head on over to the <a href="<?php echo $config["url"]; ?>/contact">contact page</a> and let us know!</h2>
		</div>
	</div>
</div><!-- end .section-5 -->
<div class="wrapper">
	<div id="main-content" class="content-container">

<?php
	echo $config["footer"]();
?>
