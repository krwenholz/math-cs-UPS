<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php is_front_page() ? bloginfo('name') : bloginfo('description'); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!-- Styles -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" /> -->
		
		<!-- Scripts -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<?php if (is_home()): ?>
		<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jcarousellite_1.0.1.min.js"></script>
		<script>
			$(function() {
				$("#slider").jCarouselLite({
					auto: 4000,
					speed: 1000,
					circular: true,
					visible: 5
				});
			});
		</script>
		<?php endif; ?>
		<?php if (is_page_template('page-faculty.php') ): ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.quicksand.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/prof-script.js"></script>
		<?php endif; ?>
		<?php if (is_page_template('page-seminars.php') ): ?>
		<script>
			$(function() {
				$(".semToggle").click(function() {$(this).parent().children(".semDetails").slideToggle("fast");});
			});
		</script>
		<?php endif; ?>
		
		<!-- Zurb Responsive Tables -->
		<!--[if !lt IE 9]><!-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive-tables.css" />
		<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/responsive-tables.js"></script>
		<!--<![endif]-->
		
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<!-- <div id="container"> -->
			
		<header class="header" role="banner">
			<div id="beta">&isin; &beta;</div>
			<h2><?php bloginfo('description'); ?></h2>
            <h1><?php bloginfo('name'); ?></h1>
			<?php if(!is_home()): ?>
			<nav role="navigation">
				<?php bones_main_nav(); ?>
			</nav>
			<?php endif; ?>
		</header> <!-- end header -->
