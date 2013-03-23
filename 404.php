<!DOCTYPE html>
<!--[if lt IE 8]> <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head><?php set_include_path($_SERVER['DOCUMENT_ROOT']);include_once("assets/includes/master.php");?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Create favicon.ico & apple-touch-icon.png in the root folder -->

    <?php 
	// global styles in  /assets/includes/css
	template($styles);
	// global scripts in  /assets/includes/js
	template($scripts);
    ?>
	<link href="/assets/css/demo-styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php template($header); ?>

<div class="wrapper padding">
    <h1 class="h1">404 Not Found</h1>
</div>

<?php template($footer); ?>
</body>
</html>