<?php

/**
 * Admin page: HTML.
 */

function cpd_admin_page()
{
?>
<div class="wrap">

    <h2><?php _e( 'Capital P Dangit', 'capital-p-dangit' ); ?></h2>

    <form method="post" action="options.php">
<?php

settings_fields('capital-p-dangit');
do_settings_sections('capital-p-dangit');
submit_button();

?>
    </form>

</div><!-- wrap -->
<?php
}

/**
 * Admin page: Register menu item.
 */

add_action( 'admin_menu', function () {
    add_options_page(
        'Capital P Dangit',
        'Capital P Dangit',
        'manage_options',
        'capital-p-dangit',
        'cpd_admin_page'
    );
});

/**
 * Sections and fields: Register.
 */

add_action( 'admin_init', function () {
    add_settings_section(
        'cpd_section_1',
        '',
        false,
        'capital-p-dangit'
    );
    add_settings_field(
        'cpd_field_1',
        'Field 1',
        'cpd_field_1_cb',
        'capital-p-dangit',
        'cpd_section_1'
    );
    register_setting( 'capital-p-dangit', 'cpd_field_1' );
});

/**
 * Sections: HTML.
 */

function cpd_section_1_cb( $args )
{
    // $args['id']
    // $args['title']
    // $args['callback']

    echo 'string';
}

/**
 * Fields: HTML.
 */

function cpd_field_1_cb()
{
?>
<input type="text" name="cpd_field_1" id="cpd_field_1" value="<?=get_option( 'cpd_field_1' );?>">
<?php
}

