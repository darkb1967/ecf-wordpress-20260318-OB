<?php 

function ob_theme_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ob_theme_setup');

function ob_sidebar_setup() {
    register_sidebar([
        'id' => 'principal',
        'name' => 'left-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ]);
}

add_action('widgets_init', 'ob_sidebar_setup');

function ob_menu_setup() {
    register_nav_menus([
        'top-menu' => 'Mon top menu'
    ]);
}

add_action('init', 'ob_menu_setup');