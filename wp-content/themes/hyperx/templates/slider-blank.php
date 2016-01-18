<?php // Template Name: Slider Blank ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<?php global $wp_version; if ( $wp_version < 4.1 ) : ?>
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<?php endif; ?>

	<!-- Header hook. Don't delete this. -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


		<?php // add Revolution Slider

			if ( isset($post) ) {

				$current_page_ID = $post->ID;

				if ( is_home() ) {
					global $wp_query;
					$current_page_ID = $wp_query->get_queried_object_id();
				}

				$rf_revslider_shortcode = get_post_meta( $current_page_ID, 'rf_revslider_shortcode', true );

				if ( trim($rf_revslider_shortcode) !== '' ) {
					echo '<div class="royal-revslider">';
						echo do_shortcode($rf_revslider_shortcode);
					echo '</div>';
				}
				
			}

		?>


<!-- Footer hook. Don't delete this. -->
<?php wp_footer(); ?>

</body>

</html>