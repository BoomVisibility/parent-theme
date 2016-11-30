<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="primary">
		<div id="content" role="main">
			<section class="slideshow">
				<div class="bxslider">
				<?php
				$my_secondary_loop = new WP_Query('post_type=slides');
				if( $my_secondary_loop->have_posts() ):
				    while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post();
				    ?>
					<div class="slide-list">
						<div class="slide" style="background-image: url(<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image;  ?>);" >					
							<div class="slider-content">
								<h1><?php echo the_title();?></h1>
								<?php echo the_content();?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
				</div>
			</section>
			<section id="mission" class="textalign-center">
				<div class="container">
					<h1><?php the_field('mission_statement_title'); ?></h1>
					<p><?php the_field('mission_statement'); ?></p>
				</div>
			</section>
			<section id="homeposts">
				<div class="container">
					<h1><?php the_field('block_3_title'); ?></h1>
					<div class="half"> 
						<?php
							$my_secondary_loop_blog = new WP_Query('post_type=post&category_name=events&posts_per_page=1');
							if( $my_secondary_loop_blog->have_posts() ):
				    			while( $my_secondary_loop_blog->have_posts() ): $my_secondary_loop_blog->the_post();
				    			?>
							<div class="entry-content">
								<h2><?php the_title(); ?></h2>
								<div class="date"><strong>When:</strong> <?php 
									$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
									echo $date->format('F jS, Y'); ?> at <?php the_field( "event_time" ); ?></div>
								<div class="date"><strong>Where:</strong> <?php the_field( "event_location" ); ?></div>
								<?php the_content(); ?>
								<a class="learn-more" href="<?php the_permalink();?>">Read More ></a>
							</div>
							<?php endwhile; ?>
							<?php endif; wp_reset_postdata(); ?>
					</div>
					<div class="half last"> 
						<h2>Recent Posts</h2>
						<?php
						$my_secondary_loop_blog = new WP_Query('post_type=post&posts_per_page=3');
						if( $my_secondary_loop_blog->have_posts() ):
				    		while( $my_secondary_loop_blog->have_posts() ): $my_secondary_loop_blog->the_post();
				    		?>
						<div class="entry-content">
							<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
							<div class="date"><?php the_time('F j, Y');?></div>
							<a href="<?php the_permalink();?>">Read More ></a>
						</div>
						<?php endwhile; ?>
						<?php endif; wp_reset_postdata(); ?>
					</div>
					<div class="clear"></div>
				</div>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
