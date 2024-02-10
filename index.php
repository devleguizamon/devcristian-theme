<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package DevCristian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

if(is_page('portfolio')){
    get_template_part( 'template-parts/portfolio/portfolio' );
} elseif ( is_singular() ) {
    get_template_part( 'template-parts/single/single' );	
} elseif ( is_archive() ) {
    get_template_part( 'template-parts/archive/archive' );
} elseif ( is_search() ) {
    get_template_part( 'template-parts/archive/search' );
}  else {
    get_template_part( 'template-parts/404' );
}

get_footer();
