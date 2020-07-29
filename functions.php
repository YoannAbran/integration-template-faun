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
  wp_enqueue_style('style');
  wp_enqueue_script('bootstrap');
}
function about_register_post_types() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
  $labels = array(
        'name' => 'About',
        // 'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'About',
        // 'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le About',
        'menu_name' => 'About'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        // 'show_in_rest' => true,
        // 'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,

	);

	register_post_type( 'about', $args );
}
function remove_admin_bar_bump() {
   remove_action( 'wp_head', '_admin_bar_bump_cb' );
}

add_action('get_header', 'remove_admin_bar_bump');
add_action('after_setup_theme','faun_supports');
add_action('wp_enqueue_script','faun_register_assets');
add_action( 'init', 'about_register_post_types' );
