<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">
		<div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">


						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="slide1.jpg" />
								</li>
								<li>
									<img src="slide2.jpg" />
								</li>
								<li>
									<img src="slide3.jpg" />
								</li>
								<li>
									<img src="slide4.jpg" />
								</li>
							</ul>
						</div>

					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'apcorp' ),
							'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php edit_post_link( __( 'Edit', 'apcorp' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
