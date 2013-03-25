ColdCoffee
==========

ColdCoffee PHP Template System

**TEMPLATE LOCATIONS**

Templates located in /assets/includes/templates.

Global styles & scripts in /assest/includes/globals.

Master.php (located in /assets/includes) contains all variables for
templates. You can add in new variable paths or just refer to them by
using <?php template("templates/foo.php"); ?>


**SERVER INCLUDE PATH**

If you're on a shared hosting package, or other non-vps, there may be some DOCUMENT_ROOT errors.
At the head of each page, you'll see -- set_include_path($_SERVER['DOCUMENT_ROOT']) -- This sets
the global include path for all php template() include functions to the server root.

On a shared server, the DOCUMENT_ROOT isn't always the website's root--but instead it's your
server's /public_html/ directory (or similar root directory). To avoid this problem,
use a relative path for the include path.

	<?php 
		set_include_path("");include_once("assets/includes/master.php");
	?>
	This sets the include path to the current directory. This should go on your site's
	index.php file. This is set by default, but for consistency's sake I like to
	see it written out.

	<?php 
		set_include_path("../");include_once("assets/includes/master.php");
	?>
	This sets the include path up a directory.
	Use this if you're page is www.domain.com/about/index.php

Keep jumping up a directory for each subdirectory you create.


