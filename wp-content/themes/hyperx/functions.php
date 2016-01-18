<?php

/*
***************************************************************
* This file contains all major Functions and Theme Enhancements.
* If you want custom functionality, redeclare these functions in your Child Theme.
* Please don't Edit/Delete something in here. THIS IS VITAL.
***************************************************************
*/

// theme's root folder
define( 'THEMEROOT', esc_url(get_template_directory_uri()) );


/*
***************************************************************
* #Enqueue Styles & Scripts
***************************************************************
*/

if ( ! function_exists('royal_enque_scripts') ) {
	function royal_enque_scripts() {

		// detect protocol
		$protocol 		 = is_ssl() ? 'https' : 'http';
		$google_maps_url = $protocol .'://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false';

		// remove default PrettyPhoto from VC
		wp_deregister_style( 'prettyphoto' );
		wp_dequeue_style( 'prettyphoto' );
		wp_deregister_script( 'prettyphoto' );
		wp_dequeue_script( 'prettyphoto' );

		// Register Styles
		wp_register_style( 'royal-main-stylesheet', get_stylesheet_uri() );
		wp_register_style( 'royal-fontawesome', THEMEROOT .'/css/font-awesome.min.css' );
		wp_register_style( 'royal-fontello', THEMEROOT .'/css/fontello.css' );
		wp_register_style( 'royal-animsition', THEMEROOT .'/css/animsition.min.css' );
		wp_register_style( 'royal-prettyPhoto', THEMEROOT .'/css/prettyPhoto.css' );
		wp_register_style( 'royal-responsive', THEMEROOT .'/css/responsive.css' );


		if ( is_child_theme() ) {
			wp_register_style( 'royal-child-stylesheet', THEMEROOT .'/style.css' );
		}

		// Enqueue Styles
		wp_enqueue_style('royal-main-stylesheet');
		wp_enqueue_style('royal-child-stylesheet');
		wp_enqueue_style('royal-fontawesome');
		wp_enqueue_style('royal-fontello');
		wp_enqueue_style('royal-animsition');
		wp_enqueue_style('royal-prettyPhoto');
		wp_enqueue_style('royal-responsive');

		// Register Scripts
		wp_register_script( 'royal-google-maps', esc_url( $google_maps_url ), null, false, true );
		wp_register_script( 'royal-plugins', THEMEROOT .'/js/royal-plugins.min.js', array('jquery'), false, true );
		wp_register_script( 'royal-custom-scripts', THEMEROOT .'/js/custom-scripts.min.js', array('jquery'), false, true );

		// Enqueue Scripts
		wp_enqueue_script('royal-plugins');
		wp_enqueue_script('royal-custom-scripts');

		// comments reply
		if ( is_single() && comments_open() && get_option('thread_comments') ) {
			wp_enqueue_script('comment-reply');
		}

		// load Google Maps JavaScript API v3
		if ( is_page_template('contact.php') ) {
			wp_enqueue_script('royal-google-maps');
		}

	}
}

add_action( 'wp_enqueue_scripts', 'royal_enque_scripts', 1000000 );



/*
***************************************************************
* #Add theme supports & incorporate Wordpress Core Features
***************************************************************
*/

// Title Tag
add_theme_support( 'title-tag' );

// HTML5
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'caption' ) );

// RSS feed links
add_theme_support('automatic-feed-links');

// content_width - actually media max width in post content
$inner_content = get_option('royal_inner_content');
if ( ! isset( $content_width ) ) {
	$content_width = $inner_content['max_width'];
}

// Post Thumbnails - Featured Image
add_theme_support('post-thumbnails');

// Remove post thumbnails from pages
if ( ! function_exists('royal_remove_page_thumbnails') ) {
	function royal_remove_page_thumbnails() {
	    remove_meta_box( 'postimagediv','page','side' );
	}
}

add_action('do_meta_boxes', 'royal_remove_page_thumbnails');

// Post Formats - Audio, Video, Gallery, Link & Quote
if ( ! function_exists('royal_add_post_type_support') ) {
	function royal_add_post_type_support( $current_screen ) {
		if ( 'post' == $current_screen->post_type && 'post' == $current_screen->base ) {
			// Blog
			add_theme_support( 'post-formats', array( 'audio', 'video', 'gallery', 'link', 'quote' ) );

		} elseif ( 'royal_portfolio' == $current_screen->post_type && 'post' == $current_screen->base ) {
			// Portfolio
			add_theme_support( 'post-formats', array( 'audio', 'video', 'gallery' ) );
		}
	}
}

add_action( 'current_screen', 'royal_add_post_type_support' );

// give ability to default wp text widget to render shortcodes
add_filter( 'widget_text', 'do_shortcode' );

// load theme textdomain for translation
load_theme_textdomain( 'hyperx', get_template_directory() .'/languages' );


// get theme customizer data
$bPage_general = get_option('royal_bPage_general');
$pPage_general = get_option('royal_pPage_general');

// custom image sizes
add_image_size( 'royal-similar-items', 350, 350, true );
add_image_size( 'royal-search-results', 150, 150, true );
add_image_size( 'royal-blog-post', $bPage_general['aspect_x'], $bPage_general['aspect_y'], true );
add_image_size( 'royal-portfolio-post', $pPage_general['aspect_x'], $pPage_general['aspect_y'], true );


/*
***************************************************************
* Remove Theme Bundled Plugin Activation Messages
***************************************************************
*/

// disable notices via CSS
function royal_disable_plugin_activation_css( $hook ) {
    // register styles 
    wp_register_style( 'royal-plugin-activation', THEMEROOT .'/plugins/plugin-activation-messages.css' );

    // enqueue styles
    wp_enqueue_style('royal-plugin-activation');
}

add_action( 'admin_enqueue_scripts', 'royal_disable_plugin_activation_css' );

// Ultimate Addons
define( 'ULTIMATE_NO_EDIT_PAGE_NOTICE', true ); 
define( 'ULTIMATE_NO_PLUGIN_PAGE_NOTICE', true );


