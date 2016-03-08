<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					<?php
					$terms= get_terms( 'product-type', $args);
					?>

					<?php if ( ! empty($terms) ) : ?>

					<?php foreach ($terms as $term) : ?>

								<img src="<?php echo get_template_directory_uri() . '/images\/'	. $term->slug; ?>.png" alt="" />

								<h3>
									<?php echo $term->name; ?>
								</h3>

								<p>
									<?php echo $term->description; ?>
									<a href="<?php echo get_term_link( $term );  ?>">See More...</a>
								</p>

					<?php endforeach; ?>

					<?php endif; ?>

      		<?php
			          $args = array( 'post_type' => 'post',
			                         'posts_per_page' => 4
			                       );
			          $latest_posts = get_posts( $args ); ?>

          <?php foreach ($latest_posts as $post) :  setup_postdata ( $post ); ?>
	              <!--  pictures  -->
	              <?php if (has_post_thumbnail() ) : ?>
	                <?php the_post_thumbnail( 'large' ); ?>
	              <?php endif; ?>

	              <!--  title -->

	              <h3>
	                <a href="<?php the_permalink(); ?>">
	                        <?php the_title(); ?>
	                </a>
	              </h3>

          <span class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
          </span>

          <?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
