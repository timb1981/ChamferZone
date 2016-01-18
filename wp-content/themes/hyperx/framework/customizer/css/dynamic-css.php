<?php

/*
***************************************************************
* This is Main CSS file, which dynamically changes Theme Styles from Theme Customizer.
* Please don't Edit/Delete something. THIS IS VITAL.
***************************************************************
*/

function royal_get_dynamic_css() {

	// Get Theme Customizer options

	// Preloader Section
	$preloader 			= royal_get_option( 'royal_preloader' );

	// Body Section
	$body 				= get_option( 'royal_body' );
	$content 			= get_option( 'royal_content' );
	$inner_content 		= get_option( 'royal_inner_content' );

	// Sidebar Section
	$sidebar 			= get_option( 'royal_sidebar' );
	$sidebar_fold_btn 	= get_option( 'royal_sidebar_fold_btn' );
	$sidebar_scroll 	= get_option( 'royal_sidebar_scroll' );
	$sidebar_top 		= get_option( 'royal_sidebar_top' );

	// Logo Section
	$logo 				= get_option( 'royal_logo' );
	$tagline 			= get_option( 'royal_tagline' );

	// Menu & Filters Section
	$menu_title 		= get_option( 'royal_menu_title' );
	$menu_fold 			= royal_get_option( 'royal_menu_fold' );
	$menu_fold_wrap 	= royal_get_option( 'royal_menu_fold_wrap' );
	$menu_items 		= get_option( 'royal_menu_items' );
	$menu_sub 			= get_option( 'royal_menu_sub' );
	$menu_mobile 		= get_option( 'royal_menu_mobile' );
	$filters_title 		= get_option( 'royal_filters_title' );
	$filter_items 		= get_option( 'royal_filter_items' );

	// Blog Page Section
	$bPage_general 		= get_option( 'royal_bPage_general' );
	$bPage_post 		= get_option( 'royal_bPage_post' );
	$bPost_title 		= get_option( 'royal_bPost_title' );
	$bPost_cats 		= get_option( 'royal_bPost_cats' );
	$bPost_meta 		= get_option( 'royal_bPost_meta' );
	$bPost_desc 		= get_option( 'royal_bPost_desc' );
	$bPost_likes 		= get_option( 'royal_bPost_likes' );
	$bPost_more 		= get_option( 'royal_bPost_more' );
	$bPost_overlay 		= get_option( 'royal_bPost_overlay' );
	$bPost_formats 		= get_option( 'royal_bPost_formats' );

	// Blog Single Section
	$bSingle_header 	= get_option( 'royal_bSingle_header' );
	$bSingle_nav 		= get_option( 'royal_bSingle_nav' );
	$bSingle_share 		= get_option( 'royal_bSingle_share' );

	// Portfolio Page Section
	$pPage_general 		= get_option( 'royal_pPage_general' );
	$pPage_post 		= get_option( 'royal_pPage_post' );
	$pPost_media 		= get_option( 'royal_pPost_media' );
	$pPost_title 		= get_option( 'royal_pPost_title' );
	$pPost_cats 		= get_option( 'royal_pPost_cats' );
	$pPost_meta 		= get_option( 'royal_pPost_meta' );
	$pPost_desc 		= get_option( 'royal_pPost_desc' );
	$pPost_likes 		= get_option( 'royal_pPost_likes' );
	$pPost_more 		= get_option( 'royal_pPost_more' );
	$pPost_test 		= get_option( 'royal_pPost_test' );
	$pPost_triangle 	= get_option( 'royal_pPost_triangle' );
	$pPost_formats 		= get_option( 'royal_pPost_formats' );
	$pPost_effects 		= get_option( 'royal_pPost_effects' );

	// Portfolio Single Section
	$pSingle_header 	= get_option( 'royal_pSingle_header' );
	$pSingle_nav 		= get_option( 'royal_pSingle_nav' );
	$pSingle_share 		= get_option( 'royal_pSingle_share' );
	$pSingle_project 	= get_option( 'royal_pSingle_project' );

	// Gallery Section
	$slideshow_caption 	= get_option( 'royal_slideshow_caption' );
	$stacked_caption 	= get_option( 'royal_stacked_caption' );
	$gallery_nav 		= get_option( 'royal_gallery_nav' );
	$gallery_arrows 	= get_option( 'royal_gallery_arrows' );
	$gallery_lightbox 	= get_option( 'royal_gallery_lightbox' );
	$gallery_default 	= get_option( 'royal_gallery_default' );

	// Similar Posts Section
	$similars_general 	= get_option( 'royal_similars_general' );
	$similars_title 	= get_option( 'royal_similars_title' );
	$similars_arrows 	= get_option( 'royal_similars_arrows' );
	$similars_overlay 	= get_option( 'royal_similars_overlay' );

	// Comments Section
	$comments_general 	= get_option( 'royal_comments_general' );
	$comments_counter 	= get_option( 'royal_comments_counter' );
	$comments_image 	= get_option( 'royal_comments_image' );
	$comments_content 	= get_option( 'royal_comments_content' );
	$comments_reply 	= get_option( 'royal_comments_reply' );

	// Inputs Section
	$inputs_general 	= get_option( 'royal_inputs_general' );
	$inputs_submit 		= get_option( 'royal_inputs_submit' );
	$inputs_search 		= get_option( 'royal_inputs_search' );

	// Pagination Section
	$pagination 		= get_option( 'royal_pagination' );
	$pagination_nav 	= get_option( 'royal_pagination_nav' );

	// Contact Page Section
	$cPage_general 		= get_option( 'royal_cPage_general' );
	$cPage_title 		= get_option( 'royal_cPage_title' );
	$cPage_map 			= get_option( 'royal_cPage_map' );

	// Socials & Copyright Section
	$copy_soc_general 	= get_option( 'royal_copy_soc_general' );
	$socials 			= get_option( 'royal_socials' );
	$copyright 			= get_option( 'royal_copyright' );
	$back_btn 			= get_option( 'royal_back_btn' );

	// Typography Section
	$typography 		= get_option( 'royal_typography' );
	$typography_h1 		= get_option( 'royal_typography_h1' );
	$typography_h2 		= get_option( 'royal_typography_h2' );
	$typography_h3 		= get_option( 'royal_typography_h3' );
	$typography_h4 		= get_option( 'royal_typography_h4' );
	$typography_h5 		= get_option( 'royal_typography_h5' );
	$typography_h6 		= get_option( 'royal_typography_h6' );
	$typography_p 		= get_option( 'royal_typography_p' );

	// Custom CSS Section
	$custom_css 		= get_option( 'royal_custom_css' );

	// Sidebar Widgets Section
	$sWidgets_title 	= get_option( 'royal_sWidgets_title' );
	$sWidgets_content 	= get_option( 'royal_sWidgets_content' );

	// Top & Footer Widgets Section
	$fWidgets_general 	= get_option( 'royal_fWidgets_general' );
	$fWidgets_title 	= get_option( 'royal_fWidgets_title' );
	$fWidgets_content 	= get_option( 'royal_fWidgets_content' );

	
	// begin style block
	$css  = '<style id="royal_dynamic_css">';

/*
***************************************************************
* #Preloader
***************************************************************
*/

/* ----------------- Preloader General Options ----------------- */

	if ( $preloader['anim'] === 'spinner1' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '#floatingCirclesG{position:relative;width:83px;height:83px;margin:auto;transform:scale(0.6);-o-transform:scale(0.6);-ms-transform:scale(0.6);-webkit-transform:scale(0.6);-moz-transform:scale(0.6)}.f_circleG{position:absolute;background-color:#fff;height:15px;width:15px;border-radius:8px;-o-border-radius:8px;-ms-border-radius:8px;-webkit-border-radius:8px;-moz-border-radius:8px;animation-name:f_fadeG;-o-animation-name:f_fadeG;-ms-animation-name:f_fadeG;-webkit-animation-name:f_fadeG;-moz-animation-name:f_fadeG;animation-duration:1.04s;-o-animation-duration:1.04s;-ms-animation-duration:1.04s;-webkit-animation-duration:1.04s;-moz-animation-duration:1.04s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-direction:normal;-o-animation-direction:normal;-ms-animation-direction:normal;-webkit-animation-direction:normal;-moz-animation-direction:normal}#frotateG_01{left:0;top:34px;animation-delay:.39s;-o-animation-delay:.39s;-ms-animation-delay:.39s;-webkit-animation-delay:.39s;-moz-animation-delay:.39s}#frotateG_02{left:10px;top:10px;animation-delay:.52s;-o-animation-delay:.52s;-ms-animation-delay:.52s;-webkit-animation-delay:.52s;-moz-animation-delay:.52s}#frotateG_03{left:34px;top:0;animation-delay:.65s;-o-animation-delay:.65s;-ms-animation-delay:.65s;-webkit-animation-delay:.65s;-moz-animation-delay:.65s}#frotateG_04{right:10px;top:10px;animation-delay:.78s;-o-animation-delay:.78s;-ms-animation-delay:.78s;-webkit-animation-delay:.78s;-moz-animation-delay:.78s}#frotateG_05{right:0;top:34px;animation-delay:.91s;-o-animation-delay:.91s;-ms-animation-delay:.91s;-webkit-animation-delay:.91s;-moz-animation-delay:.91s}#frotateG_06{right:10px;bottom:10px;animation-delay:1.04s;-o-animation-delay:1.04s;-ms-animation-delay:1.04s;-webkit-animation-delay:1.04s;-moz-animation-delay:1.04s}#frotateG_07{left:34px;bottom:0;animation-delay:1.17s;-o-animation-delay:1.17s;-ms-animation-delay:1.17s;-webkit-animation-delay:1.17s;-moz-animation-delay:1.17s}#frotateG_08{left:10px;bottom:10px;animation-delay:1.3s;-o-animation-delay:1.3s;-ms-animation-delay:1.3s;-webkit-animation-delay:1.3s;-moz-animation-delay:1.3s}@keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-o-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-ms-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-webkit-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-moz-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}';
		} else {
			$css .= '#floatingCirclesG{position:relative;width:118px;height:118px;margin:auto;transform:scale(0.6);-o-transform:scale(0.6);-ms-transform:scale(0.6);-webkit-transform:scale(0.6);-moz-transform:scale(0.6)}.f_circleG{position:absolute;background-color:#fff;height:21px;width:21px;border-radius:11px;-o-border-radius:11px;-ms-border-radius:11px;-webkit-border-radius:11px;-moz-border-radius:11px;animation-name:f_fadeG;-o-animation-name:f_fadeG;-ms-animation-name:f_fadeG;-webkit-animation-name:f_fadeG;-moz-animation-name:f_fadeG;animation-duration:1.04s;-o-animation-duration:1.04s;-ms-animation-duration:1.04s;-webkit-animation-duration:1.04s;-moz-animation-duration:1.04s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-direction:normal;-o-animation-direction:normal;-ms-animation-direction:normal;-webkit-animation-direction:normal;-moz-animation-direction:normal}#frotateG_01{left:0;top:48px;animation-delay:.39s;-o-animation-delay:.39s;-ms-animation-delay:.39s;-webkit-animation-delay:.39s;-moz-animation-delay:.39s}#frotateG_02{left:14px;top:14px;animation-delay:.52s;-o-animation-delay:.52s;-ms-animation-delay:.52s;-webkit-animation-delay:.52s;-moz-animation-delay:.52s}#frotateG_03{left:48px;top:0;animation-delay:.65s;-o-animation-delay:.65s;-ms-animation-delay:.65s;-webkit-animation-delay:.65s;-moz-animation-delay:.65s}#frotateG_04{right:14px;top:14px;animation-delay:.78s;-o-animation-delay:.78s;-ms-animation-delay:.78s;-webkit-animation-delay:.78s;-moz-animation-delay:.78s}#frotateG_05{right:0;top:48px;animation-delay:.91s;-o-animation-delay:.91s;-ms-animation-delay:.91s;-webkit-animation-delay:.91s;-moz-animation-delay:.91s}#frotateG_06{right:14px;bottom:14px;animation-delay:1.04s;-o-animation-delay:1.04s;-ms-animation-delay:1.04s;-webkit-animation-delay:1.04s;-moz-animation-delay:1.04s}#frotateG_07{left:48px;bottom:0;animation-delay:1.17s;-o-animation-delay:1.17s;-ms-animation-delay:1.17s;-webkit-animation-delay:1.17s;-moz-animation-delay:1.17s}#frotateG_08{left:14px;bottom:14px;animation-delay:1.3s;-o-animation-delay:1.3s;-ms-animation-delay:1.3s;-webkit-animation-delay:1.3s;-moz-animation-delay:1.3s}@keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-o-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-ms-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-webkit-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}@-moz-keyframes f_fadeG{0%{background-color:'.$preloader["anim_color"].'}100%{background-color:#fff}}';
		}
	} elseif ( $preloader['anim'] === 'spinner2' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-container{width:100%;height:36px;text-align:center}.cssload-speeding-wheel{width:36px;height:36px;margin:0 auto;border:2px solid '.$preloader["anim_color"].';border-radius:50%;border-left-color:transparent;border-right-color:transparent;animation:cssload-spin 575ms infinite linear;-o-animation:cssload-spin 575ms infinite linear;-ms-animation:cssload-spin 575ms infinite linear;-webkit-animation:cssload-spin 575ms infinite linear;-moz-animation:cssload-spin 575ms infinite linear}@keyframes cssload-spin{100%{transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes cssload-spin{100%{-o-transform:rotate(360deg);transform:rotate(360deg)}}@-ms-keyframes cssload-spin{100%{-ms-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes cssload-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes cssload-spin{100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}';
		} else {
			$css .= '.cssload-container{width:100%;height:49px;text-align:center}.cssload-speeding-wheel{width:49px;height:49px;margin:0 auto;border:3px solid '.$preloader["anim_color"].';border-radius:50%;border-left-color:transparent;border-right-color:transparent;animation:cssload-spin 575ms infinite linear;-o-animation:cssload-spin 575ms infinite linear;-ms-animation:cssload-spin 575ms infinite linear;-webkit-animation:cssload-spin 575ms infinite linear;-moz-animation:cssload-spin 575ms infinite linear}@keyframes cssload-spin{100%{transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes cssload-spin{100%{-o-transform:rotate(360deg);transform:rotate(360deg)}}@-ms-keyframes cssload-spin{100%{-ms-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes cssload-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes cssload-spin{100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}';
		}
	} elseif ( $preloader['anim'] === 'spinner3' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-loader{position:absolute;left:50%;width:47.284271247462px;height:47.284271247462px;margin-left:-23.142135623731px;margin-top:-23.142135623731px;border-radius:100%;animation-name:cssload-loader;-o-animation-name:cssload-loader;-ms-animation-name:cssload-loader;-webkit-animation-name:cssload-loader;-moz-animation-name:cssload-loader;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-timing-function:linear;-o-animation-timing-function:linear;-ms-animation-timing-function:linear;-webkit-animation-timing-function:linear;-moz-animation-timing-function:linear;animation-duration:4.6s;-o-animation-duration:4.6s;-ms-animation-duration:4.6s;-webkit-animation-duration:4.6s;-moz-animation-duration:4.6s}.cssload-loader .cssload-side{display:block;width:6px;height:19px;background-color:'.$preloader["anim_color"].';margin:2px;position:absolute;border-radius:50%;animation-duration:1.73s;-o-animation-duration:1.73s;-ms-animation-duration:1.73s;-webkit-animation-duration:1.73s;-moz-animation-duration:1.73s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-timing-function:ease;-o-animation-timing-function:ease;-ms-animation-timing-function:ease;-webkit-animation-timing-function:ease;-moz-animation-timing-function:ease}.cssload-loader .cssload-side:nth-child(1),.cssload-loader .cssload-side:nth-child(5){transform:rotate(0deg);-o-transform:rotate(0deg);-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);animation-name:cssload-rotate0;-o-animation-name:cssload-rotate0;-ms-animation-name:cssload-rotate0;-webkit-animation-name:cssload-rotate0;-moz-animation-name:cssload-rotate0}.cssload-loader .cssload-side:nth-child(3),.cssload-loader .cssload-side:nth-child(7){transform:rotate(90deg);-o-transform:rotate(90deg);-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);animation-name:cssload-rotate90;-o-animation-name:cssload-rotate90;-ms-animation-name:cssload-rotate90;-webkit-animation-name:cssload-rotate90;-moz-animation-name:cssload-rotate90}.cssload-loader .cssload-side:nth-child(2),.cssload-loader .cssload-side:nth-child(6){transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);animation-name:cssload-rotate45;-o-animation-name:cssload-rotate45;-ms-animation-name:cssload-rotate45;-webkit-animation-name:cssload-rotate45;-moz-animation-name:cssload-rotate45}.cssload-loader .cssload-side:nth-child(4),.cssload-loader .cssload-side:nth-child(8){transform:rotate(135deg);-o-transform:rotate(135deg);-ms-transform:rotate(135deg);-webkit-transform:rotate(135deg);-moz-transform:rotate(135deg);animation-name:cssload-rotate135;-o-animation-name:cssload-rotate135;-ms-animation-name:cssload-rotate135;-webkit-animation-name:cssload-rotate135;-moz-animation-name:cssload-rotate135}.cssload-loader .cssload-side:nth-child(1){top:23.142135623731px;left:47.284271247462px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(2){top:40.213203431093px;left:40.213203431093px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(3){top:47.284271247462px;left:23.142135623731px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(4){top:40.213203431093px;left:7.0710678163691px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(5){top:23.142135623731px;left:0;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(6){top:7.0710678163691px;left:7.0710678163691px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(7){top:0;left:23.142135623731px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(8){top:7.0710678163691px;left:40.213203431093px;margin-left:-3px;margin-top:-10px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}@keyframes cssload-rotate0{0%{transform:rotate(0deg)}60%{transform:rotate(180deg)}100%{transform:rotate(180deg)}}@-o-keyframes cssload-rotate0{0%{-o-transform:rotate(0deg)}60%{-o-transform:rotate(180deg)}100%{-o-transform:rotate(180deg)}}@-ms-keyframes cssload-rotate0{0%{-ms-transform:rotate(0deg)}60%{-ms-transform:rotate(180deg)}100%{-ms-transform:rotate(180deg)}}@-webkit-keyframes cssload-rotate0{0%{-webkit-transform:rotate(0deg)}60%{-webkit-transform:rotate(180deg)}100%{-webkit-transform:rotate(180deg)}}@-moz-keyframes cssload-rotate0{0%{-moz-transform:rotate(0deg)}60%{-moz-transform:rotate(180deg)}100%{-moz-transform:rotate(180deg)}}@keyframes cssload-rotate90{0%{transform:rotate(90deg);transform:rotate(90deg)}60%{transform:rotate(270deg);transform:rotate(270deg)}100%{transform:rotate(270deg);transform:rotate(270deg)}}@-o-keyframes cssload-rotate90{0%{-o-transform:rotate(90deg);transform:rotate(90deg)}60%{-o-transform:rotate(270deg);transform:rotate(270deg)}100%{-o-transform:rotate(270deg);transform:rotate(270deg)}}@-ms-keyframes cssload-rotate90{0%{-ms-transform:rotate(90deg);transform:rotate(90deg)}60%{-ms-transform:rotate(270deg);transform:rotate(270deg)}100%{-ms-transform:rotate(270deg);transform:rotate(270deg)}}@-webkit-keyframes cssload-rotate90{0%{-webkit-transform:rotate(90deg);transform:rotate(90deg)}60%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}100%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}}@-moz-keyframes cssload-rotate90{0%{-moz-transform:rotate(90deg);transform:rotate(90deg)}60%{-moz-transform:rotate(270deg);transform:rotate(270deg)}100%{-moz-transform:rotate(270deg);transform:rotate(270deg)}}@keyframes cssload-rotate45{0%{transform:rotate(45deg);transform:rotate(45deg)}60%{transform:rotate(225deg);transform:rotate(225deg)}100%{transform:rotate(225deg);transform:rotate(225deg)}}@-o-keyframes cssload-rotate45{0%{-o-transform:rotate(45deg);transform:rotate(45deg)}60%{-o-transform:rotate(225deg);transform:rotate(225deg)}100%{-o-transform:rotate(225deg);transform:rotate(225deg)}}@-ms-keyframes cssload-rotate45{0%{-ms-transform:rotate(45deg);transform:rotate(45deg)}60%{-ms-transform:rotate(225deg);transform:rotate(225deg)}100%{-ms-transform:rotate(225deg);transform:rotate(225deg)}}@-webkit-keyframes cssload-rotate45{0%{-webkit-transform:rotate(45deg);transform:rotate(45deg)}60%{-webkit-transform:rotate(225deg);transform:rotate(225deg)}100%{-webkit-transform:rotate(225deg);transform:rotate(225deg)}}@-moz-keyframes cssload-rotate45{0%{-moz-transform:rotate(45deg);transform:rotate(45deg)}60%{-moz-transform:rotate(225deg);transform:rotate(225deg)}100%{-moz-transform:rotate(225deg);transform:rotate(225deg)}}@keyframes cssload-rotate135{0%{transform:rotate(135deg);transform:rotate(135deg)}60%{transform:rotate(315deg);transform:rotate(315deg)}100%{transform:rotate(315deg);transform:rotate(315deg)}}@-o-keyframes cssload-rotate135{0%{-o-transform:rotate(135deg);transform:rotate(135deg)}60%{-o-transform:rotate(315deg);transform:rotate(315deg)}100%{-o-transform:rotate(315deg);transform:rotate(315deg)}}@-ms-keyframes cssload-rotate135{0%{-ms-transform:rotate(135deg);transform:rotate(135deg)}60%{-ms-transform:rotate(315deg);transform:rotate(315deg)}100%{-ms-transform:rotate(315deg);transform:rotate(315deg)}}@-webkit-keyframes cssload-rotate135{0%{-webkit-transform:rotate(135deg);transform:rotate(135deg)}60%{-webkit-transform:rotate(315deg);transform:rotate(315deg)}100%{-webkit-transform:rotate(315deg);transform:rotate(315deg)}}@-moz-keyframes cssload-rotate135{0%{-moz-transform:rotate(135deg);transform:rotate(135deg)}60%{-moz-transform:rotate(315deg);transform:rotate(315deg)}100%{-moz-transform:rotate(315deg);transform:rotate(315deg)}}@keyframes cssload-loader{0%{transform:rotate(0deg);transform:rotate(0deg)}100%{transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes cssload-loader{0%{-o-transform:rotate(0deg);transform:rotate(0deg)}100%{-o-transform:rotate(360deg);transform:rotate(360deg)}}@-ms-keyframes cssload-loader{0%{-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-ms-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes cssload-loader{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes cssload-loader{0%{-moz-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}';
		} else {
			$css .= '.cssload-loader{position:absolute;left:50%;width:84.284271247462px;height:84.284271247462px;margin-left:-42.142135623731px;margin-top:-42.142135623731px;border-radius:100%;animation-name:cssload-loader;-o-animation-name:cssload-loader;-ms-animation-name:cssload-loader;-webkit-animation-name:cssload-loader;-moz-animation-name:cssload-loader;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-timing-function:linear;-o-animation-timing-function:linear;-ms-animation-timing-function:linear;-webkit-animation-timing-function:linear;-moz-animation-timing-function:linear;animation-duration:4.6s;-o-animation-duration:4.6s;-ms-animation-duration:4.6s;-webkit-animation-duration:4.6s;-moz-animation-duration:4.6s}.cssload-loader .cssload-side{display:block;width:11px;height:35px;background-color:'.$preloader["anim_color"].';margin:4px;position:absolute;border-radius:50%;animation-duration:1.73s;-o-animation-duration:1.73s;-ms-animation-duration:1.73s;-webkit-animation-duration:1.73s;-moz-animation-duration:1.73s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-timing-function:ease;-o-animation-timing-function:ease;-ms-animation-timing-function:ease;-webkit-animation-timing-function:ease;-moz-animation-timing-function:ease}.cssload-loader .cssload-side:nth-child(1),.cssload-loader .cssload-side:nth-child(5){transform:rotate(0deg);-o-transform:rotate(0deg);-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);animation-name:cssload-rotate0;-o-animation-name:cssload-rotate0;-ms-animation-name:cssload-rotate0;-webkit-animation-name:cssload-rotate0;-moz-animation-name:cssload-rotate0}.cssload-loader .cssload-side:nth-child(3),.cssload-loader .cssload-side:nth-child(7){transform:rotate(90deg);-o-transform:rotate(90deg);-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);animation-name:cssload-rotate90;-o-animation-name:cssload-rotate90;-ms-animation-name:cssload-rotate90;-webkit-animation-name:cssload-rotate90;-moz-animation-name:cssload-rotate90}.cssload-loader .cssload-side:nth-child(2),.cssload-loader .cssload-side:nth-child(6){transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);animation-name:cssload-rotate45;-o-animation-name:cssload-rotate45;-ms-animation-name:cssload-rotate45;-webkit-animation-name:cssload-rotate45;-moz-animation-name:cssload-rotate45}.cssload-loader .cssload-side:nth-child(4),.cssload-loader .cssload-side:nth-child(8){transform:rotate(135deg);-o-transform:rotate(135deg);-ms-transform:rotate(135deg);-webkit-transform:rotate(135deg);-moz-transform:rotate(135deg);animation-name:cssload-rotate135;-o-animation-name:cssload-rotate135;-ms-animation-name:cssload-rotate135;-webkit-animation-name:cssload-rotate135;-moz-animation-name:cssload-rotate135}.cssload-loader .cssload-side:nth-child(1){top:42.142135623731px;left:84.284271247462px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(2){top:72.213203431093px;left:72.213203431093px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(3){top:84.284271247462px;left:42.142135623731px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(4){top:72.213203431093px;left:12.071067816369px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(5){top:42.142135623731px;left:0;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(6){top:12.071067816369px;left:12.071067816369px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(7){top:0;left:42.142135623731px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}.cssload-loader .cssload-side:nth-child(8){top:12.071067816369px;left:72.213203431093px;margin-left:-5px;margin-top:-18px;animation-delay:0;-o-animation-delay:0;-ms-animation-delay:0;-webkit-animation-delay:0;-moz-animation-delay:0}@keyframes cssload-rotate0{0%{transform:rotate(0deg)}60%{transform:rotate(180deg)}100%{transform:rotate(180deg)}}@-o-keyframes cssload-rotate0{0%{-o-transform:rotate(0deg)}60%{-o-transform:rotate(180deg)}100%{-o-transform:rotate(180deg)}}@-ms-keyframes cssload-rotate0{0%{-ms-transform:rotate(0deg)}60%{-ms-transform:rotate(180deg)}100%{-ms-transform:rotate(180deg)}}@-webkit-keyframes cssload-rotate0{0%{-webkit-transform:rotate(0deg)}60%{-webkit-transform:rotate(180deg)}100%{-webkit-transform:rotate(180deg)}}@-moz-keyframes cssload-rotate0{0%{-moz-transform:rotate(0deg)}60%{-moz-transform:rotate(180deg)}100%{-moz-transform:rotate(180deg)}}@keyframes cssload-rotate90{0%{transform:rotate(90deg);transform:rotate(90deg)}60%{transform:rotate(270deg);transform:rotate(270deg)}100%{transform:rotate(270deg);transform:rotate(270deg)}}@-o-keyframes cssload-rotate90{0%{-o-transform:rotate(90deg);transform:rotate(90deg)}60%{-o-transform:rotate(270deg);transform:rotate(270deg)}100%{-o-transform:rotate(270deg);transform:rotate(270deg)}}@-ms-keyframes cssload-rotate90{0%{-ms-transform:rotate(90deg);transform:rotate(90deg)}60%{-ms-transform:rotate(270deg);transform:rotate(270deg)}100%{-ms-transform:rotate(270deg);transform:rotate(270deg)}}@-webkit-keyframes cssload-rotate90{0%{-webkit-transform:rotate(90deg);transform:rotate(90deg)}60%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}100%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}}@-moz-keyframes cssload-rotate90{0%{-moz-transform:rotate(90deg);transform:rotate(90deg)}60%{-moz-transform:rotate(270deg);transform:rotate(270deg)}100%{-moz-transform:rotate(270deg);transform:rotate(270deg)}}@keyframes cssload-rotate45{0%{transform:rotate(45deg);transform:rotate(45deg)}60%{transform:rotate(225deg);transform:rotate(225deg)}100%{transform:rotate(225deg);transform:rotate(225deg)}}@-o-keyframes cssload-rotate45{0%{-o-transform:rotate(45deg);transform:rotate(45deg)}60%{-o-transform:rotate(225deg);transform:rotate(225deg)}100%{-o-transform:rotate(225deg);transform:rotate(225deg)}}@-ms-keyframes cssload-rotate45{0%{-ms-transform:rotate(45deg);transform:rotate(45deg)}60%{-ms-transform:rotate(225deg);transform:rotate(225deg)}100%{-ms-transform:rotate(225deg);transform:rotate(225deg)}}@-webkit-keyframes cssload-rotate45{0%{-webkit-transform:rotate(45deg);transform:rotate(45deg)}60%{-webkit-transform:rotate(225deg);transform:rotate(225deg)}100%{-webkit-transform:rotate(225deg);transform:rotate(225deg)}}@-moz-keyframes cssload-rotate45{0%{-moz-transform:rotate(45deg);transform:rotate(45deg)}60%{-moz-transform:rotate(225deg);transform:rotate(225deg)}100%{-moz-transform:rotate(225deg);transform:rotate(225deg)}}@keyframes cssload-rotate135{0%{transform:rotate(135deg);transform:rotate(135deg)}60%{transform:rotate(315deg);transform:rotate(315deg)}100%{transform:rotate(315deg);transform:rotate(315deg)}}@-o-keyframes cssload-rotate135{0%{-o-transform:rotate(135deg);transform:rotate(135deg)}60%{-o-transform:rotate(315deg);transform:rotate(315deg)}100%{-o-transform:rotate(315deg);transform:rotate(315deg)}}@-ms-keyframes cssload-rotate135{0%{-ms-transform:rotate(135deg);transform:rotate(135deg)}60%{-ms-transform:rotate(315deg);transform:rotate(315deg)}100%{-ms-transform:rotate(315deg);transform:rotate(315deg)}}@-webkit-keyframes cssload-rotate135{0%{-webkit-transform:rotate(135deg);transform:rotate(135deg)}60%{-webkit-transform:rotate(315deg);transform:rotate(315deg)}100%{-webkit-transform:rotate(315deg);transform:rotate(315deg)}}@-moz-keyframes cssload-rotate135{0%{-moz-transform:rotate(135deg);transform:rotate(135deg)}60%{-moz-transform:rotate(315deg);transform:rotate(315deg)}100%{-moz-transform:rotate(315deg);transform:rotate(315deg)}}@keyframes cssload-loader{0%{transform:rotate(0deg);transform:rotate(0deg)}100%{transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes cssload-loader{0%{-o-transform:rotate(0deg);transform:rotate(0deg)}100%{-o-transform:rotate(360deg);transform:rotate(360deg)}}@-ms-keyframes cssload-loader{0%{-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-ms-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes cssload-loader{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes cssload-loader{0%{-moz-transform:rotate(0deg);transform:rotate(0deg)}100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}';
		}
	} elseif ( $preloader['anim'] === 'spinner4' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-container{width:100%;height:44px;text-align:center}.cssload-tube-tunnel{width:44px;height:44px;margin:0 auto;border:3px solid;border-radius:50%;border-color:'.$preloader["anim_color"].';animation:cssload-scale 1035ms infinite linear;-o-animation:cssload-scale 1035ms infinite linear;-ms-animation:cssload-scale 1035ms infinite linear;-webkit-animation:cssload-scale 1035ms infinite linear;-moz-animation:cssload-scale 1035ms infinite linear}@keyframes cssload-scale{0%{transform:scale(0);transform:scale(0)}90%{transform:scale(0.7);transform:scale(0.7)}100%{transform:scale(1);transform:scale(1)}}@-o-keyframes cssload-scale{0%{-o-transform:scale(0);transform:scale(0)}90%{-o-transform:scale(0.7);transform:scale(0.7)}100%{-o-transform:scale(1);transform:scale(1)}}@-ms-keyframes cssload-scale{0%{-ms-transform:scale(0);transform:scale(0)}90%{-ms-transform:scale(0.7);transform:scale(0.7)}100%{-ms-transform:scale(1);transform:scale(1)}}@-webkit-keyframes cssload-scale{0%{-webkit-transform:scale(0);transform:scale(0)}90%{-webkit-transform:scale(0.7);transform:scale(0.7)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-moz-keyframes cssload-scale{0%{-moz-transform:scale(0);transform:scale(0)}90%{-moz-transform:scale(0.7);transform:scale(0.7)}100%{-moz-transform:scale(1);transform:scale(1)}}';
		} else {
			$css .= '.cssload-container{width:100%;height:69px;text-align:center}.cssload-tube-tunnel{width:69px;height:69px;margin:0 auto;border:6px solid;border-radius:50%;border-color:'.$preloader["anim_color"].';animation:cssload-scale 1035ms infinite linear;-o-animation:cssload-scale 1035ms infinite linear;-ms-animation:cssload-scale 1035ms infinite linear;-webkit-animation:cssload-scale 1035ms infinite linear;-moz-animation:cssload-scale 1035ms infinite linear}@keyframes cssload-scale{0%{transform:scale(0);transform:scale(0)}90%{transform:scale(0.7);transform:scale(0.7)}100%{transform:scale(1);transform:scale(1)}}@-o-keyframes cssload-scale{0%{-o-transform:scale(0);transform:scale(0)}90%{-o-transform:scale(0.7);transform:scale(0.7)}100%{-o-transform:scale(1);transform:scale(1)}}@-ms-keyframes cssload-scale{0%{-ms-transform:scale(0);transform:scale(0)}90%{-ms-transform:scale(0.7);transform:scale(0.7)}100%{-ms-transform:scale(1);transform:scale(1)}}@-webkit-keyframes cssload-scale{0%{-webkit-transform:scale(0);transform:scale(0)}90%{-webkit-transform:scale(0.7);transform:scale(0.7)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-moz-keyframes cssload-scale{0%{-moz-transform:scale(0);transform:scale(0)}90%{-moz-transform:scale(0.7);transform:scale(0.7)}100%{-moz-transform:scale(1);transform:scale(1)}}';
		}
	} elseif ( $preloader['anim'] === 'spinner5' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-loader{display:block;margin:0 auto;width:29px;height:29px;position:relative;border:4px solid '.$preloader["anim_color"].';animation:cssload-loader 2.3s infinite ease;-o-animation:cssload-loader 2.3s infinite ease;-ms-animation:cssload-loader 2.3s infinite ease;-webkit-animation:cssload-loader 2.3s infinite ease;-moz-animation:cssload-loader 2.3s infinite ease}.cssload-loader-inner{vertical-align:top;display:inline-block;width:100%;background-color:'.$preloader["anim_color"].';animation:cssload-loader-inner 2.3s infinite ease-in;-o-animation:cssload-loader-inner 2.3s infinite ease-in;-ms-animation:cssload-loader-inner 2.3s infinite ease-in;-webkit-animation:cssload-loader-inner 2.3s infinite ease-in;-moz-animation:cssload-loader-inner 2.3s infinite ease-in}@keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-o-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-ms-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-webkit-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-moz-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-o-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-ms-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-webkit-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-moz-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}';
		} else {
			$css .= '.cssload-loader{display:block;margin:0 auto;width:45px;height:45px;position:relative;border:6px solid '.$preloader["anim_color"].';animation:cssload-loader 2.3s infinite ease;-o-animation:cssload-loader 2.3s infinite ease;-ms-animation:cssload-loader 2.3s infinite ease;-webkit-animation:cssload-loader 2.3s infinite ease;-moz-animation:cssload-loader 2.3s infinite ease}.cssload-loader-inner{vertical-align:top;display:inline-block;width:100%;background-color:'.$preloader["anim_color"].';animation:cssload-loader-inner 2.3s infinite ease-in;-o-animation:cssload-loader-inner 2.3s infinite ease-in;-ms-animation:cssload-loader-inner 2.3s infinite ease-in;-webkit-animation:cssload-loader-inner 2.3s infinite ease-in;-moz-animation:cssload-loader-inner 2.3s infinite ease-in}@keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-o-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-ms-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-webkit-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@-moz-keyframes cssload-loader{0%{transform:rotate(0deg)}25%{transform:rotate(180deg)}50%{transform:rotate(180deg)}75%{transform:rotate(360deg)}100%{transform:rotate(360deg)}}@keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-o-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-ms-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-webkit-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}@-moz-keyframes cssload-loader-inner{0%{height:0}25%{height:0}50%{height:100%}75%{height:100%}100%{height:0}}';
		}
	} elseif ( $preloader['anim'] === 'spinner6' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-fond{position:relative;margin:auto}.cssload-container-general{animation:cssload-animball_two 1.15s infinite;-o-animation:cssload-animball_two 1.15s infinite;-ms-animation:cssload-animball_two 1.15s infinite;-webkit-animation:cssload-animball_two 1.15s infinite;-moz-animation:cssload-animball_two 1.15s infinite;width:43px;height:43px}.cssload-internal{width:43px;height:43px;position:absolute}.cssload-ballcolor{width:19px;height:19px;border-radius:50%}.cssload-ball_1,.cssload-ball_2,.cssload-ball_3,.cssload-ball_4{position:absolute;animation:cssload-animball_one 1.15s infinite ease;-o-animation:cssload-animball_one 1.15s infinite ease;-ms-animation:cssload-animball_one 1.15s infinite ease;-webkit-animation:cssload-animball_one 1.15s infinite ease;-moz-animation:cssload-animball_one 1.15s infinite ease}.cssload-ball_1{background-color:'.$preloader["anim_color"].';top:0;left:0}.cssload-ball_2{background-color:'.$preloader["anim_color"].';top:0;left:23px}.cssload-ball_3{background-color:'.$preloader["anim_color"].';top:23px;left:0}.cssload-ball_4{background-color:'.$preloader["anim_color"].';top:23px;left:23px}@keyframes cssload-animball_one{0%{position:absolute}50%{top:12px;left:12px;position:absolute;opacity:.5}100%{position:absolute}}@-o-keyframes cssload-animball_one{0%{position:absolute}50%{top:12px;left:12px;position:absolute;opacity:.5}100%{position:absolute}}@-ms-keyframes cssload-animball_one{0%{position:absolute}50%{top:12px;left:12px;position:absolute;opacity:.5}100%{position:absolute}}@-webkit-keyframes cssload-animball_one{0%{position:absolute}50%{top:12px;left:12px;position:absolute;opacity:.5}100%{position:absolute}}@-moz-keyframes cssload-animball_one{0%{position:absolute}50%{top:12px;left:12px;position:absolute;opacity:.5}100%{position:absolute}}@keyframes cssload-animball_two{0%{transform:rotate(0deg) scale(1)}50%{transform:rotate(360deg) scale(1.3)}100%{transform:rotate(720deg) scale(1)}}@-o-keyframes cssload-animball_two{0%{-o-transform:rotate(0deg) scale(1)}50%{-o-transform:rotate(360deg) scale(1.3)}100%{-o-transform:rotate(720deg) scale(1)}}@-ms-keyframes cssload-animball_two{0%{-ms-transform:rotate(0deg) scale(1)}50%{-ms-transform:rotate(360deg) scale(1.3)}100%{-ms-transform:rotate(720deg) scale(1)}}@-webkit-keyframes cssload-animball_two{0%{-webkit-transform:rotate(0deg) scale(1)}50%{-webkit-transform:rotate(360deg) scale(1.3)}100%{-webkit-transform:rotate(720deg) scale(1)}}@-moz-keyframes cssload-animball_two{0%{-moz-transform:rotate(0deg) scale(1)}50%{-moz-transform:rotate(360deg) scale(1.3)}100%{-moz-transform:rotate(720deg) scale(1)}}';
		} else {
			$css .= '.cssload-fond{position:relative;margin:auto}.cssload-container-general{animation:cssload-animball_two 1.15s infinite;-o-animation:cssload-animball_two 1.15s infinite;-ms-animation:cssload-animball_two 1.15s infinite;-webkit-animation:cssload-animball_two 1.15s infinite;-moz-animation:cssload-animball_two 1.15s infinite;width:94px;height:94px}.cssload-internal{width:94px;height:94px;position:absolute}.cssload-ballcolor{width:43px;height:43px;border-radius:50%}.cssload-ball_1,.cssload-ball_2,.cssload-ball_3,.cssload-ball_4{position:absolute;animation:cssload-animball_one 1.15s infinite ease;-o-animation:cssload-animball_one 1.15s infinite ease;-ms-animation:cssload-animball_one 1.15s infinite ease;-webkit-animation:cssload-animball_one 1.15s infinite ease;-moz-animation:cssload-animball_one 1.15s infinite ease}.cssload-ball_1{background-color:'.$preloader["anim_color"].';top:0;left:0}.cssload-ball_2{background-color:'.$preloader["anim_color"].';top:0;left:51px}.cssload-ball_3{background-color:'.$preloader["anim_color"].';top:51px;left:0}.cssload-ball_4{background-color:'.$preloader["anim_color"].';top:51px;left:51px}@keyframes cssload-animball_one{0%{position:absolute}50%{top:26px;left:26px;position:absolute;opacity:.5}100%{position:absolute}}@-o-keyframes cssload-animball_one{0%{position:absolute}50%{top:26px;left:26px;position:absolute;opacity:.5}100%{position:absolute}}@-ms-keyframes cssload-animball_one{0%{position:absolute}50%{top:26px;left:26px;position:absolute;opacity:.5}100%{position:absolute}}@-webkit-keyframes cssload-animball_one{0%{position:absolute}50%{top:26px;left:26px;position:absolute;opacity:.5}100%{position:absolute}}@-moz-keyframes cssload-animball_one{0%{position:absolute}50%{top:26px;left:26px;position:absolute;opacity:.5}100%{position:absolute}}@keyframes cssload-animball_two{0%{transform:rotate(0deg) scale(1)}50%{transform:rotate(360deg) scale(1.3)}100%{transform:rotate(720deg) scale(1)}}@-o-keyframes cssload-animball_two{0%{-o-transform:rotate(0deg) scale(1)}50%{-o-transform:rotate(360deg) scale(1.3)}100%{-o-transform:rotate(720deg) scale(1)}}@-ms-keyframes cssload-animball_two{0%{-ms-transform:rotate(0deg) scale(1)}50%{-ms-transform:rotate(360deg) scale(1.3)}100%{-ms-transform:rotate(720deg) scale(1)}}@-webkit-keyframes cssload-animball_two{0%{-webkit-transform:rotate(0deg) scale(1)}50%{-webkit-transform:rotate(360deg) scale(1.3)}100%{-webkit-transform:rotate(720deg) scale(1)}}@-moz-keyframes cssload-animball_two{0%{-moz-transform:rotate(0deg) scale(1)}50%{-moz-transform:rotate(360deg) scale(1.3)}100%{-moz-transform:rotate(720deg) scale(1)}}';
		}
	} elseif ( $preloader['anim'] === 'horizontal1' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '#loadFacebookG{width:35px;height:35px;display:block;position:relative;margin:auto}.facebook_blockG{background-color:'.$preloader["anim_color"].';border:1px solid '.$preloader["anim_color"].';float:left;height:25px;margin-left:2px;width:7px;opacity:.1;animation-name:bounceG;-o-animation-name:bounceG;-ms-animation-name:bounceG;-webkit-animation-name:bounceG;-moz-animation-name:bounceG;animation-duration:1.235s;-o-animation-duration:1.235s;-ms-animation-duration:1.235s;-webkit-animation-duration:1.235s;-moz-animation-duration:1.235s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-direction:normal;-o-animation-direction:normal;-ms-animation-direction:normal;-webkit-animation-direction:normal;-moz-animation-direction:normal;transform:scale(0.7);-o-transform:scale(0.7);-ms-transform:scale(0.7);-webkit-transform:scale(0.7);-moz-transform:scale(0.7)}#blockG_1{animation-delay:.3695s;-o-animation-delay:.3695s;-ms-animation-delay:.3695s;-webkit-animation-delay:.3695s;-moz-animation-delay:.3695s}#blockG_2{animation-delay:.496s;-o-animation-delay:.496s;-ms-animation-delay:.496s;-webkit-animation-delay:.496s;-moz-animation-delay:.496s}#blockG_3{animation-delay:.6125s;-o-animation-delay:.6125s;-ms-animation-delay:.6125s;-webkit-animation-delay:.6125s;-moz-animation-delay:.6125s}@keyframes bounceG{0%{transform:scale(1.2);opacity:1}100%{transform:scale(0.7);opacity:.1}}@-o-keyframes bounceG{0%{-o-transform:scale(1.2);opacity:1}100%{-o-transform:scale(0.7);opacity:.1}}@-ms-keyframes bounceG{0%{-ms-transform:scale(1.2);opacity:1}100%{-ms-transform:scale(0.7);opacity:.1}}@-webkit-keyframes bounceG{0%{-webkit-transform:scale(1.2);opacity:1}100%{-webkit-transform:scale(0.7);opacity:.1}}@-moz-keyframes bounceG{0%{-moz-transform:scale(1.2);opacity:1}100%{-moz-transform:scale(0.7);opacity:.1}}';
		} else {
			$css .= '#loadFacebookG{width:54px;height:54px;display:block;position:relative;margin:auto}.facebook_blockG{background-color:'.$preloader["anim_color"].';border:1px solid '.$preloader["anim_color"].';float:left;height:39px;margin-left:3px;width:10px;opacity:.1;animation-name:bounceG;-o-animation-name:bounceG;-ms-animation-name:bounceG;-webkit-animation-name:bounceG;-moz-animation-name:bounceG;animation-duration:1.235s;-o-animation-duration:1.235s;-ms-animation-duration:1.235s;-webkit-animation-duration:1.235s;-moz-animation-duration:1.235s;animation-iteration-count:infinite;-o-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;animation-direction:normal;-o-animation-direction:normal;-ms-animation-direction:normal;-webkit-animation-direction:normal;-moz-animation-direction:normal;transform:scale(0.7);-o-transform:scale(0.7);-ms-transform:scale(0.7);-webkit-transform:scale(0.7);-moz-transform:scale(0.7)}#blockG_1{animation-delay:.3695s;-o-animation-delay:.3695s;-ms-animation-delay:.3695s;-webkit-animation-delay:.3695s;-moz-animation-delay:.3695s}#blockG_2{animation-delay:.496s;-o-animation-delay:.496s;-ms-animation-delay:.496s;-webkit-animation-delay:.496s;-moz-animation-delay:.496s}#blockG_3{animation-delay:.6125s;-o-animation-delay:.6125s;-ms-animation-delay:.6125s;-webkit-animation-delay:.6125s;-moz-animation-delay:.6125s}@keyframes bounceG{0%{transform:scale(1.2);opacity:1}100%{transform:scale(0.7);opacity:.1}}@-o-keyframes bounceG{0%{-o-transform:scale(1.2);opacity:1}100%{-o-transform:scale(0.7);opacity:.1}}@-ms-keyframes bounceG{0%{-ms-transform:scale(1.2);opacity:1}100%{-ms-transform:scale(0.7);opacity:.1}}@-webkit-keyframes bounceG{0%{-webkit-transform:scale(1.2);opacity:1}100%{-webkit-transform:scale(0.7);opacity:.1}}@-moz-keyframes bounceG{0%{-moz-transform:scale(1.2);opacity:1}100%{-moz-transform:scale(0.7);opacity:.1}}';
		}
	} elseif ( $preloader['anim'] === 'horizontal2' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.loader{height:42px;left:50%;position:absolute;transform:translateX(-50%) translateY(-50%);-o-transform:translateX(-50%) translateY(-50%);-ms-transform:translateX(-50%) translateY(-50%);-webkit-transform:translateX(-50%) translateY(-50%);-moz-transform:translateX(-50%) translateY(-50%);width:42px}.loader span{background:'.$preloader["anim_color"].';display:block;height:8px;opacity:0;position:absolute;width:8px;animation:load 3s ease-in-out infinite;-o-animation:load 3s ease-in-out infinite;-ms-animation:load 3s ease-in-out infinite;-webkit-animation:load 3s ease-in-out infinite;-moz-animation:load 3s ease-in-out infinite}.loader span.block-1{animation-delay:.686s;-o-animation-delay:.686s;-ms-animation-delay:.686s;-webkit-animation-delay:.686s;-moz-animation-delay:.686s;left:0;top:0}.loader span.block-2{animation-delay:.632s;-o-animation-delay:.632s;-ms-animation-delay:.632s;-webkit-animation-delay:.632s;-moz-animation-delay:.632s;left:11px;top:0}.loader span.block-3{animation-delay:.568s;-o-animation-delay:.568s;-ms-animation-delay:.568s;-webkit-animation-delay:.568s;-moz-animation-delay:.568s;left:22px;top:0}.loader span.block-4{animation-delay:.514s;-o-animation-delay:.514s;-ms-animation-delay:.514s;-webkit-animation-delay:.514s;-moz-animation-delay:.514s;left:34px;top:0}.loader span.block-5{animation-delay:.45s;-o-animation-delay:.45s;-ms-animation-delay:.45s;-webkit-animation-delay:.45s;-moz-animation-delay:.45s;left:0;top:11px}.loader span.block-6{animation-delay:.386s;-o-animation-delay:.386s;-ms-animation-delay:.386s;-webkit-animation-delay:.386s;-moz-animation-delay:.386s;left:11px;top:11px}.loader span.block-7{animation-delay:.332s;-o-animation-delay:.332s;-ms-animation-delay:.332s;-webkit-animation-delay:.332s;-moz-animation-delay:.332s;left:22px;top:11px}.loader span.block-8{animation-delay:.268s;-o-animation-delay:.268s;-ms-animation-delay:.268s;-webkit-animation-delay:.268s;-moz-animation-delay:.268s;left:34px;top:11px}.loader span.block-9{animation-delay:.214s;-o-animation-delay:.214s;-ms-animation-delay:.214s;-webkit-animation-delay:.214s;-moz-animation-delay:.214s;left:0;top:22px}.loader span.block-10{animation-delay:.15s;-o-animation-delay:.15s;-ms-animation-delay:.15s;-webkit-animation-delay:.15s;-moz-animation-delay:.15s;left:11px;top:22px}.loader span.block-11{animation-delay:.086s;-o-animation-delay:.086s;-ms-animation-delay:.086s;-webkit-animation-delay:.086s;-moz-animation-delay:.086s;left:22px;top:22px}.loader span.block-12{animation-delay:.032s;-o-animation-delay:.032s;-ms-animation-delay:.032s;-webkit-animation-delay:.032s;-moz-animation-delay:.032s;left:34px;top:22px}.loader span.block-13{animation-delay:-.032s;-o-animation-delay:-.032s;-ms-animation-delay:-.032s;-webkit-animation-delay:-.032s;-moz-animation-delay:-.032s;left:0;top:34px}.loader span.block-14{animation-delay:-.086s;-o-animation-delay:-.086s;-ms-animation-delay:-.086s;-webkit-animation-delay:-.086s;-moz-animation-delay:-.086s;left:11px;top:34px}.loader span.block-15{animation-delay:-.15s;-o-animation-delay:-.15s;-ms-animation-delay:-.15s;-webkit-animation-delay:-.15s;-moz-animation-delay:-.15s;left:22px;top:34px}.loader span.block-16{animation-delay:-.214s;-o-animation-delay:-.214s;-ms-animation-delay:-.214s;-webkit-animation-delay:-.214s;-moz-animation-delay:-.214s;left:34px;top:34px}@keyframes load{0%{opacity:0;transform:translateY(-70px)}15%{opacity:0;transform:translateY(-70px)}30%{opacity:1;transform:translateY(0)}70%{opacity:1;transform:translateY(0)}85%{opacity:0;transform:translateY(70px)}100%{opacity:0;transform:translateY(70px)}}@-o-keyframes load{0%{opacity:0;-o-transform:translateY(-70px)}15%{opacity:0;-o-transform:translateY(-70px)}30%{opacity:1;-o-transform:translateY(0)}70%{opacity:1;-o-transform:translateY(0)}85%{opacity:0;-o-transform:translateY(70px)}100%{opacity:0;-o-transform:translateY(70px)}}@-ms-keyframes load{0%{opacity:0;-ms-transform:translateY(-70px)}15%{opacity:0;-ms-transform:translateY(-70px)}30%{opacity:1;-ms-transform:translateY(0)}70%{opacity:1;-ms-transform:translateY(0)}85%{opacity:0;-ms-transform:translateY(70px)}100%{opacity:0;-ms-transform:translateY(70px)}}@-webkit-keyframes load{0%{opacity:0;-webkit-transform:translateY(-70px)}15%{opacity:0;-webkit-transform:translateY(-70px)}30%{opacity:1;-webkit-transform:translateY(0)}70%{opacity:1;-webkit-transform:translateY(0)}85%{opacity:0;-webkit-transform:translateY(70px)}100%{opacity:0;-webkit-transform:translateY(70px)}}@-moz-keyframes load{0%{opacity:0;-moz-transform:translateY(-70px)}15%{opacity:0;-moz-transform:translateY(-70px)}30%{opacity:1;-moz-transform:translateY(0)}70%{opacity:1;-moz-transform:translateY(0)}85%{opacity:0;-moz-transform:translateY(70px)}100%{opacity:0;-moz-transform:translateY(70px)}}';
		} else {
			$css .= '.loader{height:54px;left:50%;position:absolute;transform:translateX(-50%) translateY(-50%);-o-transform:translateX(-50%) translateY(-50%);-ms-transform:translateX(-50%) translateY(-50%);-webkit-transform:translateX(-50%) translateY(-50%);-moz-transform:translateX(-50%) translateY(-50%);width:54px}.loader span{background:'.$preloader["anim_color"].';display:block;height:11px;opacity:0;position:absolute;width:11px;animation:load 3s ease-in-out infinite;-o-animation:load 3s ease-in-out infinite;-ms-animation:load 3s ease-in-out infinite;-webkit-animation:load 3s ease-in-out infinite;-moz-animation:load 3s ease-in-out infinite}.loader span.block-1{animation-delay:.686s;-o-animation-delay:.686s;-ms-animation-delay:.686s;-webkit-animation-delay:.686s;-moz-animation-delay:.686s;left:0;top:0}.loader span.block-2{animation-delay:.632s;-o-animation-delay:.632s;-ms-animation-delay:.632s;-webkit-animation-delay:.632s;-moz-animation-delay:.632s;left:14px;top:0}.loader span.block-3{animation-delay:.568s;-o-animation-delay:.568s;-ms-animation-delay:.568s;-webkit-animation-delay:.568s;-moz-animation-delay:.568s;left:29px;top:0}.loader span.block-4{animation-delay:.514s;-o-animation-delay:.514s;-ms-animation-delay:.514s;-webkit-animation-delay:.514s;-moz-animation-delay:.514s;left:43px;top:0}.loader span.block-5{animation-delay:.45s;-o-animation-delay:.45s;-ms-animation-delay:.45s;-webkit-animation-delay:.45s;-moz-animation-delay:.45s;left:0;top:14px}.loader span.block-6{animation-delay:.386s;-o-animation-delay:.386s;-ms-animation-delay:.386s;-webkit-animation-delay:.386s;-moz-animation-delay:.386s;left:14px;top:14px}.loader span.block-7{animation-delay:.332s;-o-animation-delay:.332s;-ms-animation-delay:.332s;-webkit-animation-delay:.332s;-moz-animation-delay:.332s;left:29px;top:14px}.loader span.block-8{animation-delay:.268s;-o-animation-delay:.268s;-ms-animation-delay:.268s;-webkit-animation-delay:.268s;-moz-animation-delay:.268s;left:43px;top:14px}.loader span.block-9{animation-delay:.214s;-o-animation-delay:.214s;-ms-animation-delay:.214s;-webkit-animation-delay:.214s;-moz-animation-delay:.214s;left:0;top:29px}.loader span.block-10{animation-delay:.15s;-o-animation-delay:.15s;-ms-animation-delay:.15s;-webkit-animation-delay:.15s;-moz-animation-delay:.15s;left:14px;top:29px}.loader span.block-11{animation-delay:.086s;-o-animation-delay:.086s;-ms-animation-delay:.086s;-webkit-animation-delay:.086s;-moz-animation-delay:.086s;left:29px;top:29px}.loader span.block-12{animation-delay:.032s;-o-animation-delay:.032s;-ms-animation-delay:.032s;-webkit-animation-delay:.032s;-moz-animation-delay:.032s;left:43px;top:29px}.loader span.block-13{animation-delay:-.032s;-o-animation-delay:-.032s;-ms-animation-delay:-.032s;-webkit-animation-delay:-.032s;-moz-animation-delay:-.032s;left:0;top:43px}.loader span.block-14{animation-delay:-.086s;-o-animation-delay:-.086s;-ms-animation-delay:-.086s;-webkit-animation-delay:-.086s;-moz-animation-delay:-.086s;left:14px;top:43px}.loader span.block-15{animation-delay:-.15s;-o-animation-delay:-.15s;-ms-animation-delay:-.15s;-webkit-animation-delay:-.15s;-moz-animation-delay:-.15s;left:29px;top:43px}.loader span.block-16{animation-delay:-.214s;-o-animation-delay:-.214s;-ms-animation-delay:-.214s;-webkit-animation-delay:-.214s;-moz-animation-delay:-.214s;left:43px;top:43px}@keyframes load{0%{opacity:0;transform:translateY(-90px)}15%{opacity:0;transform:translateY(-90px)}30%{opacity:1;transform:translateY(0)}70%{opacity:1;transform:translateY(0)}85%{opacity:0;transform:translateY(90px)}100%{opacity:0;transform:translateY(90px)}}@-o-keyframes load{0%{opacity:0;-o-transform:translateY(-90px)}15%{opacity:0;-o-transform:translateY(-90px)}30%{opacity:1;-o-transform:translateY(0)}70%{opacity:1;-o-transform:translateY(0)}85%{opacity:0;-o-transform:translateY(90px)}100%{opacity:0;-o-transform:translateY(90px)}}@-ms-keyframes load{0%{opacity:0;-ms-transform:translateY(-90px)}15%{opacity:0;-ms-transform:translateY(-90px)}30%{opacity:1;-ms-transform:translateY(0)}70%{opacity:1;-ms-transform:translateY(0)}85%{opacity:0;-ms-transform:translateY(90px)}100%{opacity:0;-ms-transform:translateY(90px)}}@-webkit-keyframes load{0%{opacity:0;-webkit-transform:translateY(-90px)}15%{opacity:0;-webkit-transform:translateY(-90px)}30%{opacity:1;-webkit-transform:translateY(0)}70%{opacity:1;-webkit-transform:translateY(0)}85%{opacity:0;-webkit-transform:translateY(90px)}100%{opacity:0;-webkit-transform:translateY(90px)}}@-moz-keyframes load{0%{opacity:0;-moz-transform:translateY(-90px)}15%{opacity:0;-moz-transform:translateY(-90px)}30%{opacity:1;-moz-transform:translateY(0)}70%{opacity:1;-moz-transform:translateY(0)}85%{opacity:0;-moz-transform:translateY(90px)}100%{opacity:0;-moz-transform:translateY(90px)}}';
		}
	} elseif ( $preloader['anim'] === 'horizontal3' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-cube{background-color:'.$preloader["anim_color"].';width:9px;height:9px;position:absolute;margin:auto;animation:cssload-cubemove 2s infinite ease-in-out;-o-animation:cssload-cubemove 2s infinite ease-in-out;-ms-animation:cssload-cubemove 2s infinite ease-in-out;-webkit-animation:cssload-cubemove 2s infinite ease-in-out;-moz-animation:cssload-cubemove 2s infinite ease-in-out}.cssload-cube1{left:13px;top:0;animation-delay:.1s;-o-animation-delay:.1s;-ms-animation-delay:.1s;-webkit-animation-delay:.1s;-moz-animation-delay:.1s}.cssload-cube2{left:25px;top:0;animation-delay:.2s;-o-animation-delay:.2s;-ms-animation-delay:.2s;-webkit-animation-delay:.2s;-moz-animation-delay:.2s}.cssload-cube3{left:38px;top:0;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube4{left:0;top:13px;animation-delay:.1s;-o-animation-delay:.1s;-ms-animation-delay:.1s;-webkit-animation-delay:.1s;-moz-animation-delay:.1s}.cssload-cube5{left:13px;top:13px;animation-delay:.2s;-o-animation-delay:.2s;-ms-animation-delay:.2s;-webkit-animation-delay:.2s;-moz-animation-delay:.2s}.cssload-cube6{left:25px;top:13px;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube7{left:38px;top:13px;animation-delay:.4s;-o-animation-delay:.4s;-ms-animation-delay:.4s;-webkit-animation-delay:.4s;-moz-animation-delay:.4s}.cssload-cube8{left:0;top:25px;animation-delay:.2s;-o-animation-delay:.2s;-ms-animation-delay:.2s;-webkit-animation-delay:.2s;-moz-animation-delay:.2s}.cssload-cube9{left:13px;top:25px;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube10{left:25px;top:25px;animation-delay:.4s;-o-animation-delay:.4s;-ms-animation-delay:.4s;-webkit-animation-delay:.4s;-moz-animation-delay:.4s}.cssload-cube11{left:38px;top:25px;animation-delay:.5s;-o-animation-delay:.5s;-ms-animation-delay:.5s;-webkit-animation-delay:.5s;-moz-animation-delay:.5s}.cssload-cube12{left:0;top:38px;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube13{left:13px;top:38px;animation-delay:.4s;-o-animation-delay:.4s;-ms-animation-delay:.4s;-webkit-animation-delay:.4s;-moz-animation-delay:.4s}.cssload-cube14{left:25px;top:38px;animation-delay:.5s;-o-animation-delay:.5s;-ms-animation-delay:.5s;-webkit-animation-delay:.5s;-moz-animation-delay:.5s}.cssload-cube15{left:38px;top:38px;animation-delay:.6s;-o-animation-delay:.6s;-ms-animation-delay:.6s;-webkit-animation-delay:.6s;-moz-animation-delay:.6s}.cssload-spinner{margin:auto;width:49px;height:49px;position:relative}@keyframes cssload-cubemove{35%{transform:scale(0.005)}50%{transform:scale(1.7)}65%{transform:scale(0.005)}}@-o-keyframes cssload-cubemove{35%{-o-transform:scale(0.005)}50%{-o-transform:scale(1.7)}65%{-o-transform:scale(0.005)}}@-ms-keyframes cssload-cubemove{35%{-ms-transform:scale(0.005)}50%{-ms-transform:scale(1.7)}65%{-ms-transform:scale(0.005)}}@-webkit-keyframes cssload-cubemove{35%{-webkit-transform:scale(0.005)}50%{-webkit-transform:scale(1.7)}65%{-webkit-transform:scale(0.005)}}@-moz-keyframes cssload-cubemove{35%{-moz-transform:scale(0.005)}50%{-moz-transform:scale(1.7)}65%{-moz-transform:scale(0.005)}}';
		} else {
			$css .= '.cssload-cube{background-color:'.$preloader["anim_color"].';width:14px;height:14px;position:absolute;margin:auto;animation:cssload-cubemove 2s infinite ease-in-out;-o-animation:cssload-cubemove 2s infinite ease-in-out;-ms-animation:cssload-cubemove 2s infinite ease-in-out;-webkit-animation:cssload-cubemove 2s infinite ease-in-out;-moz-animation:cssload-cubemove 2s infinite ease-in-out}.cssload-cube1{left:19px;top:0;animation-delay:.1s;-o-animation-delay:.1s;-ms-animation-delay:.1s;-webkit-animation-delay:.1s;-moz-animation-delay:.1s}.cssload-cube2{left:39px;top:0;animation-delay:.2s;-o-animation-delay:.2s;-ms-animation-delay:.2s;-webkit-animation-delay:.2s;-moz-animation-delay:.2s}.cssload-cube3{left:58px;top:0;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube4{left:0;top:19px;animation-delay:.1s;-o-animation-delay:.1s;-ms-animation-delay:.1s;-webkit-animation-delay:.1s;-moz-animation-delay:.1s}.cssload-cube5{left:19px;top:19px;animation-delay:.2s;-o-animation-delay:.2s;-ms-animation-delay:.2s;-webkit-animation-delay:.2s;-moz-animation-delay:.2s}.cssload-cube6{left:39px;top:19px;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube7{left:58px;top:19px;animation-delay:.4s;-o-animation-delay:.4s;-ms-animation-delay:.4s;-webkit-animation-delay:.4s;-moz-animation-delay:.4s}.cssload-cube8{left:0;top:39px;animation-delay:.2s;-o-animation-delay:.2s;-ms-animation-delay:.2s;-webkit-animation-delay:.2s;-moz-animation-delay:.2s}.cssload-cube9{left:19px;top:39px;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube10{left:39px;top:39px;animation-delay:.4s;-o-animation-delay:.4s;-ms-animation-delay:.4s;-webkit-animation-delay:.4s;-moz-animation-delay:.4s}.cssload-cube11{left:58px;top:39px;animation-delay:.5s;-o-animation-delay:.5s;-ms-animation-delay:.5s;-webkit-animation-delay:.5s;-moz-animation-delay:.5s}.cssload-cube12{left:0;top:58px;animation-delay:.3s;-o-animation-delay:.3s;-ms-animation-delay:.3s;-webkit-animation-delay:.3s;-moz-animation-delay:.3s}.cssload-cube13{left:19px;top:58px;animation-delay:.4s;-o-animation-delay:.4s;-ms-animation-delay:.4s;-webkit-animation-delay:.4s;-moz-animation-delay:.4s}.cssload-cube14{left:39px;top:58px;animation-delay:.5s;-o-animation-delay:.5s;-ms-animation-delay:.5s;-webkit-animation-delay:.5s;-moz-animation-delay:.5s}.cssload-cube15{left:58px;top:58px;animation-delay:.6s;-o-animation-delay:.6s;-ms-animation-delay:.6s;-webkit-animation-delay:.6s;-moz-animation-delay:.6s}.cssload-spinner{margin:auto;width:76px;height:76px;position:relative}@keyframes cssload-cubemove{35%{transform:scale(0.005)}50%{transform:scale(1.7)}65%{transform:scale(0.005)}}@-o-keyframes cssload-cubemove{35%{-o-transform:scale(0.005)}50%{-o-transform:scale(1.7)}65%{-o-transform:scale(0.005)}}@-ms-keyframes cssload-cubemove{35%{-ms-transform:scale(0.005)}50%{-ms-transform:scale(1.7)}65%{-ms-transform:scale(0.005)}}@-webkit-keyframes cssload-cubemove{35%{-webkit-transform:scale(0.005)}50%{-webkit-transform:scale(1.7)}65%{-webkit-transform:scale(0.005)}}@-moz-keyframes cssload-cubemove{35%{-moz-transform:scale(0.005)}50%{-moz-transform:scale(1.7)}65%{-moz-transform:scale(0.005)}}';
		}
	} elseif ( $preloader['anim'] === '3d1' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-loader{width:24px;height:24px;position:absolute;left:50%;transform:translate3d(-50%,-50%,0);-o-transform:translate3d(-50%,-50%,0);-ms-transform:translate3d(-50%,-50%,0);-webkit-transform:translate3d(-50%,-50%,0);-moz-transform:translate3d(-50%,-50%,0);perspective:1200px;-o-perspective:1200;-ms-perspective:1200;-webkit-perspective:1200;-moz-perspective:1200}.cssload-flipper{position:relative;display:block;height:inherit;width:inherit;animation:cssload-flip 1.38s infinite ease-in-out;-o-animation:cssload-flip 1.38s infinite ease-in-out;-ms-animation:cssload-flip 1.38s infinite ease-in-out;-webkit-animation:cssload-flip 1.38s infinite ease-in-out;-moz-animation:cssload-flip 1.38s infinite ease-in-out;transform-style:preserve-3d;-o-transform-style:preserve-3d;-ms-transform-style:preserve-3d;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d}.cssload-front,.cssload-back{position:absolute;top:0;left:0;display:block;background-color:'.$preloader["anim_color"].';height:100%;width:100%;backface-visibility:hidden}.cssload-back{background-color:'.$preloader["anim_color"].';z-index:800;transform:rotateY(-180deg);-o-transform:rotateY(-180deg);-ms-transform:rotateY(-180deg);-webkit-transform:rotateY(-180deg);-moz-transform:rotateY(-180deg)}@keyframes cssload-flip{0%{transform:perspective(117px) rotateX(0deg) rotateY(0deg)}50%{transform:perspective(117px) rotateX(-180.1deg) rotateY(0deg)}100%{transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-o-keyframes cssload-flip{0%{-o-transform:perspective(117px) rotateX(0deg) rotateY(0deg)}50%{-o-transform:perspective(117px) rotateX(-180.1deg) rotateY(0deg)}100%{-o-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-ms-keyframes cssload-flip{0%{-ms-transform:perspective(117px) rotateX(0deg) rotateY(0deg)}50%{-ms-transform:perspective(117px) rotateX(-180.1deg) rotateY(0deg)}100%{-ms-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-webkit-keyframes cssload-flip{0%{-webkit-transform:perspective(117px) rotateX(0deg) rotateY(0deg)}50%{-webkit-transform:perspective(117px) rotateX(-180.1deg) rotateY(0deg)}100%{-webkit-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}@-moz-keyframes cssload-flip{0%{-moz-transform:perspective(117px) rotateX(0deg) rotateY(0deg)}50%{-moz-transform:perspective(117px) rotateX(-180.1deg) rotateY(0deg)}100%{-moz-transform:perspective(117px) rotateX(-180deg) rotateY(-179.9deg)}}';
		} else {
			$css .= '.cssload-loader{width:44px;height:44px;position:absolute;left:50%;transform:translate3d(-50%,-50%,0);-o-transform:translate3d(-50%,-50%,0);-ms-transform:translate3d(-50%,-50%,0);-webkit-transform:translate3d(-50%,-50%,0);-moz-transform:translate3d(-50%,-50%,0);perspective:1200px;-o-perspective:1200;-ms-perspective:1200;-webkit-perspective:1200;-moz-perspective:1200}.cssload-flipper{position:relative;display:block;height:inherit;width:inherit;animation:cssload-flip 1.38s infinite ease-in-out;-o-animation:cssload-flip 1.38s infinite ease-in-out;-ms-animation:cssload-flip 1.38s infinite ease-in-out;-webkit-animation:cssload-flip 1.38s infinite ease-in-out;-moz-animation:cssload-flip 1.38s infinite ease-in-out;transform-style:preserve-3d;-o-transform-style:preserve-3d;-ms-transform-style:preserve-3d;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d}.cssload-front,.cssload-back{position:absolute;top:0;left:0;display:block;background-color:'.$preloader["anim_color"].';height:100%;width:100%;backface-visibility:hidden}.cssload-back{background-color:'.$preloader["anim_color"].';z-index:800;transform:rotateY(-180deg);-o-transform:rotateY(-180deg);-ms-transform:rotateY(-180deg);-webkit-transform:rotateY(-180deg);-moz-transform:rotateY(-180deg)}@keyframes cssload-flip{0%{transform:perspective(210px) rotateX(0deg) rotateY(0deg)}50%{transform:perspective(210px) rotateX(-180.1deg) rotateY(0deg)}100%{transform:perspective(210px) rotateX(-180deg) rotateY(-179.9deg)}}@-o-keyframes cssload-flip{0%{-o-transform:perspective(210px) rotateX(0deg) rotateY(0deg)}50%{-o-transform:perspective(210px) rotateX(-180.1deg) rotateY(0deg)}100%{-o-transform:perspective(210px) rotateX(-180deg) rotateY(-179.9deg)}}@-ms-keyframes cssload-flip{0%{-ms-transform:perspective(210px) rotateX(0deg) rotateY(0deg)}50%{-ms-transform:perspective(210px) rotateX(-180.1deg) rotateY(0deg)}100%{-ms-transform:perspective(210px) rotateX(-180deg) rotateY(-179.9deg)}}@-webkit-keyframes cssload-flip{0%{-webkit-transform:perspective(210px) rotateX(0deg) rotateY(0deg)}50%{-webkit-transform:perspective(210px) rotateX(-180.1deg) rotateY(0deg)}100%{-webkit-transform:perspective(210px) rotateX(-180deg) rotateY(-179.9deg)}}@-moz-keyframes cssload-flip{0%{-moz-transform:perspective(210px) rotateX(0deg) rotateY(0deg)}50%{-moz-transform:perspective(210px) rotateX(-180.1deg) rotateY(0deg)}100%{-moz-transform:perspective(210px) rotateX(-180deg) rotateY(-179.9deg)}}';
		}
	} elseif ( $preloader['anim'] === '3d2' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '.cssload-box-loading{width:37px;height:37px;margin:auto;position:absolute;left:0;right:0;top:0;bottom:0}.cssload-box-loading:before{content:"";width:37px;height:4px;background:'.$preloader["anim_color"].';opacity:.1;position:absolute;top:44px;left:0;border-radius:50%;animation:shadow .58s linear infinite;-o-animation:shadow .58s linear infinite;-ms-animation:shadow .58s linear infinite;-webkit-animation:shadow .58s linear infinite;-moz-animation:shadow .58s linear infinite}.cssload-box-loading:after{content:"";width:37px;height:37px;background:'.$preloader["anim_color"].';position:absolute;top:0;left:0;border-radius:2px;animation:cssload-animate .58s linear infinite;-o-animation:cssload-animate .58s linear infinite;-ms-animation:cssload-animate .58s linear infinite;-webkit-animation:cssload-animate .58s linear infinite;-moz-animation:cssload-animate .58s linear infinite}@keyframes cssload-animate{17%{border-bottom-right-radius:2px}25%{transform:translateY(7px) rotate(22.5deg)}50%{transform:translateY(13px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:30px}75%{transform:translateY(7px) rotate(67.5deg)}100%{transform:translateY(0) rotate(90deg)}}@-o-keyframes cssload-animate{17%{border-bottom-right-radius:2px}25%{-o-transform:translateY(7px) rotate(22.5deg)}50%{-o-transform:translateY(13px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:30px}75%{-o-transform:translateY(7px) rotate(67.5deg)}100%{-o-transform:translateY(0) rotate(90deg)}}@-ms-keyframes cssload-animate{17%{border-bottom-right-radius:2px}25%{-ms-transform:translateY(7px) rotate(22.5deg)}50%{-ms-transform:translateY(13px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:30px}75%{-ms-transform:translateY(7px) rotate(67.5deg)}100%{-ms-transform:translateY(0) rotate(90deg)}}@-webkit-keyframes cssload-animate{17%{border-bottom-right-radius:2px}25%{-webkit-transform:translateY(7px) rotate(22.5deg)}50%{-webkit-transform:translateY(13px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:30px}75%{-webkit-transform:translateY(7px) rotate(67.5deg)}100%{-webkit-transform:translateY(0) rotate(90deg)}}@-moz-keyframes cssload-animate{17%{border-bottom-right-radius:2px}25%{-moz-transform:translateY(7px) rotate(22.5deg)}50%{-moz-transform:translateY(13px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:30px}75%{-moz-transform:translateY(7px) rotate(67.5deg)}100%{-moz-transform:translateY(0) rotate(90deg)}}@keyframes shadow{0%,100%{transform:scale(1,1)}50%{transform:scale(1.2,1)}}@-o-keyframes shadow{0%,100%{-o-transform:scale(1,1)}50%{-o-transform:scale(1.2,1)}}@-ms-keyframes shadow{0%,100%{-ms-transform:scale(1,1)}50%{-ms-transform:scale(1.2,1)}}@-webkit-keyframes shadow{0%,100%{-webkit-transform:scale(1,1)}50%{-webkit-transform:scale(1.2,1)}}@-moz-keyframes shadow{0%,100%{-moz-transform:scale(1,1)}50%{-moz-transform:scale(1.2,1)}}';
		} else {
			$css .= '.cssload-box-loading{width:56px;height:56px;margin:auto;position:absolute;left:0;right:0;top:0;bottom:0}.cssload-box-loading:before{content:"";width:56px;height:6px;background:'.$preloader["anim_color"].';opacity:.1;position:absolute;top:66px;left:0;border-radius:50%;animation:shadow .58s linear infinite;-o-animation:shadow .58s linear infinite;-ms-animation:shadow .58s linear infinite;-webkit-animation:shadow .58s linear infinite;-moz-animation:shadow .58s linear infinite}.cssload-box-loading:after{content:"";width:56px;height:56px;background:'.$preloader["anim_color"].';position:absolute;top:0;left:0;border-radius:3px;animation:cssload-animate .58s linear infinite;-o-animation:cssload-animate .58s linear infinite;-ms-animation:cssload-animate .58s linear infinite;-webkit-animation:cssload-animate .58s linear infinite;-moz-animation:cssload-animate .58s linear infinite}@keyframes cssload-animate{17%{border-bottom-right-radius:3px}25%{transform:translateY(10px) rotate(22.5deg)}50%{transform:translateY(20px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:45px}75%{transform:translateY(10px) rotate(67.5deg)}100%{transform:translateY(0) rotate(90deg)}}@-o-keyframes cssload-animate{17%{border-bottom-right-radius:3px}25%{-o-transform:translateY(10px) rotate(22.5deg)}50%{-o-transform:translateY(20px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:45px}75%{-o-transform:translateY(10px) rotate(67.5deg)}100%{-o-transform:translateY(0) rotate(90deg)}}@-ms-keyframes cssload-animate{17%{border-bottom-right-radius:3px}25%{-ms-transform:translateY(10px) rotate(22.5deg)}50%{-ms-transform:translateY(20px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:45px}75%{-ms-transform:translateY(10px) rotate(67.5deg)}100%{-ms-transform:translateY(0) rotate(90deg)}}@-webkit-keyframes cssload-animate{17%{border-bottom-right-radius:3px}25%{-webkit-transform:translateY(10px) rotate(22.5deg)}50%{-webkit-transform:translateY(20px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:45px}75%{-webkit-transform:translateY(10px) rotate(67.5deg)}100%{-webkit-transform:translateY(0) rotate(90deg)}}@-moz-keyframes cssload-animate{17%{border-bottom-right-radius:3px}25%{-moz-transform:translateY(10px) rotate(22.5deg)}50%{-moz-transform:translateY(20px) scale(1,0.9) rotate(45deg);border-bottom-right-radius:45px}75%{-moz-transform:translateY(10px) rotate(67.5deg)}100%{-moz-transform:translateY(0) rotate(90deg)}}@keyframes shadow{0%,100%{transform:scale(1,1)}50%{transform:scale(1.2,1)}}@-o-keyframes shadow{0%,100%{-o-transform:scale(1,1)}50%{-o-transform:scale(1.2,1)}}@-ms-keyframes shadow{0%,100%{-ms-transform:scale(1,1)}50%{-ms-transform:scale(1.2,1)}}@-webkit-keyframes shadow{0%,100%{-webkit-transform:scale(1,1)}50%{-webkit-transform:scale(1.2,1)}}@-moz-keyframes shadow{0%,100%{-moz-transform:scale(1,1)}50%{-moz-transform:scale(1.2,1)}}';
		}
	} elseif ( $preloader['anim'] === '3d3' ) {
		if ( $preloader['anim_size'] === 'normal' ) {
			$css .= '';
		} else {
			$css .= '';
		}
	}

	if ( $preloader['label'] === true && $preloader['fx'] !== 'none' ) {
		$css .= '#page-wrap {
			opacity: 0;
		}';
	}


/* ----------------- Preloader Styling Options ----------------- */

	$css .= '.royal-preloader-wrap {
		background-color: '. royal_hex2rgba( $preloader['bg_color'], $preloader['bg_color_tr']) .';
	}';



/*
***************************************************************
* #Body
***************************************************************
*/

/* ----------------- Body General Options ----------------- */

	if ( $body['layout'] === 'unlimited' ) {
		$body['max_width'] 	= 'none';
		$body['align'] 		= 'none';
	} else {
		$body['max_width'] = $body['max_width'] .'px';
	}

	$css .= '#page-wrap {
		width: 100%;
		max-width: '. $body['max_width'] .';
		float: '. $body['align'] .';
		margin: 0 auto;
	}';

	// wpml fix
	if ( $sidebar['general_position'] === 'left' ) {

		$css .= '#lang_sel_footer {
			margin-left: '. intval($sidebar['width']) .'px;
		}';

	}
	
	$css .= '.top-widgets {
		width: 100%;
		max-width: '. $body['max_width'] .';
		margin: 0 auto;
	}';


/* ----------------- Body Spacing Options ----------------- */

	$css .= royal_slider_4x( 'body', 'padding', array(
		'top' 	 => $body['padding_tp'],
		'right'  => $body['padding_rt'],
		'bottom' => $body['padding_bt'],
		'left' 	 => $body['padding_lt']
	) );

	$css .= '
		@media screen and ( max-width: 950px ) {

			body {
				padding: '. ( $body['padding_tp'] / 20 ) .'% '. ( $body['padding_rt'] / 20 ) .'% '. ( $body['padding_bt'] / 20 ) .'% '. ( $body['padding_lt'] / 20 ) .'%;
			}
			
		}
	';

	$css .= '.top-widgets-bg {
		padding-right: '. $body['padding_rt'] .'px;
		padding-left: '. $body['padding_lt'] .'px;
	}';


/* ----------------- Body Styling Options ----------------- */

	$css .= royal_background_select( 'body', $body['background'], array(
		'color' 				=> $body['bg_color'],
		'gradient_ang' 			=> $body['bg_grad_angle'],
		'gradient_start' 		=> $body['bg_grad_col_1'],
		'gradient_start_tr'		=> $body['bg_grad_col_1_tr'],
		'gradient_start_pos'	=> $body['bg_grad_col_1_ps'],
		'gradient_end' 			=> $body['bg_grad_col_2'],
		'gradient_end_tr'		=> $body['bg_grad_col_2_tr'],
		'gradient_end_pos'		=> $body['bg_grad_col_2_ps'],
		'image'					=> $body['bg_img'],
		'image_size' 			=> $body['bg_img_sz'],
		'image_att' 			=> $body['bg_img_att']
	) );

	$css .= royal_border_4x( '#page-wrap', array(
		'label'			=> $body['border_label'],
		'top_size' 		=> $body['bd_size_tp'],
		'top_style' 	=> $body['bd_style_tp'],
		'top_color' 	=> $body['bd_col_tp'],
		'right_size' 	=> $body['bd_size_rt'],
		'right_style' 	=> $body['bd_style_rt'],
		'right_color' 	=> $body['bd_col_rt'],
		'bottom_size' 	=> $body['bd_size_bt'],
		'bottom_style' 	=> $body['bd_style_bt'],
		'bottom_color' 	=> $body['bd_col_bt'],
		'left_size' 	=> $body['bd_size_lt'],
		'left_style' 	=> $body['bd_style_lt'],
		'left_color' 	=> $body['bd_col_lt']
	) );

	$css .= royal_shadows( '#page-wrap', array(
		'label'			=> $body['shadow_label'],
		'horizontal' 	=> $body['shad_h'],
		'vertical' 		=> $body['shad_v'],
		'blur' 			=> $body['shad_bl'],
		'spread' 		=> $body['shad_sp'],
		'color' 		=> $body['shad_col'],
		'transparency' 	=> $body['shad_col_tr']
	) );



/* ----------------- Content Spacing Options ----------------- */

	$css .= royal_slider_4x( '#main-wrap', 'padding', array(
		'top' 	 => $content['padding_tp'],
		'right'  => $content['padding_rt'],
		'bottom' => $content['padding_bt'],
		'left' 	 => $content['padding_lt']
	) );

	$css .= '
		@media screen and ( max-width: 950px ) {

			#main-wrap {
				padding: '. ( $content['padding_tp'] / 6 ) .'% '. ( $content['padding_rt'] / 6 ) .'% '. ( $content['padding_bt'] / 6 ) .'% '. ( $content['padding_lt'] / 6 ) .'%;
			}
			
		}
	';

	$css .= '.body-section {
		margin-bottom: '. $content['section_space'] .'px;
	}';

	$css .= '
		@media screen and ( max-width: 1050px ) {

			.project-info {
				margin-bottom: '. $content['section_space'] .'px;
			}

		}
	';

	$css .= '
		@media screen and ( max-width: 950px ) {

			.body-section {
				margin-bottom: '. ( $content['section_space'] / 6 ) .'%;
			}

			.project-info {
				margin-bottom: '. ( $content['section_space'] / 6 ) .'%;
			}

		}
	';


/* ----------------- Content Styling Options ----------------- */

	$css .= royal_background_select( '#main-wrap', $content['background'], array(
		'color' 				=> $content['bg_color'],
		'color_tr' 				=> $content['bg_color_tr'],
		'gradient_ang' 			=> $content['bg_grad_angle'],
		'gradient_start' 		=> $content['bg_grad_col_1'],
		'gradient_start_tr'		=> $content['bg_grad_col_1_tr'],
		'gradient_start_pos'	=> $content['bg_grad_col_1_ps'],
		'gradient_end' 			=> $content['bg_grad_col_2'],
		'gradient_end_tr'		=> $content['bg_grad_col_2_tr'],
		'gradient_end_pos'		=> $content['bg_grad_col_2_ps'],
		'image'					=> $content['bg_img'],
		'image_size' 			=> $content['bg_img_sz'],
		'image_att' 			=> $content['bg_img_att']
	) );



/* ----------------- Inner Content General Options ----------------- */

	$css .= '.inner-content-wrap {
		max-width: '. $inner_content['max_width'] .'px;
	}';


/* ----------------- Inner Content Spacing Options ----------------- */


	$css .= royal_slider_4x( '.inner-content', 'padding', array(
		'top' 	 => $inner_content['padding_tp'],
		'right'  => $inner_content['padding_rt'],
		'bottom' => $inner_content['padding_bt'],
		'left' 	 => $inner_content['padding_lt']
	) );

	$css .= '
		@media screen and ( max-width: 950px ) {

			.inner-content {
				padding: '. ( $inner_content['padding_tp'] / 6 ) .'% '. ( $inner_content['padding_rt'] / 6 ) .'% '. ( $inner_content['padding_bt'] / 6 ) .'% '. ( $inner_content['padding_lt'] / 6 ) .'%;
			}
			
		}
	';

	$css .= '.stacked-caption {
		padding: 0 '. $inner_content['padding_lt'] .'px;
	}';


/* ----------------- Inner Content Styling Options ----------------- */

	$css .= '.inner-content {
		background-color: '. royal_hex2rgba( $inner_content['bg_color'], $inner_content['bg_color_tr']) .';
		color: '. $inner_content['text_color'] .';
	}';

	$css .= '.gallery-slideshow {
		background-color: '. royal_hex2rgba( $inner_content['bg_color'], $inner_content['bg_color_tr']) .';
	}';

	$css .= '.gallery-slideshow .stacked-caption {
		color: '. $inner_content['text_color'] .';
	}';

	$css .= '
		.inner-content h1,
		.inner-content h2,
		.inner-content h3,
		.inner-content h4,
		.inner-content h5,
		.inner-content h6 {
			color: '. $inner_content['head_color'] .';
		}
	';

	$css .= '.inner-content a {
		color: '. $inner_content['link_color'] .';
	}';

	$css .= '
		.single-meta,
		.single-meta a,
		.single-tags,
		.single-tags a {
			color: '. $inner_content['meta_color'] .';
		}
	';

	$css .= '
		.inner-content a:hover,
		.post-cont-pagination > span:not(.pagi-label) {
			color: '. $inner_content['link_hcolor'] .';
		}
	';

	$css .= '.inner-content blockquote {
		border-color: '. $inner_content['link_color'] .';
	}';

	$css .= '
		.wpb_tabs_nav .ui-tabs-anchor,
		.wpb_accordion_header a {
			color: '. $inner_content['head_color'] .';
		}
	';

	$css .= '
		.inner-content hr,
		.inner-content th,
		.inner-content h3,
		.inner-content h3 span,
		.inner-content tr,
		.inner-content td,
		.inner-content pre,
		.inner-content .wp-caption-text,
		.inner-content .wp-playlist,
		.gallery-caption,
		.search-result-thumbnail p,
		.comments-area,
		.single-post-sharing,
		.project-details li,
		.contact-info li span {
			border-color: '. $inner_content['border_color'] .';
		}
	';

	$css .= royal_radius( '.inner-content, .single-wrap', array(
		'label'		=> $inner_content['radius_label'],
		'radius'	=> $inner_content['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.inner-content, .single-wrap', array(
		'label'			=> $inner_content['shadow_label'],
		'horizontal' 	=> $inner_content['shad_h'],
		'vertical' 		=> $inner_content['shad_v'],
		'blur' 			=> $inner_content['shad_bl'],
		'spread' 		=> $inner_content['shad_sp'],
		'color' 		=> $inner_content['shad_col'],
		'transparency' 	=> $inner_content['shad_col_tr'],
		'inset'			=> $inner_content['shad_in']
	) );


/* ----------------- Inner Content Font Options ----------------- */

	if ( $inner_content['underline'] === true )  {
		$inner_content['underline'] = 'underline';
	} else {
		$inner_content['underline'] = 'none';
	}

	$css .= '.inner-content a {
		text-decoration: '. $inner_content['underline'] .';
	}';



/*
***************************************************************
* #Sidebar
***************************************************************
*/

/* ----------------- Spacing Options ----------------- */

	if ( $sidebar['general_position'] === 'left' ) {
		$css .= '
			#sidebar,
			.copy-fixed .copy-and-soc {
				width: '. $sidebar['width'] .'px;
			}
		';

		$css .= '
			#main-wrap,
			.royal-revslider,
			.copy-and-soc {
				margin-left: '. $sidebar['width'] .'px;
			}
		';
	}


	$css .= royal_slider_4x( '.inner-sidebar', 'padding', array(
		'top' 	 => $sidebar['padding_tp'],
		'right'  => $sidebar['padding_rt'],
		'bottom' => $sidebar['padding_bt'],
		'left' 	 => $sidebar['padding_lt']
	) );

	$css .= '.sid-block {
		margin-bottom: '. $sidebar['section_marg'] .'px;
	}';
	

