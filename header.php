<!DOCTYPE>
<html>
<head>
<?php wp_head(); ?>
<title> <?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php  bloginfo('stylesheet_url'); ?>">
</head>

<body class="bi">
<?php wp_nav_menu(array('container_class'=>'menubar'));?>
