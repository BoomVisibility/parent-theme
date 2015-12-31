<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->

<?php wp_head(); ?>



<?php if ( is_user_logged_in() ) { ?>



<!--the analytics code is hidden because you are logged in-->



<?php } else { ?>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'xx', 'auto');

  ga('send', 'pageview');



</script>



<?php } ?>

</head>



<body <?php body_class(); ?>>

<!-- Go to www.addthis.com/dashboard to customize your tools -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54f3230657c608bf" async="async"></script>

<div id="page" class="hfeed site">

	<header class="global larger">

		<div class="container">

			<div id="masthead">

				<div class="logo">

					<a href="<? echo site_url(); ?>"></a>

				</div>

			</div> <!-- #masthead -->



			<div class="navigation-container" role="navigation">


<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php endif; ?>

				
				<nav id="site-navigation" class="navigation-primary" role="navigation">

					

					<ul id="menu-primary-menu" class="nav-menu">

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>

					</ul>

				</nav>

			</div>

		</div>

		

	</header>

	

	<div id="main">