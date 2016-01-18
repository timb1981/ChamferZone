<?php
/*
Plugin Name: Royal Core
Plugin URI: http://wp-royal.com/
Description: This is a core plugin for Royal-Flush themes (Currently compatible only with Hyper-X Theme). Which includes Royal Portfolio, Royal Widgets, Royal Shortcodes and Back-end Options.
Version: 1.6
Author: Royal-Flush
Author URI: http://themeforest.net/user/Royal-Flush
*/


// Prevent direct access of this file
if( ! defined( 'ABSPATH' ) ) {
	die( __( 'Access is Denied', 'hyperx' ) );
}

// if current theme is cufo return
$current_theme = wp_get_theme();
if ( $current_theme->get( 'Name' ) === 'Cufo') {
	return;
}


/*
***************************************************************
* 1. Royal Portfolio
***************************************************************
*/

	// Create class Royal_Portfolio, which adds CPT Portfolio, CT Portfolio Categories & CT Portfolio Skills
	if ( ! class_exists('Royal_Portfolio') ) {

		class Royal_Portfolio {

			function __construct() {

				// clear permalinks & register functions
				register_activation_hook( __FILE__, array( $this, 'royal_clear_permalinks' ) );

				// Register Portfolio CPT on Wordpress init
				add_action( 'init', array( $this, 'royal_portfolio_cpt' ) );

				// Register Portfolio Categories CT on Wordpress init
				add_action( 'init', array( $this, 'royal_portfolio_cats' ) );

				// Register Portfolio Skills CT on Wordpress init
				add_action( 'init', array( $this, 'royal_portfolio_skills' ) );
			}

			function royal_clear_permalinks() {

				// call all functions
				$this->royal_portfolio_cpt();
				$this->royal_portfolio_cats();
				$this->royal_portfolio_skills();

				// automatic flushing of rewrite rules
				flush_rewrite_rules();
			}

			// Custom post type - Portfolio
			function royal_portfolio_cpt() {

				// configuration of CPT
				$args = array(
					'labels' => array(
						'name' 				 => __( 'Portfolio', 'hyperx' ),
						'singular_name' 	 => __( 'Portfolio Item', 'hyperx' ),
						'all_items'			 => __( 'All Items', 'hyperx' ),
						'add_new_item'		 => __( 'Add New Item', 'hyperx' )
					),
					'public' 			=> true,
					'capability_type' 	=> 'post',
					'rewrite' 			=> array( 'slug' => 'portfolio/items' ),
					'supports' 			=> array( 'title', 'editor', 'post-formats', 'thumbnail', 'comments' ),
					'menu_position' 	=> 2,
					'menu_icon' 		=> 'dashicons-portfolio'
				);

				// register post type - Portfolio
				register_post_type( 'royal_portfolio', $args );

			} // end func royal_portfolio_cpt

			// Custom taxonomy - Portfolio Categories
			function royal_portfolio_cats() {

				// configuration of CT
				$args = array(
					'labels' => array(
						'name'				=> __( 'Portfolio Categories', 'hyperx' ),
						'singular_name'		=> __( 'Portfolio Category', 'hyperx' ),
						'search_items'		=> __( 'Search Categories', 'hyperx' ),
						'popular_items'		=> __( 'Popular Categories', 'hyperx' ),
						'all_items'			=> __( 'All Categories', 'hyperx' ),
						'parent_item'		=> __( 'Parent Category', 'hyperx' ),
						'parent_item_colon' => __( 'Parent Category:', 'hyperx' ),
						'edit_item'			=> __( 'Edit Category', 'hyperx' ),
						'update_item' 		=> __( 'Update Category', 'hyperx' ),
						'add_new_item'		=> __( 'Add New Category', 'hyperx' ),
						'new_item_name'		=> __( 'New Category Name', 'hyperx' ),
						'menu_name'			=> __( 'Portfolio Categories', 'hyperx' )
					),
					'public' 			=> true,
					'show_in_nav_menus' => true,
					'show_admin_column' => true,
					'show_tagcloud'		=> true,
					'hierarchical' 		=> true,
					'rewrite' 			=> array("slug" => "portfolio/category")
				);

				// register taxonomy - Portfolio Categories
				register_taxonomy( 'royal_portfolio_cats', array( 'royal_portfolio' ), $args );

			} // end func royal_portfolio_cats


			// Custom taxonomy - Portfolio Skills
			function royal_portfolio_skills() {

				// configuration of CT
				$args = array(
					'labels' => array(
						'name'				=> __( 'Portfolio Skills', 'hyperx' ),
						'singular_name'		=> __( 'Portfolio Skill', 'hyperx' ),
						'search_items'		=> __( 'Search Skills', 'hyperx' ),
						'popular_items'		=> __( 'Popular Skills', 'hyperx' ),
						'all_items'			=> __( 'All Skills', 'hyperx' ),
						'parent_item'		=> __( 'Parent Skill', 'hyperx' ),
						'parent_item_colon' => __( 'Parent Skill:', 'hyperx' ),
						'edit_item'			=> __( 'Edit Skill', 'hyperx' ),
						'update_item'		=> __( 'Update Skill', 'hyperx' ),
						'add_new_item'		=> __( 'Add New Skill', 'hyperx' ),
						'new_item_name'		=> __( 'New Skill Name', 'hyperx' ),
						'menu_name'			=> __( 'Portfolio Skills', 'hyperx' )
					),
					'public' 			=> true,
					'show_in_nav_menus' => false,
					'show_admin_column' => true,
					'hierarchical' 		=> true,
					'show_tagcloud'		=> false,
					'rewrite' 			=> array("slug" => "portfolio/skill")
				);

				// register taxonomy - Portfolio Skills
				register_taxonomy( 'royal_portfolio_skills', array( 'royal_portfolio' ), $args );

			} // end func royal_portfolio_skills

		} // end class Royal_Portfolio

		// create object - Royal_Portfolio
		new Royal_Portfolio;

	}