/*
***************************************************************
* #Visual Composer - adjustments
***************************************************************
*/

// add .wpb_tabs class to Content Element: Tour
function royal_add_vc_tour_custom_class( $class_string, $tag ) {

  if ( $tag == 'vc_tour' ) {
    $class_string = str_replace( 'wpb_tour', 'wpb_tour wpb_tabs', $class_string );
  }

  return $class_string;
}

add_filter( 'vc_shortcodes_css_class', 'royal_add_vc_tour_custom_class', 10, 2 );

// remove widget support
if ( function_exists('vc_remove_element') ) {
	vc_remove_element( 'vc_wp_rss' );
	vc_remove_element( 'vc_wp_meta' );
	vc_remove_element( 'vc_wp_text' );
	vc_remove_element( 'vc_wp_pages' );
	vc_remove_element( 'vc_wp_posts' );
	vc_remove_element( 'vc_wp_archives' );
	vc_remove_element( 'vc_wp_calendar' );
	vc_remove_element( 'vc_wp_custommenu' );
	vc_remove_element( 'vc_wp_categories' );
	vc_remove_element( 'vc_widget_sidebar' );
	vc_remove_element( 'vc_wp_recentcomments' );
}

/*
***************************************************************
* #Essential Grid - adjustments
***************************************************************
*/

// get current lightbox selected
$ess_grid_lightbox = get_option('tp_eg_use_lightbox');

if ( $ess_grid_lightbox !== 'disabled' ) {
	update_option( 'tp_eg_use_lightbox', 'disabled' );
}


/*
***************************************************************
* #Register Nav Menus
***************************************************************
*/

if ( ! function_exists('royal_register_nav_menus') ) {
	function royal_register_nav_menus() {

		// get theme customizer data
		$sidebar 	 = get_option( 'royal_sidebar' );
		$sidebar_top = get_option( 'royal_sidebar_top' );

		if ( $sidebar['general_position'] === 'top' && $sidebar_top['arrange'] === 'vertical_2' ) {
			register_nav_menu('top-left-menu', esc_html__( 'Top Left Menu', 'hyperx') );
			register_nav_menu('top-right-menu', esc_html__( 'Top Right Menu', 'hyperx') );
		} else {
			register_nav_menu('sidebar-menu', esc_html__( 'Main Menu', 'hyperx') );
		}

	}
}

add_action( 'init', 'royal_register_nav_menus' );


/*
***************************************************************
* #Custom Excerpt length
***************************************************************
*/

if ( ! function_exists('royal_excerpt') ) {
	function royal_excerpt( $words ) {

		$excerpt = explode( ' ', get_the_excerpt(), $words );
		array_pop($excerpt);
		$excerpt = implode( " ", $excerpt ) .'...';
		$excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );

		return $excerpt;
	}
}


/*
***************************************************************
* #hex2rgba - converts HEX color to RGBA
***************************************************************
*/

function royal_hex2rgba( $color, $opacity = 1 ) {

	// remove '#' from string
	$color = substr( $color, 1 );

	// get values from string
	$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );

    // convert HEX to RGB
    $rgb = array_map( 'hexdec', $hex );

    // convert HEX to RGBA
	$output = 'rgba('. implode( ",", $rgb ) .', '. $opacity .')';

    return $output;
}


/*
***************************************************************
* #royal_get_option() - customised get_option()
***************************************************************
*/

function royal_get_option($id) {
	$c_options = get_option($id);
	$c_options = explode('___', $c_options['db_input']);
	$a_array = array();

	foreach ($c_options as $key => $value) {

		$id    = substr($value, 0, strpos($value, '[') );
    	$index = substr($id, strpos($id, '-') + 1, strlen($id) );
    	$value = str_replace($id .'[', '', $value);
    	$value = str_replace(']', '', $value);

    	if ( $value === 'true' ) {
    		$value = true;
    	} elseif ( $value === 'false' ) {
    		$value = false;
    	}
    	
		$a_array[$index] = $value;

	}

	return $a_array;
}


/*
***************************************************************
* #Blog & Portfolio Posts
***************************************************************
*/

// display post title
if ( ! function_exists('royal_post_title') ) {
	function royal_post_title( $class = '' ) {
		echo '<h3 class="post-title '. $class .'"><a href="'. esc_url(get_the_permalink()) .'">'. get_the_title() .'</a></h3>';
	}
}

// display post categories
if ( ! function_exists('royal_post_categories') ) {
	function royal_post_categories( $type, $before_cats, $separator, $class = '' ) {
		global $post;

		echo '<span class="post-categories clear-inline clearfix '. $class .'">';

		echo '<span class="post-cats-in">';

			echo '<span class="before-cats">'. $before_cats .'</span>';

			if ( $type === 'blog' ) {
				the_category(', ');
			} elseif ( $type === 'portfolio' ) {
				echo get_the_term_list( $post->ID, 'royal_portfolio_cats', '', $separator );
			}

		echo '</span>';

		echo '</span>';
	}
}

// display post date & author
if ( ! function_exists('royal_post_date_and_author') ) {
	function royal_post_date_and_author( $type, $before_author, $class = '' ) {
		echo '<div class="time-and-author clearfix '. $class .'">';

		echo '<span class="post-date">'. get_the_time( get_option('date_format') ) .'</span>';

		echo '<span class="meta-sep">/</span>';

		echo '<span class="posted-by">';

			echo '<span>'. $before_author .'</span>';

			if ( $type === 'blog' ) {
				the_author_posts_link();
			} elseif ( $type === 'portfolio' ) {
				the_author();
			}

		echo '</span>';

		echo '</div>';
	}
}

// display post excerpt || content
if ( ! function_exists('royal_post_content') ) {
	function royal_post_content( $display, $length, $class = '' ) {
		echo '<div class="post-description '. $class .'">';

		if ( $display === 'excerpt' ) {
			echo royal_excerpt( $length );
		} else {
			the_content('');
		}

		echo '</div>';
	}
}

