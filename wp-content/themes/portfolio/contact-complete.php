<?php
/*
Template Name: contact-complete
*/
?>

<?php get_header(); ?>
<!-- Start Main -->
<main class="contact-page">
  <section class="contact-complete contact c-section">
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
          <button class="c-button submit-button" type="button" onclick="location.href='<?php echo home_url();?>'">
            トップページへ戻る
          </button>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End Main -->
<?php get_footer(); ?>