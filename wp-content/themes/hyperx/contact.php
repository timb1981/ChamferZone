<?php // Template Name: Contact Page

// get header.php
get_header();

// get theme customizer data
$cPage_general = get_option( 'royal_cPage_general' );
$cPage_map 	   = get_option( 'royal_cPage_map' );


// contact form validations
function isEmail( $email ) {
	$reg_exp  = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
	return ( preg_match( $reg_exp, $email ) );
}

// define error variables
$error_name 	= false;
$error_email	= false;
$error_message 	= false;
$error_class	= 'rf-error';

// default variables
$name 	 		= esc_html__( '*Name', 'hyperx' );
$email 	 		= esc_html__( '*Email', 'hyperx' );
$subject 		= esc_html__( 'Subject', 'hyperx' );
$message 		= esc_html__( '*Message', 'hyperx' );
$reciever_email = '';
$sent_report 	= '';

// get the reciever email
if ( trim($cPage_general['reciever_email']) === '' ) {
	$reciever_email = get_option('admin_email');
} else {
	$reciever_email = $cPage_general['reciever_email'];
}

if ( isset($_POST['cont-submit']) ) {

	// Get the name
	if ( trim($_POST['cont-name']) === '' || trim($_POST['cont-name']) == $name || strlen( trim($_POST['cont-name']) ) < 2 ) {
		$error_name = $error_class;
	} else {
		$name = esc_attr( trim($_POST['cont-name']) );
	}

	// Get the email
	if ( trim($_POST['cont-email']) === '' || ! isEmail( trim($_POST['cont-email']) ) ) {
		$error_email = $error_class;
	} else {
		$email = esc_attr( trim($_POST['cont-email']) );
	}

	// Get the subject
	if ( trim($_POST['cont-subject']) == 'subject' ) {
		$subject = '';
	} else {
		$subject = esc_attr( trim($_POST['cont-subject']) );
	}

	// Get the message
	if ( trim($_POST['cont-message']) === '' || trim($_POST['cont-message']) == $message ) {
		$error_message = $error_class;
	} else {
		$message = stripslashes( trim($_POST['cont-message']) );
	}

	// chek for errors and get email contnet 
	if ( $error_name !== $error_class && $error_email !== $error_class && $error_message !== $error_class ) {

		// email content
		$body  = esc_html__( 'Name: ', 'hyperx' ) . $name ."\n\n";
		$body .= esc_html__( 'Email: ', 'hyperx' ) . $email ."\n\n";
		$body .= esc_html__( 'Subject: ', 'hyperx' ) . $subject ."\n\n";
		$body .= esc_html__( 'Message: ', 'hyperx' ) ."\n\n";
		$body .= $message;

		// email headers
		$headers = esc_html__( 'From ', 'hyperx' ) . $name .' <'. $email .'>' ."\r\n";

		// send and check if email was sent
		if ( wp_mail( $reciever_email, $subject, $body, $headers ) ) {
			$email_sent = true;
		} else {
			$email_sent = false;
		}

	} // endif

} // endif


// if email was sent successfly echo success!
if ( isset($email_sent) && $email_sent ) {
	$sent_report = '<span class="mail-success-txt">'. esc_html__( 'The message was successfully sent!', 'hyperx' ) .'</span>';
} elseif ( isset($email_sent) && ! $email_sent ) {
	$sent_report = '<span class="mail-error-txt">'. esc_html__( 'An error has occurred!', 'hyperx' ) .'</span>';
}

// get post meta data
$form_title  	= get_post_meta( $post->ID, 'rf_cont_form_title', true );
$info_title 	= get_post_meta( $post->ID, 'rf_cont_info_title', true );
$info_field_1   = get_post_meta( $post->ID, 'rf_cont_info_field_1', true );
$info_field_2   = get_post_meta( $post->ID, 'rf_cont_info_field_2', true );
$info_field_3   = get_post_meta( $post->ID, 'rf_cont_info_field_3', true );
$info_field_4   = get_post_meta( $post->ID, 'rf_cont_info_field_4', true );
$info_field_5   = get_post_meta( $post->ID, 'rf_cont_info_field_5', true );


// change title in case of error/success
$form_title = ( isset($email_sent) && $sent_report != '' ? $sent_report : '<span>'. $form_title .'</span>' );

// if all info fields are empty, make contact form full width
if ( trim($info_field_1) === '' &&
	 trim($info_field_2) === '' &&
	 trim($info_field_3) === '' &&
	 trim($info_field_4) === '' &&
	 trim($info_field_5) === ''
) {
	$contact_form_full = 'contact-form-full';
} else {
	$contact_form_full = '';
}

?>


<!-- Google Map - top of the Page -->
<?php if ( $cPage_map['position'] === 'top' ) : ?>
	
	<div id="royal-gmap" class="google-map-wrap body-section" data-location="<?php echo esc_attr($cPage_map['location']); ?>" data-title="<?php echo esc_attr($cPage_map['tooltip_label']); ?>" data-map-type="<?php echo esc_attr($cPage_map['type']); ?>" data-zoom="<?php echo esc_attr($cPage_map['zoom']); ?>" data-scroll="<?php echo esc_attr($cPage_map['mousewheel']); ?>" data-nav="<?php echo esc_attr($cPage_map['nav']); ?>" data-type-control="<?php echo esc_attr($cPage_map['type_control']); ?>">
		
		<div class="google-map"></div>

	</div>