// display post likes, comments & sharing
if ( ! function_exists('royal_post_likes_comments_sharing') ) {
	function royal_post_likes_comments_sharing( $args = array(), $class = '' ) {
		// extract function arguments
		extract($args);

		echo '<div class="likes-and-comments '. $class .'">';

		echo '<span class="rf-likes">';

			echo royal_get_likes( get_the_ID(), $likes_icon );
			echo '<span class="meta-sep">'. $separator .'</span>';

		echo '</span>';

		if ( comments_open() && ! post_password_required() ) {
			$comments_icon = '<i class="fa fa-'. $comments_icon .'"></i>';

			echo '<span class="post-comments-wrap">';

				comments_popup_link( $comments_icon .' 0', $comments_icon .' 1', $comments_icon .' %', 'post-comments' );
				
				echo '<span class="meta-sep">'.  $separator .'</span>';

			echo '</span>';
		}

		echo '<span class="social-share-wrap" data-open="'. $sharing_open .'"><i class="fa fa-share-alt"></i>';
			royal_sharing_icon_links(true);
		echo '</span>';

		echo '</div>';
	}
}

// display post more info || project link
if ( ! function_exists('royal_post_more_info') ) {
	function royal_post_more_info( $args = array(), $class = '' ) {
		extract($args);

		if ( $type === 'blog' ) {
			echo '<div class="read-more-wrap">';

			echo '<a href="'. esc_url(get_the_permalink()) .'" class="read-more rf-button">';
			echo '<span>'. $more_text .'</span>';
			echo '<i class="fa fa-'. $more_icon .'"></i>';
			echo '</a>';

			echo '</div>';

		} elseif ( $type === 'portfolio' ) {

			if ( $info_type === 'project-link' ) {
				if ( trim($link) !== '' ) {
					echo '<div class="project-link-wrap more-info-wrap '. $class .'">';

					echo '<a href="'. esc_url($link) .'" class="project-link more-info rf-button" target="_blank">';
					echo '<span>'. $link_text .'</span>';
					echo '<i class="fa fa-'. $more_icon .'"></i>';
					echo '</a>';

					echo '</div>';
				}
			} else {
				echo '<div class="read-more-wrap more-info-wrap '. $class .'">';

				echo '<a href="'. esc_url(get_the_permalink()) .'" class="read-more more-info rf-button">';
				echo '<span>'. $more_text .'</span>';
				echo '<i class="fa fa-'. $more_icon .'"></i>';
				echo '</a>';

				echo '</div>';
			}

		}

		echo '<div class="clear"></div>';

	}
}

// display portfolio item testimonial
if ( ! function_exists('royal_portfolio_testimonial') ) {
	function royal_portfolio_testimonial( $author, $content, $class = '' ) {
		if ( $author !== '' || $content !== '' ) {
			echo '<div class="testimonial-wrap '. $class .'">';

			echo '<h5 class="testimonial-author">'. $author .'</h5>';
			echo '<p>'. $content .'</p>';

			echo '</div>';
		}
	}
}


/*
***************************************************************
* #Social sharing icons
***************************************************************
*/

if ( ! function_exists('royal_sharing_icon_links') ) {
	function royal_sharing_icon_links( $wrap ) {
		global $post;

		$html = ( $wrap === true ) ? '<span class="social-share">' : '';

			// facebook
			$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u='. get_the_permalink();
			$html .= '<a href="'. esc_url( $facebook_url ) .'" target="_blank"><i class="fa fa-facebook"></i></a>';

			// twitter
			$twitter_url = 'https://twitter.com/share?'. esc_url(get_permalink()) .'&amp;text='. get_the_title();
			$html .= '<a href="'. esc_url( $twitter_url ) .'" target="_blank"><i class="fa fa-twitter"></i></a>';
			
			// google plus
			$google_plus_url = 'https://plus.google.com/share?url='. esc_url(get_permalink());
			$html .= '<a href="'. esc_url( $google_plus_url ) .'" target="_blank"><i class="fa fa-google-plus"></i></a>';
			
			// linkedin
			$linkedin_url = 'http://www.linkedin.com/shareArticle?url='. esc_url(get_permalink()) .'&amp;title='. get_the_title();
			$html .= '<a href="'. esc_url( $linkedin_url ) .'" target="_blank"><i class="fa fa-linkedin"></i></a>';
			
			// pinterest
			$pinterest_url = 'https://pinterest.com/pin/create/bookmarklet/?url='. esc_url(get_permalink()) .'&amp;description='. get_the_title() .'&amp;media='. esc_url(wp_get_attachment_url( get_post_thumbnail_id($post->ID)) );
			$html .= '<a href="'. esc_url( $pinterest_url ) .'" target="_blank"><i class="fa fa-pinterest"></i></a>';
			
			// tumblr
			$tumblr_url = 'http://www.tumblr.com/share/link?url='. urlencode( esc_url(get_permalink()) ) .'&amp;name='. urlencode( get_the_title() ) .'&amp;description='. urlencode( get_the_excerpt() );
			$html .= '<a href="'. esc_url( $tumblr_url ) .'" target="_blank"><i class="fa fa-tumblr"></i></a>';
			
			// reddit
			$reddit_url = 'http://reddit.com/submit?url='. esc_url(get_permalink()) .'&amp;title='. get_the_title();
			$html .= '<a href="'. esc_url( $reddit_url ) .'" target="_blank"><i class="fa fa-reddit"></i></a>';
		
		$html .= ( $wrap === true ) ? '</span>' : '';

		echo ''. $html;
	}
}

// fix social sharing post thumbnail issue
function royal_post_thumbnail_sharing() {
	global $post;

	if ( isset($post) ) {

		echo '<meta property="og:type" content="article"/>';
		echo '<meta property="og:title" content="'. get_the_title() .'"/>';
		echo '<meta property="og:url" content="'. esc_url(get_permalink()) .'"/>';
		echo '<meta property="og:site_name" content="'. get_bloginfo('name') .'"/>';
		echo '<meta property="og:description" content="'. urlencode( get_the_excerpt() ) .'"/>';

		$facebook_img_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' );

		if ( isset( $facebook_img_src ) ) {
			echo '<meta property="og:image" content="'. $facebook_img_src[0] .'"/>';
			echo '<meta property="og:image:width" content="'. $facebook_img_src[1] .'"/>';
			echo '<meta property="og:image:height" content="'. $facebook_img_src[2] .'"/>';
		}

	}

}

