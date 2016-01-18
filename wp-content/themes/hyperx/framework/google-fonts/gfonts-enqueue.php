<?php // load google fonts

// get google fonts
function royal_get_google_fonts( $font ) {

	// get data from theme customizer
	$typography = get_option('royal_typography');

	// detect protocol
	$protocol = is_ssl() ? 'https' : 'http';

	// subsets
	$subsets = array();
	if ( $typography['subsets_label'] === true ) {

		if ( $typography['latin_subset'] === true ) {
			$subsets[] = 'latin';
			$subsets[] = 'latin-ext';
		}

		if ( $typography['cyrillic_subset'] === true ) {
			$subsets[] = 'cyrillic';
			$subsets[] = 'cyrillic-ext';
		}

		if ( $typography['greek_subset'] === true ) {
			$subsets[] = 'greek';
			$subsets[] = 'greek-ext';
		}

		if ( $typography['vietnamese_subset'] === true ) {
			$subsets[] = 'vietnamese';
		}


		$subsets = '&subset='. implode( ",", $subsets );

	} else {
		$subsets = '';
	}

	$font_url = '';

	// get font url
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'hyperx' ) ) {
		$font_url = $protocol .'://fonts.googleapis.com/css?family='. $font .':100,200,300,400,500,600,700,800,900'. $subsets;
	}

	$font = str_replace( '+', '_', $font );

	// register & enqueue
	wp_register_style( "royal_enqueue_$font", $font_url, array(), '1.0.0' );
	wp_enqueue_style( "royal_enqueue_$font" );
}

// enqueue google fonts
function royal_enqueue_google_fonts() {

	// Get 'font-family' Select values from theme customizer

	// logo & tagline
	$logo 				= get_option('royal_logo');
	$tagline 			= get_option('royal_tagline');

	// menu & filters
	$menu_title 		= get_option('royal_menu_title');
	$menu_items 		= get_option('royal_menu_items');
	$filters_title 		= get_option('royal_filters_title');
	$filter_items 		= get_option('royal_filter_items');
	$filter_items 		= get_option('royal_filter_items');

	// blog page
	$bPage_post 		= get_option('royal_bPage_post');
	$bPost_title 		= get_option('royal_bPost_title');
	$bPost_formats 		= get_option('royal_bPost_formats');

	// portfolio page
	$pPage_post 		= get_option('royal_pPage_post');
	$pPost_title 		= get_option('royal_pPost_title');
	$pPost_test 		= get_option('royal_pPost_test');

	// posts pagination
	$pagination_nav 	= get_option('royal_pagination_nav');

	// typography
	$typography_h1 		= get_option( 'royal_typography_h1' );
	$typography_h2 		= get_option( 'royal_typography_h2' );
	$typography_h3 		= get_option( 'royal_typography_h3' );
	$typography_h4 		= get_option( 'royal_typography_h4' );
	$typography_h5 		= get_option( 'royal_typography_h5' );
	$typography_h6 		= get_option( 'royal_typography_h6' );
	$typography_p 		= get_option( 'royal_typography_p' );

	// copyright
	$copyright 			= get_option('royal_copyright');

	// sidebar widgets
	$sWidgets_title 	= get_option('royal_sWidgets_title');
	$sWidgets_content 	= get_option('royal_sWidgets_content');

	// top & footer widgets
	$fWidgets_title 	= get_option('royal_fWidgets_title');
	$fWidgets_content 	= get_option('royal_fWidgets_content');

	// load font only once
	$unique_fonts = array_unique( array(
		$logo['font_family'],
		$tagline['font_family'],
		$menu_title['font_family'],
		$menu_items['font_family'],
		$filters_title['font_family'],
		$filter_items['font_family'],
		$sWidgets_title['font_family'],
		$sWidgets_content['font_family'],
		$fWidgets_title['font_family'],
		$fWidgets_content['font_family'],
		$bPage_post['font_family'],
		$bPost_title['font_family'],
		$bPost_formats['font_family'],
		$pPage_post['font_family'],
		$pPost_title['font_family'],
		$pPost_test['font_family'],
		$pagination_nav['font_family'],
		$copyright['font_family'],
		$typography_h1['font_family'],
		$typography_h2['font_family'],
		$typography_h3['font_family'],
		$typography_h4['font_family'],
		$typography_h5['font_family'],
		$typography_h6['font_family'],
		$typography_p['font_family']
	) );

	// websafe fonts
	$websafe = array(
		'Arial',
		'Georgia',
		'Tahoma',
		'Times New Roman',
		'Trebuchet MS',
		'Verdana'
	);

	// enqueue
	if ( ! empty($unique_fonts) ) {
		foreach( $unique_fonts as $unique_font ) {
			if ( ! in_array( $unique_font, $websafe ) ) {

				royal_get_google_fonts( $unique_font );

			}
		}
	}

}

add_action( 'wp_enqueue_scripts', 'royal_enqueue_google_fonts' );
