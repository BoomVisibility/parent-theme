<?php
/**
 * Template Name: About Us
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="page-content below-nav">
		<div id="content" class="container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php endwhile; // end of the loop. ?>
			<header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

			<? if(get_field('name_1')) { ?>
			<div class="entry-content-row">
				<div class="one-third entry-photo-holder">
					<img class="entry-photo" src="<?php the_field('photo_1'); ?>" alt="">
				</div>
				<div class="two-thirds last">
					<div class="entry-header">
						<h2 class="member">
							<?php the_field('name_1'); ?>
						</h2>
						<h4><?php the_field('position_1'); ?></h4>
					</div>
					<div class="entry-content">
						<?php the_field('bio_1'); ?>					
					</div>
				</div>
			</div>
			<? } ?>

			<? if(get_field('name_2')) { ?>
			<div class="entry-content-row">
				<div class="one-third entry-photo-holder">
					<img class="entry-photo" src="<?php the_field('photo_2'); ?>" alt="">
				</div>
				<div class="two-thirds last">
					<div class="entry-header">
						<h2 class="member">
							<?php the_field('name_2'); ?>
						</h2>
						<h4><?php the_field('position_2'); ?></h4>
					</div>
					<div class="entry-content">
						<?php the_field('bio_2'); ?>					
					</div>
				</div>
			</div>
			<? } ?>

			<? if(get_field('name_3')) { ?>
			<div class="entry-content-row">
				<div class="one-third entry-photo-holder">
					<img class="entry-photo" src="<?php the_field('photo_3'); ?>" alt="">
				</div>
				<div class="two-thirds last">
					<div class="entry-header">
						<h2 class="member">
							<?php the_field('name_3'); ?>
						</h2>
						<h4><?php the_field('position_3'); ?></h4>
					</div>
					<div class="entry-content">
						<?php the_field('bio_3'); ?>					
					</div>
				</div>
			</div>
			<? } ?>

		</div><!-- #content -->
		<?php //get_sidebar(); ?>
	</div><!-- #primary -->

	<section class="panel primary">
		<span class="scroll-marker"></span>
		<div class="container">
			<h1 class="entry-header script underlined white"><?php the_field('supporting_title'); ?></h1>	
			<div class="entry-content">
				<?php the_field('supporting_text'); ?>	
			</div>		
		</div>
	</section>
<?php get_footer(); ?>