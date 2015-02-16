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
	<div class="row">
	<div class="col-md-12 footer-inner">
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-left' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-middle' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-right' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="site-info">
		© Copyright Andruss-Peskin Corporation
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
// Can also be used with $(document).ready()
jQuery(window).load(function() {
	jQuery('#slider').flexslider({
		animation: "fade",
		pauseOnHover: true,
		controlNav: false,
		directionNav: false,
	});
});


jQuery(document).ready(function() {
	//jQuery('header nav').meanmenu();
	//jQuery('ul.sf-menu').superfish();
});


</script>

<?php //print_r(get_taxonomies()) ; ?>


</body>
</html>
