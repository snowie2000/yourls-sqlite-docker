<?php
/*
Plugin Name: No Version Check
Plugin URI: https://github.com/YOURLS/YOURLS/issues/2851
Description: Stop YOURLS from checking if a new release is available
Version: 1.0
Author: Ozh
Author URI: https://ozh.org/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter('shunt_maybe_check_core_version', 'yourls_return_false');