/* ----------------- Styling Options ----------------- */

	if ( $sidebar['general_position'] === 'left' ) {

		$css .= royal_background_select( '#sidebar, .m-nav-and-logo', $sidebar['background'], array(
			'color' 				=> $sidebar['bg_color'],
			'color_tr' 				=> $sidebar['bg_color_tr'],
			'gradient_ang' 			=> $sidebar['bg_grad_angle'],
			'gradient_start' 		=> $sidebar['bg_grad_col_1'],
			'gradient_start_tr'		=> $sidebar['bg_grad_col_1_tr'],
			'gradient_start_pos'	=> $sidebar['bg_grad_col_1_ps'],
			'gradient_end' 			=> $sidebar['bg_grad_col_2'],
			'gradient_end_tr'		=> $sidebar['bg_grad_col_2_tr'],
			'gradient_end_pos'		=> $sidebar['bg_grad_col_2_ps'],
			'image'					=> $sidebar['bg_img'],
			'image_size' 			=> $sidebar['bg_img_sz'],
			'image_att' 			=> $sidebar['bg_img_att']
		) );

	} else {

		$css .= '
			#sidebar-top,
			.m-nav-and-logo {
				background-color: '. royal_hex2rgba( $sidebar_top['bg_color'], $sidebar_top['bg_color_tr'] ) .';
			}
		';

	}

	$css .= '
		@media screen and ( max-width: 950px ) {
			.m-nav-and-logo {
				margin-bottom: '. ( $sidebar_top['margin_bt'] / 6 ) .'%;
			}
		}
	';

	$css .= royal_border_4x( '#sidebar', array(
		'label'			=> $sidebar['border_label'],
		'top_size' 		=> $sidebar['bd_size_tp'],
		'top_style' 	=> $sidebar['bd_style_tp'],
		'top_color' 	=> $sidebar['bd_col_tp'],
		'right_size' 	=> $sidebar['bd_size_rt'],
		'right_style' 	=> $sidebar['bd_style_rt'],
		'right_color' 	=> $sidebar['bd_col_rt'],
		'bottom_size' 	=> $sidebar['bd_size_bt'],
		'bottom_style' 	=> $sidebar['bd_style_bt'],
		'bottom_color' 	=> $sidebar['bd_col_bt'],
		'left_size' 	=> $sidebar['bd_size_lt'],
		'left_style' 	=> $sidebar['bd_style_lt'],
		'left_color' 	=> $sidebar['bd_col_lt']
	) );

	$css .= royal_shadows( '#sidebar', array(
		'label'			=> $sidebar['shadow_label'],
		'horizontal' 	=> $sidebar['shad_h'],
		'vertical' 		=> $sidebar['shad_v'],
		'blur' 			=> $sidebar['shad_bl'],
		'spread' 		=> $sidebar['shad_sp'],
		'color' 		=> $sidebar['shad_col'],
		'transparency' 	=> $sidebar['shad_col_tr'],
		'inset'			=> $sidebar['shad_in']
	) );



