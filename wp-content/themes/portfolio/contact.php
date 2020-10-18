<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<!-- Start Main -->
<main class="c-individual-page">
  <!-- Start Contact -->
  <section class="contact c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
      <?php the_title(); ?>
    </h2>
    <div class="c-container">
      <div class="form-wrap">
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- End Contact -->
</main>
<!-- End Main -->

<?php get_footer(); ?>