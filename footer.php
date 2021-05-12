<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Boom Visibility
 * @since Boom Visibility 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<div id="prefooter">
		<?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-10' ); ?>
		<?php endif; ?>
	</div>
	<footer class="global" role="contentinfo">
		<div class="container">
			<div class="one_third">
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				<?php endif; ?>
			</div>
			<div class="one_third">
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				<?php endif; ?>
			</div>
			<div class="one_third last">
				<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				<?php endif; ?>
			</div>
			<div class="clearboth"></div>
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
