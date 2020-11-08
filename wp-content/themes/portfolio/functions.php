<?php

  function readAssets() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), true);
    wp_enqueue_script('main-script', get_theme_file_uri('/assets/js/index.js'), array( 'jquery' ), true);
    wp_enqueue_style('my_reset', get_template_directory_uri().'/assets/css/reset.css', array());
    wp_enqueue_style('my_styles', get_template_directory_uri().'/assets/css/style.css', array());
    wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array());
    wp_enqueue_style('swiper', '//unpkg.com/swiper/swiper-bundle.min.css', array());
  }

  function subLoop ($number = -1,$paged = ""){
    $args = array(
      'post_type' => 'post',
      'no_found_rows' => false,
    );

    $the_query = new WP_Query($args);
    return $the_query;
  }

  function limitCharacter($post, $limit) {
    $mbStrength = mb_strlen($post->post_content);

    if($mbStrength > $limit) {
      $content= mb_substr(strip_tags($post->post_content),0,$limit) ;
      echo $content. '…' ;
    } else {
      echo str_replace('\n', '', strip_tags($post->post_content));
    }
  }

  function cancelAutoParagraph() {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }

  function wp_activeFunction(){
    add_theme_support('post-thumbnails');

    register_nav_menus(
      array(
        'place_global' => 'グローバル',
      )
    );

    cancelAutoParagraph();
  }

  function hooks() {
    add_action('wp_enqueue_scripts', 'readAssets');
  }

  function init() {
    wp_activeFunction();
    hooks();
  }

  init();