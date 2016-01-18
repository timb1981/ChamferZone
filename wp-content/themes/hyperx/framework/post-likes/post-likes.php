<?php // Post Like System 

// Enqueue scripts for like system
function royal_likes_scripts() {

	// register script
	wp_register_script( 'royal-post-likes', THEMEROOT .'/framework/post-likes/js/post-likes.js', array(), false, true );
	
	// enqueue script
	wp_enqueue_script('royal-post-likes');
	wp_localize_script( 'royal-post-likes', 'ajax_var', array(
		'url' 	=> esc_url( admin_url( 'admin-ajax.php' ) ),
		'nonce' => wp_create_nonce( 'ajax-nonce' )
	) );

}

add_action( 'wp_enqueue_scripts', 'royal_likes_scripts' );

// Save like data
function royal_post_like() {

	// define / verify nonce
	$nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) ) {
    	die ( 'Nope!' );
    }
	
	if ( isset( $_POST['royal_post_like'] ) ) {
	
		$post_id = $_POST['post_id'];
		$post_like_count = get_post_meta( $post_id, "_post_like_count", true );
		
		if ( is_user_logged_in() ) {
			global $current_user;
			$user_id 	 = $current_user->ID;
			$meta_POSTS  = ( is_multisite() ) ? get_user_option( "_liked_posts", $user_id  ) : get_user_meta( $user_id, "_liked_posts" );
			$meta_USERS  = get_post_meta( $post_id, "_user_liked" );
			$liked_POSTS = NULL;
			$liked_USERS = NULL;
			
			if ( count( $meta_POSTS ) != 0 ) {
				$liked_POSTS = ( is_multisite() ) ? $meta_POSTS : $meta_POSTS[0];
			}
			
			if ( ! is_array( $liked_POSTS ) ) {
				$liked_POSTS = array();
			}
				
			if ( count( $meta_USERS ) != 0 ) {
				$liked_USERS = $meta_USERS[0];
			}		

			if ( ! is_array( $liked_USERS ) ) {
				$liked_USERS = array();
			}	
				
			$liked_POSTS['post-'.$post_id] = $post_id;
			$liked_USERS['user-'.$user_id] = $user_id;
			$user_likes = count( $liked_POSTS );
	
			if ( ! AlreadyLiked( $post_id ) ) {
				update_post_meta( $post_id, "_user_liked", $liked_USERS );
				update_post_meta( $post_id, "_post_like_count", ++$post_like_count );
				if ( is_multisite() ) {
					update_user_option( $user_id, "_liked_posts", $liked_POSTS );
					update_user_option( $user_id, "_user_like_count", $user_likes );
				} else {
					update_user_meta( $user_id, "_liked_posts", $liked_POSTS );
					update_user_meta( $user_id, "_user_like_count", $user_likes );
				}
				echo esc_html($post_like_count);

			// unlike the post
			} else {
				$pid_key = array_search( $post_id, $liked_POSTS );
				$uid_key = array_search( $user_id, $liked_USERS );
				unset( $liked_POSTS[$pid_key] );
				unset( $liked_USERS[$uid_key] );
				$user_likes = count( $liked_POSTS );
				update_post_meta( $post_id, "_user_liked", $liked_USERS );
				update_post_meta($post_id, "_post_like_count", --$post_like_count );
				if ( is_multisite() ) {
					update_user_option( $user_id, "_liked_posts", $liked_POSTS );
					update_user_option( $user_id, "_user_like_count", $user_likes );
				} else {
					update_user_meta( $user_id, "_liked_posts", $liked_POSTS );
					update_user_meta( $user_id, "_user_like_count", $user_likes );
				}
				echo "already".$post_like_count;
				
			}

		// user is not logged in (anonymous)	
		} else {
			$ip 	   = $_SERVER['REMOTE_ADDR'];
			$meta_IPS  = get_post_meta( $post_id, "_user_IP" );
			$liked_IPS = NULL;
			
			if ( count( $meta_IPS ) != 0 ) {
				$liked_IPS = $meta_IPS[0];
			}
	
			if ( ! is_array( $liked_IPS ) ) {
				$liked_IPS = array();
			}
				
			if ( ! in_array( $ip, $liked_IPS ) ) {
				$liked_IPS['ip-'.$ip] = $ip;
			}
			
			if ( ! AlreadyLiked( $post_id ) ) {
				update_post_meta( $post_id, "_user_IP", $liked_IPS );
				update_post_meta( $post_id, "_post_like_count", ++$post_like_count );
				echo esc_html($post_like_count);
				
			} else {
				$ip_key = array_search( $ip, $liked_IPS );
				unset( $liked_IPS[$ip_key] );
				update_post_meta( $post_id, "_user_IP", $liked_IPS );
				update_post_meta( $post_id, "_post_like_count", --$post_like_count );
				echo "already" . $post_like_count;
				
			}
		}
	}
	
	exit;
}

add_action( 'wp_ajax_nopriv_royal-post-like', 'royal_post_like' );
add_action( 'wp_ajax_royal-post-like', 'royal_post_like' );

// Test if user already liked post
function AlreadyLiked( $post_id ) {
	if ( is_user_logged_in() ) {
		$user_id 	 = get_current_user_id();
		$meta_USERS  = get_post_meta( $post_id, "_user_liked" );
		$liked_USERS = "";
		
		if ( count( $meta_USERS ) != 0 ) {
			$liked_USERS = $meta_USERS[0];
		}
		
		if( ! is_array( $liked_USERS ) ){
			$liked_USERS = array();
		}
			
		if ( in_array( get_current_user_id(), $liked_USERS ) ) {
			return true;
		}

		return false;
		
	} else {
	
		$meta_IPS  = get_post_meta( $post_id, "_user_IP" );
		$ip 	   = $_SERVER["REMOTE_ADDR"];
		$liked_IPS = "";
		
		if ( count( $meta_IPS ) != 0 ) {
			$liked_IPS = $meta_IPS[0];
		}
		
		if ( ! is_array( $liked_IPS ) ) {
			$liked_IPS = array();
		}
		
		if ( in_array( $ip, $liked_IPS ) ) {
			return true;
		}
		return false;
	}
	
}

// Front end button
function royal_get_likes( $post_id, $icon ) {
	$like_count = get_post_meta( $post_id, "_post_like_count", true );

	if ( AlreadyLiked( $post_id ) ) {
		$title = esc_html__( 'Unlike', 'hyperx' );
		$heart = '<i class="fa fa-'. $icon .'"></i>';
	} else {
		$title = esc_html__( 'Like', 'hyperx' );
		$heart = '<i class="fa fa-'.  $icon .'"></i>';
	}
	
	$output  = '<a href="#" class="royal-post-like" data-post_id="'. esc_attr( $post_id ) .'" title="'. esc_attr( $title ) .'">';
	$output .= $heart .'&nbsp;<span class="rf-likes-count">'. $like_count .'</span></a>';

	return $output;
}