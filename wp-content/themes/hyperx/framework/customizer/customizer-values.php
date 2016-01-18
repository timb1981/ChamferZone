<?php

/*
***************************************************************
* This file contains all Theme Options for Activation.
* Please don't Edit/Delete something in here. THIS IS VITAL.
***************************************************************
*/

$activation = get_option('royal_custom_css');
if ( $activation['hyperx_activation'] === true ) {
    return;
}


update_option('select_group', 'default');
update_option('active_design', 'ares');

// adjust visual composer
update_option('wpb_js_custom_css', ".vc_row {margin-left: -15px !important;margin-right: -15px !important;}\n.vc_col-xs-1,.vc_col-sm-1,.vc_col-md-1,.vc_col-lg-1,.vc_col-xs-2,.vc_col-sm-2,.vc_col-md-2,.vc_col-lg-2,.vc_col-xs-3,.vc_col-sm-3,.vc_col-md-3,.vc_col-lg-3,.vc_col-xs-4,.vc_col-sm-4,.vc_col-md-4,.vc_col-lg-4,.vc_col-xs-5,.vc_col-sm-5,.vc_col-md-5,.vc_col-lg-5,.vc_col-xs-6,.vc_col-sm-6,.vc_col-md-6,.vc_col-lg-6,.vc_col-xs-7,.vc_col-sm-7,.vc_col-md-7,.vc_col-lg-7,.vc_col-xs-8,.vc_col-sm-8,.vc_col-md-8,.vc_col-lg-8,.vc_col-xs-9,.vc_col-sm-9,.vc_col-md-9,.vc_col-lg-9,.vc_col-xs-10,.vc_col-sm-10,.vc_col-md-10,.vc_col-lg-10,.vc_col-xs-11,.vc_col-sm-11,.vc_col-md-11,.vc_col-lg-11,.vc_col-xs-12,.vc_col-sm-12,.vc_col-md-12,.vc_col-lg-12{padding-left:15px!important;padding-right:15px!important;}\n.wpb_row,.wpb_content_element,ul.wpb_thumbnails-fluid > li,.wpb_button{margin-bottom:5px!important;}\n.vc_label{color:#fff!important;font-size:12px!important;line-height:14px!important;text-transform:uppercase!important;}\n.vc_progress_bar .vc_single_bar{margin-bottom:15px!important;-webkit-box-shadow:none!important;box-shadow:none!important;-webkit-border-radius:0!important;border-radius:0!important;}\n.vc_progress_bar{margin-top:22px!important;}\n.wpb_progress_bar_heading{font-size:18px!important;}\n.wpb_column > .wpb_wrapper .ult-new-ib{margin-bottom:3px!important;}\n.ult_price_features{padding:15px!important;}\n.ult_price_action_button{padding:14px!important;border-radius:0!important;}\n.vc_column_container>.vc_column-inner { padding: 0 !important;}\n");

// adjust ultimate addons
update_option('ultimate_css', 'enable');
update_option('ultimate_js', 'enable');

// faster customize
update_option('section_body', true);
update_option('section_sidebar', true);
update_option('section_logo', true);
update_option('section_menu', true);
update_option('section_blog_page', '');
update_option('section_blog_single', '');
update_option('section_folio_page', true);
update_option('section_portfolio_single', true);
update_option('section_gallery', '');
update_option('section_similar_posts', '');
update_option('section_comments', '');
update_option('section_inputs', '');
update_option('section_pagination', '');
update_option('section_contact_page', true);
update_option('section_404_page', true);
update_option('section_copy_and_socials', true);
update_option('section_typography', '');
update_option('section_colors', '');
update_option('section_custom_css', true);
update_option('section_custom_js', true);
update_option('section_preloaders', '');
update_option('section_sidebar_widgets', '');
update_option('section_footer_widgets', '');

$royal_sidebar_colors = array (
    'background' => '#ffffff',
    'text' => '#ffffff',
    'link' => '#ffffff',
    'link_hover' => '#ffffff',
    'border' => '#ffffff',
    'button' => '#ffffff',
    'button_text' => '#ffffff',
    'button_hover' => '#ffffff',
    'button_text_hover' => '#ffffff',
);
update_option('royal_sidebar_colors', $royal_sidebar_colors);

$royal_content_colors = array (
    'background' => '#ffffff',
    'text' => '#ffffff',
    'link' => '#ffffff',
    'link_hover' => '#ffffff',
    'border' => '#ffffff',
    'button' => '#ffffff',
    'button_text' => '#ffffff',
    'button_hover' => '#ffffff',
    'button_text_hover' => '#ffffff',
);
update_option('royal_content_colors', $royal_content_colors);

$royal_footer_colors = array (
    'background' => '#ffffff',
    'text' => '#ffffff',
    'link' => '#ffffff',
    'link_hover' => '#ffffff',
    'border' => '#ffffff',
    'button' => '#ffffff',
    'button_text' => '#ffffff',
    'button_hover' => '#ffffff',
    'button_text_hover' => '#ffffff',
);
update_option('royal_footer_colors', $royal_footer_colors);

$royal_body = array(
    'onepage' => false,
    'smoothscroll' => false,
    'layout' => 'unlimited',
    'max_width' => 1200,
    'align' => 'none',
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'background' => 'color',
    'bg_color' => '#ffffff',
    'bg_grad_angle' => 180,
    'bg_grad_col_1' => '#ffffff',
    'bg_grad_col_1_tr' => 0,
    'bg_grad_col_1_ps' => 0,
    'bg_grad_col_2' => '#000000',
    'bg_grad_col_2_tr' => 0,
    'bg_grad_col_2_ps' => 100,
    'bg_img' => '',
    'bg_img_sz' => 'pattern',
    'bg_img_att' => 'fixed',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e8e8e8',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e8e8e8',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e8e8e8',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e8e8e8',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e8e8e8',
    'bd_ad' => false,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#cecece',
    'shad_col_tr' => 0
);
update_option('royal_body', $royal_body);

$royal_content = array(
    'padding_gen' => 25,
    'padding_tp' => 37,
    'padding_rt' => 34,
    'padding_bt' => 30,
    'padding_lt' => 34,
    'padding_ad' => true,
    'section_space' => 0,
    'background' => 'color',
    'bg_color' => '#ffffff',
    'bg_color_tr' => 0,
    'bg_grad_angle' => 180,
    'bg_grad_col_1' => '#ffffff',
    'bg_grad_col_1_tr' => 0,
    'bg_grad_col_1_ps' => 0,
    'bg_grad_col_2' => '#000000',
    'bg_grad_col_2_tr' => 0,
    'bg_grad_col_2_ps' => 100,
    'bg_img' => '',
    'bg_img_sz' => 'pattern',
    'bg_img_att' => 'scroll'
);
update_option('royal_content', $royal_content);

$royal_inner_content = array(
    'max_width' => 1250,
    'padding_gen' => 5,
    'padding_tp' => 20,
    'padding_rt' => 0,
    'padding_bt' => 25,
    'padding_lt' => 0,
    'padding_ad' => true,
    'bg_color' => '#ffffff',
    'bg_color_tr' => 0,
    'head_color' => '#444444',
    'text_color' => '#8d8d8d',
    'meta_color' => '#999999',
    'link_color' => '#e5ae47',
    'link_hcolor' => '#444444',
    'border_color' => '#ededed',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'underline' => false
);
update_option('royal_inner_content', $royal_inner_content);

