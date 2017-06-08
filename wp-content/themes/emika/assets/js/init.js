//jQuery code
jQuery(document).ready(function($) { 

  'use strict';

  if ($(window).width() >= 768) {
		initBootstrapHoverDropdown();
	}

	$('.post-thumb img').load(function(){
		initMasonry();
	});
	initMasonry();

	if ($('li.menu-item').hasClass('search-btn')) {
		initSearchBlock();
	}

	if ($('div').is('#wpadminbar')) {
		$('.widget-area').addClass('widget-area-margin');
		$('.overlay-close').addClass('overlay-close-margin');
	}

  initParallax();
  initScroll();
  initSocialBtn();

	// Dropdown header menu
	function initBootstrapHoverDropdown() {
		$('.bs-dropdown').dropdownHover().dropdown();
	}

	// Init Masonry
	function initMasonry() {
		$('#grid').masonry({
			itemSelector: '.item',
			percentPosition: true,
			singleMode: true,
			isResizable: true,
			isAnimated: true,
			animationOptions: { 
				queue: false, 
				duration: 500 
			}
		});
	}

	// Init Parallax
	function initParallax() {
		$('.header-parallax').parallax("50%", 0.4);
		$('.page-header-parallax').parallax("50%", 0.4);
	}

	// Search
	function initSearchBlock() {
		var triggerBttn = document.querySelector('li.search-btn'),
			overlay = document.querySelector( 'div.overlay-search' ),
			closeBttn = overlay.querySelector( 'button.overlay-close' ),
			transEndEventNames = {
				'WebkitTransition': 'webkitTransitionEnd',
				'MozTransition': 'transitionend',
				'OTransition': 'oTransitionEnd',
				'msTransition': 'MSTransitionEnd',
				'transition': 'transitionend'
			},
			transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
			support = { transitions : Modernizr.csstransitions };

		function toggleOverlay() {
			if( classie.has( overlay, 'open' ) ) {
				classie.remove( overlay, 'open' );
				classie.add( overlay, 'close' );
				var onEndTransitionFn = function( ev ) {
					if( support.transitions ) {
						if( ev.propertyName !== 'visibility' ) return;
						this.removeEventListener( transEndEventName, onEndTransitionFn );
					}
					classie.remove( overlay, 'close' );
				};
				if( support.transitions ) {
					overlay.addEventListener( transEndEventName, onEndTransitionFn );
				}
				else {
					onEndTransitionFn();
				}
			}
			else if( !classie.has( overlay, 'close' ) ) {
				classie.add( overlay, 'open' );
			}
		}

		triggerBttn.addEventListener( 'click', toggleOverlay );
		closeBttn.addEventListener( 'click', toggleOverlay );
	}

	// Init Scroll
	function initScroll() {
		$('.nano').nanoScroller({
			preventPageScrolling: true
		});
	}

	// Share buttons in post
	function initSocialBtn() {  
		$(window).scroll(function(){
			if ( $(this).scrollTop() > 200) {
				$("#social-btn").removeClass("hidden-sb").addClass("visible-sb");
			} 
			else if($(this).scrollTop() <= 200) {
				$("#social-btn").removeClass("visible-sb").addClass("hidden-sb");
			}
		});
	}

});