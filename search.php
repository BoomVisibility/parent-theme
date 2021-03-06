<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Boom Visibility
 * @since Boom Visibility 1.0
 */

get_header(); ?>
<header class="entry-header">
	<h1 class="entry-title">
		<?php printf( __( 'Search Results for: %s', 'boomvisibility' ), '<span>' . get_search_query() . '</span>' ); ?>
	</h1>
</header>
<div class="wrapper search-page"><?php if ( have_posts() ) : ?>
	<div id="primary" class="page-content">
		<div id="content" class="container" role="main">		
		
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' ); ?>
			<?php endwhile; ?>
			<?php wpbeginner_numeric_posts_nav(); ?>

	<?php else : ?>
	<div id="primary" class="page-content">
		<div id="content" class="container" role="main">
			<article id="post-0" class="post no-results not-found">
				<div class="entry-content">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'boomvisibility' ); ?></h1>
					</header>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'boomvisibility' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
