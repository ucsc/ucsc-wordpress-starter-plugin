<?php
/**
 * Plugin Name: UCSC Starter Plugin
 * @package ucsc-plugin
 */

//
// Your plugin logic and processing
// output into 1-2 variables:
//
// $page_title = The title of your page
// $page_content = The content you want to appear on the page
//


// Filter 'the_title' WordPress variable for use in 'content-plugin.php'
add_filter('the_title', $page_title);

// Filter 'the_content' WordPress variable for use in 'content-plugin.php'
add_filter('the_content', $page_content);

// Call header
if ( file_exists( get_theme_file_path( 'header-plugin.php' ) ) ) {
 get_header( 'plugin' );
}

// Call content using get_template_part()
if ( file_exists( get_theme_file_path( 'content-plugin.php' ) ) ) {
 get_template_part( 'content', 'plugin' );
}

// Call footer
if ( file_exists( get_theme_file_path( 'footer-plugin.php' ) ) ) {
 get_footer( 'plugin' );
}