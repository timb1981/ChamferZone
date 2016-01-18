<?php // Blog Page Template

// get header.php
get_header();

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

?>


<!-- Blog Filters -->
<?php if ( $sidebar['general_position'] === 'top' ) : ?>

	<ul class="filters body-section">

		<?php if ( $filter_items['isotope'] === true ) : ?>
		<li>
			<a class="rf-button active-filter-item active-state" data-filter="*">
				<i class="fa fa-<?php echo esc_attr($filter_items['icon']); ?>"></i>
				<span><?php echo esc_html($filter_items['blog_all_text']); ?></span>
				<i class="fa fa-<?php echo esc_attr($filter_items['icon']); ?>"></i>
				<sup></sup>
			</a>
		<?php endif; ?>
		
		<?php

		$blog_cats = get_terms('category');

		// if category array is not empty - except uncategorized
		if ( count($blog_cats) > 1 ) {
			foreach ( $blog_cats as $cats => $cat ) {
				if ( $cat->slug !== 'uncategorized' ) {
					$cat_url = ( $filter_items['isotope'] === true ) ? '' : 'href="'. esc_url(get_term_link( $cat, 'category' )) .'"';
					echo '<li><a '. esc_url($cat_url) .' class="rf-button" data-filter=".'. urldecode($cat->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup></sup></a></li>';
				}
			}
		}

		?>

	</ul>

<?php endif; ?>


<?php

// Blog Posts Container
$blog_container_atts  = 'data-layout="'		  . $bPage_general['layout'] 		.'" ';
$blog_container_atts .= 'data-columns-rate="' . $bPage_general['columns_rate'] 	.'" ';
$blog_container_atts .= 'data-gutter-horz="'  . $bPage_general['gutter_horz'] 	.'" ';
$blog_container_atts .= 'data-gutter-vert="'  . $bPage_general['gutter_vert'] 	.'" ';
$blog_container_atts .= 'data-aspect-width="' . $bPage_general['aspect_x'] 		.'" ';
$blog_container_atts .= 'data-aspect-height="'. $bPage_general['aspect_y'] 		.'" ';

?>

<?php 

if ( have_posts() ) :

echo '<section id="blog-container" class="body-section" '. $blog_container_atts .' >';

// default post width for masonry-metro
if ( $bPage_general['layout'] === 'masonry-metro') {
	echo '<div class="blog-grid-sizer"></div>';
}

// index page loop - displays blog posts
while( have_posts() ) : the_post();

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

	<div class="blog-post-inner<?php echo esc_attr($bPage_general['grid_animated'] ? ' rf-grid-animated' : ''); ?>">

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
			
			<!-- get post format media content -->
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


<!-- Posts Pagination -->
<?php royal_pagination( '', 'infinite' ); ?>


<!-- if have no posts -->
<?php else: ?>
	<div class="inner-content">
		<h3><?php esc_html_e( 'No Posts found!', 'hyperx' ); ?></h3>
	</div>
<?php endif; ?>


<!-- get footer.php -->
<?php get_footer(); ?>