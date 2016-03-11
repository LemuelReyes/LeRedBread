<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title flex-text-center">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<hr class="hr-symbol" />
			<div class="grey-dot"></div>

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
															<h3><?php echo $term->name; ?></h3>
													</div>
									<?php endforeach; ?>
							<?php endif; ?>
					</div>
			</section>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


      <!--  CREATE A PRODUCT SQUARE -->
			<div class="product-grid">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium' ); ?>
      <?php endif; ?>

			<div class="flex-product-description">
      <span><?php the_title() ?></span>

      <span><?php echo CFS()->get( 'price' ); ?></span>
			</div>
			</div> <!-- ends flex product description -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