/*
***************************************************************
* 2. Royal Recent Portfolio Widget
***************************************************************
*/

	// extend default WP_Widget class
	class Royal_Recent_Portfolio_Widget extends WP_Widget {

		// init
		public function __construct() {
			$widget_opts = array(
				'classname'		=> 'widget_recent_portfolio',
				'description' 	=> __( "Your site&#8217;s most recent Portfolio Posts.")
			);

			parent::__construct(
				'recent_portfolio',
				__( 'Recent Portfolio Posts', 'hyperx' ),
				$widget_opts
			);
		}

		// back-end output
		public function form($instance) {
			$defaults = array(
				'title' 		  => __( 'Recent Portfolio Posts', 'hyperx' ),
				'posts_number' 	  => 4,
				'display_image'   => true,
				'display_date' 	  => true,
				'order_by_random' => false
			);

			$instance = wp_parse_args( (array)$instance, $defaults );
			?>

				<!-- Title -->
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'hyperx' ); ?></label>
					<input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
				</p>

				<!-- Posts Number -->
				<p>
					<label for="<?php echo $this->get_field_id('posts_number'); ?>"><?php _e( 'Number of posts to show:', 'hyperx' ); ?></label>
					<input type="text" size="3" name="<?php echo $this->get_field_name('posts_number'); ?>" id="<?php echo $this->get_field_id('posts_number'); ?>" value="<?php echo esc_attr($instance['posts_number']); ?>">
				</p>

				<p>
					<input type="checkbox" name="<?php echo $this->get_field_name('display_image'); ?>" id="<?php echo $this->get_field_id('display_image'); ?>"<?php checked( $instance['display_image'] ); ?>>
					<label for="<?php echo $this->get_field_id('display_image'); ?>"><?php _e( 'Display post Thumbnail?', 'hyperx' ); ?></label>
				</p>

				<p>
					<input type="checkbox" name="<?php echo $this->get_field_name('display_date'); ?>" id="<?php echo $this->get_field_id('display_date'); ?>"<?php checked( $instance['display_date'] ); ?>>
					<label for="<?php echo $this->get_field_id('display_date'); ?>"><?php _e( 'Display post Date?', 'hyperx' ); ?></label>
				</p>

				<p>
					<input type="checkbox" name="<?php echo $this->get_field_name('order_by_random'); ?>" id="<?php echo $this->get_field_id('order_by_random'); ?>"<?php checked( $instance['order_by_random'] ); ?>>
					<label for="<?php echo $this->get_field_id('order_by_random'); ?>"><?php _e( 'Order by random?', 'hyperx' ); ?></label>
				</p>

			<?php
		}

		// save/update
		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			// Title
			$instance['title'] = wp_filter_nohtml_kses($new_instance['title']);

			// Posts Number
			$instance['posts_number'] = intval($new_instance['posts_number']);

			// Thumbnail
			$instance['display_image'] = isset( $new_instance['display_image'] ) ? (bool) $new_instance['display_image'] : false;

			// Date
			$instance['display_date'] = isset( $new_instance['display_date'] ) ? (bool) $new_instance['display_date'] : false;

			// Order by
			$instance['order_by_random'] = isset( $new_instance['order_by_random'] ) ? (bool) $new_instance['order_by_random'] : false;

			return $instance;
		}

		// display widget content
		public function widget( $args, $instance ) {
			extract($args);

			$title 			 = apply_filters( 'widget-title', $instance['title'] );
			$posts_number 	 = $instance['posts_number'];
			$display_image 	 = isset( $instance['display_image'] ) ? (bool) $instance['display_image'] : false;
			$display_date 	 = isset( $instance['display_date'] ) ? (bool) $instance['display_date'] : false;
			$order_by_random = isset( $instance['order_by_random'] ) ? (bool) $instance['order_by_random'] : false;

			// widget html
			echo $before_widget;

			if ( $title ) {
				echo $before_title . $title . $after_title;
			}

			if ( $order_by_random ) {
				$orderby = 'rand';
			} else {
				$orderby = 'date';
			}

			// loop through portfolio posts
			$portfolio = new WP_Query(array(
				'post_type' 	 => 'royal_portfolio',
				'posts_per_page' => $posts_number,
				'orderby'		 => $orderby
			));

			?>


			<div>
				<ul>
				<?php while( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

					<li>

						<!-- Thumbnail -->
						<?php if ( $display_image === true) : ?>
							<div class="recent-folio-thumb">
								<i class="fa fa-image"></i>
								<?php the_post_thumbnail('thumbnail'); ?>
							</div>
						<?php endif; ?>

						<!-- Title -->
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

						<!-- Date -->
						<?php if ( $display_date ) : ?>
							<span ><?php the_time( get_option('date_format') ); ?></span>
						<?php endif; ?>

					</li>

				<?php endwhile; ?>

				<!-- Restore Original Loop -->
				<?php wp_reset_postdata(); ?>
				</ul>
			</div>


			<?php

			echo $after_widget;

		}

	} // end Royal_Recent_Portfolio_Widget class


	// register
	function register_Royal_Recent_Portfolio_Widget() {
	   register_widget( 'Royal_Recent_Portfolio_Widget' );
	}

	add_action( 'widgets_init', 'register_Royal_Recent_Portfolio_Widget' );



/*
***************************************************************
* 3. Royal Shortcodes for Visual Composer
***************************************************************
*/

// check if visual composer is activated
	if ( function_exists('vc_map') ) :

