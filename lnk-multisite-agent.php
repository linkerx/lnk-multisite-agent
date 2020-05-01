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

function lnk_multisite_agent_metadata($post) {

    $tipos = json_decode(get_option('lnk_agent_post_types',"['post']"));
    if(in_array($post->post_type,$tipos)){
        if( !wp_is_post_revision( $post->ID ) ) {
            update_post_meta( $post->ID, 'lnk_checked', 0 ); //revisado por manager
            update_post_meta( $post->ID, 'lnk_onhome', 0 ); //publicado en home
            update_post_meta( $post->ID, 'lnk_featured', 0 ); //destacado
            update_post_meta( $post->ID, 'lnk_featured_mode', 0 ); //modo de impresion de destacado
            update_post_meta( $post->ID, 'lnk_onagenda',0 ); //publicacion en agenda
            update_post_meta( $post->ID, 'lnk_agenda',0 ); //fecha de publicacion en agenda
            update_post_meta( $post->ID, 'lnk_facebook_count',0 ); //publicacion en redes sociales
            update_post_meta( $post->ID, 'lnk_site_metadata',"" ); //otros datos propios del sitio
            update_post_meta($post->ID, 'lnk_compartido,""'); //compartido con otros subsitios
        }
    }
}
add_action('new_to_publish', 'lnk_multisite_agent_metadata', 10, 1 );