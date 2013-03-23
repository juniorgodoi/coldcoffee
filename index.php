<!DOCTYPE html>
<!--[if lt IE 8]> <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
	<?php // IF SERVER ROOT ISSUES OCCURE, SEE README FOR INCLUDE PATH INFO
		set_include_path($_SERVER['DOCUMENT_ROOT']);include_once("assets/includes/master.php");
	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Create favicon.ico & apple-touch-icon.png in the root folder -->

    <?php 
	// global styles in  /assets/includes/css/
	template($styles);
	// global scripts in  /assets/includes/js/
	template($scripts);
    ?>

	<!-- *************************************************************
		This is the demo page stylesheet. 
		After you remove this, you can get to building your own!
	************************************************************** -->
	<link href="/assets/css/demo-styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- header template in /assets/includes/templates/ -->
<?php template($header); ?>

<div class="wrapper padding">
		<p class="temp-loc left">Header located in /assets/includes/templates/header.php</p>


		<div class="container padding rounded clear margin left">
			<h1 class="h1">Body Content</h1>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			
			<ul class="base-ul">
			   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
			   <li>Aliquam tincidunt mauris eu risus.</li>
			   <li>Vestibulum auctor dapibus neque.</li>
			</ul>
	       

		</div>

		<!-- sidebar template in /assets/includes/templates/ -->
		<?php template($sidebar); ?>


	<div class="clear"></div>
</div>

<!-- footer template in /assets/includes/templates/ -->
<?php template($footer); ?>
</body>
</html>