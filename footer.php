<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package A-P Corp 1.0
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'apcorp' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'apcorp' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'apcorp' ), 'A-P Corp 1.0', '<a href="http://mrtwebdesign.com" rel="designer">Matthew Taylor</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>


$(".flexnav").flexNav();

</script>
</body>
</html>
