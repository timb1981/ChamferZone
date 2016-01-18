<?php // Site Footer

// get theme customzier data 
$fWidgets_general 	= get_option( 'royal_fWidgets_general' );
$fWidgets_content 	= get_option( 'royal_fWidgets_content' );
$copy_and_soc_gen	= get_option( 'royal_copy_soc_general' );
$socials 			= get_option( 'royal_socials' );
$copyright 			= get_option( 'royal_copyright' );
$back_btn 			= get_option( 'royal_back_btn' );

// Footer Widgetized Area
if ( ( is_active_sidebar('footer-widgets') && $fWidgets_content['label'] === true ) &&
		( 
			( ( is_home() || is_category() || is_tag() || is_search() ) && $fWidgets_general['inc_blog'] ) ||
			( is_single() && 'post' === get_post_type() && $fWidgets_general['inc_blog_single'] ) ||
			( is_page_template('portfolio.php') && $fWidgets_general['inc_portfolio'] ) ||
			( is_single() && 'royal_portfolio' === get_post_type() && $fWidgets_general['inc_portfolio_single'] ) ||
			( is_page_template('contact.php') && $fWidgets_general['inc_contact'] ) ||
			( is_page() && !is_page_template() && $fWidgets_general['inc_default'] )
		)
 ) {
	echo '<div class="footer-widgets">';

		dynamic_sidebar('footer-widgets');

	echo '</div>';
}

?>

	</div><!-- end #main-wrap -->
	
	<!-- Copyright & Socials -->
	<footer class="copy-and-soc">

		<!-- Inner Block -->
		<div>

			<?php

			// Social Icons
			echo '<div class="socials-wrap">';

				// social icon 1
				$s_1 = ( trim($socials['url_1']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_1']) .'"  target="_blank" '. $s_1 .'><i class="fa fa-'. $socials['icon_1'] .' rf-button"></i></a>';

				// social icon 2
				$s_2 = ( trim($socials['url_2']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_2']) .'" target="_blank" '. $s_2 .'><i class="fa fa-'. $socials['icon_2'] .' rf-button"></i></a>';

				// social icon 3
				$s_3 = ( trim($socials['url_3']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_3']) .'" target="_blank" '. $s_3 .'><i class="fa fa-'. $socials['icon_3'] .' rf-button"></i></a>';

				// social icon 4
				$s_4 = ( trim($socials['url_4']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_4']) .'" target="_blank" '. $s_4 .'><i class="fa fa-'. $socials['icon_4'] .' rf-button"></i></a>';

				// social icon 5
				$s_5 = ( trim($socials['url_5']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_5']) .'" target="_blank" '. $s_5 .'><i class="fa fa-'. $socials['icon_5'] .' rf-button"></i></a>';

				// social icon 6
				$s_6 = ( trim($socials['url_6']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_6']) .'" target="_blank" '. $s_6 .'><i class="fa fa-'. $socials['icon_6'] .' rf-button"></i></a>';

				// social icon 7
				$s_7 = ( trim($socials['url_7']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_7']) .'" target="_blank" '. $s_7 .'><i class="fa fa-'. $socials['icon_7'] .' rf-button"></i></a>';

				// social icon 8
				$s_8 = ( trim($socials['url_8']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_8']) .'" target="_blank" '. $s_8 .'><i class="fa fa-'. $socials['icon_8'] .' rf-button"></i></a>';

				// social icon 9
				$s_9 = ( trim($socials['url_9']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_9']) .'" target="_blank" '. $s_9 .'><i class="fa fa-'. $socials['icon_9'] .' rf-button"></i></a>';

				// social icon 10
				$s_10 = ( trim($socials['url_10']) === '' ) ? 'class="empty-social"' : '';
				echo '<a href="'. esc_url($socials['url_10']) .'" target="_blank" '. $s_10 .'><i class="fa fa-'. $socials['icon_10'] .' rf-button"></i></a>';

			echo '</div>';

			?>

			<!-- Copyright -->
			<div class="copyright-wrap">
				<p>
				<?php

				// allow only links, break lines, italics & and blod in copyright text
				echo wp_kses( $copyright['text'], array( 
					'a' => array(
						'href' 		=> array(),
						'title' 	=> array(),
						'_blank'	=> array()
					),
					'img' => array(
						'src' 		=> array(),
						'alt' 		=> array(),
						'width'		=> array(),
						'height'	=> array(),
						'style'		=> array(),
						'class'		=> array(),
						'id'		=> array()
					),
					'br' 	 => array(),
					'em' 	 => array(),
					'strong' => array()
				) );

				?>
				</p>
			</div>

			<!-- Fixed Fold Button -->
			<div class="footer-fold-btn">
				<i class="fa fa-<?php echo esc_attr($copy_and_soc_gen['fold_btn_icon']); ?>"></i>
			</div>
		
		<!-- clear floats -->
		<div class="clear"></div>

		</div><!-- End Inner Block -->

	</footer>

	<!-- Back to Top button -->
	<?php if ( $back_btn['label'] === true ) : ?>

		<div class="back-to-top" data-duration="<?php echo esc_attr($back_btn['show_trans']); ?>" data-scroll-top="<?php echo esc_attr($back_btn['scroll_trans']); ?>">
			<i class="rf-button fa fa-<?php echo esc_attr($back_btn['icon']); ?>"></i>
		</div>
		
	<?php endif; ?>


</div><!-- end #page-wrap -->


<!-- Footer hook. Don't delete this. -->
<?php wp_footer(); ?>

</body>
</html>