<?php // hyperx Theme Options

function royal_add_backup_restore_page() {

	// Add page to submenu
	add_submenu_page(
		'themes.php',
		'Backup-Restore',
		'Backup-Restore',
		'manage_options',
		'hyperx-backup-restore',
		'royal_backup_restore'
	);

} // end royal_add_backup_restore_page
add_action( 'admin_menu', 'royal_add_backup_restore_page' );

// Sections, Settings, and Fields
function royal_initialize_backup_restore() {

	// Add Section
	add_settings_section(
		'backup_restore_section',
		'',
		'royal_backup_restore_description',
		'hyperx-backup-restore'
	);
	
	// Add settings
	add_settings_field(
		'backup_design',
		'Backup/Restore Design',
		'royal_backup_display',
		'hyperx-backup-restore',
		'backup_restore_section'
	);
	
	// Register settings
	register_setting(
		'backup_restore_section',
		'backup_design',
		'royal_sanitize_backup_restore'
	);

} // end royal_initialize_backup_restore
add_action( 'admin_init', 'royal_initialize_backup_restore' );


// Render hyperx Backup-Restore HTML
function royal_backup_restore() {
?>
	<div class="wrap">
		<h2><?php esc_html_e( 'Design Backup-Restore', 'hyperx' ); ?></h2>
		
		<?php settings_errors(); ?>
		
		<form method="post" action="options.php">
			<?php

				settings_fields( 'backup_restore_section' );
				do_settings_sections( 'hyperx-backup-restore' );

			?>		
		</form>
	</div><!-- /.wrap -->
<?php
} // end royal_backup_restore

// backup display
function royal_backup_display() {
	echo '&nbsp;<input type="button" value="Generate" class="button button-primary generate-backup">';
	echo '&nbsp;<input type="button" value="Clear" class="button button-primary clear-backup">';
	echo '&nbsp;<input type="button" value="Restore" class="button button-primary restore-backup">';
	echo '<br>';
	echo '<textarea type="text" name="backup_design" id="backup_design" value="" placeholder="Your Backup Code"></textarea>';
}

// section description
function royal_backup_restore_description() {
	echo '<p><strong>IMORTANT:</strong> This Backup/Restore system only works on Wordpress Theme Customizer Options, nothing more.<br><br>You can always Backup your custom design and Restore it any time you want. Click on "Generate" button to backup your current design, then copy the generated code and save it somewhere on your local machine in a ".txt" file. So if you loose your old design or you want to migrate your custom design from one server to another or etc. You can always come here, just paste previously generated code in the backup/restore field below and click on "Restore" button. that\'s it, so simple.</p>';
}

/*  Sanitizes the value that's saved in the header options. */
function royal_sanitize_backup_restore( $options ) { 
	return $options;
}

