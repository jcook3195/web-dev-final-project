<?php
	$root = $_SERVER["DOCUMENT_ROOT"];
	// Development
	//$path = "/final_project";
	// Production
	$path = "/jordan.cook";

	// Development
	/*return array(
		"root" 		=>	$root,
		"path" 		=>	$path,
		"url"		=> "http://localhost".$path,
		"header" 	=>	function($title, $desc, $home, $bdyClass) {
			require_once("header.php");
		},
		"footer" 	=>	function() {
			require_once("footer.php");
		},
		"forms"		=> function($bdyClass) {
			require_once("form-handling.php");
		},
		"hours"		=> function() {
			require_once("hours.php");
		}
	);*/

	// Production
	return array(
		"root" 		=>	$root,
		"path" 		=>	$path,
		"url"		=>	"http://studentweb.mga.edu".$path,	 
		"header" 	=>	function($title, $desc, $home, $bdyClass) {
			require_once("header.php");
		},
		"footer" 	=>	function() {
			require_once("footer.php");
		},
		"forms"		=> function($bdyClass) {
			require_once("form-handling.php");
		},
		"hours"		=> function() {
			require_once("hours.php");
		}
	);
?>