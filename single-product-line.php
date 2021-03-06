<?php
/**
 * The template for displaying all single posts.
 *
 * @package A-P Corp 1.0
 */

get_header(); ?>

<div id="primary" class="content-area row">
	<main id="main" class="site-main col-md-12" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php apcorp_post_nav(); ?>

			<?php get_template_part( 'content', 'product-line' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
