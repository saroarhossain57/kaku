<?php

/**
 * Add class in li
 */

function kaku_menu_li_classes($classes, $item, $args){
    if ($args->theme_location == 'Primary_menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'kaku_menu_li_classes', 1, 3);

/**
 * Add class in a
 */
function kaku_add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'kaku_add_menuclass');
