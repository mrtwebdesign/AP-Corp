<?php
/**
 * Template Name: Territory Map
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">
		<div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<div class="svg-map-wrap">
					<div id="map-legend">
						<div class="title text-center">
							Andruss-Peskin Territory
						</div>					
						<div class="members">
							<div class="row">
								<div class="col-xs-6">
								<a href="mailto:rongosk@a-pcorp.com" target="_blank">
									<div class="rgc">

									</div>
									<span>
										Ron Gosk
									</span>
									</a>
								</div>
								<div class="col-xs-6">
								<a href="mailto:jeff@a-pcorp.com" target="_blank">
									<div class="jwc">

									</div>
									<span>
										Jeff Wilkins
									</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id="MA-label" class="state-label">MA</div>

					<div id="ME-label" class="state-label">ME</div>

					<div id="NH-label" class="state-label">NH</div>

					<div id="VT-label" class="state-label">VT</div>

					<div id="RI-label" class="state-label">RI</div>

					<div id="CT-label" class="state-label">CT</div>

					<div id="NY-label" class="state-label">NY</div>




					<svg version="1.1" id="States" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="43 43 220.5 177" enable-background="new 43 43 220.5 177" xml:space="preserve" width="100%" height="100%">
					<path id="RI" fill="#CCCCCC" d="M181.6,190.3l0-4.5l0.1-4.6l-0.4-6.4l6.1-0.3l1.4,1.5l2.4,5.2l1.9,5.1l-1.2,0.3l-1,0.2l-1.2-1.5
					l-0.6-2.1l-1.3-1.6l0.1,3v2.2l-0.8,1.2L186,189l-1.8,0.9L181.6,190.3z"/>
					<path id="CT" fill="#CCCCCC" d="M181.6,190.3l0-4.5l0.1-4.6l-0.4-6.4l-5.3,0l-22.8,0.2l-0.1,3.5l-0.1,7.7l-1.8,8.2l-1.6,2.1l1.4,2.5
					l5.7-2.4l4.3-2.5l2.4-1.7l0.7,0.8l3.1-0.9l5.4,0L181.6,190.3z"/>
					<path id="NY" fill="#CCCCCC" d="M127.7,186.6l-1.3-5.9l-2.8-1.6l-1.9-2.7l-19.4,0.1l-44.8-0.3l-9.2-0.4l0.8-7.2l3.1-1.3l1.5-0.9
					L55,165l2-0.8l2.3-1.4l0.8-1.5l2.7-2.3l1.3-0.7l0.1-1l-0.6-3.4l-1.7-0.5l-0.6-6.7l3.3-1.2l4.7-0.5l4.3-0.4l3.3,0.2l6.3,1.2l1.7,1.7
					l1.6,0.5l2.4-0.9l2.8-0.6l5.3,0.6l2.5-1.4l2.5-2.9l2-1.6l2.1,0.5l2.2-0.7l0.7-2.3l-1-2.4l0-1.5l1.6-1.9l0.3-1.5l-1.8-0.4l-1.6-1.2
					l-0.6-1.3l0.4-2.7l7-4.3l0.8-0.7l2.1-2.6l3.9-4l3.6-3.2l2.6-2l2.8-1.3l3.3-0.6l5.8-0.1l3.2,0.9l4.8-0.5l8-0.5l-0.6,5.2l1,7.1
					l-0.3,5.4l-1.8,3.7l1.6,5.2l0.3,2.3l-1.4,2.8l2.6,1.9l0.6,0.5l0.7,11.8l-0.4,5.9l-3.1,10.3l-0.3,6l-0.1,3.5l0,2.6L127.7,186.6z"/>
					<path id="MA" fill="#CCCCCC" d="M212.5,188.2l-1-0.3l-0.8,1.6l-2.3,0.2l-0.6,0.5l3.9,0.7l1.4-0.2L212.5,188.2z M203.2,186.7
					l-1.6-0.3l-2.8,2.2l0.9,1.2l2.4-0.6l2.6-0.5L203.2,186.7z"/>
					<path id="MAe" fill="#CCCCCC" d="M212.8,178.8l-0.2,2.5l-4.5,0.6l-4.3,1.1l-4.9,3.8l-2.3,1.1l0.2-1l2.7-1l0.9-1.7l-0.1-3.3
					l-3.2,0.9l-1.1,1.3l0,2.4l-3.1,0.9l-1.8-5.2l-2.4-5.2l-1.4-1.5l-6.1,0.3l-5.3,0l-1.9,0l-0.4-0.9l-0.1-1.4l-0.2-3l-0.8-3.2
					c0,0,0.8-1.6,1.1-1.8c0.3-0.2,1.1-0.8,1.1-0.8l0.7-1.3l-1.4-0.8l-1.4-1.4l0.2-1.8l14.5-0.4l2.4-0.2l2.8-2.8l4.1-0.9l1.9,5.1
					l-3.5,4.7l-0.6,1.4l1.4,3l1.3-0.6l1.8,0.4l1.7,3.1l2.6,6.9l3.4,1.3l2.5-0.5l2.2-1.4l-0.2-3l-1.7-2.1l-1.6,0.5l-0.7-1.5l0.6-0.4
					l2.1,0.3l1.6,1.2l1.4,2.9L212.8,178.8z"/>
					<path id="MAw" fill="#CCCCCC" d="M172.6,166.4l0.8,3.2l0.2,3l0.1,1.4l0.4,0.9l-20.9,0.2l0.3-6l3.1-10.3l5.3-0.1l7.2,0.1l3.7-0.1
					l-0.2,1.8l1.4,1.4l1.4,0.8l-0.7,1.3c0,0-0.8,0.6-1.1,0.8C173.4,164.8,172.6,166.4,172.6,166.4z"/>
					<path id="ME" fill="#CCCCCC" d="M252.6,96.6l1.5,2.6l1.4,4.3l-0.4,2l-3.1,4.3l-2.1,0.2l-4.1,2.4l-6,4.5c0,0-0.6-0.1-1.3-0.3
					s-0.5-2.3-0.5-2.3l-1.8-0.2l-1.3,1.3l-2.7,1l-1.3,1.3l1.3,1.8l-0.6,0.6l-1.1,2.7l-1.9-0.6l0.4-1.6l0-1.4l-1.5,0l-1.1-3.7l-2.4,0.9
					l1,1.8l0.1,1.2l-1.1,1.1l-0.3,3.2l-0.2,1.7l-2.2,2.3l-3-0.1l-1,2.9l-6,2l-1.4,0.2l-1.3-1.8l-3.8,3l0.3,3.5l-1.7,1l-1.1,4.4l-3.2,7.4
					l-2.2-1.7l0.2-3.2l-3.6-2l0.3-2.9l-2.1-25.4l-1.5-16l2.5,0.2l1.4,0.7l0.6-2.6l2-5.4l3.6-4.2l2.3-3.8l-1.4-2.9l1.3-6.1l1-0.8l1.4-2.6
					l0.2-1.5l0.9-5l2.8-4.5l4.8-8.4l3-3.8l1.3,0.3l1.3,0.4l-0.2,1.2l0.8,2.6l2.6,1.2l1-0.6l0.2-1l4.7-2.1l2.2-1.4l1.4,0.5l5.4,3.7
					l1.7,1.4l2.5,32.3l6,1.3l0.4,2.1l-0.9,5l2.4,2.9l0.8,0.2l0.3-0.5l-0.2-1.3L252.6,96.6z M225.1,122.7l1.9-1.2l1.1,1.4l0,2.6l-1.9,0.5
					L225.1,122.7z M233.1,118.2l1.4,2.3c0,0,1.3,0.4,1.3,0c0.1-0.3,0.7-2,0.7-2l1.1-0.6l-0.4-2l-2.2,0.3L233.1,118.2z"/>
					<path id="NH" fill="#CCCCCC" d="M196.5,154.3l0.6-1.5l1.7-2.9l-2.2-1.7l0.2-3.2l-3.6-2l0.3-2.9l-2.1-25.4l-1.5-16l-0.8,0.1l-1,1.5
					l-0.5-0.6l-0.8-1.2l-1.9,1.7l-2.2,5.4l-0.9,5.8l1.3,3.2l-0.9,4.1l-4.6,3.3l-2.8,0.6l-0.2,1.2l0.7,2.1l-1.9,8.7l-2.8,9.2l-1.2,4.9
					l0.7,1.5l-1.1,4.6l-0.9,1.7l1,2.4l18.2-0.5l2.4-0.2l2.8-2.8L196.5,154.3z"/>
					<path id="VT" fill="#CCCCCC" d="M156.5,158.6l0.4-5.9l-0.7-11.8l-0.6-0.5l-2.6-1.9l1.4-2.8l-0.3-2.3l-1.6-5.2l1.8-3.7l0.3-5.4
					l-1-7.1l0.6-5.2l28.4-1.3l-0.9,5.8l1.3,3.2l-0.9,4.1l-4.6,3.3l-2.8,0.6l-0.2,1.2l0.7,2.1l-1.9,8.7l-2.8,9.2l-1.2,4.9l0.7,1.5
					l-1.1,4.6l-0.9,1.7l1,2.4l-7.2-0.1L156.5,158.6z"/>
					<polyline id="NY-outline" fill="none" stroke="#000000" stroke-width="0.1" points="127.7,186.6 129.2,190.3 135.5,192.8 140.7,197.8 146.3,200.3 
					150.9,199 "/>
				</svg>

			<?php endwhile; // end of the loop. ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
