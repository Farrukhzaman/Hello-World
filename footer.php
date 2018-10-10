<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

<div class="mapsection">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/map.jpg" class="responsive"/>
    <div class="mappanel">
    	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/map-marker.png" class="mapmarker"/>
        <div class="addresspane">
        	<h2>Our Coordinates2 </h2>
            <h4>Kings Cross</h4>
            144 York Way<br/>
Kings Cross<br/>
London<br/>
N1 0AX<br/>
<a href="#" class="btns">BOOK NOW</a>
        </div>
    </div>
</div>


	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<?php /*?><footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sydney' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sydney' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="https://athemes.com/theme/sydney" rel="designer">Sydney</a>' ); ?>
		</div><!-- .site-info -->
	</footer><?php */?><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>


<script>
function fixbanner()
{
if (jQuery(window).width() > 1024) {
var bannerheihgt = jQuery('.header-slider').innerHeight();
jQuery(".home #content").css("margin-top", bannerheihgt);
}
}
jQuery(document).ready(function(){
	fixbanner();
});
jQuery(window).resize(function() {
	fixbanner();
});
</script>
</body>
</html>