$royal_sidebar = array(
    'general_position' => 'top',
    'position' => 'static',
    'equal' => false,
    'on_load' => 'show',
    'width' => 300,
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'section_marg' => 0,
    'background' => 'color',
    'bg_color' => '#ffffff',
    'bg_color_tr' => 1,
    'bg_grad_angle' => 180,
    'bg_grad_col_1' => '#ffffff',
    'bg_grad_col_1_tr' => 0,
    'bg_grad_col_1_ps' => 0,
    'bg_grad_col_2' => '#000000',
    'bg_grad_col_2_tr' => 0,
    'bg_grad_col_2_ps' => 100,
    'bg_img' => '',
    'bg_img_sz' => 'pattern',
    'bg_img_att' => 'scroll',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false
);
update_option('royal_sidebar', $royal_sidebar);

$royal_sidebar_fold_btn = array(
    'label' => false,
    'icon' => 'angle-left',
    'position' => 'fixed',
    'width' => 30,
    'height' => 30,
    'pos_tp' => 0,
    'pos_lt' => 0,
    'fpos_lt' => 0,
    'color' => '#666666',
    'col_tr' => 1,
    'txt_col' => '#fcfcfc',
    'hcol' => '#111111',
    'hcol_tr' => 1,
    'txt_hcol' => '#fcfcfc',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'txt_sz' => 14
);
update_option('royal_sidebar_fold_btn', $royal_sidebar_fold_btn);

$royal_sidebar_scroll = array(
    'label' => false,
    'width' => 8,
    'color' => '#666666',
    'col_tr' => 1,
    'hcol' => '#111111',
    'radius_label' => false,
    'radius' => 0
);
update_option('royal_sidebar_scroll', $royal_sidebar_scroll);

$royal_sidebar_top = array(
    'arrange' => 'vertical_2',
    'position' => 'fixed',
    'fullwidth' => false,
    'scale' => true,
    'scale_height' => 90,
    'padding_gen' => 32,
    'padding_tp' => 5,
    'padding_rt' => 25,
    'padding_bt' => 7,
    'padding_lt' => 33,
    'padding_ad' => true,
    'margin_bt' => 0,
    'alt_height' => 147,
    'bg_color' => '#ffffff',
    'bg_color_tr' => 1,
    'scale_bg_color' => '#ffffff',
    'scale_bg_color_tr' => 1,
    'border_label' => false,
    'scale_border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'shadow_label' => true,
    'scale_shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 1,
    'shad_bl' => 2,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0.1
);
update_option('royal_sidebar_top', $royal_sidebar_top);

$royal_logo = array(
    'label' => true,
    'type' => 'image',
    'image' => 'http://wp-royal.com/hyper-x/ares/wp-content/uploads/2015/10/hx_logo.png',
    'image_retina' => 'http://wp-royal.com/hyper-x/ares/wp-content/uploads/2015/11/hx_logo_ret.png',
    'align' => 'center',
    'width' => 101,
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => true,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 0,
    'txt_col' => '#444444',
    'txt_hcol' => '#444444',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_family' => 'Lato',
    'font_size' => 35,
    'line_height' => 65,
    'letter_space' => 0,
    'font_weight' => 800,
    'italic' => false,
    'uppercase' => false,
    'underline' => false,
    'line_through' => false,
    'txt_shadow_label' => false,
    'txt_shad_h' => 0,
    'txt_shad_v' => 0,
    'txt_shad_bl' => 0,
    'txt_shad_col' => '#000000'
);
update_option('royal_logo', $royal_logo);

$royal_tagline = array(
    'label' => false,
    'align' => 'center',
    'margin_tp' => 0,
    'color' => '#777777',
    'font_family' => 'Lato',
    'font_size' => 13,
    'line_height' => 20,
    'letter_space' => 1,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true,
    'underline' => false,
    'line_through' => false,
    'txt_shadow_label' => false,
    'txt_shad_h' => 0,
    'txt_shad_v' => 0,
    'txt_shad_bl' => 0,
    'txt_shad_col' => '#000000'
);
update_option('royal_tagline', $royal_tagline);

