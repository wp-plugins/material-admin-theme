<?php

/*
Plugin Name: Material Admin Theme
Plugin URI:
Description: Clean, eye-pleasing theme
Author: Gregory Petrosyan
Version: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function material_style() {
    wp_enqueue_style('material-theme', plugins_url('assets/material.css', __FILE__));
     wp_enqueue_style('material-nunito', '//fonts.googleapis.com/css?family=Nunito:400,300,500,600,700');
}
add_action('admin_enqueue_scripts', 'material_style');
add_action('login_enqueue_scripts', 'material_style');
?>