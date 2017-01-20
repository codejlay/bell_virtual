<?php
/**
 * The header for our theme.
 *
 * @package white_canvas_Theme
 */

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<?php wp_head(); ?>
		<!-- Google Analytics -->
		<script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-55846603-5', 'auto');
			ga('send', 'pageview');
		</script><!-- /Google Analytics -->
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="main-nav">
					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>						
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">						
						<div class="navigation-inner">
							<div class="container">
								<div class="logo-wrapper">
									<a href="<?php echo home_url(); ?>">
										<div class="logo">
											<img src="<?php bloginfo('template_url'); ?>/images/Bell-Virtual-Solutions-Logo.png" alt="Bell Virtual Solutions Logo" />
										</div>
									</a>
								</div>
								<div class="nav-wrapper">
									<div class="nav-selection">
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
									</div>
									<div class="facebook-icon">
										<a href="https://www.facebook.com/Bell-Virtual-Solutions-1219343464769095/?fref=ts" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
									</div>
									<div class="linkedin-icon">
										<a href="https://ca.linkedin.com/in/shannon-bell-a36520126" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>				
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
