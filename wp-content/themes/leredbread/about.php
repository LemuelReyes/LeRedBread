<?php
  /**
  * Template Name: About Page
  */

get_header();

 ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h2><?php echo CFS()->get( 'tagline' ); ?></h2>
      <h2>Le Red Bread Team</h2>
      <?php echo CFS()->get( 'team_copy' ); ?>
      <h2>Le Red Bread Bakery</h2>
      <?php echo CFS()->get( 'bakery_copy' ); ?>
      <h2>Our Story</h2>
      <?php echo CFS()->get( 'our_story_copy' ); ?>
    </main>
  </div>

  <?php get_footer(); ?>
