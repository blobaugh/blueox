<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="<?php bloginfo('name'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_search()) { // disable search engine indexing on search result pages ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title("");?> &raquo; <?php bloginfo('name'); ?></title>
	<meta name="title" content="<?php wp_title("");?> &raquo; <?php bloginfo('name'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>
	<div id="page-wrap">

		<div id="header" class="container_12">
			<div class="head_logo">
				<div class="logo">
					<a href="<?php echo home_url(); ?>" title="return to the homepage" id="logo">
						<?php // just add logo.png to the images directory and it will load here ?>
					  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name');?> logo" />
					</a>
				</div>
			</div>

			<div class="nav_menu">
				<?php wp_nav_menu( array('theme_location' => 'primary_nav' )); ?>
			</div>	
		
		</div> <!-- #header -->
