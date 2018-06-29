<?php

$title = "Order Online";
$desc = "The Frozen Bean order online.";
$home = false;
$bdyClass = "order";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);
?>

<div class="text-container">
	<p>Fill out this custom order form to place your order, and give us about 20 minutes to have it ready. Then come in to pick up your order and pay at the counter!</p>

	<p><em>(Note: Some larger or specialty orders might take longer than 20 minutes or require you to prepay. Please be on the lookout for a call from us after placing your order in case there are any issues.)</em></p>

</div>

<?php
	echo $config["forms"]($bdyClass);
?>

<?php
	echo $config["hours"]();
	echo $config["footer"]();
?>