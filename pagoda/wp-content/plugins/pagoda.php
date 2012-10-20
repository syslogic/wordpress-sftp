<?php
/**
 * @package Filesytem Access Fix
 * @version 1.0.1
 */
/*
Plugin Name: Filesystem Access Fix
Plugin URI: http://codefx.biz/
Description: Overrides the default filesystem access method in order to enable update capabilities for themes & plugins on PagodaBox/Heroku.
Author: Martin Zeitler
Version: 1.0.1
Author URI: hhttp://codefx.biz/
*/
if(is_admin() && current_user_can('manage_options')) {
	add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
	define( 'FS_CHMOD_DIR', 0751 );
}
?>