add_action( 'wp_head', 'royal_post_thumbnail_sharing' );


/*
***************************************************************
* #Post category classes
***************************************************************
*/
if ( ! function_exists('royal_cat_classes') ) {

	// add classes to blog || portfolio posts for filtering by categories
	function royal_cat_classes( $post_type ) {
		global $post;

		if ( $post_type === 'blog' ) {
			$tax = 'category';
		} else {
			$tax = 'royal_portfolio_cats';
		}

		$post_categories = get_the_terms( $post->ID, $tax );
		$post_cat_classes = array();

		if ( ! empty($post_categories) ) {
			foreach ( $post_categories as $cats => $cat ) {
				if ( $cat->slug !== 'uncategorized' ) {
					$post_cat_classes[] = urldecode($cat->slug);
				}
			}	
		}
		
		$post_cat_classes[] =  $post_type .'-post';

		return $post_cat_classes;
	}
}


/*
***************************************************************
* Post Gallery
* Enhanced wordpress default gallery shortcode
* Gallery markup changed to HTML5
***************************************************************
*/
if ( ! function_exists('royal_post_gallery') ) {
	function royal_post_gallery( $output, $attr) {
		// get theme cusomizer data
		$gallery_lightbox 	= get_option( 'royal_gallery_lightbox' );
		
	    global $post;
	    global $wp_locale;

	    static $instance = 0;
	    $instance++;

	    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	    if ( isset( $attr['orderby'] ) ) {
	        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
	        if ( ! $attr['orderby'] ) {
	            unset( $attr['orderby'] );
	        }
	    }

	    $post_id = '';
	    if ( isset($post->ID) ) {
	    	$post_id = $post->ID;
	    }

	    // extract shortcode attributes as variables
	    extract(shortcode_atts(array(
	        'order'      => 'ASC',
	        'orderby'    => 'menu_order ID',
	        'id'         => $post_id,
	        'itemtag'    => 'li',
	        'icontag'    => 'figure',
	        'captiontag' => 'figcaption',
	        'columns'    => 3,
	        'size'       => '',
	        'include'    => '',
	        'exclude'    => ''
	    ), $attr));

	    $id = intval($id);

	    if ( 'RAND' == $order )
	        $orderby = 'none';

	    if ( ! empty($include) ) {
	        $include = preg_replace( '/[^0-9,]+/', '', $include );

	        $_attachments = get_posts(array(
	            'include'        => $include,
	            'post_status'    => 'inherit',
	            'post_type'      => 'attachment',
	            'post_mime_type' => 'image',
	            'order'          => $order,
	            'orderby'        => $orderby
	        ));

	        $attachments = array();

	        foreach ( $_attachments as $key => $val ) {
	            $attachments[$val->ID] = $_attachments[$key];
	        }

	    } elseif ( ! empty($exclude) ) {
	        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );

	        $attachments = get_children(array(
	            'post_parent'    => $id,
	            'exclude'        => $exclude,
	            'post_status'    => 'inherit',
	            'post_type'      => 'attachment',
	            'post_mime_type' => 'image',
	            'order'          => $order,
	            'orderby'        => $orderby
	        ));

	    } else {
	        $attachments = get_children(array(
	            'post_parent' 		=> $id,
	            'post_status' 		=> 'inherit',
	            'post_type' 		=> 'attachment',
	            'post_mime_type' 	=> 'image',
	            'order' 			=> $order,
	            'orderby' 			=> $orderby
	        ));
	    }

	    if ( empty($attachments) ) {
	        return '';
	    }

	    if ( is_feed() ) {
	        foreach ( $attachments as $att_id => $attachment )
	            $html .= wp_get_attachment_link($att_id, $size, true);
	        return $html;
	    }

	    // gallery tags - HTML5 markup
	    $itemtag 		= tag_escape($itemtag);
	    $captiontag 	= tag_escape($captiontag);
	    $columns 		= intval($columns);
	    $gallery_class  = 'gallery royal-gallery clearfix galleryid-'. $id .' gallery-columns-'. $columns;


	    $html = '<ul id="gallery-'. $instance .'" class="'. $gallery_class .'">';

	    foreach ( $attachments as $id => $attachment ) {
	        // image & lightbox url
	        $image 		= '';
	        $image_url  = esc_url(wp_get_attachment_url( $id ));

	        if ( isset($attr['link']) ) {

		        if ( 'file' == $attr['link'] ) {
		            
		            $image .= '<div class="image-overlay-wrap lightbox-overlay">';
		            $image .= '<a href="'. $image_url .'" rel="prettyPhoto['. $instance .']" data-title="'. wptexturize($attachment->post_title) .'" class="image-overlay"><i class="fa fa-'. $gallery_lightbox['icon'] .'"></i></a>';
		            $image .= wp_get_attachment_image($id, $size, false, false);
		            $image .= '</div>';

		        } elseif ( 'none' == $attr['link'] ) {
		            $image .= wp_get_attachment_image($id, $size, false, false);
		        }

	        } else {
	        	$image .= '<div class="image-overlay-wrap lightbox-overlay">';
	            $image .= '<a href="'. $image_url .'">'. wp_get_attachment_image($id, $size, false, false) .'</a>';
	            $image .= '</div>';
	        }

	        // <li>
	        $html .= '<'. $itemtag .' class="gallery-item">';

	        // <figure>
	        $html .= '<'. $icontag .' class="gallery-icon">'. $image;

	        if ( $captiontag && trim($attachment->post_excerpt) ) {
	            $html .= '<'. $captiontag .' class="gallery-caption">'. wptexturize($attachment->post_excerpt) .'</'. $captiontag .'>';
	        }

	        // </figure>
	        $html .= '</'. $icontag .'>';

	        // </li>
	        $html .= '</'. $itemtag .'>';
	    }

	    $html .= "</ul>";

	    $output = $html;
	    return $output;
	}
}

