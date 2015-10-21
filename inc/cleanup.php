<?php
/**
 * Various clean up functions
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */

if ( ! function_exists( 'zurb_foundation_start_cleanup' ) ) :
function zurb_foundation_start_cleanup() {
	// Disable WordPress version reporting as a basic protection against attacks
	add_filter( 'the_generator', 'zurb_foundation_remove_generators' );
	// remove all filters from searchform.php
	add_action('pre_get_search_form', 'zurb_foundation_search_form_no_filters');
}
add_action( 'after_setup_theme','zurb_foundation_start_cleanup' );
endif;

// Disable WordPress version reporting as a basic protection against attacks
if ( ! function_exists( 'czurb_foundation_remove_generators' ) ) :
function zurb_foundation_remove_generators() { return ''; }
endif;

if ( ! function_exists( 'zurb_foundation_search_form_no_filters' ) ) :
function zurb_foundation_search_form_no_filters() {
  // look for local searchform template
  $search_form_template = locate_template( 'searchform.php' );
  if ( '' !== $search_form_template ) {
    // searchform.php exists, remove all filters
    remove_all_filters('get_search_form');
  }
}
endif;