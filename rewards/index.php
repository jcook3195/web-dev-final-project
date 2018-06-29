<?php

$title = "Rewards";
$desc = "The Frozen Bean rewards.";
$home = false;
$bdyClass = "rewards";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>

<div class="text-container">
	<h2>Join our loyalty program today!</h2>
	<img src="<?php echo $config["url"]; ?>/images/loyalty.png" alt="Loyalty rewards card">
	<p>Each visit adds more Coffee Bucks.</p>

	<p>As a Coffee Bucks Rewards member, get more of what you love at The Frozen Bean 
	when you turn purchases into dollars off future purchases. The more bucks 
	you earn, the bigger your reward.</p>

	<ol>
		<li><strong>JOIN</strong><br>
		To register, download the Coffee Bucks® app, use an in-store tablet, or register online. Fill out your Interests Page to earn 50 bucks right off the bat.</li>

		<li><strong>EARN</strong><br>
		Every $10 you spend on at The Frozen Bean earns 100 bucks. Checking in through the app earns you 10 bucks. Checking in with friends adds 10 more bucks per friend.</li>

		<li><strong>REDEEM</strong><br>
		Choose an item from our Rewards Roster and give your registered phone number to your barista/cashier and that item will be deducted from your bill.</li>
	</ol>
</div>

<?php
	echo $config["footer"]();
?>
