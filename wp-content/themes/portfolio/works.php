<?php
/*
Template Name: works
*/
?>

<?php get_header(); ?>

<!-- Start Main -->
<main class="c-individual-page">
  <!-- Start Works -->
  <section id="works" class="works c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
          <?php the_title(); ?>
        </h2>
    <div class="c-container">
      <div class="works-wrap">
        <ul class="work-list">
          <?php
            $the_query = subLoop();
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
          ?>
          <li class="work-card animated" data-animate="fadeInUp">
            <a href="<?php the_permalink();?>">
              <div class="img-wrap">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="">
              </div>
              <div class="card-body">
                <h3 class="work-title"><?php the_title(); ?></h3>
                <p class="category">
                  <?php
                    $category = get_the_category();
                      if (!empty( $category )) { ?>
                  <?php
                        foreach($category as $cat){
                          echo  "$cat->cat_name " ;
                         } ?>
                  <?php } ?>
                </p>
              </div>
            </a>
          </li>
          <?php
              endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </section>
  <!-- End works -->
</main>
<!-- End Main -->

<?php get_footer(); ?>