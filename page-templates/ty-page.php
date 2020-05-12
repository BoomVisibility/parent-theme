<?php
/**
 * Template Name: Thank You Page
 *
 * @package WordPress
 * @subpackage Boom Visibility
 * @since Boom Visibility 1.0
 */

if(!current_user_can('edit_posts')) {
	// define the URL where we want to send people instead of showing them the page they requested
	$url = trailingslashit(get_bloginfo('url')); 	
	$check_url = get_field('referral_page');

	if(isset($_SERVER['HTTP_REFERER'])) {
		$referring = $_SERVER['HTTP_REFERER'];
		if ($check_url <> $referring) {
			header("Location: $url");
			// don't process any more code
			exit;
		}
	}
	// if HTTP_REFERER is not set, redirect to $url as well.  This may be overly aggressive
	else {
		header("Location: $url");
		// don't process any more code
		exit;
	}
}

get_header(); ?>
<header class="entry-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
</header>
<div class="wrapper">
	<div id="primary" class="page-content">
		<div id="content" class="container" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-11' ); ?>				
		</div><!-- #secondary -->			
	<?php endif; ?>	
</div>
<?php get_footer(); ?>