/* ----------------- Fold Button General Options ----------------- */

	if ( $sidebar_fold_btn['label'] === false ) {
		$css .= '.sidebar-fold-btn {
			display: none;
		}';
	}


/* ----------------- Fold Button Spacing Options ----------------- */

	$css .= '.sidebar-fold-btn .fa {
		width: '. $sidebar_fold_btn['width'] .'px;
		height: '. $sidebar_fold_btn['height'] .'px;
		line-height: '. $sidebar_fold_btn['height'] .'px;
	}';

	$css .= '.sidebar-fold-btn {
		position: '. $sidebar_fold_btn['position'] .';
		margin-top: '. $sidebar_fold_btn['pos_tp'] .'px;
		margin-left: '. $sidebar_fold_btn['pos_lt'] .'px;
	}';

	$css .= '.sidebar-closed .sidebar-fold-btn {
		margin-left: '. $sidebar_fold_btn['fpos_lt'] .'px;
	}';


/* ----------------- Fold Button Styling Options ----------------- */

	$css .= '.sidebar-fold-btn .fa {
		background-color: '. royal_hex2rgba( $sidebar_fold_btn['color'], $sidebar_fold_btn['col_tr'] ) .';
		color: '. $sidebar_fold_btn['txt_col'] .';
	}';

	$css .= '.sidebar-fold-btn .fa:hover {
		background-color: '. royal_hex2rgba( $sidebar_fold_btn['hcol'], $sidebar_fold_btn['hcol_tr'] ) .';
		color: '. $sidebar_fold_btn['txt_hcol'] .';
	}';

	$css .= royal_shadows( '.sidebar-fold-btn .fa', array(
		'label'			=> $sidebar_fold_btn['shadow_label'],
		'horizontal' 	=> $sidebar_fold_btn['shad_h'],
		'vertical' 		=> $sidebar_fold_btn['shad_v'],
		'blur' 			=> $sidebar_fold_btn['shad_bl'],
		'spread' 		=> $sidebar_fold_btn['shad_sp'],
		'color' 		=> $sidebar_fold_btn['shad_col'],
		'transparency' 	=> $sidebar_fold_btn['shad_col_tr'],
		'inset'			=> $sidebar_fold_btn['shad_in']
	) );

	$css .= royal_radius( '.sidebar-fold-btn .fa', array(
		'label'		=> $sidebar_fold_btn['radius_label'],
		'radius'	=> $sidebar_fold_btn['radius']
	) );


/* ----------------- Fold Button Font Options ----------------- */

	$css .= '.sidebar-fold-btn .fa {
		font-size: '. $sidebar_fold_btn['txt_sz'] .'px;
	}';



/* ----------------- Scrollbar General Options ----------------- */

	if ( $sidebar_scroll['label'] === false ) {
		$css .= '.ps-scrollbar-y-rail {
			visibility: hidden;
		}';
	}


/* ----------------- Scrollbar Spacing Options ----------------- */

	$css .= '
		.ps-scrollbar-y-rail,
		.ps-scrollbar-y {
			width: '. $sidebar_scroll['width'] .'px;
		}
	';


/* ----------------- Scrollbar Styling Options ----------------- */

	$css .= '.ps-scrollbar-y {
		background-color: '. royal_hex2rgba( $sidebar_scroll['color'], $sidebar_scroll['col_tr'] ) .';
	}';

	$css .= '
		.ps-scrollbar-y-rail:hover .ps-scrollbar-y,
		.ps-scrollbar-y-rail.hover .ps-scrollbar-y {
			background-color: '. $sidebar_scroll['hcol'] .';
		}
	';

	$css .= royal_radius( '.ps-scrollbar-y', array(
		'label'		=> $sidebar_scroll['radius_label'],
		'radius'	=> $sidebar_scroll['radius'],
		'ext'		=> true
	) );



/*
***************************************************************
* #Sidebar Top
***************************************************************
*/

/* ----------------- General Options ----------------- */

	if ( $sidebar_top['arrange'] === 'horizontal_1' ) {
		$css .= '.sidebar-top .logo-and-tagline {
			float: left;
		}';

		$css .= '.sidebar-top .top-nav-wrap {
			float: right;
		}';
	} elseif ( $sidebar_top['arrange'] === 'horizontal_2' ) {
		$css .= '.sidebar-top .logo-and-tagline {
			float: right;
		}';

		$css .= '.sidebar-top .top-nav-wrap {
			float: left;
		}';
	} elseif ( $sidebar_top['arrange'] === 'vertical_2' ) {
		$css .= '.sidebar-top .top-nav, .sidebar-top .logo-and-tagline {
			float: left;
		}';

		$css .= '#sidebar-top  {
			text-align: center;
		}';

		$css .= '#sidebar-top > div {
			display: inline-block;
		}';
	}

	$css .= '.sidebar-top-fixed #sidebar-top {
		width: 100%;
		max-width: '. $body['max_width'] .';
	}';


/* ----------------- Spacing Options ----------------- */

	$css .= royal_slider_4x( '#sidebar-top > div', 'padding', array(
		'top' 	 => $sidebar_top['padding_tp'],
		'right'  => $sidebar_top['padding_rt'],
		'bottom' => $sidebar_top['padding_bt'],
		'left' 	 => $sidebar_top['padding_lt']
	) );

	$css .= '#sidebar-top {
		margin-bottom: '. $sidebar_top['margin_bt'] .'px;
	}';

	$css .= '.sidebar-top-fixed #main-wrap {
		margin-top: '. $sidebar_top['alt_height'] .'px;
	}';


/* ----------------- Styling Options ----------------- */

	$css .= '#sidebar-top {
		background-color: '. royal_hex2rgba( $sidebar_top['bg_color'], $sidebar_top['bg_color_tr'] ) .';
	}';

	if ( $sidebar_top['scale_border_label'] === true ) {
		$css .= royal_border_1x( '#sidebar-top.std-scaled', 'bottom', array(
			'label'	=> $sidebar_top['border_label'],
			'size' 	=> $sidebar_top['bd_size_bt'],
			'style' => $sidebar_top['bd_style_bt'],
			'color' => $sidebar_top['bd_col_bt']
		) );
	} else {
		$css .= royal_border_1x( '#sidebar-top', 'bottom', array(
			'label'	=> $sidebar_top['border_label'],
			'size' 	=> $sidebar_top['bd_size_bt'],
			'style' => $sidebar_top['bd_style_bt'],
			'color' => $sidebar_top['bd_col_bt']
		) );		
	}

	if ( $sidebar_top['scale_shadow_label'] === true ) {
		$css .= royal_shadows( '#sidebar-top.std-scaled', array(
			'label'			=> $sidebar_top['shadow_label'],
			'horizontal' 	=> $sidebar_top['shad_h'],
			'vertical' 		=> $sidebar_top['shad_v'],
			'blur' 			=> $sidebar_top['shad_bl'],
			'spread' 		=> $sidebar_top['shad_sp'],
			'color' 		=> $sidebar_top['shad_col'],
			'transparency' 	=> $sidebar_top['shad_col_tr']
		) );
	} else {
		$css .= royal_shadows( '#sidebar-top', array(
			'label'			=> $sidebar_top['shadow_label'],
			'horizontal' 	=> $sidebar_top['shad_h'],
			'vertical' 		=> $sidebar_top['shad_v'],
			'blur' 			=> $sidebar_top['shad_bl'],
			'spread' 		=> $sidebar_top['shad_sp'],
			'color' 		=> $sidebar_top['shad_col'],
			'transparency' 	=> $sidebar_top['shad_col_tr']
		) );	
	}



/*
***************************************************************
* #Logo
***************************************************************
*/

/* ----------------- General Options ----------------- */

	$css .= '.logo-and-tagline {
		text-align: '. $logo['align'] .';
	}';


/* ----------------- Spacing Options ----------------- */

	$css .= '.logo-wrap {
		max-width: '. $logo['width'] .'px;
	}';

	$css .= royal_slider_4x( '.logo-and-tagline', 'padding', array(
		'top' 	 => $logo['padding_tp'],
		'right'  => $logo['padding_rt'],
		'bottom' => $logo['padding_bt'],
		'left' 	 => $logo['padding_lt']
	) );


/* ----------------- Styling Options ----------------- */ 

	$css .= '.logo-wrap {
		background-color: '. royal_hex2rgba( $logo['bg_col'], $logo['bg_col_tr'] ) .';
		color: '. $logo['txt_col'] .';
	}';

	$css .= '.logo-wrap:hover {
		color: '. $logo['txt_hcol'] .';
	}';

	$css .= royal_border_4x( '.logo-wrap', array(
		'label'			=> $logo['border_label'],
		'top_size' 		=> $logo['bd_size_tp'],
		'top_style' 	=> $logo['bd_style_tp'],
		'top_color' 	=> $logo['bd_col_tp'],
		'right_size' 	=> $logo['bd_size_rt'],
		'right_style' 	=> $logo['bd_style_rt'],
		'right_color' 	=> $logo['bd_col_rt'],
		'bottom_size' 	=> $logo['bd_size_bt'],
		'bottom_style' 	=> $logo['bd_style_bt'],
		'bottom_color' 	=> $logo['bd_col_bt'],
		'left_size' 	=> $logo['bd_size_lt'],
		'left_style' 	=> $logo['bd_style_lt'],
		'left_color' 	=> $logo['bd_col_lt']
	) );


	$css .= royal_radius( '.logo-wrap', array(
		'label'		=> $logo['radius_label'],
		'radius'	=> $logo['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.logo-wrap', array(
		'label'			=> $logo['shadow_label'],
		'horizontal' 	=> $logo['shad_h'],
		'vertical' 		=> $logo['shad_v'],
		'blur' 			=> $logo['shad_bl'],
		'spread' 		=> $logo['shad_sp'],
		'color' 		=> $logo['shad_col'],
		'transparency' 	=> $logo['shad_col_tr'],
		'inset'			=> $logo['shad_in']
	) );


/* ----------------- Font Options ----------------- */ 

	$css .= royal_fonts( '.logo-text, .top-nav-search-form #s, .top-nav-search-form i', array(
		'font_family'		=> $logo['font_family'],
		'font_size' 		=> $logo['font_size'],
		'line_height' 		=> $logo['line_height'],
		'letter_spacing' 	=> $logo['letter_space'],
		'font_weight' 		=> $logo['font_weight'],
		'font_style' 		=> $logo['italic'],
		'text_transform' 	=> $logo['uppercase'],
		'text_decoration' 	=> $logo['line_through']
	) );

	if ( $logo['underline'] === true )  {
		$logo['underline'] = 'underline';
	} else {
		$logo['underline'] = 'none';
	}

	$css .= '.logo-text, .top-nav-search-form #s {
		text-decoration: '. $logo['underline'] .';
	}';

	$css .= royal_text_shadows( '.logo-text, .top-nav-search-form #s', array(
		'label'			=> $logo['txt_shadow_label'],
		'horizontal'	=> $logo['txt_shad_h'],
		'vertical' 		=> $logo['txt_shad_v'],
		'blur' 			=> $logo['txt_shad_bl'],
		'color' 		=> $logo['txt_shad_col']
	) );



/*
***************************************************************
* #Tagline
***************************************************************
*/

/* ----------------- General Options ----------------- */

	if ( $tagline['label'] === false ) {
		$css .= '.site-tagline {
			display: none;
		}';		
	}

	$css .= '.site-tagline {
		text-align: '. $tagline['align'] .';
	}';


/* ----------------- Spacing Options ----------------- */

	$css .= '.site-tagline {
		margin-top: '. $tagline['margin_tp'] .'px;
	}';


/* ----------------- Styling Options ----------------- */

	$css .= '.site-tagline {
		color: '. $tagline['color'] .';
	}';


/* ----------------- Font Options ----------------- */ 

	$css .= royal_fonts( '.site-tagline', array(
		'font_family'		=> $tagline['font_family'],
		'font_size' 		=> $tagline['font_size'],
		'line_height' 		=> $tagline['line_height'],
		'letter_spacing' 	=> $tagline['letter_space'],
		'font_weight' 		=> $tagline['font_weight'],
		'font_style' 		=> $tagline['italic'],
		'text_transform' 	=> $tagline['uppercase'],
		'text_decoration' 	=> $tagline['line_through']
	) );

	if ( $tagline['underline'] === true )  {
		$tagline['underline'] = 'underline';
	} else {
		$tagline['underline'] = 'none';
	}

	$css .= '.site-tagline {
		text-decoration: '. $tagline['underline'] .';
	}';

	$css .= royal_text_shadows( '.site-tagline', array(
		'label'			=> $tagline['txt_shadow_label'],
		'horizontal'	=> $tagline['txt_shad_h'],
		'vertical' 		=> $tagline['txt_shad_v'],
		'blur' 			=> $tagline['txt_shad_bl'],
		'color' 		=> $tagline['txt_shad_col']
	) );



