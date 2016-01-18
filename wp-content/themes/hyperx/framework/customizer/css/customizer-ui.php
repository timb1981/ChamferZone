<?php // Theme Customizer UI

// Custom CSS field styling
function royal_custom_css_styling() {

	// get theme customzier data 
	$custom_css = get_option('royal_custom_css');

	$css  = '<style id="royal_custom_css_style">';

		$css .= '.rf-custom-css textarea {
			background-color: '. royal_hex2rgba( $custom_css['bg_color'], $custom_css['bg_color_tr'] ) .';
			color: '. $custom_css['text_color'] .';
			font-size: '. $custom_css['font_size'] .'px;
		}';

	$css .= '</style>';

	// compress css
	echo str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css );

}

add_action( 'customize_controls_enqueue_scripts', 'royal_custom_css_styling' );