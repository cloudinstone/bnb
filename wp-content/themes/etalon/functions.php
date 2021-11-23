<?php
/**
 * etalon functions file
 *
 * @package etalon
 * by KeyDesign
 */

 require_once get_template_directory() . '/core/init.php';

 // -------------------------------------
 // Edit below this line
 // -------------------------------------


function mytheme_custom_excerpt_length( $length ) {
	return 120;
}
// add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
