/**
*	Script for handling site-index creation dynamically from XML file.
*/

// When the page is loaded
$(document).ready(function() {
	// create new request
	var xhttp = new XMLHttpRequest();

	// Watch the xml doc for changes and parse if change is detected
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			parseXML(this);
		}
	}

	// Getting data from file and sending the data
	xhttp.open("GET", "../xml/web.xml", true);
	xhttp.send();

	// Instructions for what to do with the xml data
	function parseXML(xml) {
		// Get xml response
		var xmlDoc = xml.responseXML;
		// Setting up initial string var
		var string = "<ul>";

		// Loop through all of the page nodes in the xml doc
		var pages = xmlDoc.getElementsByTagName("page");
		for(i=0; i<pages.length; i++) {
			var npage = new page(pages[i]);
			string += npage.getListItem();
		}

		// Add the html to the page
		$("#output").append(string + "</ul>");
	}

	// Defining page object
	function page(aPage) {
		// Object properties
		this.title = aPage.getAttribute("title");
		this.url = aPage.getAttribute("url");
		this.heiarchy = aPage.getAttribute("heiarchy");

		// Object methods
		this.getListItem = function() {
			// Testing for the level that lists need to be nested
			if(this.heiarchy == "first-nested") {
				var string = "<ul><li><a href='" + path;
				string += this.url + "'>" + this.title + "</a></li>";
			} else if(this.heiarchy == "last-nested") {
				var string = "<li><a href='" + path;
				string += this.url + "'>" + this.title + "</a></li></ul>";
			} else if(this.heiarchy == "only-nested") {
				var string = "<ul><li><a href" + path;
				string += this.url + "'>" + this.title + "</a></li></ul>";
			} else {
				var string = "<li><a href='" + path;
				string += this.url + "'>" + this.title + "</a></li>";
			}

			// Returns the updated string
			return string;
		}
	}
});
