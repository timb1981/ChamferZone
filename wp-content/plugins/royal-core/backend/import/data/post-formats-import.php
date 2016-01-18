<?php // import post formats

function royal_post_formats_import( $design ) {

	if ( $design === 'ares' ) {
		set_post_format(181, 'gallery');set_post_format(180, 'gallery');set_post_format(178, 'gallery');set_post_format(254, 'gallery');set_post_format(177, 'gallery');set_post_format(175, 'audio');set_post_format(174, 'video');set_post_format(173, 'video');set_post_format(172, 'gallery');set_post_format(911, 'gallery');set_post_format(957, 'standard');set_post_format(958, 'gallery');set_post_format(923, 'gallery');set_post_format(924, 'audio');set_post_format(925, 'standard');set_post_format(926, 'video');set_post_format(1187, 'audio');set_post_format(1189, 'video');set_post_format(1191, 'standard');
	} elseif ( $design === 'athena' ) {
		set_post_format(181, 'standard');set_post_format(180, 'standard');set_post_format(178, 'standard');set_post_format(254, 'gallery');set_post_format(177, 'audio');set_post_format(175, 'gallery');set_post_format(174, 'gallery');set_post_format(173, 'video');set_post_format(172, 'video');
	} elseif ( $design === 'roch' ) {
		set_post_format(180, 'gallery');set_post_format(181, 'gallery');set_post_format(178, 'video');set_post_format(254, 'standard');set_post_format(177, 'audio');set_post_format(175, 'video');set_post_format(174, 'video');set_post_format(173, 'gallery');set_post_format(172, 'gallery');set_post_format(255, 'standard');set_post_format(256, 'standard');set_post_format(176, 'gallery');set_post_format(167, 'standard');set_post_format(597, 'audio');set_post_format(258, 'gallery');set_post_format(151, 'standard');set_post_format(596, 'standard');set_post_format(946, 'gallery');
	} elseif ( $design === 'hecate' ) {
		set_post_format(181, 'gallery');set_post_format(180, 'standard');set_post_format(178, 'standard');set_post_format(254, 'standard');set_post_format(177, 'audio');set_post_format(175, 'gallery');set_post_format(174, 'gallery');set_post_format(173, 'video');set_post_format(172, 'video');set_post_format(255, 'standard');
	} elseif ( $design === 'riven' ) {
		set_post_format(180, 'gallery');set_post_format(181, 'gallery');set_post_format(178, 'video');set_post_format(254, 'standard');set_post_format(177, 'audio');set_post_format(175, 'video');set_post_format(174, 'standard');set_post_format(173, 'gallery');set_post_format(172, 'gallery');set_post_format(255, 'standard');set_post_format(256, 'standard');set_post_format(176, 'gallery');set_post_format(167, 'standard');set_post_format(597, 'audio');set_post_format(258, 'gallery');set_post_format(151, 'standard');set_post_format(596, 'standard');set_post_format(946, 'gallery');
	} elseif ( $design === 'niko' ) {
		set_post_format(181, 'gallery');set_post_format(180, 'video');set_post_format(178, 'gallery');set_post_format(254, 'gallery');set_post_format(177, 'standard');set_post_format(175, 'audio');set_post_format(174, 'standard');set_post_format(173, 'standard');set_post_format(172, 'video');
	} elseif ( $design === 'hephaestus' ) {
		set_post_format(181, 'standard');set_post_format(180, 'video');set_post_format(178, 'gallery');set_post_format(254, 'gallery');set_post_format(175, 'audio');set_post_format(174, 'video');set_post_format(957, 'standard');set_post_format(958, 'gallery');set_post_format(923, 'standard');set_post_format(924, 'audio');set_post_format(925, 'standard');set_post_format(926, 'video');set_post_format(1187, 'audio');set_post_format(1189, 'video');set_post_format(1191, 'standard');
	} elseif ( $design === 'iris' ) {
		set_post_format(180, 'gallery');set_post_format(181, 'gallery');set_post_format(178, 'video');set_post_format(254, 'standard');set_post_format(177, 'audio');set_post_format(175, 'video');set_post_format(174, 'video');set_post_format(173, 'gallery');set_post_format(172, 'gallery');set_post_format(255, 'standard');set_post_format(256, 'standard');set_post_format(176, 'gallery');set_post_format(167, 'standard');set_post_format(597, 'audio');
	} elseif ( $design === 'hermes' ) {
		set_post_format(181, 'gallery');set_post_format(180, 'gallery');set_post_format(178, 'gallery');set_post_format(254, 'gallery');set_post_format(177, 'standard');set_post_format(175, 'audio');set_post_format(174, 'video');set_post_format(173, 'video');set_post_format(172, 'gallery');set_post_format(911, 'gallery');set_post_format(957, 'standard');set_post_format(958, 'gallery');set_post_format(923, 'gallery');set_post_format(924, 'audio');set_post_format(925, 'standard');set_post_format(926, 'video');set_post_format(1187, 'audio');set_post_format(1189, 'video');set_post_format(1191, 'standard');set_post_format(1500, 'video');
	} elseif ( $design === 'other' ) {
		
	}

}