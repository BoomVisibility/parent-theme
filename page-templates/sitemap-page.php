<?php
/**
 * Template Name: Sitemap Page
 *
 */

get_header(); ?>

<div class="header-divider"></div>
<div class="wrapper">
	<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
	<div>
		<div id="content" role="main">
			<div class="entry-content">
				<header class="entry-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>
				<h2 id="pages">Pages</h2>								
				<ul>
					<?php
					// Add pages you'd like to exclude in the exclude here
					wp_list_pages(
  					array(
    						'exclude' => '2664',
    						'title_li' => '',
  							)
						);
					?>
				</ul>
				<h2 id="posts">Posts</h2>
				<ul>
					<?php
					// Add categories you'd like to exclude in the exclude here
					$cats = get_categories('exclude=');
					foreach ($cats as $cat) {
  						echo "<li><h3>".$cat->cat_name."</h3>";
  						echo "<ul>";
  						query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
  						while(have_posts()) {
    							the_post();
    							$category = get_the_category();
    							// Only display a post link once, even if it's in multiple categories
    							if ($category[0]->cat_ID == $cat->cat_ID) {
      								echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
    								}
 							 }
  							echo "</ul>";
  							echo "</li>";
						}
					?>
				</ul>
				<h2><a href="<?php echo site_url(); ?>/sitemap_index.xml" target="_blank">XML Sitemap</a></h2>
				<br/><br/>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	</div><!-- #wrapper -->	
<?php get_footer(); ?>