/*
***************************************************************
* #Menu
***************************************************************
*/

/* ----------------- Title General Options ----------------- */

	if ( $menu_title['label'] === false ) {
		$css .= '.menu-title {
			display: none;
		}';		
	}

	$css .= '.menu-title {
		text-align: '. $menu_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.menu-title span {
		padding-bottom: '. $menu_title['padding_bt'] .'px;
		margin-bottom: '. $menu_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= '.menu-title {
		color: '. $menu_title['color'] .';
	}';

	$css .= royal_border_1x( '.menu-title span', 'bottom', array(
		'label'	=> $menu_title['border_label'],
		'size' 	=> $menu_title['bd_size_bt'],
		'style' => $menu_title['bd_style_bt'],
		'color' => $menu_title['bd_col_bt']
	) );

	if ( $menu_title['bd_full_width'] === false ) {
		$css .= '.menu-title span {
			display: inline-block;
		}';
	} else {
		$css .= '.menu-title span {
			display: block;
		}';
	}


/* ----------------- Title Font Options ----------------- */

	$css .= royal_fonts( '.menu-title', array(
		'font_family'		=> $menu_title['font_family'],
		'font_size' 		=> $menu_title['font_size'],
		'line_height' 		=> $menu_title['line_height'],
		'letter_spacing' 	=> $menu_title['letter_space'],
		'font_weight' 		=> $menu_title['font_weight'],
		'font_style' 		=> $menu_title['italic'],
		'text_transform' 	=> $menu_title['uppercase']
	) );



/* ----------------- Fold Icon General Options ----------------- */

	$css .= '.top-nav-wrap {
		text-align: '. $menu_fold['align'] .';
	}';


/* ----------------- Fold Icon Spacing Options ----------------- */

	$css .= '.menu-fold-icon .fa {
		width: '. $menu_fold['width'] .'px;
		height: '. $menu_fold['height'] .'px;
		line-height: '. $menu_fold['height'] .'px;
		margin-top: '. $menu_fold['margin_tp'] .'px;
	}';



/* ----------------- Fold Icon Styling Options ----------------- */

	$css .= '.menu-fold-icon .fa {
		background-color: '. $menu_fold['color'] .';
		color: '. $menu_fold['txt_color'] .';
	}';

	$css .= '.menu-fold-icon .fa:hover {
		background-color: '. $menu_fold['hover_color'] .';
		color: '. $menu_fold['hover_txt_color'] .';
	}';

	$css .= royal_shadows( '.menu-fold-icon .fa', array(
		'label'			=> $menu_fold['shadow_label'],
		'horizontal' 	=> $menu_fold['shad_h'],
		'vertical' 		=> $menu_fold['shad_v'],
		'blur' 			=> $menu_fold['shad_bl'],
		'spread' 		=> $menu_fold['shad_sp'],
		'color' 		=> $menu_fold['shad_col'],
		'transparency' 	=> $menu_fold['shad_col_tr'],
		'inset'			=> $menu_fold['shad_in']
	) );

	$css .= royal_radius( '.menu-fold-icon .fa', array(
		'label'		=> $menu_fold['radius_label'],
		'radius'	=> $menu_fold['radius']
	) );


/* ----------------- Fold Icon Font Options ----------------- */

	$css .= '.menu-fold-icon .fa {
		font-size: '. $menu_fold['txt_sz'] .'px;
	}';



/* ----------------- Fold Wrap General Options ----------------- */

	if ( $menu_fold_wrap['pupup_fx'] !== 'tn-fade' ) {
		$css .= '.top-nav-container {
			-webkit-transition: all '. $menu_fold_wrap['pupup_fx_trans'] .'ms ease-in-out;
			transition: all '. $menu_fold_wrap['pupup_fx_trans'] .'ms ease-in-out;
		}';		
	}


/* ----------------- Fold Wrap Spacing Options ----------------- */

	$css .= '.admin-bar .top-nav-container {
		padding-top: '. ($menu_fold_wrap['margin_tp'] + 32) .'px;
	}';

	
	$css .= royal_slider_4x( '.top-nav-container', 'padding', array(
		'top' 	 => $menu_fold_wrap['margin_tp'],
		'right'  => $menu_fold_wrap['margin_rt'],
		'bottom' => $menu_fold_wrap['margin_bt'],
		'left' 	 => $menu_fold_wrap['margin_lt']
	) );


/* ----------------- Fold Wrap Styling Options ----------------- */
	
	$css .= '.top-nav-close {
		color: '. $menu_items['txt_col'] .';
	}';

	$css .= '.top-nav-close:hover {
		border: 1px solid '. $menu_items['txt_col'] .';
	}';

	$css .= '.top-nav-outer {
		background-color: '. royal_hex2rgba( $menu_fold_wrap['color'], $menu_fold_wrap['color_tr'] ) .';
	}';

	$css .= royal_shadows( '.top-nav-outer', array(
		'label'			=> $menu_fold_wrap['shadow_label'],
		'horizontal' 	=> $menu_fold_wrap['shad_h'],
		'vertical' 		=> $menu_fold_wrap['shad_v'],
		'blur' 			=> $menu_fold_wrap['shad_bl'],
		'spread' 		=> $menu_fold_wrap['shad_sp'],
		'color' 		=> $menu_fold_wrap['shad_col'],
		'transparency' 	=> $menu_fold_wrap['shad_col_tr'],
		'inset'			=> $menu_fold_wrap['shad_in']
	) );



/* ----------------- Items General Options ----------------- */

	if ( $menu_items['label'] === false ) {
		$css .= '
			.main-nav,
			.top-nav {
				display: none;
			}
		';		
	}

	$css .= '
		.main-nav li,
		.top-nav > li {
			text-align: '. $menu_items['align'] .';
		}
	';

	$css .= '
		.main-nav li a,
		.top-nav > li > a {
			display: '. $menu_items['width'] .';
		}
	';

	if ( $sidebar['general_position'] ) {
		$css .= '.top-nav {
			text-align: '. $menu_items['top_align'] .';
		}';
	}

	if ( $menu_items['list_style'] !== 'none' ) {
		$css .= '.top-nav > li > a:after {
			content: " ";
			display: block;
			position: absolute;
			top: 50%;
			background-color: '. $menu_items['txt_col'] .';
		}';
	}	

	if ( $menu_items['list_style'] === 'dot' ) {
		$css .= '.top-nav > li > a:after {
			right: -1px;
			margin-top: -1px;
			width: 2px;
			height: 2px;
		}';
	} elseif ( $menu_items['list_style'] === 'square' ) {
		$css .= '.top-nav > li > a:after {
			right: -2px;
			margin-top: -2px;
			width: 4px;
			height: 4px;
		}';
	} elseif ( $menu_items['list_style'] === 'romb' ) {
		$css .= '.top-nav > li > a:after {
			right: -2px;
			margin-top: -2px;
			width: 4px;
			height: 4px;
			transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
		}';
	} elseif ( $menu_items['list_style'] === 'circle' ) {
		$css .= '.top-nav > li > a:after {
			right: -2px;
			margin-top: -2px;
			width: 4px;
			height: 4px;
			border-radius: 50%;
			-webkit-border-radius: 50%;
		}';
	}


/* ----------------- Items Spacing Options ----------------- */

	$css .= royal_slider_4x( '.main-nav li a, .top-nav > li > a, .top-nav-vertical li a', 'padding', array(
		'top' 	 => $menu_items['padding_tp'],
		'right'  => $menu_items['padding_rt'],
		'bottom' => $menu_items['padding_bt'],
		'left' 	 => $menu_items['padding_lt']
	) );

	$css .= royal_slider_4x( '.main-nav li, .top-nav > li, .top-nav-vertical li', 'padding', array(
		'top' 	 => $menu_items['margin_tp'],
		'right'  => $menu_items['margin_rt'],
		'bottom' => $menu_items['margin_bt'],
		'left' 	 => $menu_items['margin_lt']
	) );


/* ----------------- Items Styling Options ----------------- */

	$css .= '
		.main-nav li a,
		.top-nav > li > a,
		.top-nav-vertical li a,
		.mobile-nav li a {
			background-color: '. royal_hex2rgba( $menu_items['bg_col'], $menu_items['bg_col_tr'] ) .';
			color: '. $menu_items['txt_col'] .';
		}
	';

	$css .= '.mobile-nav li a {
		color: '. $menu_items['mob_txt_col'] .';
	}';

	$css .= '.main-nav .sub-menu li a {
		background-color: '. royal_hex2rgba( $menu_items['sub_bg_col'], $menu_items['bg_col_tr'] ) .';
	}';

	if ( $menu_items['active_highlight'] === true ) {
		$menu_items['active_highlight'] = ',
			.main-nav li.current-menu-item > a,
			.main-nav li.current-menu-parent > a,
			.top-nav-vertical li.current-menu-item a,
			.top-nav > li.current-menu-item > a,
			.top-nav > li.current-menu-parent > a,
			.top-nav > li.current-menu-ancestor > a
		';
	}

	$css .= '
		.main-nav li a:hover,
		.top-nav > li > a:hover,
		.top-nav-vertical li a:hover,
		.mobile-nav li a:hover '. $menu_items['active_highlight'] .' {
			background-color: '. royal_hex2rgba( $menu_items['bg_hcol'], $menu_items['bg_hcol_tr'] ) .';
			color: '. $menu_items['txt_hcol'] .';
			border-color: '. $menu_items['bd_hcol'] .';
		}
	';

	$css .= '
		.mobile-nav li a:hover,
		.mobile-nav li.current-menu-item > a {
			color: '. $menu_items['mob_txt_hcol'] .';
		}
	';

	$css .= royal_border_4x( '.main-nav li a, .top-nav > li > a, .top-nav-vertical li a', array(
		'label'			=> $menu_items['border_label'],
		'top_size' 		=> $menu_items['bd_size_tp'],
		'top_style' 	=> $menu_items['bd_style_tp'],
		'top_color' 	=> $menu_items['bd_col_tp'],
		'right_size' 	=> $menu_items['bd_size_rt'],
		'right_style' 	=> $menu_items['bd_style_rt'],
		'right_color' 	=> $menu_items['bd_col_rt'],
		'bottom_size' 	=> $menu_items['bd_size_bt'],
		'bottom_style' 	=> $menu_items['bd_style_bt'],
		'bottom_color' 	=> $menu_items['bd_col_bt'],
		'left_size' 	=> $menu_items['bd_size_lt'],
		'left_style' 	=> $menu_items['bd_style_lt'],
		'left_color' 	=> $menu_items['bd_col_lt']
	) );


	$css .= royal_radius( '.main-nav li a, .top-nav > li > a, .top-nav-vertical li a', array(
		'label'		=> $menu_items['radius_label'],
		'radius'	=> $menu_items['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.main-nav li a, .top-nav > li > a, .top-nav-vertical li a', array(
		'label'			=> $menu_items['shadow_label'],
		'horizontal' 	=> $menu_items['shad_h'],
		'vertical' 		=> $menu_items['shad_v'],
		'blur' 			=> $menu_items['shad_bl'],
		'spread' 		=> $menu_items['shad_sp'],
		'color' 		=> $menu_items['shad_col'],
		'transparency' 	=> $menu_items['shad_col_tr'],
		'inset'			=> $menu_items['shad_in']
	) );


/* ----------------- Items Font Options ----------------- */

	$css .= royal_fonts( '.main-nav li a, .top-nav li a', array(
		'font_family'		=> $menu_items['font_family'],
		'font_size' 		=> $menu_items['font_size'],
		'line_height' 		=> $menu_items['line_height'],
		'letter_spacing' 	=> $menu_items['letter_space'],
		'font_weight' 		=> $menu_items['font_weight'],
		'font_style' 		=> $menu_items['italic'],
		'text_transform' 	=> $menu_items['uppercase']
	) );

	$css .= '
		.main-nav .sub-menu li a,
		.top-nav .sub-menu li a {
			font-size: '. ( $menu_items['font_size'] - 1 ) .'px;
		}
	';

	$css .= '.top-nav-vertical .sub-menu li a {
		font-size: '. ( $menu_items['font_size'] - 3 ) .'px;
	}';

	$css .= '.mobile-nav li a {
		font-family: "'. str_replace( '+', ' ', $menu_items['font_family'] ) .'", Arial, "Helvetica Neue", Helvetica, sans-serif;
	}';




/* ----------------- Sub Items Spacing Options ----------------- */

	$css .= '.top-nav.top-nav-horizontal .sub-menu-wrap {
		width: '. $menu_sub['width'] .'px;
	}';

	$css .= '.top-nav.top-nav-horizontal .sub-menu .sub-menu-wrap {
		left: '. $menu_sub['width'] .'px;
	}';

	$css .= royal_slider_4x( '.top-nav.top-nav-horizontal .sub-menu li a', 'padding', array(
		'top' 	 => $menu_sub['padding_tp'],
		'right'  => $menu_sub['padding_rt'],
		'bottom' => $menu_sub['padding_bt'],
		'left' 	 => $menu_sub['padding_lt']
	) );

	$css .= '.top-nav.top-nav-horizontal > li > .sub-menu-wrap {
		padding-top: '. $menu_sub['top_space'] .'px;
	}';


/* ----------------- Sub Items Styling Options ----------------- */

	$css .= '.top-nav.top-nav-horizontal .sub-menu li a {
		background-color: '. $menu_sub['bg_col'] .';
		color: '. $menu_sub['txt_col'] .';
	}';

	$css .= '
		.top-nav.top-nav-horizontal .sub-menu li a:hover,
		.top-nav.top-nav-horizontal .sub-menu li.current-menu-item > a,
		.top-nav.top-nav-horizontal .sub-menu li.current-menu-parent > a,
		.top-nav.top-nav-horizontal .sub-menu li.current-menu-ancestor > a {
			background-color: '. $menu_sub['bg_hcol'] .';
			color: '. $menu_sub['txt_hcol'] .';
		}
	';

	$css .= royal_border_1x( '.top-nav.top-nav-horizontal .sub-menu li a', 'bottom', array(
		'label'	=> $menu_sub['border_label'],
		'size' 	=> $menu_sub['bd_size_bt'],
		'style' => $menu_sub['bd_style_bt'],
		'color' => $menu_sub['bd_col_bt']
	) );

	$css .= royal_border_1x( '.top-nav.top-nav-horizontal .sub-menu', 'top', array(
		'label'	=> $menu_sub['wrap_border_label'],
		'size' 	=> $menu_sub['bd_size_tp'],
		'style' => $menu_sub['bd_style_tp'],
		'color' => $menu_sub['bd_col_tp']
	) );

	$css .= royal_shadows( '.top-nav.top-nav-horizontal .sub-menu', array(
		'label'			=> $menu_sub['shadow_label'],
		'horizontal' 	=> $menu_sub['shad_h'],
		'vertical' 		=> $menu_sub['shad_v'],
		'blur' 			=> $menu_sub['shad_bl'],
		'spread' 		=> $menu_sub['shad_sp'],
		'color' 		=> $menu_sub['shad_col'],
		'transparency' 	=> $menu_sub['shad_col_tr']
	) );



/* ----------------- Mobile Icon Styling Options ----------------- */

	$css .= '.m-nav-fold i {
		background-color: '. royal_hex2rgba( $menu_mobile['bg_color'], $menu_mobile['bg_color_tr'] ) .';
		color: '. $menu_mobile['text_color'] .';
	}';


/* ----------------- Mobile Icon Font Options ----------------- */

	$css .= '.m-nav-fold i {
		font-size: '. $menu_mobile['icon_size'] .'px;
		line-height: '. $menu_mobile['line_height'] .'px;
	}';




/*
***************************************************************
* #Filters
***************************************************************
*/

/* ----------------- Title General Options ----------------- */

	if ( $filters_title['label'] === false ) {
		$css .= '.filters-title {
			display: none;
		}';		
	}

	$css .= '.filters-title {
		text-align: '. $filters_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.filters-title span {
		padding-bottom: '. $filters_title['padding_bt'] .'px;
		margin-bottom: '. $filters_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= '.filters-title {
		color: '. $filters_title['color'] .';
	}';

	$css .= royal_border_1x( '.filters-title span', 'bottom', array(
		'label'	=> $filters_title['border_label'],
		'size' 	=> $filters_title['bd_size_bt'],
		'style' => $filters_title['bd_style_bt'],
		'color' => $filters_title['bd_col_bt']
	) );

	if ( $filters_title['bd_full_width'] === false ) {
		$css .= '.filters-title span {
			display: inline-block;
		}';
	} else {
		$css .= '.filters-title span {
			display: block;
		}';
	}


/* ----------------- Title Font Options ----------------- */

	$css .= royal_fonts( '.filters-title', array(
		'font_family'		=> $filters_title['font_family'],
		'font_size' 		=> $filters_title['font_size'],
		'line_height' 		=> $filters_title['line_height'],
		'letter_spacing' 	=> $filters_title['letter_space'],
		'font_weight' 		=> $filters_title['font_weight'],
		'font_style' 		=> $filters_title['italic'],
		'text_transform' 	=> $filters_title['uppercase']
	) );



/* ----------------- Items General Options ----------------- */

	if ( $filter_items['label'] === false ) {
		$css .= '.filters {
			display: none;
		}';		
	}

	$css .= '.filters {
		text-align: '. $filter_items['align'] .';
	}';

	$css .= '.filters li a {
		display: '. $filter_items['width'] .';
	}';

	$css .= '.filters li a i:first-child {
		margin-right: 10px;
	}';

	$css .= '.filters li a i:last-child {
		margin-left: 10px;
	}';

	if ( $filter_items['icon_side'] === 'left' ) {
		$css .= '.filters li a i:first-child {
			display: inline-block;
		}';
		$css .= '.filters li a i:last-child {
			display: none;
		}';
	} else {
		$css .= '.filters li a i:first-child {
			display: none;
		}';
		$css .= '.filters li a i:last-child {
			display: inline-block;
		}';
	}


/* ----------------- Items Spacing Options ----------------- */

	$css .= royal_slider_4x( '.filters li a', 'padding', array(
		'top' 	 => $filter_items['padding_tp'],
		'right'  => $filter_items['padding_rt'],
		'bottom' => $filter_items['padding_bt'],
		'left' 	 => $filter_items['padding_lt']
	) );

	$css .= royal_slider_4x( '.filters li', 'padding', array(
		'top' 	 => $filter_items['margin_tp'],
		'right'  => $filter_items['margin_rt'],
		'bottom' => $filter_items['margin_bt'],
		'left' 	 => $filter_items['margin_lt']
	) );


/* ----------------- Items Styling Options ----------------- */ 

	$css .= '.sidebar-top .filters {
		background-color: '. royal_hex2rgba( $filter_items['wrapper_bg_col'], $filter_items['wrapper_bg_col_tr'] ) .';
	}';

	$css .= '.filters li a {
		background-color: '. royal_hex2rgba( $filter_items['bg_col'], $filter_items['bg_col_tr'] ) .';
		color: '. $filter_items['txt_col'] .';
	}';

	if ( $filter_items['active_highlight'] === true ) {
		$filter_items['active_highlight'] = ', .filters li a.active-filter-item';
	}

	$css .= '.filters li a:hover'. $filter_items['active_highlight'] .' {
		background-color: '. royal_hex2rgba( $filter_items['bg_hcol'], $filter_items['bg_hcol_tr'] ) .';
		color: '. $filter_items['txt_hcol'] .';
		border-color: '. $filter_items['bd_hcol'] .';
	}';

	$css .= '
		.filters li a:hover i.fa-royal-vbar,
		.filters li a.active-filter-item i.fa-royal-vbar,
		.filters li a:hover i.fa-royal-slash,
		.filters li a.active-filter-item i.fa-royal-slash {
			color: '. $filter_items['txt_col'] .';
		}
	';

	$css .= royal_border_4x( '.filters li a', array(
		'label'			=> $filter_items['border_label'],
		'top_size' 		=> $filter_items['bd_size_tp'],
		'top_style' 	=> $filter_items['bd_style_tp'],
		'top_color' 	=> $filter_items['bd_col_tp'],
		'right_size' 	=> $filter_items['bd_size_rt'],
		'right_style' 	=> $filter_items['bd_style_rt'],
		'right_color' 	=> $filter_items['bd_col_rt'],
		'bottom_size' 	=> $filter_items['bd_size_bt'],
		'bottom_style' 	=> $filter_items['bd_style_bt'],
		'bottom_color' 	=> $filter_items['bd_col_bt'],
		'left_size' 	=> $filter_items['bd_size_lt'],
		'left_style' 	=> $filter_items['bd_style_lt'],
		'left_color' 	=> $filter_items['bd_col_lt']
	) );


	$css .= royal_radius( '.filters li a', array(
		'label'		=> $filter_items['radius_label'],
		'radius'	=> $filter_items['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.filters li a', array(
		'label'			=> $filter_items['shadow_label'],
		'horizontal' 	=> $filter_items['shad_h'],
		'vertical' 		=> $filter_items['shad_v'],
		'blur' 			=> $filter_items['shad_bl'],
		'spread' 		=> $filter_items['shad_sp'],
		'color' 		=> $filter_items['shad_col'],
		'transparency' 	=> $filter_items['shad_col_tr'],
		'inset'			=> $filter_items['shad_in']
	) );


/* ----------------- Items Font Options ----------------- */

	$css .= royal_fonts( '.filters li a, ul.filters li a.active-filter-item', array(
		'font_family'		=> $filter_items['font_family'],
		'font_size' 		=> $filter_items['font_size'],
		'line_height' 		=> $filter_items['line_height'],
		'letter_spacing' 	=> $filter_items['letter_space'],
		'font_weight' 		=> $filter_items['font_weight'],
		'font_style' 		=> $filter_items['italic'],
		'text_transform' 	=> $filter_items['uppercase'],
		'text_decoration' 	=> $filter_items['line_through']
	) );

	if ( $filter_items['sup_count'] === false ) {
		$css .= '.filters li a sup {
			display: none;
		}';		
	} else {
		$css .= 'ul.filters li a.active-filter-item {
			text-decoration: none;
		}';

		if ( $filter_items['line_through'] === true ) {
			$css .= 'ul.filters li a.active-filter-item sup {
				text-decoration: line-through;
			}';			
		}
	}


/*
***************************************************************
* #Blog Page
***************************************************************
*/

/* ----------------- Page Spacing Options ----------------- */

	$css .= royal_slider_4x( '#blog-container', 'padding', array(
		'top' 	 => $bPage_general['padding_tp'],
		'right'  => $bPage_general['padding_rt'],
		'bottom' => $bPage_general['padding_bt'],
		'left' 	 => $bPage_general['padding_lt']
	) );

	$css .= '
		@media screen and ( max-width: 950px ) {

			.blog-grid-sizer,
			.blog-post.post-width1x,
			.blog-post.post-width2x {
				width: 100% !important;
			}
			
		}
	';


/* ----------------- Page Styling Options ----------------- */

	$css .= '#blog-container {
		background-color: '. royal_hex2rgba( $bPage_general['bg_col'], $bPage_general['bg_col_tr'] ) .';
	}';

	$css .= royal_border_4x( '#blog-container', array(
		'label'			=> $bPage_general['border_label'],
		'top_size' 		=> $bPage_general['bd_size_tp'],
		'top_style' 	=> $bPage_general['bd_style_tp'],
		'top_color' 	=> $bPage_general['bd_col_tp'],
		'right_size' 	=> $bPage_general['bd_size_rt'],
		'right_style' 	=> $bPage_general['bd_style_rt'],
		'right_color' 	=> $bPage_general['bd_col_rt'],
		'bottom_size' 	=> $bPage_general['bd_size_bt'],
		'bottom_style' 	=> $bPage_general['bd_style_bt'],
		'bottom_color' 	=> $bPage_general['bd_col_bt'],
		'left_size' 	=> $bPage_general['bd_size_lt'],
		'left_style' 	=> $bPage_general['bd_style_lt'],
		'left_color' 	=> $bPage_general['bd_col_lt']
	) );

	$css .= royal_radius( '#blog-container', array(
		'label'		=> $bPage_general['radius_label'],
		'radius'	=> $bPage_general['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '#blog-container', array(
		'label'			=> $bPage_general['shadow_label'],
		'horizontal' 	=> $bPage_general['shad_h'],
		'vertical' 		=> $bPage_general['shad_v'],
		'blur' 			=> $bPage_general['shad_bl'],
		'spread' 		=> $bPage_general['shad_sp'],
		'color' 		=> $bPage_general['shad_col'],
		'transparency' 	=> $bPage_general['shad_col_tr'],
		'inset'			=> $bPage_general['shad_in']
	) );



/* ----------------- Post Spacing Options ----------------- */

	$css .= royal_slider_4x( '.blog-post .post-media-wrap', 'padding', array(
		'top' 	 => $bPage_post['media_padding_tp'],
		'right'  => $bPage_post['media_padding_rt'],
		'bottom' => $bPage_post['media_padding_bt'],
		'left' 	 => $bPage_post['media_padding_lt']
	) );

	$css .= royal_slider_4x( '.blog-post .post-text-wrap', 'padding', array(
		'top' 	 => $bPage_post['text_padding_tp'],
		'right'  => $bPage_post['text_padding_rt'],
		'bottom' => $bPage_post['text_padding_bt'],
		'left' 	 => $bPage_post['text_padding_lt']
	) );


/* ----------------- Post Styling Options ----------------- */

	$css .= '.blog-post-inner {
		background-color: '. royal_hex2rgba( $bPage_post['bg_col'], $bPage_post['bg_col_tr'] ) .';
	}';

	if ( $bPage_post['highlight_even'] === true ) {
		$css .= '.blog-post:nth-child(2n) .blog-post-inner {
			background-color: '. royal_hex2rgba( $bPage_post['even_bg_col'], $bPage_post['bg_col_tr'] ) .';
		}';		
	}

    $css .= '
	    .blog-post .post-description,
	    .blog-post .before-cats {
	        color: '. $bPage_post['text_color'] .';
	    }
    ';

    $css .= '.blog-post .time-and-author {
        color: '. $bPage_post['meta_color'] .';
    }';

    $css .= '
	    .blog-post .post-text-wrap a,
	    .blog-post .social-share-wrap a,
	    .blog-post .likes-and-comments .meta-sep,
	    .blog-post .post-categories {
	        color: '. $bPage_post['link_color'] .';
	    }
    ';

    $css .= '
	    .blog-post .post-text-wrap a:hover,
	    .blog-post .social-share-wrap a:hover {
	        color: '. $bPage_post['link_hcolor'] .';
	    }
    ';

	$css .= royal_border_4x( '.blog-post-inner', array(
		'label'			=> $bPage_post['border_label'],
		'top_size' 		=> $bPage_post['bd_size_tp'],
		'top_style' 	=> $bPage_post['bd_style_tp'],
		'top_color' 	=> $bPage_post['bd_col_tp'],
		'right_size' 	=> $bPage_post['bd_size_rt'],
		'right_style' 	=> $bPage_post['bd_style_rt'],
		'right_color' 	=> $bPage_post['bd_col_rt'],
		'bottom_size' 	=> $bPage_post['bd_size_bt'],
		'bottom_style' 	=> $bPage_post['bd_style_bt'],
		'bottom_color' 	=> $bPage_post['bd_col_bt'],
		'left_size' 	=> $bPage_post['bd_size_lt'],
		'left_style' 	=> $bPage_post['bd_style_lt'],
		'left_color' 	=> $bPage_post['bd_col_lt']
	) );

	$css .= royal_radius( '.blog-post-inner', array(
		'label'		=> $bPage_post['radius_label'],
		'radius'	=> $bPage_post['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.blog-post-inner', array(
		'label'			=> $bPage_post['shadow_label'],
		'horizontal' 	=> $bPage_post['shad_h'],
		'vertical' 		=> $bPage_post['shad_v'],
		'blur' 			=> $bPage_post['shad_bl'],
		'spread' 		=> $bPage_post['shad_sp'],
		'color' 		=> $bPage_post['shad_col'],
		'transparency' 	=> $bPage_post['shad_col_tr'],
		'inset'			=> $bPage_post['shad_in']
	) );



/* ----------------- Title General Options ----------------- */

	if ( $bPost_title['label'] === false ) {
		$css .= '.blog-post .post-title {
			display: none;
		}';		
	}

	$css .= '.blog-post .post-title {
		text-align: '. $bPost_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.blog-post .post-title a {
		padding-bottom: '. $bPost_title['padding_bt'] .'px;
		margin-bottom: '. $bPost_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= '.blog-post .post-title a {
		color: '. $bPost_title['color'] .';
	}';

	$css .= '.blog-post .post-title a:hover {
		color: '. $bPost_title['hcolor'] .';
	}';

	$css .= royal_border_1x( '.blog-post .post-title a', 'bottom', array(
		'label'	=> $bPost_title['border_label'],
		'size' 	=> $bPost_title['bd_size_bt'],
		'style' => $bPost_title['bd_style_bt'],
		'color' => $bPost_title['bd_col_bt']
	) );

	if ( $bPost_title['bd_full_width'] === false ) {
		$css .= '.blog-post .post-title a {
			display: inline-block;
		}';
	} else {
		$css .= '.blog-post .post-title a {
			display: block;
		}';
	}


/* ----------------- Title Font Options ----------------- */

	$css .= royal_fonts( '.blog-post .post-title a', array(
		'font_family'		=> $bPost_title['font_family'],
		'font_size' 		=> $bPost_title['font_size'],
		'line_height' 		=> $bPost_title['line_height'],
		'letter_spacing' 	=> $bPost_title['letter_space'],
		'font_weight' 		=> $bPost_title['font_weight'],
		'font_style' 		=> $bPost_title['italic'],
		'text_transform' 	=> $bPost_title['uppercase']
	) );



/* ----------------- Category General Options ----------------- */

	if ( $bPost_cats['label'] === false ) {
		$css .= '.blog-post .post-categories {
			display: none;
		}';		
	}

	$css .= '.blog-post .post-categories {
		text-align: '. $bPost_cats['align'] .';
	}';


/* ----------------- Category Spacing Options ----------------- */

	$css .= '.blog-post .post-cats-in {
		padding-bottom: '. $bPost_cats['padding_bt'] .'px;
		margin-bottom: '. $bPost_cats['margin_bt'] .'px;
	}';


/* ----------------- Category Styling Options ----------------- */

	$css .= royal_border_1x( '.blog-post .post-cats-in', 'bottom', array(
		'label'	=> $bPost_cats['border_label'],
		'size' 	=> $bPost_cats['bd_size_bt'],
		'style' => $bPost_cats['bd_style_bt'],
		'color' => $bPost_cats['bd_col_bt']
	) );

	if ( $bPost_cats['bd_full_width'] == '' ) {
		$css .= '.blog-post .post-cats-in {
			display: inline-block;
		}';
	}


/* ----------------- Category Font Options ----------------- */

	$css .= royal_fonts( '.blog-post .post-cats-in', array(
		'font_family'		=> $bPage_post['font_family'],
		'font_size' 		=> $bPost_cats['font_size'],
		'line_height' 		=> $bPost_cats['line_height'],
		'letter_spacing' 	=> $bPost_cats['letter_space'],
		'font_weight' 		=> $bPost_cats['font_weight'],
		'font_style' 		=> $bPost_cats['italic'],
		'text_transform' 	=> $bPost_cats['uppercase']
	) );



/* ----------------- Meta General Options ----------------- */

	if ( $bPost_meta['label'] === false ) {
		$css .= '.blog-post .time-and-author {
			display: none;
		}';		
	}

	if ( $bPost_meta['date'] === false ) {
		$css .= '.blog-post .post-date {
			display: none;
		}';		
	}

	if ( $bPost_meta['author'] === false ) {
		$css .= '.blog-post .posted-by {
			display: none;
		}';		
	}

	if ( $bPost_meta['separator'] === false ) {
		$css .= '.blog-post .time-and-author .meta-sep {
			display: none;
		}';		
	}

	$css .= '.blog-post .time-and-author {
		text-align: '. $bPost_meta['align'] .';
	}';


/* ----------------- Meta Spacing Options ----------------- */

	$css .= '.blog-post .time-and-author {
		padding-bottom: '. $bPost_meta['padding_bt'] .'px;
		margin-bottom: '. $bPost_meta['margin_bt'] .'px;
	}';


/* ----------------- Meta Styling Options ----------------- */

	$css .= royal_border_1x( '.blog-post .time-and-author', 'bottom', array(
		'label'	=> $bPost_meta['border_label'],
		'size' 	=> $bPost_meta['bd_size_bt'],
		'style' => $bPost_meta['bd_style_bt'],
		'color' => $bPost_meta['bd_col_bt']
	) );


/* ----------------- Meta Font Options ----------------- */

	$css .= royal_fonts( '.blog-post .time-and-author', array(
		'font_family'		=> $bPage_post['font_family'],
		'font_size' 		=> $bPost_meta['font_size'],
		'line_height' 		=> $bPost_meta['line_height'],
		'letter_spacing' 	=> $bPost_meta['letter_space'],
		'font_weight' 		=> $bPost_meta['font_weight'],
		'font_style' 		=> $bPost_meta['italic'],
		'text_transform' 	=> $bPost_meta['uppercase']
	) );



/* ----------------- Description General Options ----------------- */

	if ( $bPost_desc['label'] === false ) {
		$css .= '.blog-post .post-description {
			display: none;
		}';		
	}

	$css .= '.blog-post .post-description {
		text-align: '. $bPost_desc['align'] .';
	}';


/* ----------------- Description Spacing Options ----------------- */

	$css .= '.blog-post .post-description {
		padding-bottom: '. $bPost_desc['padding_bt'] .'px;
		margin-bottom: '. $bPost_desc['margin_bt'] .'px;
	}';


/* ----------------- Description Styling Options ----------------- */

	$css .= royal_border_1x( '.blog-post .post-description', 'bottom', array(
		'label'	=> $bPost_desc['border_label'],
		'size' 	=> $bPost_desc['bd_size_bt'],
		'style' => $bPost_desc['bd_style_bt'],
		'color' => $bPost_desc['bd_col_bt']
	) );


/* ----------------- Description Font Options ----------------- */

	$css .= royal_fonts( '.blog-post .post-description', array(
		'font_family'		=> $bPage_post['font_family'],
		'font_size' 		=> $bPost_desc['font_size'],
		'line_height' 		=> $bPost_desc['line_height'],
		'letter_spacing' 	=> $bPost_desc['letter_space'],
		'font_weight' 		=> $bPost_desc['font_weight'],
		'font_style' 		=> $bPost_desc['italic'],
		'text_transform' 	=> $bPost_desc['uppercase']
	) );



