<?php


// Allow for shortcodes in messages
function acf_load_field_message($field  ) {
    $screen = get_current_screen();
    if ($screen->post_type !== "acf-field-group") {
        $field['message'] = do_shortcode($field['message']);
    }
    return $field;
}
add_filter('acf/load_field/type=message', 'acf_load_field_message', 10, 3);



function email_to_user_post( $atts ){
    $post_info = get_post( );
    $author_id = $post_info->post_author;
    $autorMeta = get_the_author_meta( 'email', $author_id );
    $linkDoProfilu = '<p>Link do profilu </p>'.'<a href="/wp-admin/users.php?s='.$author_id.'">Profil</a>';
    $emialSend = '<a target="_blank" href="mailto:'.$autorMeta.'?subject=Folks prośba o poprawę:">'.$autorMeta.'</a>' ;
    return $emialSend.$linkDoProfilu;
}
add_shortcode( 'emailtouser', 'email_to_user_post' );