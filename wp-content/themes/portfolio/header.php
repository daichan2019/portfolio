<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <title><?php bloginfo('name');  ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Start Header -->
  <header class="header">
    <div class="inner">
      <h1 class="header-logo">
          <a href=<?php echo home_url();?>>
            <img
              src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"
              alt="佐藤大地のポートフォリオ"
            />
          </a>
        </h1>
      <div class="nav-toggle">
        <span class="toggle-line"></span>
      </div>
      <nav class="header-nav">
        <ul class="nav-menu">
          <li class="nav-item js-smooth-scroll"><a href=<?php echo home_url();?>>Home</a></li>
          <li class="nav-item js-smooth-scroll">
            <a href="#about">About</a>
          </li>
          <li class="nav-item js-smooth-scroll">
            <a href="#works">works</a>
          </li>
          <li class="nav-item js-smooth-scroll">
            <a href="#contact">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="bg-black"></div>
  </header>
  <!-- End Header -->