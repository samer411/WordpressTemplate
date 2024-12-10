 <?php

function newtemplate_theme_support(){

    add_theme_support('title-tag');
}


function newtemplate_menus(){


    $locations = array(
        'primary' => "desktop primary left sidebar",
        'footer' => "footer menu items"
    );
    register_nav_menus($locations);

}

add_action('init','newtemplate_menus');


add_action('after_setup_theme','newtemplate_theme_support');
function newTmeplate_register_style(){
    $version  = wp_get_theme()->get("Version");
    wp_enqueue_style('samer-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
    wp_enqueue_style('samer-style',get_template_directory_uri()."/style.css",array(),$version,'all');
    wp_enqueue_style('samer-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
}
add_action('wp_enqueue_scripts', 'newTmeplate_register_style' );
?> 
 <?php

function newTmeplate_register_scripts(){
   wp_enqueue_script('samer-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
   wp_enqueue_script('samer-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'3.4.1',true);
   wp_enqueue_script('samer-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'3.4.1',true);
   wp_enqueue_script('samer-bootstrap',get_template_directory_uri().'assets/js/main.js',array(),'3.4.1',true);
}
add_action('wp_enqueue_scripts', 'newTmeplate_register_scripts' );
?> 