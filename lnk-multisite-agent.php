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

    update_post_meta($post->ID, 'lnk_revision', 0);
    update_post_meta($post->ID, 'lnk_onhome', 0);

}
add_action('publish_post', 'lnk_multisite_agent_metadata', 10, 2 );