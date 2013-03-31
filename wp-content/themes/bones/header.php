<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Benjamin Rees</title>
  <link rel="stylesheet" href="/bones/wp-content/themes/bones/css/normalize.css" />  
  <link rel="stylesheet" href="/bones/wp-content/themes/bones/css/css/added-style.css" />
<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Average" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500' rel='stylesheet' type='text/css'>
<!-- Includes jQuery first -->
<script>
  document.write('<script src=/bones/wp-content/themes/bones/js/vendor/'
    + ('__proto__' in {} ? 'zepto' : 'jquery')
    + '.js><\/script>');
</script>

  <script src="/bones/wp-content/themes/bones/js/vendor/custom.modernizr.js"></script>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
	</head>

<body <?php body_class(); ?>>
	<div id="container">
		<header class="header" role="banner">
			<div id="outer-header">
					<h1 class="header-logo">Benjamin Rees</h1>
					<h2 class="header-logo">Design and Development</h2>
			</div>
			<div id="inner-header" class="wrap clearfix">
				<div class="row">
					<div id="foundation-nav" class="large-12 columns">
						<nav role="navigation"><?php bones_main_nav(); ?></nav>
					</div>

				</div>
			</div> <!-- end #inner-header -->
		</header> <!-- end header -->
