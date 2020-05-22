<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Theme Directory
    |--------------------------------------------------------------------------
    |
    | This is the absolute path to your theme directory.
    |
    | Example:
    |   /srv/www/example.com/current/web/app/themes/sage
    |
    */

    'dir' => get_theme_file_path(),

    /*
    |--------------------------------------------------------------------------
    | Theme Directory URI
    |--------------------------------------------------------------------------
    |
    | This is the web server URI to your theme directory.
    |
    | Example:
    |   https://example.com/app/themes/sage
    |
    */

    'uri' => get_theme_file_uri(),
];



function get_user_last_influecer_slug(){
    // WP_Query arguments
    $args = array(
    'post_type' => array( 'influencerzy' ),
    'author' => get_current_user_id(),
    'post_status' => array('draft','pending','auto-draft', 'publish')
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
    $query->the_post();
    return get_post_field( 'post_name', get_the_ID() );
    }
    } else {
    // no posts found
    // ddd(get_post_field( 'post_name', get_the_ID() ));
    }

    // Restore original Post Data
    wp_reset_postdata();
    }

    get_user_last_influecer_slug();