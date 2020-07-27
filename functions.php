<?php

function faun_supports() {
  add_theme_support('title-tag');
}
function faun_register_assets(){
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_register_style('style',get_template_directory_uri().'/style.css', [],true);
  wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',['popper','jquery'],false,true);
  wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',[],false,true);
  wp_deregister_script('jquery');
  wp_register_script('jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',[],false,true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('main');
  wp_enqueue_script('bootstrap');
}



add_action('after_setup_theme','faun_supports');
add_action('wp_enqueue_script','faun_register_assets');
