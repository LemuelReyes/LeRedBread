<?php
  /**
  * Template Name: About Page
  */

get_header();

 ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h2 class="flex-text-center"><?php echo CFS()->get( 'tagline' ); ?></h2>
      <p class="flex-text-center">We are a team of creative and talented individuals who love making delicious treats.</p>

      <div class="about-section">
      <!-- Team section  -->
      <div class="about-column-block">
      <img src="<?php bloginfo( 'template_url' ); ?>/images/team.jpg" alt="Le Bread Team picture" class="team-picture"/>
      <h2>Le Red Bread Team</h2>
      <?php echo CFS()->get( 'team_copy' ); ?>
      </div>
      <!--  Bakery section -->

      <div class="about-column-block">
      <img src="<?php bloginfo( 'template_url' ); ?>/images/bakery.jpg" alt="picture of Le Bread facility" class="bakery-picture"/>
      <h2>Le Red Bread Bakery</h2>
      <?php echo CFS()->get( 'bakery_copy' ); ?>
      <h2 class="flex-text-center">Our Story</h2>
      </div>
      </div> <!-- ends about section class -->

      <!--  Story Section -->
      <section class="flex-middle">
      <div class="container">
      <?php echo CFS()->get( 'our_story_copy' ); ?>
      </div>
      </section>

    </main>
  </div>

  <?php get_footer(); ?>
