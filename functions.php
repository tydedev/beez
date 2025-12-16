<?php
/**
 * Theme functions and definitions
 *
 * @package Beez
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'TYDEDEV_STARTER_VERSION', '1.0.0' );

require get_template_directory() . '/includes/theme-support.php';
require get_template_directory() . '/includes/enqueue-assets.php';
