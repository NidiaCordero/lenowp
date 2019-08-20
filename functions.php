<?php
  function add_css_js()
  {
    //Style
    wp_enqueue_style('Monsterrat', "https://fonts.googleapis.com/css?family=Montserrat:400,600,700", false);
    wp_enqueue_style('OpenSans', "https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i", false);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style(
      'fontawesome',
      get_template_directory_uri() . '/css/fontawesome-all.css'
    );
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('myStyle', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('fav-icon', get_template_directory_uri().'/images/favicon.png');
    // //Script
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js',['jquery'] ,null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',['jquery'], null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',['jquery'], null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js',['jquery'], null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js',['jquery'], null, true);
    wp_enqueue_script('morphtext', get_template_directory_uri() . '/js/morphext.min.js',['jquery'], null, true);
    wp_enqueue_script('validator', get_template_directory_uri() . '/js/validator.min.js',['jquery'], null, true);
    wp_enqueue_script('my_scripts', get_template_directory_uri() . '/js/scripts.js',['jquery'], null, true);
  };
  add_action('wp_enqueue_scripts', 'add_css_js' );
  ?>