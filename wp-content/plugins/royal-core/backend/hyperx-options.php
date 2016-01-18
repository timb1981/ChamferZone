<?php // Hyper-X Theme Options

function royal_add_options_page() {

	// Add page to submenu
	add_submenu_page(
		'themes.php',
		'Hyper-X Templates',
		'Hyper-X Templates',
		'manage_options',
		'hyperx-options',
		'royal_theme_options'
	);

} // end royal_add_options_page
add_action( 'admin_menu', 'royal_add_options_page' );

// Sections, Settings, and Fields
function royal_initialize_theme_options() {

	// Add Section
	add_settings_section(
		'design_section',
		'',
		'royal_design_section_description',
		'hyperx-options'
	);
	
	// Add settings
	add_settings_field(
		'select_group',
		'Select Group of Designs',
		'royal_select_group_display',
		'hyperx-options',
		'design_section'
	);
	
	// Register settings
	register_setting(
		'design_section',
		'select_group',
		'royal_sanitize_hyperx_options'
	);

	// Add settings
	add_settings_field(
		'active_design',
		'Select Group of Designs',
		'royal_active_design_display',
		'hyperx-options',
		'design_section'
	);
	
	// Register settings
	register_setting(
		'design_section',
		'active_design',
		'royal_sanitize_hyperx_options'
	);

} // end royal_initialize_theme_options
add_action( 'admin_init', 'royal_initialize_theme_options' );


// Render Hyper-X Options HTML
function royal_theme_options() {
?>
	<div class="wrap">
		<h2><?php esc_html_e( 'Hyper-X Theme Options', 'hyperx' ); ?></h2>
		
		<?php settings_errors(); ?>
		
		<form method="post" action="options.php">
			<?php
			
				settings_fields( 'design_section' );
				do_settings_sections( 'hyperx-options' );
				submit_button(); 
				
			?>		
		</form>
	</div><!-- /.wrap -->
<?php
} // end royal_theme_options

// select groups display
function royal_select_group_display() {
	
	// get values from db 
	$select_group = get_option( 'select_group' );

	$html = '<label for="select_group">';
		$html .= '<select name="select_group" id="select_group" >';
		$html .= '<option value="default" '. esc_attr( selected( 'default', $select_group, false ) ) .'>Default</option>';
		$html .= '</select>';
	$html .= '</label>';

	echo ''. $html;

	?>
	
	<!-- default -->
	<ul id="default" class="design-list">

		<!-- Ares -->
		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/ares'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/ares.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Ares</span>
				<input type="button" value="Import" data-title="ares" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Ares" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Athena -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/athena'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/athena.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Athena</span>
				<input type="button" value="Import" data-title="athena" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Athena" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Roch -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/roch'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/roch.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Roch</span>
				<input type="button" value="Import" data-title="roch" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Roch" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Hecate -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/hecate'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/hecate.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Hecate</span>
				<input type="button" value="Import" data-title="hecate" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Hecate" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Riven -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/riven'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/riven.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Riven</span>
				<input type="button" value="Import" data-title="riven" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Riven" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Niko -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/niko'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/niko.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Niko</span>
				<input type="button" value="Import" data-title="niko" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Niko" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Hephaestus -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/hephaestus'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/hephaestus.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Hephaestus</span>
				<input type="button" value="Import" data-title="hephaestus" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Hephaestus" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Iris -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/iris'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/iris.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Iris</span>
				<input type="button" value="Import" data-title="iris" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Iris" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Hermes -->
 		<li>
			<div class="thumbnail-wrapper">
				<a target="_blank" href="<?php echo esc_url('http://wp-royal.com/hyper-x/hermes'); ?>">
					<div>
						<span class="dashicons dashicons-admin-links"></span>
					</div>
				</a>
				<img src="<?php echo plugin_dir_url(__FILE__) .'import/thumbnails/hermes.jpg'; ?>" alt="">
			</div>
			<div class="setup-buttons">
				<span>Hermes</span>
				<input type="button" value="Import" data-title="hermes" class="button button-primary royal-import">
				<input type="button" value="Activate" data-title="Hermes" class="button button-secondary royal-activate">
			</div>
		</li>

		<!-- Coming Soon -->
		<li>
			<div class="thumbnail-wrapper coming-soon-wrapper">
				<span>10+ Demos</span><br>
				<span>Are Coming Very Soon!</span>
			</div>
		</li>

	</ul>

	<?php

} // end royal_select_group_display

// active design display
function royal_active_design_display() {

	// get values from db 
	$active_design = get_option( 'active_design' );

	$html = '<label for="active_design" class="hidden">';

		$html .= '<select name="active_design" id="active_design" >';

		// default
		$html .= '<option value="ares" '. esc_attr( selected( 'ares', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="athena" '. esc_attr( selected( 'athena', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="roch" '. esc_attr( selected( 'roch', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="hecate" '. esc_attr( selected( 'hecate', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="riven" '. esc_attr( selected( 'riven', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="niko" '. esc_attr( selected( 'niko', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="hephaestus" '. esc_attr( selected( 'hephaestus', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="iris" '. esc_attr( selected( 'iris', $active_design, false ) ) .'>_</option>';
		$html .= '<option value="hermes" '. esc_attr( selected( 'hermes', $active_design, false ) ) .'>_</option>';

		$html .= '</select>';

	$html .= '</label>';

	echo ''. $html;

}

// section description
function royal_design_section_description() {
	echo 'From this page you can Activate Designs or Import Demo Content.';
}

// sanitize values
function royal_sanitize_hyperx_options( $options ) { 
	return $options;
}

// enqueue ui css/js
function royal_enqueue_hyperx_options_scripts($hook) {

    if ( 'appearance_page_hyperx-options' != $hook ) {
        return;
    }

    // enqueue css
	wp_register_style( 'hyperx-options-ui', plugin_dir_url(__FILE__) .'css/hyperx-options-ui.css' );
    wp_enqueue_style( 'hyperx-options-ui' );

    // enqueue js
    wp_register_script( 'hyperx-options-ui', plugin_dir_url(__FILE__) .'js/hyperx-options-ui.js', array(), false, true );
    wp_enqueue_script( 'hyperx-options-ui' );

}

add_action( 'admin_enqueue_scripts', 'royal_enqueue_hyperx_options_scripts' );