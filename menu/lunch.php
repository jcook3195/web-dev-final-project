<?php

$title = "Lunch";
$desc = "The Frozen Bean lunch options.";
$home = false;
$bdyClass = "lunch";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>
<div class="menu-container lunch hand-written center">
	<h1 class="menu-title">Lunch</h1>
	<p><strong>Monday - Friday</strong><br>
		11am - 2pm</p>
	<p>All meals served with pickle spear and chips.</p>
	<p><strong>7.00</strong></p>
	<p>Upgrade from chips to a <strong>4oz</strong> side for <strong>.50</strong></p>
	<h5>Choose your bread</h5>
	<p>Sourdough<br>
		Butered Croissant<br>
		Multigrain<br>
	Lettuce Wrap</p>
	<h5>Choose your topping</h5>
	<p>Chicken Salad<br>
		Ham and Pimento Cheese<br>
	Tuna Salad</p>
	<hr>
	<h4>Other Options</h4>
	<div class="one-half first menu-item">
		<p>Ham and Cheese Croissant (hot)</p>
	</div>
	<div class="one-half menu-item right">
		<p>4.00</p>
	</div>
	<div class="one-half first menu-item">
		<p>BLT on Sourdough Combo</p>
	</div>
	<div class="one-half menu-item right">
		<p>7.00</p>
	</div>
	<div class="one-half first menu-item">
		<p>California BLT on Multigrain Combo</p>
	</div>
	<div class="one-half menu-item right">
		<p>8.00</p>
	</div>
	<div class="clear"></div>
	<h5>Soup of the Day</h5>
	<p>8oz - 3.50<br>
	12oz - 4.50</p>
	<p>8oz soup with ham and cheese croissant - 6.50</p>
	<h5>Larger sides</h5>
	<p>8oz - 3.50<br>
	12oz - 4.25</p>
	<h5>Drinks</h5>
	<p>Sweet Tea<br>
		Lemondade<br>
	20oz - 1.59</p>
</div><!-- end menu-container lunch -->

<?php
	echo $config["footer"]();
?>