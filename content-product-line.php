<?php
/**
 * @package A-P Corp 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<!-- div class="entry-meta">
			<?php //apcorp_posted_on(); ?>
		</div--><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<?php if (has_post_thumbnail( $post_id )){ ?>
	<div class="product-line-thumbnail">
		<?php echo get_the_post_thumbnail( $post_id, 'medium'); ?>
	</div>

	<div class="entry-content">
		<div class="company-link">
			<?php
			$meta = get_post_custom($post_id);
			//print_r($meta);
			$slug = $meta[_apcorp_company_id][0];
			$c_fetch = array(
				'name' => $slug,
				'post_type' => 'company'
				);
			$company = new WP_Query( $c_fetch );
			$c_id = $company->posts[0]->ID;
			$c_title = $company->posts[0]->post_title;
		//print_r($company);
		//echo $c_title;

			?>
			Company info: <a href="<?php echo get_permalink($c_id); ?>"><?php echo $c_title; ?></a>
		</div>

		<?php } ?>
		<?php the_content(); 

		?>

		<!--Product types:-->
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
			//echo  $terms;
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
