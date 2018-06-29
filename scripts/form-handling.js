
$(document).ready(function() {

	// Contact form validation
	$('#c-submit').click(function(event) {
		// get form field values
		var fname = $('#c-fname').val();
		var lname = $('#c-lname').val();
		var email = $('#c-email').val();
		var phone = $('#c-phone').val();
		var comments = $('#c-comments').val();

		cvalidate();

		function cvalidate() {
			
			// initial validation variable
			var isValid = true;

			if(fname == "") {
				$('#errFName').text("Please enter first name.");
				isValid = false;
			} else {
				$('#errFName').text("");
			}

			if(lname == "") {
				$('#errLName').text("Please enter a last name.");
				isValid = false;
			} else {
				$('#errLName').text("");
			}

			if(email == "") {
				$('#errEmail').text("Please enter a valid email.");
				isValid = false;
			} else {
				$('#errEmail').text("");
			}

			if(phone == "") {
				$('#errPhone').text("Please enter a valid phone number");
				isValid = false;
			} else {
				$('#errPhone').text("");
			}

			if(comments == "") {
				$('#errMessage').text("Please tell us how we may help you.");
				isValid = false;
			} else {
				$('#errMessage').text("");
			}

			if(isValid) {
				$('#cFrmSuccess').text("Thank you for contacting us! We will be back in touch ASAP.");
			} else {
				$('#cFrmSuccess').text("");
			}
		}
	});

	// Order form validation
	$('#o-submit').click(function(event) {
		// get form field values
		var fname = $('#txtFName').val();
		var lname = $('#txtLName').val();
		var phone = $('#inputTel').val();
		var payment = $('#paymentMethod').val();
		var order = $('#txtOrder').val();

		ovalidate();

		function ovalidate() {

			// initial validation variable
			var isValid = true;
			
			if(fname == "") {
				$('#errFName').text("Please enter your first name.");
				isValid = false;
			} else {
				$('#errFName').text("");
			}

			if(lname == "") {
				$('#errLName').text("Please enter your last name.");
				isValid = false;
			} else {
				$('#errLName').text("");
			}

			if(phone == "") {
				$('#errPhone').text("Please enter your phone number.");
				isValid = false;
			} else {
				$('#errPhone').text("");
			}

			if(payment == "") {
				$('#errPayment').text("Please select payment method.");
				isValid = false;
			} else {
				$('#errPayment').text("");
			}

			if(order == "") {
				$('#errOrder').text("Please describe your order.");
				isValid = false;
			} else {
				$('#errOrder').text("");
			}

			if(isValid) {
				$('#oFrmSuccess').text("Thank you for placing your order! We will see you soon.");
			} else {
				$('#oFrmSuccess').text("");
			}
		}
	});

	
});