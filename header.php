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
	<!-- Begin .header -->
	<header class="header" role="banner">
		<div class="lc">
			<a href="/" rel="home" class="logo-link" tabindex="1"><img src="../../images/logo-white.svg" class="logo" alt="Greater Pittsburgh Community Food Bank, a member of Feeding America" /></a>
			<a href="#search-form" class="nav-toggle nav-toggle-search"><span class="icon-search"></span></a>
			<a href="#nav" class="nav-toggle nav-toggle-menu"><span class="icon-menu2"></span><span class="nav-toggle-label">Menu</span></a>
			<div class="header-nav-container">
				<form action="#" method="post" class="inline-form search-form">           
				    <fieldset>
					    <legend class="is-vishidden">Search</legend>
					    <label for="search-field" class="is-vishidden">Search</label>
					    <input type="search" placeholder="Search" id="search-field" class="search-field" />
					    <button class="search-submit">
					    	<span class="icon-search" aria-hidden="true"></span>
					    	<span class="is-vishidden">Search</span>
					    </button>
				    </fieldset>
				</form>
				<?php /* get_search_form(); */ ?>
				<nav id="nav" class="nav" role="navigation">
					<ul class="nav-action-list">
						<li><a href="#">Get Help<span class="icon-arrow-right5"></span></a></li>
						<li><a href="#">Give Help<span class="icon-arrow-right5"></span></a></li>
					</ul>
					<ul class="nav-list">
						<li>
							<a href="#" class="nav-subnav-link">Programs<span class="icon-arrow-down5"></span></a>
							<ul class="nav-subnav">
								<li><a href="#">All Programs</a></li>
								<li><a href="#">Produce to People</a></li>
								<li><a href="#">Community Harvest</a></li>
								<li><a href="#">SNAP</a></li>
								<li><a href="#">Farm Stand Project</a></li>
								<li><a href="#">Summer Food</a></li>
								<li><a href="#">Commodity Supplemental Food Program</a></li>
								<li><a href="#">Nutrition</a></li>
								<li><a href="#">Agency Relations</a></li>
								<li><a href="#">Educational Programs</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-subnav-link">About<span class="icon-arrow-down5"></span></a>
							<ul class="nav-subnav">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Operations</a></li>
								<li><a href="#">Board and Management</a></li>
								<li><a href="#">Jobs and Internships</a></li>
								<li><a href="#">Agencies</a></li>
								<li><a href="#">Donors</a></li>
								<li><a href="#">Sponsors</a></li>
								<li><a href="#">Finances</a></li>
								<li><a href="#">Fundraising Policy</a></li>
								<li><a href="#">Awards and Press</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-subnav-link">Resources<span class="icon-arrow-down5"></span></a>
							<ul class="nav-subnav">
								<li><a href="#">Resource Center</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">About Hunger</a></li>
								<li><a href="#">Hunger Profiles</a></li>
								<li><a href="#">Food Sources</a></li>
								<li><a href="#">Advocacy Information</a></li>
								<li><a href="#">Links</a></li>
							</ul>
						</li>
						<li><a href="#">News</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#" class="nav-donate">Donate</a></li>
					</ul>
					<?php /* wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); */ ?>
				</nav><!--end .nav-->
			</div><!--end .header-nav-container-->
		</div><!--end .lc-->
	</header>
	<!-- End .header -->
	<main class="main" role="main">