<?php // Search Page Template

// get header.php
get_header();

?>

<!-- Inner Content Wrapper -->
<div class="inner-content-wrap">

<section class="inner-content body-section">

	<?php if ( have_posts() ) : ?>

		<h2 class="search-query"><?php esc_html_e( 'Search Results For: ', 'hyperx' ); the_search_query(); ?></h2>
		
		<hr>

		<?php while( have_posts() ) : the_post(); ?>

			<div class="search-results-wrap">

				<div class="search-result-thumbnail">
					<?php the_post_thumbnail('royal-search-results'); ?>
					<p><i class="fa fa-picture-o"></i>&nbsp;&nbsp;&nbsp;<?php esc_html_e( 'No Image', 'hyperx' ); ?></p>
				</div>

				<h4><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h4>

				<p><?php echo royal_excerpt(100); ?></p>

				<div class="clear"></div>
			</div>

		<?php endwhile; ?>

	<?php else : ?>		

		<h2 class="search-query"><?php esc_html_e( 'No search results found. Try Again:', 'hyperx' ); ?></h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

</section>

</div><!-- .inner-content-wrap -->

<!-- get footer.php -->
<?php get_footer(); ?>