// backup design function
function royal_backup_design() {

	$customizer_values = array(
		'royal_sidebar_colors' =>  get_option('royal_sidebar_colors'),
		'royal_content_colors' =>  get_option('royal_content_colors'),
		'royal_footer_colors' =>  get_option('royal_footer_colors'),
		'royal_body' =>  get_option('royal_body'),
		'royal_content' =>  get_option('royal_content'),
		'royal_inner_content' =>  get_option('royal_inner_content'),
		'royal_sidebar' =>  get_option('royal_sidebar'),
		'royal_sidebar_fold_btn' =>  get_option('royal_sidebar_fold_btn'),
		'royal_sidebar_scroll' =>  get_option('royal_sidebar_scroll'),
		'royal_sidebar_top' =>  get_option('royal_sidebar_top'),
		'royal_logo' =>  get_option('royal_logo'),
		'royal_tagline' =>  get_option('royal_tagline'),
		'royal_menu_title' =>  get_option('royal_menu_title'),
		'royal_menu_fold' =>  get_option('royal_menu_fold'),
		'royal_menu_fold_wrap' =>  get_option('royal_menu_fold_wrap'),
		'royal_menu_items' =>  get_option('royal_menu_items'),
		'royal_menu_sub' =>  get_option('royal_menu_sub'),
		'royal_menu_mobile' =>  get_option('royal_menu_mobile'),
		'royal_filters_title' =>  get_option('royal_filters_title'),
		'royal_filter_items' =>  get_option('royal_filter_items'),
		'royal_bPage_general' =>  get_option('royal_bPage_general'),
		'royal_bPage_post' =>  get_option('royal_bPage_post'),
		'royal_bPost_title' =>  get_option('royal_bPost_title'),
		'royal_bPost_cats' =>  get_option('royal_bPost_cats'),
		'royal_bPost_meta' =>  get_option('royal_bPost_meta'),
		'royal_bPost_desc' =>  get_option('royal_bPost_desc'),
		'royal_bPost_likes' =>  get_option('royal_bPost_likes'),
		'royal_bPost_more' =>  get_option('royal_bPost_more'),
		'royal_bPost_overlay' =>  get_option('royal_bPost_overlay'),
		'royal_bPost_formats' =>  get_option('royal_bPost_formats'),
		'royal_bSingle_header' =>  get_option('royal_bSingle_header'),
		'royal_bSingle_nav' =>  get_option('royal_bSingle_nav'),
		'royal_bSingle_share' =>  get_option('royal_bSingle_share'),
		'royal_pPage_general' =>  get_option('royal_pPage_general'),
		'royal_pPage_post' =>  get_option('royal_pPage_post'),
		'royal_pPost_media' =>  get_option('royal_pPost_media'),
		'royal_pPost_title' =>  get_option('royal_pPost_title'),
		'royal_pPost_cats' =>  get_option('royal_pPost_cats'),
		'royal_pPost_meta' =>  get_option('royal_pPost_meta'),
		'royal_pPost_desc' =>  get_option('royal_pPost_desc'),
		'royal_pPost_likes' =>  get_option('royal_pPost_likes'),
		'royal_pPost_more' =>  get_option('royal_pPost_more'),
		'royal_pPost_test' =>  get_option('royal_pPost_test'),
		'royal_pPost_triangle' =>  get_option('royal_pPost_triangle'),
		'royal_pPost_formats' =>  get_option('royal_pPost_formats'),
		'royal_pPost_effects' =>  get_option('royal_pPost_effects'),
		'royal_pSingle_header' =>  get_option('royal_pSingle_header'),
		'royal_pSingle_nav' =>  get_option('royal_pSingle_nav'),
		'royal_pSingle_share' =>  get_option('royal_pSingle_share'),
		'royal_pSingle_project' =>  get_option('royal_pSingle_project'),
		'royal_gallery' =>  get_option('royal_gallery'),
		'royal_gallery_arrows' =>  get_option('royal_gallery_arrows'),
		'royal_gallery_nav' =>  get_option('royal_gallery_nav'),
		'royal_slideshow_caption' =>  get_option('royal_slideshow_caption'),
		'royal_stacked_caption' =>  get_option('royal_stacked_caption'),
		'royal_gallery_default' =>  get_option('royal_gallery_default'),
		'royal_gallery_lightbox' =>  get_option('royal_gallery_lightbox'),
		'royal_similars_general' =>  get_option('royal_similars_general'),
		'royal_similars_title' =>  get_option('royal_similars_title'),
		'royal_similars_arrows' =>  get_option('royal_similars_arrows'),
		'royal_similars_overlay' =>  get_option('royal_similars_overlay'),
		'royal_comments_general' =>  get_option('royal_comments_general'),
		'royal_comments_counter' =>  get_option('royal_comments_counter'),
		'royal_comments_image' =>  get_option('royal_comments_image'),
		'royal_comments_content' =>  get_option('royal_comments_content'),
		'royal_comments_reply' =>  get_option('royal_comments_reply'),
		'royal_inputs_general' =>  get_option('royal_inputs_general'),
		'royal_inputs_submit' =>  get_option('royal_inputs_submit'),
		'royal_inputs_search' =>  get_option('royal_inputs_search'),
		'royal_pagination' =>  get_option('royal_pagination'),
		'royal_pagination_nav' =>  get_option('royal_pagination_nav'),
		'royal_cPage_general' =>  get_option('royal_cPage_general'),
		'royal_cPage_title' =>  get_option('royal_cPage_title'),
		'royal_cPage_map' =>  get_option('royal_cPage_map'),
		'royal_copy_soc_general' =>  get_option('royal_copy_soc_general'),
		'royal_socials' =>  get_option('royal_socials'),
		'royal_copyright' =>  get_option('royal_copyright'),
		'royal_back_btn' =>  get_option('royal_back_btn'),
		'royal_typography' =>  get_option('royal_typography'),
		'royal_typography_p' =>  get_option('royal_typography_p'),
		'royal_typography_h1' =>  get_option('royal_typography_h1'),
		'royal_typography_h2' =>  get_option('royal_typography_h2'),
		'royal_typography_h3' =>  get_option('royal_typography_h3'),
		'royal_typography_h4' =>  get_option('royal_typography_h4'),
		'royal_typography_h5' =>  get_option('royal_typography_h5'),
		'royal_typography_h6' =>  get_option('royal_typography_h6'),
		'royal_preloader' =>  get_option('royal_preloader'),
		'royal_sWidgets_title' =>  get_option('royal_sWidgets_title'),
		'royal_sWidgets_content' =>  get_option('royal_sWidgets_content'),
		'royal_fWidgets_general' =>  get_option('royal_fWidgets_general'),
		'royal_fWidgets_title' =>  get_option('royal_fWidgets_title'),
		'royal_fWidgets_content' =>  get_option('royal_fWidgets_content'),
		'royal_404_page' =>  get_option('royal_404_page'),
		'royal_custom_css' =>  get_option('royal_custom_css'),
		'royal_custom_js' =>  get_option('royal_custom_js'),
		'royal_fake_refresh' =>  get_option('royal_fake_refresh'),
	);

	echo json_encode($customizer_values, 2);

}

add_action( 'wp_ajax_royal_backup_design', 'royal_backup_design' );

// restore design function
function royal_restore_backup() {

	$_POST['restore_backup'] = str_replace("\\\"", '"', $_POST['restore_backup']);
	$_POST['restore_backup'] = str_replace("\\\\", '\\', $_POST['restore_backup']);

	$customizer_values = json_decode($_POST['restore_backup'], true);

	// update customizer data
	foreach ($customizer_values as $key => $value) {
		update_option( $key, $value );
	}

}

add_action( 'wp_ajax_royal_restore_backup', 'royal_restore_backup' );


// enqueue ui css/js
function royal_enqueue_backup_restore_scripts($hook) {

    if ( 'appearance_page_hyperx-backup-restore' != $hook ) {
        return;
    }

    // enqueue css
	wp_register_style( 'backup-restore', plugin_dir_url(__FILE__) .'css/backup-restore.css' );
    wp_enqueue_style( 'backup-restore' );

    // enqueue js
    wp_register_script( 'backup-restore', plugin_dir_url(__FILE__) .'js/backup-restore.js', array(), false, true );
    wp_enqueue_script( 'backup-restore' );

}

add_action( 'admin_enqueue_scripts', 'royal_enqueue_backup_restore_scripts' );