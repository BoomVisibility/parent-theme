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
	
	<div id="prefooter"><?php if ( is_active_sidebar( 'sidebar-10' ) ) : ?><?php dynamic_sidebar( 'sidebar-10' ); ?><?php endif; ?></div>

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
				<p>**To be removed</p>
				<div itemscope="" itemtype="http://schema.org/HomeAndConstructionBusiness">
<span itemprop="telephone">(610) XXX-XXXX</span>
<span itemprop="email">email@site.com</span><br><div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">50 Main Street</span>, <span itemprop="addressLocality">Place</span>,  <span itemprop="addressRegion">PA</span> <span itemprop="postalCode">19320</span></div><p style="margin-top: 20px;"><time itemprop="openingHours" datetime="Mo,Tu,We,Th,Fr 08:30-17:30, Sa 8:30-13:00">Mon-Fri 8:30 to 5:30<br>Sat 8:30am to 1:00pm </time><br>Evening Hours by Appt</p></div>
			</div>
			<div class="clear"></div>

	</div>

<div class="clear"></div>		
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<noscript id="deferred-styles">
      <link href='https://fonts.googleapis.com/css?family=Dosis:400,600,300' rel='stylesheet' type='text/css'>
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#async=1"></script>
<script type="text/javascript">
	var addthisScript = document.createElement('script');
        addthisScript.setAttribute('src', 'http://s7.addthis.com/js/300/addthis_widget.js#domready=1')
        document.body.appendChild(addthisScript);
    var addthis_config = addthis_config||{};
    	// This is the 'Generic Large' code for large sharing buttons
        addthis_config.pubid = 'ra-540a43e10e38c182';
</script>
<script type="text/javascript">
    // Call this function once the rest of the document is loaded
    function loadAddThis() {
        addthis.init()
    }
</script>
</body>
</html>