/* ----------------- Likes, Comments & Sharing General Options ----------------- */

	if ( $bPost_likes['label'] === false ) {
		$css .= '.blog-post .likes-and-comments {
			display: none;
		}';		
	}

	if ( $bPost_more['display'] === 'separate' || ( $bPost_likes['position'] !== $bPost_more['position'] ) || ( $bPost_more['display'] === 'inline' && $bPost_more['label'] === false ) ) {
		if ( $bPost_likes['align'] === 'left' ) {
			$bPost_likes['align'] = 'float: left;';
		} elseif ( $bPost_likes['align'] === 'right' ) {
			$bPost_likes['align'] = 'float: right;';
		} else {
			$bPost_likes['align'] = 'text-align: center;';
		}
	} else {
		$bPost_likes['align'] = 'float: left;';
	}

	if ( $bPost_likes['likes_label'] === false ) {
		$css .= '.blog-post .rf-likes {
			display: none;
		}';		
	}

	if ( $bPost_likes['comments_label'] === false ) {
		$css .= '.blog-post .post-comments-wrap {
			display: none;
		}';		
	}

	if ( $bPost_likes['sharing_label'] === false ) {
		$css .= '.blog-post .social-share-wrap {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_face'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(1) {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_twit'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(2) {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_gplus'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(3) {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_linkin'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(4) {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_pint'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(5) {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_tumblr'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(6) {
			display: none;
		}';		
	}

	if ( $bPost_likes['share_reddit'] === false ) {
		$css .= '.blog-post .social-share a:nth-child(7) {
			display: none;
		}';		
	}

	$css .= '.blog-post .likes-and-comments { '. $bPost_likes['align'] .' }';


/* ----------------- Likes, Comments & Sharing Font Options ----------------- */

	$css .= royal_fonts( '.blog-post .likes-and-comments', array(
		'font_family'		=> $bPage_post['font_family'],
		'font_size' 		=> $bPost_likes['font_size'],
		'line_height' 		=> $bPost_likes['line_height'],
		'letter_spacing' 	=> $bPost_likes['letter_space']
	) );



/* ----------------- Read More General Options ----------------- */

	if ( $bPost_more['label'] === false ) {
		$css .= '.blog-post .read-more-wrap {
			display: none;
		}';
	}

	if ( $bPost_more['display'] === 'inline' ) {

		$css .= '.blog-post .read-more-wrap {
			float: right;
		}';

	} else {

		if ( $bPost_likes['position'] === $bPost_more['position'] ) {
			$css .= '.blog-post .read-more-wrap {
				padding-top: 15px;
			}';
		}

		$css .= '.blog-post .read-more-wrap {
			clear: both;
			text-align: '. $bPost_more['align'] .';
		}';

		$css .= '.blog-post .read-more {
			display: '. $bPost_more['separate'] .';
		}';

	}


/* ----------------- Read More Spacing Options ----------------- */

	$css .= royal_slider_4x( '.blog-post .read-more', 'padding', array(
		'top' 	 => $bPost_more['padding_tp'],
		'right'  => $bPost_more['padding_rt'],
		'bottom' => $bPost_more['padding_bt'],
		'left' 	 => $bPost_more['padding_lt']
	) );


/* ----------------- Read More Styling Options ----------------- */

	$css .= '.blog-post .post-text-wrap .read-more {
		background-color: '. royal_hex2rgba( $bPost_more['bg_col'], $bPost_more['bg_col_tr'] ) .';
		color: '. $bPost_more['txt_col'] .';
	}';

	$css .= '.blog-post .post-text-wrap .read-more:hover {
		background-color: '. royal_hex2rgba( $bPost_more['bg_hcol'], $bPost_more['bg_hcol_tr'] ) .';
		color: '. $bPost_more['txt_hcol'] .';
		border-color: '. $bPost_more['bd_hcol'] .';
	}';

	$css .= royal_border_4x( '.blog-post .read-more', array(
		'label'			=> $bPost_more['border_label'],
		'top_size' 		=> $bPost_more['bd_size_tp'],
		'top_style' 	=> $bPost_more['bd_style_tp'],
		'top_color' 	=> $bPost_more['bd_col_tp'],
		'right_size' 	=> $bPost_more['bd_size_rt'],
		'right_style' 	=> $bPost_more['bd_style_rt'],
		'right_color' 	=> $bPost_more['bd_col_rt'],
		'bottom_size' 	=> $bPost_more['bd_size_bt'],
		'bottom_style' 	=> $bPost_more['bd_style_bt'],
		'bottom_color' 	=> $bPost_more['bd_col_bt'],
		'left_size' 	=> $bPost_more['bd_size_lt'],
		'left_style' 	=> $bPost_more['bd_style_lt'],
		'left_color' 	=> $bPost_more['bd_col_lt']
	) );


	$css .= royal_radius( '.blog-post .read-more', array(
		'label'		=> $bPost_more['radius_label'],
		'radius'	=> $bPost_more['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.blog-post .read-more', array(
		'label'			=> $bPost_more['shadow_label'],
		'horizontal' 	=> $bPost_more['shad_h'],
		'vertical' 		=> $bPost_more['shad_v'],
		'blur' 			=> $bPost_more['shad_bl'],
		'spread' 		=> $bPost_more['shad_sp'],
		'color' 		=> $bPost_more['shad_col'],
		'transparency' 	=> $bPost_more['shad_col_tr'],
		'inset'			=> $bPost_more['shad_in']
	) );


/* ----------------- Read More Font Options ----------------- */

	$css .= royal_fonts( '.blog-post .read-more', array(
		'font_family'		=> $bPage_post['font_family'],
		'font_size' 		=> $bPost_more['font_size'],
		'line_height' 		=> $bPost_more['line_height'],
		'letter_spacing' 	=> $bPost_more['letter_space'],
		'font_weight' 		=> $bPost_more['font_weight'],
		'font_style' 		=> $bPost_more['italic'],
		'text_transform' 	=> $bPost_more['uppercase']
	) );

	if ( $bPost_more['underline'] === true )  {
		$bPost_more['underline'] = 'underline';
	} else {
		$bPost_more['underline'] = 'none';
	}

	$css .= '.blog-post .read-more {
		text-decoration: '. $bPost_more['underline'] .';
	}';



/* ----------------- Image Overlay General Options ----------------- */

	if ( $bPost_overlay['label'] === false ) {
		$css .= '.blog-post .post-media .image-overlay {
			display: none;
		}';
	}

	$css .= '.blog-post .post-media .image-overlay {
		-webkit-transition: opacity '. $bPost_overlay['overlay_trans'] .'ms ease 0s, background-color '. $bPost_overlay['overlay_trans'] .'ms ease 0s;
		transition: opacity '. $bPost_overlay['overlay_trans'] .'ms ease 0s, background-color '. $bPost_overlay['overlay_trans'] .'ms ease 0s;
	}';


/* ----------------- Image Overlay Styling Options ----------------- */

	$css .= '.blog-post .post-media .image-overlay .fa {
		color: '. $bPost_overlay['txt_hcol'] .';
	}';

	$css .= '.blog-post .post-media .image-overlay {
		background-color: '. royal_hex2rgba( $bPost_overlay['bg_hcol'], $bPost_overlay['bg_hcol_tr'] ) .';
	}';


/* ----------------- Image Overlay Font Options ----------------- */

	$css .= '.blog-post .post-media .image-overlay .fa {
		font-size: '. $bPost_overlay['icon_size'] .'px;
	}';



/* ----------------- Post Formats Spacing Options ----------------- */

	$css .= '.link-and-quote {
		padding-top: '. $bPost_formats['padding_tp'] .'%;
		padding-right: '. $bPost_formats['padding_rt'] .'%;
		padding-bottom: '. $bPost_formats['padding_bt'] .'%;
		padding-left: '. $bPost_formats['padding_lt'] .'%;
	}';


/* ----------------- Post Formats Styling Options ----------------- */

	$css .= '
		.link-and-quote,
		.link-and-quote small a {
			color: '. $bPost_formats['txt_col'] .';
		}
	';

	$css .= '
		.link-and-quote p,
		.link-and-quote small {
			background-color: '. royal_hex2rgba( $bPost_formats['bg_col'], $bPost_formats['bg_col_tr'] ) .';
		}
	';

	$css .= royal_radius( '.link-and-quote p, .link-and-quote small', array(
		'label'		=> $bPost_formats['radius_label'],
		'radius'	=> $bPost_formats['radius'],
		'ext'		=> true
	) );


/* ----------------- Post Formats Font Options ----------------- */

	$css .= royal_fonts( '.link-and-quote, .blog-post .link-and-quote p', array(
		'font_family'		=> $bPost_formats['font_family'],
		'font_size' 		=> $bPost_formats['font_size'],
		'line_height' 		=> $bPost_formats['line_height'],
		'letter_spacing' 	=> $bPost_formats['letter_space'],
		'font_weight' 		=> $bPost_formats['font_weight'],
		'font_style' 		=> $bPost_formats['italic'],
		'text_transform' 	=> $bPost_formats['uppercase']
	) );

	if ( $bPost_formats['underline'] === true )  {
		$bPost_formats['underline'] = 'underline';
	} else {
		$bPost_formats['underline'] = 'none';
	}

	$css .= '.link-and-quote small a {
		text-decoration: '. $bPost_formats['underline'] .';
	}';



/*
***************************************************************
* #Blog Single
***************************************************************
*/

/* ----------------- Header General Options ----------------- */

	$css .= '.blog-single-header .title-and-meta {
		text-align: '. $bSingle_header['align'] .';
	}';
	
	if ( $bSingle_header['display_date'] === false ) {
		$css .= '.blog-single-header .post-date {
			display: none;
		}';
	}

	if ( $bSingle_header['display_cats'] === false ) {
		$css .= '.blog-single-header .post-categories {
			display: none;
		}';
	}

	if ( $bSingle_header['display_comments'] === false ) {
		$css .= '.blog-single-header .post-comments-wrap {
			display: none;
		}';
	}

	if ( $bSingle_header['display_author'] === false ) {
		$css .= '.blog-single-header .posted-by {
			display: none;
		}';
	}



/* ----------------- Navigation General Options ----------------- */

	if ( $bSingle_nav['position'] === 'sharing' && $bSingle_nav['label'] === true  ) {

		$css .= '.single-post .single-socials-wrap {
			width: -webkit-calc(100% - '. ( $bSingle_nav['width'] * 2 ) .'px);
			width: calc(100% - '. ( $bSingle_nav['width'] * 2 ) .'px);
			line-height: '. $bSingle_nav['height'] .'px;
		}';

		$css .= '.hide-single-sharing-b.single-post .single-socials-wrap {
			height: '. $bSingle_nav['height'] .'px;
		}';

	}

	$css .= '
		.single-post.sharing-nxt-prev-b .single-post-sharing .previous-post,
		.single-post.sharing-nxt-prev-b .single-post-sharing .next-post {
			top: '. $bSingle_share['padding_tp'] .'px;
		}
	';


/* ----------------- Navigation Spacing Options ----------------- */

	$css .= '
		.single-post .next-post,
		.single-post .previous-post {
			width: '. $bSingle_nav['width'] .'px;
			height: '. $bSingle_nav['height'] .'px;
		}
	';

	if ( $bSingle_nav['border_label'] === true ) {
		$css .= '
			.single-post .next-post,
			.single-post .previous-post {
				line-height: '. ( $bSingle_nav['height'] - $bSingle_nav['border_size'] * 2 ) .'px;
			}
		';
	} else {
		$css .= '
			.single-post .next-post,
			.single-post .previous-post {
				line-height: '. $bSingle_nav['height'] .'px;
			}
		';
	}

	$css .= '.single-post .nxt-prev-post {
		margin-top: '. $bSingle_nav['margin_tp'] .'px;
	}';

	$css .= '.single-post .previous-post {
		margin-right: '. $bSingle_nav['space_between'] .'px;
	}';


/* ----------------- Navigation Styling Options ----------------- */

	$css .= '
		.single-post .next-post,
		.single-post .previous-post {
			background-color: '. royal_hex2rgba( $bSingle_nav['bg_col'], $bSingle_nav['bg_col_tr'] ) .';
			color: '. $bSingle_nav['txt_col'] .';
		}
	';

	$css .= '
		.single-post .next-post:hover,
		.single-post .previous-post:hover{
			background-color: '. royal_hex2rgba( $bSingle_nav['bg_hcol'], $bSingle_nav['bg_hcol_tr'] ) .';
			color: '. $bSingle_nav['txt_hcol'] .';
			border-color: '. $bSingle_nav['bd_hcol'] .';
		}
	';

	$css .= royal_border_1x_all( '.single-post .next-post, .single-post .previous-post', array(
		'label'	=> $bSingle_nav['border_label'],
		'size' 	=> $bSingle_nav['border_size'],
		'style' => $bSingle_nav['border_style'],
		'color' => $bSingle_nav['border_color']
	) );

	$css .= royal_shadows( '.single-post .next-post, .single-post .previous-post', array(
		'label'			=> $bSingle_nav['shadow_label'],
		'horizontal' 	=> $bSingle_nav['shad_h'],
		'vertical' 		=> $bSingle_nav['shad_v'],
		'blur' 			=> $bSingle_nav['shad_bl'],
		'spread' 		=> $bSingle_nav['shad_sp'],
		'color' 		=> $bSingle_nav['shad_col'],
		'transparency' 	=> $bSingle_nav['shad_col_tr'],
		'inset'			=> $bSingle_nav['shad_in']
	) );

	$css .= royal_radius( '.single-post .next-post, .single-post .previous-post', array(
		'label'		=> $bSingle_nav['radius_label'],
		'radius'	=> $bSingle_nav['radius'],
		'ext'		=> true
	) );


/* ----------------- Navigation Font Options ----------------- */

	$css .= '
		.single-post .next-post,
		.single-post .previous-post {
			font-size: '. $bSingle_nav['font_size'] .'px;
		}
	';



/* ----------------- Sharing General Options ----------------- */

	if ( $bSingle_share['label'] === false ) {
		$css .= '.blog-single .single-post-sharing {
			display: none;
		}';
	}

	if ( $bSingle_share['sharing_label'] === false ) {
		$css .= '.blog-single .single-socials-wrap span {
			display: none;
		}';
	}

	if ( $bSingle_share['share_face'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(1) {
			display: none;
		}';
	}

	if ( $bSingle_share['share_twit'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(2) {
			display: none;
		}';
	}

	if ( $bSingle_share['share_gplus'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(3) {
			display: none;
		}';
	}

	if ( $bSingle_share['share_linkin'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(4) {
			display: none;
		}';
	}

	if ( $bSingle_share['share_pint'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(5) {
			display: none;
		}';
	}

	if ( $bSingle_share['share_tumblr'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(6) {
			display: none;
		}';
	}

	if ( $bSingle_share['share_reddit'] === false ) {
		$css .= '.blog-single .single-socials-wrap a:nth-child(7) {
			display: none;
		}';
	}

		$css .= '.blog-single .single-socials-wrap {
			text-align: '. $bSingle_share['align'] .';
		}';


/* ----------------- Sharing Spacing Options ----------------- */

	$css .= '.blog-single .single-post-sharing {
		margin-top: '. $bSingle_share['margin_tp'] .'px;
		padding-top: '. $bSingle_share['padding_tp'] .'px;
	}';


/* ----------------- Sharing Syling Options ----------------- */

	$css .= royal_border_1x_no_color( '.blog-single .single-post-sharing', 'top', array(
		'label' => $bSingle_share['border_label'],
		'size' 	=> $bSingle_share['bd_size_tp'],
		'style' => $bSingle_share['bd_style_tp']
	) );



/*
***************************************************************
* #Portfolio Page
***************************************************************
*/

/* ----------------- Page Spacing Options ----------------- */

	$css .= royal_slider_4x( '#portfolio-container', 'padding', array(
		'top' 	 => $pPage_general['padding_tp'],
		'right'  => $pPage_general['padding_rt'],
		'bottom' => $pPage_general['padding_bt'],
		'left' 	 => $pPage_general['padding_lt']
	) );

	$css .= '
		@media screen and ( max-width: 950px ) {

			.portfolio-grid-sizer,
			.portfolio-post.post-width1x,
			.portfolio-post.post-width2x {
				width: 100% !important;
			}
			
		}
	';


/* ----------------- Page Styling Options ----------------- */

	$css .= '#portfolio-container {
		background-color: '. royal_hex2rgba( $pPage_general['bg_col'], $pPage_general['bg_col_tr'] ) .';
	}';

	$css .= royal_border_4x( '#portfolio-container', array(
		'label'			=> $pPage_general['border_label'],
		'top_size' 		=> $pPage_general['bd_size_tp'],
		'top_style' 	=> $pPage_general['bd_style_tp'],
		'top_color' 	=> $pPage_general['bd_col_tp'],
		'right_size' 	=> $pPage_general['bd_size_rt'],
		'right_style' 	=> $pPage_general['bd_style_rt'],
		'right_color' 	=> $pPage_general['bd_col_rt'],
		'bottom_size' 	=> $pPage_general['bd_size_bt'],
		'bottom_style' 	=> $pPage_general['bd_style_bt'],
		'bottom_color' 	=> $pPage_general['bd_col_bt'],
		'left_size' 	=> $pPage_general['bd_size_lt'],
		'left_style' 	=> $pPage_general['bd_style_lt'],
		'left_color' 	=> $pPage_general['bd_col_lt']
	) );

	$css .= royal_radius( '#portfolio-container', array(
		'label'		=> $pPage_general['radius_label'],
		'radius'	=> $pPage_general['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '#portfolio-container', array(
		'label'			=> $pPage_general['shadow_label'],
		'horizontal' 	=> $pPage_general['shad_h'],
		'vertical' 		=> $pPage_general['shad_v'],
		'blur' 			=> $pPage_general['shad_bl'],
		'spread' 		=> $pPage_general['shad_sp'],
		'color' 		=> $pPage_general['shad_col'],
		'transparency' 	=> $pPage_general['shad_col_tr'],
		'inset'			=> $pPage_general['shad_in']
	) );



/* ----------------- Post Spacing Options ----------------- */

	$css .= royal_slider_4x( '.portfolio-post .post-text-wrap', 'padding', array(
		'top' 	 => $pPage_post['text_padding_tp'],
		'right'  => $pPage_post['text_padding_rt'],
		'bottom' => $pPage_post['text_padding_bt'],
		'left' 	 => $pPage_post['text_padding_lt']
	) );


/* ----------------- Post Styling Options ----------------- */

	$css .= '.portfolio-post-inner {
		background-color: '. royal_hex2rgba( $pPage_post['bg_col'], $pPage_post['bg_col_tr'] ) .';
	}';

	if ( $pPage_post['highlight_even'] === true ) {
		$css .= '.portfolio-post:nth-child(2n) .portfolio-post-inner {
			background-color: '. royal_hex2rgba( $pPage_post['even_bg_col'], $pPage_post['bg_col_tr'] ) .';
		}';		
	}

    $css .= '
	    .portfolio-post .post-description,
	    .portfolio-post .before-cats,
	    .portfolio-post .testimonial-wrap h5,
	    .portfolio-post .testimonial-wrap p {
	        color: '. $pPage_post['text_color'] .';
	    }
    ';

    $css .= '.portfolio-post .time-and-author {
        color: '. $pPage_post['meta_color'] .';
    }';

    $css .= '
	    .portfolio-post a,
	    .portfolio-post .social-share-wrap a,
	    .portfolio-post .likes-and-comments .meta-sep,
	    .portfolio-post .post-categories {
	        color: '. $pPage_post['link_color'] .';
	    }
    ';

    $css .= '
	    .portfolio-post a:hover,
	    .portfolio-post .social-share-wrap a:hover {
	        color: '. $pPage_post['link_hcolor'] .';
	    }
    ';

	$css .= royal_border_4x( '.portfolio-post-inner', array(
		'label'			=> $pPage_post['border_label'],
		'top_size' 		=> $pPage_post['bd_size_tp'],
		'top_style' 	=> $pPage_post['bd_style_tp'],
		'top_color' 	=> $pPage_post['bd_col_tp'],
		'right_size' 	=> $pPage_post['bd_size_rt'],
		'right_style' 	=> $pPage_post['bd_style_rt'],
		'right_color' 	=> $pPage_post['bd_col_rt'],
		'bottom_size' 	=> $pPage_post['bd_size_bt'],
		'bottom_style' 	=> $pPage_post['bd_style_bt'],
		'bottom_color' 	=> $pPage_post['bd_col_bt'],
		'left_size' 	=> $pPage_post['bd_size_lt'],
		'left_style' 	=> $pPage_post['bd_style_lt'],
		'left_color' 	=> $pPage_post['bd_col_lt']
	) );

	$css .= royal_radius( '.portfolio-post-inner', array(
		'label'		=> $pPage_post['radius_label'],
		'radius'	=> $pPage_post['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.portfolio-post-inner', array(
		'label'			=> $pPage_post['shadow_label'],
		'horizontal' 	=> $pPage_post['shad_h'],
		'vertical' 		=> $pPage_post['shad_v'],
		'blur' 			=> $pPage_post['shad_bl'],
		'spread' 		=> $pPage_post['shad_sp'],
		'color' 		=> $pPage_post['shad_col'],
		'transparency' 	=> $pPage_post['shad_col_tr'],
		'inset'			=> $pPage_post['shad_in']
	) );



/* ----------------- Media General Options ----------------- */
	
	$css .= '.media-hovers {
		-webkit-transition: all '. $pPost_media['info_hover_trans'] .'ms ease 0s;
		transition: all '. $pPost_media['info_hover_trans'] .'ms ease 0s;
	}';

	if ( $pPost_media['center_content'] === true ) {

		$css .= '.media-hovers {
			padding: 0 !important;
		}';

		$css .= '.media-hovers-outer {
			display: table;
			width: 100%;
			height: 100%;
		}';	

		$css .= '.media-hovers-inner {
			display: table-cell;
			vertical-align: middle;
			text-align: center;
		}';

	}


/* ----------------- Media Spacing Options ----------------- */

	$css .= royal_slider_4x( '.portfolio-post .post-media-wrap', 'padding', array(
		'top' 	 => $pPost_media['padding_tp'],
		'right'  => $pPost_media['padding_rt'],
		'bottom' => $pPost_media['padding_bt'],
		'left' 	 => $pPost_media['padding_lt']
	) );

	$css .= '.portfolio-post .post-media-wrap .media-hovers {
		padding-top: '. $pPost_media['info_padding_tp'] .'%;
		padding-right: '. $pPost_media['info_padding_rt'] .'%;
		padding-bottom: '. $pPost_media['info_padding_bt'] .'%;
		padding-left: '. $pPost_media['info_padding_lt'] .'%;
	}';


/* ----------------- Media Styling Options ----------------- */

	$css .= royal_background_select( '.portfolio-post .media-hovers', $pPost_media['background'], array(
		'color' 				=> $pPost_media['bg_color'],
		'color_tr' 				=> $pPost_media['bg_color_tr'],
		'gradient_ang' 			=> $pPost_media['bg_grad_angle'],
		'gradient_start' 		=> $pPost_media['bg_grad_col_1'],
		'gradient_start_tr'		=> $pPost_media['bg_grad_col_1_tr'],
		'gradient_start_pos'	=> $pPost_media['bg_grad_col_1_ps'],
		'gradient_end' 			=> $pPost_media['bg_grad_col_2'],
		'gradient_end_tr'		=> $pPost_media['bg_grad_col_2_tr'],
		'gradient_end_pos'		=> $pPost_media['bg_grad_col_2_ps'],
		'image'					=> $pPost_media['bg_img'],
		'image_size' 			=> $pPost_media['bg_img_sz'],
		'image_att' 			=> $pPost_media['bg_img_att']
	) );

	$css .= royal_border_4x( '.portfolio-post .post-media-in-wrap', array(
		'label'			=> $pPost_media['border_label'],
		'top_size' 		=> $pPost_media['bd_size_tp'],
		'top_style' 	=> $pPost_media['bd_style_tp'],
		'top_color' 	=> $pPost_media['bd_col_tp'],
		'right_size' 	=> $pPost_media['bd_size_rt'],
		'right_style' 	=> $pPost_media['bd_style_rt'],
		'right_color' 	=> $pPost_media['bd_col_rt'],
		'bottom_size' 	=> $pPost_media['bd_size_bt'],
		'bottom_style' 	=> $pPost_media['bd_style_bt'],
		'bottom_color' 	=> $pPost_media['bd_col_bt'],
		'left_size' 	=> $pPost_media['bd_size_lt'],
		'left_style' 	=> $pPost_media['bd_style_lt'],
		'left_color' 	=> $pPost_media['bd_col_lt']
	) );

	$css .= royal_radius( '.portfolio-post .post-media-in-wrap', array(
		'label'		=> $pPost_media['radius_label'],
		'radius'	=> $pPost_media['radius']
	) );

	$css .= royal_shadows( '.portfolio-post .post-media-in-wrap', array(
		'label'			=> $pPost_media['shadow_label'],
		'horizontal' 	=> $pPost_media['shad_h'],
		'vertical' 		=> $pPost_media['shad_v'],
		'blur' 			=> $pPost_media['shad_bl'],
		'spread' 		=> $pPost_media['shad_sp'],
		'color' 		=> $pPost_media['shad_col'],
		'transparency' 	=> $pPost_media['shad_col_tr']
	) );



/* ----------------- Title General Options ----------------- */

	if ( $pPost_title['label'] === false ) {
		$css .= '.portfolio-post .post-title {
			display: none;
		}';		
	}

	$css .= '.portfolio-post .post-title {
		text-align: '. $pPost_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.portfolio-post .post-title a {
		padding-bottom: '. $pPost_title['padding_bt'] .'px;
		margin-bottom: '. $pPost_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= '.portfolio-post .post-title a {
		color: '. $pPost_title['color'] .';
	}';

	$css .= '.portfolio-post .post-title a:hover {
		color: '. $pPost_title['hcolor'] .';
	}';

	$css .= royal_border_1x( '.portfolio-post .post-title a', 'bottom', array(
		'label'	=> $pPost_title['border_label'],
		'size' 	=> $pPost_title['bd_size_bt'],
		'style' => $pPost_title['bd_style_bt'],
		'color' => $pPost_title['bd_col_bt']
	) );

	if ( $pPost_title['bd_full_width'] === false ) {
		$css .= '.portfolio-post .post-title a {
			display: inline-block;
		}';
	} else {
		$css .= '.portfolio-post .post-title a {
			display: block;
		}';
	}


/* ----------------- Title Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .post-title a', array(
		'font_family'		=> $pPost_title['font_family'],
		'font_size' 		=> $pPost_title['font_size'],
		'line_height' 		=> $pPost_title['line_height'],
		'letter_spacing' 	=> $pPost_title['letter_space'],
		'font_weight' 		=> $pPost_title['font_weight'],
		'font_style' 		=> $pPost_title['italic'],
		'text_transform' 	=> $pPost_title['uppercase']
	) );



/* ----------------- Category General Options ----------------- */

	if ( $pPost_cats['label'] === false ) {
		$css .= '.portfolio-post .post-categories {
			display: none;
		}';		
	}

	$css .= '.portfolio-post .post-categories {
		text-align: '. $pPost_cats['align'] .';
	}';


/* ----------------- Category Spacing Options ----------------- */

	$css .= '.portfolio-post .post-cats-in {
		padding-bottom: '. $pPost_cats['padding_bt'] .'px;
		margin-bottom: '. $pPost_cats['margin_bt'] .'px;
	}';


/* ----------------- Category Styling Options ----------------- */

	$css .= royal_border_1x( '.portfolio-post .post-cats-in', 'bottom', array(
		'label'	=> $pPost_cats['border_label'],
		'size' 	=> $pPost_cats['bd_size_bt'],
		'style' => $pPost_cats['bd_style_bt'],
		'color' => $pPost_cats['bd_col_bt']
	) );

	if ( $pPost_cats['bd_full_width'] == '' ) {
		$css .= '.portfolio-post .post-cats-in {
			display: inline-block;
		}';
	}


/* ----------------- Category Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .post-cats-in', array(
		'font_family'		=> $pPage_post['font_family'],
		'font_size' 		=> $pPost_cats['font_size'],
		'line_height' 		=> $pPost_cats['line_height'],
		'letter_spacing' 	=> $pPost_cats['letter_space'],
		'font_weight' 		=> $pPost_cats['font_weight'],
		'font_style' 		=> $pPost_cats['italic'],
		'text_transform' 	=> $pPost_cats['uppercase']
	) );



/* ----------------- Meta General Options ----------------- */

	if ( $pPost_meta['label'] === false ) {
		$css .= '.portfolio-post .time-and-author {
			display: none;
		}';		
	}

	if ( $pPost_meta['date'] === false ) {
		$css .= '.portfolio-post .post-date {
			display: none;
		}';		
	}

	if ( $pPost_meta['author'] === false ) {
		$css .= '.portfolio-post .posted-by {
			display: none;
		}';		
	}

	if ( $pPost_meta['separator'] === false ) {
		$css .= '.portfolio-post .time-and-author .meta-sep {
			display: none;
		}';		
	}

	$css .= '.portfolio-post .time-and-author {
		text-align: '. $pPost_meta['align'] .';
	}';


/* ----------------- Meta Spacing Options ----------------- */

	$css .= '.portfolio-post .time-and-author {
		padding-bottom: '. $pPost_meta['padding_bt'] .'px;
		margin-bottom: '. $pPost_meta['margin_bt'] .'px;
	}';


/* ----------------- Meta Styling Options ----------------- */

	$css .= royal_border_1x( '.portfolio-post .time-and-author', 'bottom', array(
		'label'	=> $pPost_meta['border_label'],
		'size' 	=> $pPost_meta['bd_size_bt'],
		'style' => $pPost_meta['bd_style_bt'],
		'color' => $pPost_meta['bd_col_bt']
	) );


/* ----------------- Meta Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .time-and-author', array(
		'font_family'		=> $pPage_post['font_family'],
		'font_size' 		=> $pPost_meta['font_size'],
		'line_height' 		=> $pPost_meta['line_height'],
		'letter_spacing' 	=> $pPost_meta['letter_space'],
		'font_weight' 		=> $pPost_meta['font_weight'],
		'font_style' 		=> $pPost_meta['italic'],
		'text_transform' 	=> $pPost_meta['uppercase']
	) );



/* ----------------- Description General Options ----------------- */

	if ( $pPost_desc['label'] === false ) {
		$css .= '.portfolio-post .post-description {
			display: none;
		}';		
	}

	$css .= '.portfolio-post .post-description {
		text-align: '. $pPost_desc['align'] .';
	}';


/* ----------------- Description Spacing Options ----------------- */

	$css .= '.portfolio-post .post-description {
		padding-bottom: '. $pPost_desc['padding_bt'] .'px;
		margin-bottom: '. $pPost_desc['margin_bt'] .'px;
	}';


/* ----------------- Description Styling Options ----------------- */

	$css .= royal_border_1x( '.portfolio-post .post-description', 'bottom', array(
		'label'	=> $pPost_desc['border_label'],
		'size' 	=> $pPost_desc['bd_size_bt'],
		'style' => $pPost_desc['bd_style_bt'],
		'color' => $pPost_desc['bd_col_bt']
	) );


/* ----------------- Description Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .post-description', array(
		'font_family'		=> $pPage_post['font_family'],
		'font_size' 		=> $pPost_desc['font_size'],
		'line_height' 		=> $pPost_desc['line_height'],
		'letter_spacing' 	=> $pPost_desc['letter_space'],
		'font_weight' 		=> $pPost_desc['font_weight'],
		'font_style' 		=> $pPost_desc['italic'],
		'text_transform' 	=> $pPost_desc['uppercase']
	) );



/* ----------------- Likes, Comments & Sharing General Options ----------------- */

	if ( $pPost_likes['label'] === false ) {
		$css .= '.portfolio-post .likes-and-comments {
			display: none;
		}';		
	}

	if ( $pPost_more['display'] === 'separate' || ( $pPost_likes['position'] !== $pPost_more['position'] ) || ( $pPost_more['display'] === 'inline' && $pPost_more['label'] === false ) ) {
		if ( $pPost_likes['align'] === 'left' ) {
			$pPost_likes['align'] = 'float: left;';
		} elseif ( $pPost_likes['align'] === 'right' ) {
			$pPost_likes['align'] = 'float: right;';
		} else {
			$pPost_likes['align'] = 'text-align: center;';
		}
	} else {
		$pPost_likes['align'] = 'float: left;';
	}

	if ( $pPost_more['show_lightbox'] === false ) {
		$css .= '.pp_rf_more_info {
			display: none;
		}';
	}

	if ( $pPost_likes['likes_label'] === false ) {
		$css .= '.portfolio-post .rf-likes {
			display: none;
		}';
	}

	if ( $pPost_likes['comments_label'] === false ) {
		$css .= '.portfolio-post .post-comments-wrap {
			display: none;
		}';
	}

	if ( $pPost_likes['sharing_label'] === false ) {
		$css .= '.portfolio-post .social-share-wrap {
			display: none;
		}';
	}

	if ( $pPost_likes['share_face'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(1) {
			display: none;
		}';
	}

	if ( $pPost_likes['share_twit'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(2) {
			display: none;
		}';
	}

	if ( $pPost_likes['share_gplus'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(3) {
			display: none;
		}';
	}

	if ( $pPost_likes['share_linkin'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(4) {
			display: none;
		}';
	}

	if ( $pPost_likes['share_pint'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(5) {
			display: none;
		}';
	}

	if ( $pPost_likes['share_tumblr'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(6) {
			display: none;
		}';
	}

	if ( $pPost_likes['share_reddit'] === false ) {
		$css .= '.portfolio-post .social-share a:nth-child(7) {
			display: none;
		}';
	}

	$css .= '.portfolio-post .likes-and-comments { '. $pPost_likes['align'] .' }';


/* ----------------- Likes Comments & Sharing Spacing Options ----------------- */

	$css .= '
	.portfolio-post .rf-likes a,
	.portfolio-post .post-comments-wrap a,
	.portfolio-post .social-share-wrap a,
	.portfolio-post .social-share-wrap > i {
		width: '. $pPost_likes['bg_size'] .'px;
		height: '. $pPost_likes['bg_size'] .'px;
		line-height: '. $pPost_likes['bg_size'] .'px;
	}';	


/* ----------------- Likes Comments & Sharing Styling Options ----------------- */

	$css .= '
	.portfolio-post .rf-likes a,
	.portfolio-post .post-comments-wrap a,
	.portfolio-post .social-share-wrap a,
	.portfolio-post .social-share-wrap > i  {
		background-color: '. $pPost_likes['bg_col'] .';
	}';	

	$css .= '
	.portfolio-post .rf-likes a:hover,
	.portfolio-post .post-comments-wrap a:hover,
	.portfolio-post .social-share-wrap a:hover,
	.portfolio-post .social-share-wrap > i:hover  {
		background-color: '. $pPost_likes['bg_hcol'] .';
	}';	


/* ----------------- Likes, Comments & Sharing Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .likes-and-comments', array(
		'font_family'		=> $pPage_post['font_family'],
		'font_size' 		=> $pPost_likes['font_size'],
		'line_height' 		=> $pPost_likes['line_height'],
		'letter_spacing' 	=> $pPost_likes['letter_space']
	) );



/* ----------------- More Info General Options ----------------- */

	if ( $pPost_more['label'] === false ) {
		$css .= '.portfolio-post .more-info-wrap {
			display: none;
		}';
	}

	if ( $pPost_more['display'] === 'inline' ) {

		$css .= '.portfolio-post .more-info-wrap {
			float: right;
		}';

	} else {

		if ( $bPost_likes['position'] === $pPost_more['position'] ) {
			$css .= '.portfolio-post .more-info-wrap {
				padding-top: 15px;
			}';
		}

		$css .= '.portfolio-post .more-info-wrap {
			clear: both;
			text-align: '. $pPost_more['align'] .';
		}';

		$css .= '.portfolio-post .more-info {
			display: '. $pPost_more['separate'] .';
		}';

	}


