<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?>	

	<footer class="global" role="contentinfo">
	<div class="container">

			<div class="one-fourth">
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				<?php endif; ?>
			</div>
			<div class="one-fourth">
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				<?php endif; ?>
			</div>
			<div class="one-fourth">
				<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				<?php endif; ?>
				
			</div>
			<div class="one-fourth last">
				<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-9' ); ?>
				<?php endif; ?>
			</div>
			<div class="clear"></div>

	</div>

<div class="clear"></div>		
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
