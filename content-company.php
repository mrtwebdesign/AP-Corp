<?php
/**
 * @package A-P Corp 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if (has_post_thumbnail( $post_id )){ ?>
		<div class="company-thumbnail">
			<?php echo get_the_post_thumbnail( $post_id, 'medium'); ?>
		</div>
	
		<?php  }  ?>


		<?php the_content(); 
$company_slug = $post->post_name;

$pl_args = array(
	'post_type' => 'product-line'
	);

$productlines = new WP_Query($pl_args);
//print_r($productlines);
echo 'Product lines:';
while ( $productlines->have_posts() ){
 $productlines->the_post(); ?>

 <a href="<?php the_permalink(); ?>"><?php echo get_the_title( $ID ); ?></a>

<? }
wp_reset_postdata();
		?>


		<br>Product types:
		<?php

		$args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'list',
			'show_count'         => 1,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 0,
			'title_li'           => __( '' ),
			'show_option_none'   => __( 'No categories' ),
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'product',
			'walker'             => null
			);

//wp_list_categories( $args );

//the_category(' ');


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



		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'apcorp' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php apcorp_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
