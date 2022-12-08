<?php
/*
Plugin Name: Inline QRCodes
Plugin URI: http://techlister.com
Description: Inline Qrcodes
Version: 1.3
Author: Savoul Pelister
Author URI: http://anim.me
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

//add the filters and action to trigger the QRcode generation.		
yourls_add_action( 'html_head', 'inline_qr_js' );


//insert the JS and CSS files to head.
function inline_qr_js( ) {
	
	$jqqrcodejs = "<script src=\"". yourls_plugin_url( dirname( __FILE__ ) ). "/jquery.qrcode.min.js\" type=\"text/javascript\"></script>" ;
	$qrcodejs = "<script src=\"". yourls_plugin_url( dirname( __FILE__ ) ). "/inline-qrcode.js\" type=\"text/javascript\"></script>" ;
	$customcss = "<link rel=\"stylesheet\" href=\"". yourls_plugin_url( dirname( __FILE__ ) ) . "/custom.css\" type=\"text/css\" />";

	echo $jqqrcodejs;
	echo $qrcodejs; 
	echo $customcss;

}
