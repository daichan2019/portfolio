<?php

  function readAssets() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('main-script', get_theme_file_uri('/assets/js/index.js'), array( 'jquery' ), true);
    wp_enqueue_style('my_reset', get_template_directory_uri().'/assets/css/reset.css', array());
    wp_enqueue_style('my_styles', get_template_directory_uri().'/assets/css/style.css', array());
    wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array());
  }

  function hooks() {
    add_action('wp_enqueue_scripts', 'readAssets');
  }

  function init() {
    hooks();
  }

  init();