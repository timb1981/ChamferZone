<?php // Preloader HTML Codes

// Get Theme Customizer options
$preloader  = royal_get_option( 'royal_preloader' );
$logo 		= get_option( 'royal_logo' );

if ( $preloader['label'] === true ) : ?>

	<div class="royal-preloader-wrap" data-bg-trans="<?php echo esc_attr($preloader['bg_trans']); ?>">

	<?php if ( $preloader['anim'] === 'logo' ) : ?>

		<div class="logo-img">
			<img src="<?php echo esc_url($logo['image']); ?>" alt="<?php bloginfo('name'); ?>">
			<img src="<?php echo esc_url($logo['image_retina']); ?>" alt="<?php bloginfo('name'); ?>">
		</div>

	<?php elseif ( $preloader['anim'] === 'spinner1' ) : ?>

		<div class="cssload-container">
			<div id="floatingCirclesG">
				<div class="f_circleG" id="frotateG_01"></div>
				<div class="f_circleG" id="frotateG_02"></div>
				<div class="f_circleG" id="frotateG_03"></div>
				<div class="f_circleG" id="frotateG_04"></div>
				<div class="f_circleG" id="frotateG_05"></div>
				<div class="f_circleG" id="frotateG_06"></div>
				<div class="f_circleG" id="frotateG_07"></div>
				<div class="f_circleG" id="frotateG_08"></div>
			</div>
		</div>

	<?php elseif ( $preloader['anim'] === 'spinner2' ) : ?>

		<div class="cssload-container">
			<div class="cssload-speeding-wheel"></div>
		</div>

	<?php elseif ( $preloader['anim'] === 'spinner3' ) : ?>

		<div class="cssload-loader">
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
			<div class="cssload-side"></div>
		</div>

	<?php elseif ( $preloader['anim'] === 'spinner4' ) : ?>

		<div class="cssload-container">
			<div class="cssload-tube-tunnel"></div>
		</div>

	<?php elseif ( $preloader['anim'] === 'spinner5' ) : ?>

		<div class="cssload-container">
			<span class="cssload-loader">
				<span class="cssload-loader-inner"></span>
			</span>
		</div>

	<?php elseif ( $preloader['anim'] === 'spinner6' ) : ?>

		<div align="center" class="cssload-fond">
			<div class="cssload-container-general">
					<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
					<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
					<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
					<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
			</div>
		</div>

	<?php elseif ( $preloader['anim'] === 'horizontal1' ) : ?>

		<div class="cssload-container">
			<div id="loadFacebookG">
				<div id="blockG_1" class="facebook_blockG"></div>
				<div id="blockG_2" class="facebook_blockG"></div>
				<div id="blockG_3" class="facebook_blockG"></div>
			</div>
		</div>

	<?php elseif ( $preloader['anim'] === 'horizontal2' ) : ?>

		<div class="loader">
			<span class="block-1"></span>
			<span class="block-2"></span>
			<span class="block-3"></span>
			<span class="block-4"></span>
			<span class="block-5"></span>
			<span class="block-6"></span>
			<span class="block-7"></span>
			<span class="block-8"></span>
			<span class="block-9"></span>
			<span class="block-10"></span>
			<span class="block-11"></span>
			<span class="block-12"></span>
			<span class="block-13"></span>
			<span class="block-14"></span>
			<span class="block-15"></span>
			<span class="block-16"></span>
		</div>

	<?php elseif ( $preloader['anim'] === 'horizontal3' ) : ?>

		<div class="cssload-spinner">
			<div class="cssload-cube cssload-cube0"></div>
			<div class="cssload-cube cssload-cube1"></div>
			<div class="cssload-cube cssload-cube2"></div>
			<div class="cssload-cube cssload-cube3"></div>
			<div class="cssload-cube cssload-cube4"></div>
			<div class="cssload-cube cssload-cube5"></div>
			<div class="cssload-cube cssload-cube6"></div>
			<div class="cssload-cube cssload-cube7"></div>
			<div class="cssload-cube cssload-cube8"></div>
			<div class="cssload-cube cssload-cube9"></div>
			<div class="cssload-cube cssload-cube10"></div>
			<div class="cssload-cube cssload-cube11"></div>
			<div class="cssload-cube cssload-cube12"></div>
			<div class="cssload-cube cssload-cube13"></div>
			<div class="cssload-cube cssload-cube14"></div>
			<div class="cssload-cube cssload-cube15"></div>
		</div>

	<?php elseif ( $preloader['anim'] === '3d1' ) : ?>

		<div class="cssload-loader">
			<div class="cssload-flipper">
				<div class="cssload-front"></div>
				<div class="cssload-back"></div>
			</div>
		</div>

	<?php elseif ( $preloader['anim'] === '3d2' ) : ?>

		<div class="cssload-loader">
			<div class="cssload-box-loading"></div>
		</div>

	<?php endif; ?>

	</div>

<?php endif; ?>