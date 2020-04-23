<?php
/**
 * Template Name: Thank You Page
 *
 * @package WordPress
 * @subpackage Bridlebrook
 * @since Bridlebrook 1.0
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
<?php if(get_field('header_image')) : ?>
   <header class="entry-header" style="background-image: url('<?php the_field('header_image'); ?>')">
     <div class="overlay"></div>
<?php else : ?>
  <header class="entry-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header-background.jpg');">
    <div class="overlay"></div>
<?php endif; ?>
 	<div class="container">
    <div class="textalign-center">
 		   <h1 class="page-title"><?php the_title(); ?></h1>
     </div>
     <div class="clearboth"></div>
 	</div>
 </header>
<div class="wrapper">
	<div id="content" class="container" role="main">
    <div id="primary" class="page-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
	   </div><!-- #primary -->
	<?php get_sidebar(); ?>
  <?php if(get_field('testimonial')) : ?>
    <section id="homeposts">
    <?php

      $post_objects = get_field('testimonial'); ?>
        <div class="bx-testimonials">
          <?php
          foreach ($post_objects as $post) : ?>
          <?php setup_postdata($post); ?>
            <div class="featured-testimonial">
              <div class="one_fourth">
                <p class="quotes">“</p>
              </div>
              <div class="threefourth last">
                <blockquote>
                  <?php the_excerpt(); ?>
                </blockquote>
              </div>
              <div class="clearboth"></div>
              <hr />
              <h3 class="textalign-center"><?php the_title(); ?></h3>
              <h5 class="textalign-center"><?php the_field('company'); ?></h5>
            </div>
          <?php endforeach; ?>
      </section>
  <?php endif; ?>
	</div><!-- #content -->
</div>
<?php get_footer(); ?>
