<?php // Additional fields for creating new Posts, Pages & Portfolio items.

/*
***************************************************************
* #Enqueue Scripts & Styles
***************************************************************
*/

	function royal_admin_enqueue_scripts( $hook ) {
	    global $post;

	    // custom text labels in Wp Media Uploader - ready for translation
	    $royal_localize_uploader = array(
	    	'mediaTitle' 	=> esc_html__( 'Add Media', 'hyperx' ),
	    	'mediaButton' 	=> esc_html__( 'Add', 'hyperx' )
	    );

	    // register scripts & styles 
	    wp_register_style( 'royal-metabox-css', THEMEROOT .'/framework/metaboxes/css/metaboxes-ui.css' );
	    wp_register_script( 'royal-post-metabox-js', THEMEROOT .'/framework/metaboxes/js/post-metaboxes-ui.js', array(), false, true );
	    wp_register_script( 'royal-page-metabox-js', THEMEROOT .'/framework/metaboxes/js/page-metaboxes-ui.js', array(), false, true );

	    // register & localize script for media uploader
	    wp_register_script( 'royal-metabox-upload-js', THEMEROOT .'/framework/metaboxes/js/metabox-upload.js', array(), false, true );
	    wp_localize_script( 'royal-metabox-upload-js', 'royalUploader', $royal_localize_uploader );
	    wp_enqueue_script('royal-metabox-upload-js');

	    // enqueue scripts & styles
	    if ( $hook == 'post-new.php' || $hook == 'post.php' ) {

	    	wp_enqueue_style('royal-metabox-css');

	        if ( 'post' === $post->post_type || 'royal_portfolio' === $post->post_type ) {     
	            wp_enqueue_script('royal-post-metabox-js');
	        } elseif ( 'page' === $post->post_type ) {
	        	wp_enqueue_script('royal-page-metabox-js');
	        }

	    }
	}

	add_action( 'admin_enqueue_scripts', 'royal_admin_enqueue_scripts' );

	// func to check if current user is permited to save data - Gist by Tom Mcfarlin. Thanks to Tom :)
	function royal_user_can_save( $post_id, $nonce ) {

		$is_autosave 	= wp_is_post_autosave( $post_id );
		$is_revision 	= wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST[ $nonce ] ) && wp_verify_nonce( $_POST[ $nonce ], 'royal_nonce' ) );

		// Return true if the user is able to save - otherwise, false.
		return ! ( $is_autosave || $is_revision ) && $is_valid_nonce;
	}



/*
***************************************************************
* #Msonry Metro - Post Width
***************************************************************
*/

	// Add
	function royal_add_masonry_metro_meta_box() {
		add_meta_box(
			'royal_masonry_metro_meta_box',
			esc_html__( 'Masonry Metro Layout', 'hyperx' ),
			'royal_display_masonry_metro_meta_box',
			'post',
			'normal',
			'high'
		);

		add_meta_box(
			'royal_masonry_metro_meta_box',
			esc_html__( 'Masonry Metro Layout', 'hyperx' ),
			'royal_display_masonry_metro_meta_box',
			'royal_portfolio',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_masonry_metro_meta_box' );

	// Display
	function royal_display_masonry_metro_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'masonry_metro_nonce' );

		// get post meta data
		$rf_metro_post_width = get_post_meta( $post->ID, 'rf_metro_post_width', true );

		// detect which one is selected
		$select_1x = ( ( isset ( $rf_metro_post_width ) ) ? selected( $rf_metro_post_width, '1x', false ) : '' );
		$select_2x = ( ( isset ( $rf_metro_post_width ) ) ? selected( $rf_metro_post_width, '2x', false ) : '' );
		$select_3x = ( ( isset ( $rf_metro_post_width ) ) ? selected( $rf_metro_post_width, '3x', false ) : '' );

		$html  = '<label for="rf_metro_post_width" class="rf_mbx_left">'. esc_html__( 'Select Post Width: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<select id="rf_metro_post_width" name="rf_metro_post_width">';
			$html .= '<option value="1x" '. $select_1x .'>'. esc_html__( '1x Width', 'hyperx' ) .'</option>';
			$html .= '<option value="2x" '. $select_2x .'>'. esc_html__( '2x Width', 'hyperx' ) .'</option>';
			$html .= '<option value="3x" '. $select_3x .'>'. esc_html__( '3x Width', 'hyperx' ) .'</option>';
			$html .= '</select>';
		$html .= '</div>';
		echo ''. $html;
	}

	// Save/Update
	function royal_save_masonry_metro_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'masonry_metro_nonce' ) ) {
			if ( isset($_POST['rf_metro_post_width']) ) {
				update_post_meta( $post_id, 'rf_metro_post_width', $_POST['rf_metro_post_width'] );
			}
		}
	}

	add_action( 'save_post', 'royal_save_masonry_metro_meta_box' );



/*
***************************************************************
* #Post Formats
***************************************************************
*/


/* ----------------- Post Format: Standard ----------------- */
	// Add
	function royal_add_standard_post_meta_box() {
		add_meta_box(
			'royal_standard_post_meta_box',
			esc_html__( 'Post Format: Standard', 'hyperx' ),
			'royal_display_standard_post_meta_box',
			'post',
			'normal',
			'high'
		);

		add_meta_box(
			'royal_standard_post_meta_box',
			esc_html__( 'Post Format: Standard', 'hyperx' ),
			'royal_display_standard_post_meta_box',
			'royal_portfolio',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_standard_post_meta_box' );

	// Display
	function royal_display_standard_post_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'standard_post_nonce' );

		// get post meta data
		$rf_exc_featured_img = get_post_meta( $post->ID, 'rf_exc_featured_img', true );
		$checked = ( ( isset ( $rf_exc_featured_img ) ) ? checked( $rf_exc_featured_img, 'yes', false ) : '' );

		$html  = '<label for="rf_exc_featured_img" class="rf_mbx_left">'. esc_html__( 'Exclude Featured Image on Single Page', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="checkbox" name="rf_exc_featured_img" id="rf_exc_featured_img" value="yes" '. $checked .'/>';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_standard_post_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'standard_post_nonce' ) ) {
			if ( isset($_POST['rf_exc_featured_img']) ) {
				update_post_meta( $post_id, 'rf_exc_featured_img', 'yes' );
			} else {
				update_post_meta( $post_id, 'rf_exc_featured_img', '' );
			}
		}
	}

	add_action( 'save_post', 'royal_save_standard_post_meta_box' );


