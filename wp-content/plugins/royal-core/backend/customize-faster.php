<?php // Hyper-X Theme Customizer Section Managment

function royal_add_customize_faster() {

	// Add page to submenu
	add_submenu_page(
		'themes.php',
		'Customize Faster',
		'Customize Faster',
		'manage_options',
		'customize-faster',
		'royal_customize_faster'
	);

} // end royal_add_customize_faster
add_action( 'admin_menu', 'royal_add_customize_faster' );

// Sections, Settings, and Fields
function royal_initialize_customize_faster() {

	// Add Section
	add_settings_section(
		'faster_managment',
		'From this page you can Disable some of the Sections to access Theme Customizer Faster.',
		'',
		'customize-faster'
	);

	// --------------------------------------

	// Add settings - colors
	add_settings_field(
		'section_colors',
		'Colors',
		'royal_section_colors_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - colors
	register_setting(
		'faster_managment',
		'section_colors',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - body
	add_settings_field(
		'section_body',
		'Body',
		'royal_section_body_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - body
	register_setting(
		'faster_managment',
		'section_body',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - sidebar
	add_settings_field(
		'section_sidebar',
		'Sidebar',
		'royal_section_sidebar_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - sidebar
	register_setting(
		'faster_managment',
		'section_sidebar',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - logo
	add_settings_field(
		'section_logo',
		'Logo & Tagline',
		'royal_section_logo_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - logo
	register_setting(
		'faster_managment',
		'section_logo',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - menu
	add_settings_field(
		'section_menu',
		'Menu & Filters',
		'royal_section_menu_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - menu
	register_setting(
		'faster_managment',
		'section_menu',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - blog_page
	add_settings_field(
		'section_blog_page',
		'Blog Page',
		'royal_section_blog_page_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - blog_page
	register_setting(
		'faster_managment',
		'section_blog_page',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - blog_single
	add_settings_field(
		'section_blog_single',
		'Blog Single',
		'royal_section_blog_single_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - blog_single
	register_setting(
		'faster_managment',
		'section_blog_single',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - folio_page
	add_settings_field(
		'section_folio_page',
		'Portfolio Page',
		'royal_section_folio_page_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - folio_page
	register_setting(
		'faster_managment',
		'section_folio_page',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - portfolio_single
	add_settings_field(
		'section_portfolio_single',
		'Portfolio Single',
		'royal_section_portfolio_single_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - portfolio_single
	register_setting(
		'faster_managment',
		'section_portfolio_single',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - gallery
	add_settings_field(
		'section_gallery',
		'Gallery',
		'royal_section_gallery_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - gallery
	register_setting(
		'faster_managment',
		'section_gallery',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - similar_posts
	add_settings_field(
		'section_similar_posts',
		'Similar Posts',
		'royal_section_similar_posts_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - similar_posts
	register_setting(
		'faster_managment',
		'section_similar_posts',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - comments
	add_settings_field(
		'section_comments',
		'Comments',
		'royal_section_comments_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - comments
	register_setting(
		'faster_managment',
		'section_comments',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - inputs
	add_settings_field(
		'section_inputs',
		'Inputs',
		'royal_section_inputs_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - inputs
	register_setting(
		'faster_managment',
		'section_inputs',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - pagination
	add_settings_field(
		'section_pagination',
		'Pagination',
		'royal_section_pagination_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - pagination
	register_setting(
		'faster_managment',
		'section_pagination',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - contact_page
	add_settings_field(
		'section_contact_page',
		'Contact Page',
		'royal_section_contact_page_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - contact_page
	register_setting(
		'faster_managment',
		'section_contact_page',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - 404_page
	add_settings_field(
		'section_404_page',
		'404 Page',
		'royal_section_404_page_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - 404_page
	register_setting(
		'faster_managment',
		'section_404_page',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - copy_and_socials
	add_settings_field(
		'section_copy_and_socials',
		'Social Copyright',
		'royal_section_copy_and_socials_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - copy_and_socials
	register_setting(
		'faster_managment',
		'section_copy_and_socials',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - typography
	add_settings_field(
		'section_typography',
		'Typography',
		'royal_section_typography_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - typography
	register_setting(
		'faster_managment',
		'section_typography',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - custom_css
	add_settings_field(
		'section_custom_css',
		'Custom CSS',
		'royal_section_custom_css_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - custom_css
	register_setting(
		'faster_managment',
		'section_custom_css',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - custom_js
	add_settings_field(
		'section_custom_js',
		'Custom JS',
		'royal_section_custom_js_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - custom_js
	register_setting(
		'faster_managment',
		'section_custom_js',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - preloaders
	add_settings_field(
		'section_preloaders',
		'Preloaders',
		'royal_section_preloaders_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - preloaders
	register_setting(
		'faster_managment',
		'section_preloaders',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - sidebar_widgets
	add_settings_field(
		'section_sidebar_widgets',
		'Sidebar Widgets',
		'royal_section_sidebar_widgets_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - sidebar_widgets
	register_setting(
		'faster_managment',
		'section_sidebar_widgets',
		'royal_sanitize_customize_faster'
	);

	// -

	// Add settings - footer_widgets
	add_settings_field(
		'section_footer_widgets',
		'Top & Footer Widgets',
		'royal_section_footer_widgets_display',
		'customize-faster',
		'faster_managment'
	);
	
	// Register settings - footer_widgets
	register_setting(
		'faster_managment',
		'section_footer_widgets',
		'royal_sanitize_customize_faster'
	);


} // end royal_initialize_customize_faster
add_action( 'admin_init', 'royal_initialize_customize_faster' );


// Render Hyper-X Options HTML
function royal_customize_faster() {
?>
	<div class="wrap">
		<h2><?php esc_html_e( 'Customize Faster', 'hyperx' ); ?></h2>
		
		<?php settings_errors(); ?>
		
		<form method="post" action="options.php">
			<?php
				
				// register settings
				settings_fields( 'faster_managment' );

				// buttons
				echo '<div class="toggle-save-btns">';
					echo '<input type="button" value="Toggle All" class="button button-primary">';
					submit_button();
					echo '<a href="'. esc_url(admin_url('/')) .'customize.php" title="Customizer"><input type="button" value="Customize" class="button button-primary"></a>';
				echo '</div>';

				// do settings
				do_settings_sections( 'customize-faster' );

				// buttons
				echo '<div class="toggle-save-btns">';
					echo '<input type="button" value="Toggle All" class="button button-primary">';
					submit_button();
					echo '<a href="'. esc_url(admin_url('/')) .'customize.php" title="Customizer"><input type="button" value="Customize" class="button button-primary"></a>';
				echo '</div>';
				
			?>		
		</form>
	</div><!-- /.wrap -->
<?php
} // end royal_customize_faster

function royal_section_colors_display() {
	$customizer_section_active = ( get_option('section_colors') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_colors.png" alt="section">';
		echo '<input type="checkbox" name="section_colors" id="section_colors" value="1" '. checked( true, get_option('section_colors'), false ) .'>';
	echo '</div>';
}

function royal_section_body_display() {
	$customizer_section_active = ( get_option('section_body') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_body.png" alt="section">';
		echo '<input type="checkbox" name="section_body" id="section_body" value="1" '. checked( true, get_option('section_body'), false ) .'>';
	echo '</div>';
}

function royal_section_sidebar_display() {
	$customizer_section_active = ( get_option('section_sidebar') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_sidebar.png" alt="section">';
		echo '<input type="checkbox" name="section_sidebar" id="section_sidebar" value="1" '. checked( true, get_option('section_sidebar'), false ) .'>';
	echo '</div>';
}

function royal_section_logo_display() {
	$customizer_section_active = ( get_option('section_logo') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_logo.png" alt="section">';
		echo '<input type="checkbox" name="section_logo" id="section_logo" value="1" '. checked( true, get_option('section_logo'), false ) .'>';
	echo '</div>';
}

function royal_section_menu_display() {
	$customizer_section_active = ( get_option('section_menu') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_menu.png" alt="section">';
		echo '<input type="checkbox" name="section_menu" id="section_menu" value="1" '. checked( true, get_option('section_menu'), false ) .'>';
	echo '</div>';
}

function royal_section_blog_page_display() {
	$customizer_section_active = ( get_option('section_blog_page') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_blog_page.png" alt="section">';
		echo '<input type="checkbox" name="section_blog_page" id="section_blog_page" value="1" '. checked( true, get_option('section_blog_page'), false ) .'>';
	echo '</div>';
}

function royal_section_blog_single_display() {
	$customizer_section_active = ( get_option('section_blog_single') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_blog_single.png" alt="section">';
		echo '<input type="checkbox" name="section_blog_single" id="section_blog_single" value="1" '. checked( true, get_option('section_blog_single'), false ) .'>';
	echo '</div>';
}

function royal_section_folio_page_display() {
	$customizer_section_active = ( get_option('section_folio_page') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_folio_page.png" alt="section">';
		echo '<input type="checkbox" name="section_folio_page" id="section_folio_page" value="1" '. checked( true, get_option('section_folio_page'), false ) .'>';
	echo '</div>';
}

function royal_section_portfolio_single_display() {
	$customizer_section_active = ( get_option('section_portfolio_single') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_portfolio_single.png" alt="section">';
		echo '<input type="checkbox" name="section_portfolio_single" id="section_portfolio_single" value="1" '. checked( true, get_option('section_portfolio_single'), false ) .'>';
	echo '</div>';
}

function royal_section_gallery_display() {
	$customizer_section_active = ( get_option('section_gallery') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_gallery.png" alt="section">';
		echo '<input type="checkbox" name="section_gallery" id="section_gallery" value="1" '. checked( true, get_option('section_gallery'), false ) .'>';
	echo '</div>';
}

function royal_section_similar_posts_display() {
	$customizer_section_active = ( get_option('section_similar_posts') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_similar_posts.png" alt="section">';
		echo '<input type="checkbox" name="section_similar_posts" id="section_similar_posts" value="1" '. checked( true, get_option('section_similar_posts'), false ) .'>';
	echo '</div>';
}

function royal_section_comments_display() {
	$customizer_section_active = ( get_option('section_comments') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_comments.png" alt="section">';
		echo '<input type="checkbox" name="section_comments" id="section_comments" value="1" '. checked( true, get_option('section_comments'), false ) .'>';
	echo '</div>';
}

function royal_section_inputs_display() {
	$customizer_section_active = ( get_option('section_inputs') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_inputs.png" alt="section">';
		echo '<input type="checkbox" name="section_inputs" id="section_inputs" value="1" '. checked( true, get_option('section_inputs'), false ) .'>';
	echo '</div>';
}

function royal_section_pagination_display() {
	$customizer_section_active = ( get_option('section_pagination') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_pagination.png" alt="section">';
		echo '<input type="checkbox" name="section_pagination" id="section_pagination" value="1" '. checked( true, get_option('section_pagination'), false ) .'>';
	echo '</div>';
}

function royal_section_contact_page_display() {
	$customizer_section_active = ( get_option('section_contact_page') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_contact_page.png" alt="section">';
		echo '<input type="checkbox" name="section_contact_page" id="section_contact_page" value="1" '. checked( true, get_option('section_contact_page'), false ) .'>';
	echo '</div>';
}

function royal_section_404_page_display() {
	$customizer_section_active = ( get_option('section_404_page') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_404_page.png" alt="section">';
		echo '<input type="checkbox" name="section_404_page" id="section_404_page" value="1" '. checked( true, get_option('section_404_page'), false ) .'>';
	echo '</div>';
}

function royal_section_copy_and_socials_display() {
	$customizer_section_active = ( get_option('section_copy_and_socials') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_copy_and_socials.png" alt="section">';
		echo '<input type="checkbox" name="section_copy_and_socials" id="section_copy_and_socials" value="1" '. checked( true, get_option('section_copy_and_socials'), false ) .'>';
	echo '</div>';
}

function royal_section_typography_display() {
	$customizer_section_active = ( get_option('section_typography') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_typography.png" alt="section">';
		echo '<input type="checkbox" name="section_typography" id="section_typography" value="1" '. checked( true, get_option('section_typography'), false ) .'>';
	echo '</div>';
}

function royal_section_custom_css_display() {
	$customizer_section_active = ( get_option('section_custom_css') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_custom_css.png" alt="section">';
		echo '<input type="checkbox" name="section_custom_css" id="section_custom_css" value="1" '. checked( true, get_option('section_custom_css'), false ) .'>';
	echo '</div>';
}

function royal_section_custom_js_display() {
	$customizer_section_active = ( get_option('section_custom_js') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_custom_js.png" alt="section">';
		echo '<input type="checkbox" name="section_custom_js" id="section_custom_js" value="1" '. checked( true, get_option('section_custom_js'), false ) .'>';
	echo '</div>';
}

function royal_section_preloaders_display() {
	$customizer_section_active = ( get_option('section_preloaders') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_preloaders.png" alt="section">';
		echo '<input type="checkbox" name="section_preloaders" id="section_preloaders" value="1" '. checked( true, get_option('section_preloaders'), false ) .'>';
	echo '</div>';
}

function royal_section_sidebar_widgets_display() {
	$customizer_section_active = ( get_option('section_sidebar_widgets') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_sidebar_widgets.png" alt="section">';
		echo '<input type="checkbox" name="section_sidebar_widgets" id="section_sidebar_widgets" value="1" '. checked( true, get_option('section_sidebar_widgets'), false ) .'>';
	echo '</div>';
}

function royal_section_footer_widgets_display() {
	$customizer_section_active = ( get_option('section_footer_widgets') !== '' ) ? 'customizer-section-active' : '';
	echo '<div class="customizer-section '. esc_attr($customizer_section_active) .'">';
		echo '<img src="'. plugin_dir_url(__FILE__) .'images/section_footer_widgets.png" alt="section">';
		echo '<input type="checkbox" name="section_footer_widgets" id="section_footer_widgets" value="1" '. checked( true, get_option('section_footer_widgets'), false ) .'>';
	echo '</div>';
}

// sanitize values
function royal_sanitize_customize_faster( $options ) { 
	return $options;
}

// enqueue ui css/js
function royal_enqueue_customize_faster_scripts($hook) {

    if ( 'appearance_page_customize-faster' != $hook ) {
        return;
    }

    // enqueue css
	wp_register_style( 'customize-faster-ui', plugin_dir_url(__FILE__) .'/css/customize-faster-ui.css' );
    wp_enqueue_style( 'customize-faster-ui' );

    // enqueue js
    wp_register_script( 'customize-faster-ui', plugin_dir_url(__FILE__) .'/js/customize-faster-ui.js', array(), false, true );
    wp_enqueue_script( 'customize-faster-ui' );

}

add_action( 'admin_enqueue_scripts', 'royal_enqueue_customize_faster_scripts' );