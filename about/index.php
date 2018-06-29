<?php

$title = "About";
$desc = "About The Frozen Bean.";
$home = false;
$bdyClass = "about";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>

<div class="text-container">
	<p>The Frozen Bean was first opened in 2015 in the small town of Eastman, Georgia. Eastman was lacking a good coffee shop and a place for students to come hang out and get their homework done. Eastman also lacked anywhere to get a delicious sweet treat, so we decided to combine the two here at The Frozen Bean. Now you can get a sweet frozen treat, or a hearty cup of coffe. A delicious and satisfying lunch, or a yummy freshly baked cinnomon roll.</p>
	<p>Here at The Frozen Bean it has always been our mission to provide customers with the best service, freshest food, and best prices. IF you are unsatisfied with anything at The Frozen Bean in absolutely any way we encourage you to let us know so we may improve the experience for you and all of our other customers. We think any feedback is good feedback!</p>
	<p>While you're here you might as well check out our <a href="<?php echo $config["url"]; ?>/menu">menu</a> or <a href="<?php echo $config["url"]; ?>/contact">give us a shout</a>. Head on over to the <a href="<?php echo $config["url"]; ?>/order">order</a> page if you're already hooked and want to sink you're teeth in <strong>ASAP</strong>. We also offer <a href="<?php echo $config["url"]; ?>/catering">catering</a> and highly recommend you check out our <a href="<?php echo $config["url"]; ?>/rewards">rewards program</a> if you would like to be rewarded for being a loyal customer.</p>
	<p><strong>See you soon at The Frozen Bean!</strong></p>
</div>

<?php
	echo $config["hours"]();
	echo $config["footer"]();
?>