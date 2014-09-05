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