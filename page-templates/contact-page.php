<?php
/**
 * Template Name: Contact Page
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Boom Visibility
 * @since Boom Visibility 1.0
 */

get_header(); ?>
<header class="entry-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
</header>
<div class="wrapper">
	<div id="primary" class="contact-content">
		<div id="content" class="container" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php if ( is_active_sidebar( 'sidebar-12' ) ) : ?>
	<div id="secondary" class="contact-widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-12' ); ?>				
	</div><!-- #secondary -->			
	<?php endif; ?>	</div>
		
<?php get_footer(); ?>