$royal_menu_title = array(
    'label' => false,
    'text' => 'Sidebar Menu',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 0,
    'color' => '#666666',
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_full_width' => false,
    'font_family' => 'Lato',
    'font_size' => 12,
    'line_height' => 15,
    'letter_space' => 0.4,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_menu_title', $royal_menu_title);

$royal_menu_fold = array(
    'db_input' => 'menu_fold-label[false]___menu_fold-icon[navicon]___menu_fold-align[center]___menu_fold-width[45]___menu_fold-height[45]___menu_fold-margin_tp[10]___menu_fold-color[#222222]___menu_fold-txt_color[#fcfcfc]___menu_fold-hover_color[#fcfcfc]___menu_fold-hover_txt_color[#222222]___menu_fold-radius_label[false]___menu_fold-radius[0]___menu_fold-shadow_label[false]___menu_fold-shad_h[0]___menu_fold-shad_v[0]___menu_fold-shad_bl[0]___menu_fold-shad_sp[0]___menu_fold-shad_col[#000000]___menu_fold-shad_col_tr[0]___menu_fold-shad_in[false]___menu_fold-txt_sz[28]'
);
update_option('royal_menu_fold', $royal_menu_fold);

$royal_menu_fold_wrap = array(
    'db_input' => 'menu_fold_wrap-pupup_fx[tn-center-grow]___menu_fold_wrap-pupup_fx_trans[500]___menu_fold_wrap-item_align[vertical]___menu_fold_wrap-margin_gen[0]___menu_fold_wrap-margin_tp[0]___menu_fold_wrap-margin_rt[0]___menu_fold_wrap-margin_bt[0]___menu_fold_wrap-margin_lt[0]___menu_fold_wrap-margin_ad[false]___menu_fold_wrap-color[#ffffff]___menu_fold_wrap-color_tr[0.9]___menu_fold_wrap-shadow_label[false]___menu_fold_wrap-shad_h[0]___menu_fold_wrap-shad_v[0]___menu_fold_wrap-shad_bl[0]___menu_fold_wrap-shad_sp[0]___menu_fold_wrap-shad_col[#000000]___menu_fold_wrap-shad_col_tr[0]___menu_fold_wrap-shad_in[false]'
);
update_option('royal_menu_fold_wrap', $royal_menu_fold_wrap);

$royal_menu_items = array(
    'label' => true,
    'width' => 'block',
    'sub' => 'hover',
    'align' => 'left',
    'top_align' => 'center',
    'list_style' => 'dot',
    'padding_gen' => 8,
    'padding_tp' => 50,
    'padding_rt' => 9,
    'padding_bt' => 16,
    'padding_lt' => 9,
    'padding_ad' => true,
    'margin_gen' => 0,
    'margin_tp' => 43,
    'margin_rt' => 2,
    'margin_bt' => 34,
    'margin_lt' => 2,
    'margin_ad' => true,
    'bg_col' => '#ffffff',
    'sub_bg_col' => '#000000',
    'bg_col_tr' => 0,
    'txt_col' => '#444444',
    'mob_txt_col' => '#444444',
    'bg_hcol' => '#ffffff',
    'bg_hcol_tr' => 0,
    'txt_hcol' => '#e5ae47',
    'mob_txt_hcol' => '#e5ae47',
    'bd_hcol' => '#444444',
    'active_highlight' => true,
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_family' => 'Lato',
    'font_size' => 12,
    'line_height' => 16,
    'letter_space' => 2.8,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_menu_items', $royal_menu_items);

$royal_menu_sub = array(
    'width' => 144,
    'padding_gen' => 10,
    'padding_tp' => 11,
    'padding_rt' => 24,
    'padding_bt' => 13,
    'padding_lt' => 20,
    'padding_ad' => true,
    'top_space' => 1,
    'bg_col' => '#ffffff',
    'txt_col' => '#8d8d8d',
    'bg_hcol' => '#444444',
    'txt_hcol' => '#ffffff',
    'border_label' => true,
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#ededed',
    'wrap_border_label' => true,
    'bd_size_tp' => 3,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e5ae47',
    'shadow_label' => true,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 1,
    'shad_sp' => 0,
    'shad_col' => '#8d8d8d',
    'shad_col_tr' => 0.2
);
update_option('royal_menu_sub', $royal_menu_sub);

$royal_menu_mobile = array(
    'icon' => 'angle-down',
    'bg_color' => '#f5f5f5',
    'bg_color_tr' => 1,
    'text_color' => '#222222',
    'icon_size' => 30,
    'line_height' => 60
);
update_option('royal_menu_mobile', $royal_menu_mobile);

$royal_filters_title = array(
    'label' => false,
    'blog_text' => 'Blog Filters',
    'folio_text' => 'Portfolio Filters',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 0,
    'color' => '#e0e0e0',
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#000000',
    'bd_full_width' => false,
    'font_family' => 'Lato',
    'font_size' => 12,
    'line_height' => 15,
    'letter_space' => 0.4,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_filters_title', $royal_filters_title);

$royal_filter_items = array(
    'label' => true,
    'width' => 'block',
    'deeplinking' => true,
    'portfolio_url' => '',
    'align' => 'center',
    'isotope' => true,
    'blog_all_text' => 'All Posts',
    'portfolio_all_text' => 'All Work',
    'icon' => 'none',
    'icon_side' => 'right',
    'padding_gen' => 7,
    'padding_tp' => 4,
    'padding_rt' => 4,
    'padding_bt' => 9,
    'padding_lt' => 4,
    'padding_ad' => true,
    'margin_gen' => 0,
    'margin_tp' => 0,
    'margin_rt' => 5,
    'margin_bt' => 36,
    'margin_lt' => 5,
    'margin_ad' => true,
    'wrapper_bg_col' => '#fafafa',
    'wrapper_bg_col_tr' => 0,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 1,
    'txt_col' => '#8d8d8d',
    'bg_hcol' => '#e5ae47',
    'bg_hcol_tr' => 0,
    'txt_hcol' => '#444444',
    'bd_hcol' => '#e0e0e0',
    'active_highlight' => true,
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => true,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0.1,
    'shad_in' => false,
    'font_family' => 'Lato',
    'font_size' => 12,
    'line_height' => 21,
    'letter_space' => 1.5,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true,
    'line_through' => true,
    'sup_count' => true
);
update_option('royal_filter_items', $royal_filter_items);

$royal_bPage_general = array(
    'layout' => 'masonry',
    'aspect_x' => '750',
    'aspect_y' => '450',
    'columns_rate' => '1',
    'grid_animated' => false,
    'padding_gen' => 5,
    'padding_tp' => 4,
    'padding_rt' => 0,
    'padding_bt' => 5,
    'padding_lt' => 0,
    'padding_ad' => true,
    'gutter_horz' => 17,
    'gutter_vert' => 17,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 0,
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false
);
update_option('royal_bPage_general', $royal_bPage_general);

$royal_bPage_post = array(
    'media_padding_gen' => 0,
    'media_padding_tp' => 0,
    'media_padding_rt' => 0,
    'media_padding_bt' => 0,
    'media_padding_lt' => 0,
    'media_padding_ad' => false,
    'text_padding_gen' => 15,
    'text_padding_tp' => 18,
    'text_padding_rt' => 20,
    'text_padding_bt' => 32,
    'text_padding_lt' => 20,
    'text_padding_ad' => true,
    'bg_col' => '#ffffff',
    'highlight_even' => true,
    'even_bg_col' => '#ffffff',
    'bg_col_tr' => 1,
    'text_color' => '#8d8d8d',
    'meta_color' => '#8d8d8d',
    'link_color' => '#e5ae47',
    'link_hcolor' => '#444444',
    'border_label' => true,
    'bd_size_gen' => 1,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#efefef',
    'bd_size_tp' => 1,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#efefef',
    'bd_size_rt' => 1,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#efefef',
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#efefef',
    'bd_size_lt' => 1,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#efefef',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_family' => 'Open+Sans'
);
update_option('royal_bPage_post', $royal_bPage_post);

$royal_bPost_title = array(
    'label' => true,
    'position' => 'below',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 4,
    'color' => '#444444',
    'hcolor' => '#444444',
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_full_width' => true,
    'font_family' => 'Lato',
    'font_size' => 17,
    'line_height' => 26,
    'letter_space' => 1,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_bPost_title', $royal_bPost_title);

$royal_bPost_cats = array(
    'label' => false,
    'before_cats' => '',
    'separator' => '',
    'position' => 'below',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 10,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_full_width' => false,
    'font_size' => 12,
    'line_height' => 16,
    'letter_space' => 1,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_bPost_cats', $royal_bPost_cats);

$royal_bPost_meta = array(
    'label' => true,
    'date' => true,
    'author' => true,
    'before_author' => 'By ',
    'separator' => true,
    'position' => 'below',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 12,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'font_size' => 11,
    'line_height' => 16,
    'letter_space' => 1,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_bPost_meta', $royal_bPost_meta);

$royal_bPost_desc = array(
    'label' => true,
    'display_as' => 'excerpt',
    'excerpt_length' => '35',
    'position' => 'below',
    'align' => 'left',
    'padding_bt' => 9,
    'margin_bt' => 14,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'font_size' => 14,
    'line_height' => 24,
    'letter_space' => 0,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_bPost_desc', $royal_bPost_desc);

$royal_bPost_likes = array(
    'label' => false,
    'likes_label' => true,
    'likes_icon' => 'heart-o',
    'comments_label' => true,
    'comments_icon' => 'comment-o',
    'sharing_label' => true,
    'share_face' => true,
    'share_twit' => true,
    'share_gplus' => true,
    'share_linkin' => true,
    'share_pint' => false,
    'share_tumblr' => false,
    'share_reddit' => false,
    'open_on' => 'click',
    'icon_separator' => '|',
    'position' => 'below',
    'align' => 'left',
    'font_size' => 13,
    'line_height' => 21,
    'letter_space' => 0
);
update_option('royal_bPost_likes', $royal_bPost_likes);

$royal_bPost_more = array(
    'label' => false,
    'display' => 'inline',
    'separate' => 'inline-block',
    'align' => 'right',
    'position' => 'below',
    'text' => 'Read More..',
    'icon' => 'none',
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 0,
    'txt_col' => '#8d8d8d',
    'bg_hcol' => '#ffffff',
    'bg_hcol_tr' => 0,
    'txt_hcol' => '#444444',
    'bd_hcol' => '#444444',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false,
    'font_size' => 14,
    'line_height' => 20,
    'letter_space' => 0,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => false,
    'underline' => false
);
update_option('royal_bPost_more', $royal_bPost_more);

$royal_bPost_overlay = array(
    'label' => true,
    'click' => 'postlink',
    'overlay_trans' => '500',
    'icon' => 'none',
    'bg_hcol' => '#ffffff',
    'bg_hcol_tr' => 0.1,
    'txt_hcol' => '#ffffff',
    'icon_size' => 16
);
update_option('royal_bPost_overlay', $royal_bPost_overlay);

$royal_bPost_formats = array(
    'padding_gen' => 5,
    'padding_tp' => 5,
    'padding_rt' => 5,
    'padding_bt' => 5,
    'padding_lt' => 5,
    'padding_ad' => false,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 0.9,
    'txt_col' => '#3a3a3a',
    'radius_label' => false,
    'radius' => 0,
    'font_family' => 'Courgette',
    'font_size' => 16,
    'line_height' => 26,
    'letter_space' => 0,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => false,
    'underline' => false
);
update_option('royal_bPost_formats', $royal_bPost_formats);

$royal_bSingle_header = array(
    'position' => 'below',
    'align' => 'left',
    'display_date' => true,
    'display_cats' => true,
    'display_comments' => true,
    'display_author' => false
);
update_option('royal_bSingle_header', $royal_bSingle_header);

$royal_bSingle_nav = array(
    'label' => true,
    'position' => 'sharing',
    'prev_text' => '',
    'next_text' => '',
    'prev_nxt_icon' => 'chevron',
    'width' => 25,
    'height' => 25,
    'margin_tp' => 10,
    'space_between' => 9,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 0,
    'txt_col' => '#8d8d8d',
    'bg_hcol' => '#555555',
    'bg_hcol_tr' => 0,
    'txt_hcol' => '#444444',
    'bd_hcol' => '#555555',
    'border_label' => false,
    'border_size' => 0,
    'border_style' => 'solid',
    'border_color' => '#e0e0e0',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_size' => 17
);
update_option('royal_bSingle_nav', $royal_bSingle_nav);

$royal_bSingle_share = array(
    'label' => true,
    'sharing_label' => true,
    'label_text' => 'Share Post :',
    'share_face' => false,
    'share_twit' => true,
    'share_gplus' => true,
    'share_linkin' => true,
    'share_pint' => true,
    'share_tumblr' => false,
    'share_reddit' => false,
    'align' => 'center',
    'margin_tp' => 22,
    'padding_tp' => 0,
    'border_label' => false,
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid'
);
update_option('royal_bSingle_share', $royal_bSingle_share);

$royal_pPage_general = array(
    'layout' => 'masonry',
    'aspect_x' => '500',
    'aspect_y' => '340',
    'posts_per_page' => '15',
    'columns_rate' => '1',
    'grid_animated' => false,
    'padding_gen' => 5,
    'padding_tp' => 4,
    'padding_rt' => 0,
    'padding_bt' => 5,
    'padding_lt' => 0,
    'padding_ad' => true,
    'gutter_horz' => 17,
    'gutter_vert' => 17,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 0,
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false
);
update_option('royal_pPage_general', $royal_pPage_general);

$royal_pPage_post = array(
    'text_padding_gen' => 15,
    'text_padding_tp' => 19,
    'text_padding_rt' => 20,
    'text_padding_bt' => 19,
    'text_padding_lt' => 20,
    'text_padding_ad' => true,
    'bg_col' => '#ffffff',
    'highlight_even' => false,
    'even_bg_col' => '#ffffff',
    'bg_col_tr' => 1,
    'text_color' => '#8d8d8d',
    'meta_color' => '#8d8d8d',
    'link_color' => '#8d8d8d',
    'link_hcolor' => '#444444',
    'border_label' => true,
    'bd_size_gen' => 1,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#efefef',
    'bd_size_tp' => 1,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#efefef',
    'bd_size_rt' => 1,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#efefef',
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#efefef',
    'bd_size_lt' => 1,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#efefef',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 1,
    'shad_bl' => 2,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_family' => 'Open+Sans'
);
update_option('royal_pPage_post', $royal_pPage_post);

$royal_pPost_media = array(
    'hover_link' => 'permalink',
    'info_hovers_select' => 'sk-full',
    'hover_fade' => 'fade-out',
    'hover_grow' => 'center-grow',
    'hover_slide' => 'top-slide',
    'hover_skew' => 'skew-top',
    'hover_skew_full' => 'skew-full-top',
    'hover_skew_full_fade' => 'skew-full-fade-top',
    'info_hover_trans' => '500',
    'center_content' => false,
    'padding_gen' => 13,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'info_padding_gen' => 3.5,
    'info_padding_tp' => 3.5,
    'info_padding_rt' => 3.5,
    'info_padding_bt' => 3.5,
    'info_padding_lt' => 4.1,
    'info_padding_ad' => true,
    'background' => 'color',
    'bg_color' => '#ffffff',
    'bg_color_tr' => 0,
    'bg_grad_angle' => 180,
    'bg_grad_col_1' => '#ffffff',
    'bg_grad_col_1_tr' => 0,
    'bg_grad_col_1_ps' => 0,
    'bg_grad_col_2' => '#000000',
    'bg_grad_col_2_tr' => 0,
    'bg_grad_col_2_ps' => 100,
    'bg_img' => '',
    'bg_img_sz' => 'pattern',
    'bg_img_att' => 'scroll',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1
);
update_option('royal_pPost_media', $royal_pPost_media);

$royal_pPost_title = array(
    'label' => true,
    'position' => 'below',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 9,
    'color' => '#444444',
    'hcolor' => '#444444',
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_full_width' => true,
    'font_family' => 'Lato',
    'font_size' => 15,
    'line_height' => 23,
    'letter_space' => 1.5,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_pPost_title', $royal_pPost_title);

$royal_pPost_cats = array(
    'label' => false,
    'before_cats' => '',
    'separator' => ' , ',
    'position' => 'above',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 10,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_full_width' => true,
    'font_size' => 12,
    'line_height' => 16,
    'letter_space' => 1,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_pPost_cats', $royal_pPost_cats);

$royal_pPost_meta = array(
    'label' => false,
    'date' => true,
    'author' => false,
    'before_author' => 'Posted by: ',
    'separator' => false,
    'position' => 'above',
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 0,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'font_size' => 12,
    'line_height' => 16,
    'letter_space' => 1,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_pPost_meta', $royal_pPost_meta);

$royal_pPost_desc = array(
    'label' => false,
    'display_as' => 'excerpt',
    'excerpt_length' => '35',
    'position' => 'below',
    'align' => 'left',
    'padding_bt' => 16,
    'margin_bt' => 0,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'font_size' => 14,
    'line_height' => 24,
    'letter_space' => 0,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_pPost_desc', $royal_pPost_desc);

$royal_pPost_likes = array(
    'label' => true,
    'likes_label' => false,
    'likes_icon' => 'heart-o',
    'comments_label' => false,
    'comments_icon' => 'comment-o',
    'sharing_label' => true,
    'share_face' => true,
    'share_twit' => true,
    'share_gplus' => false,
    'share_linkin' => true,
    'share_pint' => false,
    'share_tumblr' => false,
    'share_reddit' => false,
    'open_on' => 'onload',
    'icon_separator' => '',
    'position' => 'hover',
    'align' => 'left',
    'bg_size' => 33,
    'bg_col' => '#ffffff',
    'bg_hcol' => '#ffffff',
    'font_size' => 12,
    'line_height' => 22,
    'letter_space' => 0
);
update_option('royal_pPost_likes', $royal_pPost_likes);

$royal_pPost_more = array(
    'label' => true,
    'show_lightbox' => false,
    'display' => 'inline',
    'separate' => 'block',
    'align' => 'center',
    'position' => 'hover',
    'info_type' => 'project-link',
    'text' => 'Read More',
    'project_text' => 'See It Live ',
    'icon' => 'external-link',
    'padding_gen' => 5,
    'padding_tp' => 5,
    'padding_rt' => 9,
    'padding_bt' => 6,
    'padding_lt' => 9,
    'padding_ad' => true,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 1,
    'txt_col' => '#8d8d8d',
    'bg_hcol' => '#ffffff',
    'bg_hcol_tr' => 1,
    'txt_hcol' => '#6b6b6b',
    'bd_hcol' => '#111111',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_size' => 12,
    'line_height' => 18,
    'letter_space' => 1,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true,
    'underline' => false
);
update_option('royal_pPost_more', $royal_pPost_more);

$royal_pPost_test = array(
    'label' => true,
    'position' => 'below',
    'align' => 'left',
    'padding_tp' => 14,
    'margin_tp' => 6,
    'border_label' => true,
    'bd_size_tp' => 1,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#efefef',
    'font_family' => 'Open+Sans',
    'font_size' => 13,
    'line_height' => 21,
    'letter_space' => 0,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_pPost_test', $royal_pPost_test);

$royal_pPost_triangle = array(
    'label' => false,
    'vert_position' => 'bottom',
    'width' => 6,
    'height' => 6,
    'horz_position' => 12
);
update_option('royal_pPost_triangle', $royal_pPost_triangle);

$royal_pPost_formats = array(
    'label' => true,
    'audio_icon' => 'volume-up',
    'video_icon' => 'film',
    'gallery_icon' => 'picture-o',
    'position' => 'bottom-right',
    'width' => 38,
    'height' => 38,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 1,
    'txt_col' => '#8d8d8d',
    'radius_label' => true,
    'radius' => 50,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'icon_size' => 16
);
update_option('royal_pPost_formats', $royal_pPost_formats);

$royal_pPost_effects = array(
    'overlay_label' => false,
    'overlay_click' => 'postlink',
    'nxt_prev_image' => false,
    'overlay_icon' => 'none',
    'overlay_trans' => '400',
    'grayscale_label' => false,
    'grayscale_trans' => true,
    'zoom_label' => true,
    'zoom_reverse' => false,
    'rotate' => false,
    'zoom_rate' => '1.07',
    'zoom_trans' => '500',
    'color' => '#ffffff',
    'col_tr' => 0,
    'hcol' => '#ffffff',
    'hcol_tr' => 0,
    'txt_hcol' => '#fcfcfc',
    'icon_size' => 20
);
update_option('royal_pPost_effects', $royal_pPost_effects);

$royal_pSingle_header = array(
    'position' => 'below',
    'align' => 'left',
    'display_date' => false,
    'display_cats' => false,
    'display_comments' => false,
    'display_author' => false
);
update_option('royal_pSingle_header', $royal_pSingle_header);

$royal_pSingle_nav = array(
    'label' => true,
    'position' => 'side',
    'prev_text' => '',
    'next_text' => '',
    'prev_nxt_icon' => 'chevron',
    'back_link' => false,
    'width' => 35,
    'height' => 85,
    'margin_tp' => 10,
    'space_between' => 9,
    'bg_col' => '#3a3a3a',
    'bg_col_tr' => 1,
    'txt_col' => '#ffffff',
    'bg_hcol' => '#3a3a3a',
    'bg_hcol_tr' => 0.9,
    'txt_hcol' => '#ffffff',
    'bd_hcol' => '#555555',
    'border_label' => false,
    'border_size' => 0,
    'border_style' => 'solid',
    'border_color' => '#e0e0e0',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_size' => 17
);
update_option('royal_pSingle_nav', $royal_pSingle_nav);

$royal_pSingle_share = array(
    'label' => true,
    'position' => 'project',
    'sharing_label' => true,
    'label_text' => 'Share Project :',
    'share_face' => true,
    'share_twit' => true,
    'share_gplus' => false,
    'share_linkin' => true,
    'share_pint' => true,
    'share_tumblr' => false,
    'share_reddit' => false,
    'align' => 'center',
    'margin_tp' => 13,
    'padding_tp' => 38,
    'border_label' => false,
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid'
);
update_option('royal_pSingle_share', $royal_pSingle_share);

$royal_pSingle_project = array(
    'label' => false,
    'position' => 'right',
    'equal_height' => false,
    'align' => 'left',
    'link_text' => 'View Project',
    'list_icons' => false,
    'width' => 221,
    'margin_lt' => 40,
    'gutter_vert' => 14,
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'list_border_label' => true,
    'list_bd_size' => 1,
    'list_bd_style' => 'solid'
);
update_option('royal_pSingle_project', $royal_pSingle_project);

$royal_gallery = array(
    'effect' => 'fade',
    'transition' => '1000',
    'delay' => '2000'
);
update_option('royal_gallery', $royal_gallery);

$royal_gallery_arrows = array(
    'label' => true,
    'default' => '1',
    'prev_nxt_icon' => 'angle',
    'width' => 35,
    'height' => 35,
    'color' => '#e5ae47',
    'color_tr' => 1,
    'icon_color' => '#ffffff',
    'icon_size' => 12
);
update_option('royal_gallery_arrows', $royal_gallery_arrows);

$royal_gallery_nav = array(
    'label' => true,
    'align' => 'right',
    'position' => 'inside',
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'width' => 50,
    'height' => 7,
    'gutter' => 0,
    'bg_color' => '#e5ae47',
    'bg_color_tr' => 0.9,
    'color' => '#222222',
    'hover_color' => '#ffffff',
    'radius_label' => false,
    'radius' => 0
);
update_option('royal_gallery_nav', $royal_gallery_nav);

$royal_slideshow_caption = array(
    'label' => true,
    'width' => 'auto',
    'align' => 'center',
    'position' => 'top',
    'padding_gen' => 5,
    'padding_tp' => 8,
    'padding_rt' => 20,
    'padding_bt' => 8,
    'padding_lt' => 20,
    'padding_ad' => true,
    'bg_color' => '#3a3a3a',
    'bg_color_tr' => 1,
    'text_color' => '#ffffff'
);
update_option('royal_slideshow_caption', $royal_slideshow_caption);

$royal_stacked_caption = array(
    'label' => false,
    'align' => 'center',
    'position' => 'bottom',
    'gutter' => 16
);
update_option('royal_stacked_caption', $royal_stacked_caption);

$royal_gallery_default = array(
    'captions' => false,
    'gutter_horz' => 10,
    'gutter_vert' => 10,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1
);
update_option('royal_gallery_default', $royal_gallery_default);

$royal_gallery_lightbox = array(
    'label' => true,
    'icon' => 'expand',
    'bg_hcol' => '#ffffff',
    'bg_hcol_tr' => 0.1,
    'txt_hcol' => '#fcfcfc',
    'icon_size' => 22
);
update_option('royal_gallery_lightbox', $royal_gallery_lightbox);

$royal_similars_general = array(
    'blog_label' => true,
    'blog_showtype' => 'random',
    'portfolio_label' => false,
    'portfolio_showtype' => 'random',
    'posts_number' => '10',
    'columns_rate' => '0',
    'auto_scroll' => false,
    'auto_scroll_delay' => '9000',
    'scroll_trans' => '1000',
    'padding' => 0,
    'image_gutter' => 5,
    'border_label' => false,
    'border_size' => 0,
    'border_style' => 'solid',
    'border_color' => '#e0e0e0',
    'radius_label' => false,
    'radius' => 0
);
update_option('royal_similars_general', $royal_similars_general);

$royal_similars_title = array(
    'blog_text' => 'More Posts',
    'portfolio_text' => 'More Work',
    'align' => 'left',
    'padding_bt' => 14,
    'margin_bt' => 40,
    'border_label' => true,
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_full_width' => true
);
update_option('royal_similars_title', $royal_similars_title);

$royal_similars_arrows = array(
    'label' => false,
    'prev_nxt_icon' => 'angle',
    'width' => 35,
    'height' => 35,
    'bg_col' => '#e5ae47',
    'bg_col_tr' => 1,
    'txt_col' => '#ffffff',
    'bg_hcol' => '#e5ae47',
    'bg_hcol_tr' => 1,
    'txt_hcol' => '#444444',
    'bd_hcol' => '#e0e0e0',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 1,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_size' => 12
);
update_option('royal_similars_arrows', $royal_similars_arrows);

$royal_similars_overlay = array(
    'bg_hcol' => '#ffffff',
    'bg_hcol_tr' => 0.1,
    'txt_bg_hcol' => '#e5ae47',
    'txt_bg_hcol_tr' => 0.9,
    'txt_hcol' => '#fcfcfc',
    'reverse' => false
);
update_option('royal_similars_overlay', $royal_similars_overlay);

$royal_comments_general = array(
    'page_display' => true,
    'blog_display' => true,
    'portfolio_display' => false,
    'moderation_text' => 'Your comment is awaiting moderation!',
    'closed_text' => 'Hey! comments are closed.',
    'max_width' => 940,
    'padding_bt' => 26,
    'margin_bt' => 29,
    'border_label' => true,
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid'
);
update_option('royal_comments_general', $royal_comments_general);

$royal_comments_counter = array(
    'singular_label' => 'Comment',
    'plural_label' => 'Comments',
    'align' => 'left',
    'padding_bt' => 14,
    'margin_bt' => 40,
    'border_label' => true,
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_full_width' => true
);
update_option('royal_comments_counter', $royal_comments_counter);

$royal_comments_image = array(
    'avatar_size' => '55',
    'margin_rt' => 20,
    'radius_label' => true,
    'radius' => 3,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0
);
update_option('royal_comments_image', $royal_comments_image);

$royal_comments_content = array(
    'padding_gen' => 30,
    'padding_tp' => 26,
    'padding_rt' => 30,
    'padding_bt' => 23,
    'padding_lt' => 30,
    'padding_ad' => true,
    'gutter_vert' => 30,
    'bg_color' => '#ffffff',
    'author_bg_color' => '#ffffff',
    'border_label' => true,
    'bd_size_gen' => 1,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#ededed',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#ededed',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#ededed',
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#ededed',
    'bd_size_lt' => 1,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#ededed',
    'bd_ad' => true,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false
);
update_option('royal_comments_content', $royal_comments_content);

$royal_comments_reply = array(
    'padding_bt' => 0,
    'margin_bt' => 3,
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_full_width' => false
);
update_option('royal_comments_reply', $royal_comments_reply);

$royal_inputs_general = array(
    'layout' => '2_half_2_full',
    'align' => 'left',
    'padding_gen' => 9,
    'padding_tp' => 9,
    'padding_rt' => 9,
    'padding_bt' => 9,
    'padding_lt' => 9,
    'padding_ad' => false,
    'gutter' => 15,
    'bg_col' => '#ffffff',
    'txt_col' => '#8d8d8d',
    'error_col' => '#e5ae47',
    'bg_fcol' => '#ffffff',
    'txt_fcol' => '#8d8d8d',
    'bd_fcol' => '#8d8d8d',
    'border_label' => true,
    'bd_size_gen' => 1,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#efefef',
    'bd_size_tp' => 1,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#efefef',
    'bd_size_rt' => 1,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#efefef',
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#efefef',
    'bd_size_lt' => 1,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#efefef',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false
);
update_option('royal_inputs_general', $royal_inputs_general);

$royal_inputs_submit = array(
    'style' => '100%',
    'align' => 'left',
    'padding_gen' => 5,
    'padding_tp' => 9,
    'padding_rt' => 10,
    'padding_bt' => 9,
    'padding_lt' => 10,
    'padding_ad' => true,
    'bg_col' => '#e5ae47',
    'bg_col_tr' => 1,
    'txt_col' => '#ffffff',
    'bg_hcol' => '#cb9b3f',
    'bg_hcol_tr' => 1,
    'txt_hcol' => '#fcfcfc',
    'bd_hcol' => '#555555',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => true,
    'shad_h' => 0,
    'shad_v' => 1,
    'shad_bl' => 2,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0.1,
    'shad_in' => false
);
update_option('royal_inputs_submit', $royal_inputs_submit);

$royal_inputs_search = array(
    'show_top_nav' => false,
    'icon' => 'search',
    'padding_gen' => 14,
    'padding_tp' => 14,
    'padding_rt' => 14,
    'padding_bt' => 14,
    'padding_lt' => 14,
    'padding_ad' => false,
    'margin_gen' => 0,
    'margin_tp' => 9,
    'margin_rt' => 0,
    'margin_bt' => 0,
    'margin_lt' => 0,
    'margin_ad' => true,
    'bg_col' => '#595959',
    'txt_col' => '#ffffff',
    'bg_fcol' => '#111111',
    'txt_fcol' => '#fcfcfc',
    'bd_fcol' => '#111111',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#111111',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#111111',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#111111',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#111111',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#111111',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false
);
update_option('royal_inputs_search', $royal_inputs_search);

$royal_pagination = array(
    'padding_gen' => 15,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 28,
    'padding_lt' => 0,
    'padding_ad' => true,
    'bg_color' => '#ffffff',
    'bg_color_tr' => 0.9,
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false
);
update_option('royal_pagination', $royal_pagination);

$royal_pagination_nav = array(
    'type' => 'infinite',
    'prev_nxt_label' => true,
    'prev_text' => ' Previous Page',
    'nxt_text' => 'Next Page ',
    'prev_nxt_icon' => 'none',
    'first_last_label' => false,
    'first_text' => 'First Page',
    'last_text' => 'Last Page',
    'first_last_icon' => 'none',
    'load_posts' => 'facebook',
    'more_text' => 'Loading...',
    'loading_icon' => 'refresh',
    'prev_page_text' => 'Previous Page',
    'next_page_text' => 'Next Page',
    'prev_next_page_icon' => 'none',
    'align' => 'center',
    'padding_all' => 14,
    'horz_gutter' => 5,
    'bg_col' => '#e5ae47',
    'bg_col_tr' => 0,
    'txt_col' => '#666666',
    'bg_hcol' => '#cb9b3f',
    'bg_hcol_tr' => 0,
    'txt_hcol' => '#6d6d6d',
    'bd_hcol' => '#777777',
    'border_label' => false,
    'border_size' => 0,
    'border_style' => 'solid',
    'border_color' => '#e0e0e0',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 1,
    'shad_bl' => 2,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0.2,
    'shad_in' => false,
    'font_family' => 'Lato',
    'font_size' => 12,
    'line_height' => 15,
    'letter_space' => 1.9,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true,
    'underline' => false
);
update_option('royal_pagination_nav', $royal_pagination_nav);

$royal_cPage_general = array(
    'layout' => 'form_info',
    'list_align' => 'left',
    'reciever_email' => '',
    'gutter' => 50,
    'list_gutter' => 11,
    'border_label' => true,
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_full_width' => true
);
update_option('royal_cPage_general', $royal_cPage_general);

$royal_cPage_title = array(
    'align' => 'left',
    'padding_bt' => 9,
    'margin_bt' => 39,
    'border_label' => true,
    'bd_size_bt' => 1,
    'bd_style_bt' => 'solid',
    'bd_full_width' => true
);
update_option('royal_cPage_title', $royal_cPage_title);

$royal_cPage_map = array(
    'label' => true,
    'position' => 'top',
    'location' => 'so173sq',
    'tooltip_label' => 'My Base is Here',
    'type' => 'ROADMAP',
    'zoom' => '16',
    'mousewheel' => false,
    'nav' => true,
    'type_control' => true,
    'height' => 450
);
update_option('royal_cPage_map', $royal_cPage_map);

$royal_copy_soc_general = array(
    'label' => true,
    'position' => 'static',
    'arrange' => 'vertical',
    'fold_btn_label' => false,
    'fold_btn_icon' => 'caret-up',
    'padding_gen' => 25,
    'padding_tp' => 57,
    'padding_rt' => 34,
    'padding_bt' => 67,
    'padding_lt' => 31,
    'padding_ad' => true,
    'color' => '#eeeeee',
    'col_tr' => 1,
    'fold_btn_color' => '#ffffff',
    'fold_btn_icon_color' => '#666666',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => true,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false
);
update_option('royal_copy_soc_general', $royal_copy_soc_general);

$royal_socials = array(
    'label' => true,
    'url_1' => 'example',
    'icon_1' => 'facebook',
    'url_2' => 'example',
    'icon_2' => 'twitter',
    'url_3' => '',
    'icon_3' => 'google',
    'url_4' => 'example',
    'icon_4' => 'linkedin',
    'url_5' => 'example',
    'icon_5' => 'pinterest',
    'url_6' => '',
    'icon_6' => 'vk',
    'url_7' => '',
    'icon_7' => 'reddit',
    'url_8' => '',
    'icon_8' => 'dribbble',
    'url_9' => '',
    'icon_9' => 'vk',
    'url_10' => '',
    'icon_10' => 'skype',
    'align' => 'center',
    'width' => 38,
    'height' => 38,
    'gutter_horz' => 7,
    'gutter_vert' => 0,
    'padding_bt' => 0,
    'margin_bt' => 18,
    'bg_col' => '#ffffff',
    'bg_col_tr' => 1,
    'txt_col' => '#919191',
    'bg_hcol' => '#e5ae47',
    'bg_hcol_tr' => 1,
    'txt_hcol' => '#ffffff',
    'bd_hcol' => '#3a3a3a',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#e0e0e0',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#e0e0e0',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#e0e0e0',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e0e0e0',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#e0e0e0',
    'bd_ad' => false,
    'radius_label' => true,
    'radius' => 50,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'wrap_border_label' => false,
    'wrap_bd_size_bt' => 0,
    'wrap_bd_style_bt' => 'solid',
    'wrap_bd_col_bt' => '#e0e0e0',
    'wrap_bd_full_width' => false,
    'font_size' => 15,
    'txt_shadow_label' => false,
    'txt_shad_h' => 0,
    'txt_shad_v' => 0,
    'txt_shad_bl' => 0,
    'txt_shad_col' => '#000000'
);
update_option('royal_socials', $royal_socials);

$royal_copyright = array(
    'label' => true,
    'text' => 'Hyper-X Theme. By Royal-Flush 2015 &copy;',
    'align' => 'center',
    'txt_col' => '#9c9c9c',
    'link_col' => '#9c9c9c',
    'link_hcol' => '#e5ae47',
    'font_family' => 'Open+Sans',
    'font_size' => 12,
    'line_height' => 13,
    'letter_space' => 1,
    'font_weight' => 600,
    'italic' => false,
    'uppercase' => true,
    'underline' => true
);
update_option('royal_copyright', $royal_copyright);

$royal_back_btn = array(
    'label' => true,
    'icon' => 'angle-up',
    'show_trans' => '400',
    'scroll_trans' => '600',
    'width' => 45,
    'height' => 42,
    'pos_rt' => 14,
    'pos_bt' => 93,
    'color' => '#525252',
    'col_tr' => 0,
    'txt_col' => '#939393',
    'hcol' => '#555555',
    'hcol_tr' => 0,
    'txt_hcol' => '#3a3a3a',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'txt_sz' => 50
);
update_option('royal_back_btn', $royal_back_btn);

$royal_typography = array(
    'subsets_label' => false,
    'latin_subset' => false,
    'cyrillic_subset' => false,
    'greek_subset' => false,
    'vietnamese_subset' => false,
    'heading_family' => 'Lato',
    'body_text_family' => 'Open+Sans',
    'text_margins' => 15
);
update_option('royal_typography', $royal_typography);

$royal_typography_p = array(
    'font_family' => 'Open+Sans',
    'font_size' => 14,
    'line_height' => 24,
    'letter_space' => 0,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_typography_p', $royal_typography_p);

$royal_typography_h1 = array(
    'font_family' => 'Lato',
    'font_size' => 33,
    'line_height' => 45,
    'letter_space' => 0.5,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_typography_h1', $royal_typography_h1);

$royal_typography_h2 = array(
    'font_family' => 'Lato',
    'font_size' => 24,
    'line_height' => 30,
    'letter_space' => 0.5,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_typography_h2', $royal_typography_h2);

$royal_typography_h3 = array(
    'font_family' => 'Lato',
    'font_size' => 16,
    'line_height' => 36,
    'letter_space' => 0.8,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_typography_h3', $royal_typography_h3);

$royal_typography_h4 = array(
    'font_family' => 'Lato',
    'font_size' => 16,
    'line_height' => 22,
    'letter_space' => 0.5,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_typography_h4', $royal_typography_h4);

$royal_typography_h5 = array(
    'font_family' => 'Lato',
    'font_size' => 14,
    'line_height' => 24,
    'letter_space' => 1,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_typography_h5', $royal_typography_h5);

$royal_typography_h6 = array(
    'font_family' => 'Lato',
    'font_size' => 14,
    'line_height' => 17,
    'letter_space' => 0.5,
    'font_weight' => 400,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_typography_h6', $royal_typography_h6);

$royal_preloader = array ('db_input' => 'preloader-label[true]___preloader-bg_trans[0]___preloader-anim[logo]___preloader-anim_size[normal]___preloader-anim_color[#000000]___preloader-bg_color[#ffffff]___preloader-bg_color_tr[1]___preloader-fx[fade-in,fade-out]___preloader-fx_speed[700]');
update_option('royal_preloader', $royal_preloader);

$royal_sWidgets_title = array(
    'label' => true,
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 0,
    'color' => '#3a3a3a',
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#000000',
    'bd_full_width' => false,
    'font_family' => 'Lato',
    'font_size' => 16,
    'line_height' => 25,
    'letter_space' => 1,
    'font_weight' => 600,
    'italic' => false,
    'uppercase' => false
);
update_option('royal_sWidgets_title', $royal_sWidgets_title);

$royal_sWidgets_content = array(
    'label' => true,
    'align' => 'left',
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'bg_col' => '#000000',
    'bg_col_tr' => 0,
    'txt_col' => '#3a3a3a',
    'link_col' => '#3a3a3a',
    'link_hcol' => '#e5ae47',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 1,
    'shad_in' => false,
    'font_family' => 'Open+Sans',
    'font_size' => 15,
    'line_height' => 25,
    'letter_space' => 0,
    'font_weight' => 500,
    'uppercase' => false,
    'underline' => false
);
update_option('royal_sWidgets_content', $royal_sWidgets_content);

$royal_fWidgets_general = array(
    'inc_blog' => true,
    'inc_blog_single' => true,
    'inc_portfolio' => true,
    'inc_portfolio_single' => true,
    'inc_contact' => true,
    'inc_default' => true,
    'columns' => '4',
    'icon' => 'plus',
    'padding_gen' => 0,
    'padding_tp' => 40,
    'padding_rt' => 33,
    'padding_bt' => 19,
    'padding_lt' => 33,
    'padding_ad' => true,
    'gutter_horz' => 40,
    'gutter_vert' => 40,
    'background' => 'color',
    'bg_color' => '#3a3a3a',
    'bg_color_tr' => 1,
    'bg_grad_angle' => 180,
    'bg_grad_col_1' => '#ffffff',
    'bg_grad_col_1_tr' => 0,
    'bg_grad_col_1_ps' => 0,
    'bg_grad_col_2' => '#000000',
    'bg_grad_col_2_tr' => 0,
    'bg_grad_col_2_ps' => 100,
    'bg_img' => '',
    'bg_img_sz' => 'pattern',
    'bg_img_att' => 'scroll',
    'border_label' => false,
    'bd_size_gen' => 0,
    'bd_style_gen' => 'solid',
    'bd_col_gen' => '#111111',
    'bd_size_tp' => 0,
    'bd_style_tp' => 'solid',
    'bd_col_tp' => '#ededed',
    'bd_size_rt' => 0,
    'bd_style_rt' => 'solid',
    'bd_col_rt' => '#111111',
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#111111',
    'bd_size_lt' => 0,
    'bd_style_lt' => 'solid',
    'bd_col_lt' => '#111111',
    'bd_ad' => false,
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0.1,
    'shad_in' => false
);
update_option('royal_fWidgets_general', $royal_fWidgets_general);

$royal_fWidgets_title = array(
    'label' => true,
    'align' => 'left',
    'padding_bt' => 0,
    'margin_bt' => 10,
    'color' => '#ffffff',
    'border_label' => false,
    'bd_size_bt' => 0,
    'bd_style_bt' => 'solid',
    'bd_col_bt' => '#e8e8e8',
    'bd_full_width' => false,
    'font_family' => 'Lato',
    'font_size' => 15,
    'line_height' => 24,
    'letter_space' => 1,
    'font_weight' => 700,
    'italic' => false,
    'uppercase' => true
);
update_option('royal_fWidgets_title', $royal_fWidgets_title);

$royal_fWidgets_content = array(
    'label' => true,
    'align' => 'left',
    'padding_gen' => 0,
    'padding_tp' => 0,
    'padding_rt' => 0,
    'padding_bt' => 0,
    'padding_lt' => 0,
    'padding_ad' => false,
    'bg_col' => '#000000',
    'bg_col_tr' => 0,
    'txt_col' => '#ffffff',
    'link_col' => '#ffffff',
    'link_hcol' => '#ffffff',
    'radius_label' => false,
    'radius' => 0,
    'shadow_label' => false,
    'shad_h' => 0,
    'shad_v' => 0,
    'shad_bl' => 0,
    'shad_sp' => 0,
    'shad_col' => '#000000',
    'shad_col_tr' => 0,
    'shad_in' => false,
    'font_family' => 'Open+Sans',
    'font_size' => 15,
    'line_height' => 27,
    'letter_space' => 0.5,
    'font_weight' => 400,
    'uppercase' => false,
    'underline' => false
);
update_option('royal_fWidgets_content', $royal_fWidgets_content);

$royal_404_page = array(
    'text' => 'Error 404. Page Not Found!',
    'embed' => 'The page you were looking for appears to have been moved, deleted or does not exist.'
);
update_option('royal_404_page', $royal_404_page);

$royal_custom_css = array(
    'textarea' => "/* Theme-Specific CSS */\n\n.top-nav .sub-menu li a { letter-spacing: 1.6px; }\n.single .gallery-prev-slide, .single .gallery-next-slide { display: none; }\n.testimonial-wrap {  margin-bottom: 10px; }\n.testimonial-wrap strong { font-weight: 600; }\n.contact-form { width: calc(65% - 22.5px); width: -webkit-calc(65% - 22.5px); }\n.contact-info {  width: calc(30% - 22.5px); width: -webkit-calc(30% - 22.5px); }\n.social-share-wrap a { margin-right: 4px; }\n.blog-single .link-and-quote { font-size:20px; }\n",
    'text_color' => '#333333',
    'bg_color' => '#ffffff',
    'bg_color_tr' => 0.7,
    'font_size' => 13,
    'hyperx_activation' => true
);
update_option('royal_custom_css', $royal_custom_css);

$royal_custom_js = array(
    'textarea' => ''
);
update_option('royal_custom_js', $royal_custom_js);

$royal_fake_refresh = array (
    'refresh' => 'on'
);
update_option('royal_fake_refresh', $royal_fake_refresh);