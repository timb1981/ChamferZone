<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Header hook. Don't delete this. -->
	<?php wp_head(); ?>
</head>

<?php
     $socials 			= get_option( 'royal_socials' );


	// get theme customzier data
	$preloader 			= royal_get_option( 'royal_preloader' );
	$body 				= get_option( 'royal_body' );
	$sidebar 			= get_option( 'royal_sidebar' );
	$sidebar_fold_btn 	= get_option( 'royal_sidebar_fold_btn' );
	$sidebar_top 		= get_option( 'royal_sidebar_top' );
	$logo 				= get_option( 'royal_logo' );
	$menu_title 		= get_option( 'royal_menu_title' );
	$menu_fold 			= royal_get_option('royal_menu_fold');
	$menu_fold_wrap 	= royal_get_option('royal_menu_fold_wrap');
	$menu_items 		= get_option( 'royal_menu_items' );
	$menu_mobile 		= get_option( 'royal_menu_mobile' );
	$filters_title 		= get_option( 'royal_filters_title' );
	$filter_items 		= get_option( 'royal_filter_items' );
	$bSingle_header 	= get_option( 'royal_bSingle_header' );
	$bSingle_nav 		= get_option( 'royal_bSingle_nav' );
	$bSingle_share 		= get_option( 'royal_bSingle_share' );
	$pSingle_header 	= get_option( 'royal_pSingle_header' );
	$pSingle_nav 		= get_option( 'royal_pSingle_nav' );
	$pSingle_share 		= get_option( 'royal_pSingle_share' );
	$pSingle_project 	= get_option( 'royal_pSingle_project' );
	$pagination_nav 	= get_option( 'royal_pagination_nav' );
	$fWidgets_content 	= get_option( 'royal_fWidgets_content' );
	$sWidgets_content 	= get_option( 'royal_sWidgets_content' );
	$fWidgets_general 	= get_option( 'royal_fWidgets_general' );
	$copy_soc_general 	= get_option( 'royal_copy_soc_general' );

	// add custom body classes
	$royal_body_class = array();

	// Preloader
	if ( $preloader['label'] === true ) {
		$royal_body_class[] = 'royal-page-preloader';
	}

	// Body
	if ( $body['onepage'] === true ) {
		$royal_body_class[] = 'onepage-menu';
	}
	if ( $body['smoothscroll'] === true ) {
		$royal_body_class[] = 'smoothscroll';
	}

	// Sidebar
	if ( $sidebar['general_position'] === 'left' ) {
		// sidebar position
		if ( $sidebar['position'] === 'fixed' ) {
			$royal_body_class[] = 'sidebar-fixed';
		} else if ( $sidebar['equal'] == true ) {
			$royal_body_class[] = 'sidebar-equal';
		}

		// sidebar show/hide
		if ( $sidebar['on_load'] === 'hide' ) {
			$royal_body_class[] = 'sidebar-closed';
			$royal_body_class[] = 'copy-closed';
		}
	} else {
		$royal_body_class[] = 'sidebar-top';

		if ( $sidebar_top['arrange'] === 'vertical' ) {
			$royal_body_class[] = 'sidebar-top-vertical';
		}

		if ( $sidebar_top['position'] === 'fixed' ) {
			$royal_body_class[] = 'sidebar-top-fixed';
		}

		if ( $sidebar_top['scale'] === true ) {
			$royal_body_class[] = 'sidebar-top-scale';
		}
	}

	// Menu
	if ( $menu_fold['label'] === true && $sidebar_top['arrange'] !== 'vertical_2' ) {
		$royal_body_class[] = 'menu-fold-style';
	}

	// filters deeplinking
	global $wp_customize;
	if ( ! isset( $wp_customize ) ) {
		if ( $filter_items['deeplinking'] === true ) {
			$royal_body_class[] = 'deeplinking';
		}
	} else {
		if ( $filter_items['deeplinking'] === true ) {
			$royal_body_class[] = 'deeplinking-customizer';
		}	
	}

	// blog & portfolio filters
	if ( $filter_items['isotope'] == '' ) {
		$royal_body_class[] = 'no-isotope';
	}

	// blog Single header
	if ( $bSingle_header['position'] === 'below' ) {
		$royal_body_class[] = 'single-header-below-b';
	}

	// portfolio Single header
	if ( $pSingle_header['position'] === 'below' ) {
		$royal_body_class[] = 'single-header-below-p';
	}

	// blog single post navigation
	if ( $bSingle_nav['label'] === false ) {
		$royal_body_class[] = 'hide-nxt-prev-b';
	}

	if ( $bSingle_nav['position'] === 'sharing' ) {
		$royal_body_class[] = 'sharing-nxt-prev-b';
	} else {
		$royal_body_class[] = 'header-nxt-prev-b';
	}

	// portfolio single post navigation
	if ( $pSingle_nav['label'] === false ) {
		$royal_body_class[] = 'hide-nxt-prev-p';
	}

	if ( $pSingle_nav['position'] === 'sharing' ) {
		$royal_body_class[] = 'sharing-nxt-prev-p';
	} elseif ( $pSingle_nav['position'] === 'header' ) {
		$royal_body_class[] = 'header-nxt-prev-p';
	} elseif ( $pSingle_nav['position'] === 'project' ) {
		$royal_body_class[] = 'project-nxt-prev-p';
	} else {
		$royal_body_class[] = 'side-nxt-prev-p';
	}

	if ( $pSingle_nav['back_link'] === true ) {
		$royal_body_class[] = 'p-single-back-link';
	}

	// portfolio single sharing
	if ( $pSingle_share['sharing_label'] === false ) {
		$royal_body_class[] = 'hide-single-sharing-p';
	}

	if ( $pSingle_share['position'] === 'project' ) {
		$royal_body_class[] = 'project-info-sharing';
	}

	// portfolio single project info
	$rf_enable_project_info = get_post_meta( get_the_ID(), 'rf_enable_project_info', true );
	if ( $pSingle_project['label'] === false && $rf_enable_project_info === 'no' ) {
		$royal_body_class[] = 'project-info-closed';
	}
	
	if ( $pSingle_project['position'] === 'right' ) {
		$royal_body_class[] = 'project-info-right';
		if ( $pSingle_project['equal_height'] === true ) {
			$royal_body_class[] = 'project-info-equal';
		}
	} elseif ( $pSingle_project['position'] === 'below_vert' ) {
		$royal_body_class[] = 'project-info-below-right';
		if ( $pSingle_project['equal_height'] === true ) {
			$royal_body_class[] = 'project-info-equal';
		}
	} else {
		$royal_body_class[] = 'project-info-horz';
	}

	// blog single sharing
	if ( $bSingle_share['sharing_label'] === false ) {
		$royal_body_class[] = 'hide-single-sharing-b';
	}

	// pagination load more
	if ( $pagination_nav['load_posts'] === 'facebook' ) {
		$royal_body_class[] = 'infinitescroll-facebook';
	} else {
		$royal_body_class[] = 'infinitescroll-twitter';
	}

	// copyright & socials
	if ( $copy_soc_general['label'] === true ) {
		if ( $copy_soc_general['position'] === 'fixed' ) {
			$royal_body_class[] = 'copy-fixed';
		} else {
			if ( $copy_soc_general['arrange'] === 'horizontal1' ) {
				$royal_body_class[] = 'copy-horizontal-1';
			} elseif( $copy_soc_general['arrange'] === 'horizontal2' ) {
				$royal_body_class[] = 'copy-horizontal-2';
			}
		}
	}

	// add classes for current page: Default Template
	$rf_def_page_paddings 	= '';
	$rf_def_page_margins 	= '';
	$rf_def_page_full_width = '';

	if ( isset($post) ) {
		$rf_def_page_paddings 	 = get_post_meta( $post->ID, 'rf_def_page_paddings', true );
		$rf_def_page_margins  	 = get_post_meta( $post->ID, 'rf_def_page_margins', true );
		$rf_def_page_full_width  = get_post_meta( $post->ID, 'rf_def_page_full_width', true );		
	}

	if ( $rf_def_page_paddings === 'yes' ) {
		$royal_body_class[] = 'def-page-paddings';
	}

	if ( $rf_def_page_margins === 'yes' ) {
		$royal_body_class[] = 'def-page-margins';
	}

	if ( $rf_def_page_full_width === 'yes' ) {
		$royal_body_class[] = 'def-page-fullwidth';
	}

	// convert to string 
	$royal_body_class = implode( ' ', $royal_body_class );

