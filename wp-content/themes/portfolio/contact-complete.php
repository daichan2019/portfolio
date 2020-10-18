<?php
/*
Template Name: contact-complete
*/
?>

<?php get_header(); ?>
<!-- Start Main -->
<!-- Start Main -->
<main class="c-individual-page">
  <!-- Start Contact -->
  <section class="contact c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
          Contact
        </h2>
    <div class="c-container">
      <div class="form-wrap">
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <p class="done-text">
                お問い合わせの送信が完了しました。<br />
                後日担当者よりご返信いたしますので、しばらくお待ちください。
              </p>
        <div class="c-button-wrap">
          <a href="'<?php echo home_url();?>'" class="c-button">トップページへ戻る</a>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End Main -->
<?php get_footer(); ?>