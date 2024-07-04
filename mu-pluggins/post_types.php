<?php
function register_posts(){
  register_post_type( 'cavalos', array(
      'supports' => array('title', 'editor', 'excerpt','thumbnail'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Matrizes',
        'add_new' => 'Nova Matriz',
        'add_new_item' => 'Nova Matriz',
        'edit_item' => 'Editar Matriz',
        'all_items' => 'Todas Matrizes',
        'singular_name' => "Matriz"
      ),
      'menu_icon' => 'dashicons-buddicons-activity',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
    
      ));

  //Eventos Post Type
  register_post_type( 'eventos', array(
      'supports' => array('title', 'editor', 'excerpt','thumbnail'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Eventos',
        'add_new' => 'Novo Evento',
        'add_new_item' => 'Novo Evento',
        'edit_item' => 'Editar Evento',
        'all_items' => 'Todos Eventos',
        'singular_name' => "Evento"
      ),
      'menu_icon' => 'dashicons-buddicons-groups',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 6,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
    
      ));

      //Outras Atividades Post Type
  register_post_type( 'outras_atividades', array(
      'supports' => array('title', 'editor', 'excerpt','thumbnail'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Outras Atividades',
        'add_new' => 'Nova Atividade',
        'add_new_item' => 'Nova Atividade',
        'edit_item' => 'Editar Atividade',
        'all_items' => 'Todas Atividades',
        'singular_name' => "Atividade"
      ),
      'menu_icon' => 'dashicons-plus',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 7,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
    
      ));

      //Agenda Post Type
  register_post_type( 'agenda', array(
      'supports' => array('title', 'editor', 'excerpt','thumbnail'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Agenda',
        'add_new' => 'Nova Agenda',
        'add_new_item' => 'Nova Agenda',
        'edit_item' => 'Editar Agenda',
        'all_items' => 'Todas Agenda',
        'singular_name' => "Agenda"
      ),
      'menu_icon' => 'dashicons-calendar',
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 8,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
    
      ));


  //Blog Post Type
  register_post_type( 'blog', array(
    'supports' => array('title', 'editor', 'excerpt','thumbnail'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Blog',
      'add_new' => 'Novo Post',
      'add_new_item' => 'Novo Blog Post',
      'edit_item' => 'Editar Blog',
      'all_items' => 'Todos Blogs',
      'singular_name' => "Blog"
    ),
    'menu_icon' => 'dashicons-admin-site-alt3',
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 8,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
  
    ));
}


add_action('init', 'register_posts');