/* ----------------- More Info Spacing Options ----------------- */

	$css .= royal_slider_4x( '.portfolio-post .more-info', 'padding', array(
		'top' 	 => $pPost_more['padding_tp'],
		'right'  => $pPost_more['padding_rt'],
		'bottom' => $pPost_more['padding_bt'],
		'left' 	 => $pPost_more['padding_lt']
	) );


/* ----------------- More Info Styling Options ----------------- */

	$css .= '.portfolio-post .more-info {
		background-color: '. royal_hex2rgba( $pPost_more['bg_col'], $pPost_more['bg_col_tr'] ) .';
		color: '. $pPost_more['txt_col'] .';
	}';

	$css .= '.portfolio-post .more-info:hover {
		background-color: '. royal_hex2rgba( $pPost_more['bg_hcol'], $pPost_more['bg_hcol_tr'] ) .';
		color: '. $pPost_more['txt_hcol'] .';
		border-color: '. $pPost_more['bd_hcol'] .';
	}';

	$css .= royal_border_4x( '.portfolio-post .more-info', array(
		'label'			=> $pPost_more['border_label'],
		'top_size' 		=> $pPost_more['bd_size_tp'],
		'top_style' 	=> $pPost_more['bd_style_tp'],
		'top_color' 	=> $pPost_more['bd_col_tp'],
		'right_size' 	=> $pPost_more['bd_size_rt'],
		'right_style' 	=> $pPost_more['bd_style_rt'],
		'right_color' 	=> $pPost_more['bd_col_rt'],
		'bottom_size' 	=> $pPost_more['bd_size_bt'],
		'bottom_style' 	=> $pPost_more['bd_style_bt'],
		'bottom_color' 	=> $pPost_more['bd_col_bt'],
		'left_size' 	=> $pPost_more['bd_size_lt'],
		'left_style' 	=> $pPost_more['bd_style_lt'],
		'left_color' 	=> $pPost_more['bd_col_lt']
	) );


	$css .= royal_radius( '.portfolio-post .more-info', array(
		'label'		=> $pPost_more['radius_label'],
		'radius'	=> $pPost_more['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.portfolio-post .more-info', array(
		'label'			=> $pPost_more['shadow_label'],
		'horizontal' 	=> $pPost_more['shad_h'],
		'vertical' 		=> $pPost_more['shad_v'],
		'blur' 			=> $pPost_more['shad_bl'],
		'spread' 		=> $pPost_more['shad_sp'],
		'color' 		=> $pPost_more['shad_col'],
		'transparency' 	=> $pPost_more['shad_col_tr'],
		'inset'			=> $pPost_more['shad_in']
	) );


/* ----------------- More Info Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .more-info', array(
		'font_family'		=> $pPage_post['font_family'],
		'font_size' 		=> $pPost_more['font_size'],
		'line_height' 		=> $pPost_more['line_height'],
		'letter_spacing' 	=> $pPost_more['letter_space'],
		'font_weight' 		=> $pPost_more['font_weight'],
		'font_style' 		=> $pPost_more['italic'],
		'text_transform' 	=> $pPost_more['uppercase']
	) );

	if ( $pPost_more['underline'] === true )  {
		$pPost_more['underline'] = 'underline';
	} else {
		$pPost_more['underline'] = 'none';
	}

	$css .= '.portfolio-post .more-info {
		text-decoration: '. $pPost_more['underline'] .';
	}';



/* ----------------- Testimonial General Options ----------------- */

	if ( $pPost_test['label'] === false ) {
		$css .= '.portfolio-post .testimonial-wrap {
			display: none;
		}';		
	}

	$css .= '.portfolio-post .testimonial-wrap {
		text-align: '. $pPost_test['align'] .';
	}';


/* ----------------- Testimonial Spacing Options ----------------- */

	$css .= '.portfolio-post .testimonial-wrap {
		padding-top: '. $pPost_test['padding_tp'] .'px;
		margin-top: '. $pPost_test['margin_tp'] .'px;
	}';


/* ----------------- Testimonial Styling Options ----------------- */

	$css .= royal_border_1x( '.portfolio-post .testimonial-wrap', 'top', array(
		'label'	=> $pPost_test['border_label'],
		'size' 	=> $pPost_test['bd_size_tp'],
		'style' => $pPost_test['bd_style_tp'],
		'color' => $pPost_test['bd_col_tp']
	) );


/* ----------------- Testimonial Font Options ----------------- */

	$css .= royal_fonts( '.portfolio-post .testimonial-wrap h5, .portfolio-post .testimonial-wrap p', array(
		'font_family'		=> $pPost_test['font_family'],
		'font_size' 		=> $pPost_test['font_size'],
		'line_height' 		=> $pPost_test['line_height'],
		'letter_spacing' 	=> $pPost_test['letter_space'],
		'font_weight' 		=> $pPost_test['font_weight'],
		'font_style' 		=> $pPost_test['italic'],
		'text_transform' 	=> $pPost_test['uppercase']
	) );



/* ----------------- Decorational Triangle General Options ----------------- */

	if ( $pPost_triangle['label'] === false ) {
		$css .= '.portfolio-post .triangle-wrap {
			display: none;
		}';		
	}

	if ( $pPost_triangle['vert_position'] === 'top' ) {
		$css .= '.portfolio-post .triangle-wrap {
			top: 0;
			border-bottom: none; 
		}';
	} else {
		$css .= '.portfolio-post .triangle-wrap {
			bottom: 0;
			border-top: none;
		}';
	}


/* ----------------- Decorational Triangle Spacing Options ----------------- */

	$css .= '.portfolio-post .triangle-wrap {
		border-'. $pPost_triangle['vert_position'] .'-width:  '. $pPost_triangle['height'] .'px;
		border-'. $pPost_triangle['vert_position'] .'-style: solid;
		border-'. $pPost_triangle['vert_position'] .'-color: '. royal_hex2rgba( $pPage_post['bg_col'], $pPage_post['bg_col_tr'] ) .';
		border-right-width: '. $pPost_triangle['width'] .'px;
		border-right-style: solid;
		border-right-color: transparent;
		border-left-width: '. $pPost_triangle['width'] .'px;
		border-left-style: solid;
		border-left-color: transparent;
		left: '. $pPost_triangle['horz_position'] .'%;
	}';



/* ----------------- Post Format Icons General Options ----------------- */

	if ( $pPost_formats['label'] === false ) {
		$css .= '.portfolio-post .post-format-icon {
			display: none;
		}';		
	}

	if ( $pPost_formats['position'] === 'top-left' ) {
		$css .= '.portfolio-post .post-format-icon {
			top: 10px;
			left: 10px;
		}';
	} elseif ( $pPost_formats['position'] === 'top-right' ) {
		$css .= '.portfolio-post .post-format-icon {
			top: 10px;
			right: 10px;
		}';
	} elseif ( $pPost_formats['position'] === 'bottom-left' ) {
		$css .= '.portfolio-post .post-format-icon {
			bottom: 10px;
			left: 10px;
		}';
	} elseif ( $pPost_formats['position'] === 'bottom-right' ) {
		$css .= '.portfolio-post .post-format-icon {
			bottom: 10px;
			right: 10px;
		}';
	} else {
		$css .= '.portfolio-post .post-format-icon {
			top: 50%;
			left: 50%;
			margin-top: -'. ( $pPost_formats['height'] / 2 ) .'px;
			margin-left: -'. ( $pPost_formats['width'] / 2 ) .'px;
		}';
	}


/* ----------------- Post Format Icons Spacing Options ----------------- */

	$css .= '.portfolio-post .post-format-icon {
		width: '. $pPost_formats['width'] .'px;
		height: '. $pPost_formats['height'] .'px;
		line-height: '. $pPost_formats['height'] .'px;
	}';


/* ----------------- Post Format Icons Styling Options ----------------- */

	$css .= '.portfolio-post .post-format-icon {
		background-color: '. royal_hex2rgba( $pPost_formats['bg_col'], $pPost_formats['bg_col_tr'] ) .';
		color: '. $pPost_formats['txt_col'] .';
	}';

	$css .= royal_radius( '.portfolio-post .post-format-icon', array(
		'label'		=> $pPost_formats['radius_label'],
		'radius'	=> $pPost_formats['radius']
	) );

	$css .= royal_shadows( '.portfolio-post .post-format-icon', array(
		'label'			=> $pPost_formats['shadow_label'],
		'horizontal' 	=> $pPost_formats['shad_h'],
		'vertical' 		=> $pPost_formats['shad_v'],
		'blur' 			=> $pPost_formats['shad_bl'],
		'spread' 		=> $pPost_formats['shad_sp'],
		'color' 		=> $pPost_formats['shad_col'],
		'transparency' 	=> $pPost_formats['shad_col_tr']
	) );


/* ----------------- Post Format Icons Font Options ----------------- */

	$css .= '.portfolio-post .post-format-icon {
		font-size: '. $pPost_formats['icon_size'] .'px;
	}';



/* ----------------- Image Effects General Options ----------------- */

	if ( $pPost_effects['overlay_label'] === false ) {
		$css .= '.portfolio-post .image-overlay {
			display: none;
		}';
	}

	$css .= '
		.portfolio-post .image-overlay,
		.portfolio-post .image-overlay .fa {
			-webkit-transition: opacity '. $pPost_effects['overlay_trans'] .'ms ease 0s, background-color '. $pPost_effects['overlay_trans'] .'ms ease 0s;
			transition: opacity '. $pPost_effects['overlay_trans'] .'ms ease 0s, background-color '. $pPost_effects['overlay_trans'] .'ms ease 0s;
		}
	';

	if ( $pPost_effects['zoom_label'] === true ) {

		if ( $pPost_effects['rotate'] === true ) {
			$rotate = 'rotate(5deg)';
		} else {
			$rotate = '';
		}

		if ( $pPost_effects['zoom_reverse'] === true ) {

			$css .= '.portfolio-post .post-media img {
			    -webkit-transform: scale( '. $pPost_effects['zoom_rate'] .', '. $pPost_effects['zoom_rate'] .' );
			    transform: scale( '. $pPost_effects['zoom_rate'] .', '. $pPost_effects['zoom_rate'] .' );
			}';

			$css .= '.portfolio-post .post-media:hover img {
			    -webkit-transform: scale( 1, 1 ) '. $rotate .';
			    transform: scale( 1, 1 ) '. $rotate .';
			}';
		} else {
			$css .= '.portfolio-post .post-media-in-wrap:hover img {
			    -webkit-transform: scale( '. $pPost_effects['zoom_rate'] .', '. $pPost_effects['zoom_rate'] .' ) '. $rotate .';
			    transform: scale( '. $pPost_effects['zoom_rate'] .', '. $pPost_effects['zoom_rate'] .' ) '. $rotate .';
			}';
		}

		$css .= '.portfolio-post .post-media img {
			-webkit-transition: -webkit-transform '. $pPost_effects['zoom_trans'] .'ms ease 0s;
			transition: transform '. $pPost_effects['zoom_trans'] .'ms ease 0s;
		}';

	}


/* ----------------- Image Effects Styling Options ----------------- */

	$css .= '.portfolio-post .image-overlay {
		background-color: '. royal_hex2rgba( $pPost_effects['color'], $pPost_effects['col_tr'] ) .';
	}';

	$css .= '.portfolio-post .post-media:hover .image-overlay {
		background-color: '. royal_hex2rgba( $pPost_effects['hcol'], $pPost_effects['hcol_tr'] ) .';
	}';

	$css .= '.portfolio-post .image-overlay .fa {
		color: '. $pPost_effects['txt_hcol'] .';
	}';


/* ----------------- Image Effects Font Options ----------------- */

	$css .= '.portfolio-post .image-overlay .fa {
		font-size: '. $pPost_effects['icon_size'] .'px;
	}';



/*
***************************************************************
* #Portfolio Single
***************************************************************
*/

/* ----------------- Header General Options ----------------- */

	$css .= '.portfolio-single-header .title-and-meta {
		text-align: '. $pSingle_header['align'] .';
	}';
	
	if ( $pSingle_header['display_date'] === false ) {
		$css .= '.portfolio-single-header .post-date {
			display: none;
		}';
	}

	if ( $pSingle_header['display_cats'] === false ) {
		$css .= '.portfolio-single-header .post-categories {
			display: none;
		}';
	}

	if ( $pSingle_header['display_comments'] === false ) {
		$css .= '.portfolio-single-header .post-comments-wrap {
			display: none;
		}';
	}

	if ( $pSingle_header['display_author'] === false ) {
		$css .= '.portfolio-single-header .posted-by {
			display: none;
		}';
	}



/* ----------------- Navigation General Options ----------------- */

	if ( $pSingle_nav['position'] === 'sharing' && $pSingle_nav['label'] === true ) {

		$css .= '.single-royal_portfolio .single-socials-wrap {
			width: -webkit-calc(100% - '. ( $pSingle_nav['width'] * 2 ) .'px);
			width: calc(100% - '. ( $pSingle_nav['width'] * 2 ) .'px);
			line-height: '. $pSingle_nav['height'] .'px;
		}';

		$css .= '
			.project-info-sharing.single-royal_portfolio .single-socials-wrap,
			.hide-single-sharing-p.single-royal_portfolio .single-socials-wrap {
				height: '. $pSingle_nav['height'] .'px;
			}
		';

	}

	$css .= '
		.single-royal_portfolio.sharing-nxt-prev-p .single-post-sharing .previous-post,
		.single-royal_portfolio.sharing-nxt-prev-p .single-post-sharing .next-post {
			top: '. $pSingle_share['padding_tp'] .'px;
		}
	';


/* ----------------- Navigation Spacing Options ----------------- */

	$css .= '
		.single-royal_portfolio .next-post,
		.single-royal_portfolio .previous-post {
			width: '. $pSingle_nav['width'] .'px;
			height: '. $pSingle_nav['height'] .'px;
		}
	';

	$css .= '
		.single-royal_portfolio.side-nxt-prev-p .portfolio-single > .previous-post,
		.single-royal_portfolio.side-nxt-prev-p .portfolio-single > .next-post {
			margin-top: -'. ( $pSingle_nav['height'] / 2 ) .'px;
		}
	';

	$css .= '.single-royal_portfolio.side-nxt-prev-p .portfolio-single > .previous-post img {
		left: '. $pSingle_nav['width'] .'px;
		width: '. $pSingle_nav['height'] .'px;
		height: '. $pSingle_nav['height'] .'px;
	}';

	$css .= '.single-royal_portfolio.side-nxt-prev-p .portfolio-single > .next-post img {
		right: '. $pSingle_nav['width'] .'px;
		width: '. $pSingle_nav['height'] .'px;
		height: '. $pSingle_nav['height'] .'px;
	}';

	if ( $pSingle_nav['border_label'] === true ) {
		$css .= '
			.single-royal_portfolio .next-post,
			.single-royal_portfolio .previous-post {
				line-height: '. ( $pSingle_nav['height'] - $pSingle_nav['border_size'] * 2 ) .'px;
			}
		';
	} else {
		$css .= '
			.single-royal_portfolio .next-post,
			.single-royal_portfolio .previous-post {
				line-height: '. $pSingle_nav['height'] .'px;
			}
		';
	}

	$css .= '.single-royal_portfolio .nxt-prev-post {
		margin-top: '. $pSingle_nav['margin_tp'] .'px;
	}';

	$css .= '.single-royal_portfolio .previous-post {
		margin-right: '. $pSingle_nav['space_between'] .'px;
	}';


/* ----------------- Navigation Styling Options ----------------- */

	$css .= '
		.single-royal_portfolio .next-post,
		.single-royal_portfolio .previous-post {
			background-color: '. royal_hex2rgba( $pSingle_nav['bg_col'], $pSingle_nav['bg_col_tr'] ) .';
			color: '. $pSingle_nav['txt_col'] .';
		}
	';

	$css .= '
		.single-royal_portfolio .next-post:hover,
		.single-royal_portfolio .previous-post:hover,
		.single-royal_portfolio .portfolio-single .no-nxt-prev {
			background-color: '. royal_hex2rgba( $pSingle_nav['bg_hcol'], $pSingle_nav['bg_hcol_tr'] ) .';
			color: '. $pSingle_nav['txt_hcol'] .';
			border-color: '. $pSingle_nav['bd_hcol'] .';
		}
	';

	$css .= royal_border_1x_all( '.single-royal_portfolio .next-post, .single-royal_portfolio .previous-post', array(
		'label'	=> $pSingle_nav['border_label'],
		'size' 	=> $pSingle_nav['border_size'],
		'style' => $pSingle_nav['border_style'],
		'color' => $pSingle_nav['border_color']
	) );

	$css .= royal_shadows( '.single-royal_portfolio .next-post, .single-royal_portfolio .previous-post', array(
		'label'			=> $pSingle_nav['shadow_label'],
		'horizontal' 	=> $pSingle_nav['shad_h'],
		'vertical' 		=> $pSingle_nav['shad_v'],
		'blur' 			=> $pSingle_nav['shad_bl'],
		'spread' 		=> $pSingle_nav['shad_sp'],
		'color' 		=> $pSingle_nav['shad_col'],
		'transparency' 	=> $pSingle_nav['shad_col_tr'],
		'inset'			=> $pSingle_nav['shad_in']
	) );

	$css .= royal_radius( '.single-royal_portfolio .next-post, .single-royal_portfolio .previous-post', array(
		'label'		=> $pSingle_nav['radius_label'],
		'radius'	=> $pSingle_nav['radius'],
		'ext'		=> true
	) );


/* ----------------- Navigation Font Options ----------------- */

	$css .= '
		.single-royal_portfolio .next-post,
		.single-royal_portfolio .previous-post {
			font-size: '. $pSingle_nav['font_size'] .'px;
		}
	';



/* ----------------- Sharing General Options ----------------- */

	if ( $pSingle_share['label'] === false ) {
		$css .= '.portfolio-single .single-post-sharing {
			display: none;
		}';
	}

	if ( $pSingle_share['position'] === 'content' ) {
		$css .= '.info-sharing {
			display: none;
		}';
	} else {
		$css .= '.portfolio-single .single-socials-wrap span {
			display: none;
		}';
	}

	if ( $pSingle_share['sharing_label'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap span,
			.info-sharing {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_face'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(1),
			.info-sharing a:nth-child(1) {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_twit'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(2),
			.info-sharing a:nth-child(2) {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_gplus'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(3),
			.info-sharing a:nth-child(3) {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_linkin'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(4),
			.info-sharing a:nth-child(4) {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_pint'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(5),
			.info-sharing a:nth-child(5) {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_tumblr'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(6),
			.info-sharing a:nth-child(6) {
				display: none;
			}
		';
	}

	if ( $pSingle_share['share_reddit'] === false ) {
		$css .= '
			.portfolio-single .single-socials-wrap a:nth-child(7),
			.info-sharing a:nth-child(7) {
				display: none;
			}
		';
	}

		$css .= '.portfolio-single .single-socials-wrap {
			text-align: '. $pSingle_share['align'] .';
		}';


/* ----------------- Sharing Spacing Options ----------------- */

	$css .= '.portfolio-single .single-post-sharing {
		margin-top: '. $pSingle_share['margin_tp'] .'px;
		padding-top: '. $pSingle_share['padding_tp'] .'px;
	}';


/* ----------------- Sharing Styling Options ----------------- */

	$css .= royal_border_1x_no_color( '.portfolio-single .single-post-sharing', 'top', array(
		'label' => $pSingle_share['border_label'],
		'size' 	=> $pSingle_share['bd_size_tp'],
		'style' => $pSingle_share['bd_style_tp']
	) );



/* ----------------- Project Info General Options ----------------- */

	$css .= '.proj-info-title {
		text-align: '. $pSingle_project['align'] .';
	}';

	if ( $pSingle_project['list_icons'] === false ) {
		$css .= '.project-info .project-details strong i {
			display: none;
		}';
	}


/* ----------------- Project Info Spacing Options ----------------- */

	$css .= '
		.project-info-right .project-info,
		.project-info-below-right .project-info {
			width: '. $pSingle_project['width'] .'px;
			margin-left: -webkit-calc(100% - '. $pSingle_project['width'] .'px);
			margin-left: calc(100% - '. $pSingle_project['width'] .'px);
		}
	';

	$css .= '
	.project-info-right.single-royal_portfolio .single-wrap,
	.project-info-below-right.single-royal_portfolio .single-content-wrap,
	.project-info-below-right.single-header-below-p .portfolio-single-header {
		width: -webkit-calc(100% - '. ( $pSingle_project['width'] + $pSingle_project['margin_lt'] ) .'px);
		width: calc(100% - '. ( $pSingle_project['width'] + $pSingle_project['margin_lt'] ) .'px);
	}';

	$css .= '.project-details > li {
		padding-top: '. $pSingle_project['gutter_vert'] .'px;
		padding-bottom: '. $pSingle_project['gutter_vert'] .'px;
	}';


/* ----------------- Project Info Styling Options ----------------- */

	$css .= royal_border_4x( '.project-info', array(
		'label'			=> $pSingle_project['border_label'],
		'top_size' 		=> $pSingle_project['bd_size_tp'],
		'top_style' 	=> $pSingle_project['bd_style_tp'],
		'top_color' 	=> $pSingle_project['bd_col_tp'],
		'right_size' 	=> $pSingle_project['bd_size_rt'],
		'right_style' 	=> $pSingle_project['bd_style_rt'],
		'right_color' 	=> $pSingle_project['bd_col_rt'],
		'bottom_size' 	=> $pSingle_project['bd_size_bt'],
		'bottom_style' 	=> $pSingle_project['bd_style_bt'],
		'bottom_color' 	=> $pSingle_project['bd_col_bt'],
		'left_size' 	=> $pSingle_project['bd_size_lt'],
		'left_style' 	=> $pSingle_project['bd_style_lt'],
		'left_color' 	=> $pSingle_project['bd_col_lt']
	) );

	$css .= royal_border_1x_no_color( '.project-details>li', 'bottom', array(
		'label' => $pSingle_project['list_border_label'],
		'size' 	=> $pSingle_project['list_bd_size'],
		'style' => $pSingle_project['list_bd_style']
	) );



/*
***************************************************************
* #Gallery
***************************************************************
*/


/* ----------------- Slideshow Caption General Options ----------------- */

	if ( $slideshow_caption['label'] === false ) {
		$css .= '.slideshow-caption {
			display: none;
		}';
	}

	$css .= '.slideshow-caption {
		width: '. $slideshow_caption['width'] .';
		text-align: '. $slideshow_caption['align'] .';
	}';

	if ( $slideshow_caption['width'] === 'auto' &&  $slideshow_caption['align'] === 'left' ) {
		$css .= '.slideshow-caption {
			left: 0;
		}';
	} elseif ( $slideshow_caption['width'] === 'auto' &&  $slideshow_caption['align'] === 'right' ) {
		$css .= '.slideshow-caption {
			right: 0;
		}';
	}

	if ( $slideshow_caption['position'] === 'top' ) {
		$css .= '.slideshow-caption {
			top: 0;
		}';
	} elseif ( $slideshow_caption['position'] === 'bottom' ) {
		if ( $gallery_nav['label'] === true && $gallery_nav['position'] === 'inside' ) {
			$css .= '.slideshow-caption {
				bottom: '. (  $gallery_nav['height'] + $gallery_nav['padding_tp'] + $gallery_nav['padding_bt'] ) .'px;
			}';
		} else {
			$css .= '.slideshow-caption {
				bottom: 0;
			}';
		}

	}


/* ----------------- Slideshow Caption Spacing Options ----------------- */

	$css .= royal_slider_4x( '.slideshow-caption', 'padding', array(
		'top' 	 => $slideshow_caption['padding_tp'],
		'right'  => $slideshow_caption['padding_rt'],
		'bottom' => $slideshow_caption['padding_bt'],
		'left' 	 => $slideshow_caption['padding_lt']
	) );


/* ----------------- Slideshow Caption Styling Options ----------------- */

	$css .= '.slideshow-caption {
		background-color: '. royal_hex2rgba( $slideshow_caption['bg_color'], $slideshow_caption['bg_color_tr'] ) .';
		color: '. $slideshow_caption['text_color'] .';
	}';




/* ----------------- Stacked Caption General Options ----------------- */

	if ( $stacked_caption['label'] === false ) {
		$css .= '.stacked-caption span {
			display: none;
		}';
	}

	$css .= '.stacked-caption {
		text-align: '. $stacked_caption['align'] .';
	}';


/* ----------------- Stacked Caption Spacing Options ----------------- */

	if ( $stacked_caption['gutter'] == 0 ) {
		$css .= '.stacked-caption {
			border: none;
		}';	
	}

	if ( $stacked_caption['position'] === 'top' ) {
		$css .= '.stacked-caption {
			margin-top: '. $stacked_caption['gutter'] .'px;
		}';

		$css .= '.gallery-slideshow .gallery-slide:first-of-type .stacked-caption {
			margin-top: 0;
		}';
	} else {
		$css .= '.stacked-caption {
			margin-bottom: '. $stacked_caption['gutter'] .'px;
		}';

		$css .= '.gallery-slideshow .gallery-slide:last-of-type .stacked-caption {
			margin-bottom: 0;
		}';
	}



/* ----------------- Navigation General Options ----------------- */

	if ( $gallery_nav['label'] === false ) {
		$css .= '.gallery-nav {
			display: none;
		}';
	}

	$css .= '.gallery-nav {
		text-align: '. $gallery_nav['align'] .';
	}';

	if ( $gallery_nav['position'] === 'inside' ) {
		$css .= '.gallery-nav {
			margin-top: -'. (  $gallery_nav['height'] + $gallery_nav['padding_tp'] + $gallery_nav['padding_bt'] ) .'px;
		}';
	}


/* ----------------- Navigation Spacing Options ----------------- */

	$css .= royal_slider_4x( '.gallery-nav', 'padding', array(
		'top' 	 => $gallery_nav['padding_tp'],
		'right'  => $gallery_nav['padding_rt'],
		'bottom' => $gallery_nav['padding_bt'],
		'left' 	 => $gallery_nav['padding_lt']
	) );

	$css .= '.gallery-nav span {
		width: '. $gallery_nav['width'] .'px;
		height: '. $gallery_nav['height'] .'px;
		font-size: '. $gallery_nav['height'] .'px;
		margin-right: '. $gallery_nav['gutter'] .'px;
	}';


/* ----------------- Navigation Styling Options ----------------- */

	$css .= '.gallery-nav {
		background-color: '. royal_hex2rgba( $gallery_nav['bg_color'], $gallery_nav['bg_color_tr'] ) .';
	}';

	$css .= '.gallery-nav span {
		background-color: '. $gallery_nav['color'] .';
	}';

	$css .= '
		.gallery-nav span:hover,
		.gallery-slideshow .cycle-pager-active {
			background-color: '. $gallery_nav['hover_color'] .';
		}
	';

	$css .= royal_radius( '.gallery-nav span', array(
		'label'		=> $gallery_nav['radius_label'],
		'radius'	=> $gallery_nav['radius']
	) );



/* ----------------- Arrows General Options ----------------- */

	if ( $gallery_arrows['label'] === false ) {
		$css .= '.gallery-arrow {
			display: none;
		}';
	}

	$css .= '.gallery-arrow {
		opacity: '. $gallery_arrows['default'] .';
	}';


/* ----------------- Arrows Spacing Options ----------------- */

	$css .= '.gallery-arrow {
		width: '. $gallery_arrows['width'] .'px;
		height: '. $gallery_arrows['height'] .'px;
		line-height: '. $gallery_arrows['height'] .'px;
		margin-top: -'. ( $gallery_arrows['height'] / 2 ) .'px;
	}';


/* ----------------- Arrows Styling Options ----------------- */

	$css .= '.gallery-arrow {
		background-color: '. royal_hex2rgba( $gallery_arrows['color'], $gallery_arrows['color_tr'] ) .';
		color: '. $gallery_arrows['icon_color'] .';
	}';


/* ----------------- Arrows Font Options ----------------- */

	$css .= '.gallery-arrow {
		font-size: '. $gallery_arrows['icon_size'] .'px;
	}';



/* ----------------- Lightbox Overlay General Options ----------------- */

	if ( $gallery_lightbox['label'] === false ) {
		$css .= '.lightbox-overlay .image-overlay {
			display: none;
		}';
	}


/* ----------------- Lightbox Overlay Styling Options ----------------- */

	$css .= '.lightbox-overlay .image-overlay .fa {
		color: '. $gallery_lightbox['txt_hcol'] .';
	}';

	$css .= '.lightbox-overlay .image-overlay {
		background-color: '. royal_hex2rgba( $gallery_lightbox['bg_hcol'], $gallery_lightbox['bg_hcol_tr'] ) .';
	}';


/* ----------------- Lightbox Overlay Font Options ----------------- */

	$css .= '.lightbox-overlay .image-overlay .fa {
		font-size: '. $gallery_lightbox['icon_size'] .'px;
	}';



/* ----------------- Default Shortcode General Options ----------------- */

	if ( $gallery_default['captions'] === false ) {
		$css .= '.royal-gallery figcaption {
			display: none;
		}';
	}


/* ----------------- Default Shortcode Spacing Options ----------------- */

	$css .= '.royal-gallery .gallery-item {
		margin-right: '. $gallery_default['gutter_horz'] .'px;
	    margin-bottom: '. $gallery_default['gutter_vert'] .'px;
	}';

	$css .= '.gallery-columns-2 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 1)) / 2);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 1)) / 2);
	}';

	$css .= '.gallery-columns-3 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 2)) / 3);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 2)) / 3);
	}';

	$css .= '.gallery-columns-4 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 3)) / 4);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 3)) / 4);
	}';

	$css .= '.gallery-columns-5 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 4)) / 5);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 4)) / 5);
	}';

	$css .= '.gallery-columns-6 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 5)) / 6);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 5)) / 6);
	}';

	$css .= '.gallery-columns-7 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 6)) / 7);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 6)) / 7);
	}';

	$css .= '.gallery-columns-8 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 7)) / 8);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 7)) / 8);
	}';

	$css .= '.gallery-columns-9 .gallery-item {
		width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 8)) / 9);
		width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 8)) / 9);
	}';

	$css .= '
		@media screen and ( min-width: 950px ) {
		    .gallery-columns-2 .gallery-item:nth-child(2n+2),
		    .gallery-columns-3 .gallery-item:nth-child(3n+3),
		    .gallery-columns-4 .gallery-item:nth-child(4n+4),
		    .gallery-columns-5 .gallery-item:nth-child(5n+5),
		    .gallery-columns-6 .gallery-item:nth-child(6n+6),
		    .gallery-columns-7 .gallery-item:nth-child(7n+7),
		    .gallery-columns-8 .gallery-item:nth-child(8n+8),
		    .gallery-columns-9 .gallery-item:nth-child(9n+9) {
		    	margin-right: 0 !important;
		    }

		    .gallery-columns-2 .gallery-item:nth-child(2n+2) + li,
		    .gallery-columns-3 .gallery-item:nth-child(3n+3) + li,
		    .gallery-columns-4 .gallery-item:nth-child(4n+4) + li,
		    .gallery-columns-5 .gallery-item:nth-child(5n+5) + li,
		    .gallery-columns-6 .gallery-item:nth-child(6n+6) + li,
		    .gallery-columns-7 .gallery-item:nth-child(7n+7) + li,
		    .gallery-columns-8 .gallery-item:nth-child(8n+8) + li,
		    .gallery-columns-9 .gallery-item:nth-child(9n+9) + li {
		    	clear: both;
		    }
		}

		@media screen and ( max-width: 950px ) {

			.royal-gallery .gallery-item {
				width: -webkit-calc((100% - ('. $gallery_default['gutter_horz'] .'px * 1)) / 2) !important;
				width: calc((100% - ('. $gallery_default['gutter_horz'] .'px * 1)) / 2) !important;
			}

		    .royal-gallery .gallery-item:nth-child(2n+2) {
		    	margin-right: 0 !important;
		    }
		    
		    .royal-gallery.gallery-columns-1 .gallery-item {
				width: 100% !important;
			}

		}

		@media screen and ( max-width: 480px ) {

			.royal-gallery .gallery-item {
				width: 100% !important;
				float: none !important;
			}

		}
	';


/* ----------------- Default Shortcode Styling Options ----------------- */

	$css .= royal_shadows( '.royal-gallery .gallery-item', array(
		'label'			=> $gallery_default['shadow_label'],
		'horizontal' 	=> $gallery_default['shad_h'],
		'vertical' 		=> $gallery_default['shad_v'],
		'blur' 			=> $gallery_default['shad_bl'],
		'spread' 		=> $gallery_default['shad_sp'],
		'color' 		=> $gallery_default['shad_col'],
		'transparency' 	=> $gallery_default['shad_col_tr']
	) );



/*
***************************************************************
* #Similar Posts
***************************************************************
*/

/* ----------------- Spacing Options ----------------- */

	$css .= '.jcarousel-wrap {
		padding-left: '. $similars_general['padding'] .'px;
		padding-right: '. $similars_general['padding'] .'px;
	}';

	$css .= '.jcarousel li {
		padding: 0 '. $similars_general['image_gutter'] .'px;
	}';

	$css .= '.jcarousel-prev {
		left: '. $similars_general['image_gutter'] .'px;
	}';

	$css .= '.jcarousel-next {
		right: '. $similars_general['image_gutter'] .'px;
	}';


/* ----------------- Styling Options ----------------- */

	if ( $similars_general['border_label'] === true ) {
		$css .= '.jcarousel .image-overlay-wrap {
			border: '. $similars_general['border_size'] .'px '. $similars_general['border_style'] .' '. $similars_general['border_color'] .';
		}';
	}

	$css .= royal_radius( '.jcarousel .image-overlay-wrap', array(
		'label'		=> $similars_general['radius_label'],
		'radius'	=> $similars_general['radius']
	) );




/* ----------------- Title General Options ----------------- */

	if ( trim( $similars_title['blog_text'] ) === '' ) {
		$css .= '.single-post .similar-items h3 {
			display: none;
		}';
	}

	if ( trim( $similars_title['portfolio_text'] ) === '' ) {
		$css .= '.single-royal_portfolio .similar-items h3 {
			display: none;
		}';
	}

	$css .= '.similar-items h3 {
		text-align: '. $similars_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.similar-items h3 span {
		padding-bottom: '. $similars_title['padding_bt'] .'px;
		margin-bottom: '. $similars_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= royal_border_1x_no_color( '.similar-items h3 span', 'bottom', array(
		'label' => $similars_title['border_label'],
		'size' 	=> $similars_title['bd_size_bt'],
		'style' => $similars_title['bd_style_bt']
	) );

	if ( $similars_title['bd_full_width'] === false ) {
		$css .= '.similar-items h3 span {
			display: inline-block;
		}';
	}



/* ----------------- Arrows General Options ----------------- */

	if ( $similars_arrows['label'] !== true ) {
		$css .= '
			.jcarousel-prev,
			.jcarousel-next {
				display: none;
			}
		';
	}


/* ----------------- Arrows Spacing Options ----------------- */

	$css .= '
		.jcarousel-prev .fa,
		.jcarousel-next .fa {
			width: '. $similars_arrows['width'] .'px;
			height: '. $similars_arrows['height'] .'px;
			line-height: '. $similars_arrows['height'] .'px;
		}
	';

	$css .= '
		.jcarousel-prev,
		.jcarousel-next {
			margin-top: -'. ( $similars_arrows['height'] / 2 ) .'px;
		}
	';


