<?php // Comments Template


// check if post is password protected
if ( post_password_required() ) {
	echo '<section class="comments-area inner-content body-section">';
	echo '<p class="single-meta">'. esc_html__( 'Post is password protected. Please enter the password to show comments!', 'hyperx' ) .'</p>';
	echo '</section>';

	return;
}


if ( ! comments_open( $post->ID ) && ! have_comments() ) {
	$comments_empty = 'comments-empty';
} else {
	$comments_empty = '';
}

echo '<section class="comments-area-wrap inner-content body-section '. $comments_empty .'">';

if ( have_comments() ) {

	// get theme customizer data
	$comments_general = get_option( 'royal_comments_general' );
	$comments_counter = get_option( 'royal_comments_counter' );

	$get_comm_number = get_comments_number();
	$comments_number = '';

	if ( $get_comm_number == 0 ) {
		$comments_number = '<span>0 '. $comments_counter['singular_label'] .'</span>';
	} elseif ( $get_comm_number == 1 ) {
		$comments_number = '<span>1 '. $comments_counter['singular_label'] .'</span>';
	} else {
		$comments_number = '<span>'. $get_comm_number .' '. $comments_counter['plural_label'] .'</span>';
	}

	$html  = '<div class="comments-area">';
	$html .= '<h3 id="comments" class="comments-count">'. $comments_number .'</h3>';
	$html .= '<ul class="comments-wrap">'. wp_list_comments('callback=royal_comments&echo=0') .'</ul>';

	// comments pagination
	if ( get_comment_pages_count() > 1 && get_option('page_comments') ) {
		$html .= '<div class="comments-pagination clearfix">';
		$html .= '<span class="older-comments">'. esc_url( get_previous_comments_link( '<i class="fa fa-angle-left"></i> '. esc_html__( 'Older', 'hyperx' ) ) ) .'</span>';
		$html .= '<span class="newer-comments">'. esc_url( get_next_comments_link(esc_html__( 'Newer', 'hyperx' ).' <i class="fa fa-angle-right"></i>') ) .'</span>';
		$html .= '</div>';
	}

	if ( ! comments_open() ) {
		$html .= '<p class="comments-closed single-meta">'. esc_html($comments_general['closed_text']) .'</p>';
	}
	
	$html .= '</div>';

	echo ''. $html;
}

// get comments form
comment_form();

echo '</section>';