add_filter( 'post_gallery', 'royal_post_gallery', 10, 2 );


/*
***************************************************************
* #Posts Pagination
***************************************************************
*/


if ( ! function_exists('royal_pagination') ) {

	// royal_pagination - modified version of kriesi_pagination. Thanks to Kriesi :)
	function royal_pagination( $pages = '' ) {
		global $paged;

		// get data from theme customizer
		$nav = get_option( 'royal_pagination_nav' );

		if ( empty($paged) ) {
			$paged = 1;
		}

		if ( $pages === '' ) {
			global $wp_query;
			$pages = $wp_query->max_num_pages;

			if ( ! $pages ) {
				$pages = 1;
			}
		}

		if ( 1 != $pages ) {

			$section_data_attr = '';

			// get section class
			if ( $nav['type'] === 'numbers' ) {
				$section_class = 'pagination-wrap body-section';
			} elseif ( $nav['type'] === 'infinite' ) {
				$section_class 	    = 'pagination-wrap load-more-wrap body-section';
				$section_data_attr  = 'data-behaviour="'. $nav['load_posts'] .'" ';
				$section_data_attr .= 'data-more-text="'. $nav['more_text'] .'"';
			} else {
				$section_class = 'pagination-wrap default-pagination body-section';
			}

			echo '<section class="'. $section_class .'" '. $section_data_attr .'>';
			echo '<nav>';

			// numbered pagination
			if ( $nav['type'] === 'numbers' ) {

				// first page
				if ( $nav['first_last_label'] === true && $paged > 1  ) {
					echo '<a href="'. esc_url(get_pagenum_link( 1 )) .'" class="rf-button">';
					echo '<i class="fa fa-'. $nav['first_last_icon'] .'-left"></i> ';
					echo '<small class="rf-first-page">'. $nav['first_text'] .'</small>';
					echo '</a>';
				}

				// previous page
				if ( $nav['prev_nxt_label'] === true && $paged > 1 ) {
					echo '<a href="'. esc_url(get_pagenum_link( $paged - 1 )) .'" class="rf-button">';
					echo '<i class="fa fa-'. $nav['prev_nxt_icon'] .'-left"></i> ';
					echo '<small class="rf-prev-page">'. $nav['prev_text'] .'</small>';
					echo '</a>';
				}

				// pagination
				for ( $i = 1; $i <= $pages; $i++ ) {
					if ( 1 != $pages && ( ! ( $i >= $paged + 3 || $i <= $paged - 3 ) || $pages <= 5 ) ) {

						if ( $paged === $i ) {
							echo '<span class="current rf-button">'. $i .'</span>';
						} else {
							echo '<a href="'. esc_url(get_pagenum_link( $i )) .'" class="inactive rf-button">'. $i .'</a>';
						}

					}
				}

				// next page
				if ( $nav['prev_nxt_label'] === true && $paged < $pages ) {
					echo '<a href="'. esc_url(get_pagenum_link( $paged + 1 )) .'" class="rf-button">';
			 		echo '<small class="rf-next-page">'. $nav['nxt_text'] .' </small>';
			 		echo '<i class="fa fa-'. $nav['prev_nxt_icon'] .'-right"></i>';
			 		echo '</a>';
				}

				// last page
			 	if ( $nav['first_last_label'] === true && $paged < $pages ) {
					echo '<a href="'. esc_url(get_pagenum_link( $pages )) .'" class="rf-button">';
			 		echo '<small class="rf-last-page">'. $nav['last_text'] .' </small>';
			 		echo '<i class="fa fa-'. $nav['first_last_icon'] .'-right"></i>';
			 		echo '</a>';
			 	}

			// infinite Scroll | Load More
			} elseif ( $nav['type'] === 'infinite' ) {

				echo '<div data-load-icon="'. $nav['loading_icon'] .'" data-max="'. $pages .'">'. get_next_posts_link( $nav['more_text'], $pages ) .'</div>';

			// next/previous page links
			} else {

				$prev_page_text = '<i class="fa fa-'. $nav['prev_next_page_icon'] .'-left"></i>'. $nav['prev_page_text'];
				$next_page_text = $nav['next_page_text'] .'<i class="fa fa-'. $nav['prev_next_page_icon'] .'-right"></i>';
				echo '<div class="default-prev-link">'. get_previous_posts_link( $prev_page_text, $pages ) .'</div>';
				echo '<div class="default-next-link">'. get_next_posts_link( $next_page_text, $pages ) .'</div>';

				// clear floats
				echo '<div class="clear"></div>';

			} // end $nav['type'] check

			echo '</nav>';
			echo '</section>';

		} // end main if()
	
	} // end royal_pagination()
	
}


/*
***************************************************************
* #Single Post next-previous pagination
***************************************************************
*/

if ( ! function_exists('royal_prev_single_post') ) {
	function royal_single_next_prev( $wrap = true, $icon = 'angle-double', $previous = '', $next = '', $img = false ) {
		global $post;

		$prev_post = get_adjacent_post(false, '', false);
		$next_post = get_adjacent_post(false, '', true);
		$rf_back_link = get_post_meta( $post->ID, 'rf_back_link', true );

		echo ( $wrap === true ) ? '<div class="nxt-prev-post">' : '';
		if( ! empty($prev_post) ) {

			echo '<a href="'. esc_url(get_permalink($prev_post->ID)) .'" title="'. esc_attr($prev_post->post_title) .'" class="previous-post rf-button">';
			echo get_the_post_thumbnail($prev_post->ID);
			echo '<i class="fa fa-'. $icon .'-left"></i>';
			echo '<span>'. $previous .'</span>';
			echo '</a>';

		} else {

			echo '<span class="previous-post rf-button no-nxt-prev">'; 
			echo '<i class="fa fa-'. $icon .'-left"></i>';
			echo '<span>'. $previous .'</span>';
			echo '</span>';

		}

		// back link
		if ( get_post_type() === 'royal_portfolio' ) {
			echo '<a href="'. esc_url(get_permalink($rf_back_link)) .'" class="back-link previous-post"><i class="fa fa-th-large"></i></a>';
		}

		if( ! empty($next_post) ) {

			echo '<a href="'. esc_url(get_permalink($next_post->ID)) .'" title="'. esc_attr($next_post->post_title) .'" class="next-post rf-button">';
			echo get_the_post_thumbnail($next_post->ID);
			echo '<span>'. $next .'</span>';
			echo '<i class="fa fa-'. $icon .'-right"></i>';
			echo '</a>';

		} else {

			echo '<span class="next-post rf-button no-nxt-prev">'; 
			echo '<span>'. $next .'</span>';
			echo '<i class="fa fa-'. $icon .'-right"></i>';
			echo '</span>';

		}
		echo ( $wrap === true ) ? '</div>' : '';

	}
}


