<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title><?php wp_title(''); ?></title>
    	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type='image/x-icon'>
    	<link rel="hortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type='image/x-icon'>
    	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/custom/imgs/apple-touch-icon.png" type='image'>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/libs/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
	      <script src="<?php echo get_template_directory_uri(); ?>/assets/libs/js/html5shiv.min.js"></script>
	      <script src="<?php echo get_template_directory_uri(); ?>/assets/libs/js/respond.min.js"></script>
	    <![endif]-->
	    <?php wp_head(); ?>
	</head>
  	<body>