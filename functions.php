<?php
register_nav_menus([
        'primary' => 'Primary menu'
]);

function add_additional_class_on_li($classes, $item, $args) {

    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

function add_nav_link_class($attrs, $menu_item, $args) {
    if(isset($args->link_class)) {
        $attrs['class'] = $args->link_class;
    }
    return $attrs;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_filter( 'nav_menu_link_attributes', 'add_nav_link_class', 1, 3);

wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/dist/style.css' );