/*
***************************************************************
* #Similar Items
***************************************************************
*/

if ( ! function_exists('royal_similar_items') ) {

	// Similar || randomly displayed posts
	function royal_similar_items( $args = array() ) {
		global $post;

		// get theme customizer data
		$similars_general = get_option( 'royal_similars_general' );
		$similars_arrows = get_option( 'royal_similars_arrows' );

		// define variables
		$posts_number = $similars_general['posts_number'];

		// default values
		$defaults = array(
			'post_type' 	=> '',
			'display' 		=> true,
			'title'			=> '',
			'posts_similar' => true
		);

		// override defaults & extract array keys as variables. ex: 'post_type' to $post_type
		$args = wp_parse_args( $args, $defaults );
		extract( $args );
		
		// blog || portfolio
		if ( $post_type === 'blog' ) {
			$post_type = 'post';
			$tax = 'category';
		} elseif ( $post_type === 'portfolio' ) {
			$post_type = 'royal_portfolio';
			$tax = 'royal_portfolio_cats';
		}

		if ( $posts_similar === 'related' ) {
			$posts_similar = true;
		} else {
			$posts_similar = false;
		}


		// get all categories
		$all_cats 		= get_terms( $tax );
		$all_cat_slugs 	= wp_list_pluck( $all_cats, 'slug' );

		// get current post categories
		$current_cat = get_the_terms( $post->ID, $tax );

		if ( ! empty($all_cats) && ! empty($current_cat) ) {
			$current_cat = array_values($current_cat);

			// display similar posts || all posts
			$cats_2_show = ( $posts_similar === true ) ? $current_cat[0]->slug : $all_cat_slugs;

			if ( $posts_similar === true && $posts_number > 0 ) {
				$posts_number = -1;
			}

			$tax_query_args = array(
				'taxonomy'  => $tax,
				'field' 	=> 'slug',
				'terms' 	=> $cats_2_show
			);

			$similar_posts = get_posts(array(
				'post_type' 	 => $post_type,
				'tax_query' 	 => array( $tax_query_args ),
				'posts_per_page' => $posts_number,
				'orderby' 		 => 'rand',
				'post__not_in' 	 => array( $post->ID )
			));


			$thumbnail_count = 0;
			foreach ( $similar_posts as $similar_post ) {
				if ( has_post_thumbnail( $similar_post->ID ) ) {
					$thumbnail_count++;
				}
			}

			if ( $display === true && ! empty( $similar_posts ) && $posts_number != 0 && $thumbnail_count > 0 ) {
				$html  = '<section class="similar-items inner-content body-section" data-columns-rate="'. $similars_general['columns_rate'] .'" data-autostart="'. $similars_general['auto_scroll'] .'" data-interval="'. $similars_general['auto_scroll_delay'] .'" data-animation="'. $similars_general['scroll_trans'] .'">';
				
				// title
				$html .= '<h3><span>'. $title .'</span></h3>';
				$html .= '<div class="jcarousel-wrap">';

				$html .= '<div class="jcarousel">';
				$html .= '<ul>';

				// items list
				foreach ( $similar_posts as $similar_post ) {
					if ( has_post_thumbnail( $similar_post->ID ) ) {
						$html .= '<li>';
						$html .= '<div class="image-overlay-wrap">';
						$html .= '<a href="'. esc_url(get_permalink( $similar_post->ID )) .'" class="image-overlay">';
						$html .= '<h5>'. $similar_post->post_title .'</h5>';
						$html .= '</a>';
						$html .= get_the_post_thumbnail( $similar_post->ID, 'royal-similar-items' );
						$html .= '</div>';
						$html .= '</li>';
					}
				}

				$html .= '</ul>';
				$html .= '</div>';

				// previous arrow
				$html .= '<span class="jcarousel-prev">';
				$html .= '<i class="fa fa-'. $similars_arrows['prev_nxt_icon'] .'-left rf-button"></i>';
				$html .= '</span>';

				// next arrow
				$html .= '<span class="jcarousel-next">';
				$html .= '<i class="fa fa-'. $similars_arrows['prev_nxt_icon'] .'-right rf-button"></i>';
				$html .= '</span>';

				$html .= '</div>';
				$html .= '</section>';

				echo ''. $html;
			}

			// restore original post data
			wp_reset_postdata();

		} // endif
	}
}

/*
***************************************************************
* #Display Comments
***************************************************************
*/

