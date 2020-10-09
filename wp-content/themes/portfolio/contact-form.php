<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
<!-- Start Main -->
<main class="contact-page">
  <!-- Start Contact -->
  <section id="contact" class="contact c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
          Contact
        </h2>
    <div class="c-container">
      <div class="form-wrap">
        <form action method="POST">
          <?php if (have_posts()): ?>
          <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </section>
  <!-- End Contact -->
</main>
<!-- End Main -->
<?php get_footer(); ?>