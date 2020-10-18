<?php get_header(); ?>
<!-- Start Main -->
<main class="top-page">
  <!-- Start First View -->
  <section class="first-view">
    <div class="catch">
      <h2 class="name">Daichi Sato</h2>
      <p class="subtitle">WEB FRONT-END ENGINEER</p>
      <p class="c-button-wrap">
            <a class="c-button contact-button" href="<?php echo home_url('/contact'); ?>"> Contact </a>
          </p>
    </div>
  </section>
  <!-- End First View -->

  <!-- Start About -->
  <section class="about c-section">
    <div class="c-container">
      <div class="heading-wrap">
        <h3 class="top-heading animated slow" data-animate="fadeInUp">
              About
            </h3>
      </div>
      <div class="c-profile-wrap">
        <div class="avatar">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/icon.png" alt="佐藤大地" />
        </div>
        <div class="profile-box">
          <ul class="profile-list">
            <li class="profile-item animated slow" data-animate="fadeInUp">
              Name: 佐藤大地
            </li>
            <li class="profile-item animated slow" data-animate="fadeInUp">
              University: 新潟大学経済学部
            </li>
            <li class="profile-item animated slow" data-animate="fadeInUp">
              Birthday: 1996/2/28
            </li>
          </ul>
          <div class="text-wrap">
            <p class="animated slow" data-animate="fadeInUp">
                  東京のスタートアップ企業でWebアプリ開発やweb制作をしているWebエンジニア。
                  <br />
                  専門領域はフロントエンドです。
                </p>
            <p class="animated slow" data-animate="fadeInUp">
                  コーヒーとレモンサワーが好物。<br />
                  心にいつも音楽を。趣味はギターの演奏です。
                </p>
          </div>
        </div>
      </div>
      <div class="c-button-wrap">
        <a href="<?php echo home_url('/about'); ?>" class="c-button">詳しくはこちら</a>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Start Works -->
  <section class="works c-section">
    <div class="c-container">
      <div class="heading-wrap">
        <h3 class="top-heading animated slow" data-animate="fadeInUp">
              Works
            </h3>
      </div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php
            $the_query = subLoop();
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
          ?>
          <div class="swiper-slide">
            <a href="<?php the_permalink() ?>">
              <h4 class="slide-heading"><?php the_title(); ?></h4>
              <div class="img-wrap">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="">
              </div>
              <p>
                <?php limitCharacter($post, 90); ?>
              </p>
            </a>
          </div>
          <?php
              endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div class="c-button-wrap">
        <a href="<?php echo home_url('/works'); ?>" class="c-button">全ての事例を見る</a>
      </div>
    </div>
  </section>
  <!-- End works -->

  <!-- Start Contact -->
  <section class="contact c-section">
    <div class="c-container">
      <div class="heading-wrap">
        <h3 class="top-heading animated slow" data-animate="fadeInUp">
              Contact
            </h3>
      </div>
      <p class="text animated slow" data-animate="fadeInUp">
            企業HPなどのWebサイト制作、アプリ開発、システム開発などのお見積もり、ご相談はお気軽にご連絡ください。<br />
            お客様だけでなく、エンドユーザーにも喜んでいただけるよう技術を提供します。
          </p>
      <div class="c-button-wrap">
        <a href="<?php echo home_url('/contact'); ?>" class="c-button">お問い合わせ</a>
      </div>
    </div>
  </section>
  <!-- End Contact -->
</main>
<!-- End Main -->
<?php get_footer(); ?>