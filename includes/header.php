<?php

/***

	This file includes the header for the site. 

***/

$config = include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $desc; ?>">
	<link rel="icon" type="img/ico" href="<?php echo $config["path"]; ?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo $config["path"]; ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo $config["path"]; ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo $config["path"]; ?>/css/slicknav.min.css">
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Dosis|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="<?php echo $config["path"]; ?>/scripts/jquery.slicknav.min.js"></script>
	<script src="<?php echo $config["path"]; ?>/scripts/form-handling.js"></script>
	<!--[if lt IE 9]>
		<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
</head>
<body class="<?php echo $bdyClass; ?>">
	<header>
		<div class="wrapper header-wrapper">
			<div class="logo-container">
				<a href="<?php echo $config["url"]; ?>">
					<img class="logo" src="<?php echo $config["path"]; ?>/images/logo.jpg" alt="The Frozen Bean Logo" width="150" height="150">
				</a>
			</div>
			<nav class="main-nav">
				<ul id="menu">
					<li><a href="<?php echo $config["url"]; ?>">Home</a></li>
					<li><a href="<?php echo $config["url"]; ?>/about">About</a></li>
					<li class="dropdown"><a href="<?php echo $config["url"]; ?>/menu">Menu</a>
						<ul class="sub-nav">
							<li><a href="<?php echo $config["url"]; ?>/menu/coffee.php">Coffee</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/froyo.php">Froyo</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/bakery.php">Bakery</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/lunch.php">Lunch</a></li>
						</ul>
					</li>
					<li><a href="<?php echo $config["url"]; ?>/order">Order</a></li>
					<li><a href="<?php echo $config["url"]; ?>/catering">Catering</a></li>
					<li><a href="<?php echo $config["url"]; ?>/recipes">Recipes</a></li>
					<li><a href="<?php echo $config["url"]; ?>/contact">Contact</a></li>
					<li><a href="<?php echo $config["url"]; ?>/rewards">Rewards</a></li>
				</ul>
			</nav>
		</div><!-- end wrapper -->
	</header>
	<main>

	<?php // Conditional header based on type of page
		if($home == true) {
	?>
		<div class="jumbotron center">
			<div class="wrapper">
				<div class="home-cta-container-table">
					<div class="home-cta-container-table-cell">
						<h1 class="home-cta">The Frozen Bean is the place to go for gormet coffee and delicious frozen yogurt.</h1>
						<p><a class="button cta-button" href="<?php echo $config["url"]; ?>/order">Place Order</a></p>
					</div><!-- end home-cta-container-table-cell -->
				</div><!-- end home-cta-container-table -->
			</div><!-- end wrapper -->
		</div><!-- end jumbotron -->
	<?php } else {

	?>
		<div class="title-container center">
			<div class="wrapper">
				<h1 class="title"><?php echo $title; ?></h1>
			</div>
		</div>

		<div class="wrapper">
			<div id="main-content" class="content-container">
	<?php
	}

	?>

	