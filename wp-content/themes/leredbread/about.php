<?php
  /**
  * Template Name: About Page
  */

get_header();

 ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h2 class="about-tagline flex-text-center"><?php echo CFS()->get( 'tagline' ); ?></h2>
      <p class="flex-text-center about-sub-text">We are a team of creative and talented individuals who love making delicious treats.</p>

      <hr class="hr-symbol" />

      <div class="grey-dot"></div>


      <div class="about-section container">

      <!-- Team section  -->
      <div class="about-column-block">
      <img src="<?php echo get_template_directory_uri() . '/images\/team.jpg' ?>" alt="Le Bread Team Staff picture" class="team-picture" />

      <h2>le red bread team</h2>
      <span>Baking up a storm everyday</span>
      <?php echo CFS()->get( 'team_copy' ); ?>
      </div>
      <!--  Bakery section -->

      <div class="about-column-block">
      <img src="<?php echo get_template_directory_uri() . '/images\/bakery.jpg' ?>" alt="picture of Le Bread facility" class="bakery-picture"/>

      <h2>le red bread bakery</h2>
      <span>A home away from home.</span>
      <?php echo CFS()->get( 'bakery_copy' ); ?>
      </div>
      </div> <!-- ends about section class -->

      <!--  Story Section -->
      <section class="flex-middle story-section">
      <div class="container">
        <h2 class="flex-text-center">our story</h2>
      <?php echo CFS()->get( 'our_story_copy' ); ?>
      </div>
      </section>
    </main>
  </div>

  <div class="products-flex contact-block">
    <div class="products-bar">
      <p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</p>
      <button type="button" name="button" class="products-button">contact us</button>
    </div>
  </div>

  <?php get_footer(); ?>
