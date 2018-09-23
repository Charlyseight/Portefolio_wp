<?php

include(__DIR__ . '/core/Menus/Container.php');
include(__DIR__ . '/core/Menus/Item.php');

function assets($path){
    return get_template_directory_uri() . '/' . trim($path, '/');
}

$port = new \stdClass();

register_nav_menu('main', 'menu principale');

function port_get_menu($location)
{
    global $port;
    if(!$port);
    if(!isset($port->menus)) $port->menus = [];
    if(!isset($port->menu[$location])) $port->menus[$location] = new Container($location);
    return $port->menus[$location];

}

function port_get_bem($base, $classes)
{
    $string = $base;
    if (!is_array($classes)) $classes = [$classes];
    foreach ($classes as $modifier) {
        $string .= ' ' . $base . '--' . $modifier;
    }
    return $string;
}

/*function port_register_image_sizes(){
    add_image_size('port-thumbnail', 480,220, true);
    add_image_size('port-big', 1024,520, true);
}*/

function remove_fields(){
    remove_post_type_support('page', 'editor');
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function port_register_custom_post_types() {
    register_post_type('works', [
        'label' => 'Works',
        'labels' => [
            'singular_name' => 'Work',
            'add_new_item' => 'Add a new work'
        ],
        'description' => 'All works realized during my studies',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => ['slug' => 'works']
    ]);
}
add_theme_support('post-thumbnails');
add_action('init', 'port_register_custom_post_types');


function port_custom_taxonomies(){
    //Taxonomy hierarchical
    $labels = [
      'name' => 'Types',
        'singular_name' => 'Type',
        'search_items' => 'Search Types',
        'all_items' => 'All types',
        'parent_item' => 'Parent Type',
        'parent_item_colon' => 'Parent Type:',
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => 'Add new Type',
        'new_item_name' => 'New Type Name',
        'menu_name' => 'Types'
    ];

    $args = [
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'type']
    ];

    register_taxonomy('type', ['works'], $args);
}
add_action('init', 'port_custom_taxonomies');

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items */
/*-----------------------------------------------------------------------------------*/

function remove_admin_menu_items() {
    $remove_menu_items = array(__('Comments'), __('Posts'), __('Tools'));
    global $menu;
    end ($menu);
    while (prev($menu)){
        $item = explode(' ',$menu[key($menu)][0]);
        if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
            unset($menu[key($menu)]);}
    }
}

add_action('admin_menu', 'remove_admin_menu_items');

/*-----------------------------------------------------------------------------------*/
/* Images custom */
/*-----------------------------------------------------------------------------------*/

function port_register_image_sizes() {
    add_image_size('port-thumbnail', 614, 350, true);
    add_image_size('port-big', 1232, 822, true);
}
add_action('after_setup_theme', 'port_register_image_sizes');
