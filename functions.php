<?php

function bstore_theme_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', 'Primary Menu');
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('init', 'bstore_theme_setup');


function set_excerpt_length()
{
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');


function bstore_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'=>'sidebar',
        'before_widget' => '<div class="p-4">',
        'after_widget'=>'</div>',
        'before_title' => '<h4>',
        'after_title'=>'</h4>',
    ));
}

add_action('widgets_init', 'bstore_init_widgets');
