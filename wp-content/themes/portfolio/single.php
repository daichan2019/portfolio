<?php get_header(); ?>

<!-- Start Main -->
<main class="single-page c-individual-page">
  <!-- Start Single -->
  <section class=" c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
      <?php the_title(); ?>
    </h2>
    <div class="c-container">
      <article>
        <?php
            if (have_posts()):
              while (have_posts()):the_post();
          ?>
        <?php get_template_part('includes/jumbotron'); ?>
        <div class="text-content">
          <?php the_content(); ?>
        </div>
        <?php
            endwhile;
          endif;
        ?>
      </article>
    </div>
  </section>
  <!-- End Single -->
</main>
<!-- End Main -->

<?php get_footer(); ?>