/* ----------------- Arrows Styling Options ----------------- */

	$css .= '
		.jcarousel-prev .fa,
		.jcarousel-next .fa {
			background-color: '. royal_hex2rgba( $similars_arrows['bg_col'], $similars_arrows['bg_col_tr'] ) .';
			color: '. $similars_arrows['txt_col'] .';
		}
	';

	$css .= '
		.jcarousel-prev:hover .fa,
		.jcarousel-next:hover .fa {
			background-color: '. royal_hex2rgba( $similars_arrows['bg_hcol'], $similars_arrows['bg_hcol_tr'] ) .';
			color: '. $similars_arrows['txt_hcol'] .';
			border-color: '. $similars_arrows['bd_hcol'] .';
		}
	';

	$css .= royal_border_1x_all( '.jcarousel-prev .fa, .jcarousel-next .fa', array(
		'label'	=> $similars_arrows['border_label'],
		'size' 	=> $similars_arrows['bd_size_gen'],
		'style' => $similars_arrows['bd_style_gen'],
		'color' => $similars_arrows['bd_col_gen']
	) );

	$css .= royal_shadows( '.jcarousel-prev .fa, .jcarousel-next .fa', array(
		'label'			=> $similars_arrows['shadow_label'],
		'horizontal' 	=> $similars_arrows['shad_h'],
		'vertical' 		=> $similars_arrows['shad_v'],
		'blur' 			=> $similars_arrows['shad_bl'],
		'spread' 		=> $similars_arrows['shad_sp'],
		'color' 		=> $similars_arrows['shad_col'],
		'transparency' 	=> $similars_arrows['shad_col_tr'],
		'inset'			=> $similars_arrows['shad_in']
	) );

	$css .= royal_radius( '.jcarousel-prev .fa, .jcarousel-next .fa', array(
		'label'		=> $similars_arrows['radius_label'],
		'radius'	=> $similars_arrows['radius']
	) );


/* ----------------- Arrows Font Options ----------------- */

	$css .= '
		.jcarousel-prev .fa,
		.jcarousel-next .fa {
			font-size: '. $similars_arrows['font_size'] .'px;
		}
	';


/* ----------------- Image Overlay Styling Options ----------------- */

	$css .= '.jcarousel .image-overlay-wrap .image-overlay {
		background-color: '. royal_hex2rgba( $similars_overlay['bg_hcol'], $similars_overlay['bg_hcol_tr'] ) .';
	}';

	$css .= '.jcarousel .image-overlay-wrap h5 {
		background-color: '. royal_hex2rgba( $similars_overlay['txt_bg_hcol'], $similars_overlay['txt_bg_hcol_tr'] ) .';
		color: '. $similars_overlay['txt_hcol'] .';
	}';

	if ( $similars_overlay['reverse'] === true ) {
		$css .= '.jcarousel .image-overlay-wrap .image-overlay {
			opacity: 1;
		}';

		$css .= '.jcarousel .image-overlay-wrap:hover .image-overlay {
			opacity: 0;
		}';
	}



/*
***************************************************************
* #Comments
***************************************************************
*/

/* ----------------- General Options ----------------- */

	$css .= '.comments-area-wrap {
		max-width: '. $comments_general['max_width'] .'px;
	}';


/* ----------------- Spacing Options ----------------- */

	$css .= '.comments-area {
		padding-bottom: '. $comments_general['padding_bt'] .'px;
		margin-bottom: '. $comments_general['margin_bt'] .'px;
	}';


/* ----------------- Styling Options ----------------- */

	$css .= royal_border_1x_no_color( '.comments-area', 'bottom', array(
		'label' => $comments_general['border_label'],
		'size' 	=> $comments_general['bd_size_bt'],
		'style' => $comments_general['bd_style_bt']
	) );



/* ----------------- Counter General Options ----------------- */

	$css .= '.comments-area-wrap .comments-count {
		text-align: '. $comments_counter['align'] .';
	}';


/* ----------------- Counter Spacing Options ----------------- */

	$css .= '.comments-area-wrap .comments-count span {
		padding-bottom: '. $comments_counter['padding_bt'] .'px;
		margin-bottom: '. $comments_counter['margin_bt'] .'px;
	}';


/* ----------------- Counter Styling Options ----------------- */

	$css .= royal_border_1x_no_color( '.comments-area-wrap .comments-count span', 'bottom', array(
		'label' => $comments_counter['border_label'],
		'size' 	=> $comments_counter['bd_size_bt'],
		'style' => $comments_counter['bd_style_bt']
	) );

	if ( $comments_counter['bd_full_width']  === false ) {
		$css .= '.comments-area-wrap .comments-count span {
			display: inline-block;
		}';
	}



/* ----------------- Author Image Spacing Options ----------------- */

	$css .= '.comment-content-wrap {
		margin-left: '. ( $comments_image['margin_rt'] + $comments_image['avatar_size'] ) .'px;
	}';

	$css .= '.children .comment-content-wrap {
		margin-left: '. ( $comments_image['margin_rt'] + $comments_image['avatar_size'] - 3 ) .'px;
	}';


/* ----------------- Author Image Styling Options ----------------- */

	$css .= royal_radius( '.comment-author-img', array(
		'label'		=> $comments_image['radius_label'],
		'radius'	=> $comments_image['radius']
	) );

	$css .= royal_shadows( '.comment-author-img', array(
		'label'			=> $comments_image['shadow_label'],
		'horizontal' 	=> $comments_image['shad_h'],
		'vertical' 		=> $comments_image['shad_v'],
		'blur' 			=> $comments_image['shad_bl'],
		'spread' 		=> $comments_image['shad_sp'],
		'color' 		=> $comments_image['shad_col'],
		'transparency' 	=> $comments_image['shad_col_tr']
	) );



/* ----------------- Content Spacing Options ----------------- */

	$css .= royal_slider_4x( '.comment-content-wrap', 'padding', array(
		'top' 	 => $comments_content['padding_tp'],
		'right'  => $comments_content['padding_rt'],
		'bottom' => $comments_content['padding_bt'],
		'left' 	 => $comments_content['padding_lt']
	) );

	$css .= '
		.comment,
		.pingback,
		.comments-wrap #respond {
			margin-bottom: '. $comments_content['gutter_vert'] .'px;
		}
	';


/* ----------------- Content Styling Options ----------------- */

	$css .= '.comment-content-wrap {
		background-color: '. $comments_content['bg_color'] .';
	}';

	$css .= '.bypostauthor .comment-content-wrap {
		background-color: '. $comments_content['author_bg_color'] .';
	}';

	$css .= royal_border_4x( '.comment-content-wrap', array(
		'label'			=> $comments_content['border_label'],
		'top_size' 		=> $comments_content['bd_size_tp'],
		'top_style' 	=> $comments_content['bd_style_tp'],
		'top_color' 	=> $comments_content['bd_col_tp'],
		'right_size' 	=> $comments_content['bd_size_rt'],
		'right_style' 	=> $comments_content['bd_style_rt'],
		'right_color' 	=> $comments_content['bd_col_rt'],
		'bottom_size' 	=> $comments_content['bd_size_bt'],
		'bottom_style' 	=> $comments_content['bd_style_bt'],
		'bottom_color' 	=> $comments_content['bd_col_bt'],
		'left_size' 	=> $comments_content['bd_size_lt'],
		'left_style' 	=> $comments_content['bd_style_lt'],
		'left_color' 	=> $comments_content['bd_col_lt']
	) );


	$css .= royal_radius( '.comment-content-wrap', array(
		'label'		=> $comments_content['radius_label'],
		'radius'	=> $comments_content['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.comment-content-wrap', array(
		'label'			=> $comments_content['shadow_label'],
		'horizontal' 	=> $comments_content['shad_h'],
		'vertical' 		=> $comments_content['shad_v'],
		'blur' 			=> $comments_content['shad_bl'],
		'spread' 		=> $comments_content['shad_sp'],
		'color' 		=> $comments_content['shad_col'],
		'transparency' 	=> $comments_content['shad_col_tr'],
		'inset'			=> $comments_content['shad_in']
	) );



/* ----------------- Reply Spacing Options ----------------- */

	$css .= '.comments-area-wrap .comment-reply-title {
		padding-bottom: '. $comments_reply['padding_bt'] .'px;
		margin-bottom: '. $comments_reply['margin_bt'] .'px;
	}';


/* ----------------- Reply Styling Options ----------------- */

	$css .= royal_border_1x_no_color( '.comments-area-wrap .comment-reply-title', 'bottom', array(
		'label' => $comments_reply['border_label'],
		'size' 	=> $comments_reply['bd_size_bt'],
		'style' => $comments_reply['bd_style_bt']
	) );

	if ( $comments_reply['bd_full_width']  === false ) {
		$css .= '.comments-area-wrap .comment-reply-title {
			display: inline-block;
		}';
	}



/*
***************************************************************
* #Inputs
***************************************************************
*/

/* ----------------- General Options ----------------- */

	if ( $inputs_general['layout'] === 'half' ) {
		$css .= '
			.comment-reply-title,
			.comment-form {
				display: inline-block;
				width: 50%;
			}
		';

		$css .= '
			.comment-respond,
			.rf-input {
				text-align: '. $inputs_general['align'] .';
			}
		';
	} elseif ( $inputs_general['layout'] === '3_half_1_full' ) {
		$css .= '.rf-input {
			display: block;
		}';

		$css .= '
			.pers-name,
			.pers-email,
			.pers-email + input {
				width: 50%;
			}
		';
	} elseif ( $inputs_general['layout'] === '2_half_2_full' ) {
		$css .= '.pers-name {
			float: left;
			margin-right: '. $inputs_general['gutter'] .'px;
		}';

		$css .= '
			.pers-name,
			.pers-email {
				width: -webkit-calc(50% - '. ( $inputs_general['gutter'] / 2 ) .'px);
				width: calc(50% - '. ( $inputs_general['gutter'] / 2 ) .'px);
			}
		';
	} elseif ( $inputs_general['layout'] === '3_third_1_full' ) {
		$css .= '
			.pers-name,
			.pers-email,
			.pers-email + input {
				float: left;
				width: -webkit-calc(33.3% - '. ( $inputs_general['gutter'] / 3 ) .'px);
				width: calc(33.3% - '. ( $inputs_general['gutter'] / 3 ) .'px);
			}
		';

		$css .= '
			.pers-name,
			.pers-email {
				margin-right: -webkit-calc('. $inputs_general['gutter'] .'px / '. '2);
				margin-right: calc('. $inputs_general['gutter'] .'px / '. '2);
			}
		';
	}


/* ----------------- Spacing Options ----------------- */

	$css .= royal_slider_4x(  '.rf-input', 'padding',  array(
		'top' 	 => $inputs_general['padding_tp'],
		'right'  => $inputs_general['padding_rt'],
		'bottom' => $inputs_general['padding_bt'],
		'left' 	 => $inputs_general['padding_lt']
	) );

	$css .= '
		.rf-input,
		.form-submit {
			margin-bottom: '. $inputs_general['gutter'] .'px;
		}
	';

	$css .= '
		.inner-content input[type="text"].rf-input {
			height: '. ( $typography_p['line_height'] + $inputs_general['padding_tp'] + $inputs_general['padding_bt'] ) .'px;
		}
	';

	$css .= '
		.inner-content textarea.rf-input {
			height: '. ( $typography_p['line_height'] * 8 + $inputs_general['padding_tp'] + $inputs_general['padding_bt'] ) .'px;
		}
	';


/* ----------------- Styling Options ----------------- */

	$css .= '.rf-input {
		background-color: '. $inputs_general['bg_col'] .';
	}';

	$css .= '.rf-input {
		color: '. $inputs_general['txt_col'] .';
	}';

	$css .= '
		.rf-error,
		.mail-error-txt {
			color: '. $inputs_general['error_col'] .';
			border-color: '. $inputs_general['error_col'] .' !important;
		}
	';	

	$css .= '.rf-input:focus {
		background-color: '. $inputs_general['bg_fcol'] .';
		border-color: '. $inputs_general['bd_fcol'] .';
	}';

	$css .= '.rf-input:focus {
		color: '. $inputs_general['txt_fcol'] .';
	}';

	$css .= royal_border_4x( '.rf-input', array(
		'label'			=> $inputs_general['border_label'],
		'top_size' 		=> $inputs_general['bd_size_tp'],
		'top_style' 	=> $inputs_general['bd_style_tp'],
		'top_color' 	=> $inputs_general['bd_col_tp'],
		'right_size' 	=> $inputs_general['bd_size_rt'],
		'right_style' 	=> $inputs_general['bd_style_rt'],
		'right_color' 	=> $inputs_general['bd_col_rt'],
		'bottom_size' 	=> $inputs_general['bd_size_bt'],
		'bottom_style' 	=> $inputs_general['bd_style_bt'],
		'bottom_color' 	=> $inputs_general['bd_col_bt'],
		'left_size' 	=> $inputs_general['bd_size_lt'],
		'left_style' 	=> $inputs_general['bd_style_lt'],
		'left_color' 	=> $inputs_general['bd_col_lt']
	) );


	$css .= royal_radius( '.rf-input', array(
		'label'		=> $inputs_general['radius_label'],
		'radius'	=> $inputs_general['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.rf-input', array(
		'label'			=> $inputs_general['shadow_label'],
		'horizontal' 	=> $inputs_general['shad_h'],
		'vertical' 		=> $inputs_general['shad_v'],
		'blur' 			=> $inputs_general['shad_bl'],
		'spread' 		=> $inputs_general['shad_sp'],
		'color' 		=> $inputs_general['shad_col'],
		'transparency' 	=> $inputs_general['shad_col_tr'],
		'inset'			=> $inputs_general['shad_in']
	) );




/* ----------------- Submit Button General Options ----------------- */

	$css .= '.form-submit {
		text-align: '. $inputs_submit['align'] .';
	}';

	$css .= '.submit-btn {
		width: '. $inputs_submit['style'] .';
	}';


/* ----------------- Submit Button Spacing Options ----------------- */

	$css .= royal_slider_4x( '.submit-btn', 'padding', array(
		'top' 	 => $inputs_submit['padding_tp'],
		'right'  => $inputs_submit['padding_rt'],
		'bottom' => $inputs_submit['padding_bt'],
		'left' 	 => $inputs_submit['padding_lt']
	) );


/* ----------------- Submit Button Styling Options ----------------- */

	$css .= '.submit-btn {
		background-color: '. royal_hex2rgba( $inputs_submit['bg_col'], $inputs_submit['bg_col_tr'] ) .';
		color: '. $inputs_submit['txt_col'] .';
	}';

	$css .= '.submit-btn:hover {
		background-color: '. royal_hex2rgba( $inputs_submit['bg_hcol'], $inputs_submit['bg_hcol_tr'] ) .';
		color: '. $inputs_submit['txt_hcol'] .';
		border-color: '. $inputs_submit['bd_hcol'] .';
	}';

	$css .= royal_border_4x( '.submit-btn', array(
		'label'			=> $inputs_submit['border_label'],
		'top_size' 		=> $inputs_submit['bd_size_tp'],
		'top_style' 	=> $inputs_submit['bd_style_tp'],
		'top_color' 	=> $inputs_submit['bd_col_tp'],
		'right_size' 	=> $inputs_submit['bd_size_rt'],
		'right_style' 	=> $inputs_submit['bd_style_rt'],
		'right_color' 	=> $inputs_submit['bd_col_rt'],
		'bottom_size' 	=> $inputs_submit['bd_size_bt'],
		'bottom_style' 	=> $inputs_submit['bd_style_bt'],
		'bottom_color' 	=> $inputs_submit['bd_col_bt'],
		'left_size' 	=> $inputs_submit['bd_size_lt'],
		'left_style' 	=> $inputs_submit['bd_style_lt'],
		'left_color' 	=> $inputs_submit['bd_col_lt']
	) );


	$css .= royal_radius( '.submit-btn', array(
		'label'		=> $inputs_submit['radius_label'],
		'radius'	=> $inputs_submit['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.submit-btn', array(
		'label'			=> $inputs_submit['shadow_label'],
		'horizontal' 	=> $inputs_submit['shad_h'],
		'vertical' 		=> $inputs_submit['shad_v'],
		'blur' 			=> $inputs_submit['shad_bl'],
		'spread' 		=> $inputs_submit['shad_sp'],
		'color' 		=> $inputs_submit['shad_col'],
		'transparency' 	=> $inputs_submit['shad_col_tr'],
		'inset'			=> $inputs_submit['shad_in']
	) );



/* ----------------- Search Spacing Options ----------------- */

	$css .= royal_slider_4x( '#s', 'padding',  array(
		'top' 	 => $inputs_search['padding_tp'],
		'right'  => $inputs_search['padding_rt'],
		'bottom' => $inputs_search['padding_bt'],
		'left' 	 => $inputs_search['padding_lt']
	) );

	$css .= '#s {
		padding-right: '. ( $inputs_search['padding_lt'] + $sWidgets_content['font_size'] ) .'px;
	}';

	$css .= '.top-nav-search-form #s {
		padding-right: '. $inputs_search['padding_rt'] .'px;
	}';

	$search_icon_top 	= ( $inputs_search['border_label'] === true ) ? $inputs_search['bd_size_tp'] : 0;
	$search_icon_right 	= ( $inputs_search['border_label'] === true ) ? $inputs_search['bd_size_rt'] : 0; 

	$css .= '.search-icon {
		top: '. ( $inputs_search['margin_tp'] + $inputs_search['padding_tp'] + $search_icon_top ) .'px;
		right: '. ( $inputs_search['padding_lt'] + $inputs_search['margin_rt'] + $search_icon_right ) .'px;
	}';

	$css .= '.top-nav-search-form .search-icon {
		right: '. $inputs_search['padding_rt'] .'px;
	}';

	$css .= '.widget_flickr > div {
		margin-top: '. $inputs_search['margin_tp'] .'px;
	}';

	$css .= '.widget_lsi_widget > ul {
		margin-top: '. $inputs_search['margin_tp'] .'px !important;
	}';

	$css .= royal_slider_4x( '.search-wrap', 'padding',  array(
		'top' 	 => $inputs_search['margin_tp'],
		'right'  => $inputs_search['margin_rt'],
		'bottom' => $inputs_search['margin_bt'],
		'left' 	 => $inputs_search['margin_lt']
	) );


/* ----------------- Search Styling Options ----------------- */

	$css .= '#s {
		background-color: '. $inputs_search['bg_col'] .';
	}';

	$css .= '
		#s,
		.search-icon {
			color: '. $inputs_search['txt_col'] .';
		}
	';

	$css .= '#s:focus {
		background-color: '. $inputs_search['bg_fcol'] .';
		border-color: '. $inputs_search['bd_fcol'] .';
	}';

	$css .= '
		#s:focus,
		#s:focus + .search-icon {
			color: '. $inputs_search['txt_fcol'] .';
		}
	';

	$css .= royal_border_4x( '#s', array(
		'label'			=> $inputs_search['border_label'],
		'top_size' 		=> $inputs_search['bd_size_tp'],
		'top_style' 	=> $inputs_search['bd_style_tp'],
		'top_color' 	=> $inputs_search['bd_col_tp'],
		'right_size' 	=> $inputs_search['bd_size_rt'],
		'right_style' 	=> $inputs_search['bd_style_rt'],
		'right_color' 	=> $inputs_search['bd_col_rt'],
		'bottom_size' 	=> $inputs_search['bd_size_bt'],
		'bottom_style' 	=> $inputs_search['bd_style_bt'],
		'bottom_color' 	=> $inputs_search['bd_col_bt'],
		'left_size' 	=> $inputs_search['bd_size_lt'],
		'left_style' 	=> $inputs_search['bd_style_lt'],
		'left_color' 	=> $inputs_search['bd_col_lt']
	) );


	$css .= royal_radius( '#s', array(
		'label'		=> $inputs_search['radius_label'],
		'radius'	=> $inputs_search['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '#s', array(
		'label'			=> $inputs_search['shadow_label'],
		'horizontal' 	=> $inputs_search['shad_h'],
		'vertical' 		=> $inputs_search['shad_v'],
		'blur' 			=> $inputs_search['shad_bl'],
		'spread' 		=> $inputs_search['shad_sp'],
		'color' 		=> $inputs_search['shad_col'],
		'transparency' 	=> $inputs_search['shad_col_tr'],
		'inset'			=> $inputs_search['shad_in']
	) );

	


/*
***************************************************************
* #Pagination
***************************************************************
*/

/* ----------------- Wrapper Spacing Options ----------------- */

	$css .= royal_slider_4x( '.pagination-wrap', 'padding', array(
		'top' 	 => $pagination['padding_tp'],
		'right'  => $pagination['padding_rt'],
		'bottom' => $pagination['padding_bt'],
		'left' 	 => $pagination['padding_lt']
	) );


/* ----------------- Wrapper Styling Options ----------------- */

	$css .= '.pagination-wrap, #infscr-loading {
		background-color: '. royal_hex2rgba( $pagination['bg_color'], $pagination['bg_color_tr'] ) .';
	}';

	$css .= royal_border_4x( '.pagination-wrap', array(
		'label'			=> $pagination['border_label'],
		'top_size' 		=> $pagination['bd_size_tp'],
		'top_style' 	=> $pagination['bd_style_tp'],
		'top_color' 	=> $pagination['bd_col_tp'],
		'right_size' 	=> $pagination['bd_size_rt'],
		'right_style' 	=> $pagination['bd_style_rt'],
		'right_color' 	=> $pagination['bd_col_rt'],
		'bottom_size' 	=> $pagination['bd_size_bt'],
		'bottom_style' 	=> $pagination['bd_style_bt'],
		'bottom_color' 	=> $pagination['bd_col_bt'],
		'left_size' 	=> $pagination['bd_size_lt'],
		'left_style' 	=> $pagination['bd_style_lt'],
		'left_color' 	=> $pagination['bd_col_lt']
	) );

	$css .= royal_radius( '.pagination-wrap', array(
		'label'		=> $pagination['radius_label'],
		'radius'	=> $pagination['radius'],
		'ext'		=> true
	) );


	$css .= royal_shadows( '.pagination-wrap', array(
		'label'			=> $pagination['shadow_label'],
		'horizontal' 	=> $pagination['shad_h'],
		'vertical' 		=> $pagination['shad_v'],
		'blur' 			=> $pagination['shad_bl'],
		'spread' 		=> $pagination['shad_sp'],
		'color' 		=> $pagination['shad_col'],
		'transparency' 	=> $pagination['shad_col_tr'],
		'inset'			=> $pagination['shad_in']
	) );



/* ----------------- Navigation General Options ----------------- */

	$css .= '.pagination-wrap {
		text-align: '. $pagination_nav['align'] .';
	}';


/* ----------------- Navigation Spacing Options ----------------- */

	$css .= '
		.pagination-wrap a,
		.pagination-wrap span {
			padding: '. $pagination_nav['padding_all'] .'px;
			margin-right: '. $pagination_nav['horz_gutter'] .'px;
		}
	';


/* ----------------- Navigation Styling Options ----------------- */

	$css .= '.pagination-wrap a {
		background-color: '. royal_hex2rgba( $pagination_nav['bg_col'], $pagination_nav['bg_col_tr'] ) .';
		color: '. $pagination_nav['txt_col'] .';
	}';

	$css .= '.infscr-center {
		color: '. $pagination_nav['txt_col'] .';
	}';

	$css .= royal_border_1x_all( '.pagination-wrap a, .pagination-wrap span', array(
		'label'	=> $pagination_nav['border_label'],
		'size' 	=> $pagination_nav['border_size'],
		'style' => $pagination_nav['border_style'],
		'color' => $pagination_nav['border_color']
	) );

	$css .= '
		.pagination-wrap a:hover,
		.pagination-wrap .current {
			background-color: '. royal_hex2rgba( $pagination_nav['bg_hcol'], $pagination_nav['bg_hcol_tr'] ) .';
			color: '. $pagination_nav['txt_hcol'] .';
			border-color: '. $pagination_nav['bd_hcol'] .';
		}
	';

	$css .= royal_radius( '.pagination-wrap a, .pagination-wrap span', array(
		'label'		=> $pagination_nav['radius_label'],
		'radius'	=> $pagination_nav['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.pagination-wrap a, .pagination-wrap span', array(
		'label'			=> $pagination_nav['shadow_label'],
		'horizontal' 	=> $pagination_nav['shad_h'],
		'vertical' 		=> $pagination_nav['shad_v'],
		'blur' 			=> $pagination_nav['shad_bl'],
		'spread' 		=> $pagination_nav['shad_sp'],
		'color' 		=> $pagination_nav['shad_col'],
		'transparency' 	=> $pagination_nav['shad_col_tr'],
		'inset'			=> $pagination_nav['shad_in']
	) );


/* ----------------- Navigation Font Options ----------------- */

	$css .= royal_fonts( '.pagination-wrap a, .pagination-wrap span, .infscr-center', array(
		'font_family'		=> $pagination_nav['font_family'],
		'font_size' 		=> $pagination_nav['font_size'],
		'line_height' 		=> $pagination_nav['line_height'],
		'letter_spacing' 	=> $pagination_nav['letter_space'],
		'font_weight' 		=> $pagination_nav['font_weight'],
		'font_style' 		=> $pagination_nav['italic'],
		'text_transform' 	=> $pagination_nav['uppercase']
	) );

	if ( $pagination_nav['underline'] === true )  {
		$pagination_nav['underline'] = 'underline';
	} else {
		$pagination_nav['underline'] = 'none';
	}

	$css .= '
		.pagination-wrap a,
		.pagination-wrap span,
		.infscr-center {
			text-decoration: '. $pagination_nav['underline'] .';
		}
	';


/*
***************************************************************
* #Contact Page
***************************************************************
*/

/* ----------------- General Options ----------------- */

	if ( $cPage_general['layout'] === 'info_form' ) {
		$css .= '
			.contact-form,
			.contact-info {
				width: 100%;
			}
		';

		$css .= '.contact-form {
			margin-top: '. $cPage_general['gutter'] .'px;
		}';
	}

	$css .= '.contact-info ul li {
		text-align: '. $cPage_general['list_align'] .';
	}';


/* ----------------- Spacing Options ----------------- */

	if ( $cPage_general['layout'] === 'form_info' ) {
		$css .= '
			.contact-form,
			.contact-info {
				float: left;
				width: -webkit-calc(50% - '. ( $cPage_general['gutter'] / 2 ) .'px);
				width: calc(50% - '. ( $cPage_general['gutter'] / 2 ) .'px);
			}
		';

		$css .= '.contact-form {
			margin-right: '. $cPage_general['gutter'] .'px;
		}';
	}

	$css .= '.contact-info ul li span {
		padding: '. $cPage_general['list_gutter'] .'px 0;
	}';


/* ----------------- Styling Options ----------------- */


	$css .= royal_border_1x_no_color( '.contact-info ul li span', 'bottom', array(
		'label' => $cPage_general['border_label'],
		'size' 	=> $cPage_general['bd_size_bt'],
		'style' => $cPage_general['bd_style_bt']
	) );

	if ( $cPage_general['bd_full_width']  === true ) {
		$css .= '.contact-info ul li span {
			display: block;
		}';
	} else {
		$css .= '.contact-info ul li span {
			display: inline-block;
		}';	
	}



/* ----------------- Title General Options ----------------- */

	$css .= '.contact-title {
		text-align: '. $cPage_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.contact-title span {
		padding-bottom: '. $cPage_title['padding_bt'] .'px;
		margin-bottom: '. $cPage_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= royal_border_1x_no_color( '.contact-title span', 'bottom', array(
		'label' => $cPage_title['border_label'],
		'size' 	=> $cPage_title['bd_size_bt'],
		'style' => $cPage_title['bd_style_bt']
	) );

	if ( $cPage_title['bd_full_width']  === false ) {
		$css .= '.contact-title span {
			display: inline-block;
		}';
	} else {
		$css .= '.contact-title span {
			display: block;
		}';
	}




/* ----------------- Google Map General Options ----------------- */

	if ( $cPage_map['label'] === false ) {
		$css .= '.google-map-wrap {
			display: none;
		}';
	}


/* ----------------- Google Map Spacing Options ----------------- */

	$css .= '.google-map {
		height: '. $cPage_map['height'] .'px;
	}';



/*
***************************************************************
* #Copyright & Socials
***************************************************************
*/

/* ----------------- General Options ----------------- */

	if ( $copy_soc_general['label'] === false ) {
		$css .= '.copy-and-soc {
			display: none;
		}';		
	}

	if ( $copy_soc_general['fold_btn_label'] === true ) {
		$css .= '.sidebar-top.copy-fixed .footer-fold-btn {
			display: block;
		}';		
	}


/* ----------------- Spacing Options ----------------- */

	$css .= royal_slider_4x( '.copy-and-soc > div', 'padding', array(
		'top' 	 => $copy_soc_general['padding_tp'],
		'right'  => $copy_soc_general['padding_rt'],
		'bottom' => $copy_soc_general['padding_bt'],
		'left' 	 => $copy_soc_general['padding_lt']
	) );


/* ----------------- Styling Options ----------------- */

	$css .= '.copy-and-soc {
		background-color: '. royal_hex2rgba( $copy_soc_general['color'], $copy_soc_general['col_tr'] ) .';
	}';

	$css .= '.footer-fold-btn i {
		background-color: '. $copy_soc_general['fold_btn_color'] .';
		color: '. $copy_soc_general['fold_btn_icon_color'] .';
	}';

	$css .= royal_border_4x( '.copy-and-soc', array(
		'label'			=> $copy_soc_general['border_label'],
		'top_size' 		=> $copy_soc_general['bd_size_tp'],
		'top_style' 	=> $copy_soc_general['bd_style_tp'],
		'top_color' 	=> $copy_soc_general['bd_col_tp'],
		'right_size' 	=> $copy_soc_general['bd_size_rt'],
		'right_style' 	=> $copy_soc_general['bd_style_rt'],
		'right_color' 	=> $copy_soc_general['bd_col_rt'],
		'bottom_size' 	=> $copy_soc_general['bd_size_bt'],
		'bottom_style' 	=> $copy_soc_general['bd_style_bt'],
		'bottom_color' 	=> $copy_soc_general['bd_col_bt'],
		'left_size' 	=> $copy_soc_general['bd_size_lt'],
		'left_style' 	=> $copy_soc_general['bd_style_lt'],
		'left_color' 	=> $copy_soc_general['bd_col_lt']
	) );

	$css .= royal_shadows( '.copy-and-soc', array(
		'label'			=> $copy_soc_general['shadow_label'],
		'horizontal' 	=> $copy_soc_general['shad_h'],
		'vertical' 		=> $copy_soc_general['shad_v'],
		'blur' 			=> $copy_soc_general['shad_bl'],
		'spread' 		=> $copy_soc_general['shad_sp'],
		'color' 		=> $copy_soc_general['shad_col'],
		'transparency' 	=> $copy_soc_general['shad_col_tr'],
		'inset'			=> $copy_soc_general['shad_in']
	) );



// Socials label
	if ( $socials['label'] === false ) {
		$css .= '.socials-wrap {
			display: none;
		}';
	}

/* ----------------- Socials General Options ----------------- */

	$css .= '.copy-and-soc {
		text-align: '. $socials['align'] .';
	}';


/* ----------------- Socials Spacing Options ----------------- */

	$css .= '.socials-wrap .fa {
		width: '. $socials['width'] .'px;
		height: '. $socials['height'] .'px;
		line-height: '. $socials['height'] .'px;
		margin-right: '. $socials['gutter_horz'] .'px;
		margin-bottom: '. $socials['gutter_vert'] .'px;
	}';

	$css .= '.socials-wrap  {
		padding-bottom: '. $socials['padding_bt'] .'px;
		margin-bottom: '. $socials['margin_bt'] .'px;
	}';


/* ----------------- Socials Styling Options ----------------- */

	$css .= '.socials-wrap .fa {
		background-color: '. royal_hex2rgba( $socials['bg_col'], $socials['bg_col_tr'] ) .';
		color: '. $socials['txt_col'] .';
	}';

	$css .= '.socials-wrap .fa:hover {
		background-color: '. royal_hex2rgba( $socials['bg_hcol'], $socials['bg_hcol_tr'] ) .';
		color: '. $socials['txt_hcol'] .';
		border-color: '. $socials['bd_hcol'] .';
	}';

	$css .= royal_border_4x( '.socials-wrap .fa', array(
		'label'			=> $socials['border_label'],
		'top_size' 		=> $socials['bd_size_tp'],
		'top_style' 	=> $socials['bd_style_tp'],
		'top_color' 	=> $socials['bd_col_tp'],
		'right_size' 	=> $socials['bd_size_rt'],
		'right_style' 	=> $socials['bd_style_rt'],
		'right_color' 	=> $socials['bd_col_rt'],
		'bottom_size' 	=> $socials['bd_size_bt'],
		'bottom_style' 	=> $socials['bd_style_bt'],
		'bottom_color' 	=> $socials['bd_col_bt'],
		'left_size' 	=> $socials['bd_size_lt'],
		'left_style' 	=> $socials['bd_style_lt'],
		'left_color' 	=> $socials['bd_col_lt']
	) );

	$css .= royal_shadows( '.socials-wrap .fa', array(
		'label'			=> $socials['shadow_label'],
		'horizontal' 	=> $socials['shad_h'],
		'vertical' 		=> $socials['shad_v'],
		'blur' 			=> $socials['shad_bl'],
		'spread' 		=> $socials['shad_sp'],
		'color' 		=> $socials['shad_col'],
		'transparency' 	=> $socials['shad_col_tr'],
		'inset'			=> $socials['shad_in']
	) );

	$css .= royal_radius( '.socials-wrap .fa', array(
		'label'		=> $socials['radius_label'],
		'radius'	=> $socials['radius']
	) );

	$css .= royal_border_1x( '.socials-wrap', 'bottom', array(
		'label'	=> $socials['wrap_border_label'],
		'size' 	=> $socials['wrap_bd_size_bt'],
		'style' => $socials['wrap_bd_style_bt'],
		'color' => $socials['wrap_bd_col_bt']
	) );

	if ( $socials['label'] != '' && $socials['wrap_bd_full_width'] == '' ) {
		$css .= '.socials-wrap {
			display: inline-block;
		}';
	}


/* ----------------- Socials Font Options ----------------- */

	$css .= '.copy-and-soc .fa {
		font-size: '. $socials['font_size'] .'px;
	}';

	$css .= royal_text_shadows( '.copy-and-soc .fa', array(
		'label'			=> $socials['txt_shadow_label'],
		'horizontal'	=> $socials['txt_shad_h'],
		'vertical' 		=> $socials['txt_shad_v'],
		'blur' 			=> $socials['txt_shad_bl'],
		'color' 		=> $socials['txt_shad_col']
	) );


// Copyright label
	if ( $copyright['label'] === false ) {
		$css .= '.copyright-wrap {
			display: none;
		}';
	}

/* ----------------- Copyright General Options ----------------- */

	$css .= '.copyright-wrap p {
		text-align: '. $copyright['align'] .';
	}';


/* ----------------- Copyright Styling Options ----------------- */

	$css .= '.copyright-wrap p {
		color: '. $copyright['txt_col'] .';
	}';

	$css .= '.copyright-wrap p a {
		color: '. $copyright['link_col'] .';
	}';

	$css .= '.copyright-wrap p a:hover {
		color: '. $copyright['link_hcol'] .';
	}';


