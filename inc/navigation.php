<?php
/**
 * Navigation
 *
 * @package WordPress
 * @subpackage ZURB Foundation
 * @since zurb_foundation 1.0
 */

/**
 * Register wp_nav_menus
 */
if ( ! function_exists( 'zurb_foundation_menus' ) ) {
	function zurb_foundation_menus() {

		register_nav_menus(
			array(
				'header-menu-left' => __( 'Header Menu (left)', 'zurb_foundation' ),
				'header-menu-right' => __( 'Header Menu (right)', 'zurb_foundation' ),
				'footer-menu' => __( 'Footer Menu', 'zurb_foundation' )
			)
		);

	}
}
add_action( 'init', 'zurb_foundation_menus' );


/**
 * Add a class to the wp_page_menu fallback
 */
if ( ! function_exists( 'foundation_page_menu_class' ) ) {
	function foundation_page_menu_class($ulclass) {
		return preg_replace('/<ul>/', '<ul class="nav-bar">', $ulclass, 1);
	}
}
add_filter('wp_page_menu','foundation_page_menu_class');
