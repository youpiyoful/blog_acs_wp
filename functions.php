<?php

define("YFFLAT_VERSION", "1.0.1");

// chargement des scripts dans le front-end

function yfflat_scripts(){
    // chargement des styles
    wp_enqueue_style("yfflat_bootstrap-core", get_template_directory_uri() . "/css/bootstrap.min.css", array(), YFFLAT_VERSION, "all");
    wp_enqueue_style("yfflat_custom", get_template_directory_uri() . "/css/style.css", array("yfflat_bootstrap-core"), YFFLAT_VERSION, "all");

    // chargement des scripts
    wp_enqueue_script("yfflat_script", get_template_directory_uri() . "/js/app.js", array("jquery"), YFFLAT_VERSION, true);

} // fin function yfflat_scipts

add_action("wp_enqueue_scripts", "yfflat_scripts");

//chargement d'un script dans l'admin de worpress
function yfflat_admin_scripts() {
    // chargement des styles
    wp_enqueue_style("bootstrap-admin-core", get_template_directory_uri() . "/css/bootstrap.min.css", array(), FLAT_VERSION)
} // fin function yfflat_scripts

add_action("admin_init", "yfflat_admin_scripts");