<?php

function azal_register_styles(){
    
    wp_enqueue_style('azal-style', get_template_directory_uri() . "/style.css", array('azal-bootstrap'), '1.0', 'all');
    wp_enqueue_style('azal-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('azal-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'azal_register_styles');

?>