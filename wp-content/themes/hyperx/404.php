<?php // 404 Page

// get header.php
get_header();

// get data from theme customizer
$page_404 = get_option('royal_404_page');

$allowed_html = array(
    'iframe' => array(
        'src'                   => array(),
        'width'                 => array(),
        'height'                => array(),
        'frameborder'           => array(),
        'allowfullscreen'       => array(),
        'mozallowfullscreen'    => array(),
        'webkitallowfullscreen' => array()
    ),
    'a'		 => array( 'href' => array(), 'title' => array(), 'target' => array() ),
	'img'	 => array( 'src' => array(), 'alt' => array(), ),
	'p'		 => array(),
	'ul'	 => array(),
	'li'	 => array(),
	'strong' => array(),
	'em'	 => array(),
	'br'	 => array(),
);

?>

<section class="inner-content body-section center-text">

	<h2><?php echo wp_kses_post($page_404['text']); ?></h2>

	<div class="featured-media">
		<p><?php echo wp_kses($page_404['embed'], $allowed_html); ?></p>
	</div>

</section>


<!-- get footer.php -->
<?php get_footer(); ?>