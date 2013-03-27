<?php
	/* Function to include template files */
	function template($inc=null){
		include_once($inc);
	}
	// Global scripts and styles
	$styles = "globals/styles.php";
	$scripts = "globals/scripts.php";
	$analytics = "globals/google-analytics.php";

	// HTML templates
	$header = "templates/header.php";
	$footer = "templates/footer.php";	
	$sidebar = "templates/sidebar.php";
?>
