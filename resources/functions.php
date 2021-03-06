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


// add user column
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

// Validations
require dirname(__DIR__).'/resources/setting/validation.php';

// metabox
require dirname(__DIR__).'/resources/setting/email-metabox.php';

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


// redirect on submit

function handle_form_redirect() {
    wp_redirect( get_bloginfo('home').'/dolacz/weryfikacja/' );
    exit;
  }
  add_action( 'af/form/submission/key=form_5e5143d80de43', 'handle_form_redirect' );


// redirect i not admin
// if ( is_user_logged_in() && is_admin() ) {
//     global $current_user;
//     get_currentuserinfo();
//     $user_info = get_userdata($current_user->ID);
//     $roles = $user_info->roles;
//     // ddd($user_info->roles);
//     if ( in_array("author", $roles) )
//     {
//         header( 'Location: '.get_bloginfo('home').'/dolacz/?redirect='.get_bloginfo('home').'/wp-admin/' );
//     }
// }



add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
  global $user_ID;
  if ( $user_ID != 1 ) { //your user id

   remove_menu_page('woo-social-login'); // Posts
//    remove_menu_page('upload.php'); // Media
//    remove_menu_page('link-manager.php'); // Links
//    remove_menu_page('edit-comments.php'); // Comments
//    remove_menu_page('edit.php?post_type=page'); // Pages
      remove_menu_page('plugins.php'); // Plugins
      remove_menu_page('themes.php'); // Appearance
//    remove_menu_page('users.php'); // Users
      remove_menu_page('tools.php'); // Tools
      remove_menu_page('options-general.php'); // Settings
//    remove_menu_page('edit.php'); // Posts
//    remove_menu_page('upload.php'); // Media
      remove_menu_page('edit.php?post_type=acf-field-group'); // acf
      remove_menu_page('edit.php?post_type=af_form'); // acf forms
      remove_menu_page('wp-user-avatar'); // avatars


    remove_submenu_page('gf_edit_forms', 'gf_edit_forms' );
    remove_submenu_page('gf_edit_forms', 'gwp_perks' );
    remove_submenu_page('gf_edit_forms', 'gf_new_form' );
    remove_submenu_page('gf_edit_forms', 'gf_help' );
    remove_submenu_page('gf_edit_forms', 'gf_addons' );
    remove_submenu_page('gf_edit_forms', 'gf_export' );
    remove_submenu_page('gf_edit_forms', 'gf_settings' );
    remove_submenu_page('gf_edit_forms', 'gf_system_status' );

    // kokpit
    remove_submenu_page('index.php', 'wpweb-upd-helper' );
    remove_submenu_page('index.php', 'update-core.php' );
  }
}


function remove_from_admin_bar($wp_admin_bar) {
    /*
     * Placing items in here will only remove them from admin bar
     * when viewing the fronte end of the site
    */
    global $user_ID;
    if ( ! is_admin() ) {
        // Example of removing item generated by plugin. Full ID is #wp-admin-bar-si_menu
        $wp_admin_bar->remove_node('si_menu');

        // WordPress Core Items (uncomment to remove)
        $wp_admin_bar->remove_node('updates');
        $wp_admin_bar->remove_node('update-core.php');
        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('new-content');
        $wp_admin_bar->remove_node('wp-logo');
        //$wp_admin_bar->remove_node('site-name');
        //$wp_admin_bar->remove_node('my-account');
        //$wp_admin_bar->remove_node('search');
        //$wp_admin_bar->remove_node('customize');
    }

    /*
     * Items placed outside the if statement will remove it from both the frontend
     * and backend of the site
    */
    global $user_ID;
    if ( $user_ID != 1 ) {
    $wp_admin_bar->remove_node('wp-logo');
    }
}
add_action('admin_bar_menu', 'remove_from_admin_bar', 999);


add_action('admin_head', 'my_custom_fonts');


function my_custom_fonts() {
    global $user_ID;
if ( $user_ID != 1 ) {
  echo '<style>
    #gf_form_toolbar {
        display: none !important;
    }
    #wp-admin-bar-updates, #woo_slg_license-activation-notice {
        display: none !important;
    }
  </style>';
}
}



function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_node( 'new-post' );
    $wp_admin_bar->remove_node( 'new-media' );
    $wp_admin_bar->remove_node( 'new-page' );
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );