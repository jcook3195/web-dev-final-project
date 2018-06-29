<?php

$title = "Coffee";
$desc = "The Frozen Bean coffee options.";
$home = false;
$bdyClass = "coffee";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);
?>

<div class="text-container">
	<p>No matter if you like your coffee black or with all the works, we have what it takes to satisfy any coffee junkie here at The Frozen Bean. Come grab a latte while you work on your school work on our FREE complimentary Wi-Fi, chill with friends on our comfortable couches while you enjoy your espresso shots, or swing by on your way to work in the mornings to get that cup of black coffee to get you moving.</p>
</div>
<div class="menu-container coffee hand-written center">
	<h1 class="menu-title">Coffee</h1>
	<div class="one-half first menu-item left">
		<p>Black Coffee</p>
	</div>
	<div class="one-half menu-item right">
		<p>1.80 | 2.10 | 2.50</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Espresso Shot</p>
	</div>
	<div class="one-half menu-item right">
		<p>1.70</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Mocha</p>
	</div>
	<div class="one-half menu-item right">
		<p>3.25 | 3.75 | 4.25</p>
	</div>
	<div class="one-half first menu-item left">
		<p>White Mocha</p>
	</div>
	<div class="one-half menu-item right">
		<p>3.25 | 3.75 | 4.25</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Salted Caramel Mocha</p>
	</div>
	<div class="one-half menu-item right">
		<p>3.55 | 3.95 | 4.45</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Latte</p>
	</div>
	<div class="one-half menu-item right">
		<p>2.90 | 3.40 | 3.90</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Caramel Mochiatto</p>
	</div>
	<div class="one-half menu-item right">
		<p>3.45 | 3.95 | 4.15</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Cappuccino</p>
	</div>
	<div class="one-half menu-item right">
		<p>3.00 | 3.50 | 4.00</p>
	</div>
	<div class="one-half first menu-item left">
		<p>Frappe</p>
	</div>
	<div class="one-half menu-item right">
		<p>4.25 | 4.50 | 4.75</p>
	</div>
	<div class="clear"></div>
	<div class="center">
		<p><em>caramel, salted caramel, vanilla, french vanilla, hazelnut
			cheesecake, white chocolate, chocolate mint, chocolate chip cookie dough</em></p>

		<p><strong>Sugar Free</strong> options available!</p>
	</div>
	<div class="one-half first menu-item">
		<p>Bottled Water</p>
	</div>
	<div class="one-half menu-item right">
		<p>1.00</p>
	</div>
	<div class="one-half first menu-item">
		<p>Hot Tea</p>
	</div>
	<div class="one-half menu-item right">
		<p>2.25 | 2.75 | 3.20</p>
	</div>
	<div class="one-half first menu-item">
		<p>Hot Chocolate</p>
	</div>
	<div class="one-half menu-item right">
		<p>2.05 | 2.55 | 3.25</p>
	</div>
	<div class="one-half first menu-item">
		<p>Steamed Milk/Milk</p>
	</div>
	<div class="one-half menu-item right">
		<p>1.60 | 2.10 | 2.60</p>
	</div>
	<div class="one-half first menu-item">
		<h5>Extra</h5>
		<p>Soy - .50<br>
		Syrup - .30<br>
		Shot - .70</p>
	</div>
	<div class="one-half menu-item right">
		<p>All Beverages Availalbe <strong>ICED</strong></p>
	</div>
	<div class="clear"></div>
</div><!-- end menu-conatiner coffee -->

<?php
	echo $config["footer"]();
?>