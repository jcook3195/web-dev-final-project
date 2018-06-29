<?php

$title = "Bakery";
$desc = "The Frozen Bean bakery options.";
$home = false;
$bdyClass = "bakery";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>

<div class="text-container">
	<p>We always keep the freshest sweet treats available in our bakery. Freshly baked every single day, there is <em><strong>never</strong></em> a stale moment here at the frozen bean. Grab a steamy cup of coffee and a delicious treat from our bakery today!</p>
	<img class="center" src="<?php echo $config["url"]; ?>/images/doughnuts.jpg" alt="Piles of doughnuts">
</div>

<?php
	echo $config["footer"]();
?>