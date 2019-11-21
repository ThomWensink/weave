<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/autoinstall.php' // Auto install plugins
];

require_once dirname( __FILE__ ).'/plugins/class-tgm-plugin-activation.php';

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Remove admin bar from front-end
show_admin_bar(false);

// Make sure the favicon shows in both back and front-end
// First, create a function that includes the path to your favicon
function add_favicon() {
    $favicon_url = get_stylesheet_directory_uri() . '/dist/images/favicon.ico';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

// Now, just make sure that function runs when you're on the login page and admin pages
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

// Remove unnecessary menu item
function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

// Make sure they cannot accesss the rich editor
add_filter( 'user_can_richedit' , '__return_false', 50 );

// Make sure the wpcf7 css isnt loaded in
add_filter( 'wpcf7_load_css', '__return_false' );

// Allow upload of SVG
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Restrict max upload size
function nelio_max_image_size( $file ) {
  $size = $file['size'];
  $size = $size / 1024;
  $type = $file['type'];
  $is_image = strpos( $type, 'image' ) !== false;
  $limit = 990;
  $limit_output = '990kb';
  if ( $is_image && $size > $limit ) {
    $file['error'] = 'Image files must be smaller than ' . $limit_output;
  }//end if
  return $file;
}//end nelio_max_image_size()
add_filter( 'wp_handle_upload_prefilter', 'nelio_max_image_size' );