// Royal Portfolio Grid
	function royal_portfolio_shortcode( $atts ) {
	    $parameters = shortcode_atts( array(
	        'portfolio_display_from' => 'all',
	        'portfolio_display_order' => 'date',
	        'portfolio_custom_categories' => '',
	        'portfolio_custom_ids' => '',
	        'portfolio_display_filters' => '',
	        'portfolio_display_pagination' => '',
	        'portfolio_display_title' => '',
	        'portfolio_display_categories' => '',
	        'portfolio_display_date' => '',
	        'portfolio_display_description' => '',
	        'portfolio_display_likes' => '',
	        'portfolio_display_more_info' => '',
	        'portfolio_display_testimonial' => '',
	        'portfolio_layout_mode' => 'masonry',
	        'portfolio_posts_number' => '10',
	        'portfolio_columns_rate' => '0',
	        'portfolio_gutter_horz' => '20',
	        'portfolio_gutter_vert' => '20',
	        'portfolio_stretch_container' => '',
	        'portfolio_disable_paddings' => '',
	        'portfolio_disable_margins' => '',
	    ), $atts );

	    extract($parameters);

		// get theme customizer data
		$pPage_general 	= get_option( 'royal_pPage_general' );
		$pPost_media 	= get_option( 'royal_pPost_media' );
		$pPost_title 	= get_option( 'royal_pPost_title' );
		$pPost_cats 	= get_option( 'royal_pPost_cats' );
		$pPost_meta 	= get_option( 'royal_pPost_meta' );
		$pPost_desc 	= get_option( 'royal_pPost_desc' );
		$pPost_likes 	= get_option( 'royal_pPost_likes' );
		$pPost_more 	= get_option( 'royal_pPost_more' );
		$pPost_test 	= get_option( 'royal_pPost_test' );
		$sidebar 		= get_option( 'royal_sidebar' );
		$filter_items 	= get_option( 'royal_filter_items' );

		global $post;

		// define enable / disable
        $portfolio_display_title = $portfolio_display_title === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';
        $portfolio_display_categories = $portfolio_display_categories === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';
        $portfolio_display_date = $portfolio_display_date === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';
        $portfolio_display_description = $portfolio_display_description === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';
        $portfolio_display_likes = $portfolio_display_likes === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';
        $portfolio_display_more_info = $portfolio_display_more_info === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';
        $portfolio_display_testimonial = $portfolio_display_testimonial === 'yes' ? 'royal-grid-enable' : 'royal-grid-disable';

		?>


		<!-- Portfolio Filters -->
		<?php if ( $portfolio_display_filters === 'yes' && $portfolio_display_from !== 'custom_ids' ) : ?>
		<ul class="filters body-section" data-sort="<?php echo get_option('sorted_cat_slugs'); ?>">

			<?php if ( $filter_items['isotope'] === true ) : ?>
			<li>
				<a class="rf-button active-filter-item active-state" data-filter="*">
					<i class="fa fa-<?php echo $filter_items['icon']; ?>"></i>
					<span><?php echo $filter_items['portfolio_all_text']; ?></span>
					<i class="fa fa-<?php echo $filter_items['icon']; ?>"></i>
					<sup></sup>
				</a>
			<?php endif; ?>
			
			<?php // Portfolio Filters

			// portfolio categories
			$portfolio_cats = get_terms('royal_portfolio_cats');

			// show all portfolio item filters
			if ( $portfolio_display_from === 'all' ) {

				// if category array is not empty
				if ( count($portfolio_cats) > 0 ) {
					foreach ( $portfolio_cats as $cats => $cat ) {
						$cat_url = ( $filter_items['isotope']  === true ) ? '' : 'href="'. get_term_link( $cat, 'royal_portfolio_cats' ) .'"';
						echo '<li><a '. $cat_url .' class="rf-button" data-filter=".'. urldecode($cat->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
					}
				}

			// show portfolio item filters from custom categories
			} elseif ( $portfolio_display_from === 'custom_categories' ) {

				// get custom categories
				$portfolio_cats = explode( ',', $portfolio_custom_categories );

				foreach ( $portfolio_cats as $key => $value ) {
					$current_cat_name = get_category_by_slug($value);
					$cat_url = ( $filter_items['isotope']  === true ) ? '' : 'href="'. get_term_link( $value, 'royal_portfolio_cats' ) .'"';
					echo '<li><a '. $cat_url .' class="rf-button" data-filter=".'. urldecode($current_cat_name->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $current_cat_name->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
				
				}

			} // endif

			?>

		</ul>
		<?php endif; ?>


		<?php

		if ( $portfolio_display_from !== 'custom_ids') {

			if ( get_query_var('paged') ) {
			    $paged = get_query_var('paged');
			} else if ( get_query_var('page') ) {
			    $paged = get_query_var('page');
			} else {
			    $paged = 1;
			}

			// portfolio categories
			$portfolio_cats = get_terms('royal_portfolio_cats');
			$portfolio_custom_categories = explode( ',', $portfolio_custom_categories );

			$all_cats = '';

			if ( ! empty($portfolio_cats) ) {
				foreach ( $portfolio_cats as $key => $value ) {
					$all_cats[] = urldecode($value->slug);
				}
			}

			// categories which will be displayed
			$cats_2_show = ( $portfolio_display_from === 'all' ) ? $all_cats : $portfolio_custom_categories;

			if ( empty($cats_2_show) ) {
				$cats_2_show = '';
			}

			$tax_query_args = array(
				'taxonomy'  => 'royal_portfolio_cats',
				'field' 	=> 'slug',
				'terms' 	=> $cats_2_show
			);

			$portfolio = new WP_Query(array(
				'post_type' 	 => 'royal_portfolio',
				'tax_query' 	 => array( $tax_query_args ),
				'posts_per_page' => $portfolio_posts_number,
				'post__not_in' 	 => array(get_the_ID()),
				'paged' 		 => $paged,
				'orderby' 		 => $portfolio_display_order
			));

		} else {

			$portfolio_custom_ids = explode( ',', $portfolio_custom_ids );

			$portfolio = new WP_Query(array(
				'post_type' => 'royal_portfolio',
				'post__in' 	=> $portfolio_custom_ids,
			));	

		}

		// Portfolio Posts Container Attributes
		$portfolio_container_atts  = 'data-layout="'	  .  $portfolio_layout_mode 	 .'" ';
		$portfolio_container_atts .= 'data-columns-rate="'.  $portfolio_columns_rate 	 .'" ';
		$portfolio_container_atts .= 'data-gutter-horz="' .  $portfolio_gutter_horz 	 .'" ';
		$portfolio_container_atts .= 'data-gutter-vert="' .  $portfolio_gutter_vert 	 .'" ';
		$portfolio_container_atts .= 'data-aspect-width="' . $pPage_general['aspect_x']  .'" ';
		$portfolio_container_atts .= 'data-aspect-height="'. $pPage_general['aspect_y']  .'" ';

		// container class
		$portfolio_container_class = '';

		if ( $portfolio_disable_paddings === 'yes' ) {
			$portfolio_container_class .= 'portfolio-container-no-padding ';
		}

		if ( $portfolio_stretch_container === 'yes' ) {
			$portfolio_container_class .= 'stretch-container ';
		}

		if ( $portfolio_disable_margins !== 'yes' ) {
			$portfolio_container_class .= 'body-section';
		}



		if ( $portfolio->have_posts() ) :

		echo '<section id="portfolio-container" class="'. $portfolio_container_class .'" '. $portfolio_container_atts .' >';

		// default post width for masonry-metro
		if ( $pPage_general['layout'] === 'masonry-metro') {
			echo '<div class="portfolio-grid-sizer"></div>';
		}

		// portfolio page loop - displayes portfolio items
		while ( $portfolio->have_posts() ) : $portfolio->the_post();

			// get data from custom fields
			$rf_project_url 		= get_post_meta( $post->ID, 'rf_project_url', true );
			$rf_testimonial_author  = get_post_meta( $post->ID, 'rf_testimonial_author', true );
			$rf_testimonial_content = get_post_meta( $post->ID, 'rf_testimonial_content', true );
			$rf_metro_post_width 	= get_post_meta( $post->ID, 'rf_metro_post_width', true );

			// Metro Layout Grid
			$metro_width_class = '';
			
			// custom post width for masonry-metro
			if ( $pPage_general['layout'] === 'masonry-metro') {
				$metro_width_class = 'post-width'. $rf_metro_post_width;
			}

			$custom_post_class = implode( ' ', royal_cat_classes('portfolio') ) .' '. $metro_width_class;
			
		?>

		<!-- Begin Post -->
		<article <?php post_class( $custom_post_class ); ?> id="post-<?php the_ID(); ?>">

			<div class="portfolio-post-inner<?php echo $pPage_general['grid_animated'] ? ' rf-grid-animated' : ''; ?>">

			<!-- Post Text Block - Above Media -->
			<div class="post-text-wrap">

				<?php

					// Post Title
					if ( $pPost_title['position'] === 'above' ) {
						royal_post_title( $portfolio_display_title );
					}

					// Post Categories & Filters
					if ( $pPost_cats['position'] === 'above' ) {
						royal_post_categories( 'portfolio', $pPost_cats['before_cats'], $pPost_cats['separator'], $portfolio_display_categories );
					}

					// Post Date & Author
					if ( $pPost_meta['position'] === 'above' ) {
						royal_post_date_and_author( 'portfolio', $pPost_meta['before_author'], $portfolio_display_date );
					}

					// Post Excerpt || Post Content
					if ( $pPost_desc['position'] === 'above' ) {
						royal_post_content( $pPost_desc['display_as'], $pPost_desc['excerpt_length'], $portfolio_display_description );
					}

					// Likes, Sharing & Comments
					if ( $pPost_likes['position'] === 'above' ) {
						royal_post_likes_comments_sharing( array(
							'likes_icon' 	=> $pPost_likes['likes_icon'],
							'comments_icon' => $pPost_likes['comments_icon'],
							'separator' 	=> $pPost_likes['icon_separator'],
							'sharing_open' 	=> $pPost_likes['open_on']
						), $portfolio_display_likes );
					}

					// Read More & Project Link
					if ( $pPost_more['position'] === 'above' ) {
						royal_post_more_info( array(
							'type' 		=> 'portfolio',
							'info_type' => $pPost_more['info_type'],
							'link' 		=> $rf_project_url,
							'link_text' => $pPost_more['project_text'],
							'more_text' => $pPost_more['text'],
							'more_icon' => $pPost_more['icon']
						), $portfolio_display_more_info );
					}

					// Client Testimonial
					if ( $pPost_test['position'] === 'above' ) {
						royal_portfolio_testimonial( $rf_testimonial_author, $rf_testimonial_content, $portfolio_display_testimonial );
					}

				?>

			</div><!-- End .post-text-wrap -->


			<!-- Post Media Block -->
			<div class="post-media-wrap">
				
				<div class="post-media-in-wrap">

					<!-- Post Media -->
					<div class="post-media">

						<!-- Decorational Triangle -->
						<div class="triangle-wrap"></div>

						<!-- include post format media content -->
						<?php get_template_part( 'post-formats/content', get_post_format() ); ?>

					</div><!-- end .post-media -->

					<?php

						// get portfolio item info hovers
						if ( $pPost_media['info_hovers_select'] === 'fade' ) {
							$info_hover = $pPost_media['hover_fade'];
						} elseif ( $pPost_media['info_hovers_select'] === 'grow' ) {
							$info_hover = $pPost_media['hover_grow'];
						} elseif ( $pPost_media['info_hovers_select'] === 'slide' ) {
							$info_hover = $pPost_media['hover_slide'];
						} elseif ( $pPost_media['info_hovers_select'] === 'skew' ) {
							$info_hover = $pPost_media['hover_skew'];
						} elseif ( $pPost_media['info_hovers_select'] === 'sk-full' ) {
							$info_hover = $pPost_media['hover_skew_full'];
						} elseif ( $pPost_media['info_hovers_select'] === 'skfull-fd' ) {
							$info_hover = $pPost_media['hover_skew_full_fade'];
						} else {
							$info_hover = array(
								'fade',
								'center-grow',
								'center-grow-full',
								'top-left-grow',
								'top-right-grow',
								'bottom-left-grow',
								'bottom-right-grow',
								'top-slide',
								'bottom-slide',
								'left-slide',
								'right-slide',
								'skew-top',
								'skew-bottom',
								'skew-left',
								'skew-right',
								'skew-full-top',
								'skew-full-bottom',
								'skew-full-left',
								'skew-full-right',
								'skew-full-fade-top',
								'skew-full-fade-bottom',
								'skew-full-fade-left',
								'skew-full-fade-right'
							);

							$info_hover_number = array_rand( $info_hover, 1 );
							$info_hover = $info_hover[$info_hover_number];
						}

					?>

					<!-- Post Info Hovers -->
					<div class="media-hovers media-hover-<?php echo $info_hover; ?>">

						<div class="media-hovers-outer">
							<div class="media-hovers-inner">

							<?php

								// Post Title
								if ( $pPost_title['position'] === 'hover' ) {
									royal_post_title( $portfolio_display_title );
								}

								// Post Categories & Filters
								if ( $pPost_cats['position'] === 'hover' ) {
									royal_post_categories( 'portfolio', $pPost_cats['before_cats'], $pPost_cats['separator'], $portfolio_display_categories );
								}

								// Post Date & Author
								if ( $pPost_meta['position'] === 'hover' ) {
									royal_post_date_and_author( 'portfolio', $pPost_meta['before_author'], $portfolio_display_date );
								}

								// Post Excerpt || Post Content
								if ( $pPost_desc['position'] === 'hover' ) {
									royal_post_content( $pPost_desc['display_as'], $pPost_desc['excerpt_length'], $portfolio_display_description );
								}

								// Likes, Sharing & Comments
								if ( $pPost_likes['position'] === 'hover' ) {
									royal_post_likes_comments_sharing( array(
										'likes_icon' 	=> $pPost_likes['likes_icon'],
										'comments_icon' => $pPost_likes['comments_icon'],
										'separator' 	=> $pPost_likes['icon_separator'],
										'sharing_open' 	=> $pPost_likes['open_on']
									), $portfolio_display_likes );
								}

								// Read More & Project Link
								if ( $pPost_more['position'] === 'hover' ) {
									royal_post_more_info( array(
										'type' 		=> 'portfolio',
										'info_type' => $pPost_more['info_type'],
										'link' 		=> $rf_project_url,
										'link_text' => $pPost_more['project_text'],
										'more_text' => $pPost_more['text'],
										'more_icon' => $pPost_more['icon']
									), $portfolio_display_more_info );
								}

								// Client Testimonial
								if ( $pPost_test['position'] === 'hover' ) {
									royal_portfolio_testimonial( $rf_testimonial_author, $rf_testimonial_content, $portfolio_display_testimonial );
								}


								// Media Hover Link
								$lightbox_img_src = wp_get_attachment_url( get_post_thumbnail_id() );
								
								if ( get_post_format() === 'video' ) {

									// get data from custom fields
									$rf_video_type  	= get_post_meta( $post->ID, 'rf_video_type', true );
									$rf_video_embed 	= get_post_meta( $post->ID, 'rf_video_embed', true );

									$rf_video_lightbox = '';

									if ( $rf_video_type === 'embed' ) {
										if ( strpos($rf_video_embed, 'www.youtube.com') ) {
											$rf_video_embed = substr($rf_video_embed, strpos($rf_video_embed, 'embed/') + 6, strlen($rf_video_embed));
											$rf_video_embed = substr($rf_video_embed, 0, strpos($rf_video_embed, '"'));
											$rf_video_lightbox = 'https://youtu.be/'. $rf_video_embed;
										} elseif ( strpos($rf_video_embed, 'player.vimeo.com') ) {
											$rf_video_embed = substr($rf_video_embed, strpos($rf_video_embed, 'video/') + 6, strlen($rf_video_embed));
											$rf_video_embed = substr($rf_video_embed, 0, strpos($rf_video_embed, '"'));
											$rf_video_lightbox = 'http://vimeo.com/'. $rf_video_embed;
										}
									} else {
										$full_size_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
										$rf_video_lightbox = $full_size_img[0];
									}

									$lightbox_img_src = $rf_video_lightbox;
									
								} elseif ( get_post_format() === 'audio' ) {

									// get data from custom fields
									$rf_audio_type  = get_post_meta( $post->ID, 'rf_audio_type', true );
									$rf_audio_embed = get_post_meta( $post->ID, 'rf_audio_embed', true );

									if ( $rf_audio_type === 'embed' ) {
										$src_length = strpos($rf_audio_embed, 'visual=true"') - strpos($rf_audio_embed, 'src="') + 6;
										$src_position = strpos($rf_audio_embed, 'src="') + 5;
										$rf_audio_embed = substr($rf_audio_embed, $src_position, $src_length);
									}

									$lightbox_img_src = $rf_audio_embed;

								}

								// get image ALT text
								$attachment = get_post( get_post_thumbnail_id() );
								$attachment_title = '';

								if ( $attachment !== null ) {
									$attachment_title = esc_attr( $attachment->post_title );
								}
							
								if ( $pPost_media['hover_link'] === 'permalink' ) {
									echo '<a href="'. get_the_permalink() .'" class="media-hover-link"></a>';
								} elseif ( $pPost_media['hover_link'] === 'lightbox' ) {
									echo '<a href="'. esc_url( $lightbox_img_src ) .'" rel="prettyPhoto[portfolio]" class="media-hover-link" data-title="'. $attachment_title .'"></a>';
								}

							?>
							
							</div>
						</div>

					</div><!-- end .media-hovers -->
			
				</div><!-- end .post-media-in-wrap -->

			</div><!-- end .post-media-wrap -->


			<!-- Post Text wrap - Below Media -->
			<div class="post-text-wrap">

				<?php

					// Post Title
					if ( $pPost_title['position'] === 'below' ) {
						royal_post_title( $portfolio_display_title );
					}

					// Post Categories & Filters
					if ( $pPost_cats['position'] === 'below' ) {
						royal_post_categories( 'portfolio', $pPost_cats['before_cats'], $pPost_cats['separator'], $portfolio_display_categories );
					}

					// Post Date & Author
					if ( $pPost_meta['position'] === 'below' ) {
						royal_post_date_and_author( 'portfolio', $pPost_meta['before_author'], $portfolio_display_date );
					}

					// Post Excerpt || Post Content
					if ( $pPost_desc['position'] === 'below' ) {
						royal_post_content( $pPost_desc['display_as'], $pPost_desc['excerpt_length'], $portfolio_display_description );
					}

					// Likes, Sharing & Comments
					if ( $pPost_likes['position'] === 'below' ) {
						royal_post_likes_comments_sharing( array(
							'likes_icon' 	=> $pPost_likes['likes_icon'],
							'comments_icon' => $pPost_likes['comments_icon'],
							'separator' 	=> $pPost_likes['icon_separator'],
							'sharing_open' 	=> $pPost_likes['open_on']
						), $portfolio_display_likes );
					}

					// Read More & Project Link
					if ( $pPost_more['position'] === 'below' ) {
						royal_post_more_info( array(
							'type' 		=> 'portfolio',
							'info_type' => $pPost_more['info_type'],
							'link' 		=> $rf_project_url,
							'link_text' => $pPost_more['project_text'],
							'more_text' => $pPost_more['text'],
							'more_icon' => $pPost_more['icon']
						), $portfolio_display_more_info );
					}

					// Client Testimonial
					if ( $pPost_test['position'] === 'below' ) {
						royal_portfolio_testimonial( $rf_testimonial_author, $rf_testimonial_content, $portfolio_display_testimonial );
					}

				?>

			</div><!-- end .post-text-wrap -->

			</div><!-- end .portfolio-post-inner -->

		</article><!-- End Post -->

		<?php endwhile; ?>


		</section><!-- End #portfolio-container -->


		<?php 

		// restore original post data
		wp_reset_postdata();

		// posts pagination
		if ( $portfolio_display_pagination === 'yes' && $portfolio_display_from !== 'custom_ids' ) {
			royal_pagination( $portfolio->max_num_pages, 'infinite' );
		}

		?>


		<!-- if have no posts -->
		<?php else: ?>
			<div class="inner-content">
				<h3><?php _e( 'No Portfolio Items found!', 'hyperx' ); ?></h3>
			</div>
		<?php endif; ?>

	    <?php
	}

	add_shortcode( 'royal_portfolio', 'royal_portfolio_shortcode' );

	vc_map( array(
	   'name' => __( 'Royal Portfolio', 'hyperx' ),
	   'base' => 'royal_portfolio',
	   'category' => __( 'Royal Shortcodes', 'hyperx' ),
	   'admin_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'front_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'params' => array(
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Display Posts From', 'hyperx' ),
			'param_name' => 'portfolio_display_from',
			'value' => array (
				__( 'All Posts', 'hyperx' ) => 'all',
				__( 'Custom Categories', 'hyperx' ) => 'custom_categories',
				__( 'Custom IDs', 'hyperx' ) => 'custom_ids',
			),
			'description' => __( 'Choose which Portfolio Posts to display. Please NOTE: This Shortcode(element) should be placed inside a separate ROW, in the other case it will NOT work properly.', 'hyperx' )
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Posts Display Order', 'hyperx' ),
			'param_name' => 'portfolio_display_order',
			'value' => array (
				__( 'Date', 'hyperx' ) => 'date',
				__( 'Random', 'hyperx' ) => 'rand',
			),
			'description' => ''
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Comma separated Custom Category Slugs', 'hyperx' ),
			'param_name' => 'portfolio_custom_categories',
			'value' => 'food, fashion, anotherslug',
			'description' => 'Very Important Note: Please insert Category Slugs(lowercase slug format) not actual category names. You should insert in this format: food, fashion, anotherslug and so on...',
			'dependency' => array (
				'element' => 'portfolio_display_from',
				'value' => array ( 'custom_categories' )
			)
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Comma separated Custom Post IDs', 'hyperx' ),
			'param_name' => 'portfolio_custom_ids',
			'value' => '14, 33, 102',
			'description' => 'The ID of the post. Ex: http://wp-royal.com/sun/wp-admin/post.php?post=14&action=edit - from here ID will be "14". You should insert in this format: 14, 33, 102 and so on... For more details whatch Video tutorial on this link: YOUTUBE LINK REUQIRED',
			'dependency' => array (
				'element' => 'portfolio_display_from',
				'value' => array ( 'custom_ids' )
			)
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Category Filters', 'hyperx' ),
			'param_name' => 'portfolio_display_filters',
			'value' => array( '&nbsp;- Display Category Filters?' => 'yes' ),
			'description' => '',
			'dependency' => array (
				'element' => 'portfolio_display_from',
				'value' => array ( 'all', 'custom_categories' )
			)
	      ),
	      array (
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => __( 'Pagination', 'hyperx' ),
				'param_name' => 'portfolio_display_pagination',
				'value' => array( '&nbsp;- Display Pagination?' => 'yes' ),
				'description' => __( 'Please don\'t enable Pagination when you insert "Royal Portfolio" Shortcode into the Single Post Content.', 'hyperx' ),
				'dependency' => array (
					'element' => 'portfolio_display_from',
					'value' => array ( 'all', 'custom_categories' )
				)
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Title', 'hyperx' ),
			'param_name' => 'portfolio_display_title',
			'value' => array( '&nbsp;- Display Title?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Categories', 'hyperx' ),
			'param_name' => 'portfolio_display_categories',
			'value' => array( '&nbsp;- Display Categories?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Date & Author', 'hyperx' ),
			'param_name' => 'portfolio_display_date',
			'value' => array( '&nbsp;- Display Date & Author?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Description', 'hyperx' ),
			'param_name' => 'portfolio_display_description',
			'value' => array( '&nbsp;- Display Description?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Likes, Comments & Share', 'hyperx' ),
			'param_name' => 'portfolio_display_likes',
			'value' => array( '&nbsp;- Display Likes, Comments & Share?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'More Info', 'hyperx' ),
			'param_name' => 'portfolio_display_more_info',
			'value' => array( '&nbsp;- Display More Info Button?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Testimonial', 'hyperx' ),
			'param_name' => 'portfolio_display_testimonial',
			'value' => array( '&nbsp;- Display Testimonial?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Layout Mode', 'hyperx' ),
			'param_name' => 'portfolio_layout_mode',
			'value' => array(
				__( 'Masonry (Unlimited Height)', 'hyperx' ) => 'masonry',
				__( 'Metro (Masonry - Different Width)', 'hyperx' ) => 'masonry-metro',
				__( 'FitRows (Limited Height)', 'hyperx' ) => 'fitRows'
			),
			'description' => __( 'These Options will override original ones which are set from the Theme Customizer -> Portfolio Page (section) -> General (Tabs) -> General (window). But please Note: Aspect Ratios (X & Y) should be set from the Theme Customizer. And also please Note that "Layout Mode" option will be inherited from the Theme Customizer if you insert "Royal Portfolio" Shortcode into the Single Post Content, So consider to set the same values there and here too.', 'hyperx' )
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Number of Posts to Display', 'hyperx' ),
			'param_name' => 'portfolio_posts_number',
			'value' => '10',
			'description' => '',
			'dependency' => array (
				'element' => 'portfolio_display_from',
				'value' => array ( 'all', 'custom_categories' )
			)
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Columns Rate', 'hyperx' ),
			'param_name' => 'portfolio_columns_rate',
			'value' => array(
				'-1' => '-1',
				'0' => '0',
				'1' => '+1',
				'2' => '+2',
				__( '1 Constant', 'hyperx' ) => 'one',
				__( '2 Constant', 'hyperx' ) => 'two',
				__( '3 Constant', 'hyperx' ) => 'three',
				__( '4 Constant', 'hyperx' ) => 'four'
			),
			'description' => ''
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Horizontal Gutter', 'hyperx' ),
			'param_name' => 'portfolio_gutter_horz',
			'value' => '20',
			'description' => 'Please enter only numeric value. Ex: 20.',
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Vertical Gutter', 'hyperx' ),
			'param_name' => 'portfolio_gutter_vert',
			'value' => '20',
			'description' => 'Please enter only numeric value. Ex: 20.',
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Stretch Container', 'hyperx' ),
			'param_name' => 'portfolio_stretch_container',
			'value' => array( '&nbsp;- Stretch Portfolio Container?' => 'yes' ),
			'description' => 'If you enable this feature you should set "Row Stretch" to "Default" value.'
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Container Paddings', 'hyperx' ),
			'param_name' => 'portfolio_disable_paddings',
			'value' => array( '&nbsp;- Disable Container Paddings?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Container Margins', 'hyperx' ),
			'param_name' => 'portfolio_disable_margins',
			'value' => array( '&nbsp;- Disable Container Margins?' => 'yes' ),
			'description' => ''
	      ),
	   )
	) );


// Royal Blog Grid
	function royal_blog_shortcode( $atts ) {

	    $parameters = shortcode_atts( array(
	        'blog_display_from' => 'all',
	        'blog_custom_categories' => '',
	        'blog_custom_ids' => '',
	        'blog_display_filters' => '',
	        'blog_display_pagination' => '',
	        'blog_layout_mode' => 'masonry',
	        'blog_posts_number' => '10',
	        'blog_columns_rate' => '0',
	        'blog_gutter_horz' => '20',
	        'blog_gutter_vert' => '20',
	        'blog_stretch_container' => '',
	        'blog_disable_paddings' => '',
	        'blog_disable_margins' => '',
	    ), $atts );

	    extract($parameters);

		// get theme customizer data
		$bPage_general 	= get_option( 'royal_bPage_general' );
		$bPost_title 	= get_option( 'royal_bPost_title');
		$bPost_cats 	= get_option( 'royal_bPost_cats' );
		$bPost_meta 	= get_option( 'royal_bPost_meta' );
		$bPost_desc 	= get_option( 'royal_bPost_desc' );
		$bPost_likes 	= get_option( 'royal_bPost_likes' );
		$bPost_more 	= get_option( 'royal_bPost_more' );
		$sidebar 		= get_option( 'royal_sidebar' );
		$filter_items 	= get_option( 'royal_filter_items' );

		global $post;

	    ?>

		<!-- Blog Filters -->
		<?php if ( $blog_display_filters === 'yes' && $blog_display_from !== 'custom_ids'  ) : ?>

			<ul class="filters body-section">

				<?php if ( $filter_items['isotope'] === true ) : ?>
				<li>
					<a class="rf-button active-filter-item active-state" data-filter="*">
						<i class="fa fa-<?php echo $filter_items['icon']; ?>"></i>
						<span><?php echo $filter_items['blog_all_text']; ?></span>
						<i class="fa fa-<?php echo $filter_items['icon']; ?>"></i>
						<sup></sup>
					</a>
				<?php endif; ?>
				
				<?php // Portfolio Filters

				// blog categories
				$blog_cats = get_terms('category');

				// show all blog item filters
				if ( $blog_display_from === 'all' ) {

					// if category array is not empty
					if ( count($blog_cats) > 0 ) {
						foreach ( $blog_cats as $cats => $cat ) {
							$cat_url = ( $filter_items['isotope']  === true ) ? '' : 'href="'. get_term_link( $cat, 'category' ) .'"';
							echo '<li><a '. $cat_url .' class="rf-button" data-filter=".'. urldecode($cat->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
						}
					}

				// show blog item filters from custom categories
				} elseif ( $blog_display_from === 'custom_categories' ) {

					// get custom categories
					$blog_cats = explode( ',', $blog_custom_categories );

					foreach ( $blog_cats as $key => $value ) {
						$current_cat_name = get_category_by_slug($value);
						$cat_url = ( $filter_items['isotope']  === true ) ? '' : 'href="'. get_term_link( $value, 'category' ) .'"';
						echo '<li><a '. $cat_url .' class="rf-button" data-filter=".'. urldecode($current_cat_name->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $current_cat_name->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
					
					}

				} // endif

				?>

			</ul>

		<?php endif; ?>


		<?php

		// Blog Posts Container
		$blog_container_atts  = 'data-layout="'		  . $blog_layout_mode 			.'" ';
		$blog_container_atts .= 'data-columns-rate="' . $blog_columns_rate 			.'" ';
		$blog_container_atts .= 'data-gutter-horz="'  . $blog_gutter_horz 			.'" ';
		$blog_container_atts .= 'data-gutter-vert="'  . $blog_gutter_vert 			.'" ';
		$blog_container_atts .= 'data-aspect-width="' . $bPage_general['aspect_x']  .'" ';
		$blog_container_atts .= 'data-aspect-height="'. $bPage_general['aspect_y'] 	.'" ';

		// container class
		$blog_container_class = '';

		if ( $blog_stretch_container === 'yes' ) {
			$blog_container_class .= 'stretch-container ';
		}

		if ( $blog_disable_paddings === 'yes' ) {
			$blog_container_class .= 'blog-container-no-padding ';
		}

		if ( $blog_disable_margins !== 'yes' ) {
			$blog_container_class .= 'body-section';
		}


		if ( $blog_display_from !== 'custom_ids') {

			if ( get_query_var('paged') ) {
			    $paged = get_query_var('paged');
			} else if ( get_query_var('page') ) {
			    $paged = get_query_var('page');
			} else {
			    $paged = 1;
			}

			// blog categories
			$blog_cats = get_terms('category');
			$blog_custom_categories = explode( ',', $blog_custom_categories );

			if ( ! empty($blog_cats) ) {
				foreach ( $blog_cats as $key => $value ) {
					$all_cats[] = urldecode($value->slug);
				}
			}

			// categories which will be displayed
			$cats_2_show = ( $blog_display_from === 'all' ) ? $all_cats : $blog_custom_categories;

			if ( empty($cats_2_show) ) {
				$cats_2_show = '';
			}

			$tax_query_args = array(
				'taxonomy'  => 'category',
				'field' 	=> 'slug',
				'terms' 	=> $cats_2_show
			);

			$blog = new WP_Query(array(
				'post_type' 	 => 'post',
				'tax_query' 	 => array( $tax_query_args ),
				'posts_per_page' => $blog_posts_number,
				'post__not_in' 	 => array(get_the_ID()),
				'paged' 		 => $paged,
			));

		} else {

			$blog_custom_ids = explode( ',', $blog_custom_ids );

			$blog = new WP_Query(array(
				'post_type' => 'post',
				'post__in' 	=> $blog_custom_ids,
			));	

		}

		if ( $blog->have_posts() ) :

		echo '<section id="blog-container"  class="'. $blog_container_class .'"  '. $blog_container_atts .' >';

		// default post width for masonry-metro
		if ( $bPage_general['layout'] === 'masonry-metro') {
			echo '<div class="blog-grid-sizer"></div>';
		}

		// index page loop - displays blog posts
		while ( $blog->have_posts() ) : $blog->the_post();

			// get data from custom fields
			$rf_metro_post_width = get_post_meta( $post->ID, 'rf_metro_post_width', true );

			// Metro Layout Grid
			$metro_width_class = '';

			// custom post width for masonry-metro
			if ( $bPage_general['layout'] === 'masonry-metro') {
				$metro_width_class = 'post-width'. $rf_metro_post_width;
			}

			$custom_post_class = implode( ' ', royal_cat_classes('blog') ) .' '. $metro_width_class;

		?>

		<!-- Begin Post -->
		<article <?php post_class( $custom_post_class ); ?> id="post-<?php the_ID(); ?>">

			<div class="blog-post-inner<?php echo $bPage_general['grid_animated'] ? ' rf-grid-animated' : ''; ?>">

			<!-- Post Text Block - Above Media -->
			<div class="post-text-wrap">

				<?php

				// Post Title
				if ( $bPost_title['position'] === 'above' ) {
					royal_post_title();
				}

				// Post Categories & Filters
				if ( $bPost_cats['position'] === 'above' ) {
					royal_post_categories( 'blog', $bPost_cats['before_cats'], $bPost_cats['separator'] );
				}

				// Post Date & Author
				if ( $bPost_meta['position'] === 'above' ) {
					royal_post_date_and_author( 'blog', $bPost_meta['before_author'] );
				}

				// Post Excerpt / Post Content
				if ( $bPost_desc['position'] === 'above' ) {
					royal_post_content( $bPost_desc['display_as'], $bPost_desc['excerpt_length'] );
				}

				// Likes, Sharing & Comments
				if ( $bPost_likes['position'] === 'above' ) {
					royal_post_likes_comments_sharing( array(
						'likes_icon' 	=> $bPost_likes['likes_icon'],
						'comments_icon' => $bPost_likes['comments_icon'],
						'separator' 	=> $bPost_likes['icon_separator'],
						'sharing_open' 	=> $bPost_likes['open_on']
					) );
				}

				// Read More
				if ( $bPost_more['position'] === 'above' ) {
					royal_post_more_info( array(
						'type' 		=> 'blog',
						'more_text' => $bPost_more['text'],
						'more_icon' => $bPost_more['icon']
					) );
				}

				?>

			</div><!-- End .post-text-wrap -->


			<!-- Post Media Block -->
			<div class="post-media-wrap">

				<div class="post-media">
					
					<!-- include post format media content -->
					<?php get_template_part( 'post-formats/content', get_post_format() ); ?>

				</div>

			</div><!-- end .post-media-wrap -->


			<!-- Post Text Block - Below Media -->
			<div class="post-text-wrap">

				<!-- Post Title -->
				<?php

				// Post Title
				if ( $bPost_title['position'] === 'below' ) {
					royal_post_title();
				}

				// Post Categories & Filters
				if ( $bPost_cats['position'] === 'below' ) {
					royal_post_categories( 'blog', $bPost_cats['before_cats'], $bPost_cats['separator'] );
				}

				// Post Date & Author
				if ( $bPost_meta['position'] === 'below' ) {
					royal_post_date_and_author( 'blog', $bPost_meta['before_author'] );
				}

				// Post Excerpt / Post Content
				if ( $bPost_desc['position'] === 'below' ) {
					royal_post_content( $bPost_desc['display_as'], $bPost_desc['excerpt_length'] );
				}

				// Likes, Sharing & Comments
				if ( $bPost_likes['position'] === 'below' ) {
					royal_post_likes_comments_sharing( array(
						'likes_icon' 	=> $bPost_likes['likes_icon'],
						'comments_icon' => $bPost_likes['comments_icon'],
						'separator' 	=> $bPost_likes['icon_separator'],
						'sharing_open' 	=> $bPost_likes['open_on']
					) );
				}

				// Read More
				if ( $bPost_more['position'] === 'below' ) {
					royal_post_more_info( array(
						'type' 		=> 'blog',
						'more_text' => $bPost_more['text'],
						'more_icon' => $bPost_more['icon']
					) );
				}

				?>

			</div><!-- End .post-text-wrap -->

			</div><!-- End .blog-post-inner -->

		</article><!-- End Post -->

		<?php endwhile; ?>

		</section><!-- End #blog-container -->

		
		<?php

		// restore original post data
		wp_reset_postdata();

		// posts pagination
		if ( $blog_display_pagination === 'yes' && $blog_display_from !== 'custom_ids' ) {
			royal_pagination( $blog->max_num_pages );
		}

		?>

		<!-- if have no posts -->
		<?php else: ?>
			<div class="inner-content">
				<h3><?php _e( 'No Posts found!', 'hyperx' ); ?></h3>
			</div>
		<?php endif; ?>

	    <?php
	}
	add_shortcode( 'royal_blog', 'royal_blog_shortcode' );

	vc_map( array(
	   'name' => __( 'Royal Blog', 'hyperx' ),
	   'base' => 'royal_blog',
	   'category' => __( 'Royal Shortcodes', 'hyperx' ),
	   'admin_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'front_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'params' => array(
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Display Posts From', 'hyperx' ),
			'param_name' => 'blog_display_from',
			'value' => array (
				__( 'All Posts', 'hyperx' ) => 'all',
				__( 'Custom Categories', 'hyperx' ) => 'custom_categories',
				__( 'Custom IDs', 'hyperx' ) => 'custom_ids',
			),
			'description' => __( 'Choose which Blog Posts to display. Please NOTE: This Shortcode(element) should be placed inside a separate ROW, in the other case it will NOT work properly.', 'hyperx' )
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Comma separated Custom Category Slugs', 'hyperx' ),
			'param_name' => 'blog_custom_categories',
			'value' => 'food, fashion, anotherslug',
			'description' => 'Very Important Note: Please insert Category Slugs(lowercase slug format) not actual category names. You should insert in this format: food, fashion, anotherslug and so on...',
			'dependency' => array (
				'element' => 'blog_display_from',
				'value' => array ( 'custom_categories' )
			)
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Comma separated Custom Post IDs', 'hyperx' ),
			'param_name' => 'blog_custom_ids',
			'value' => '14, 33, 102',
			'description' => 'The ID of the post. Ex: http://wp-royal.com/sun/wp-admin/post.php?post=14&action=edit - from here ID will be "14". You should insert in this format: 14, 33, 102 and so on... For more details whatch Video tutorial on this link: YOUTUBE LINK REUQIRED',
			'dependency' => array (
				'element' => 'blog_display_from',
				'value' => array ( 'custom_ids' )
			)
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Category Filters', 'hyperx' ),
			'param_name' => 'blog_display_filters',
			'value' => array( '&nbsp;- Display Category Filters?' => 'yes' ),
			'description' => '',
			'dependency' => array (
				'element' => 'blog_display_from',
				'value' => array ( 'all', 'custom_categories' )
			)
	      ),
	      array (
				'type' => 'checkbox',
				'holder' => 'div',
				'class' => '',
				'heading' => __( 'Pagination', 'hyperx' ),
				'param_name' => 'blog_display_pagination',
				'value' => array( '&nbsp;- Display Pagination?' => 'yes' ),
				'description' => __( 'Please don\'t enable Pagination when you insert "Royal Blog" Shortcode into the Single Post Content.', 'hyperx' ),
				'dependency' => array (
					'element' => 'blog_display_from',
					'value' => array ( 'all', 'custom_categories' )
				)
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Layout Mode', 'hyperx' ),
			'param_name' => 'blog_layout_mode',
			'value' => array(
				__( 'Masonry (Unlimited Height)', 'hyperx' ) => 'masonry',
				__( 'Metro (Masonry - Different Width)', 'hyperx' ) => 'masonry-metro',
				__( 'FitRows (Limited Height)', 'hyperx' ) => 'fitRows'
			),
			'description' => __( 'These Options will override original ones which are set from the Theme Customizer -> Blog Page (section) -> General (Tabs) -> General (window). But please Note: Aspect Ratios (X & Y) should be set from the Theme Customizer. And also please Note that "Layout Mode" option will be inherited from the Theme Customizer if you insert "Royal Blog" Shortcode into the Single Post Content, So consider to set the same values there and here too.', 'hyperx' )
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Number of Posts to Display', 'hyperx' ),
			'param_name' => 'blog_posts_number',
			'value' => '10',
			'description' => '',
			'dependency' => array (
				'element' => 'blog_display_from',
				'value' => array ( 'all', 'custom_categories' )
			)
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Columns Rate', 'hyperx' ),
			'param_name' => 'blog_columns_rate',
			'value' => array(
				'-1' => '-1',
				'0' => '0',
				'1' => '+1',
				'2' => '+2',
				__( '1 Constant', 'hyperx' ) => 'one',
				__( '2 Constant', 'hyperx' ) => 'two',
				__( '3 Constant', 'hyperx' ) => 'three',
				__( '4 Constant', 'hyperx' ) => 'four'
			),
			'description' => ''
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Horizontal Gutter', 'hyperx' ),
			'param_name' => 'blog_gutter_horz',
			'value' => '20',
			'description' => 'Please enter only numeric value. Ex: 20.',
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Vertical Gutter', 'hyperx' ),
			'param_name' => 'blog_gutter_vert',
			'value' => '20',
			'description' => 'Please enter only numeric value. Ex: 20.',
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Stretch Container', 'hyperx' ),
			'param_name' => 'blog_stretch_container',
			'value' => array( '&nbsp;- Stretch Blog Container?' => 'yes' ),
			'description' => 'If you enable this feature you should set "Row Stretch" to "Default" value.'
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Container Paddings', 'hyperx' ),
			'param_name' => 'blog_disable_paddings',
			'value' => array( '&nbsp;- Disable Container Paddings?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Container Margins', 'hyperx' ),
			'param_name' => 'blog_disable_margins',
			'value' => array( '&nbsp;- Disable Container Margins?' => 'yes' ),
			'description' => ''
	      ),
	   )
	) );


// Royal Contact Form
	function royal_contact_form_shortcode( $atts ) {
	    $parameters = shortcode_atts( array(
	        'rf_form_title' => '',
	        'rf_reciever_email' => '',
	    ), $atts );

	    extract($parameters);

		// contact form validations
		function isEmail( $email ) {
			$reg_exp  = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
			return ( preg_match( $reg_exp, $email ) );
		}

		// define error variables
		$error_name 	= false;
		$error_email	= false;
		$error_message 	= false;
		$error_class	= 'rf-error';

		// default variables
		$name 	 		= __( '*Name', 'hyperx' );
		$email 	 		= __( '*Email', 'hyperx' );
		$subject 		= __( 'Subject', 'hyperx' );
		$message 		= __( '*Message', 'hyperx' );
		$reciever_email = '';
		$sent_report 	= '';

		// get the reciever email
		if ( trim($rf_reciever_email) === '' ) {
			$reciever_email = get_option('admin_email');
		} else {
			$reciever_email = $rf_reciever_email;
		}

		if ( isset($_POST['cont-submit']) ) {

			// Get the name
			if ( trim($_POST['cont-name']) === '' || trim($_POST['cont-name']) == $name || strlen( trim($_POST['cont-name']) ) < 2 ) {
				$error_name = $error_class;
			} else {
				$name = esc_attr( trim($_POST['cont-name']) );
			}

			// Get the email
			if ( trim($_POST['cont-email']) === '' || ! isEmail( trim($_POST['cont-email']) ) ) {
				$error_email = $error_class;
			} else {
				$email = esc_attr( trim($_POST['cont-email']) );
			}

			// Get the subject
			if ( trim($_POST['cont-subject']) == 'subject' ) {
				$subject = '';
			} else {
				$subject = esc_attr( trim($_POST['cont-subject']) );
			}

			// Get the message
			if ( trim($_POST['cont-message']) === '' || trim($_POST['cont-message']) == $message ) {
				$error_message = $error_class;
			} else {
				$message = stripslashes( trim($_POST['cont-message']) );
			}

			// chek for errors and get email contnet 
			if ( $error_name !== $error_class && $error_email !== $error_class && $error_message !== $error_class ) {

				// email content
				$body  = __( 'Name: ', 'hyperx' ) . $name ."\n\n";
				$body .= __( 'Email: ', 'hyperx' ) . $email ."\n\n";
				$body .= __( 'Subject: ', 'hyperx' ) . $subject ."\n\n";
				$body .= __( 'Message: ', 'hyperx' ) ."\n\n";
				$body .= $message;

				// email headers
				$headers = __( 'From ', 'hyperx' ) . $name .' <'. $email .'>' ."\r\n";

				// send and check if email was sent
				if ( wp_mail( $reciever_email, $subject, $body, $headers ) ) {
					$email_sent = true;
				} else {
					$email_sent = false;
				}

			} // endif

		} // endif


		// if email was sent successfly echo success!
		if ( isset($email_sent) && $email_sent ) {
			$sent_report = '<span class="mail-success-txt">'. __( 'The message was successfully sent!', 'hyperx' ) .'</span>';
		} elseif ( isset($email_sent) && ! $email_sent ) {
			$sent_report = '<span class="mail-error-txt">'. __( 'An error has occurred!', 'hyperx' ) .'</span>';
		}

		// change title in case of error/success
		$rf_form_title = ( isset($email_sent) && $sent_report != '' ? $sent_report : '<span>'. $rf_form_title .'</span>' );


		// Contact Form
		$html  = '<section class="contact-form contact-form-full">';

			if ( trim( $rf_form_title ) !== '<span></span>' ) {
				$html .= '<h3 class="contact-title">'. $rf_form_title .'</h3>';
			}
			
			$html .= '<form action="'. get_permalink() .'" method="post" class="rf-form" data-disabled="'. ( isset($email_sent) ? $email_sent : '' ) .'">';

			// Name
			$html .= '<input type="text" id="cont-name" name="cont-name" class="rf-input pers-name '. $error_name .'" data-placeholder="'. __( '*Name', 'hyperx' ) .'" value="'. $name .'" aria-required="true">';
			
			// Email
			$html .= '<input type="text" id="cont-email" name="cont-email" class="rf-input pers-email '. $error_email .'" data-placeholder="'. __( '*Email', 'hyperx' ) .'" value="'. $email .'" aria-required="true">';
			
			// Subject
			$html .= '<input type="text" id="cont-subject" name="cont-subject" class="rf-input" data-placeholder="'. __( 'Subject', 'hyperx' ) .'"  value="'. $subject .'">';
			
			// Message
			$html .= '<textarea id="cont-message" name="cont-message" class="rf-input pers-message '. $error_message .'" rows="8" data-placeholder="'. __( '*Message', 'hyperx' ) .'">'. $message .'</textarea>';
			
			// Submit
			$html .= '<input type="submit" value="Send Message" class="submit-btn rf-button">';
			$html .= '<input type="hidden" id="cont-submit" name="cont-submit" value="true">';

			$html .= '</form>';

		$html .= '</section>';

		return $html;

	}

	add_shortcode( 'royal_contact_form', 'royal_contact_form_shortcode' );

	vc_map( array(
	   'name' => __( 'Royal Contact Form', 'hyperx' ),
	   'base' => 'royal_contact_form',
	   'category' => __( 'Royal Shortcodes', 'hyperx' ),
	   'admin_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'front_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'params' => array(
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Form Title', 'hyperx' ),
			'param_name' => 'rf_form_title',
			'value' => 'Contact Form',
			'description' => ''
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Reciever Email', 'hyperx' ),
			'param_name' => 'rf_reciever_email',
			'value' => '',
			'description' => __( 'If this field is empty reciever email will be inherited from Dashboard > Settings > General > E-mail Address.', 'hyperx' )
	      ),
	   )
	) );


// Royal Before After Image
	function royal_before_after_image_shortcode( $atts ) {
	    $parameters = shortcode_atts( array(
	        'rf_before_image' 		=> '',
	        'rf_after_image' 		=> '',
	        'rf_ba_divider' 		=> '',
	        'rf_ba_divider_pos' 	=> '50%',
	        'rf_ba_divider_move' 	=> 'mousemove',
	        'rf_ba_divider_col' 	=> '#ffffff',
	        'rf_ba_divider_hcol' 	=> '#000000',
	        'rf_ba_transition' 		=> 'default',
	    ), $atts );

	    extract($parameters);

	    // before after image wrapper
	    $html  = '<div class="royal-ba-img-wrap" data-transition="'. $rf_ba_transition .'">';

	    // divider
	    if ( $rf_ba_divider === 'yes' ) {
		    $html .= '<div class="royal-ba-divider-wrap" data-position="'. $rf_ba_divider_pos .'" data-move="'. $rf_ba_divider_move .'" data-color="'. $rf_ba_divider_col .'" data-hover-color="'. $rf_ba_divider_hcol .'">';
		    	$html .= '<div class="royal-ba-divider-handle"><i class="fa fa-caret-left"></i><i class="fa fa-caret-right"></i></div>';
		    $html .= '</div>';
	    }

	    // before image
	    $html .= '<div class="royal-before-img-wrap">';
	    	$html .= wp_get_attachment_image( $rf_before_image, 'full' );
	    $html .= '</div>';

	    // after image
	    $html .= '<div class="royal-after-img-wrap">';
	    	$html .= wp_get_attachment_image( $rf_after_image, 'full' );
	    $html .= '</div>';

	    $html .= '</div>'; // end of wrapper

		return $html;

	}

	add_shortcode( 'royal_before_after_image', 'royal_before_after_image_shortcode' );

	vc_map( array(
	   'name' => __( 'Royal Before After Image', 'hyperx' ),
	   'base' => 'royal_before_after_image',
	   'category' => __( 'Royal Shortcodes', 'hyperx' ),
	   'admin_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'front_enqueue_css' => plugins_url('css/royal_vc_admin.css', __FILE__),
	   'params' => array(
	      array (
			'type' => 'attach_image',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Before Image Upload', 'hyperx' ),
			'param_name' => 'rf_before_image',
			'value' => '',
			'description' => ''
	      ),
	      array (
			'type' => 'attach_image',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'After Image Upload', 'hyperx' ),
			'param_name' => 'rf_after_image',
			'value' => '',
			'description' => ''
	      ),
	      array (
			'type' => 'checkbox',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Divider', 'hyperx' ),
			'param_name' => 'rf_ba_divider',
			'value' => array( '&nbsp;- Show Divider?' => 'yes' ),
			'description' => ''
	      ),
	      array (
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Enter Divider Position', 'hyperx' ),
			'param_name' => 'rf_ba_divider_pos',
			'value' => '50%',
			'description' => __( 'Setting this value will display a part of "After Image" by default. Please enter percentage values, for example: "50%". But if you want "After Image to be hidden by default enter a "0" value.', 'hyperx' ),
			'dependency' => array (
				'element' => 'rf_ba_divider',
				'value' => 'yes'
			)
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Divider Movement', 'hyperx' ),
			'param_name' => 'rf_ba_divider_move',
			'value' => array(
				__( 'Follow Mouse Move', 'hyperx' ) => 'mousemove',
				__( 'Draggable by Mouse', 'hyperx' ) => 'mousedrag'
			),
			'description' => '',
			'dependency' => array (
				'element' => 'rf_ba_divider',
				'value' => 'yes'
			)
	      ),
	      array (
			'type' => 'colorpicker',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Divider Color', 'hyperx' ),
			'param_name' => 'rf_ba_divider_col',
			'value' => '#ffffff',
			'description' => '',
			'dependency' => array (
				'element' => 'rf_ba_divider',
				'value' => 'yes'
			)
	      ),
	      array (
			'type' => 'colorpicker',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Divider Hover Color', 'hyperx' ),
			'param_name' => 'rf_ba_divider_hcol',
			'value' => '#000000',
			'description' => '',
			'dependency' => array (
				'element' => 'rf_ba_divider',
				'value' => 'yes'
			)
	      ),
	      array (
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => __( 'Transition Effect', 'hyperx' ),
			'param_name' => 'rf_ba_transition',
			'value' => array(
				__( 'Default - Overlay', 'hyperx' ) => 'default',
				__( 'Slide From Left', 'hyperx' ) => 'leftslide',
				__( 'Side By Side', 'hyperx' ) => 'sidebyside',
			),
			'description' => ''
	      ),
	   )
	) );


// END - check if visual composer is activated
	endif;



/*
***************************************************************
* 4. Backend Options
***************************************************************
*/

// Backend Options
require_once( plugin_dir_path(__FILE__) .'backend/hyperx-options.php');

// Customize Faster
require_once( plugin_dir_path(__FILE__) .'backend/customize-faster.php');

// Backup-Restore
require_once( plugin_dir_path(__FILE__) .'backend/backup-restore.php');

// Category Sorting
require_once( plugin_dir_path(__FILE__) .'backend/sort-categories.php');

// Royal Importer
require_once( plugin_dir_path(__FILE__) .'backend/import/royal-importer.php');