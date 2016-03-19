<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<!--  HERO BANNER -->
				<section class="hero-banner">
					<span class="hero-text">Baked to perfection.</span>
				</section>

				<!-- CATEGORIES  -->
					<?php
					$terms= get_terms( 'product-type', $args);
					?>

					<section class="product-info">
            <div class="product-flex">
                <?php if ( ! empty( $terms ) ) : ?>
                    <?php foreach ($terms as $term) : ?>
                            <div class="product-container">
                                <img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
                                <h3 class="category-text"><?php echo $term->name; ?></h3>
                                <p>
                                    <?php echo $term->description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
                                </p>
                            </div>
                    <?php endforeach; ?>
            		<?php endif; ?>
        		</div>
    		</section>

			<div class="products-flex">
				<div class="products-bar">
					<p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</p>
					<button type="button" name="button" class="products-button">
						<a href="http://localhost:3000/leredbread/product/">See Our Products</a>
				  </button>
				</div>
			</div>



							<!-- BLOG POSTS  -->
					<section class="latest-blogs">


								<div class="flex-text-center">
														<h2>Our Latest News</h2>
								</div>

									<hr class="hr-symbol" />

										<div class="grey-dot"></div>

							<!--  START OF LOOP -->
							<div class="post-grid container">

								<?php
						          $args = array( 'post_type' => 'post',
						                         'posts_per_page' => 4
						                       );
						          $latest_posts = get_posts( $args );
								?>

			          <?php foreach ($latest_posts as $post) :  setup_postdata ( $post ); ?>
									<div class="blogpost-block">
				              <!--  pictures  -->
										<ul>
											<li>
												<div class="thumbnail-container">
								              <?php if (has_post_thumbnail() ) : ?>
								                <?php the_post_thumbnail( 'medium' ); ?>
								              <?php endif; ?>
												</div>

				              <!--  title -->

													<div class="blog-post-info">
								              <h3>
									                <a href="<?php the_permalink(); ?>">
									                         <?php the_title(); ?>
									                </a>
								              </h3>

									          <span class="entry-meta">
									                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
									          </span>
												</div>
											</li>
										</ul>

									</div> <!-- ends blogpost-block div> -->
								<?php endforeach; wp_reset_postdata(); ?>

								</div> <!-- ends post grid div -->
						</section>	<!-- ends blog section -->


										<!-- Testimonial section  -->

					<div class="flex-text-center">
						<h2 >What others say about us</h2>
					</div>

					<hr class="hr-symbol" />

					<div class="grey-dot"></div>

					<ul class="container testimonial-wrapper">
						<li>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/dr-dosist-headshot.png" alt="Dr.Dosist headshot picture" class="testimonial-pictures"/>
						</li>
						<li>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/maxi-milli-headshot.png" alt="Maxi Milli headshot picture" class="testimonial-pictures"/>
						</li>
						<li>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/ana-vandana-headshot.png" alt="Ana Vandana headshot picture" class="testimonial-pictures"/>
						</li>
						<li>
							<img src="<?php bloginfo( 'template_url' ); ?>/images/martha-m-masters-headshot.png" alt="Maxi Milli headshot picture" class="testimonial-pictures"/>
						</li>
					</ul>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
