<?php get_header(); ?>
<!-- Start Main -->
<main>
  <!-- Start First View -->
  <section class="first-view">
    <div class="catch">
      <h2 class="name">Daichi Sato</h2>
      <p class="subtitle">WEB FRONT-END ENGINEER</p>
      <p class="c-button-wrap">
            <a class="c-button contact-button" href="#contact"> Contact </a>
          </p>
    </div>
  </section>
  <!-- End First View -->

  <!-- Start About -->
  <section id="about" class="about c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
          About
        </h2>
    <div class="c-container">
      <div class="profile">
        <h3 class="animated" data-animate="fadeInLeft">Profile</h3>
        <div class="profile-wrap animated" data-animate="fadeInLeft">
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
            <p class="career animated slow" data-animate="fadeInUp">
                  2018年4月、新卒で食品スーパーマーケットに入社し、部門チーフとして2019年6月まで働く。<br />
                  WordPressでブログ運営を始めたことからプログラミング、特にフロントエンドの領域に関心を持ち、2019年8月から勉強を開始。<br />
                  独学でHTML,CSSのマークアップやJavaScript,jQueryを用いたwebページを作るところから始め、現在はReactなどSPAフレームワークを用いたwebアプリケーション開発のスキルアップを目指しています。
                </p>
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

  <!-- Start Works -->
  <section id="works" class="works c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
          Works
        </h2>
    <div class="c-container">
      <div class="works-wrap">
        <ul class="work-list">
          <li class="work-card animated" data-animate="fadeInUp">
            <a href="">
              <div class="bg-config img-wrap">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/works-portfolio.png" alt="佐藤大地のポートフォリオ" />
              </div>
              <div class="card-body">
                <h3 class="work-title">佐藤大地のポートフォリオ</h3>
                <p class="category">
                      Web制作 | デザイン | レスポンシブ | アニメーション
                    </p>
              </div>
            </a>
          </li>
          <li class="work-card animated" data-animate="fadeInUp">
            <a href="">
              <div class="bg-config img-wrap">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/works-portfolio.png" alt="佐藤大地のポートフォリオ" />
              </div>
              <div class="card-body">
                <h3 class="work-title">佐藤大地のポートフォリオ</h3>
                <p class="category">
                      Web制作 | デザイン | レスポンシブ | アニメーション
                    </p>
              </div>
            </a>
          </li>
          <li class="work-card animated" data-animate="fadeInUp">
            <a href="">
              <div class="bg-config img-wrap">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/works-portfolio.png" alt="佐藤大地のポートフォリオ" />
              </div>
              <div class="card-body">
                <h3 class="work-title">佐藤大地のポートフォリオ</h3>
                <p class="category">
                      Web制作 | デザイン | レスポンシブ | アニメーション
                    </p>
              </div>
            </a>
          </li>
          <li class="work-card animated" data-animate="fadeInUp">
            <a href="">
              <div class="bg-config img-wrap">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/works-portfolio.png" alt="佐藤大地のポートフォリオ" />
              </div>
              <div class="card-body">
                <h3 class="work-title">佐藤大地のポートフォリオ</h3>
                <p class="category">
                      Web制作 | デザイン | レスポンシブ | アニメーション
                    </p>
              </div>
            </a>
          </li>
          <li class="work-card animated" data-animate="fadeInUp">
            <a href="">
              <div class="bg-config img-wrap">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/works-portfolio.png" alt="佐藤大地のポートフォリオ" />
              </div>
              <div class="card-body">
                <h3 class="work-title">佐藤大地のポートフォリオ</h3>
                <p class="category">
                      Web制作 | デザイン | レスポンシブ | アニメーション
                    </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End works -->

  <!-- Start Contact -->
  <section id="contact" class="contact c-section">
    <h2 class="c-section-title works-title animated" data-animate="fadeInLeft">
          Contact
        </h2>
    <div class="c-container">
      <div class="form-wrap">
        <?php echo do_shortcode('[mwform_formkey key="5"]'); ?>
      </div>
    </div>
  </section>
  <!-- End Contact -->

</main>
<!-- End Main -->
<?php get_footer(); ?>