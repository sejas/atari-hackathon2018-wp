<?php
$stylesheet_directory_uri = get_stylesheet_directory_uri();
define('ATARIURI', strtr($stylesheet_directory_uri, array('http://'=>'https://')));


add_action( 'wp_enqueue_scripts', 'atari_scripts' );
function atari_scripts() {
    wp_enqueue_style( 'parent-style', strtr(get_template_directory_uri(), array('http://'=>'https://')) . '/style.css' , null, 'v1.0');

}