<?php endif; ?>


<!-- Inner Content Wrapper -->
<div class="inner-content-wrap">

	<!-- Contact & Contact info -->
	<div class="contact-form-wrap inner-content body-section">

		<?php if ( $cPage_general['layout'] === 'info_form' ) : ?>
		
		<aside class="contact-info">

			<?php if ( trim( $info_title ) !== '' ) : ?>
				<h3 class="contact-title"><span><?php echo esc_html($info_title); ?></span></h3>
			<?php endif; ?>

			<ul>
			<?php

				if ( trim( $info_field_1 ) !== '' ) {
					echo '<li><span>'. $info_field_1 .'</span></li>';
				}
				if ( trim( $info_field_2 ) !== '' ) {
					echo '<li><span>'. $info_field_2 .'</span></li>';
				}
				if ( trim( $info_field_3 ) !== '' ) {
					echo '<li><span>'. $info_field_3 .'</span></li>';
				}
				if ( trim( $info_field_4 ) !== '' ) {
					echo '<li><span>'. $info_field_4 .'</span></li>';
				}
				if ( trim( $info_field_5 ) !== '' ) {
					echo '<li><span>'. $info_field_5 .'</span></li>';
				}

			?>
			</ul>

		</aside>

		<?php endif; ?>


		<section class="contact-form <?php echo esc_attr($contact_form_full); ?>">
			<?php

				$html  = '';

				if ( trim( $form_title ) !== '<span></span>' ) {
					$html .= '<h3 class="contact-title">'. wp_kses_post($form_title) .'</h3>';
				}
				
				$html .= '<form action="'. esc_url(get_permalink()) .'" method="post" class="rf-form" data-disabled="'. ( isset($email_sent) ? $email_sent : '' ) .'">';

				// Name
				$html .= '<input type="text" id="cont-name" name="cont-name" class="rf-input pers-name '. esc_attr($error_name) .'" data-placeholder="'. esc_attr__( '*Name', 'hyperx' ) .'" value="'. esc_attr($name) .'" aria-required="true">';
				
				// Email
				$html .= '<input type="text" id="cont-email" name="cont-email" class="rf-input pers-email '. esc_attr($error_email) .'" data-placeholder="'. esc_attr__( '*Email', 'hyperx' ) .'" value="'. esc_attr($email) .'" aria-required="true">';
				
				// Subject
				$html .= '<input type="text" id="cont-subject" name="cont-subject" class="rf-input" data-placeholder="'. esc_attr__( 'Subject', 'hyperx' ) .'"  value="'. esc_attr($subject) .'">';
				
				// Message
				$html .= '<textarea id="cont-message" name="cont-message" class="rf-input pers-message '. esc_attr($error_message) .'" rows="8" data-placeholder="'. esc_attr__( '*Message', 'hyperx' ) .'">'. esc_attr($message) .'</textarea>';
				
				// Submit
				$html .= '<input type="submit" value="Send Message" class="submit-btn rf-button">';
				$html .= '<input type="hidden" id="cont-submit" name="cont-submit" value="true">';

				$html .= '</form>';

				echo ''. $html;

			?>			
		</section>


		<?php if ( $cPage_general['layout'] === 'form_info' ) : ?>

		<aside class="contact-info">

			<?php if ( trim( $info_title ) !== '' ) : ?>
				<h3 class="contact-title"><span><?php echo esc_html($info_title); ?></span></h3>
			<?php endif; ?>

			<ul>
			<?php

				// field 1
				if ( trim( $info_field_1 ) !== '' ) {
					echo '<li><span>'. wp_kses_post($info_field_1) .'</span></li>';
				}

				// field 2
				if ( trim( $info_field_2 ) !== '' ) {
					echo '<li><span>'. wp_kses_post($info_field_2) .'</span></li>';
				}

				// field 3
				if ( trim( $info_field_3 ) !== '' ) {
					echo '<li><span>'. wp_kses_post($info_field_3) .'</span></li>';
				}

				// field 4
				if ( trim( $info_field_4 ) !== '' ) {
					echo '<li><span>'. wp_kses_post($info_field_4) .'</span></li>';
				}

				// field 5 (textarea)
				if ( trim( $info_field_5 ) !== '' ) {
					echo '<li><span>'. wp_kses_post($info_field_5) .'</span></li>';
				}

			?>
			</ul>

		</aside>

		<?php endif; ?>

	</div><!-- end .contact-form-wrap -->

</div><!-- end .inner-content-wrap --> 


<!-- Google Map - bottom of the Page -->
<?php if ( $cPage_map['position'] === 'bottom' ) : ?>
	
	<div id="royal-gmap" class="google-map-wrap body-section" data-location="<?php echo esc_attr($cPage_map['location']); ?>" data-title="<?php echo esc_attr($cPage_map['tooltip_label']); ?>" data-map-type="<?php echo esc_attr($cPage_map['type']); ?>" data-zoom="<?php echo esc_attr($cPage_map['zoom']); ?>" data-scroll="<?php echo esc_attr($cPage_map['mousewheel']); ?>" data-nav="<?php echo esc_attr($cPage_map['nav']); ?>" data-type-control="<?php echo esc_attr($cPage_map['type_control']); ?>">
		
		<div class="google-map"></div>
	
	</div>

<?php endif; ?>


<!-- get footer.php -->
<?php get_footer(); ?>