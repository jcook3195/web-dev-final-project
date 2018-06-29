<?php

$title = "Catering";
$desc = "The Frozen Bean catering plans.";
$home = false;
$bdyClass = "catering";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>

<div class="text-container">
	<p>Let The Frozen Bean turn your run-of-the-mill event into the party everyone will be talking about for years with one of our catering plans. Each is great but one may work better for your event than the others so be sure to read them carefully and call us if you have any questions!</p>
</div>

<div class="table-container">
	<table class="pricing-table center">
		<tr>
			<th class="standard">Basic</th>
			<th class="preferred">Plus<br><em>most popular</em></th>
			<th class="standard">Premium</th>
		</tr>
		<tr>
			<td class="standard">Feeds up to 20 people.</td>
			<td class="preferred">Feeds up to 40 people.</td>
			<td class="standard">Feeds 60 or more people.</td>
		</tr>
		<tr>
			<td class="standard">Three different meals to choose from.</td>
			<td class="preferred">Ten different meals to chosse from.</td>
			<td class="standard">Choose from everything on the menu.</td>
		</tr>
		<tr>
			<td class="standard">Perfect for small parties.</td>
			<td class="preferred">Perfect for large parties.</td>
			<td class="standard">Perfect for formal events.</td>
		</tr>
		<tr>
			<td class="standard">$299</td>
			<td class="preferred">$499</td>
			<td class="standard">$549</td>
		</tr>
		<tr>
			<td class="standard"><a class="button" href="<?php echo $config["url"]; ?>/contact/index.php">Book</a></td>
			<td class="preferred"><a class="button" href="<?php echo $config["url"]; ?>/contact/index.php">Book</a></td>
			<td class="standard"><a class="button" href="<?php echo $config["url"]; ?>/contact/index.php">Book</a></td>
		</tr>
	</table>
</div><!-- end table-container -->

<?php
	echo $config["footer"]();
?>