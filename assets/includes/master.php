<?php
	/* Function to include template files */
	function template($inc=null){
		include_once($inc);
	}
	// Global scripts and styles
	$styles = "assets/includes/globals/styles.php";
	$scripts = "assets/includes/globals/scripts.php";
	$analytics = "assets/includes/globals/google-analytics.php";

	// HTML templates
	$header = "assets/includes/templates/header.php";
	$footer = "assets/includes/templates/footer.php";	
	$sidebar = "assets/includes/templates/sidebar.php";
?>