if ( ! function_exists('royal_comments') ) {
	function royal_comments( $comment, $args, $depth ) {

		// get theme customizer data
		$comments_general = get_option( 'royal_comments_general' );
		$comments_image   = get_option( 'royal_comments_image' );

		// if comment is pingback
		if ( get_comment_type() == 'pingback' || get_comment_type() == 'trackback' ) { 

			$html  = '<li id="comment-'. get_comment_ID() .'">';
			$html .= '<article '. comment_class( 'clearfix', null, null, false ) .'>';

			$html .= '<div class="comment-content-wrap">';

			$html .= '<p>'. esc_html__( 'Pingback:&nbsp;', 'hyperx' ) . get_comment_author_link() .'</p>';
			$html .= '<p><a href="'. esc_url(get_edit_comment_link()) .'" target="_blank">'. esc_html__( 'Edit this', 'hyperx' ) .'</a></p>';

			$html .= '</div>';

			$html .= '</article>';

			echo ''. $html;

		// if it is normal comment
		} elseif ( get_comment_type() == 'comment' ) { 

			// get avatar size from theme customizer
			$avatar_size = $comments_image['avatar_size'];
			if ( $comment->comment_parent != 0 ) {
				$avatar_size = $comments_image['avatar_size'] - 3;
			}

			// commenta
			$html  = '<li id="comment-'. get_comment_ID() .'">';
			$html .= '<article '. comment_class( 'clearfix', null, null, false ) .'>';

			// author image
			$html .= '<div class="comment-author-img">'. get_avatar( $comment, $avatar_size ) .'</div>';

			$html .= '<div class="comment-content-wrap">';

				// comments meta
				$html .= '<header>';
					$html .= '<strong>'. get_comment_author_link() .'</strong>';
					$html .= '<div class="single-meta">';
					$html .= '<span>'. get_comment_date() . esc_html__( ' at ', 'hyperx' ) . get_comment_time() .'&nbsp;</span>';

					if ( trim( get_edit_comment_link() ) !== '' ) {
						$html .= '<span><a href="'. esc_url(get_edit_comment_link()) .'" target="_blank">'. esc_html__( ' [Edit] ', 'hyperx' ) .'</a></span>';
					}
					
					$html .= '<span>'. esc_url( get_comment_reply_link( array_merge( $args, array( "depth" => $depth, "max_depth" => $args["max_depth"], "reply_text" => esc_html__( ' - Reply', 'hyperx' ) ) ) ) ) .'</span>';
					$html .= '</div>';
				$html .= '</header>';

				$html .= '<div class="clear"></div>';
				echo ''. $html;

				echo '<div class="comment-content">';
					comment_text();
				echo '</div>';

			echo '</div>';

			// if comment is awaiting moderation
			if ( $comment->comment_approved == '0' ) {
				echo '<p class="awaiting-moderation single-meta">'. $comments_general['moderation_text'] .'</p>';
			}

			echo '</article>';
		}

		
	}
}




/*
***************************************************************
* #Custom Comments Form
***************************************************************
*/

// comments form & textarea for comment message
if ( ! function_exists('royal_custom_comment_form') ) {
	function royal_custom_comment_form($defaults) {

		$defaults['comment_notes_before'] = '';
		$defaults['comment_notes_after'] = '';
		$defaults['id_form'] = 'comment-form';
		$defaults['comment_field'] = '<textarea name="comment" id="comment" class="pers-message rf-input" rows="8" data-placeholder="'. esc_html__( '*Message', 'hyperx' ) .'">'. esc_html__( '*Message', 'hyperx' ) .'</textarea>';

		return $defaults;
	}
}

add_filter( 'comment_form_defaults', 'royal_custom_comment_form' );

// comment form fields - author, email, url
if ( ! function_exists('royal_custom_comment_fields') ) {
	function royal_custom_comment_fields($defaults) {

		// required fields
		$req 		= get_option('require_name_email');
		$aria_req 	= ( $req ) ? ' aria-required="true"' : '';

		$fields = array(
			'author' => '<input type="text" name="author" id="author" class="rf-input pers-name" data-placeholder="'. ( $req ? '*' : '' ) . esc_html__( 'Name', 'hyperx' ) .'" value="'. ( $req ? '*' : '' ) . esc_html__( 'Name', 'hyperx' ) .'" '. $aria_req .'>',
			'email'	 => '<input type="text" name="email" id="email" class="rf-input pers-email" data-placeholder="'. ( $req ? '*' : '' ) . esc_html__( 'Email', 'hyperx' ) .'" value="'. ( $req ? '*' : '' ) . esc_html__( 'Email', 'hyperx' ) .'" '. $aria_req .'>',
			'url' 	 => '<input type="text" name="url" id="url" class="rf-input" data-placeholder="'. esc_html__( 'Website', 'hyperx' ) .'" value="'. esc_html__( 'Website', 'hyperx' ) .'">'
		);

		return $fields;
	}
}

add_filter( 'comment_form_default_fields', 'royal_custom_comment_fields' );


/*
***************************************************************
* #Register Widgetized Areas
***************************************************************
*/

if ( ! function_exists('royal_register_sidebars') ) {
	function royal_register_sidebars() {

		// get theme customizer data
		$sidebar = get_option( 'royal_sidebar' );

		if ( $sidebar['general_position'] === 'left' ) {

			// Left Sidebar
			register_sidebar(array(
				'name' 			=> esc_html__( 'Sidebar Widgets', 'hyperx' ),
				'id' 			=> 'sidebar-widgets',
				'description' 	=> esc_html__( 'Page Sidebar widgetized area', 'hyperx' ),
				'before_widget' => '<section id="%1$s" class="sidebar-widget sid-block %2$s">',
				'after_widget' 	=> '</section>',
				'before_title' 	=> '<h3 class="sid-widget-title"><span>',
				'after_title' 	=> '</span></h3>'
			));

		} else {

			// Top sidebar
			register_sidebar(array(
				'name' 			=> esc_html__( 'Top Widgets', 'hyperx' ),
				'id' 			=> 'top-widgets',
				'description' 	=> esc_html__( 'Top widgetized area', 'hyperx' ),
				'before_widget' => '<section id="%1$s" class="top-widget %2$s">',
				'after_widget' 	=> '</section>',
				'before_title' 	=> '<h3 class="top-widget-title"><span>',
				'after_title' 	=> '</span></h3>'
			));

			// Footer sidebar
			register_sidebar(array(
				'name' 			=> esc_html__( 'Footer Widgets', 'hyperx' ),
				'id' 			=> 'footer-widgets',
				'description' 	=> esc_html__( 'Page Footer widgetized area', 'hyperx' ),
				'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
				'after_widget' 	=> '</section>',
				'before_title' 	=> '<h3 class="foot-widget-title"><span>',
				'after_title' 	=> '</span></h3>'
			));

		}

	}
}

