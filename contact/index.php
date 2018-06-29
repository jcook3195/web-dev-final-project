<?php

$title = "Contact";
$desc = "Contact The Frozen Bean today.";
$home = false;
$bdyClass = "contact";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);
?>

<div class="text-container">
	<p>The Frozen Bean<br>
		324 Oak Street, Eastman, GA,<br>
		(478) 374-5675<br>
		<a href="mailto:thefrozenbean@gmail.com">thefrozenbean@gmail.com</a></p>
	<p>Fill out this contact form with your questions or concerns and we will get back to you ASAP.</p>
</div>

<?php
	echo $config["forms"]($bdyClass);
?>

<?php
echo $config["hours"]();
echo $config["footer"]();
?>