<?php // Blog Single Post

// get header.php
get_header(); 

// get theme customizer data
$bSingle_header 	= get_option( 'royal_bSingle_header' );
$bSingle_nav 		= get_option( 'royal_bSingle_nav' );
$bSingle_share 		= get_option( 'royal_bSingle_share' );
$bPost_cats 		= get_option( 'royal_bPost_cats' );
$bPost_meta 		= get_option( 'royal_bPost_meta' );
$similars_general 	= get_option( 'royal_similars_general' );
$similars_title 	= get_option( 'royal_similars_title' );
$comments_general 	= get_option( 'royal_comments_general' );

?>


<!-- Inner Content Wrapper -->
<div class="inner-content-wrap">

	<!-- single post loop -->
	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Blog Single Post -->
	<article id="post-<?php echo esc_attr($post->ID); ?>" <?php post_class('blog-single clearfix'); ?>>

		<div class="single-wrap body-section">

			<?php

			// if header position is below media
			if ( $bSingle_header['position'] === 'below' ) {

				// get post format media content
				if ( false === get_post_format() ) {
					get_template_part( 'post-formats/content-single', 'content' );
				} else {
					get_template_part( 'post-formats/content-single', get_post_format() );
				}

			}

			?>

			<!-- Blog Single Title & Meta -->
			<header class="single-header blog-single-header inner-content">

				<div class="title-and-meta">

					<h1 class="single-title"><?php the_title(); ?></h1>

					<span class="post-meta-info single-meta">

						<span class="post-date">
							<?php the_time( get_option('date_format') ); ?>
							<span class="meta-sep">/</span>
						</span>

						<span class="post-categories">
							<span><?php echo esc_attr($bPost_cats['before_cats']); ?></span>
							<?php the_category(',&nbsp;'); ?>
							<span class="meta-sep">/</span>
						</span>

						<?php

						// comments number
						if ( comments_open() && ! post_password_required() ) {
							echo '<span class="post-comments-wrap">';
							comments_popup_link( esc_html__( '0 comment ', 'hyperx' ), esc_html__( '1 comment', 'hyperx' ), esc_html__( '% comments', 'hyperx' ), 'post-comments' );
							echo '<span class="meta-sep">/</span>';
							echo '</span>';
						}

						?>

						<span class="posted-by"><?php echo esc_attr($bPost_meta['before_author']); the_author_posts_link(); ?></span>

					</span><!-- end .post-meta-info -->

				</div><!-- end .title-and-meta -->

				<!-- Blog Single Next-Previous Nav -->
				<?php royal_single_next_prev( true, $bSingle_nav['prev_nxt_icon'], $bSingle_nav['prev_text'], $bSingle_nav['next_text'] ); ?>

				<div class="clear"></div>

			</header>


			<?php

			// if header position is above media
			if ( $bSingle_header['position'] === 'above' ) {

				// get post format media content
				if ( false === get_post_format() ) {
					get_template_part( 'post-formats/content-single', 'content' );
				} else {
					get_template_part( 'post-formats/content-single', get_post_format() );
				}

			}

			?>

			<div class="single-content-wrap inner-content">

				<?php

				// blog single actual content
				if ( $post->post_content !== '' || is_attachment() ) {
					echo '<div class="single-content clearfix">';

					// post content
					the_content(); 

					// post content pagination
					wp_link_pages(array(
						'before'           => '<p class="post-cont-pagination"><span class="pagi-label">'. esc_html__( 'Pages:', 'hyperx' ) .'</span>',
						'after'            => '</p>',
						'link_before'      => '<span class="rf-button">',
						'link_after'       => '</span>'
					)); 

					// tags
					if ( has_tag() ) {
						echo '<div class="single-tags">';
							the_tags( '<span>'. esc_html__( 'Tags:', 'hyperx' ) .' </span>' );
						echo '</div>';
					} 

					echo '</div>';
				}

				?>

				<!-- Post Sharing -->
				<h3 class="single-post-sharing">

					<!-- Blog Single Next-Previous Nav -->
					<?php royal_single_next_prev( false, $bSingle_nav['prev_nxt_icon'], $bSingle_nav['prev_text'], $bSingle_nav['next_text'] ); ?>

					<span class="single-socials-wrap">
						<span><?php echo esc_html($bSingle_share['label_text']); ?></span>
						<?php royal_sharing_icon_links( true ); ?>
					</span>

				</h3>

			</div> <!-- end .single-content-wrap -->

		</div> <!-- end .single-wrap -->

	</article><!-- end Blog Single Post -->

	<?php 

	// end single post loop
	endwhile;

	// reset query
	rewind_posts();


	// similar items
	royal_similar_items( array(
		'post_type'		=> 'blog',
		'display'		=> $similars_general['blog_label'],
		'title'			=> $similars_title['blog_text'],
		'posts_similar' => $similars_general['blog_showtype']
	));


	// display comments - get comments.php
	if ( $comments_general['blog_display'] === true ) {
		comments_template( '', true );
	}

	?>

</div><!-- end .inner-content-wrap --> 


<!-- get footer.php -->
<?php get_footer(); ?>