/* ----------------- Post Format: Audio ----------------- */
	// Add
	function royal_add_audio_post_meta_box() {
		add_meta_box(
			'royal_audio_post_meta_box',
			esc_html__( 'Post Format: Audio', 'hyperx' ),
			'royal_display_audio_post_meta_box',
			'post',
			'normal',
			'high'
		);

		add_meta_box(
			'royal_audio_post_meta_box',
			esc_html__( 'Post Format: Audio', 'hyperx' ),
			'royal_display_audio_post_meta_box',
			'royal_portfolio',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_audio_post_meta_box' );

	// Display
	function royal_display_audio_post_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'audio_post_nonce' );

		// get post meta data
		$rf_audio_type  	= get_post_meta( $post->ID, 'rf_audio_type', true );
		$rf_audio_embed 	= get_post_meta( $post->ID, 'rf_audio_embed', true );
		$rf_audio_self_mp3  = get_post_meta( $post->ID, 'rf_audio_self_mp3', true );
		$rf_audio_self_ogg  = get_post_meta( $post->ID, 'rf_audio_self_ogg', true );


		// detect which one is selected
		$select_embed 		= ( ( isset ( $rf_audio_type ) ) ? selected( $rf_audio_type, 'embed', false ) : '' );
		$select_self_hosted = ( ( isset ( $rf_audio_type ) ) ? selected( $rf_audio_type, 'self-hosted', false ) : '' );

		$html  = '<label for="rf_audio_type" class="rf_mbx_left">'. esc_html__( 'Choose Audio Type: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<select id="rf_audio_type" name="rf_audio_type" class="royal-audio-type-select">';
			$html .= '<option value="embed" '. $select_embed .'>'. esc_html__( 'Embed', 'hyperx' ) .'</option>';
			$html .= '<option value="self-hosted" '. $select_self_hosted .'>'. esc_html__( 'Self-hosted', 'hyperx' ) .'</option>';
			$html .= '</select>';
		$html .= '</div>';

		// audio embed
		$html .= '<div class="royal-audio-embed">';
			$html .= '<label for="rf_audio_embed" class="rf_mbx_left">'. esc_html__( 'Enter Audio Embed code: ', 'hyperx' ) .'</label>';
			$html .= '<div class="rf_mbx_right">';
				$html .= '<textarea type="text" name="rf_audio_embed" id="rf_audio_embed" class="widefat" rows="8">'. esc_textarea( $rf_audio_embed ) .'</textarea>';
			$html .= '</div>';
		$html .= '</div>';

		// audio self hosted - mp3
		$html .= '<div class="royal-audio-self-hosted">';
		$html .= '<label for="rf_audio_self_mp3" class="rf_mbx_left">'. esc_html__( 'Upload Self-hosted Audio (mp3): ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_audio_self_mp3" id="rf_audio_self_mp3" class="widefat" value="'. esc_url( $rf_audio_self_mp3 ) .'" />';
			$html .= '<input type="button" id="rf_audio_self_mp3_upload" class="royal-upload-btn button button-primary" value="'. esc_html__( 'Upload Audio', 'hyperx' ) .'">';
		$html .= '</div>';

		// audio self hosted - ogg
		$html .= '<label for="rf_audio_self_ogg" class="rf_mbx_left">'. esc_html__( 'Upload Self-hosted Audio (ogg): ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_audio_self_ogg" id="rf_audio_self_ogg" class="widefat" value="'. esc_url( $rf_audio_self_ogg ) .'" />';
			$html .= '<input type="button" id="rf_audio_self_ogg_upload" class="royal-upload-btn button button-primary" value="'. esc_html__( 'Upload Audio', 'hyperx' ) .'">';
		$html .= '</div>';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_audio_post_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'audio_post_nonce' ) ) {

			// audio type selected
			if ( isset($_POST['rf_audio_type']) ) {
				update_post_meta( $post_id, 'rf_audio_type', $_POST['rf_audio_type'] );
			}

			// audio embed
			if ( isset($_POST['rf_audio_embed']) ) {

				// allowed html for ifame embed
				$allowed_html = array(
					'iframe' => array(
						'src'			=> array(),
						'width'			=> array(),
						'height'		=> array(),
						'frameborder' 	=> array(),
						'scrolling'		=> array()
					)
				);

				$valid_rf_audio_embed = wp_kses( $_POST['rf_audio_embed'], $allowed_html );
				update_post_meta( $post_id, 'rf_audio_embed', $valid_rf_audio_embed );
			}

			// audio self hosted mp3
			if ( isset($_POST['rf_audio_self_mp3']) ) {
				$valid_rf_audio_self_mp3 = esc_url_raw( $_POST['rf_audio_self_mp3'] );
				update_post_meta( $post_id, 'rf_audio_self_mp3', $valid_rf_audio_self_mp3 );
			}

			// audio self hosted ogg
			if ( isset($_POST['rf_audio_self_ogg']) ) {
				$valid_rf_audio_self_ogg = esc_url_raw( $_POST['rf_audio_self_ogg'] );
				update_post_meta( $post_id, 'rf_audio_self_ogg', $valid_rf_audio_self_ogg );
			}

		}
	}

	add_action( 'save_post', 'royal_save_audio_post_meta_box' );


/* ----------------- Post Format: Video ----------------- */
	// Add
	function royal_add_video_post_meta_box() {
		add_meta_box(
			'royal_video_post_meta_box',
			esc_html__( 'Post Format: Video', 'hyperx' ),
			'royal_display_video_post_meta_box',
			'post',
			'normal',
			'high'
		);

		add_meta_box(
			'royal_video_post_meta_box',
			esc_html__( 'Post Format: Video', 'hyperx' ),
			'royal_display_video_post_meta_box',
			'royal_portfolio',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_video_post_meta_box' );

	// Display
	function royal_display_video_post_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'video_post_nonce' );

		// get post meta data
		$rf_video_type  	= get_post_meta( $post->ID, 'rf_video_type', true );
		$rf_video_embed 	= get_post_meta( $post->ID, 'rf_video_embed', true );
		$rf_video_self_mp4  = get_post_meta( $post->ID, 'rf_video_self_mp4', true );
		$rf_video_self_ogv  = get_post_meta( $post->ID, 'rf_video_self_ogv', true );


		// detect which one is selected
		$select_embed 		= ( ( isset ( $rf_video_type ) ) ? selected( $rf_video_type, 'embed', false ) : '' );
		$select_self_hosted = ( ( isset ( $rf_video_type ) ) ? selected( $rf_video_type, 'self-hosted', false ) : '' );

		$html  = '<label for="rf_video_type" class="rf_mbx_left">'. esc_html__( 'Choose Video Type: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<select id="rf_video_type" name="rf_video_type" class="royal-video-type-select">';
			$html .= '<option value="embed" '. $select_embed .'>'. esc_html__( 'Embed', 'hyperx' ) .'</option>';
			$html .= '<option value="self-hosted" '. $select_self_hosted .'>'. esc_html__( 'Self-hosted', 'hyperx' ) .'</option>';
			$html .= '</select>';
		$html .= '</div>';

		$html .= '<div class="royal-video-embed">';
		$html .= '<label for="rf_video_embed" class="rf_mbx_left">'. esc_html__( 'Enter Video Embed code: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<textarea type="text" name="rf_video_embed" id="rf_video_embed" class="widefat" rows="8">'. esc_textarea( $rf_video_embed ) .'</textarea>';
		$html .= '</div>';
		$html .= '</div>';

		// self-hosted .mp4
		$html .= '<div class="royal-video-self-hosted">';
		$html .= '<label for="rf_video_self_mp4" class="rf_mbx_left">'. esc_html__( 'Upload Self-hosted Video (mp4): ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_video_self_mp4" id="rf_video_self_mp4" class="widefat" value="'. esc_url( $rf_video_self_mp4 ) .'" />';
			$html .= '<input type="button" id="rf_video_self_mp4_upload" class="royal-upload-btn button button-primary" value="'. esc_html__( 'Upload video', 'hyperx' ) .'">';
		$html .= '</div>';
		$html .= '<br/><br/><br/>';

		// self-hosted .ogv
		$html .= '<label for="rf_video_self_ogv" class="rf_mbx_left">'. esc_html__( 'Upload Self-hosted Video (ogv): ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_video_self_ogv" id="rf_video_self_ogv" class="widefat" value="'. esc_url( $rf_video_self_ogv ) .'" />';
			$html .= '<input type="button" id="rf_video_self_ogv_upload" class="royal-upload-btn button button-primary" value="'. esc_html__( 'Upload video', 'hyperx' ) .'">';
		$html .= '</div>';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_video_post_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'video_post_nonce' ) ) {

			// video type selected
			if ( isset($_POST['rf_video_type']) ) {
				update_post_meta( $post_id, 'rf_video_type', $_POST['rf_video_type'] );
			}

			// video embed
			if ( isset($_POST['rf_video_embed']) ) {

				// allowed html for ifame embed
				$allowed_html = array(
				    'iframe' => array(
				        'src'                   => array(),
				        'width'                 => array(),
				        'height'                => array(),
				        'frameborder'           => array(),
				        'allowfullscreen'       => array(),
				        'mozallowfullscreen'    => array(),
				        'webkitallowfullscreen' => array()
				    )
				);

				$valid_rf_video_embed = wp_kses( $_POST['rf_video_embed'], $allowed_html );
				update_post_meta( $post_id, 'rf_video_embed', $valid_rf_video_embed );
			}

			// video self hosted .mp4
			if ( isset($_POST['rf_video_self_mp4']) ) {
				$valid_rf_video_self_mp4 = esc_url_raw( $_POST['rf_video_self_mp4'] );
				update_post_meta( $post_id, 'rf_video_self_mp4', $valid_rf_video_self_mp4 );
			}

			// video self hosted .ogv
			if ( isset($_POST['rf_video_self_ogv']) ) {
				$valid_rf_video_self_ogv = esc_url_raw( $_POST['rf_video_self_ogv'] );
				update_post_meta( $post_id, 'rf_video_self_ogv', $valid_rf_video_self_ogv );
			}

		}
	}

	add_action( 'save_post', 'royal_save_video_post_meta_box' );


/* ----------------- Post Format: Gallery ----------------- */
	// Add
	function royal_add_gallery_post_meta_box() {
		add_meta_box(
			'royal_gallery_post_meta_box',
			esc_html__( 'Post Format: Gallery', 'hyperx' ),
			'royal_display_gallery_post_meta_box',
			'post',
			'normal',
			'high'
		);

		add_meta_box(
			'royal_gallery_post_meta_box',
			esc_html__( 'Post Format: Gallery', 'hyperx' ),
			'royal_display_gallery_post_meta_box',
			'royal_portfolio',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_gallery_post_meta_box' );

	// Display
	function royal_display_gallery_post_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'gallery_post_nonce' );

		// get post meta data
		$rf_gallery_type 	 = get_post_meta( $post->ID, 'rf_gallery_type', true );
		$rf_gallery_img_ids  = get_post_meta( $post->ID, 'rf_gallery_img_ids', true );
		$rf_gallery_imgs_src = get_post_meta( $post->ID, 'rf_gallery_imgs_src', true );

		// detect which one is selected
		$select_slideshow 	= ( ( isset ( $rf_gallery_type ) ) ? selected( $rf_gallery_type, 'slideshow', false ) : '' );
		$select_stacked		= ( ( isset ( $rf_gallery_type ) ) ? selected( $rf_gallery_type, 'stacked', false ) : '' );

		// gallery image ids
		$html  = '<input type="text" name="rf_gallery_img_ids" id="rf_gallery_img_ids" class="widefat" value="'. esc_attr( $rf_gallery_img_ids ) .'" />';
		
		// gallery image sources
		$html .= '<input type="text" name="rf_gallery_imgs_src" id="rf_gallery_imgs_src" class="widefat" value="'. esc_attr( $rf_gallery_imgs_src ) .'" />';
		
		// upload gallery image button
		$html .= '<input type="button" id="rf_gallery_imgs_upload" class="royal-upload-btn button button-primary" value="'. esc_html__( 'Add Image', 'hyperx' ) .'" />';

		// gallery type
		$html .= '<label for="rf_gallery_type">'. esc_html__( 'Select Gallery Type: ', 'hyperx' ) .'</label>';

		$html .= '<select id="rf_gallery_type" name="rf_gallery_type" class="royal-video-type-select">';
		$html .= '<option value="slideshow" '. $select_slideshow .'>'. esc_html__( 'Slideshow', 'hyperx' ) .'</option>';
		$html .= '<option value="stacked" '. $select_stacked .'>'. esc_html__( 'Stacked', 'hyperx' ) .'</option>';
		$html .= '</select>';
		
		// gallery images wrapper block
		$html .= '<div class="gallery-wrap"><ul id="sortable"></ul></div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_gallery_post_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'gallery_post_nonce' ) ) {

			// gallery type
			if ( isset($_POST['rf_gallery_type']) ) {
				update_post_meta( $post_id, 'rf_gallery_type', $_POST['rf_gallery_type'] );
			}

			// gallery images id
			if ( isset($_POST['rf_gallery_img_ids']) ) {
				$valid_rf_gallery_img_ids = wp_filter_nohtml_kses( $_POST['rf_gallery_img_ids'] );
				update_post_meta( $post_id, 'rf_gallery_img_ids', $valid_rf_gallery_img_ids );
			}

			// gallery images src
			if ( isset($_POST['rf_gallery_imgs_src']) ) {
				$valid_rf_gallery_imgs_src = esc_url_raw( $_POST['rf_gallery_imgs_src'] );
				update_post_meta( $post_id, 'rf_gallery_imgs_src', $valid_rf_gallery_imgs_src );
			}

		}
	}

	add_action( 'save_post', 'royal_save_gallery_post_meta_box' );


/* ----------------- Post Format: Link ----------------- */
	// Add
	function royal_add_link_post_meta_box() {
		add_meta_box(
			'royal_link_post_meta_box',
			esc_html__( 'Post Format: Link', 'hyperx' ),
			'royal_display_link_post_meta_box',
			'post',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_link_post_meta_box' );

	// Display
	function royal_display_link_post_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'link_post_nonce' );

		// get post meta data
		$rf_link_description = get_post_meta( $post->ID, 'rf_link_description', true );
		$rf_link_title 		 = get_post_meta( $post->ID, 'rf_link_title', true );
		$rf_link_url 		 = get_post_meta( $post->ID, 'rf_link_url', true );


		$html  = '<label for="rf_link_description" class="rf_mbx_left">'. esc_html__( 'Enter Link Descritpion: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_link_description" id="rf_link_description" class="widefat" value="'. esc_attr( $rf_link_description ) .'" />';
		$html .= '</div>';

		$html .= '<label for="rf_link_title" class="rf_mbx_left">'. esc_html__( 'Enter Link Title: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_link_title" id="rf_link_title" class="widefat" value="'. esc_attr( $rf_link_title ) .'" />';
		$html .= '</div>';

		$html .= '<label for="rf_link_url" class="rf_mbx_left">'. esc_html__( 'Enter Actual Link (URL): ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_link_url" id="rf_link_url" class="widefat" value="'. esc_url( $rf_link_url ) .'" />';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_link_post_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'link_post_nonce' ) ) {

			// link description
			if ( isset($_POST['rf_link_description']) ) {
				$valid_rf_link_description = wp_filter_nohtml_kses( $_POST['rf_link_description'] );
				update_post_meta( $post_id, 'rf_link_description', $valid_rf_link_description );
			}

			// link title
			if ( isset($_POST['rf_link_title']) ) {
				$valid_rf_link_title = wp_filter_nohtml_kses( $_POST['rf_link_title'] );
				update_post_meta( $post_id, 'rf_link_title', $valid_rf_link_title );
			}

			// link url
			if ( isset($_POST['rf_link_title']) ) {
				$valid_rf_link_url = esc_url_raw( $_POST['rf_link_url'] );
				update_post_meta( $post_id, 'rf_link_url', $valid_rf_link_url );
			}

		}
	}

	add_action( 'save_post', 'royal_save_link_post_meta_box' );


/* ----------------- Post Format: Quote ----------------- */
	// Add
	function royal_add_quote_post_meta_box() {
		add_meta_box(
			'royal_quote_post_meta_box',
			esc_html__( 'Post Format: Quote', 'hyperx' ),
			'royal_display_quote_post_meta_box',
			'post',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_quote_post_meta_box' );

	// Display
	function royal_display_quote_post_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'quote_post_nonce' );

		// get post meta data
		$rf_quote_content = get_post_meta( $post->ID, 'rf_quote_content', true );
		$rf_quote_title	  = get_post_meta( $post->ID, 'rf_quote_title', true );

		$html  = '<label for="rf_quote_content" class="rf_mbx_left">'. esc_html__( 'Enter Quote: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_quote_content" id="rf_quote_content" class="widefat" value="'. esc_attr( $rf_quote_content ) .'" />';
		$html .= '</div>';
		
		$html .= '<label for="rf_quote_title" class="rf_mbx_left">'. esc_html__( 'Enter Quote Author: ', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_quote_title" id="rf_quote_title" class="widefat" value="'. esc_attr( $rf_quote_title ) .'" />';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_quote_post_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, 'quote_post_nonce' ) ) {

			// quote content
			if ( isset($_POST['rf_quote_content']) ) {
				$valid_rf_quote_content = wp_filter_nohtml_kses( $_POST['rf_quote_content'] );
				update_post_meta( $post_id, 'rf_quote_content', $valid_rf_quote_content );
			}

			// quote title
			if ( isset($_POST['rf_quote_title']) ) {
				$valid_rf_quote_title = wp_filter_nohtml_kses( $_POST['rf_quote_title'] );
				update_post_meta( $post_id, 'rf_quote_title', $valid_rf_quote_title );
			}

		}
	}

	add_action( 'save_post', 'royal_save_quote_post_meta_box' );



/*
***************************************************************
* #Portfolio Items
***************************************************************
*/


/* ----------------- Portfolio Single Options ----------------- */
	// Add
	function royal_add_portfolio_item_options() {
		add_meta_box(
			'royal_portfolio_item_options',
			esc_html__( 'Portfolio Post Options', 'hyperx' ),
			'royal_display_portfolio_item_options',
			'royal_portfolio',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_portfolio_item_options' );

	// Display
	function royal_display_portfolio_item_options( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'portfolio_item_nonce' );

		// get post meta data
		$rf_project_desc_title 		= get_post_meta( $post->ID, 'rf_project_desc_title', true );
		$rf_project_description 	= get_post_meta( $post->ID, 'rf_project_description', true );
		$rf_project_details_title 	= get_post_meta( $post->ID, 'rf_project_details_title', true );
		$rf_project_client 			= get_post_meta( $post->ID, 'rf_project_client', true );
		$rf_project_url 			= get_post_meta( $post->ID, 'rf_project_url', true );
		$rf_testimonial_author 		= get_post_meta( $post->ID, 'rf_testimonial_author', true );
		$rf_testimonial_content 	= get_post_meta( $post->ID, 'rf_testimonial_content', true );
		$rf_back_link 				= get_post_meta( $post->ID, 'rf_back_link', true );
		$rf_enable_project_info		= get_post_meta( $post->ID, 'rf_enable_project_info', true );
		$rf_project_info_sticky		= get_post_meta( $post->ID, 'rf_project_info_sticky', true );
		$rf_project_info_offset		= get_post_meta( $post->ID, 'rf_project_info_offset', true );


		// get all pages
		$all_pages = get_pages();

		// "back link" to portfolio
		$html  = '<label for="rf_back_link" class="rf_mbx_left">'. esc_html__( '"Back Link" to Portfolio Page: ', 'hyperx' ) .'&nbsp;&nbsp;</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<select id="rf_back_link" name="rf_back_link">';
			if ( ! empty($all_pages) ) {
				foreach ( $all_pages as $key => $value ) {
					$selected = selected( $rf_back_link, $value->ID, false );
					$html .= '<option value="'. $value->ID .'" '. $selected .'>'. $value->post_title .'</option>';
				}
			}
			$html .= '</select>';
		$html .= '</div>';

		// show project info
		$html .= '<label for="rf_enable_project_info" class="rf_mbx_left">'. esc_html__( 'Show Project Info', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="checkbox" name="rf_enable_project_info" id="rf_enable_project_info" value="yes" '. checked( $rf_enable_project_info, 'yes', false ) .'/>';
		$html .= '</div>';

		// sticky project info
		$html .= '<label for="rf_project_info_sticky" class="rf_mbx_left">'. esc_html__( 'Sticky Project Info', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="checkbox" name="rf_project_info_sticky" id="rf_project_info_sticky" value="yes" '. checked( $rf_project_info_sticky, 'yes', false ) .'/>';
		$html .= '</div>';

		// project info offset
		$html .= '<label for="rf_project_info_offset" class="rf_mbx_left">'. esc_html__( 'Project Info Offset:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
		$html .= '<input type="text" id="rf_project_info_offset" name="rf_project_info_offset" class="widefat" value="'. esc_attr($rf_project_info_offset) .'" placeholder="ex: 50">';
		$html .= '</div>';

		// project description title
		$html .= '<label for="rf_project_desc_title" class="rf_mbx_left">'. esc_html__( 'Project Description Title:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
		$html .= '<input type="text" id="rf_project_desc_title" name="rf_project_desc_title" class="widefat" value="'. esc_attr($rf_project_desc_title) .'" >';
		$html .= '</div>';

		// project description
		$html .= '<label for="rf_project_description" class="rf_mbx_left">'. esc_html__( 'Project Description:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<span class="allowed-html">'. esc_html__( 'Allowed HTML: ', 'hyperx' ) . esc_html('<p> <br> <strong> <em> <a> <img>') .'</span>';
			$html .= '<textarea id="rf_project_description" name="rf_project_description" class="widefat" rows="6">'. esc_textarea( $rf_project_description ) .'</textarea>';
		$html .= '</div>';

		// project details title
		$html .= '<label for="rf_project_details_title" class="rf_mbx_left">'. esc_html__( 'Project Details Title:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" id="rf_project_details_title" name="rf_project_details_title" class="widefat" value="'. esc_attr($rf_project_details_title) .'" >';
		$html .= '</div>';

		// project client
		$html .= '<label for="rf_project_client" class="rf_mbx_left">'. esc_html__( 'Project Client:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" id="rf_project_client" name="rf_project_client" class="widefat" value="'. esc_attr($rf_project_client) .'" >';
		$html .= '</div>';

		// project url
		$html .= '<label for="rf_project_url" class="rf_mbx_left">'. esc_html__( 'Project Link:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" id="rf_project_url" name="rf_project_url" class="widefat" value="'. esc_attr($rf_project_url) .'" >';
		$html .= '</div>';

		// testimonial author
		$html .= '<label for="rf_testimonial_author" class="rf_mbx_left">'. esc_html__( 'Testimonial Author:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<span class="allowed-html">'. esc_html__( 'Allowed HTML: ', 'hyperx' ) . esc_html('<strong> <em> <a>') .'</span>';
			$html .= '<input type="text" id="rf_testimonial_author" name="rf_testimonial_author" class="widefat" value="'. esc_attr($rf_testimonial_author) .'" >';
		$html .= '</div>';

		// testimonial content
		$html .= '<label for="rf_testimonial_content" class="rf_mbx_left">'. esc_html__( 'Testimonial Content:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<span class="allowed-html">'. esc_html__( 'Allowed HTML: ', 'hyperx' ) . esc_html('<strong> <em> <a>') .'</span>';
			$html .= '<textarea id="rf_testimonial_content" name="rf_testimonial_content" class="widefat" rows="6">'. $rf_testimonial_content .'</textarea>';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_portfolio_item_options( $post_id ) {
		if ( royal_user_can_save( $post_id, 'portfolio_item_nonce' ) ) {

			if ( isset($_POST['rf_back_link']) ) {
				update_post_meta( $post_id, 'rf_back_link', $_POST['rf_back_link'] );
			}

			if ( isset($_POST['rf_enable_project_info']) ) {
				update_post_meta( $post_id, 'rf_enable_project_info', 'yes' );
			} else {
				update_post_meta( $post_id, 'rf_enable_project_info', 'no' );
			}

			if ( isset($_POST['rf_project_info_sticky']) ) {
				update_post_meta( $post_id, 'rf_project_info_sticky', 'yes' );
			} else {
				update_post_meta( $post_id, 'rf_project_info_sticky', 'no' );
			}

			// project info offset
			if ( isset($_POST['rf_project_info_offset']) ) {
				update_post_meta( $post_id, 'rf_project_info_offset', intval($_POST['rf_project_info_offset']) );
			}

			// allowed html for project description
			$description_allowed_html = array(
				'a'		 => array( 'href' => array(), 'title' => array(), 'target' => array() ),
				'img'	 => array( 'src' => array(), 'alt' => array(), ),
				'p'		 => array(),
				'ul'	 => array(),
				'li'	 => array(),
				'strong' => array(),
				'em'	 => array(),
				'br'	 => array(),
			);

			// allowed html for testimonials
			$testimonial_allowed_html = array(
				'a' 	 => array( 'href' => array(), 'title' => array(), 'target' => array() ),
				'strong' => array(),
				'em' 	 => array()
			);

			// project description title
			if ( isset($_POST['rf_project_desc_title']) ) {
				$valid_rf_project_desc_title = wp_filter_nohtml_kses( $_POST['rf_project_desc_title'] );
				update_post_meta( $post_id, 'rf_project_desc_title', $valid_rf_project_desc_title );
			}

			// project description
			if ( isset($_POST['rf_project_description']) ) {
				$valid_rf_project_description = wp_kses( $_POST['rf_project_description'], $description_allowed_html );
				update_post_meta( $post_id, 'rf_project_description', $valid_rf_project_description );
			}

			// project details title
			if ( isset($_POST['rf_project_details_title']) ) {
				$valid_rf_project_details_title = wp_filter_nohtml_kses( $_POST['rf_project_details_title'] );
				update_post_meta( $post_id, 'rf_project_details_title', $valid_rf_project_details_title );
			}

			// project client
			if ( isset($_POST['rf_project_client']) ) {
				$valid_rf_project_client = wp_filter_nohtml_kses( $_POST['rf_project_client'] );
				update_post_meta( $post_id, 'rf_project_client', $valid_rf_project_client );
			}

			// project url
			if ( isset($_POST['rf_project_url']) ) {
				$valid_rf_project_url = esc_url_raw( $_POST['rf_project_url'] );
				update_post_meta( $post_id, 'rf_project_url', $valid_rf_project_url );
			}

			// testimonial author
			if ( isset($_POST['rf_testimonial_author']) ) {
				$valid_rf_testimonial_author = wp_kses( $_POST['rf_testimonial_author'], $testimonial_allowed_html );
				update_post_meta( $post_id, 'rf_testimonial_author', $valid_rf_testimonial_author );
			}

			// testimonial content
			if ( isset($_POST['rf_testimonial_content']) ) {
				$valid_rf_testimonial_content = wp_kses( $_POST['rf_testimonial_content'], $testimonial_allowed_html );
				update_post_meta( $post_id, 'rf_testimonial_content', $valid_rf_testimonial_content );
			}

		}
	}

	add_action( 'save_post', 'royal_save_portfolio_item_options' );


/* ----------------- 2nd Featured Image ----------------- */
	// Add
	function royal_add_2nd_featured_img_meta_box() {
		add_meta_box(
			'royal_2nd_featured_img_meta_box',
			esc_html__( '2nd Featured Image', 'hyperx' ),
			'royal_display_2nd_featured_img_meta_box',
			'royal_portfolio',
			'side',
			'low'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_2nd_featured_img_meta_box' );

	// Display
	function royal_display_2nd_featured_img_meta_box( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', '2nd_featured_img_nonce' );

		// get post meta data
		$second_featured_img_id = get_post_meta( $post->ID, 'second_featured_img_id', true );
		
		// 2nd featured image image source
		$html  = '<input type="text" name="second_featured_img_id" id="second_featured_img_id" class="widefat" value="'. esc_attr( $second_featured_img_id ) .'" />';
		
		// 2nd featured image images wrapper block
		$html .= '<div id="wrap-2nd-featured-img">'. wp_get_attachment_image( $second_featured_img_id, 'full' ) .'</div>';
		$html .= '<a href="#" id="set-2nd-thumbnail" title="Set 2nd Featured Image">Set 2nd Featured Image</a>';
		$html .= '<a href="#" id="remove-2nd-thumbnail" title="Remove 2nd Featured Image">Remove 2nd Featured Image</a>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_2nd_featured_img_meta_box( $post_id ) {
		if ( royal_user_can_save( $post_id, '2nd_featured_img_nonce' ) ) {

			// 2nd featured image images src
			if ( isset($_POST['second_featured_img_id']) ) {
				update_post_meta( $post_id, 'second_featured_img_id', $_POST['second_featured_img_id'] );
			}

		}
	}

	add_action( 'save_post', 'royal_save_2nd_featured_img_meta_box' );



/*
***************************************************************
* #Page Templates
***************************************************************
*/

/* ----------------- Revolution Slider ----------------- */
	
	// load plugin.php
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// check if revslider is activated
	if ( is_plugin_active( 'revslider/revslider.php') ) {
		add_action( 'add_meta_boxes', 'royal_add_revslider_metabox' );
	}

	// Add
	function royal_add_revslider_metabox() {
		add_meta_box(
			'royal_revslider_metabox',
			esc_html__( 'Add Revolution Slider', 'hyperx' ),
			'royal_display_revslider_metabox',
			'page',
			'normal',
			'low'
		);

		add_meta_box(
			'royal_revslider_metabox',
			esc_html__( 'Add Revolution Slider', 'hyperx' ),
			'royal_display_revslider_metabox',
			'post',
			'normal',
			'low'
		);

		add_meta_box(
			'royal_revslider_metabox',
			esc_html__( 'Add Revolution Slider', 'hyperx' ),
			'royal_display_revslider_metabox',
			'royal_portfolio',
			'normal',
			'low'
		);
	}

	// Display
	function royal_display_revslider_metabox( $post ) {

		if (class_exists('RevSlider')) {

		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'revslider_nonce' );

		// get post meta data
		$rf_revslider_select 	= get_post_meta( $post->ID, 'rf_revslider_select', true );
		$rf_revslider_shortcode = get_post_meta( $post->ID, 'rf_revslider_shortcode', true );

		// title
		$html  = '<label for="rf_revslider_select" class="rf_mbx_left">'. esc_html__( 'Select Slider: ', 'hyperx' ) .'&nbsp;&nbsp;&nbsp;</label>';

		$html .= '<div class="rf_mbx_right">';

			$html .= '<select name="rf_revslider_select" id="rf_revslider_select" style="font-size:13px;">';

			$slider = new RevSlider();
			$revolution_sliders = $slider->getArrSliders();

			// remove slider
			$select_none = '';
			if ( trim($rf_revslider_shortcode) === '' ) {
				$select_none = 'selected=selected';
			}

			$html .= '<option value="none" '. esc_html($select_none) .'>None</option>';

			foreach ( $revolution_sliders as $revolution_slider ) {

			   $selected = '';
			   $alias = $revolution_slider->getAlias();
			   $title = $revolution_slider->getTitle();

			   if ( $alias === $rf_revslider_select ) {
			   		$selected = 'selected=selected';
			   }

			   $html .= '<option value="'. esc_attr($alias) .'" '. $selected .'>'. esc_html($title) .'</option>';

			}

			$html .= '</select>';

			$html .= '<br><br><input type="text" name="rf_revslider_shortcode" id="rf_revslider_shortcode" class="widefat" value="'. esc_attr( $rf_revslider_shortcode ) .'" />';
			
		$html .= '</div>';


		echo ''. $html;

		}
	}

	// Save/Update
	function royal_save_revslider_metabox( $post_id ) {
		if ( royal_user_can_save( $post_id, 'revslider_nonce' ) ) {

			// Slider Select
			if ( isset($_POST['rf_revslider_shortcode']) ) {
				update_post_meta( $post_id, 'rf_revslider_shortcode', $_POST['rf_revslider_shortcode'] );
			}

			// Slider Shortcode
			if ( isset($_POST['rf_revslider_select']) ) {
				update_post_meta( $post_id, 'rf_revslider_select', $_POST['rf_revslider_select'] );
			}

		}
	}

	add_action( 'save_post', 'royal_save_revslider_metabox' );


/* ----------------- Portfolio Page ----------------- */

	// Add
	function royal_add_portfolio_page_options() {
		add_meta_box(
			'royal_portfolio_page_options',
			esc_html__( 'Page Template: Portfolio', 'hyperx' ),
			'royal_display_portfolio_page_options',
			'page',
			'normal',
			'high'
		);
	}

	// check if portfolio plugin has been activated
	if ( is_plugin_active( 'royal-core/royal-core.php') ) {
		add_action( 'add_meta_boxes', 'royal_add_portfolio_page_options' );
	}	

	// Display
	function royal_display_portfolio_page_options( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'portfolio_page_nonce' );

		// portfolio categories
		$portfolio_cats = get_terms( 'royal_portfolio_cats', array( 'hide_empty' => false) );
		$checked_cats 	= array();

		foreach ( $portfolio_cats as $key => $value ) {
			$cat_id = 'cat-'.  $value->term_id;
			$checked_cats[] = get_post_meta( $post->ID, $cat_id, true );
		}

		// get post meta data
		$rf_portfolio_items_from = get_post_meta( $post->ID, 'rf_portfolio_items_from', true );

		// detect which one is selected
		$select_all		= ( ( isset ( $rf_portfolio_items_from ) ) ? selected( $rf_portfolio_items_from, 'all', false ) : '' );
		$select_custom  = ( ( isset ( $rf_portfolio_items_from ) ) ? selected( $rf_portfolio_items_from, 'custom', false ) : '' );

		$html  = '<label for="rf_portfolio_items_from" class="rf_mbx_left">'. esc_html__( 'Display Portfolio Posts From:', 'hyperx' ) .'</label>';
		
		$html .= '<div class="rf_mbx_right">';
			$html .= '<select id="rf_portfolio_items_from" name="rf_portfolio_items_from" class="folio-items-from">';
			$html .= '<option value="all" '. $select_all .'>'. esc_html__( 'All Categories', 'hyperx' ) .'</option>';
			$html .= '<option value="custom" '. $select_custom .'>'. esc_html__( 'Custom Categories', 'hyperx' ) .'</option>';
			$html .= '</select>';

			foreach ( $portfolio_cats as $key => $value ) {

				// set chechbox values which will be used next in the loop
				$checkbox_value = urldecode($value->slug) .','. $value->name;

				// detect which one is selected/checked
				$checkbox_checked = ( isset( $checked_cats[$key] ) ) ? checked( $checked_cats[$key], $checkbox_value, false ) : '';

				$html .= '<div class="custom-folio-cats">';

				if ( $value->count !== '0' ) {
					$html .= '<h4>';
					$html .= '<label for="cat-'. esc_attr($value->term_id) .'">';
					$html .= '<input type="checkbox" name="cat-'. esc_attr($value->term_id) .'" id="cat-'. esc_attr($value->term_id) .'" value="'. esc_attr($checkbox_value) .'" '. esc_attr($checkbox_checked) .'> ';
					$html .= esc_html($value->name);
					$html .= '</label>';
					$html .= '</h4>';
				}

				$html .= '</div>';

			}
		$html .= '</div>';

		echo ''. $html;

	}

	// Save/Update
	function royal_save_portfolio_page_options( $post_id ) {

		// portfolio categories
		$portfolio_cats = get_terms('royal_portfolio_cats');

		if ( royal_user_can_save( $post_id, 'portfolio_page_nonce' ) ) {

			// select portfolio items from 
			if ( isset($_POST['rf_portfolio_items_from']) ) {
				update_post_meta( $post_id, 'rf_portfolio_items_from', $_POST['rf_portfolio_items_from'] );
			}

			// custom portfolio categories
			foreach ( $portfolio_cats as $key => $value ) {
				$cat_id = 'cat-'. $value->term_id;
				if ( isset($_POST[ $cat_id ]) ) {
					update_post_meta( $post_id, $cat_id, $_POST[ $cat_id ] );
				} else {
					update_post_meta( $post_id, $cat_id, '' );
				}
			}

		}

	}

	add_action( 'save_post', 'royal_save_portfolio_page_options' );


/* ----------------- Default Page ----------------- */
	// Add
	function royal_add_default_page_options() {
		add_meta_box(
			'royal_default_page_options',
			esc_html__( 'Page Template: Default', 'hyperx' ),
			'royal_display_default_page_options',
			'page',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_default_page_options' );

	// Display
	function royal_display_default_page_options( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'default_page_nonce' );

		// get post meta data
		$rf_def_page_paddings 	= get_post_meta( $post->ID, 'rf_def_page_paddings', true );
		$rf_def_page_margins 	= get_post_meta( $post->ID, 'rf_def_page_margins', true );
		$rf_def_page_full_width = get_post_meta( $post->ID, 'rf_def_page_full_width', true );
		$checked_paddings 		= ( ( isset ( $rf_def_page_paddings ) ) ? checked( $rf_def_page_paddings, 'yes', false ) : '' );
		$checked_margins 		= ( ( isset ( $rf_def_page_margins ) ) ? checked( $rf_def_page_margins, 'yes', false ) : '' );
		$checked_full_width 	= ( ( isset ( $rf_def_page_full_width ) ) ? checked( $rf_def_page_full_width, 'yes', false ) : '' );

		// get post meta data
		$html  = '<label for="rf_def_page_paddings" class="rf_mbx_left">'. esc_html__( 'Disable Current Page Paddings', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="checkbox" name="rf_def_page_paddings" id="rf_def_page_paddings" value="yes" '. $checked_paddings .'/> ';
		$html .= '</div>';

		$html .= '<label for="rf_def_page_margins" class="rf_mbx_left">'. esc_html__( 'Disable Current Page Margins', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="checkbox" name="rf_def_page_margins" id="rf_def_page_margins" value="yes" '. $checked_margins .'/> ';
		$html .= '</div>';

		$html .= '<label for="rf_def_page_full_width" class="rf_mbx_left">'. esc_html__( 'Make Current Page Full Width', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="checkbox" name="rf_def_page_full_width" id="rf_def_page_full_width" value="yes" '. $checked_full_width .'/> ';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_default_page_options( $post_id ) {
		if ( royal_user_can_save( $post_id, 'default_page_nonce' ) ) {
			// disable paddings
			if ( isset($_POST['rf_def_page_paddings']) ) {
				update_post_meta( $post_id, 'rf_def_page_paddings', 'yes' );
			} else {
				update_post_meta( $post_id, 'rf_def_page_paddings', '' );
			}

			// disable margins
			if ( isset($_POST['rf_def_page_margins']) ) {
				update_post_meta( $post_id, 'rf_def_page_margins', 'yes' );
			} else {
				update_post_meta( $post_id, 'rf_def_page_margins', '' );
			}

			// disable full width
			if ( isset($_POST['rf_def_page_full_width']) ) {
				update_post_meta( $post_id, 'rf_def_page_full_width', 'yes' );
			} else {
				update_post_meta( $post_id, 'rf_def_page_full_width', '' );
			}
		}
	}

	add_action( 'save_post', 'royal_save_default_page_options' );


/* ----------------- Contact Page ----------------- */

	// Add
	function royal_add_contact_page_options() {
		add_meta_box(
			'royal_contact_page_options',
			esc_html__( 'Page Template: Contact', 'hyperx' ),
			'royal_display_contact_page_options',
			'page',
			'normal',
			'high'
		);
	}

	add_action( 'add_meta_boxes', 'royal_add_contact_page_options' );

	// Display
	function royal_display_contact_page_options( $post ) {
		// Security check - define nonce field
		wp_nonce_field( 'royal_nonce', 'contact_page_nonce' );

		// get post meta data
		$rf_cont_form_title  	= get_post_meta( $post->ID, 'rf_cont_form_title', true );
		$rf_cont_info_title 	= get_post_meta( $post->ID, 'rf_cont_info_title', true );
		$rf_cont_info_field_1   = get_post_meta( $post->ID, 'rf_cont_info_field_1', true );
		$rf_cont_info_field_2   = get_post_meta( $post->ID, 'rf_cont_info_field_2', true );
		$rf_cont_info_field_3   = get_post_meta( $post->ID, 'rf_cont_info_field_3', true );
		$rf_cont_info_field_4   = get_post_meta( $post->ID, 'rf_cont_info_field_4', true );
		$rf_cont_info_field_5   = get_post_meta( $post->ID, 'rf_cont_info_field_5', true );

		$html  = '<span class="allowed-html">'. esc_html__( 'Allowed HTML for all fields below: ', 'hyperx' ) . esc_html('<strong> <em> <a> <img> <br>') .'</span>';

		// contact form title
		$html .= '<label for="rf_cont_form_title" class="rf_mbx_left">'. esc_html__( 'Contact Form Title:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_cont_form_title" id="rf_cont_form_title" class="widefat" value="'. esc_attr($rf_cont_form_title) .'" />';
		$html .= '</div>';

		// contact info title
		$html .= '<label for="rf_cont_info_title" class="rf_mbx_left">'. esc_html__( 'Contact Info Title:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_cont_info_title" id="rf_cont_info_title" class="widefat" value="'. esc_attr($rf_cont_info_title) .'" />';
		$html .= '</div>';

		// contact info fields
		// 1
		$html .= '<label for="rf_cont_info_field_1" class="rf_mbx_left">'. esc_html__( 'Contact Info Field 1:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_cont_info_field_1" id="rf_cont_info_field_1" class="widefat" value="'. esc_attr($rf_cont_info_field_1) .'" />';
		$html .= '</div>';
		// 2
		$html .= '<label for="rf_cont_info_field_2" class="rf_mbx_left">'. esc_html__( 'Contact Info Field 2:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_cont_info_field_2" id="rf_cont_info_field_2" class="widefat" value="'. esc_attr($rf_cont_info_field_2) .'" />';
		$html .= '</div>';
		// 3
		$html .= '<label for="rf_cont_info_field_3" class="rf_mbx_left">'. esc_html__( 'Contact Info Field 3:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_cont_info_field_3" id="rf_cont_info_field_3" class="widefat" value="'. esc_attr($rf_cont_info_field_3) .'" />';
		$html .= '</div>';
		// 4
		$html .= '<label for="rf_cont_info_field_4" class="rf_mbx_left">'. esc_html__( 'Contact Info Field 4:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<input type="text" name="rf_cont_info_field_4" id="rf_cont_info_field_4" class="widefat" value="'. esc_attr($rf_cont_info_field_4) .'" />';
		$html .= '</div>';
		// 5
		$html .= '<label for="rf_cont_info_field_5" class="rf_mbx_left">'. esc_html__( 'Contact Info Field 5:', 'hyperx' ) .'</label>';
		$html .= '<div class="rf_mbx_right">';
			$html .= '<textarea type="text" name="rf_cont_info_field_5" id="rf_cont_info_field_5" class="widefat" rows="8">'. esc_textarea( $rf_cont_info_field_5 ) .'</textarea>';
		$html .= '</div>';

		echo ''. $html;
	}

	// Save/Update
	function royal_save_contact_page_options( $post_id ) {

		if ( royal_user_can_save( $post_id, 'contact_page_nonce' ) ) {
			// allowed html for contact info fields
			$allowed_html = array(
				'a' 	 => array( 'href' => array(), 'title' => array(), 'target' => array() ),
				'img' 	 => array( 'src' => array(), 'alt' => array(), 'width' => array(), 'height' => array(), 'class' => array() ),
				'strong' => array(),
				'em' 	 => array(),
				'br' 	 => array(),
				'p' 	 => array()
			);

			// contact form title
			if ( isset($_POST['rf_cont_form_title']) ) {
				$valid_rf_cont_form_title = wp_kses( $_POST['rf_cont_form_title'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_form_title', $valid_rf_cont_form_title );
			}

			// contact info title
			if ( isset($_POST['rf_cont_info_title']) ) {
				$valid_rf_cont_info_title = wp_kses( $_POST['rf_cont_info_title'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_info_title', $valid_rf_cont_info_title );
			}

			// contact info fields
			// 1
			if ( isset($_POST['rf_cont_info_field_1']) ) {
				$valid_rf_cont_info_field_1 = wp_kses( $_POST['rf_cont_info_field_1'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_info_field_1', $valid_rf_cont_info_field_1 );
			}

			// 2
			if ( isset($_POST['rf_cont_info_field_2']) ) {
				$valid_rf_cont_info_field_2 = wp_kses( $_POST['rf_cont_info_field_2'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_info_field_2', $valid_rf_cont_info_field_2 );
			}

			// 3
			if ( isset($_POST['rf_cont_info_field_3']) ) {
				$valid_rf_cont_info_field_3 = wp_kses( $_POST['rf_cont_info_field_3'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_info_field_3', $valid_rf_cont_info_field_3 );
			}

			// 4
			if ( isset($_POST['rf_cont_info_field_4']) ) {
				$valid_rf_cont_info_field_4 = wp_kses( $_POST['rf_cont_info_field_4'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_info_field_4', $valid_rf_cont_info_field_4 );
			}

			// 5
			if ( isset($_POST['rf_cont_info_field_5']) ) {
				$valid_rf_cont_info_field_5 = wp_kses( $_POST['rf_cont_info_field_5'], $allowed_html );
				update_post_meta( $post_id, 'rf_cont_info_field_5', $valid_rf_cont_info_field_5 );
			}

		}
	}

	add_action( 'save_post', 'royal_save_contact_page_options' );