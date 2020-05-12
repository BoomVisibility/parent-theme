<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Boom Visibility
 * @since Boom Visibility 1.0
 */

get_header(); ?>
<header class="entry-header">
	<h1 class="entry-title"><?php _e( '404 Page Not Found', 'boomvisibility' ); ?></h1>
</header>
<div class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<article id="post-0" class="post error404 no-results not-found">
				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
