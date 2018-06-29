<?php

$title = "Froyo";
$desc = "The Frozen Bean Froyo options.";
$home = false;
$bdyClass = "froyo";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);
?>

<div class="text-container">
	<p>The flavor possibilities are limitless for your Froyo here at the Frozen Bean. We have 12 different flavors, which include:</p>
	<ul>
		<li>Vanilla</li>
		<li>Chocolate</li>
		<li>Strawberry</li>
		<li>Key Lime</li>
		<li>S'mores</li>
		<li>Cookie Dough</li>
		<li>Mango</li>
		<li>Pineapple</li>
		<li>Birthday Cake</li>
		<li>Cookies and Cream</li>
		<li>Plus 2 specials that change every week!</li>
	</ul>
</div>

<?php
	echo $config["footer"]();
?>