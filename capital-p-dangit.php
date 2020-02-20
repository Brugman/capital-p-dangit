<?php

/**
 * Plugin Name: Capital P Dangit
 * Description:
 * Version: 1.0.0
 * Plugin URI: https://github.com/Brugman/capital-p-dangit
 * Author: Tim Brugman
 * Author URI: https://timbr.dev/
 * Text Domain: capital-p-dangit
 */

if ( !defined( 'ABSPATH' ) )
    exit;

/**
 * Admin page: HTML.
 */

function cpd_admin_page()
{
?>
<div class="wrap">

    <h2><?php _e( 'Capital P Dangit', 'capital-p-dangit' ); ?></h2>

</div><!-- wrap -->
<?php
}

/**
 * Admin page: Register menu item.
 */

add_action( 'admin_menu', function () {
    add_management_page(
        'Capital P Dangit',
        'Capital P Dangit',
        'manage_options',
        'capital-p-dangit',
        'cpd_admin_page'
    );
});

/**
 * Add settings link.
 */

add_filter( 'plugin_action_links_'.plugin_basename( __FILE__ ), function ( $links ) {
    $settings_url = admin_url( 'tools.php?page=capital-p-dangit' );
    $settings_link = '<a href="'.$settings_url.'">'.__( 'Settings', 'capital-p-dangit' ).'</a>';
    array_unshift( $links, $settings_link );
    return $links;
});

