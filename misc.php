<?php

/**
 * Add settings link.
 */

add_filter( 'plugin_action_links_'.plugin_basename( __FILE__ ), function ( $links ) {
    $settings_url = admin_url( 'tools.php?page=capital-p-dangit' );
    $settings_link = '<a href="'.$settings_url.'">'.__( 'Settings', 'capital-p-dangit' ).'</a>';
    array_unshift( $links, $settings_link );
    return $links;
});

