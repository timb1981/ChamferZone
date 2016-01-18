/*
***************************************************************
* All theme's cutom JavaScript is located here.
* Please don't Edit/Delete something. THIS IS VITAL.
***************************************************************
*/

jQuery(document).ready(function( $ ) {
	"use strict";

// define main variables
	var body 			= $('body'),
		pageWrap 	 	= $('#page-wrap'),
		mobFoldButton 	= $('.m-nav-fold'),
		sidFoldButton 	= $('.sidebar-fold-btn'),
		backTopButton 	= $('.back-to-top'),
		sidebar 		= $('#sidebar'),
		sidebarTop 		= $('#sidebar-top'),
		mainWrap 		= $('#main-wrap'),
		mainMenuItem 	= $('.main-nav li a'),
		CopyAndSoc 		= $('.copy-and-soc'),
		form 			= $('.rf-form, .comment-form'),
		inputs 			= $('.rf-input, #s');



/*
***************************************************************
* #Preloader
***************************************************************
*/

	if ( body.hasClass('royal-page-preloader') ) {

		$(window).on( 'load', function() {
			setTimeout(function(){
				body.removeClass('royal-page-preloader');
				$('.royal-preloader-wrap').fadeOut($('.royal-preloader-wrap').data('bg-trans'));
			}, 300);
		});

	}

	if ( body.hasClass('royal-page-preloader') && pageWrap.data('fx') !== 'none' ) {

		// animsition wrapper
		pageWrap.addClass('animsition');

		// create animsition links
		body.find('a[href*="'+ $('.logo-wrap').attr('href') +'"]').addClass('animsition-link');
		$('.load-more-wrap a, .social-share a, a.post-comments, a[rel*="prettyPhoto"]').removeClass('animsition-link');

		var dataFx = pageWrap.data('fx'),
			dataFxSpeed = parseInt(pageWrap.data('fx-speed'), 10);

		dataFx = dataFx.split(',');

		// trigger animsition
		$('#page-wrap.animsition').animsition({
			inClass: dataFx[0],
			outClass: dataFx[1],
			inDuration: dataFxSpeed,
			outDuration: dataFxSpeed,
			linkElement: '.animsition-link',
			loading: false,
			loadingParentElement: 'body',
			loadingClass: 'animsition-loading',
			loadingInner: '',
			timeout: false,
			timeoutCountdown: 5000,
			onLoadEvent: true,
			browser: [ 'animation-duration', '-webkit-animation-duration'],
			overlay : false,
			overlayClass : 'animsition-overlay-slide',
			overlayParentElement : 'body',
			transition: function(url){ window.location.href = url; }
		});

		$('.animsition-link').on('click', function(event) {
			if ( event.which === 1 ) {
				$('.royal-preloader-wrap').fadeIn(dataFxSpeed);
			}
		});

	}



/*
***************************************************************
* #Buttons
***************************************************************
*/

// Mobile fold button
	mobFoldButton.on('click', function() {
		$('.mobile-nav').stop().slideToggle();
	});

// Sidebar fold button
	sidFoldButton.on('click', function() {

		body.toggleClass('sidebar-closed copy-closed');
		fixedSidebarHeight();
		
		// Run Functions
		setTimeout(function() {

			projectInfoEqual();
			$('.jcarousel').jcarousel('reload').fadeOut().fadeIn();
			
			// run isotope function
			isotopeFn('portfolio');
			isotopeFn('blog');
			$('.esg-grid').each(function(){
				$(this).esredraw();
			})

		}, 200);

	});

// Back to top button
	function backButton() {
		if ( $(window).scrollTop() > 100 ) {
			backTopButton.fadeIn( parseInt( backTopButton.attr('data-duration') ) );
		} else {
			backTopButton.fadeOut( parseInt( backTopButton.attr('data-duration') ) );
		}
	}

	backButton();

	$(window).scroll(function() {
		backButton();
	});

	backTopButton.on('click', function() {
		$('html, body').animate( {scrollTop: 0}, parseInt( backTopButton.attr('data-scroll-top') ) );
	});

// Copyright fold button
	if ( $('.footer-fold-btn').css('display') !== 'none' ) {
		CopyAndSoc.css( 'bottom', - CopyAndSoc.outerHeight() +'px' );
	}

	// show/hide on click
	$('.footer-fold-btn').on('click', function() {

		// define
		var toggleIcon 		= $(this).children(),
			toggleIconClass = toggleIcon.attr('class');

		if ( CopyAndSoc.css('bottom') !== '0px' ) {

			// change icon
			if (  toggleIconClass.match('up')) {
				toggleIcon.attr( 'class', toggleIconClass.replace( 'up', 'down' ) );
			}

			CopyAndSoc.animate({
				'bottom' : '0'
			}, 500);

		} else {

			// change icon
			if (  toggleIconClass.match('down')) {
				toggleIcon.attr( 'class', toggleIconClass.replace( 'down', 'up' ) );
			}

			CopyAndSoc.animate({
				'bottom' : - CopyAndSoc.outerHeight() +'px'
			}, 500);

		}

	});



/*
***************************************************************
* #Sidebar
***************************************************************
*/

// Sidebar equal height to Content (#main-wrap)
	function sidebarEqual() {
		if ( body.hasClass('sidebar-equal') ) {

			// reset heights
			sidebar.css( 'min-height', '' );
			mainWrap.css( 'min-height', '' );

			var sidebarHeight 	 = sidebar.outerHeight(),
				mainWrapHeight 	 = mainWrap.outerHeight(),
				CopyAndSocHeight = CopyAndSoc.outerHeight();

			if ( body.hasClass('copy-fixed') || CopyAndSoc.css('display') === 'none' ) {
				CopyAndSocHeight = 0;
			}

			if ( sidebarHeight > ( mainWrapHeight + CopyAndSocHeight ) ) {
				mainWrap.css( 'min-height', sidebarHeight - CopyAndSocHeight );
			} else {
				sidebar.css( 'min-height', mainWrapHeight + CopyAndSocHeight );
			}

		}
	}

// Sidebar custom scroll
// some bug fixes for Opera, IE and Safari

	if ( navigator.userAgent.match(/opera/i) ) {
		sidebar.perfectScrollbar({
			suppressScrollX : true,
			wheelSpeed: 150,
			includePadding : true
		});

	} else if ( navigator.userAgent.match(/msie/i) ) {
		sidebar.perfectScrollbar({
			suppressScrollX : true,
			wheelSpeed: 2,
			includePadding : true
		});

	} else if ( navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 ) {
		sidebar.perfectScrollbar({
			suppressScrollX : true,
			wheelSpeed: 150,
			includePadding : true
		});

		// fix project info left margin
		$('.project-info').css('margin-left', ($('.single-wrap').outerWidth() + $('.project-info').data('left-margin')) +'px');
		
	} else {
		sidebar.perfectScrollbar({
			suppressScrollX : true,
			includePadding : true
		});
	}

// fixedSidebarHeight(), small fix for sidebar scroll
	function fixedSidebarHeight() {
		if ( body.hasClass('sidebar-fixed') && body.hasClass('copy-fixed') && CopyAndSoc.css('display') !== 'none' && ! body.hasClass('sidebar-equal') ) {

			var sidebarHeight = $(window).height() - CopyAndSoc.outerHeight();

			// if admin is logged in
			if ( body.hasClass('admin-bar') ) {
				sidebarHeight -= 32;
			}

			sidebar.outerHeight( sidebarHeight );
			sidebar.perfectScrollbar('update');

		}
	}

	if ( ! body.hasClass('sidebar-fixed') && body.hasClass('copy-fixed') ) {
		sidebar.append('<div class="tmp-copy-soc" style="height:'+ CopyAndSoc.outerHeight() +'px;"></div>');
	}
	
// Main menu: Sub menus
// open with hover or click events
	if ( $('.main-nav').parent().data('open') === 'hover' ) {

		mainMenuItem.mouseenter(function() {
			$(this).parent().find('.sub-menu').stop().slideDown();
			sidebar.perfectScrollbar('update');
		});

		sidebar.mouseleave(function() {
			mainMenuItem.parent().find('.sub-menu').stop().slideUp();
		});

	} else if ( $('.main-nav').parent().data('open') === 'click' ) {

		mainMenuItem.on('click', function( event ) {

			mainMenuItem.parent().find('.sub-menu').stop().slideUp();
			$(this).parent().find('.sub-menu').stop().slideToggle();

			sidebar.perfectScrollbar('update');
			if ( $(this).parent().find('.sub-menu').length > 0 ) {
				event.preventDefault();
			}

		});

	}

// remove "font-size" from portfolio tagcloud widget
	$('.tagcloud a').removeAttr('style');



/*
***************************************************************
* #Sidebar Top
***************************************************************
*/

// Fold menu
	var topNav = $('.top-nav'),
		topNavWrap = $('.top-nav-wrap');

	// wrap & center
	if ( body.hasClass('menu-fold-style') && ! topNav.hasClass('top-nav-center') ) {
		topNav.addClass('top-nav-center')
			.wrap('<div class="top-nav-container"></div>')
					.wrap('<div class="top-nav-outer"></div>')
						.wrap('<div class="top-nav-inner"></div>');

		// popup fx
		$('.top-nav-container').addClass( topNavWrap.attr('data-popup-fx') );

		// close button			
		var navClose = $('.top-nav-close').remove();
		$('.top-nav-outer').append(navClose);
		$('.top-nav-close').show();
	}

	// popup on click
	$('.top-nav-toggle').on('click', function(){
		$('.top-nav-container').toggleClass('top-nav-popup');
		$('.tn-fade').fadeToggle( parseInt( topNavWrap.attr('data-popup-fx-trans'), 10) );
	});
	
// Sub menus
	if ( body.hasClass('sidebar-top') ) {

		$('.sub-menu').each(function() {
			$(this).wrap('<div class="sub-menu-wrap"></div>');
		});

		$('.top-nav.top-nav-vertical > li').hover(function() {
			$(this).children('.sub-menu-wrap').children('.sub-menu').stop().slideDown();
		}, function() {
			$(this).children('.sub-menu-wrap').children('.sub-menu').stop().slideUp();
		});

		$('.top-nav.top-nav-horizontal > li').hover(function() {
			$(this).children('.sub-menu-wrap').children('.sub-menu').fadeIn('fast');
		}, function() {
			$(this).children('.sub-menu-wrap').children('.sub-menu').fadeOut('fast');
		});

		$('.top-nav.top-nav-horizontal .sub-menu > li').hover(function() {
			$(this).children('.sub-menu-wrap').children('.sub-menu').fadeIn('fast');
		}, function() {
			$(this).children('.sub-menu-wrap').children('.sub-menu').fadeOut('fast');
		});

	}

// calculate width for fixed top sidebar
	function sidebarTopWidth() {
		if ( body.hasClass('sidebar-top-fixed') ) {

			if( parseInt( sidebarTop.attr('data-fullwidth'), 10 ) === 1) {

				sidebarTop.css({
					'left' : '0',
					'max-width' : 'none'
				});

				sidebarTop.children('div').css({
					'width'  : mainWrap.outerWidth() +'px',
					'margin' : '0 auto'
				});

			} else {
				sidebarTop.css( 'width', mainWrap.outerWidth() +'px' );
			}

		}
	}

// calculate height for fixed top sidebar
	function sidebarTopHeight() {

		var outerHeight = parseInt( sidebarTop.outerHeight(), 10 ) + parseInt( sidebarTop.attr('data-margin'), 10 ) - 1;

		if ( body.hasClass('sidebar-top-fixed') ) {

			if ( body.hasClass('page-template-default') && body.hasClass('def-page-margins') ) {
				outerHeight = parseInt( sidebarTop.outerHeight(), 10 );
			}

			outerHeight = ( outerHeight < parseInt( sidebarTop.attr('data-alt-height'), 10 ) ) ? parseInt( sidebarTop.attr('data-alt-height'), 10 ) : outerHeight

			sidebarTop.css( 'position', 'fixed' );
			mainWrap.css( 'margin-top', outerHeight +'px' );
		}

	}

// Widgets
	$('.top-widgets-fold-btn').find('i').on('click', function() {

		// show/hide Top Widgets
		$('.top-widgets').slideToggle();

		// change icon direction
		if ( $(this).attr('class').match('plus') ) {
			$(this).attr( 'class', $(this).attr('class').replace( 'plus', 'minus' ) );
		} else if ( $(this).attr('class').match('minus') ) {
			$(this).attr( 'class', $(this).attr('class').replace( 'minus', 'plus' ) );
		}

		if ( $(this).attr('class').match('down') ) {
			$(this).attr( 'class', $(this).attr('class').replace( 'down', 'up' ) );
		} else if ( $(this).attr('class').match('up') ) {
			$(this).attr( 'class', $(this).attr('class').replace( 'up', 'down' ) );
		}

	});

// OnePage Scrolling
	function onePageScrolling( id ) {

		if ( body.hasClass('onepage-menu') && body.hasClass('page-template-default') ) {

			if ( id.constructor === Array ) {
				id = id[id.length - 1];
			}

			if ( id.indexOf('#') === - 1 ) {
				return;
			}

			// Calculate destination place
			var destination = $(id).offset().top;

			if ( body.hasClass('sidebar-top-fixed') ) {
				destination -= sidebarTop.outerHeight();
			}

			if ( body.hasClass('admin-bar') ) {
				destination -= 32;
			}

			// Scroll to destination
			$('html, body').animate( { scrollTop : destination }, 1200,'swing' );	

		}

	}

	if ( body.hasClass('onepage-menu') ) {

		// OnePage Active Menu Item - on load
		$(window).on( 'load', function() {
			setTimeout(function(){

				var activeItem = '';

				// add active class
				$('.vc_row').each(function(){
					if ( sidebarTop.offset().top >= ($(this).offset().top - sidebarTop.outerHeight()) ) {
						$('.menu-item').removeClass('current-menu-item');
						activeItem = '';
						activeItem = $(this).attr('id');
					}
				});

				if ( activeItem !== '' ) {
					$('.menu-item a[href="#'+ activeItem +'"]').parent().addClass('current-menu-item');
				} else {
					$('.menu-item a[href="#'+ $('.vc_row').first().attr('id') +'"]').parent().addClass('current-menu-item');
				}

			}, 300);
		});

		// OnePage Active Menu Item - on scroll
		$(window).on( 'scroll', function() {
			$('.vc_row').each(function(){
				if ( $(window).scrollTop() >= ($(this).offset().top - sidebarTop.outerHeight()) ) {
					$('.menu-item').removeClass('current-menu-item');
					$('.menu-item a[href="#'+ $(this).attr('id') +'"]').parent().addClass('current-menu-item');
				}
			});	
		});
		

		// run on menu items click
		$('.menu-item a').on('click', function(event) {

			// add active class
			$('.menu-item').removeClass('current-menu-item');
			$(this).parent().addClass('current-menu-item');

			// if menu link has #
			if ( $(this.hash).length > 0 ) {
				event.preventDefault();
			} else {
				window.location.href = $('.logo-wrap').attr('href') +'/'+ $(this).attr('href');
			}

			onePageScrolling( $(this).attr('href') );

		});

	}

	// wrap vc elements with left sidebar
	if ( $('#sidebar').length > 0 ) {
		$('.vc_row .rev_slider_wrapper').wrap('<div class="royal-revslider"></div>');
	}

// scroll down scale
	if ( body.hasClass('sidebar-top-scale') && ! body.hasClass('sidebar-top-vertical') && sidebarTop.css('display') !== 'none' ) {

		$('#sidebar-top > div, .logo-and-tagline, .top-nav > li, .top-nav > li > a').addClass('sidebar-top-scale-adjust');

		var sidTopDiv	  = sidebarTop.children('div'),
			sidTopHeight  = ( sidTopDiv.outerHeight() < parseInt( sidebarTop.attr('data-alt-height'), 10 ) ) ? parseInt( sidebarTop.attr('data-alt-height'), 10 ) : sidTopDiv.outerHeight(),
			scaleHeight	  = parseFloat(sidTopDiv.attr('data-scale-height'), 10),
			sidebarTopCol = sidebarTop.css('background-color');

		$('.top-nav > li > a').css('line-height', sidTopHeight +'px');
		$('#sidebar-top .logo-img img').css('max-height', sidTopHeight +'px');
		sidTopDiv.css('max-height', sidTopHeight +'px');
		sidebarTop.addClass('std-noscale')

		$(window).scroll(function() {

			if ( body.hasClass('sidebar-top-scale') && sidebarTop.css('display') !== 'none' ) {

		        if ( $(window).scrollTop() > 0 ) {

		        	if ( sidebarTop.hasClass('std-noscale') ) {
		        		sidebarTop.addClass('std-scaled');
		        		sidebarTop.removeClass('std-noscale');

						sidTopDiv.animate({'max-height' : scaleHeight}, 200);
						$('.top-nav > li > a').animate({'line-height' : scaleHeight +'px'}, 200);
						$('#sidebar-top .logo-img img').animate({'max-height' : scaleHeight}, 200);
						sidebarTop.css({'background-color' : sidebarTop.attr('data-scale-color')});
					}

		        } else {
		        	
		        	if ( sidebarTop.hasClass('std-scaled') ) {
		        		sidebarTop.addClass('std-noscale');
		        		sidebarTop.removeClass('std-scaled');

						sidTopDiv.animate({'max-height' : sidTopHeight}, 200);
						$('.top-nav > li > a').animate({'line-height' : sidTopHeight +'px'}, 200);
						$('#sidebar-top .logo-img img').animate({'max-height' : sidTopHeight}, 200);
						sidebarTop.css({'background-color' : sidebarTopCol});
					}

		        }

			}

		});
			
	}

// Search in top sidebar
	function topNavSearch() {

		var topNavSearch  = $('.top-nav-search-wrap'),
			topnavSearchX = topNavSearch.children('div').find('i');

		if ( topNavSearch.length > 0 ) {

			topNavSearch.children('div').width( sidebarTop.children('div').outerWidth() );
			topnavSearchX.attr( 'class', 'fa fa-times search-icon' );

			topNavSearch.children('a').on('click', function(event) {
				event.preventDefault();
				topNavSearch.children('div').fadeIn();
			});

			topnavSearchX.on('click', function() {
				topNavSearch.children('div').fadeOut();
			});

		}

	}



/*
***************************************************************
* #Copyright & Socials
***************************************************************
*/

// show Copyright & Socials in footer on small devices
	function mobileCopyAndSoc() {

		if ( sidebar.css('display') === 'none' && body.hasClass('copy-fixed') ) {

			body.removeClass('copy-closed');
			CopyAndSoc.addClass('copy-mobile');

		} else if ( sidebar.css('display') !== 'none' && body.hasClass('copy-fixed') && body.hasClass('sidebar-closed') ) {

			body.addClass('copy-closed');
			CopyAndSoc.removeClass('copy-mobile');

		} else if ( sidebar.css('display') !== 'none' && body.hasClass('copy-fixed') && ! body.hasClass('sidebar-closed') ) {

			CopyAndSoc.removeClass('copy-mobile');

		}

	}



/*
***************************************************************
* #Link & Quote
***************************************************************
*/

	function linkAndQuoteHeight() {
		$('.featured-media').css( 'min-height', $('.featured-media').find('.link-and-quote').outerHeight() );
	}



/*
***************************************************************
* #Portfolio Project Info
***************************************************************
*/

// project info equal height to portfolio content
	var projectInfo = $('.project-info');
	
	function projectInfoEqual() {

		// define
		var portfolioSingleHeight = $('.single-wrap').height(),
		 	SingleContentHeight   = $('.single-content-wrap').outerHeight();

		if ( body.hasClass('project-info-equal') ) {
			projectInfo.css( 'min-height', '' );
			projectInfo.css( 'min-height', portfolioSingleHeight +'px' );

			if ( body.hasClass('project-info-below-right') && ! body.hasClass('single-header-below-p') ) {
				projectInfo.css( 'min-height','');
				projectInfo.css( 'min-height', SingleContentHeight +'px' );
			} else if ( body.hasClass('project-info-below-right') && body.hasClass('single-header-below-p') ) {
				projectInfo.css( 'min-height','');
				projectInfo.css( 'min-height', SingleContentHeight + $('.single-header').outerHeight()  +'px' );
			}

		} else {
			projectInfo.css( 'min-height', '' );
		}

	}

	if ( $('.project-description-wrap').length === 0 ) {
		$('.project-details-wrap').addClass('no-project-desc');
	}

// project info sticks to window
	function projectInfoSticky() {

		if ( ! body.hasClass('single-royal_portfolio') || projectInfo.data('sticky') === 'no' ) {
			return;
		}

		// trigger fake scroll on load
		$(window).on('load', function(){
			$(window).trigger('scroll');
		})

		// special style for this condition
		$('article.portfolio-single').css('overflow', 'hidden');

		// define wariables
	    var sectionSpace 	 = ( $('#sidebar-top').length ) ? parseInt($('.body-section').css('margin-bottom'), 10) : 0,
	    	projectOffset 	 = projectInfo.offset().top,
	    	portfolioOffset  = $('article.portfolio-single').offset().top,
	    	wpAdminBarHeight = ( $('#wpadminbar').length ) ? $('#wpadminbar').height() : 0,
	    	sidTopMarBottom  = ( $('#sidebar-top').length ) ? parseInt($('#sidebar-top').css('margin-bottom'), 10) : 0,
	    	projStikyOffset	 = parseInt(projectInfo.data('sticky-offset'), 10);

	    // run calculations on scroll
	    $(window).scroll(function() {

			if ( $('.m-nav-and-logo').css('display') === 'none' ) {

				if ($(window).scrollTop() + 3 > projectOffset) {

					if ($(window).scrollTop() + projectInfo.outerHeight() < portfolioOffset + $('article.portfolio-single').outerHeight() - sectionSpace + wpAdminBarHeight + sidTopMarBottom - projStikyOffset) {
						projectInfo.stop().animate({ marginTop: $(window).scrollTop() - projectOffset + projectInfo.data('left-margin') + projStikyOffset }, 700)
					} else {
						projectInfo.stop().animate({ marginTop: $('article.portfolio-single').outerHeight() - projectInfo.outerHeight() - sectionSpace + sidTopMarBottom + projStikyOffset }, 700);
					}

				} else {
					projectInfo.stop().animate({ marginTop: 0 }, 700);
				}

			} else {
				projectInfo.css('margin-top', 0);
			}

	    });

	}



/*
***************************************************************
* #Similar Items
***************************************************************
*/

// Similar items - jcarousel
	$('.jcarousel').on('jcarousel:create jcarousel:reload', function() {
		
		// define
		var bodyWidth = $('.inner-content-wrap').width(),
			width     = $(this).innerWidth(),
			colRate   = parseInt( $('.similar-items').data('columns-rate'), 10 );

        if ( bodyWidth < 600 ) {
         width = width / 2;
        } else if ( bodyWidth < 850 ) {
         width = width / 3;
        } else if ( bodyWidth < 1100 ) {
         width = width / ( 4 + colRate);
        } else if ( bodyWidth < 1300 ) {
         width = width / ( 5 + colRate);
        } else if ( bodyWidth < 1600 ) {
         width = width / ( 6 + colRate);
        } else if ( bodyWidth < 1900 ) {
         width = width / ( 7 + colRate);
        } else if ( bodyWidth < 2100 ) {
         width = width / ( 8 + colRate);
        } else if ( bodyWidth < 2400 ) {
         width = width / ( 9 + colRate);
        } else if ( bodyWidth < 2700 ) {
         width = width / ( 10 + colRate);
        } else if ( bodyWidth < 3000 ) {
         width = width / ( 11 + colRate);
        } else if ( bodyWidth < 3300 ) {
         width = width / ( 12 + colRate);
        } else {
         width = width / 14;
        }

        $(this).jcarousel('items').css('width', width + 'px');

    }).jcarousel({
       wrap: 'circular'

    }).jcarouselAutoscroll({
		interval: $('.similar-items').data('interval'),
		target: '+=1',
		autostart: $('.similar-items').data('autostart')
    });

	$('.jcarousel').jcarousel({
	    animation: $('.similar-items').data('animation')
	});

    $('.jcarousel-prev').jcarouselControl({
        target: '-=1'
    });

    $('.jcarousel-next').jcarouselControl({
        target: '+=1'
    });



/*
***************************************************************
* #Google Map
***************************************************************
*/

	$('.google-map-wrap').each( function() {
		
		// define variables	
		var mapObj,
			geocoderObj,
			mapLocation = $(this).data('location'),
			mapType 	= $(this).data('map-type'),
			markerTitle = $(this).data('title'),
			mouseScroll = $(this).data('scroll'),
			navigation	= $(this).data('nav'),
			typeControl	= $(this).data('type-control'),
			zoomLevel	= parseInt( $(this).data('zoom'), 10 );
		
		if ( mapType === 'ROADMAP' ) {
			mapType = google.maps.MapTypeId.ROADMAP;
		} else {
			mapType = google.maps.MapTypeId.SATELLITE;
		}

		if ( parseInt( mouseScroll, 10 ) === 1 ) {
			mouseScroll = true;
		} else {
			mouseScroll = false;
		}

		if ( parseInt( navigation, 10 ) === 1 ) {
			navigation = true;
		} else {
			navigation = false;
		}

		if ( parseInt( typeControl, 10 ) === 1 ) {
			typeControl = true;
		} else {
			typeControl = false;
		}

		var mobileDraggable = true;
		
		if ( $('#sidebar, #sidebar-top').css('display') === 'none' ) {
			mobileDraggable = false;
		}
		
		geocoderObj = new google.maps.Geocoder();
		
		geocoderObj.geocode( { 'address': mapLocation }, function( results, status ) {
		
			if ( status == google.maps.GeocoderStatus.OK ) {
			
				var mapOptions = {
					zoom: zoomLevel,
					mapTypeId: mapType,
					scrollwheel: mouseScroll,
					draggable: mobileDraggable,
					streetViewControl: false,
					mapTypeControl: typeControl,
					panControl: navigation,
					zoomControl: navigation,
				    mapTypeControlOptions: {
				      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
				    }
				};
				
				mapObj = new google.maps.Map( $('#royal-gmap .google-map')[0], mapOptions );
				
				mapObj.setCenter( results[0].geometry.location );
				
				// Marker
				var marker = new google.maps.Marker({
				  map: mapObj, 
				  position: results[0].geometry.location,
				  title : mapLocation
				});
				
				var infoWinContent = ( (markerTitle) ? '<h3 style="line-height:19px;">' + markerTitle + '</h3>' : '' );
				
				// Info Window Popup - custom title area
				var infoPopup = new google.maps.InfoWindow({
				  content: infoWinContent
				});
				
				if ( markerTitle.trim() !== '' ) {
					infoPopup.open( mapObj, marker );
				}
			
			// if loading fails display error message
			} else {
				$('#royal-gmap').html( "Geocode was not successful for the following reason: " + status );
			}

		});
		
	});



/*
***************************************************************
* #Inputs
***************************************************************
*/

// inputs, textareas clear/fill
	function clearfill( input ) {

		var inpValue = input.data('placeholder');

		input.focus(function() {

			if( input.val() === inpValue ) {
				input.val('');
			} 

		});

		input.blur(function() {

			if( input.val() === '' ) {
				input.val(inpValue);
			}

		});
	} 

// run clearfill for each input/textarea
	inputs.each(function() {
		clearfill( $(this) );
	});

// person name validation
	function validName() {

		var name = $('.pers-name');

		if ( ( name.val() === '' || name.val() === name.data('placeholder') || name.val().length < 2 ) && name.attr('aria-required')  ) {

			name.addClass('rf-error');
			return false;

		} else {

			name.removeClass('rf-error');
			return true;

		}

	}

// person email validation
	function validEmail() {

		// define
		var email = $('.pers-email'),
			regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		if ( regex.test( email.val() ) !== true && email.attr('aria-required') ) {
			email.addClass('rf-error');
		} else {
			email.removeClass('rf-error');
		}
		
		if ( email.attr('aria-required') ) {
			return regex.test( email.val() );
		} else {
			return true;
		}
		
	}

// person message validation
	function validMessage() {

		var message = $('.pers-message');

		if ( message.val() === '' || message.val() == message.data('placeholder') || message.val().length < 2 ) {

			message.addClass('rf-error');
			return false;

		} else {

			message.removeClass('rf-error');
			return true;

		}

	}

// validate all inputs when form submits
	form.submit(function( event ) {

		validName();
		validEmail();
		validMessage();

		if ( $('.pers-name').length > 0 && $('.pers-email').length > 0 ) {

			if ( ! validName() || ! validEmail() || ! validMessage() ) {

				event.preventDefault();

			} else {

				if ( $('#url').val() === 'Website' ) {
					$('#url').val('');
				}

			}

		} else if ( ! validMessage() ) {

			event.preventDefault();

		}

	});

// if email was sent succesfuly disable all inputs
	if ( form.attr('data-disabled') == '1' ) {
		form.find('input, textarea').attr('disabled','disabled');
		form.find('.submit-btn').fadeOut('x-slow');
	}

// add some styling classes to comments & password protected forms
	form.find('#submit').addClass('rf-button submit-btn');
	$('.post-password-form').find('input[type="submit"]').addClass('rf-button submit-btn');
	$('.post-password-form').find('input[type="password"]').addClass('rf-input');



/*
***************************************************************
* #Isotope For Blog & Portfolio Pages 
***************************************************************
*/

// isotope function
	function isotopeFn ( page ) {

	// define variables
		var bodyWidth 	= pageWrap.width(),
			container 	= $('#'+ page +'-container'),
			item 		= $('.'+ page +'-post'),
			itemVisible = item.filter(":visible"),
			layout 		= ( container.attr('data-layout') !== '' ) ? container.attr('data-layout') : 'masonry',
			gutterHorz 	= parseInt( container.attr('data-gutter-horz'), 10 ),
			gutterVert 	= parseInt( container.attr('data-gutter-vert'), 10 ),
			columns 	= 0,
			x 			= 0,
			columnsRate = container.attr('data-columns-rate'),
			contWidth 	= Math.floor( container.width() + gutterHorz - 0.3 ),
			postMedia  	= itemVisible.find('.post-media'),
			aspectRatio = parseInt( container.attr('data-aspect-height'), 10 ) / parseInt( container.attr('data-aspect-width'), 10 ),
			maxHieght 	= -1,
			maxTop 		= -1;

		item.addClass('rf-isotope-item');

	// reset
		item.css('min-height', '');
		postMedia.find('.link-and-quote').css('min-height', '');
		item.removeClass('rf-last-item rf-last-row');

	// Brakepoints

		// Permament 1 column
		if ( columnsRate === "one" ) {
			columns = 1;

		// Permament 2 column
		} else if ( columnsRate === "two" ) {
			columns = 2;

			if( bodyWidth < 600 ) {
				columns = 1;
			}

		// Permament 3 column
		} else if ( columnsRate === "three" ) {
			columns = 3;

			if( bodyWidth < 600 ) {
				columns = 1;
			} else if( bodyWidth <= 900 ) {
				columns = 2;
			}

		// Permament 4 column
		} else if ( columnsRate === "four" ) {
			columns = 4;

			if( bodyWidth < 600 ) {
				columns = 1;
			} else if( bodyWidth <= 900 ) {
				columns = 2;
			}

		// or columns width brakepoints
		} else {

			columnsRate = parseInt( columnsRate, 10 );

			// Viewport 600
			if ( bodyWidth < 600 ) {
				columns = 1;

			// Viewport 900
			} else if ( $('#sidebar, #sidebar-top').css('display') === 'none' ) {
				x = ( columnsRate <= 0 ? 1 : columnsRate );
				columns = 1 + x;

			// Viewport 1250
			} else if ( bodyWidth <= 1250 ) {
				x = ( columnsRate <= 0 ? 0 : columnsRate );
				columns = 2 + x;

			// Viewport 1600
			} else if ( bodyWidth <= 1600 ) {
				columns = 3 + columnsRate;

			// Viewport 1950
			} else if ( bodyWidth <= 1950 ) {
				columns = 4 + columnsRate;

			// Viewport 2300
			} else if ( bodyWidth <= 2300 ) {
				columns = 5 + columnsRate;

			// Viewport 2650
			} else if ( bodyWidth <= 2650 ) {
				columns = 6 + columnsRate;

			// Viewport 3000
			} else if ( bodyWidth <= 3000 ) {
				columns = 7 + columnsRate;

			// Viewport 3350
			} else if ( bodyWidth <= 3350 ) {
				columns = 8 + columnsRate;

			// Viewport 3350+
			} else {
				columns = 9 + columnsRate;
			}
		}

	// set item width
		if ( layout !== 'masonry-metro' ) {
			item.outerWidth( Math.floor( contWidth / columns - gutterHorz ) );
		} else {
			$('.'+ page +'-grid-sizer, .'+ page +'-post.post-width1x').outerWidth( Math.floor( contWidth / 3 - gutterHorz ) );
			$('.'+ page +'-post.post-width2x').outerWidth( Math.floor( contWidth / 3 ) * 2  - gutterHorz);
		}

	// set gutters
		if ( layout === 'fitRows' ) {
			item.css('margin-right', gutterHorz + 'px');
		}

		item.css('margin-bottom', gutterVert + 'px');

	// Link & Quote heights
		if( layout === "fitRows" ) {
			postMedia.find('.link-and-quote, video').css('min-height', postMedia.width() * aspectRatio + 'px');
		}

		// add last class
		itemVisible.last().addClass('rf-last-item');

	// add last row & make all post equal height
		itemVisible.each(function ( index ) {

			// define
			var thisHieght = $(this).outerHeight(),
				thisTop = parseInt( $(this).css('top') , 10 );

			if ( ( index + 1 ) % columns === 0 ) {
				$(this).addClass('rf-last-item');
			}

			// determine max height
			if ( thisHieght > maxHieght ) {
				maxHieght = thisHieght;
			}

			// determine last row
			if ( thisTop > maxTop ) {
				maxTop = thisTop;
			}
			
		});

		if ( layout === 'fitRows' ) {
			itemVisible.each(function() {

				if ( parseInt( $(this).css('top') ) === maxTop  ) {
					$(this).addClass('rf-last-row');
				}

				$(this).css('min-height', maxHieght);

			});
		}

	// define masonry 'columnWidth' option
		var columnWidth = contWidth / columns;

	// metro layout - based on 3 columns masonry 
		if ( layout === 'masonry-metro' ) {
			layout = 'masonry';

			if ( page === 'blog' ) {
				columnWidth = '.blog-grid-sizer';
			} else if ( page === 'portfolio' ) {
				columnWidth = '.portfolio-grid-sizer';
			}
			
		}

	// run isotope on Portfolio & Blog
		container.isotope({
			itemSelector: 'article',
		    transitionDuration: '0.6s',
		    hiddenStyle: {
		      transform: 'scale(0.001)'
		    },
		    visibleStyle: {
		      transform: 'scale(1)'
		    },
			layoutMode : layout,
			masonry: {
				comlumnWidth: columnWidth,
				gutter: gutterHorz
			}
		});

		// sidebar equal
		sidebarEqual();

	}

// hide empty blocks
	function hideEmptyBlocks() {

		$('.post-text-wrap').each(function() {

			// show at first
			$(this).show();

			var count = 0;

			$(this).children().not('div[class=clear]').each(function() {
				if ( $(this).css('display') !== 'none' ) {
					count += 1;
				}
			});

			// if current block has visible children
			if ( $(this).children().length === 0 || count < 1 ) {
				$(this).hide();
			}

		});

		$('.media-hovers-inner').each(function() {

			// show at first
			$(this).parent().parent().show();

			var count = 0;

			$(this).children().not('div[class=clear]').each(function() {
				if ( $(this).css('display') !== 'none' ) {
					count += 1;
				}
			});

			// if current block has visible children
			if ( $(this).children().length === 0 || count < 1 ) {
				$(this).parent().parent().hide();
			}

		});

	}

// remove extra -20 margin from vc_row
	$('#portfolio-container, #blog-container').parent('.vc_row').css({
		'margin-left' : '0',
		'margin-right' : '0'
	});

// remove extra padding from read-more
	function readMorePadding() {
		var moreInfo = $('.read-more-wrap, .more-info-wrap');

		if ( moreInfo.siblings('.likes-and-comments:visible').length > 0 && moreInfo.css('float') === 'none' ) {
			moreInfo.css( 'padding-top', '15px' );
		} else {
			moreInfo.css( 'padding-top', '0' );
		}		
	}

	readMorePadding();


// remove hidden meta separators
	function hideMetaSeps() {

		$('.likes-and-comments, .post-meta-info').each(function() {
			$(this).children().not(':hidden').last().find('.meta-sep').hide();
		});

	}

	hideMetaSeps();

// Stretch Portfolio/Blog Container
	function stretchIsotopeContainer( id ) {

		if ( $(id).hasClass('stretch-container') ) {

			$(id).closest('.vc_row').addClass('disable-row-marings').css({
				'left' 	: '-'+ $('.single-content-wrap').css('padding-left'),
				'width' : $('.inner-content-wrap').outerWidth()
			});

		}

	}

// 2nd featured image hover effect
	function secondFeaturedImage() {
		$('.post-media-in-wrap').hover(function() {
			$(this).find('img').first().next().stop().fadeIn();
		}, function() {
			$(this).find('img').first().next().stop().fadeOut();
		});		
	}

// Grayscale effect
	var pPostMedia = $('.portfolio-post .post-media');

	if ( parseInt( pPostMedia.attr('data-grayscale'), 10 ) === 1 ) {

		pPostMedia.find('img').addClass('grayscale');

		if ( parseInt( pPostMedia.attr('data-grayscale-trans'), 10 ) === 1 ) {
			pPostMedia.find('img').addClass('grayscale-fade');
		}

		pPostMedia.hover(function(){
			$(this).find('img').toggleClass('grayscale-off');
		}, function(){
			$(this).find('img').toggleClass('grayscale-off');
		});

	}



/*
***************************************************************
* #Isotope Filters
***************************************************************
*/

	function isotopeFilters( page ) {

		if ( body.hasClass('onepage-menu') ) {
			var currentFilters = ( page === 'blog' ) ? $('#blog-container').prev('.filters') : $('#portfolio-container').prev('.filters');
		} else if ( body.hasClass('archive') && ! body.hasClass('blog') && ! body.hasClass('page-template-portfolio-php') && $('.filters').length > 0 ) {
			if ( page === 'portfolio' ) return;
			var currentFilters = $('.filters');
		} else if ( ! body.hasClass('blog') && ! body.hasClass('page-template-portfolio-php') && $('.filters').length > 0 ) {
			var currentFilters = $('.filters');
		} else {
			if ( body.hasClass('blog') ) {
				if ( page === 'portfolio' ) return;
				if ( sidebar.length > 0 ) {
					var currentFilters = $('.blog-filters .filters');
				} else {
					var currentFilters = $('.blog .filters');
				}
			} else if ( body.hasClass('page-template-portfolio-php') ) {
				if ( page === 'blog' ) return;
				if ( sidebar.length > 0 ) {
					var currentFilters = $('.portfolio-filters .filters');
				} else {
					var currentFilters = $('.page-template-portfolio-php .filters');
				}
			} else {
				return;
			}
		}

		// define variables
		var filterItem 		= currentFilters.find('a'),
			filterItemIcon 	= filterItem.find('i'),
			filterClass 	= filterItemIcon.attr('class');

		// reset
		filterItem.parent().show();

		// add sup count
		filterItem.each(function() {

			if ( $(this).closest('section').hasClass('sid-block') && body.hasClass('single') ) {
				return;
			}
			
			if ( sidebar.length > 0 ) {
				if ( $(this).attr('data-filter') === '*' ) {
					if ( currentFilters.closest('section').attr('class').match('portfolio') ) {
						$(this).find('sup').text( ' '+ $('#portfolio-container').find('article').length );
					} else if ( currentFilters.closest('section').attr('class').match('blog') ) {
						$(this).find('sup').text( ' '+ $('#blog-container').find('article').length );
					}
					
				} else {
					$(this).find('sup').text( ' '+ $( $(this).attr('data-filter') ).length );
				}
			} else {
				if ( $(this).attr('data-filter') === '*' ) {
					$(this).find('sup').text( ' '+ currentFilters.next().find('article').length );
				} else {
					$(this).find('sup').text( ' '+ $( $(this).attr('data-filter') ).length );
				}				
			}
		});

		// isotope filtering
		if ( $('.filters').length > 0 && ! body.hasClass('no-isotope') ) {

			// hide empty filters
			var postFilter 	   = '',
				postClass 	   = '',
				metroGridSizer = '';

			// get all post classes
			$('.'+ page +'-post').each(function() {
				postClass += $(this).attr('class');
			});

			// remove spaces
			postClass = postClass.split(' ').join('');

			filterItem.each(function() {

				// remove dots
				postFilter = $(this).data('filter').replace( '.', '' );

				// add all category classes to metro grid sizer
				metroGridSizer += ' ' + postFilter;

				// if filter doesn't match any of post class - hide it
				if ( postClass.indexOf(postFilter) == -1 && postFilter != '*' ) {

					$(this).parent().hide();

					if ( body.hasClass('single') && $(this).closest('section').hasClass('sid-block') ) {
						$(this).parent().show();
					}
					
				}

			});

			// add all category classes to metro grid sizer
			$('.blog-grid-sizer').attr( 'class', 'blog-grid-sizer' + metroGridSizer.replace('*','') );
			$('.portfolio-grid-sizer').attr( 'class', 'portfolio-grid-sizer' + metroGridSizer.replace('*','') );

			// highlight active item
			if ( typeof filterClass !== 'undefined' ) {
				$('.filters a[data-filter="*"]').find('i').removeClass(filterClass).addClass( filterClass.replace( '-o', '' ) );
			}
			

			// category deeplinking
			if ( body.hasClass('deeplinking') ) {
				var winLocation = window.location.href;
				if ( winLocation.match('#filter:all') ) {
					$('#'+ page +'-container').isotope({ filter: '*' });
				} else if ( winLocation.match('#filter:') ) {
					$('#'+ page +'-container').isotope({ filter: '.'+ winLocation.substr( winLocation.indexOf('#filter:') + 8, winLocation.length ) });
					currentFilters.find('a').removeClass('active-filter-item active-state');
					currentFilters.find('a[data-filter=".'+ winLocation.substr( winLocation.indexOf('#filter:') + 8, winLocation.length ) +'"]').addClass('active-filter-item active-state');
				}
			}

			
			// filter posts
			filterItem.on('click', function( event ) {

				// detect current grid
				var currentGrid = $(this).closest('ul').next().attr('id');

				// active filter item
				filterItem.removeAttr('class');
				$(this).addClass('rf-button active-filter-item active-state');

				// filter active icons - change icon when filter is active
				filterItemIcon.removeAttr('class');
				filterItemIcon.addClass( filterClass );

				$(this).find('i').removeClass(filterClass).addClass( filterClass.replace( '-o', '' ) );

				// get current class
				var currnetFilterClass = $(this).data('filter'),
					currnetFilterClass = currnetFilterClass.replace('.', '');

				// category deeplinking
				if ( body.hasClass('deeplinking') ) {
					if ( body.hasClass('single') && $(this).closest('section').hasClass('sid-block') ) {

						var logoWrap 	= $('#sidebar .logo-wrap'),
							curPageUrl  = logoWrap.attr('data-blog');

						if ( body.hasClass('single-royal_portfolio') ) {
							var curPageUrl = ( logoWrap.attr('data-portfolio') === '' ) ? logoWrap.attr('href') : logoWrap.attr('data-portfolio');
						}
						
						if ( currnetFilterClass === '*' ) {
							window.location.href = curPageUrl +'/#filter:all';
						} else {
							window.location.href = curPageUrl +'/#filter:'+ currnetFilterClass
						}

					} else {

						if ( currnetFilterClass === '*' ) {
							window.location.href = '#filter:all';
						} else {
							window.location.href = '#filter:'+ currnetFilterClass
						}

					}
				}

				// prettyPhoto filtering
				if ( currnetFilterClass === '*' ) {
					$('#'+ currentGrid +' a[rel*="prettyPhoto"]').attr('rel', 'prettyPhoto[all]');
					$('a[rel*="prettyPhoto"]').prettyPhoto();
				} else {
					$('#'+ currentGrid +' .royal_portfolio_cats-'+ currnetFilterClass +' a[rel*="prettyPhoto"]').attr('rel', 'prettyPhoto['+ currnetFilterClass +']');
					$('a[rel*="prettyPhoto"]').prettyPhoto();
				}

				// Top Filters
				if ( currentGrid === 'portfolio-container' ) {
					$('#portfolio-container').isotope({ filter: $(this).data('filter') });
				} else {
					$('#blog-container').isotope({ filter: $(this).data('filter') });
				}

				// Left Filters
				if ( ! body.hasClass('single') ) {
					if ( $(this).closest('section').hasClass('portfolio-filters') ) {
						$('#portfolio-container').isotope({ filter: $(this).data('filter') });
					} else if ( $(this).closest('section').hasClass('blog-filters') ) {
						$('#blog-container').isotope({ filter: $(this).data('filter') });
					}
				}

				setTimeout(function() {
					if ( currentGrid === 'portfolio-container' ) {
						isotopeFn('portfolio');
					} else {
						isotopeFn('blog');
					}
				}, 3000);

				event.preventDefault();
			});

		} else {

			var bodyClass = body.attr('class');

			filterItem.each(function() {

				// detect if it is portfolio or blog page
				var prefix = 'term';

				if ( body.hasClass('blog') || body.hasClass('category') ) {
					prefix = 'category';
				}

				var filtersClass = $(this).data('filter').replace( '.', '-' );

				if ( bodyClass.indexOf( prefix + filtersClass) != -1 ) {
					$(this).addClass('active-filter-item active-state');
				}

			});

		}
	} // end isotopeFilters()


	// sort portfolio categories
	$('.filters').each(function() {

		var dataSort = $(this).data('sort');

		if ( dataSort === '' || typeof dataSort === 'undefined' ) {
			return;
		}

		dataSort = dataSort.split(',');

		for ( var i = 0; i < dataSort.length; i++ ) {
			$(this).append( $(this).find('a[data-filter*="'+ dataSort[i] +'"]').closest('li').remove() );
		}

	});



/*
***************************************************************
* #Social Sharing Icons
***************************************************************
*/
	function socialSharingIcons( post ) {

		// define
		var shareWrap = $( '.'+ post ).find('.social-share-wrap'),
			share 	  = shareWrap.find('.social-share');

			share.hide();

		// hover
		if ( shareWrap.attr('data-open') === 'hover' ) {

			// hide first
			share.hide();

			// open on hover
			shareWrap.hover(function() {
				$(this).find('.social-share').stop().fadeIn();
			}, function() {
				$(this).find('.social-share').stop().fadeOut();
			});

		// click
		} else if ( shareWrap.attr('data-open') === 'click' ) {

			// hide first
			share.hide();

			// hide when mouse is out
			shareWrap.mouseleave(function() {
				$(this).find('.social-share').stop().fadeOut();
			});

			// show on click
			shareWrap.on('click', function() {
				$(this).find('.social-share').stop().fadeIn();
			});

		} else {

			shareWrap.children('i').hide();
			share.show();

		}

	}



/*
***************************************************************
* #FitVids - for responsive videos
***************************************************************
*/

	var blogConainer = $('#blog-container');

	function fitVidsFn() {

		if ( blogConainer.data('layout') === 'fitRows' && ( blogConainer.data('aspect-width') !== '' || blogConainer.data('aspect-height') !== '' ) ) {
			$('.video-media').find('iframe').attr('width', blogConainer.data('aspect-width') ).attr('height', blogConainer.data('aspect-height') );
		}

		$('.featured-media, .video-media').fitVids();		

	}



/*
***************************************************************
* #PrettyPhoto Lightbox
***************************************************************
*/

	// add lightbox to VC Single Image
	var vcImgLightbox = $('.vc_single_image-wrapper').parent('a[href*="wp-content/uploads"]');
	vcImgLightbox.attr('rel', 'prettyPhoto');
	vcImgLightbox.attr('data-title', vcImgLightbox.find('img').attr('alt'));

	// add lightbox to Single Content Image with "Media File"
	var wpImgLightbox = $('img[class*="wp-image"]').parent('a[href*="wp-content/uploads"]');
	wpImgLightbox.attr('rel', 'prettyPhoto');
	wpImgLightbox.attr('data-title', wpImgLightbox.find('img').attr('alt'));

	// add lightbox to Essential Grid
	$('.esg-grid').each(function(){
		var gridID = $(this).attr('id');

		$( '#'+ gridID +' a.esgbox').each(function(){
			$(this).attr('rel', 'prettyPhoto[ess_grid-'+ gridID +']').attr('data-title', $(this).attr('lgtitle'));
		});

	});

	// Run Lightbox
	$('a[rel*="prettyPhoto"]').prettyPhoto();



/*
***************************************************************
* #Royal Before After Image Shortcode
***************************************************************
*/

	$('.royal-ba-img-wrap').each(function() {

		var royalImageWrap 		= $(this),
			royalDividerWrap 	= $(this).find( '.royal-ba-divider-wrap' ),
			royalAfterImgWrap 	= $(this).find( '.royal-after-img-wrap' ),
			royalBeforeImgWrap 	= $(this).find( '.royal-before-img-wrap' );

		// styling
		royalDividerWrap.css('left', royalDividerWrap.data('position'));
		royalDividerWrap.css('background', royalDividerWrap.data('color'));
		$(this).find('.royal-ba-divider-handle').css('border-color', royalDividerWrap.data('color'));
		$(this).find('.royal-ba-divider-handle i').css('color', royalDividerWrap.data('color'));

		// divider hover
		if ( royalDividerWrap.data('move') === 'mousemove' ) {
			royalImageWrap.hover(function(){
				$(this).find( '.royal-ba-divider-wrap' ).css('background', royalDividerWrap.data('hover-color'));
				$(this).find('.royal-ba-divider-handle').css('border-color', royalDividerWrap.data('hover-color'));
				$(this).find('.royal-ba-divider-handle i').css('color', royalDividerWrap.data('hover-color'));
			}, function(){
				$(this).find( '.royal-ba-divider-wrap' ).css('background', royalDividerWrap.data('color'));
				$(this).find('.royal-ba-divider-handle').css('border-color', royalDividerWrap.data('color'));
				$(this).find('.royal-ba-divider-handle i').css('color', royalDividerWrap.data('color'));
			});			
		} else {
			royalImageWrap.hover(function(){
				$(this).find( '.royal-ba-divider-wrap' ).css('background', royalDividerWrap.data('hover-color'));
				$(this).find('.royal-ba-divider-handle').css('border-color', royalDividerWrap.data('hover-color'));
				$(this).find('.royal-ba-divider-handle i').css('color', royalDividerWrap.data('hover-color'));
			}, function(){
				$(this).find( '.royal-ba-divider-wrap' ).css('background', royalDividerWrap.data('color'));
				$(this).find('.royal-ba-divider-handle').css('border-color', royalDividerWrap.data('color'));
				$(this).find('.royal-ba-divider-handle i').css('color', royalDividerWrap.data('color'));
			});
		}


		if ( royalImageWrap.data('transition') === 'default' ) {
			if ( royalDividerWrap.length === 0 ) {
				royalAfterImgWrap.css('width', '0');
			} else {
				royalAfterImgWrap.css('width', royalDividerWrap.data('position'));
			}
		} else if ( royalImageWrap.data('transition') === 'leftslide' ) {
			if ( royalDividerWrap.length === 0 ) {
				royalAfterImgWrap.css({
					'width' : royalImageWrap.outerWidth() +'px',
					'left' : '-100%'
				});
			} else {
				var royalDividerPos = royalDividerWrap.data('position');
				royalAfterImgWrap.css({
					'width' : royalImageWrap.outerWidth() +'px',
					'left' : '-'+ (100 - royalDividerPos.replace('%','')) +'%'
				});			
			}
		} else {
			if ( royalDividerWrap.length === 0 ) {
				royalBeforeImgWrap.css('left', '0');
				royalAfterImgWrap.css('left', '100%');	
			} else {
				var royalDividerPos = royalDividerWrap.data('position');
				royalBeforeImgWrap.css('left', '-'+ (100 - royalDividerPos.replace('%','')) +'%');
				royalAfterImgWrap.css('left', royalDividerWrap.data('position'));			
			}
		}

		if ( royalBeforeImgWrap.find('img').width() < royalImageWrap.width() || $('.royal-before-img-wrap img').width() < royalImageWrap.width() ) {
			royalImageWrap.css('display', 'inline-block');
		}

		// movement
		if ( royalDividerWrap.data('move') === 'mousemove' || royalDividerWrap.length === 0 ) {
			royalImageWrap.on( 'mousemove', function( event ) {
				var overlayWidth = event.pageX - $(this).offset().left;

				if ( royalImageWrap.data('transition') === 'default' ) {
					royalAfterImgWrap.css('width', overlayWidth +'px');
					royalDividerWrap.css('left', overlayWidth +'px');
				} else if ( royalImageWrap.data('transition') === 'leftslide' ) {
					royalAfterImgWrap.css('left', '-'+ (royalImageWrap.outerWidth() - overlayWidth) +'px');
					royalDividerWrap.css('left', overlayWidth +'px');
				} else {
					royalBeforeImgWrap.css('left', '-'+ (royalImageWrap.outerWidth() - overlayWidth) +'px');
					royalAfterImgWrap.css('left', overlayWidth +'px');
					royalDividerWrap.css('left', overlayWidth +'px');
				}

			});		
		} else {
			royalDividerWrap.draggable({
				containment: royalImageWrap,
				axis: 'x',
				scroll: false,
				drag: function(e) {
					if ( royalImageWrap.data('transition') === 'default' ) {
						royalAfterImgWrap.css('width', royalDividerWrap.css('left'));
					} else if ( royalImageWrap.data('transition') === 'leftslide' ) {
						var royalDraggablePos = royalDividerWrap.css('left');
						royalAfterImgWrap.css('left', '-'+ (royalImageWrap.outerWidth() - royalDraggablePos.replace('px', '')) +'px');
						royalDividerWrap.css('left', royalDraggablePos);
					} else {
						var royalDraggablePos = royalDividerWrap.css('left');
						royalBeforeImgWrap.css('left', '-'+ (royalImageWrap.outerWidth() - royalDraggablePos.replace('px', '')) +'px');
						royalAfterImgWrap.css('left', royalDraggablePos);
					}
				}
			});
		}

	}); // end each



/*
***************************************************************
* #Load More Posts
***************************************************************
*/


	function loadMorePosts( page ) {

		var currentButton = $('#'+ page +'-container').next('.load-more-wrap');

		$('#'+ page +'-container').infinitescroll({
			navSelector  : currentButton,
			nextSelector : currentButton.find('a'),
			itemSelector : '.'+ page +'-post',
			behavior	 : $('.pagination-wrap').data('behaviour'),
			loading: {
				finishedMsg: '',
				msgText  : '<div class="infscr-inner"><div class="infscr-center">'+ $('#'+ page +'-container').next('.load-more-wrap').data('more-text') +'</div></div>'
			}
		}, function(newElements) {

			var ne = $(newElements).wrapInner('');
			ne.children().css('opacity', '0');

			var pageNum = currentButton.find('a').attr('href');
				pageNum = pageNum.replace( 'paged='+ pageNum.substr(pageNum.length - 1), 'paged='+ (parseInt(pageNum.substr(pageNum.length - 1), 10) + 1) );
				pageNum = pageNum.replace( 'page/'+ pageNum.substr(pageNum.length - 2), 'page/'+ (parseInt(pageNum.substr(pageNum.length - 2), 10) + 1) );

			if ( currentButton.data('behaviour') === 'facebook' ) {
				currentButton.find('a').attr('href', pageNum);
			}

			$(newElements).waitForImages({
			    finished: function() {

					// append new elements to the DOM
					$('#'+ page +'-container').isotope('appended', newElements).isotope('reloadItems');

					// remove loading icon
					$('.load-more-wrap').find('i').remove();

					// reinitialize cycle slideshow
					$( '.cycle-slideshow' ).cycle();

					// run functions for correct adjustments
					hideEmptyBlocks();
					isotopeFilters( page );
					socialSharingIcons( page + '-post' );
					hideMetaSeps();
					fitVidsFn();
					secondFeaturedImage();
					readMorePadding();

					isotopeFn( page );

					setTimeout(function() {
						isotopeFn( page );
					}, 300 );

					setTimeout(function() {
						$('.'+ page +'-post-inner').css({
							'opacity' : '1',
							'transition' : 'opacity 0.8s ease-out',
							'-webkit-transition' : 'opacity 0.8s ease-out'
						});
					}, 800 );

					// hide loader
					if ( currentButton.data('behaviour') === 'facebook' ) {
						if ( parseInt(currentButton.find('div').attr('data-max'), 10) < parseInt(pageNum.substr(pageNum.length - 1), 10) ) {
							$('#infscr-loading').fadeOut(500);
							setTimeout(function() {
								$('#infscr-loading').css('visibility', 'hidden');
							}, 600 );				
						}
					}

					// isotope for adjustment
					setTimeout(function() {
						isotopeFn( page );
					}, 1500 );

					$('a[rel*="prettyPhoto"]').prettyPhoto();

			    },
			    waitForAll: true
			});

		}); // end newElements

	} // end loadMorePosts()

	loadMorePosts('blog');
	loadMorePosts('portfolio');

	// load more button clicker function
	function loadMoreButton( selector ) {

		var pageCount = 1,
			maxPages  = parseInt( selector.find('a').parent().data('max'), 10 );

		selector.find('a').on('click', function() {

			// append loading icon
			if ( $(this).find('i').length === 0 ) {
				$(this).prepend('<i class="fa fa-'+ $(this).parent().attr('data-load-icon') +' fa-spin"></i>');
				pageCount++;
			}

			if ( maxPages === pageCount ) {
				selector.delay(1000).fadeOut(500);
			}

			// prevent anchor to go to next page
			return false;

		});

	}

	loadMoreButton($('#portfolio-container').next('.load-more-wrap'));
	loadMoreButton($('#blog-container').next('.load-more-wrap'));



/*
***************************************************************
* #Run Methods & Functions
***************************************************************
*/

// Sidebar equal to Content 
	sidebarEqual();

// Fixed Sidebar Height
	fixedSidebarHeight();

// Fixed Sidebar Top Width
	sidebarTopWidth();

// Fixed Sidebar Top Height
	sidebarTopHeight();

// Top Nav Search
	topNavSearch();

// Copyright & Socials on Mobile Devices
	mobileCopyAndSoc();

// link and quote height
	linkAndQuoteHeight();

// second featured image
	secondFeaturedImage();

// equal project info
	projectInfoEqual(); 

// sticky project info
	projectInfoSticky();

// Stretch Portfolio/Blog Container
	stretchIsotopeContainer('#portfolio-container');
	stretchIsotopeContainer('#blog-container');

// run isotope functions
	isotopeFn('portfolio');
	isotopeFn('blog');

	setTimeout(function() {
		isotopeFn('portfolio');
		isotopeFn('blog');
	}, 500 );

// isotope filters
	isotopeFilters('blog');
	isotopeFilters('portfolio');

// hide empty blocks
	hideEmptyBlocks();

// FitVids - for responsive videos
	fitVidsFn();

// Social sharing icons on posts 
	socialSharingIcons('blog-post');
	socialSharingIcons('portfolio-post');

// Fix WPML in Footer
	if ( $('#lang_sel_footer').length > 0 ) {
		$('#page-wrap').append($('#lang_sel_footer').remove());
		$('#lang_sel_footer').css('visibility', 'visible');
	}


/*
***************************************************************
* #Window Events
***************************************************************
*/

// Window load event
	$(window).on( 'load', function() {

		setTimeout(function() {

			// height fixes
			fixedSidebarHeight();
			sidebarTopWidth();
			sidebarTopHeight();
			sidebarEqual();
			topNavSearch();
			linkAndQuoteHeight();
			projectInfoEqual();

			// fade in main content
			mainWrap.css( 'opacity', '1' );

			// small fix for lightbox duplication in cycle2 plugin
			$('.cycle-sentinel a').removeAttr('rel');

			// slider loading
			$('.gallery-slide').show();

			// run isotope function
			isotopeFn('portfolio');
			isotopeFn('blog');

			// OnePage Scroll
			onePageScrolling( window.location.href.split('/') );

		}, 300);

	});

// Window resize event 2x times for small bug fixes
	$(window).resize(function() {

		sidebarTopWidth();
		projectInfoEqual();
		topNavSearch();

		// stretch containers
		stretchIsotopeContainer('#portfolio-container');
		stretchIsotopeContainer('#blog-container');

		// small timeout for correct browser window resize
		setTimeout(function() {

			mobileCopyAndSoc();
			fixedSidebarHeight();
			sidebarTopWidth();
			sidebarTopHeight();
			sidebarEqual();
			
			// run isotope function
			isotopeFn('portfolio');
			isotopeFn('blog');

		}, 100);

	});

	$(window).resize(function() {

		// small timeout for correct browser window resize
		setTimeout(function() {

			// run isotope function
			isotopeFn('portfolio');
			isotopeFn('blog');

		}, 100);

	});



}); // end document ready