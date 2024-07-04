<?php
require_once get_template_directory() . '/int/nav__walk.php';
// Incluir o arquivo de Custom Post Types
require_once get_template_directory() . '/mu-pluggins/post_types.php';

function university_files() {
  //wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('main-university-js', get_theme_file_uri('/htmlHomeScript.js'));
  //wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  //wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/style.css'));
  //wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

//Register Menus
register_nav_menu('main-menu', 'Main menu');

// Adicionar suporte a thumbnails para posts e páginas
function theme_features(){
  add_theme_support('post-thumbnails', array('post', 'page','agenda', 'matrizes', 'eventos','blog'));
}

add_action('after_setup_theme', 'theme_features');