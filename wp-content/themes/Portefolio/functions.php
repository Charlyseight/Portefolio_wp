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

