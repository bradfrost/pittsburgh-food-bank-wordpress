<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php include (TEMPLATEPATH . '/includes/head.php');  ?>
<body <?php body_class(); ?>>
<div class="page" id="page">	
	<header class="header" role="banner">
		<div class="lc">
			<a href="/" rel="home" class="logo-link" tabindex="1"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo" alt="Greater Pittsburgh Community Food Bank, a member of Feeding America" /></a>
			
			<a href="#nav" class="nav-toggle nav-toggle-menu"><span class="icon-menu2"></span><span class="nav-toggle-label">Menu</span></a>
			
			<div class="header-nav-container">
				<nav id="nav" class="nav" role="navigation">
					<ul class="nav-action-list">
						<li><a href="/get-help">Get Help<span class="icon-arrow-right5"></span></a></li>
						<li><a href="/give-help">Give Help<span class="icon-arrow-right5"></span></a></li>
					</ul>
					<?php wp_nav_menu( array( 'theme_location' => 'donate-menu' ) ); ?>
				</nav><!--end .nav-->
			</div>
		</div>
	</header>
	<main class="main" role="main">