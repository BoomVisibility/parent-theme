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
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="header-divider"></div>
<div class="wrapper"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>		<header class="entry-header">			<h1 class="page-title"><?php the_title(); ?></h1>			<h2 class="page-subheading"><?php the_field('subheading'); ?></h2>			<span class="divider left blue"></span>		</header>
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
