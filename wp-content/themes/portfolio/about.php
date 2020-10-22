<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>

<!-- Start Main -->
<main class="c-individual-page">
  <!-- Start About -->
  <section class="about c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
      <?php the_title(); ?>
    </h2>
    <div class="c-container">
      <div class="profile">
        <h3 class="animated" data-animate="fadeInLeft">Profile</h3>
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
      </div>
      <div class="skills animated" data-animate="fadeInLeft">
        <h3>Skills</h3>
        <div class="skills-wrap">
          <p class="subtitle">佐藤大地が提供できる技術は以下の通りです。</p>
          <div class="skills-grid">
            <dl class="animated" data-animate="fadeInUp">
              <dt>マークアップ</dt>
              <dd>HTML5, CSS3, BootStrap4</dd>
            </dl>
            <dl class="animated" data-animate="fadeInUp">
              <dt>フロントエンド</dt>
              <dd>
                JavaScript(ES6), React, Redux, TypeScript, Sass, Webpack,
                Babel, WordPress
              </dd>
            </dl>
            <dl class="animated" data-animate="fadeInUp">
              <dt>その他ツール</dt>
              <dd>git, npmなど</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->
</main>
<!-- End Main -->

<?php get_footer(); ?>