ColdCoffee
==========

ColdCoffee PHP Template System

**SETUP**

Just clone or download the zip file, and use it as your website's starting point. From there, add and
edit templates, create new styles, etc. A local PHP environment is required. On Mac, use MAMP. For PC, use XAMPP.

Basic templates are already created for you and are set up in the index.php file. Header, Sidebar, and Footer
are the default templates. Styles and Scripts are the other global assets for the site. Any styles or scripts that need to
be included on each page of your site go here. Any reoccurring code (like nav bars, etc.) can go in the header or footer
templates. Thanks for trying out ColdCoffee!


**TEMPLATE USE**

On each page, in the head you'll see...

	<?php set_include_path($_SERVER['DOCUMENT_ROOT'] . "assets/includes/"); include_once("master.php"); ?>

This sets the include path to the root of the server, and then includes the master.php file.
For DOCUMENT_ROOT problems on shared servers, see "server include path" below.

Each template is loaded on the page with <?php template( $template_name ); ?>

It's just a php include_once(); but I like the look better and it's less to type. The template(); function
is declared in master.php.

All template variables are in the master.php file. You can also just use <?php template( "templates/the-template.php" ); ?>
This is made easier with the set_include_path() function so you'll have better consistency across the site without worrying
about server root paths.


**TEMPLATE LOCATIONS**

Templates are located in /assets/includes/templates/ - 
These are basically snippets of reoccurring html 

Global styles & scripts in /assest/includes/globals/ -
These are styles, scripts, and plugins you want throughout your website.

Master.php is located in /assets/includes/ - 
This contains all the template variables.


**RETINA IMAGE SWAPPING**
The retina magic happens in /assets/js/retina.js. Any html image you want 2x-ed, just add class="2x" to it.
I've also added some basic retina CSS code to get started with that, but the CSS differs on each element.



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


