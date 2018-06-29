<?php

/***

	This file handles the logic of all forms on the site.

***/

$config = include("config.php");

if($bdyClass == "contact") :

?>
<div class=form-container>
	<form id="contact-form">
		<fieldset>
			<legend>Get in Touch</legend>
			<div class="one-half first">
				<label for="c-fname">First Name</label>
				<input id="c-fname" type="text" name="c-fname">
				<p id="errFName" class="error"></span>
			</div>
			<div class="one-half">
				<label for="c-lname">Last Name</label>
				<input id="c-lname" type="text" name="c-lname">
				<p id="errLName" class="error"></p>
			</div>
			<div class="one-half first">
				<label for="c-email">Email</label>
				<input id="c-email" type="email" name="c-email">
				<p id="errEmail" class="error"></p>
			</div>
			<div class="one-half">
				<label for="c-phone">Phone Number </label>
				<input id="c-phone" name="c-phone" placeholder="(###) ###-####">
				<p id="errPhone" class="error"></p>
			</div>
			<div class="clear"></div>
			<label for="c-comments">How may we help you?</label>
			<textarea id="c-comments" name="c-comments"></textarea>
			<p id="errMessage" class="error"></p>
			<div class="one-half first">
				<input type="reset" value="Reset Form" class="button">
			</div>
			<div class="one-half">
				<input id="c-submit" type="button" name="submit" value="Submit" class="button">
			</div>
			<div class="clear"></div>
		</fieldset>
	</form>
	<h1 id="cFrmSuccess" class="success"></h1>
	</div>
</div>

<?php

endif;

if($bdyClass == "order") :

?>

<div class=form-container>
	<p>If you need a reminder of our options, take a look at our <a href="<?php echo $config["url"]; ?>/menu" target="_blank">menu page</a>.</p>
	<form id="order-form" action="success.php">
		<fieldset>
			<legend>Order Online</legend>
			<div class="field-container">
				<label>Pickup Type:</label>
				<input type="radio" name="pickuptype" value="walkIn" checked>Walk In
				<input type="radio" name="pickuptype" value="driveThru">Drive Thru
				<input type="radio" name="pickuptype" value ="eatIn">Eat In
			</div>
			<div class="one-half first">
				<label for="txtFName">First Name: </label>
				<input type="text" id="txtFName">
				<p id="errFName" class="error"></p>
			</div>
			<div class="one-half">
				<label for="txtLName">Last Name: </label>
				<input type="text" id="txtLName">
				<p id="errLName" class="error"></p>
			</div>
			<div class="one-half first">
				<label for="inputTel">Telephone Number: </label>
				<input type="tel" id="inputTel" placeholder="(###) ###-####">
				<p id="errPhone" class="error"></p>
			</div>
			<div class="one-half">
				<label for="paymentMethod">Payment Method: </label>
				<select id="paymentMethod">
					<option value="">Select One</option>
					<option value="cash">Cash</option>
					<option value="debit_credit">Debit/Credit</option>
					<option value="coffeeBucks">Coffee Bucks</option>
				</select>
				<p id="errPayment" class="error"></p>
			</div>
			<div class="field-container">
				<label for="txtOrder">Enter Order: </label>
				<textarea id="txtOrder"></textarea>
				<p id="errOrder" class="error"></p>
			</div>
		<div class="one-half first">
				<input type="reset" value="Reset Form" class="button">
			</div>
			<div class="one-half">
				<input id="o-submit" type="button" name="submit" value="Submit" class="button">
			</div>
			<div class="clear"></div>
		</fieldset>
	</form>
	<h1 id="oFrmSuccess" class="success"></h1>
</div>

<?php 

endif;

?>