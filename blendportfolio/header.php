<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head  <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="html5, template, bootstrap, website template, wordpress, css3, mobile first, responsive" />
	<meta name="author" content="milosrandjelovic.xyz" />

	<title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Modernizr JS -->
	<script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/halkaBox.min.css">
	
	<?php wp_head(); ?>
	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<?php 
			$backgroundImage = get_theme_mod(general_nav_background_image);
			$backgroundStyle = '';
			if(!empty($backgroundImage))
				$backgroundStyle = "background: url(".$backgroundImage.") center no-repeat; background-size: 100% 100%; ";
			
			$backgroundColor = get_theme_mod(general_nav_background_background_color);
			
			if(!empty($backgroundColor))
				$backgroundStyle .= "box-shadow: inset 2000px 0 0 0 ". $backgroundColor .";";
		?>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight" style="<?php echo $backgroundStyle;?>">

			<h1 id="fh5co-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('general_logo_image'); ?>" alt="<?php echo bloginfo('name'); ?>"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => '',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy;  <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?>. All Rights Reserved.</span> <span>Designed by <a href="http://milosrandjelovic.xyz" target="_blank">milosrandjelovic.xyz</a> </span></small></p>
				<ul>
					<?php
						$fbUrl = get_theme_mod('frontpage_social_url_fb'.$i);
						$twitterUrl = get_theme_mod('frontpage_social_url_twitter'.$i);
						$instagramUrl = get_theme_mod('frontpage_social_url_instagram'.$i);
						$linkedinUrl = get_theme_mod('frontpage_social_url_linkedin'.$i);
						
						if ($fbUrl !== '') {
							echo "<li><a href=\"".$fbUrl."\"><i class=\"icon-facebook\"></i></a></li>";
						}
						if ($twitterUrl !== '') {
							echo "<li><a href=\"".$twitterUrl."\"><i class=\"icon-twitter\"></i></a></li>";
						}
						if ($instagramUrl !== '') {
							echo "<li><a href=\"".$instagramUrl."\"><i class=\"icon-instagram\"></i></a></li>";
						}
						if ($linkedinUrl !== '') {
							echo "<li><a href=\"".$linkedinUrl."\"><i class=\"icon-linkedin\"></i></a></li>";
						}
					?>
				</ul>
			</div>

		</aside>