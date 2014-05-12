<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page" id="page">
	<header class="header" role="banner">

		<div id="logo"><?php if ( ! is_singular() ) {echo '<h1>';} ?><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e( get_bloginfo('name'), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo('name') ); ?></a><?php if ( ! is_singular() ) {echo '</h1>';} ?></div>
		<nav id="menu" class="nav" role="navigation">
			<div id="search">
			<?php get_search_form(); ?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</header>
	<div class="main" role="main">