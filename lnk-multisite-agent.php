<?php

/**
 * Plugin Name: LNK-MULTISITE-AGENT
 * Plugin URI: https://github.com/linkerx/lnk-multisite-manager
 * Description: Gestion de articulos multisite
 * Version: 0.1
 * Author: Diego Martinez Diaz
 * Author URI: https://github.com/linkerx
 * License: GPLv3
 */

function lnk_multisite_agent_metadata($id, $post) {

    update_post_meta($post->ID, 'lnk_checked', 0); //revisado por manager
    update_post_meta($post->ID, 'lnk_onhome', 0); //publicado en home
    update_post_meta($post->ID, 'lnk_featured', 0); //destacado
    update_post_meta($post->ID, 'lnk_featured_mode', 0); //modo de impresion de destacado
<<<<<<< HEAD
    update_post_meta($post->ID, 'lnk_socialpost',0); //publicacion en redes sociales
=======
    update_post_meta($post->ID, 'lnk_onagenda',0); //publicacion en agenda
    update_post_meta($post->ID, 'lnk_agenda',0); //fecha de publicacion en agenda
    update_post_meta($post->ID, 'lnk_facebook_count',0); //publicacion en redes sociales
>>>>>>> 491070eb7ab8471048816580d3c179433b6f5556

}
add_action('publish_post', 'lnk_multisite_agent_metadata', 10, 2 );