<?php

function newTmeplate_register_style(){
    wp_enqueue_style('samer-bootstrap',get_template_directory_uri()."/style.css",array(),'1.0','all');
}
add_action('wp_enqueue_scripts', 'newTmeplate_register_style' );
?>