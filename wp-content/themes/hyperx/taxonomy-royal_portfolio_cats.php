<?php // Portfolio Category Page Template

// get header.php
get_header();


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
$pPost_effects 	= get_option( 'royal_pPost_effects' );
$sidebar 		= get_option( 'royal_sidebar' );
$filter_items 	= get_option( 'royal_filter_items' );

?>


<!-- Portfolio Filters -->
<?php if ( $sidebar['general_position'] === 'top' ) : ?>

	<ul class="filters portfolio-filters body-section" data-sort="<?php echo get_option('sorted_cat_slugs'); ?>">

		<?php

		// Portfolio Filters
		if ( is_tax('royal_portfolio_cats') || is_single() ) {
			$rf_portfolio_items_from = 'all';
		} else {
			$rf_portfolio_items_from = get_post_meta( $post->ID, 'rf_portfolio_items_from', true );
		}

		// portfolio categories
		$portfolio_cats = get_terms('royal_portfolio_cats');

		// show all portfolio item filters
		if ( $rf_portfolio_items_from === 'all' ) {

			// if category array is not empty
			if ( count($portfolio_cats) > 0 ) {
				foreach ( $portfolio_cats as $cats => $cat ) {
					$cat_url = ( $filter_items['isotope'] === true ) ? '#' : get_term_link( $cat, 'royal_portfolio_cats' );
					echo '<li><a href="'. esc_url($cat_url) .'" class="rf-button" data-filter=".'. urldecode($cat->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
				}
			}

		// show portfolio item filters from custom categories
		} elseif ( $rf_portfolio_items_from === 'custom' ) {

			// get post meta data
			$checked_cats = array();
			$cat_filters  = array();

			foreach ( $portfolio_cats as $key => $value ) {
				$cat_id 		= 'cat-'.  $value->term_id;
				$checked_cats[] = get_post_meta( $post->ID, $cat_id, true );
				$cat_filters[]	= explode( ',', $checked_cats[ $key ] );

				if ( $cat_filters[$key][0] !== '' ) {
					$cat_url = ( $filter_items['isotope'] === true ) ? '#' : get_term_link( $value, 'royal_portfolio_cats' );
					echo '<li><a href="'. esc_url($cat_url) .'" class="rf-button" data-filter=".'. urldecode($cat_filters[$key][0]) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat_filters[$key][1] .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
				}
			}

		}

		?>

	</ul>

<?php endif; ?>


<?php

// get current category
$current_cat = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

// query portfolio posts from current category
$portfolio = new WP_Query(array(
	'post_type' 			=> 'royal_portfolio',
	'posts_per_page' 		=> '-1',
	'royal_portfolio_cats' 	=> $current_cat->slug

));


// Portfolio Posts Container Attributes
$portfolio_container_atts  = 'data-layout="'	  . $pPage_general['layout'] 		.'" ';
$portfolio_container_atts .= 'data-columns-rate="'. $pPage_general['columns_rate'] 	.'" ';
$portfolio_container_atts .= 'data-gutter-horz="' . $pPage_general['gutter_horz'] 	.'" ';
$portfolio_container_atts .= 'data-gutter-vert="' . $pPage_general['gutter_vert'] 	.'" ';


if ( $portfolio->have_posts() ) :

echo '<section id="portfolio-container" class="body-section" '. $portfolio_container_atts .' >';

// default post width for masonry-metro
if ( $pPage_general['layout'] === 'masonry-metro') {
	echo '<div class="portfolio-grid-sizer"></div>';
}

// portfolio category page loop - displayes portfolio items
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

	<div class="portfolio-post-inner<?php echo esc_attr($pPage_general['grid_animated'] ? ' rf-grid-animated' : ''); ?>">

	<!-- Post Text Block - Above Media -->
	<div class="post-text-wrap">

		<?php

		// Post Title
		if ( $pPost_title['position'] === 'above' ) {
			royal_post_title();
		}

		// Post Categories & Filters
		if ( $pPost_cats['position'] === 'above' ) {
			royal_post_categories( 'portfolio', $pPost_cats['before_cats'], $pPost_cats['separator'] );
		}

		// Post Date & Author
		if ( $pPost_meta['position'] === 'above' ) {
			royal_post_date_and_author( 'portfolio', $pPost_meta['before_author'] );
		}

		// Post Excerpt || Post Content
		if ( $pPost_desc['position'] === 'above' ) {
			royal_post_content( $pPost_desc['display_as'], $pPost_desc['excerpt_length'] );
		}

		// Likes, Sharing & Comments
		if ( $pPost_likes['position'] === 'above' ) {
			royal_post_likes_comments_sharing( array(
				'likes_icon' 	=> $pPost_likes['likes_icon'],
				'comments_icon' => $pPost_likes['comments_icon'],
				'separator' 	=> $pPost_likes['icon_separator'],
				'sharing_open' 	=> $pPost_likes['open_on']
			) );
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
			) );
		}

		// Client Testimonial
		if ( $pPost_test['position'] === 'above' ) {
			royal_portfolio_testimonial( $rf_testimonial_author, $rf_testimonial_content );
		}

		?>

	</div><!-- End .post-text-wrap -->


	<!-- Post Media Block -->
	<div class="post-media-wrap">
		
		<div class="post-media-in-wrap">

			<!-- Post Media -->
			<div class="post-media" data-grayscale="<?php echo esc_attr($pPost_effects['grayscale_label']); ?>" data-grayscale-trans="<?php echo esc_attr($pPost_effects['grayscale_trans']); ?>">

				<!-- Decorational Triangle -->
				<div class="triangle-wrap"></div>

				<!-- get post format media content -->
				<?php get_template_part( 'post-formats/content', get_post_format() ); ?>

			</div><!-- end .post-media -->

			<?php

				// get portfolio post info hover
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

			<!-- Post Info Hover: Fade  -->
			<div class="media-hovers media-hover-<?php echo esc_attr($info_hover); ?>">

				<div class="media-hovers-outer">
					<div class="media-hovers-inner">

					<?php

					// Post Title
					if ( $pPost_title['position'] === 'hover' ) {
						royal_post_title();
					}

					// Post Categories & Filters
					if ( $pPost_cats['position'] === 'hover' ) {
						royal_post_categories( 'portfolio', $pPost_cats['before_cats'], $pPost_cats['separator'] );
					}

					// Post Date & Author
					if ( $pPost_meta['position'] === 'hover' ) {
						royal_post_date_and_author( 'portfolio', $pPost_meta['before_author'] );
					}

					// Post Excerpt || Post Content
					if ( $pPost_desc['position'] === 'hover' ) {
						royal_post_content( $pPost_desc['display_as'], $pPost_desc['excerpt_length'] );
					}

					// Likes, Sharing & Comments
					if ( $pPost_likes['position'] === 'hover' ) {
						royal_post_likes_comments_sharing( array(
							'likes_icon' 	=> $pPost_likes['likes_icon'],
							'comments_icon' => $pPost_likes['comments_icon'],
							'separator' 	=> $pPost_likes['icon_separator'],
							'sharing_open' 	=> $pPost_likes['open_on']
						) );
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
						) );
					}

					// Client Testimonial
					if ( $pPost_test['position'] === 'hover' ) {
						royal_portfolio_testimonial( $rf_testimonial_author, $rf_testimonial_content );
					}
					

					// Media Hover Link
					$lightbox_img_src = esc_url(wp_get_attachment_url( get_post_thumbnail_id() ));
					
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
					}

					// get image ALT text
					$attachment = get_post( get_post_thumbnail_id() );
					$attachment_title = '';

					if ( $attachment !== null ) {
						$attachment_title = esc_attr( $attachment->post_title );
					}
				
					if ( $pPost_media['hover_link'] === 'permalink' ) {
						echo '<a href="'. esc_url(get_the_permalink()) .'" class="media-hover-link"></a>';
					} elseif ( $pPost_media['hover_link'] === 'lightbox' ) {
						echo '<a href="'. esc_url($lightbox_img_src) .'" rel="prettyPhoto[portfolio]" class="media-hover-link" data-title="'. esc_attr($attachment_title) .'"></a>';
					}

					?>

					</div>
				</div>
			
			</div> <!-- end .media-hovers -->
	
		</div><!-- end .post-media-in-wrap -->

	</div><!-- end .post-media-wrap -->


	<!-- Post Text wrap - Below Media -->
	<div class="post-text-wrap">

		<?php

		// Post Title
		if ( $pPost_title['position'] === 'below' ) {
			royal_post_title();
		}

		// Post Categories & Filters
		if ( $pPost_cats['position'] === 'below' ) {
			royal_post_categories( 'portfolio', $pPost_cats['before_cats'], $pPost_cats['separator'] );
		}

		// Post Date & Author
		if ( $pPost_meta['position'] === 'below' ) {
			royal_post_date_and_author( 'portfolio', $pPost_meta['before_author'] );
		}

		// Post Excerpt || Post Content
		if ( $pPost_desc['position'] === 'below' ) {
			royal_post_content( $pPost_desc['display_as'], $pPost_desc['excerpt_length'] );
		}

		// Likes, Sharing & Comments
		if ( $pPost_likes['position'] === 'below' ) {
			royal_post_likes_comments_sharing( array(
				'likes_icon' 	=> $pPost_likes['likes_icon'],
				'comments_icon' => $pPost_likes['comments_icon'],
				'separator' 	=> $pPost_likes['icon_separator'],
				'sharing_open' 	=> $pPost_likes['open_on']
			) );
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
			) );
		}

		// Client Testimonial
		if ( $pPost_test['position'] === 'below' ) {
			royal_portfolio_testimonial( $rf_testimonial_author, $rf_testimonial_content );
		}

		?>

	</div><!-- end .post-text-wrap -->

	</div><!-- end .portfolio-post-inner -->

</article><!-- End Post -->

<?php endwhile; ?>


</section><!-- End #portfolio-container -->


<!-- restore original post data -->
<?php wp_reset_postdata(); ?>


<!-- if have no posts -->
<?php else: ?>
	<div class="inner-content">
		<h3><?php esc_html_e( 'No Portfolio Items found!', 'hyperx' ); ?></h3>
	</div>
<?php endif; ?>


<!-- get footer.php -->
<?php get_footer(); ?>