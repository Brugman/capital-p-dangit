<?php

$search = ['wordpress','counter-strike','html'];
$replace = ['WordPress','Counter-Strike','HTML'];

function cpd_make_replacements( $content )
{
    global $search, $replace;

    $content = str_ireplace( $search, $replace, $content );

    return $content;
}

add_filter( 'the_content', 'cpd_make_replacements', 10, 1 );
add_filter( 'the_title', 'cpd_make_replacements', 10, 1 );

