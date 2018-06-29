<?php

/***

	This file includes the footer for the site. 

***/

$config = include("config.php");

?>

			</div><!-- end content-container -->
		</div><!-- end wrapper -->
	</main>

<footer>
		<div class="wrapper">
			<div class="one-third first">
				<nav class="footer-nav">
					<div class="one-half first">
						<ul>
							<li><a href="<?php echo $config["url"]; ?>">Home</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu">Menu</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/coffee.php">Coffee</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/froyo.php">Froyo</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/bakery.php">Bakery</a></li>
							<li><a href="<?php echo $config["url"]; ?>/menu/lunch.php">Lunch</a></li>
						</ul>
					</div>
					<div class="one-half">
						<ul>
							<li><a href="<?php echo $config["url"]; ?>/about">About</a></li>
							<li><a href="<?php echo $config["url"]; ?>/order">Order</a></li>
							<li><a href="<?php echo $config["url"]; ?>/catering">Catering</a></li>
							<li><a href="<?php echo $config["url"]; ?>/recipes">Recipes</a></li>
							<li><a href="<?php echo $config["url"]; ?>/contact">Contact</a></li>
							<li><a href="<?php echo $config["url"]; ?>/rewards">Rewards</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</nav>
			</div>
			<div class="two-thirds">
				<div class="map-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3376.422901236774!2d-83.17827578574014!3d32.192833420850285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f10a18270d82ed%3A0x34d1327f3b2f9db9!2sThe+Frozen+Bean!5e0!3m2!1sen!2sus!4v1510882354790" width="400" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="clear"></div>
			<div class="text-container center">
				<p><a href="<?php echo $config["url"]; ?>/about/site-index.php">Site Map</a></p>
			</div>
		</div><!-- end wrapper -->
		<div class="creds-container center">
			<p class="creds">The Frozen Bean &copy; <?php echo date("Y"); ?> || Web Design by Group 2</p>
		</div>
	</footer>
<script src="<?php echo $config["path"]; ?>/scripts/form-handling.js"></script>
<script src="<?php echo $config["path"]; ?>/scripts/script.js"></script>
<script src="<?php echo $config["path"]; ?>/scripts/smooth-scroll.js"></script>
</body>
</html>