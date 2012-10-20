<?php
/**
 * @package Filesytem Access
 * @version 1.0
 */
/*
Plugin Name: PagodaBox Filesystem Access Fix
Plugin URI: http://codefx.biz/
Description: Overrides the default filesystem access in order to enable updates.
Author: Martin Zeitler
Version: 1.0
Author URI: hhttp://codefx.biz/
*/

if(is_admin() && current_user_can('manage_options')) {
	add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
	define( 'FS_CHMOD_DIR', 0751 );
}
?>
