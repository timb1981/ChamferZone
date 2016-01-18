<?php // hyperx Theme Options

function royal_add_cat_sorting_page() {

	// Add page to submenu
	add_submenu_page(
		'edit.php?post_type=royal_portfolio',
		'Category Sorting',
		'Category Sorting',
		'manage_options',
		'hyperx-category-sorting',
		'royal_cat_sorting'
	);

} // end royal_add_cat_sorting_page
add_action( 'admin_menu', 'royal_add_cat_sorting_page' );

// Sections, Settings, and Fields
function royal_initialize_cat_sorting() {

	// Add Section
	add_settings_section(
		'cat_sorting_section',
		'',
		'royal_cat_sorting_description',
		'hyperx-category-sorting'
	);
	
	// Add settings
	add_settings_field(
		'sorted_cat_slugs',
		'Sort Portfolio Categories',
		'royal_cat_sorting_display',
		'hyperx-category-sorting',
		'cat_sorting_section'
	);
	
	// Register settings
	register_setting(
		'cat_sorting_section',
		'sorted_cat_slugs',
		'royal_sanitize_cat_sorting'
	);

	// Add settings
	add_settings_field(
		'sorted_cat_names',
		'',
		'royal_sorted_cat_names_display',
		'hyperx-category-sorting',
		'cat_sorting_section'
	);
	
	// Register settings
	register_setting(
		'cat_sorting_section',
		'sorted_cat_names',
		'royal_sanitize_cat_sorting'
	);

} // end royal_initialize_cat_sorting
add_action( 'admin_init', 'royal_initialize_cat_sorting' );


// Render hyperx Category Sorting HTML
function royal_cat_sorting() {
?>
	<div class="wrap">
		<h2><?php esc_html_e( 'Portfolio Category Sorting', 'hyperx' ); ?></h2>
		
		<?php settings_errors(); ?>
		
		<form method="post" action="options.php">
			<?php

				settings_fields( 'cat_sorting_section' );
				do_settings_sections( 'hyperx-category-sorting' );
				submit_button(); 

			?>		
		</form>
	</div><!-- /.wrap -->
<?php
} // end royal_cat_sorting

// select groups display
function royal_cat_sorting_display() {

	$sorted_cat_slugs = get_option('sorted_cat_slugs');
	$sorted_cat_names = get_option('sorted_cat_names');
	$empty_cat_slugs = '';
	$empty_cat_names = '';

	echo '<input type="hidden" name="sorted_cat_slugs" id="sorted_cat_slugs" value="'. $sorted_cat_slugs .'">';

	// portfolio categories
	$portfolio_cats = get_terms( 'royal_portfolio_cats', array( 'hide_empty' => true) );
	$portfolio_cats_arr = '';

	echo '<ul id="sortable">';

	foreach ( $portfolio_cats as $key => $value ) {
		$empty_cat_slugs .= $value->slug .',';
		$empty_cat_names .= $value->name .',';
		echo '<li class="ui-state-default" data-slug="'. $value->slug .'"><span>'. $value->name .'</span></li>';
	}

	echo '</ul>';

	if ( $sorted_cat_slugs === '' ) {
		update_option( 'sorted_cat_slugs', rtrim($empty_cat_slugs, ',') );
	}

	if ( $sorted_cat_names === '' ) {
		update_option( 'sorted_cat_names', rtrim($empty_cat_names, ',') );
	}

}

function royal_sorted_cat_names_display() {
	$sorted_cat_names = get_option('sorted_cat_names');
	echo '<input type="text" name="sorted_cat_names" id="sorted_cat_names" value="'. $sorted_cat_names .'">';
}

// section description
function royal_cat_sorting_description() {
	echo 'You can sort Portfolio Categories(filters) via Drag & Drop ability. Please Note: After you Add/Delete Portfolio Categories, please come back here and save a new order.';
}

/*  Sanitizes the value that's saved in the header options. */
function royal_sanitize_cat_sorting( $options ) { 
	return $options;
}

// enqueue ui css/js
function royal_enqueue_cat_sorting_scripts($hook) {

    if ( 'royal_portfolio_page_hyperx-category-sorting' != $hook ) {
        return;
    }

    // sortable ui
    wp_enqueue_script('jquery-ui-sortable');

    // enqueue css
	wp_register_style( 'category-sorting', plugin_dir_url(__FILE__) .'css/category-sorting.css' );
    wp_enqueue_style( 'category-sorting' );

    // enqueue js
    wp_register_script( 'category-sorting', plugin_dir_url(__FILE__) .'js/category-sorting.js', array(), false, true );
    wp_enqueue_script( 'category-sorting' );
}

add_action( 'admin_enqueue_scripts', 'royal_enqueue_cat_sorting_scripts' );