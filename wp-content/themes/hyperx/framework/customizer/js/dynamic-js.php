<?php

/*
***************************************************************
* This file generates Custom Javascript / Google Analytics
* Theme Customizer -> Custom JS/GA
***************************************************************
*/


function royal_echo_dynamic_js() {

	// get data from Theme Customizer
	$custom_js = get_option( 'royal_custom_js' );
	$custom_js = $custom_js['textarea'];
	$custom_js = str_replace( '<script>', '', $custom_js );
	$custom_js = str_replace( '</script>', '', $custom_js );

	// print custom js
	echo '<script>'. $custom_js .'</script>';
}

add_action( 'wp_footer', 'royal_echo_dynamic_js' );