/* ----------------- Copyright Font Options ----------------- */

	$css .= royal_fonts( '.copyright-wrap p', array(
		'font_family'		=> $copyright['font_family'],
		'font_size' 		=> $copyright['font_size'],
		'line_height' 		=> $copyright['line_height'],
		'letter_spacing' 	=> $copyright['letter_space'],
		'font_weight' 		=> $copyright['font_weight'],
		'font_style' 		=> $copyright['italic'],
		'text_transform' 	=> $copyright['uppercase']
	) );

	if ( $copyright['underline'] === true )  {
		$copyright['underline'] = 'underline';
	} else {
		$copyright['underline'] = 'none';
	}

	$css .= '.copyright-wrap p a {
		text-decoration: '. $copyright['underline'] .';
	}';



/* ----------------- Back Button Spacing Options ----------------- */

	$css .= '.back-to-top .fa {
		width: '. $back_btn['width'] .'px;
		height: '. $back_btn['height'] .'px;
		line-height: '. $back_btn['height'] .'px;
	}';

	$css .= '.back-to-top {
		right: '. $back_btn['pos_rt'] .'px;
		bottom: '. $back_btn['pos_bt'] .'px;
	}';


/* ----------------- Back Button Styling Options ----------------- */

	$css .= '.back-to-top .fa {
		background-color: '. royal_hex2rgba( $back_btn['color'], $back_btn['col_tr'] ) .';
		color: '. $back_btn['txt_col'] .';
	}';

	$css .= '.back-to-top .fa:hover {
		background-color: '. royal_hex2rgba( $back_btn['hcol'], $back_btn['hcol_tr'] ) .';
		color: '. $back_btn['txt_hcol'] .';
	}';

	$css .= royal_shadows( '.back-to-top .fa', array(
		'label'			=> $back_btn['shadow_label'],
		'horizontal' 	=> $back_btn['shad_h'],
		'vertical' 		=> $back_btn['shad_v'],
		'blur' 			=> $back_btn['shad_bl'],
		'spread' 		=> $back_btn['shad_sp'],
		'color' 		=> $back_btn['shad_col'],
		'transparency' 	=> $back_btn['shad_col_tr'],
		'inset'			=> $back_btn['shad_in']
	) );

	$css .= royal_radius( '.back-to-top .fa', array(
		'label'		=> $back_btn['radius_label'],
		'radius'	=> $back_btn['radius']
	) );


/* ----------------- Back Button Font Options ----------------- */

	$css .= '.back-to-top .fa {
		font-size: '. $back_btn['txt_sz'] .'px;
	}';



/*
***************************************************************
* #Typography
***************************************************************
*/

/* ----------------- Spacing Options ----------------- */

	$css .= '
			.inner-content p:not(.post-description),
			.inner-content table,
			.inner-content pre,
			.inner-content blockquote,
			.inner-content address,
			.inner-content .wp-playlist,
			.comment-content p, 
			.single-meta,
			.project-description-wrap p,
			.project-details-wrap > ul,
			.single .gallery,
			.inner-content.wp-caption,
			.inner-content ul:not(.filters),
			.inner-content ol, 
			.inner-content dl dd,
			.single-content h1,
			.single-content h2,
			.single-content h3:not(.post-title),
			.single-content h4,
			.single-content h5:not(.testimonial-author),
			.single-content h6,
			.search-results-wrap h4,
			.search-query,
			.project-info h3 {
		margin-bottom: '. $typography['text_margins'] .'px;
	}';

	$css .= '.stacked-caption span {
		margin:'. $typography['text_margins'] .'px 0;
	}';

	$css .= '
		.single-header-below-p .portfolio-single-header .title-and-meta,
		.single-header-below-b .blog-single-header .title-and-meta {
			padding-bottom:'. $typography['text_margins'] .'px;
		}
	';


/* ----------------- Paragraph Font Options ----------------- */

	$css .= royal_fonts( 
		'.inner-content p,
		.inner-content li,
		.inner-content dt,
		.inner-content dd,
		.inner-content table,
		.inner-content code,
		.inner-content pre,
		.inner-content address,
		.inner-content tt,
		.inner-content samp,
		.inner-content kbd,
		.inner-content var,
		.inner-content .wp-caption-text,
		.inner-content .single-meta,
		.inner-content .single-tags,
		.comment-reply-title small,
		.inner-content .rf-input,
		.slideshow-caption,
		.stacked-caption span,
		.comments-pagination,
		.submit-btn',
		array (
			'font_family'		=> $typography_p['font_family'],
			'font_size' 		=> $typography_p['font_size'],
			'line_height' 		=> $typography_p['line_height'],
			'letter_spacing' 	=> $typography_p['letter_space'],
			'font_weight' 		=> $typography_p['font_weight'],
			'font_style' 		=> $typography_p['italic'],
			'text_transform' 	=> $typography_p['uppercase']
		)
	);

	$css .= '
		.inner-content .single-meta,
		.inner-content .single-tags,
		.comment-reply-title small,
		#cancel-comment-reply-link {
			font-size: '. ( $typography_p['font_size'] - 1 ) .'px;
		}
	';

	$css .= '
		.vc_btn,
		.vc_label,
		.vc_pie_chart_value,
		.pp_pic_holder .ppt,
		.vc_gitem-post-data,
		.wpb_accordion_header a,
		.tagcloud a,
		.inner-content .previous-post,
		.inner-content .next-post,
		.inner-content .wp-playlist{
			font-family: "'. str_replace( '+', ' ', $typography_p['font_family'] ) .'", Arial, "Helvetica Neue", Helvetica, sans-serif;
		}
	';


/* ----------------- H1 Font Options ----------------- */

	$css .= royal_fonts( '.inner-content h1', array(
		'font_family'		=> $typography_h1['font_family'],
		'font_size' 		=> $typography_h1['font_size'],
		'line_height' 		=> $typography_h1['line_height'],
		'letter_spacing' 	=> $typography_h1['letter_space'],
		'font_weight' 		=> $typography_h1['font_weight'],
		'font_style' 		=> $typography_h1['italic'],
		'text_transform' 	=> $typography_h1['uppercase']
	) );


/* ----------------- H2 Font Options ----------------- */

	$css .= royal_fonts( '.inner-content h2', array(
		'font_family'		=> $typography_h2['font_family'],
		'font_size' 		=> $typography_h2['font_size'],
		'line_height' 		=> $typography_h2['line_height'],
		'letter_spacing' 	=> $typography_h2['letter_space'],
		'font_weight' 		=> $typography_h2['font_weight'],
		'font_style' 		=> $typography_h2['italic'],
		'text_transform' 	=> $typography_h2['uppercase']
	) );


/* ----------------- H3 Font Options ----------------- */

	$css .= royal_fonts( '.inner-content h3', array(
		'font_family'		=> $typography_h3['font_family'],
		'font_size' 		=> $typography_h3['font_size'],
		'line_height' 		=> $typography_h3['line_height'],
		'letter_spacing' 	=> $typography_h3['letter_space'],
		'font_weight' 		=> $typography_h3['font_weight'],
		'font_style' 		=> $typography_h3['italic'],
		'text_transform' 	=> $typography_h3['uppercase']
	) );


/* ----------------- H4 Font Options ----------------- */

	$css .= royal_fonts( '.inner-content h4', array(
		'font_family'		=> $typography_h4['font_family'],
		'font_size' 		=> $typography_h4['font_size'],
		'line_height' 		=> $typography_h4['line_height'],
		'letter_spacing' 	=> $typography_h4['letter_space'],
		'font_weight' 		=> $typography_h4['font_weight'],
		'font_style' 		=> $typography_h4['italic'],
		'text_transform' 	=> $typography_h4['uppercase']
	) );


/* ----------------- H5 Font Options ----------------- */

	$css .= royal_fonts( '.inner-content h5', array(
		'font_family'		=> $typography_h5['font_family'],
		'font_size' 		=> $typography_h5['font_size'],
		'line_height' 		=> $typography_h5['line_height'],
		'letter_spacing' 	=> $typography_h5['letter_space'],
		'font_weight' 		=> $typography_h5['font_weight'],
		'font_style' 		=> $typography_h5['italic'],
		'text_transform' 	=> $typography_h5['uppercase']
	) );


/* ----------------- H6 Font Options ----------------- */

	$css .= royal_fonts( '.inner-content h6', array(
		'font_family'		=> $typography_h6['font_family'],
		'font_size' 		=> $typography_h6['font_size'],
		'line_height' 		=> $typography_h6['line_height'],
		'letter_spacing' 	=> $typography_h6['letter_space'],
		'font_weight' 		=> $typography_h6['font_weight'],
		'font_style' 		=> $typography_h6['italic'],
		'text_transform' 	=> $typography_h6['uppercase']
	) );



/*
***************************************************************
* #Sidebar Widgets
***************************************************************
*/

/* ----------------- Title General Options ----------------- */

	if ( $sWidgets_title['label'] === false ) {
		$css .= '.sid-widget-title {
			display: none;
		}';		
	}

	$css .= '.sid-widget-title {
		text-align: '. $sWidgets_title['align'] .';
	}';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '.sid-widget-title span {
		padding-bottom: '. $sWidgets_title['padding_bt'] .'px;
		margin-bottom: '. $sWidgets_title['margin_bt'] .'px;
	}';


/* ----------------- Title Styling Options ----------------- */

	$css .= '
		.sid-widget-title,
		.sid-widget-title a {
			color: '. $sWidgets_title['color'] .';
		}
	';

	$css .= royal_border_1x( '.sid-widget-title span', 'bottom', array(
		'label'	=> $sWidgets_title['border_label'],
		'size' 	=> $sWidgets_title['bd_size_bt'],
		'style' => $sWidgets_title['bd_style_bt'],
		'color' => $sWidgets_title['bd_col_bt']
	) );

	if ( $sWidgets_title['bd_full_width'] === false ) {
		$css .= '.sid-widget-title span {
			display: inline-block;
		}';
	} else {
		$css .= '.sid-widget-title span {
			display: block;
		}';
	}


/* ----------------- Title Font Options ----------------- */

	$css .= royal_fonts( '.sid-widget-title', array(
		'font_family'		=> $sWidgets_title['font_family'],
		'font_size' 		=> $sWidgets_title['font_size'],
		'line_height' 		=> $sWidgets_title['line_height'],
		'letter_spacing' 	=> $sWidgets_title['letter_space'],
		'font_weight' 		=> $sWidgets_title['font_weight'],
		'font_style' 		=> $sWidgets_title['italic'],
		'text_transform' 	=> $sWidgets_title['uppercase']
	) );



/* ----------------- Content General Options ----------------- */

	$css .= '.sidebar-widget {
		text-align: '. $sWidgets_content['align'] .';
	}';


/* ----------------- Content Spacing Options ----------------- */

	$css .= royal_slider_4x( '.sidebar-widget>ul, .sidebar-widget>div', 'padding', array(
		'top' 	 => $sWidgets_content['padding_tp'],
		'right'  => $sWidgets_content['padding_rt'],
		'bottom' => $sWidgets_content['padding_bt'],
		'left' 	 => $sWidgets_content['padding_lt']
	) );


/* ----------------- Content Styling Options ----------------- */

	$css .= '
		.sidebar-widget>ul,
		.sidebar-widget>div {
			background-color: '. royal_hex2rgba( $sWidgets_content['bg_col'], $sWidgets_content['bg_col_tr'] ) .';
		}
	';

	$css .= '.sidebar-widget {
		color: '. $sWidgets_content['txt_col'] .';
	}';

	$css .= '
		.tagcloud a,
		.textwidget a,
		.sidebar-widget ul li a,
		.sidebar-widget tfoot tr td a,
		.sidebar-widget tbody tr td a {
			color: '. $sWidgets_content['link_col'] .';
		}
	';

	$css .= '
		.tagcloud a:hover,
		.textwidget a:hover,
		.sidebar-widget ul li a:hover,
		.sidebar-widget tfoot tr td a:hover,
		.sidebar-widget tbody tr td a:hover {
			color: '. $sWidgets_content['link_hcol'] .';
		}
	';

	$css .= royal_radius( '.sidebar-widget > ul, .sidebar-widget > div', array(
		'label'		=> $sWidgets_content['radius_label'],
		'radius'	=> $sWidgets_content['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.sidebar-widget>ul, .sidebar-widget>div', array(
		'label'			=> $sWidgets_content['shadow_label'],
		'horizontal' 	=> $sWidgets_content['shad_h'],
		'vertical' 		=> $sWidgets_content['shad_v'],
		'blur' 			=> $sWidgets_content['shad_bl'],
		'spread' 		=> $sWidgets_content['shad_sp'],
		'color' 		=> $sWidgets_content['shad_col'],
		'transparency' 	=> $sWidgets_content['shad_col_tr'],
		'inset'			=> $sWidgets_content['shad_in']
	) );


/* ----------------- Content Font Options ----------------- */

	$css .= royal_fonts( '.sidebar-widget, .sidebar-widget.widget_icl_lang_sel_widget ul li a', array(
		'font_family'		=> $sWidgets_content['font_family'],
		'font_size' 		=> $sWidgets_content['font_size'],
		'line_height' 		=> $sWidgets_content['line_height'],
		'letter_spacing' 	=> $sWidgets_content['letter_space'],
		'font_weight' 		=> $sWidgets_content['font_weight'],
		'text_transform' 	=> $sWidgets_content['uppercase']
	) );

	$css .= royal_fonts( '.sid-block #s', array(
		'font_family'		=> $sWidgets_content['font_family'],
		'font_size' 		=> $sWidgets_content['font_size'],
		'letter_spacing' 	=> $sWidgets_content['letter_space'],
		'font_weight' 		=> $sWidgets_content['font_weight'],
		'text_transform' 	=> $sWidgets_content['uppercase']
	) );

	$css .= '.sid-block .search-icon {
		font-size: '. $sWidgets_content['font_size'] .'px;
	}';

	if ( $sWidgets_content['underline'] === true )  {
		$sWidgets_content['underline'] = 'underline';
	} else {
		$sWidgets_content['underline'] = 'none';
	}

	$css .= '
		.tagcloud a,
		.textwidget a,
		.sidebar-widget ul li a,
		.sidebar-widget tfoot tr td a,
		.sidebar-widget tbody tr td a {
			text-decoration: '. $sWidgets_content['underline'] .';
		}
	';



/*
***************************************************************
* #Top & Footer Widgets
***************************************************************
*/

/* ----------------- General Options ----------------- */

	$css .= '
		@media screen and ( min-width: 1050px ) {

			.top-widget,
			.footer-widget {
				width: -webkit-calc( (100% - ( '. $fWidgets_general['gutter_horz'] .'px * '. ( $fWidgets_general['columns'] - 1 ) .' ) ) / '. $fWidgets_general['columns'] .' );
				width: calc( (100% - ( '. $fWidgets_general['gutter_horz'] .'px * '. ( $fWidgets_general['columns'] - 1 ) .' ) ) / '. $fWidgets_general['columns'] .' );
			}

			.top-widget:nth-child('. $fWidgets_general['columns'] .'n),
			.footer-widget:nth-child('. $fWidgets_general['columns'] .'n) {
				margin-right: 0;
			}

		}

		@media screen and ( max-width: 1050px ) {

			.top-widget,
			.footer-widget {
				width: -webkit-calc( (100% - ( '. $fWidgets_general['gutter_horz'] .'px ) ) / 2 ) !important;
				width: calc( (100% - ( '. $fWidgets_general['gutter_horz'] .'px ) ) / 2 ) !important;
				margin-right: '. $fWidgets_general['gutter_horz'] .'px !important;
			}

			.top-widget:nth-child(2n),
			.footer-widget:nth-child(2n) {
				margin-right: 0 !important;
			}

		}

		@media screen and ( max-width: 950px ) {

			.top-widget,
			.footer-widget {
				width: 100% !important;
				margin-right: 0 !important;
			}
			
		}
	';


/* ----------------- Spacing Options ----------------- */

	$css .= royal_slider_4x( '.top-widgets, .footer-widgets', 'padding',  array(
		'top' 	 => $fWidgets_general['padding_tp'],
		'right'  => $fWidgets_general['padding_rt'],
		'bottom' => $fWidgets_general['padding_bt'],
		'left' 	 => $fWidgets_general['padding_lt']
	) );

	$css .= '
		.top-widget,
		.footer-widget {
			margin-right: '. $fWidgets_general['gutter_horz'] .'px;
			margin-bottom:  '. $fWidgets_general['gutter_vert'] .'px;
		}
	';

	$css .= '
		@media screen and ( max-width: 950px ) {

			.top-widgets, .footer-widgets {
				padding: '. ( $fWidgets_general['padding_tp'] / 6 ) .'% '. ( $fWidgets_general['padding_rt'] / 6 ) .'% '. ( $fWidgets_general['padding_bt'] / 6 ) .'% '. ( $fWidgets_general['padding_lt'] / 6 ) .'%;
			}
			
		}
	';

/* ----------------- Styling Options ----------------- */

	$css .= royal_background_select( '.top-widgets-bg, .footer-widgets', $fWidgets_general['background'], array(
		'color' 				=> $fWidgets_general['bg_color'],
		'color_tr' 				=> $fWidgets_general['bg_color_tr'],
		'gradient_ang' 			=> $fWidgets_general['bg_grad_angle'],
		'gradient_start' 		=> $fWidgets_general['bg_grad_col_1'],
		'gradient_start_tr'		=> $fWidgets_general['bg_grad_col_1_tr'],
		'gradient_start_pos'	=> $fWidgets_general['bg_grad_col_1_ps'],
		'gradient_end' 			=> $fWidgets_general['bg_grad_col_2'],
		'gradient_end_tr'		=> $fWidgets_general['bg_grad_col_2_tr'],
		'gradient_end_pos'		=> $fWidgets_general['bg_grad_col_2_ps'],
		'image'					=> $fWidgets_general['bg_img'],
		'image_size' 			=> $fWidgets_general['bg_img_sz'],
		'image_att' 			=> $fWidgets_general['bg_img_att']
	) );

	$css .= '.top-widgets-fold-btn i {
		background-image: linear-gradient(225deg, '. royal_hex2rgba( $fWidgets_general['bg_color'], $fWidgets_general['bg_color_tr'] ) .' 50%, rgba(255, 255, 255, 0) 51%);
		color: '. $fWidgets_content['txt_col'] .';
	}';

	$css .= royal_border_4x( '.footer-widgets', array(
		'label'			=> $fWidgets_general['border_label'],
		'top_size' 		=> $fWidgets_general['bd_size_tp'],
		'top_style' 	=> $fWidgets_general['bd_style_tp'],
		'top_color' 	=> $fWidgets_general['bd_col_tp'],
		'right_size' 	=> $fWidgets_general['bd_size_rt'],
		'right_style' 	=> $fWidgets_general['bd_style_rt'],
		'right_color' 	=> $fWidgets_general['bd_col_rt'],
		'bottom_size' 	=> $fWidgets_general['bd_size_bt'],
		'bottom_style' 	=> $fWidgets_general['bd_style_bt'],
		'bottom_color' 	=> $fWidgets_general['bd_col_bt'],
		'left_size' 	=> $fWidgets_general['bd_size_lt'],
		'left_style' 	=> $fWidgets_general['bd_style_lt'],
		'left_color' 	=> $fWidgets_general['bd_col_lt']
	) );

	$css .= royal_radius( '.footer-widgets', array(
		'label'		=> $fWidgets_general['radius_label'],
		'radius'	=> $fWidgets_general['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.top-widgets, .footer-widgets', array(
		'label'			=> $fWidgets_general['shadow_label'],
		'horizontal' 	=> $fWidgets_general['shad_h'],
		'vertical' 		=> $fWidgets_general['shad_v'],
		'blur' 			=> $fWidgets_general['shad_bl'],
		'spread' 		=> $fWidgets_general['shad_sp'],
		'color' 		=> $fWidgets_general['shad_col'],
		'transparency' 	=> $fWidgets_general['shad_col_tr'],
		'inset'			=> $fWidgets_general['shad_in']
	) );



/* ----------------- Title General Options ----------------- */

	if ( $fWidgets_title['label'] === false ) {
		$css .= '
			.top-widget-title,
			.foot-widget-title {
				display: none;
			}
		';		
	}

	$css .= '
		.top-widget-title,
		.foot-widget-title {
			text-align: '. $fWidgets_title['align'] .';
		}
	';


/* ----------------- Title Spacing Options ----------------- */

	$css .= '
		.top-widget-title span,
		.foot-widget-title span {
			padding-bottom: '. $fWidgets_title['padding_bt'] .'px;
			margin-bottom: '. $fWidgets_title['margin_bt'] .'px;
		}
	';


/* ----------------- Title Styling Options ----------------- */

	$css .= '
		.top-widget-title,
		.top-widget-title a,
		.foot-widget-title,
		.foot-widget-title a {
			color: '. $fWidgets_title['color'] .';
		}
	';

	$css .= royal_border_1x( '.top-widget-title span, .foot-widget-title span', 'bottom', array(
		'label'	=> $fWidgets_title['border_label'],
		'size' 	=> $fWidgets_title['bd_size_bt'],
		'style' => $fWidgets_title['bd_style_bt'],
		'color' => $fWidgets_title['bd_col_bt']
	) );

	if ( $fWidgets_title['bd_full_width'] === false ) {
		$css .= '
			.top-widget-title span,
			.foot-widget-title span {
				display: inline-block;
			}
		';
	} else {
		$css .= '
			.top-widget-title span,
			.foot-widget-title span {
				display: block;
			}
		';
	}


/* ----------------- Title Font Options ----------------- */

	$css .= royal_fonts( '.top-widget-title, .foot-widget-title', array(
		'font_family'		=> $fWidgets_title['font_family'],
		'font_size' 		=> $fWidgets_title['font_size'],
		'line_height' 		=> $fWidgets_title['line_height'],
		'letter_spacing' 	=> $fWidgets_title['letter_space'],
		'font_weight' 		=> $fWidgets_title['font_weight'],
		'font_style' 		=> $fWidgets_title['italic'],
		'text_transform' 	=> $fWidgets_title['uppercase']
	) );



/* ----------------- Content General Options ----------------- */

	$css .= '
		.top-widget,
		.footer-widget {
			text-align: '. $fWidgets_content['align'] .';
		}
	';


/* ----------------- Content Spacing Options ----------------- */

	$css .= royal_slider_4x( 
		'.top-widget > ul,
		.top-widget > div,
		.footer-widget > ul,
		.footer-widget > div',
		'padding', 
		array(
			'top' 	 => $fWidgets_content['padding_tp'],
			'right'  => $fWidgets_content['padding_rt'],
			'bottom' => $fWidgets_content['padding_bt'],
			'left' 	 => $fWidgets_content['padding_lt']
		) );


/* ----------------- Content Styling Options ----------------- */

	$css .= '
		.top-widget > ul,
		.top-widget > div,
		.footer-widget > ul,
		.footer-widget > div {
			background-color: '. royal_hex2rgba( $fWidgets_content['bg_col'], $fWidgets_content['bg_col_tr'] ) .';
		}
	';

	$css .= '
		.top-widget,
		.footer-widget {
			color: '. $fWidgets_content['txt_col'] .';
		}
	';

	$css .= '
		.top-widget .tagcloud a,
		.top-widget .textwidget a,
		.top-widget ul li a,
		.top-widget tfoot tr td a,
		.top-widget tbody tr td a,
		.footer-widget .tagcloud a,
		.footer-widget .textwidget a,
		.footer-widget ul li a,
		.footer-widget tfoot tr td a,
		.footer-widget tbody tr td a {
			color: '. $fWidgets_content['link_col'] .';
		}
	';

	$css .= '
		.top-widget .tagcloud a:hover,
		.top-widget .textwidget a:hover,
		.top-widget ul li a:hover,
		.top-widget tfoot tr td a:hover,
		.top-widget tbody tr td a:hover,
		.footer-widget .tagcloud a:hover,
		.footer-widget .textwidget a:hover,
		.footer-widget ul li a:hover,
		.footer-widget tfoot tr td a:hover,
		.footer-widget tbody tr td a:hover {
			color: '. $fWidgets_content['link_hcol'] .';
		}
	';

	$css .= royal_radius( '.top-widget > ul, .top-widget > div, .footer-widget > ul, .footer-widget > div', array(
		'label'		=> $fWidgets_content['radius_label'],
		'radius'	=> $fWidgets_content['radius'],
		'ext'		=> true
	) );

	$css .= royal_shadows( '.top-widget > ul, .top-widget > div, .footer-widget > ul, .footer-widget > div', array(
		'label'			=> $fWidgets_content['shadow_label'],
		'horizontal' 	=> $fWidgets_content['shad_h'],
		'vertical' 		=> $fWidgets_content['shad_v'],
		'blur' 			=> $fWidgets_content['shad_bl'],
		'spread' 		=> $fWidgets_content['shad_sp'],
		'color' 		=> $fWidgets_content['shad_col'],
		'transparency' 	=> $fWidgets_content['shad_col_tr'],
		'inset'			=> $fWidgets_content['shad_in']
	) );


/* ----------------- Content Font Options ----------------- */

	$css .= royal_fonts( '.top-widget, .footer-widget, .top-widget.widget_icl_lang_sel_widget ul li a, .footer-widget.widget_icl_lang_sel_widget ul li a', array(
		'font_family'		=> $fWidgets_content['font_family'],
		'font_size' 		=> $fWidgets_content['font_size'],
		'line_height' 		=> $fWidgets_content['line_height'],
		'letter_spacing' 	=> $fWidgets_content['letter_space'],
		'font_weight' 		=> $fWidgets_content['font_weight'],
		'text_transform' 	=> $fWidgets_content['uppercase']
	) );

	$css .= royal_fonts( '.top-widget #s, .footer-widget #s', array(
		'font_family'		=> $fWidgets_content['font_family'],
		'font_size' 		=> $fWidgets_content['font_size'],
		'letter_spacing' 	=> $fWidgets_content['letter_space'],
		'font_weight' 		=> $fWidgets_content['font_weight'],
		'text_transform' 	=> $fWidgets_content['uppercase']
	) );

	$css .= '
		.top-widget .search-icon,
		.footer-widget .search-icon {
			font-size: '. $fWidgets_content['font_size'] .'px;
		}
	';

	if ( $fWidgets_content['underline'] === true )  {
		$fWidgets_content['underline'] = 'underline';
	} else {
		$fWidgets_content['underline'] = 'none';
	}

	$css .= '
		.top-widget .tagcloud a,
		.top-widget .textwidget a,
		.top-widget ul li a,
		.top-widget tfoot tr td a,
		.top-widget tbody tr td a,
		.footer-widget .tagcloud a,
		.footer-widget .textwidget a,
		.footer-widget ul li a,
		.footer-widget tfoot tr td a,
		.footer-widget tbody tr td a {
			text-decoration: '. $fWidgets_content['underline'] .';
		}
	';



// add Custom CSS field
	$css .= $custom_css['textarea'];


	// end style block
	$css .= '</style>';

	// return generated & compressed CSS
	return str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 

} // end royal_dynamic_css()


// check if theme has been activated
	function royal_echo_dynamic_css() {
		echo royal_get_dynamic_css();
	}

	add_action( 'wp_head', 'royal_echo_dynamic_css' );


/*
***************************************************************
* #Reusable Functions
***************************************************************
*/


// background type select
	function royal_background_select( $selector, $select_id, $args = array() ) {

		// default values
		$defaults = array(
			'color' 				=> 'transparent',
			'color_tr'				=> 1,
			'gradient_ang' 			=> 180,
			'gradient_start' 		=> '#ffffff',
			'gradient_start_tr'		=> 1,
			'gradient_start_pos'	=> 0,
			'gradient_end' 			=> '#000000',
			'gradient_end_tr'		=> 1,
			'gradient_end_pos'		=> 100,
			'image' 				=> 'none',
			'image_size' 			=> 'pattern',
			'image_att' 			=> 'scroll'
		);

		// override defaults & extract array keys as variables. ex: 'color' to $color
		$args = wp_parse_args( $args, $defaults );
		extract( $args );


		$size 		= 'auto';
		$repeat 	= 'repeat';
		$position 	= 'left top';

		// check which type is selected
		if ( $select_id === 'color' ) {
			$color = royal_hex2rgba( $color, $color_tr );
			$background = 'none';

		} elseif ( $select_id === 'gradient' ) {
			$color = 'transparent';
			$background = 'linear-gradient( '. $gradient_ang .'deg, '.
				royal_hex2rgba( $gradient_start, $gradient_start_tr ) .' '. $gradient_start_pos .'%, '.
				royal_hex2rgba( $gradient_end, $gradient_end_tr ) .' '. $gradient_end_pos .'% )';

		} else {
			$background = 'url('. esc_url($image) .')';

			if ( $image_size === 'cover' ) {
				$size 		= 'cover';
				$repeat 	= 'no-repeat';
				$position 	= 'center center';
			}
		}

		$css = $selector .'{
			background-color: 		'. $color .';
			background-image: 		'. $background .';
			background-size: 		'. $size .';
			background-attachment: 	'. $image_att .';
			background-repeat: 		'. $repeat .';
			background-position: 	'. $position .';
		}';

		// return generated css
		return $css;
	}

// paddings & margins
	function royal_slider_4x( $selector, $type, $args = array() ) {

		// default values
		$defaults = array(
			'top' 	 => 0,
			'right'  => 0,
			'bottom' => 0,
			'left' 	 => 0
		);

		// override defaults & extract array keys as variables. ex: 'top' to $top
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		$css = $selector .'{
			'. $type .'-top: 	'. $top .'px;
			'. $type .'-right: 	'. $right .'px;
			'. $type .'-bottom: '. $bottom .'px;
			'. $type .'-left: 	'. $left .'px;
		}';

		// return generated css
		return $css;
	}

// borders 4x
	function royal_border_4x( $selector, $args = array() ) {

		// default values
		$defaults = array(
			'label'			=> false,
			'top_size' 		=> 0,
			'top_style' 	=> 'solid',
			'top_color' 	=> '#000000',
			'right_size' 	=> 0,
			'right_style' 	=> 'solid',
			'right_color' 	=> '#000000',
			'bottom_size' 	=> 0,
			'bottom_style' 	=> 'solid',
			'bottom_color' 	=> '#000000',
			'left_size' 	=> 0,
			'left_style' 	=> 'solid',
			'left_color' 	=> '#000000'
		);

		// override defaults & extract array keys as variables. ex: 'left_size' to $left_size
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		if ( $label == true ) {
			$css = $selector .' {
				border-top: 	'. $top_size .'px '. $top_style .' '. $top_color .';
				border-right: 	'. $right_size .'px '. $right_style .' '. $right_color .';
				border-bottom: 	'. $bottom_size .'px '. $bottom_style .' '. $bottom_color .';
				border-left: 	'. $left_size .'px '. $left_style .' '. $left_color .';
			}';	
		} else {
			$css = $selector .' {
				border: none;
			}';	
		}


		// return generated css
		return $css;
	}

// border 1x all
	function royal_border_1x_all( $selector, $args = array() ) {

		extract( $args );

		if ( $label == true ) {
			$css = $selector .' {
				border: '. $size .'px '. $style .' '. $color .';
			}';	
		} else {
			$css = '';
		}


		// return generated css
		return $css;
	}

// border 1x
	function royal_border_1x( $selector, $direction, $args = array() ) {

		extract( $args );

		if ( $label == true ) {
			$css = $selector .' {
				border-'. $direction .': '. $size .'px '. $style .' '. $color .';
			}';	
		} else {
			$css = '';
		}


		// return generated css
		return $css;
	}

// border 1x no color
	function royal_border_1x_no_color( $selector, $direction, $args = array() ) {

		extract( $args );

		if ( $label == true ) {
			$css = $selector .' {
				border-'. $direction .'-width: '. $size .'px;
				border-'. $direction .'-style: '. $style .';
			}';	
		} else {
			$css = '';
		}


		// return generated css
		return $css;
	}

// borders radius
	function royal_radius( $selector, $args = array() ) {

		// default values
		$defaults = array(
			'label'		=> false,
			'radius'	=> 0,
			'ext'		=> false
		);

		// override defaults & extract array keys as variables. ex: 'radius' to $radius
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		if ( $label == true ) {

			$ext = ( $ext === true ) ? 'px' : '%';

			$css = $selector .' {
				border-radius: '. $radius . $ext .';
			}';

		} else {
			$css = '';
		}


		// return generated css
		return $css;
	}

// shadows
	function royal_shadows( $selector, $args = array()  ) {

		// default values
		$defaults = array(
			'label'			=> false,
			'horizontal' 	=> 0,
			'vertical' 		=> 0,
			'blur' 			=> 5,
			'spread' 		=> 5,
			'color' 		=> '#000000',
			'transparency' 	=> 1,
			'inset' 		=> ''
		);

		// override defaults & extract array keys as variables. ex: 'label' to $label
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		if( $label == true ) {

			if ( $inset == 1 ) {
				$inset = ' inset';
			} else {
				$inset = '';
			}

			$css = $selector .' {
				box-shadow: '. $horizontal .'px '. $vertical .'px '. $blur .'px '. $spread .'px '. royal_hex2rgba( $color, $transparency ) . $inset .';
			}';

		} else {
			$css = '';
		}

		// return generated css
		return $css;
	}

// text shadows
	function royal_text_shadows( $selector, $args = array()  ) {

		// default values
		$defaults = array(
			'label'			=> false,
			'horizontal'	=> 0,
			'vertical' 		=> 0,
			'blur' 			=> 5,
			'color' 		=> '#000000'
		);

		// override defaults & extract array keys as variables. ex: 'horizontal' to $horizontal
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		if( $label == true ) {

			$css = $selector .' {
				text-shadow: '. $horizontal .'px '. $vertical .'px '. $blur .'px '. $color .';
			}';

		} else {
			$css = '';
		}

		// return generated css
		return $css;
	}

// fonts
	function royal_fonts( $selector, $args = array()  ) {

		// default values
		$defaults = array(
			'font_family'		=> 'inherit',
			'font_size' 		=> 16,
			'line_height' 		=> 16,
			'letter_spacing' 	=> 0,
			'font_weight' 		=> 400,
			'font_style' 		=> 'normal',
			'text_transform' 	=> 'none',
			'text_decoration' 	=> 'none'
		);

		// override defaults & extract array keys as variables. ex: 'font_family' to $font_family
		$args = wp_parse_args( $args, $defaults );
		extract( $args );

		$font_family = str_replace( '+', ' ', $font_family );

		if ( $font_style === true ) {
			$font_style = 'italic';
		} else {
			$font_style = 'normal';
		}

		if ( $text_transform === true ) {
			$text_transform = 'uppercase';
		} else {
			$text_transform = 'none';
		}

		if ( $text_decoration === true ) {
			$text_decoration = 'line-through';
		} else {
			$text_decoration = 'none';
		}

		$css = $selector .' {
			font-family: 	"'. $font_family .'", Arial, "Helvetica Neue", Helvetica, sans-serif;
			font-size: 		'. $font_size .'px;
			line-height: 	'. $line_height .'px;
			letter-spacing: '. $letter_spacing .'px;
			font-weight: 	'. $font_weight .';
			font-style: 	'. $font_style .';
			text-transform: '. $text_transform .';
			text-decoration:'. $text_decoration .';
		}';

		// return generated css
		return $css;
	}