<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package A-P Corp 1.0
 */

get_header(); ?>


<?php
function filter_archive_productlines($query) {
  if ( !is_admin() && $query->is_main_query() ) {

      $query->set('post_type', array( 'product-line' ) );

  }
}
print_r($query);
add_action('pre_get_posts','filter_archive_productlines');
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

							<?php if ( 'post' == get_post_type() ) : ?>
								<div class="entry-meta">
									<?php apcorp_posted_on(); ?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</header><!-- .entry-header -->
						<div class="company-thumbnail">
							<?php echo get_the_post_thumbnail( $post_id, 'medium'); ?>
						</div>
						<div class="entry-content">
							<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'apcorp' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );
								?>

								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'apcorp' ),
									'after'  => '</div>',
									) );
									?>
								</div><!-- .entry-content -->
								<hr>
								<footer class="entry-footer">
									<?php
									$taxonomy = 'product';

							// get the term IDs assigned to post.
									$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
							// separator between links
									$separator = ', ';

									if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

										$term_ids = implode( ',' , $post_terms );
										$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
										$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

							// display post categories
										echo  $terms;
									}

									?>
									
									<?php apcorp_entry_footer(); ?>
								</footer><!-- .entry-footer -->
							</article><!-- #post-## -->



						<?php endwhile; ?>

						<?php apcorp_paging_nav(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>
			<?php get_footer(); ?>
