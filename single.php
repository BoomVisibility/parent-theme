<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boom Visibility
 * @since Boom Visibility 1.0
 */
get_header(); ?>
<header class="entry-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div class="date"><?php the_time('F j, Y');?></div>
	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
</header>
<div class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" class="container small" role="main">
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="addthis_sharing_toolbox" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"></div>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<div class="category-listing">
					<strong><?php _e('Posted In:', 'wplook'); ?></strong> <?php the_category(', ') ?>
				</div>
				<?php if(get_the_tag_list()) {?>
					<div class="tag-listing">
						<strong><?php _e('Tagged In:', 'wplook'); ?></strong> <?php echo get_the_tag_list('<span>',', ','</span>'); ?>
					</div>
				<?php } ?>
				<?php if ( comments_open() || get_comments_number() ) :
				    comments_template();
				endif; ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
