<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">initial-scale=1.0">
	<title><?php bloginfo( 'name' ); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>">/style.css
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap-grid.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap-reboot.min.css" type="text/css"/>
</head>
<body>



<container class="cr-nav">
<ul class="menu">

<?php
wp_nav_menu(
array(
'theme_location' =>'header_menu',
'container_class' =>'cr-nav',
'items_wrap' =>'<ul coass="menu">%3$s</ul>'
)
);
?>
</ul>
</container>