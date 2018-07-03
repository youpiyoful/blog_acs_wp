<?php

define("YFFLAT_VERSION", "1.0.1");

// chargement des scripts dans le front-end

function yfflat_scripts(){
    // chargement des styles
    wp_enqueue_style("yfflat_bootstrap-core", get_template_directory_uri() . "/css/bootstrap.min.css", array(), YFFLAT_VERSION, "all");
    wp_enqueue_style("yfflat_custom", get_template_directory_uri() . "/css/style.css", array("yfflat_bootstrap-core"), YFFLAT_VERSION, "all");

    // chargement des scripts
    wp_enqueue_script("yfflat_bootstrap_js", get_template_directory_uri() . "/js/bootstrap.min.js", array("jquery"), YFFLAT_VERSION, true);
    wp_enqueue_script("yfflat_admin_script", get_template_directory_uri() . "/js/app.js", array("jquery", "yfflat_bootstrap_js"), YFFLAT_VERSION, true);
} // fin function yfflat_scipts

add_action("wp_enqueue_scripts", "yfflat_scripts");

//chargement d'un script dans l'admin de worpress
function yfflat_admin_scripts() {
    // chargement des styles
    wp_enqueue_style("bootstrap-admin-core", get_template_directory_uri() . "/css/bootstrap.min.css", array(), YFFLAT_VERSION);
} // fin function yfflat_scripts

add_action("admin_init", "yfflat_admin_scripts");

//============================================================================================================
//=================          utilitaires$
//============================================================================================================
function yfflat_setup() {
    //support des vignettes
    add_theme_support( "post-thumbnails" );

    // enlève générateur de version
    remove_action("wp_head", "wp_generator");
    
    //enlève les guillemets à la fr
    remove_filter("the_content", "wptexturize");

    // support du titre
    add_theme_support( "title-tag" );

} //fin function  yfflat_setup

add_action("after_setup_theme", "yfflat_setup");
