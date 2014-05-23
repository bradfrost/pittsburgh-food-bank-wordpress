<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(' | ', true, 'right'); ?> <?php echo get_bloginfo ( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6629892/627864/css/fonts.css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page" id="page">
	<!-- Begin .header -->
	<header class="header" role="banner">
		<div class="lc">
			<a href="/" rel="home" class="logo-link" tabindex="1"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo" alt="Greater Pittsburgh Community Food Bank, a member of Feeding America" /></a>
			<a href="#search-form" class="nav-toggle nav-toggle-search"><span class="icon-search"></span></a>
			<a href="#nav" class="nav-toggle nav-toggle-menu"><span class="icon-menu2"></span><span class="nav-toggle-label">Menu</span></a>
			<div class="header-nav-container">
				<?php get_search_form(); ?>
				<nav id="nav" class="nav" role="navigation">
					<ul class="nav-action-list">
						<li><a href="/get-help">Get Help<span class="icon-arrow-right5"></span></a></li>
						<li><a href="/get-involved">Give Help<span class="icon-arrow-right5"></span></a></li>
					</ul>
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav><!--end .nav-->
			</div><!--end .header-nav-container-->
		</div><!--end .lc-->
	</header>
	<!-- End .header -->
	<main class="main" role="main">