?>

<body <?php body_class( $royal_body_class ); ?>>

	<!-- Preloader -->
	<?php get_template_part('framework/customizer/royal', 'preloader'); ?>

	<!-- Whole Page Wrapper -->
	<div id="page-wrap" class="clearfix" data-fx="<?php echo esc_attr($preloader['fx']); ?>"  data-fx-speed="<?php echo esc_attr($preloader['fx_speed']); ?>">
		
		<!-- Mobile Navigation & Logo -->
		<div class="m-nav-and-logo">

			<div class="m-nav-fold rf-button">
				<i class="fa fa-<?php echo esc_attr($menu_mobile['icon']); ?>"></i>
			</div>
			
			<!-- Mobile Navigation -->
			<nav>
				<?php

				if ( $sidebar_top['arrange'] !== 'vertical_2' ) {

					if ( has_nav_menu('sidebar-menu') ) {
						wp_nav_menu(array(
							'theme_location' => 'sidebar-menu',
							'container' 	 => 'ul',
							'menu_class' 	 => 'mobile-nav'
						));
					} else {
						echo '<ul class="main-nav">';
							echo '<li>';
								echo '<a href="'. esc_url(home_url('/') .'wp-admin/nav-menus.php') .'">'. esc_html__( 'Set Up Menu', 'hyperx' ) .'</a>';
							echo '</li>';
						echo '</ul>';
					}

				} else {

					if ( has_nav_menu('top-left-menu') ) {
						echo '<ul class="mobile-nav">';
						wp_nav_menu( array('theme_location' => 'top-left-menu', 'container' => '', 'items_wrap' => '%3$s' ) );
						wp_nav_menu( array('theme_location' => 'top-right-menu', 'container' => '', 'items_wrap' => '%3$s' ) );
						echo '</ul>';
					} else {
						echo '<ul class="mobile-nav">';
							echo '<li>';
								echo '<a href="'. esc_url(home_url('/') .'wp-admin/nav-menus.php') .'">'. esc_html__( 'Set Up Menu', 'hyperx' ) .'</a>';
							echo '</li>';
						echo '</ul>';
					}
					
				}



				?>
			</nav>

			<!-- Mobile Logo & Tagline -->
			<?php if ( $logo['label'] === true ) : ?>

			<section class="mobile-logo">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr(bloginfo('name')); ?>" class="logo-wrap">
					<?php if( $logo['type'] === 'image' ) : ?>

						<?php // ssl check
							if ( is_ssl() ) {
								$logo['image'] = str_replace( 'http', '', $logo['image']);
								$logo['image'] = 'https'. $logo['image'];
								$logo['image_retina'] = str_replace( 'http', '', $logo['image_retina']);
								$logo['image_retina'] = 'https'. $logo['image_retina'];
							}
						?>
						
						<div class="logo-img">
							<img src="<?php echo esc_url($logo['image']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
							<img src="<?php echo esc_url($logo['image_retina']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
						</div>

					<?php else: ?>
						<h1 class="logo-text clearfix"> <?php echo get_option( 'blogname' ); ?> </h1>
					<?php endif; ?>
				</a>

				<p class="site-tagline"><?php echo get_option( 'blogdescription' ); ?></p>

			</section>

			<?php endif; ?>

		</div><!-- .m-nav-and-logo -->


		<?php if ( $sidebar['general_position'] === 'left' ) : ?>

			<!-- Sidebar Folding Button-->
			<div class="sidebar-fold-btn">
				<i class="fa fa-<?php echo esc_attr($sidebar_fold_btn['icon']); ?> rf-button"></i>
			</div>
			
			<!-- Sidebar -->
			<div id="sidebar">

				<!-- Logo & Tagline Wrapper -->
				<?php if ( $logo['label'] === true ) : ?>
				
				<section class="logo-and-tagline clearfix">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr(bloginfo('name')); ?>" class="logo-wrap" data-portfolio="<?php echo esc_url($filter_items['portfolio_url']); ?>" data-blog="<?php echo esc_url(get_permalink( get_option( 'page_for_posts' ) )); ?>">
						<?php if( $logo['type'] === 'image' ) : ?>
							<div class="logo-img">
								<img src="<?php echo esc_url($logo['image']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
								<img src="<?php echo esc_url($logo['image_retina']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
							</div>

						<?php else: ?>
							<h1 class="logo-text clearfix"> <?php echo get_option( 'blogname' ); ?> </h1>
						<?php endif; ?>
					</a>

					<p class="site-tagline"><?php echo get_option( 'blogdescription' ); ?></p>

				</section><!-- .logo-and-tagline -->

				<?php endif; ?>

				<!-- Wrap Sidebar Inner Content -->
				<div class="inner-sidebar clear">

					<!-- Main Navigation -->
					<nav class="sid-block" data-open="<?php echo esc_attr($menu_items['sub']); ?>">

						<h3 class="menu-title"><span><?php echo esc_html($menu_title['text']); ?></span></h3>

						<?php

						if ( has_nav_menu('sidebar-menu') ) {
							wp_nav_menu(array(
								'theme_location' => 'sidebar-menu',
								'container' 	 => 'ul',
								'menu_class' 	 => 'main-nav'
							));
						} else {
							echo '<ul class="main-nav">';
								echo '<li>';
									echo '<a href="'. esc_url(home_url('/') .'wp-admin/nav-menus.php') .'">'. esc_html__( 'Set Up Menu', 'hyperx' ) .'</a>';
								echo '</li>';
							echo '</ul>';
						}

						?>

					</nav>

					<!-- Blog Filters -->
					<section class="sid-block blog-filters">

						<h3 class="filters-title"><span><?php echo esc_html($filters_title['blog_text']); ?></span></h3>

						<ul class="filters">

							<?php if ( $filter_items['isotope'] === true ) : ?>
							<li>
								<a class="rf-button active-filter-item active-state" data-filter="*">
									<i class="fa fa-<?php echo esc_attr($filter_items['icon']); ?>"></i>
									<span><?php echo esc_html($filter_items['blog_all_text']); ?></span>
									<i class="fa fa-<?php echo esc_attr($filter_items['icon']); ?>"></i>
									<sup><sup><?php $b_post_count = wp_count_posts(); echo esc_html($b_post_count->publish); ?></sup></sup>
								</a>
							</li>
							<?php endif; ?>

							<?php

							// Blog Filters
							$blog_cats = get_terms('category');

							// if category array is not empty - except uncategorized
							if ( count($blog_cats) > 1 ) {
								foreach ( $blog_cats as $cats => $cat ) {
									if ( $cat->slug !== 'uncategorized' ) {
										$cat_url = ( $filter_items['isotope'] === true ) ? '' : 'href="'. esc_url(get_term_link( $cat, 'category' )) .'"';
										echo '<li><a '. esc_url($cat_url) .' class="rf-button" data-filter=".'. urldecode($cat->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup> '. $cat->count .'</sup></a></li>';
									}
								}
							}

							?>
						</ul>

					</section> <!-- end .blog-filters -->

					<!-- Portfolio Filters -->
					<?php if ( post_type_exists('royal_portfolio') ) : ?>
					<section class="sid-block portfolio-filters">

						<h3 class="filters-title"><span><?php echo esc_html($filters_title['folio_text']); ?></span></h3>

						<ul class="filters" data-sort="<?php echo get_option('sorted_cat_slugs'); ?>">

							<?php if ( $filter_items['isotope'] === true ) : ?>
							<li>
								<a class="rf-button active-filter-item active-state" data-filter="*">
									<i class="fa fa-<?php echo esc_attr($filter_items['icon']); ?>"></i>
									<span><?php echo esc_html($filter_items['portfolio_all_text']); ?></span>
									<i class="fa fa-<?php echo esc_attr($filter_items['icon']); ?>"></i>
									<sup><?php $p_post_count = wp_count_posts('royal_portfolio'); echo esc_html($p_post_count->publish); ?></sup>
								</a>
							</li>
							<?php endif; ?>

							<?php

							// Portfolio Filters
							if ( is_tax('royal_portfolio_cats') || is_single() ) {
								$rf_portfolio_items_from = 'all';
							} else {
								if ( isset($post) ) {
									$rf_portfolio_items_from = get_post_meta( $post->ID, 'rf_portfolio_items_from', true );
								} else {
									$rf_portfolio_items_from = '';
								}
							}
							

							// portfolio categories
							$portfolio_cats = get_terms('royal_portfolio_cats');

							// show all portfolio item filters
							if ( $rf_portfolio_items_from === 'all' ) {

								// if category array is not empty
								if ( count($portfolio_cats) > 0 ) {
									foreach ( $portfolio_cats as $cats => $cat ) {
										$cat_url = ( $filter_items['isotope'] === true ) ? '' : 'href="'. esc_url(get_term_link( $cat, 'royal_portfolio_cats' )) .'"';
										echo '<li><a '. esc_url($cat_url) .' class="rf-button" data-filter=".'. urldecode($cat->slug) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat->name .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup> '. $cat->count .'</sup></a></li>';
									}
								}

							// show portfolio item filters from custom categories
							} elseif ( $rf_portfolio_items_from === 'custom' ) {

								$portfolio_cats = get_terms('royal_portfolio_cats', array( 'hide_empty' => false) );

								// get post meta data
								$checked_cats = array();
								$cat_filters  = array();

								foreach ( $portfolio_cats as $key => $value ) {
									$cat_id 		= 'cat-'.  $value->term_id;
									$checked_cats[] = get_post_meta( $post->ID, $cat_id, true );
									$cat_filters[]	= explode( ',', $checked_cats[ $key ] );

									if ( $cat_filters[$key][0] !== '' ) {
										$cat_url = ( $filter_items['isotope'] === true ) ? '' : 'href="'. esc_url(get_term_link( $value, 'royal_portfolio_cats' )) .'"';
										echo '<li><a '. esc_url($cat_url) .' class="rf-button" data-filter=".'. urldecode($cat_filters[$key][0]) .'"><i class="fa fa-'. $filter_items['icon'] .'"></i>'. $cat_filters[$key][1] .'<i class="fa fa-'. $filter_items['icon'] .'"></i><sup> '. $cat->count .'</sup></a></li>';
									}
								}

							} // end if()

							?>

						</ul>

					</section> <!-- end .portfolio-filters -->
					<?php endif; ?>
					
					<?php 

					// Page Sidebar Widgetized Area
					if ( is_active_sidebar('sidebar-widgets') && $sWidgets_content['label'] === true ) {

						dynamic_sidebar('sidebar-widgets');

					}

					?>

				</div><!-- end .inner-sidebar -->

			</div><!-- end #sidebar -->

		<!-- Top Sidebar -->
		<?php else : ?>

			<!-- Top Widgets -->
			<?php if ( is_active_sidebar('top-widgets') && $fWidgets_content['label'] === true ) : ?>

			<div class="top-widgets-wrap">

				<!-- extra div for background options -->
				<div class="top-widgets-bg">

				<div class="top-widgets">

					<!-- Widgets -->
					<?php dynamic_sidebar('top-widgets'); ?>

				</div>

				</div>

				<!-- Show/Hide Button -->
				<div class="top-widgets-fold-btn">
					<div>
						<i class="fa fa-<?php echo esc_attr($fWidgets_general['icon']); ?>"></i>
					</div>
				</div>

			</div>

			<?php endif; ?>


			<!-- Sidebar -->
			<div id="sidebar-top" class="clearfix" data-margin="<?php echo esc_attr($sidebar_top['margin_bt']); ?>" data-fullwidth="<?php echo esc_attr($sidebar_top['fullwidth']); ?>" data-scale-color="<?php echo esc_attr(royal_hex2rgba( $sidebar_top['scale_bg_color'], $sidebar_top['scale_bg_color_tr'])); ?>" data-alt-height="<?php echo esc_attr($sidebar_top['alt_height']); ?>">

				<!-- Inner Block -->
				<div data-scale-height="<?php echo esc_attr($sidebar_top['scale_height']); ?>">

				<?php if ( $sidebar_top['arrange'] !== 'vertical_2' ) : ?>

					<!-- Logo & Tagline Wrapper -->
					<?php if ( $logo['label'] === true ) : ?>
					
					<section class="logo-and-tagline clearfix">

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr(bloginfo('name')); ?>" class="logo-wrap">
							<?php if( $logo['type'] === 'image' ) : ?>
								<div class="logo-img">
									<img src="<?php echo esc_url($logo['image']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
									<img src="<?php echo esc_url($logo['image_retina']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
								</div>

							<?php else: ?>
								<h1 class="logo-text clearfix"> <?php echo get_option( 'blogname' ); ?> </h1>
							<?php endif; ?>
						</a>

						<p class="site-tagline"><?php echo get_option( 'blogdescription' ); ?></p>

					</section>

					<?php endif; ?>

					<!-- Main Navigation -->
					<nav class="top-nav-wrap" data-popup-fx="<?php echo esc_attr($menu_fold_wrap['pupup_fx']); ?>" data-popup-fx-trans="<?php echo esc_attr($menu_fold_wrap['pupup_fx_trans']); ?>">
						<?php

						if ( $menu_fold_wrap['item_align'] === 'vertical' && $menu_fold['label'] === true ) {
							$menu_fold_wrap['item_align'] = ' top-nav-vertical';
						} else {
							$menu_fold_wrap['item_align'] = ' top-nav-horizontal';
						}

						if ( has_nav_menu('sidebar-menu') ) {
							wp_nav_menu(array(
								'theme_location' => 'sidebar-menu',
								'container' 	 => 'ul',
								'menu_class' 	 => 'top-nav clearfix'. $menu_fold_wrap['item_align']
							));
						} else {
							echo '<ul class="top-nav">';
								echo '<li>';
									echo '<a href="'. esc_url(home_url('/') .'wp-admin/nav-menus.php') .'">'. esc_html__( 'Set Up Menu', 'hyperx' ) .'</a>';
								echo '</li>';
							echo '</ul>';
						}

						?>
						
						<?php if ( $menu_fold['label'] === true ) : ?>
							<div class="top-nav-close top-nav-toggle"><i class="icon-cancel rf-button"></i></div>
							<div class="menu-fold-icon top-nav-toggle"><i class="fa rf-button fa-<?php echo esc_attr($menu_fold['icon']); ?>"></i></div>
						<?php endif; ?>
					</nav>

					<div class="clear"></div>

				<?php else: ?>

					<!-- Main Navigation -->
					<?php

					if ( has_nav_menu('top-left-menu') ) {
						wp_nav_menu(array(
							'theme_location' => 'top-left-menu',
							'container' 	 => 'ul',
							'menu_class' 	 => 'top-nav top-nav-horizontal clearfix'
						));
					} else {
						echo '<ul class="top-nav">';
							echo '<li>';
								echo '<a href="'. esc_url(home_url('/') .'wp-admin/nav-menus.php') .'">'. esc_html__( 'Set Up Menu', 'hyperx' ) .'</a>';
							echo '</li>';
						echo '</ul>';
					}

					?>

					<!-- Logo & Tagline Wrapper -->
					<?php if ( $logo['label'] === true ) : ?>
					
					<section class="logo-and-tagline clearfix">



						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr(bloginfo('name')); ?>" class="logo-wrap">
							<?php if( $logo['type'] === 'image' ) : ?>
								<div class="logo-img">
									<img src="<?php echo esc_url($logo['image']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
									<img src="<?php echo esc_url($logo['image_retina']); ?>" alt="<?php esc_attr(bloginfo('name')); ?>">
								</div>

							<?php else: ?>
								<h1 class="logo-text clearfix"><?php echo get_option( 'blogname' ); ?></h1>
							<?php endif; ?>
						</a>

						<p class="site-tagline"><?php echo get_option( 'blogdescription' ); ?></p>

					</section>

					<?php endif; ?>

					<?php

					if ( has_nav_menu('top-right-menu') ) {
						wp_nav_menu(array(
							'theme_location' => 'top-right-menu',
							'container' 	 => 'ul',
							'menu_class' 	 => 'top-nav top-nav-horizontal clearfix'
						));
					} else {
						echo '<ul class="top-nav">';
							echo '<li>';
								echo '<a href="'. esc_url(home_url('/') .'wp-admin/nav-menus.php') .'">'. esc_html__( 'Set Up Menu', 'hyperx' ) .'</a>';
							echo '</li>';
						echo '</ul>';
					}

					?>


					<div class="clear"></div>

				<?php endif; ?>

				</div><!-- end Inner Block -->

			</div><!-- end #sidebar-top -->

		<?php endif; // end sidebar if() ?>


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


		<!-- Main Content Wrapper -->
		<div id="main-wrap">