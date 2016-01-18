<?php // Default Page Template

// get header.php
get_header(); 

// get theme customizer data
$comments_general = get_option( 'royal_comments_general' );

while( have_posts() ) : the_post(); 

?>


<!-- Inner Content Wrapper -->
<div class="inner-content-wrap">

	<!-- Page Content -->
	<section class="inner-content body-section clearfix">

		<div class="single-content">
			<?php the_content(); ?>
		</div>

	</section>

	<?php // display comments - get comments.php

	if ( $comments_general['page_display'] === true ) {
		comments_template( '', true );
	}

	?>

</div><!-- end .inner-content-wrap --> 

<?php endwhile; ?>


<!-- get footer.php -->
<?php get_footer(); ?>