<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<title><?php bloginfo( 'name' )?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( "container"); ?>>
<header class="site-header">
 <h1><a href="<?php echo home_url() ?>"> <?php bloginfo('name')?></a></h1>
 <h5><?php bloginfo( 'description' )?></h5>
</header>  