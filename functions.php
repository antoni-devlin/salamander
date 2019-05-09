<?php

  // Add theme support for Featured Images
  add_theme_support('post-thumbnails', array(
  'post',
  'page',
  'custom-post-type-name',
  ));

  function static_files() {
    wp_enqueue_style('main_css', get_stylesheet_uri());
    // wp_enqueue_script('main_css', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'static_files');