add_action( 'widgets_init', 'royal_register_sidebars' );


/*
***************************************************************
* #Custom Search Form
***************************************************************
*/

if ( ! function_exists('royal_search_form') ) {
	function royal_search_form($form) {
		// get search form icon from theme customizer
		$inputs_search = get_option('royal_inputs_search');

		$form  = '<form role="search" method="get" id="searchform" class="searchform" action="'. esc_url( home_url( '/' ) ) .'">';

		$form .= '<div class="search-wrap">';
			$form .= '<input type="text" value="'. esc_html__( 'Search', 'hyperx' ) .'" data-placeholder="'. esc_html__( 'Search', 'hyperx' ) .'" name="s" id="s" />';
			$form .= '<i class="fa fa-'. $inputs_search['icon'] .' search-icon"></i>';
			$form .= '<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'hyperx' ) .'" />';
		$form .= '</div>';

		$form .= '</form>';

		return $form;
	}	
}

add_filter( 'get_search_form', 'royal_search_form' );

// add search icon to top nav
function royal_add_search_box( $html, $args ) {
	$sidebar		= get_option( 'royal_sidebar' );
	$inputs_search  = get_option('royal_inputs_search');

	if ( $sidebar['general_position'] === 'top' && $inputs_search['show_top_nav'] === true ) {
	
		$html .= '<li class="top-nav-search-wrap">';
		$html .= '<a href="#"><i class="fa fa-'. esc_attr($inputs_search['icon']) .' search-icon"></i></a>';
	    $html .= '<div class="top-nav-search-form">'. get_search_form( false ) .'</div>';
	    $html .= '</li>';

    }

    return $html;
}

add_filter( 'wp_nav_menu_items','royal_add_search_box', 10, 2 );


/*
***************************************************************
* #Custom Password Protected Form
***************************************************************
*/

function custom_password_form( $content ) {

	$before  = array( 'This post is password protected. To view it please enter your password below:', 'Password:', 'Submit' );
	$after 	 = array( 'Enter your password to view this post:', '', 'Submit' );
	$content = str_replace( $before, $after, $content );

	return $content;
}

add_filter( 'the_password_form', 'custom_password_form' );



/*
***************************************************************
* #Include Framework
***************************************************************
*/

// Metaboxes
require_once( get_template_directory() .'/framework/metaboxes/metaboxes.php');

// Post Likes
require_once( get_template_directory() .'/framework/post-likes/post-likes.php');

// Google Fonts
require_once( get_template_directory() .'/framework/google-fonts/google-fonts.php');

// Google Fonts Enqueue
require_once( get_template_directory() .'/framework/google-fonts/gfonts-enqueue.php');

// Customizer
require_once( get_template_directory() .'/framework/customizer/royal-customizer.php');

// Customizer Values
add_action('after_switch_theme', 'royal_setup_options');

function royal_setup_options () {

	// theme activation
	require_once( get_template_directory() .'/framework/customizer/customizer-values.php');

}

// Customizer UI CSS
require_once( get_template_directory() .'/framework/customizer/css/customizer-ui.php');

// Dynamic CSS - generated via theme customzier
require_once( get_template_directory() .'/framework/customizer/css/dynamic-css.php');

// Dynamic JS / GA - generated via theme customzier
require_once( get_template_directory() .'/framework/customizer/js/dynamic-js.php');

// TGM_Plugin_Activation class.
require_once( get_template_directory() .'/framework/tgm-plugin-activation/class-tgm-plugin-activation.php');


/*
***************************************************************
* #TGM Plugin activation
***************************************************************
*/

if ( ! function_exists('royal_register_plugins') ) {
	function royal_register_plugins() {

	    $plugins = array(

	        // Royal Core
	        array(
	            'name'               => 'Royal Core',
	            'slug'               => 'royal-core',
	            'source'             => THEMEROOT . '/plugins/royal-core.zip',
	            'required'           => true,
	            'version'            => '1.1',
	            'force_activation'   => false,
	            'force_deactivation' => false,
	            'external_url'       => '',
	        ),

	        // Visual Composer
	        array(
	            'name'               => 'WPBakery Visual Composer',
	            'slug'               => 'js_composer',
	            'source'             => THEMEROOT . '/plugins/js_composer.zip',
	            'required'           => true,
	            'version'            => '4.8.1',
	            'force_activation'   => false,
	            'force_deactivation' => false,
	            'external_url'       => '',
	        ),

	        // Ultimate Addons for Visual Composer
	        array(
	            'name'               => 'Ultimate Addons for Visual Composer',
	            'slug'               => 'Ultimate_VC_Addons',
	            'source'             => THEMEROOT . '/plugins/Ultimate_VC_Addons.zip',
	            'required'           => true,
	            'version'            => '3.13.7',
	            'force_activation'   => false,
	            'force_deactivation' => false,
	            'external_url'       => '',
	        ),

	        // Slider Revolution
	        array(
	            'name'               => 'Slider Revolution',
	            'slug'               => 'revslider',
	            'source'             => THEMEROOT . '/plugins/revslider.zip',
	            'required'           => true,
	            'version'            => '5.1.1',
	            'force_activation'   => false,
	            'force_deactivation' => false,
	            'external_url'       => '',
	        ),

	        // AJAX Thumbnail Rebuild
	        array(
	            'name'               => 'AJAX Thumbnail Rebuild',
	            'slug'               => 'ajax-thumbnail-rebuild',
	            'required'           => false
	        ),

	        // Envato Toolkit
	        array(
	            'name'               => 'Envato Toolkit',
	            'slug'               => 'envato-wordpress-toolkit-master',
	            'source'             => THEMEROOT . '/plugins/envato-toolkit.zip',
	            'required'           => false,
	            'version'            => '1.7.3',
	            'force_activation'   => false,
	            'force_deactivation' => false,
	            'external_url'       => '',
	        ),

	    );

	    tgmpa( $plugins );

	}
}

add_action( 'tgmpa_register', 'royal_register_plugins' );