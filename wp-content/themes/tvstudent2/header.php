<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="wp-content/themes/tvstudent/tvstudent.css" type="text/css" media="all">
<script type="text/javascript" src="wp-content/themes/tvstudent/js/jquery-1.10.2.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div class="header_menu <?php if(current_user_can('manage_options')){echo 'admin';}?> ropa-sans"><?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?></div>	
<div id="page" class="hfeed">
	<div class="logo-front tvs_logo"></div>
	<div class="header_breaker"></div>

	<div id="main" <?php if ( 'post' == get_post_type() || ('page' == get_post_type() && !is_front_page())){echo 'class="post"' ;}?>>
		<?php if ('post' == get_post_type() || ('page' == get_post_type() && !is_front_page())) : ?>
			<nav id="access" role="navigation" class="font-ubuntu" style="<?php if(is_front_page()){echo 'margin:25px 0px;';}else{echo 'margin: 0px;';}?>">
				<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
			</nav><!-- #access -->
		<?php endif; ?>
