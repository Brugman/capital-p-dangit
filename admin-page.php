<?php

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

