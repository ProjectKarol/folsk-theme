<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);



    add_filter('manage_users_columns', 'pippin_add_user_id_column');
    function pippin_add_user_id_column($columns) {
        $columns['user_id'] = 'User ID';
        return $columns;
    }

    add_action('manage_users_custom_column',  'pippin_show_user_id_column_content', 8, 3);
    function pippin_show_user_id_column_content($value, $column_name, $user_id) {
        $user = get_userdata( $user_id );
        if ( 'user_id' == $column_name )
            return $user_id;
        return $value;
    }




    add_filter('acf/validate_value/name=kategorie_tworczosci', 'my_validate_value', 10, 4);
    function my_validate_value($valid, $value, $field, $input) {

        if(!$valid) {
            return $valid;
        }

        if(sizeof($value) > 3) {
            $valid = 'Możesz wybrać tylko max 3 kategorie';
        } else {
            $valid = true;
        }

        return $valid;

    }


    // form as draft


function create_post_as_draft( $post_data ) {
    // Set post status to draft
    $post_data['post_status'] = 'draft';

    return $post_data;
}
add_filter( 'af/form/editing/post_data/key=form_5e5143d80de43', 'create_post_as_draft', 10, 1 );


function wp_add_upload_files_cap() {
    $role = get_role( 'author' ); //The role you want to grant the capability
    $role->add_cap( 'upload_files' );
    $role->add_cap( 'edit_pages' );
    $role->add_cap( 'edit_posts' );
}
register_activation_hook( __FILE__, 'wp_add_upload_files_cap' );



// // requed
add_filter('acf/validate_value/name=facebook-acf', 'my_acf_validate_value', 10, 4);
add_filter('acf/validate_value/name=instagram-acf', 'my_acf_validate_value', 10, 4);
add_filter('acf/validate_value/name=youtube-acf', 'my_acf_validate_value', 10, 4);
add_filter('acf/validate_value/name=snapchat-acf', 'my_acf_validate_value', 10, 4);
add_filter('acf/validate_value/name=twitter-acf', 'my_acf_validate_value', 10, 4);
add_filter('acf/validate_value/name=linkedin-acf', 'my_acf_validate_value', 10, 4);

function my_acf_validate_value( $valid, $value, $field, $input ){

	// bail early if value is already invalid
	if( !$valid ) {
		return $valid;
	}
        // get two values
        // you need to change these based on your field keys

      //  ddd($_POST['acf']);
	    $value_1 = $_POST['acf']['field_5f9c4d1df8eeb']['field_5e386986d60d3']; // facebook
        $value_2 = $_POST['acf']['field_5f9c522b25a7d']['field_5e38721b0b596']; //instagram
        $value_3 = $_POST['acf']['field_5f9c54501f3ca']['field_5e3872320b597'];//youtube
        $value_4 = $_POST['acf']['field_5f9c54cb447f6']['field_5e3872430b598']; // snapchat
        $value_5 = $_POST['acf']['field_5f9c5516447f7']['field_5e38725c0b599']; //twitter
        $value_6 = $_POST['acf']['field_5f9c554c447f8']['field_5e38726a0b59a']; // linkedIn

	if (empty($value_1) && empty($value_2) &&  empty($value_3) &&  empty($value_4) &&  empty($value_5)  &&  empty($value_6))   {
            $valid = 'Musisz wypełnić przynajmniej jedno pole.';
        }
	// return
	return $valid;
}


// force basic uploader for a certain field
function my_acf_force_basic_uploader( $field ) {

    // don't do this on the backend
    if(is_admin()) return $field;

    // set the uploader setting before rendering the field
    acf_update_setting('uploader', 'basic');

    // return the field data
    return $field;

}

// target the field using its name
add_filter('acf/prepare_field/name=_thumbnail_id', 'my_acf_force_basic_uploader');


// redirect i not admin
if ( is_user_logged_in() && is_admin() ) {
    global $current_user;
    get_currentuserinfo();
    $user_info = get_userdata($current_user->ID);
    $roles = $user_info->roles;
    // ddd($user_info->roles);
    if ( in_array("author", $roles) )
    {
        header( 'Location: '.get_bloginfo('home').'/dolacz/?redirect='.get_bloginfo('home').'/wp-admin/' );
    }
}