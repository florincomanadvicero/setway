<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store Child
 * @version		1.0.1
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function sports_store_child_enqueue_styles() {
    wp_enqueue_style('sports-store-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'sports_store_child_enqueue_styles', 11);
?>