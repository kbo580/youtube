<?php
function my_style_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/styles.css' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/ファイル名.js');
}
add_action( 'wp_enqueue_scripts', 'my_style_scripts' );




?>