<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main row" role="main">
		<div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">

								<?php // Flexslider Loop

								$entries = get_post_meta( get_the_ID(), '_apcorp_home-slides', true );

								//print_r($entries); ?>

						<div id="slider" class="flexslider">
							<ul class="slides">

								<?php foreach ( (array) $entries as $key => $entry ) {

									$img = $title = $desc = $caption = '';

									if ( isset( $entry['title'] ) ){
										$title = esc_html( $entry['title'] );
									}

									if ( isset( $entry['description'] ) ){
										$desc = wpautop( $entry['description'] );
									}

									if ( isset( $entry['image'] ) ) {    
										$image_id = key($entry['image']);        
										$img = wp_get_attachment_image( $image_id, 'home-slide', null, array(
											'class' => 'home-slide',
											) );
									}
									if (isset( $entry['image_caption'] )){
										$caption = 	wpautop( $entry['image_caption'] );
									}; ?>
									<li class="slide-image-id-<?php echo $image_id;?>">

										<?php echo $img; ?>

									</li>
									<?php } ?>
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
