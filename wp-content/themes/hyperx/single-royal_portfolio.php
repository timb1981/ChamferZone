<?php // Portfolio Single Post

// get header.php
get_header(); 

// get theme customizer data
$pPost_cats 		= get_option( 'royal_pPost_cats' );
$pPost_meta 		= get_option( 'royal_pPost_meta' );
$pSingle_header 	= get_option( 'royal_pSingle_header' );
$pSingle_nav 		= get_option( 'royal_pSingle_nav' );
$pSingle_share 		= get_option( 'royal_pSingle_share' );
$pSingle_project 	= get_option( 'royal_pSingle_project' );
$similars_general 	= get_option( 'royal_similars_general' );
$similars_title 	= get_option( 'royal_similars_title' );
$comments_general 	= get_option( 'royal_comments_general' );

?>


<!-- Inner Content Wrapper -->
<div class="inner-content-wrap">

	<?php

	// single post loop
	while ( have_posts() ) : the_post();

	// portfolio categories
	$portfolio_cat_list = get_the_term_list( get_the_ID(), 'royal_portfolio_cats', '', ', ' );

	// portfolio skills
	$portfolio_skill_list = get_the_term_list( get_the_ID(), 'royal_portfolio_skills', '<li>', '</li><li>', '</li>' ); 
	$portfolio_skill_list = strip_tags( $portfolio_skill_list, '<li>' );

	// get data from custom fields
	$rf_project_info_sticky 	= get_post_meta( get_the_ID(), 'rf_project_info_sticky', true );
	$rf_project_info_offset 	= get_post_meta( get_the_ID(), 'rf_project_info_offset', true );
	$rf_project_desc_title 		= get_post_meta( get_the_ID(), 'rf_project_desc_title', true );
	$rf_project_description 	= get_post_meta( get_the_ID(), 'rf_project_description', true );
	$rf_project_details_title 	= get_post_meta( get_the_ID(), 'rf_project_details_title', true );
	$rf_project_client 			= get_post_meta( get_the_ID(), 'rf_project_client', true );
	$rf_project_url 			= get_post_meta( get_the_ID(), 'rf_project_url', true );

	?>

	<!-- Portfolio Single Post -->
	<article id="post-<?php echo esc_attr($post->ID); ?>" <?php post_class('portfolio-single clearfix'); ?>>

		<div class="single-wrap body-section clearfix">

			<?php

			// if header position is below media
			if ( $pSingle_header['position'] === 'below' ) {

				// get post format media content
				if ( false === get_post_format() ) {
					get_template_part( 'post-formats/content-single', 'content' );
				} else {
					get_template_part( 'post-formats/content-single', get_post_format() );
				}

			}

			?>

			<!-- Portfolio Single Title & Meta -->
			<header class="single-header portfolio-single-header inner-content">

				<div class="title-and-meta">

					<h1 class="single-title"><?php the_title(); ?></h1>

					<span class="post-meta-info single-meta">

						<span class="post-date">
							<?php the_time( get_option('date_format') ); ?>
							<span class="meta-sep">/</span>
						</span>
						
						<?php

						// comments number
						if ( comments_open() && ! post_password_required() ) {

							echo '<span class="post-comments-wrap">';

							comments_popup_link( esc_html__( '0 comment', 'hyperx' ), esc_html__( '1 comment', 'hyperx' ), esc_html__( '% comments', 'hyperx' ), 'post-comments' );
							echo '<span class="meta-sep">/</span>';

							echo '</span>';

						}

						// portfolio categories
						if ( $portfolio_cat_list !== false ) {

							echo '<span class="post-categories">';

							echo '<span>'. $pPost_cats['before_cats'] .'</span>';
							echo wp_kses_post($portfolio_cat_list);
							echo '<span class="meta-sep">/</span>';

							echo '</span>';

						}

						?>

						<span class="posted-by"><?php echo esc_html($pPost_meta['before_author']); the_author(); ?></span>

					</span><!-- end .post-meta-info -->

				</div><!-- end .title-and-meta -->

				<!-- Portfolio Single Next-Previous Nav -->
				<?php royal_single_next_prev( true, $pSingle_nav['prev_nxt_icon'], $pSingle_nav['prev_text'], $pSingle_nav['next_text'] ); ?>

				<div class="clear"></div>

			</header>


			<?php

			// if header position is above media
			if ( $pSingle_header['position'] === 'above' ) {
				
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

				// portfolio single actual content
				if ( trim($post->post_content) !== '' ) {

					echo '<div class="single-content clearfix">';

						// post content
						the_content(); 

						// post content pagination
						wp_link_pages(array(
							'before'      => '<p class="post-cont-pagination"><span class="pagi-label">'. esc_html__( 'Pages: ', 'hyperx' ) .'</span>',
							'after'		  => '</p>',
							'link_before' => '<span class="rf-button">',
							'link_after'  => '</span>'
						));

					echo '</div>';

				}

				?>

				<!-- Post Sharing -->
				<h3 class="single-post-sharing">

					<!-- Portfolio Single Next-Previous Nav -->
					<?php royal_single_next_prev( false, $pSingle_nav['prev_nxt_icon'], $pSingle_nav['prev_text'], $pSingle_nav['next_text'] ); ?>

					<span class="single-socials-wrap">
						<span><?php echo esc_html($pSingle_share['label_text']); ?></span>
						<?php royal_sharing_icon_links(true); ?>
					</span>

				</h3>

			</div>

		<?php

		// if Project Info position is below content - end .single-wrap here
		if ( $pSingle_project['position'] !== 'below_vert' ) {
			echo '</div>'; // end .single-wrap
		}

		?>



		<!-- Portfolio Project Info -->
		<div class="project-info inner-content body-section" data-left-margin="<?php echo esc_attr($pSingle_project['margin_lt']); ?>" data-sticky="<?php echo esc_attr($rf_project_info_sticky); ?>" data-sticky-offset="<?php echo esc_attr($rf_project_info_offset); ?>">

			<?php

			if ( trim($rf_project_desc_title) !== '' || trim($rf_project_description) !== '' ) {

				// Portfolio Project Description
				echo '<div class="project-description-wrap">';

				// Project Description Title
				if ( trim($rf_project_desc_title) !== '' ) {
					echo '<h3 class="proj-info-title">'. esc_html( $rf_project_desc_title ) .'</h3>';
				}

				// Project Description Content
				if ( trim($rf_project_description) !== '' ) {
					echo '<p>'. do_shortcode( $rf_project_description ) .'</p>';
				}	

				echo '</div>';

			}

			?>

			<!-- Portfolio Project Details -->
			<div class="project-details-wrap">

				<?php

				// Project Details Title
				if ( trim($rf_project_details_title) !== '' ) {
					echo '<h3 class="proj-info-title">'. esc_html( $rf_project_details_title ) .'</h3>';
				}

				?>

				<ul class="project-details">

					<?php

					// client
					if ( trim($rf_project_client) !== '' ) {
						echo '<li><strong><i class="fa fa-user"></i> '. esc_html__( 'Client:', 'hyperx' ) .'</strong>';
						echo '<span class="proj-details-meta">'. esc_html($rf_project_client) .'</span>';
						echo '</li>';
					}

					// categories
					if ( $portfolio_cat_list !== false ) {
						echo '<li class="info-categories"><strong><i class="fa fa-list"></i> '. esc_html__( 'Categories:', 'hyperx' ) .'</strong>';
						echo '<ul class="proj-details-meta">'. get_the_term_list( $post->ID, 'royal_portfolio_cats', '<li>', '</li><li>', '</li>' ) .'</ul>';
						echo '</li>';
					}

					// skills
					if ( $portfolio_skill_list !== '' ) {
						echo '<li><strong><i class="fa fa-tasks"></i> '. esc_html__( 'Skills:', 'hyperx' ) .'</strong>';
						echo '<ul class="proj-details-meta">'. $portfolio_skill_list .'</ul>';
						echo '</li>';
					}

					// project url
					if ( trim($rf_project_url) !== '' ) {
						echo '<li><strong><i class="fa fa-link"></i> '. esc_html__( 'Project Url:', 'hyperx' ) .'</strong>';
						echo '<span class="proj-details-meta"><a href="'. esc_url($rf_project_url) .'" class="project-link" target="_blank">'. $pSingle_project['link_text'] .'</a></span>';
						echo '</li>';
					}

					// social sharing
						echo '<li class="info-sharing"><strong><i class="fa fa-share-alt"></i> <span>'. $pSingle_share['label_text'] .'</span></strong>';
						echo '<span class="proj-details-meta">';
						royal_sharing_icon_links(false);
						echo '</span>';

					?>

				</ul><!-- end .project-details -->

			</div><!-- end .project-info -->
				
			<!-- Portfolio Single Next-Previous Nav -->
			<?php royal_single_next_prev( true, $pSingle_nav['prev_nxt_icon'], $pSingle_nav['prev_text'], $pSingle_nav['next_text'] ); ?>

		</div>


		<?php

		// if Project Info position is below media - end .single-wrap here
		if ( $pSingle_project['position'] === 'below_vert' ) {
			echo '</div>'; // end .single-wrap
		}

		?>


		<!-- Portfolio Single Next-Previous Nav on Side -->
		<?php royal_single_next_prev( false, $pSingle_nav['prev_nxt_icon'], $pSingle_nav['prev_text'], $pSingle_nav['next_text'] ); ?>

	</article><!-- Portfolio Single Post -->

	<?php 

	// end single post loop
	endwhile;

	// reset query
	rewind_posts();


	// similar items
	royal_similar_items( array(
		'post_type'		=> 'portfolio',
		'display'		=> $similars_general['portfolio_label'],
		'title'			=> $similars_title['portfolio_text'],
		'posts_similar' => $similars_general['portfolio_showtype']
	));


	// display comments - get comments.php
	if ( $comments_general['portfolio_display'] === true ) {
		comments_template( '', true );
	}

	?>

</div><!-- end .inner-content-wrap --> 


<!-- get footer.php -->
<?php get_footer(); ?>