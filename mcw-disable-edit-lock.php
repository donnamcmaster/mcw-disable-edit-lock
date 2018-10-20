<?php
/*
Plugin Name: McWebby Disable Edit Lock
Plugin URI: https://www.donnamcmaster.com/
Description: Temporarily allow multiple admin access.
Version: 00.01.00
Author: Donna McMaster
Author URI: https://www.donnamcmaster.com/
License: GNU GPU v3
*/

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( is_admin() ) {
	// soften post lock to post warning
	add_filter( 'show_post_locked_dialog', '__return_false' );
	add_filter( 'wp_check_post_lock_window', '__return_false' );
}