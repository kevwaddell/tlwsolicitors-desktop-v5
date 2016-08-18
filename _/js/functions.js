(function($){
	//var previousScroll = 0;
	var tagInterval;
	var current_section = "#top";
	var current_section_id;
	var ot_target = 0;
	var ot_wrapper_pos = parseInt($('#our-team-wrapper-inner').css('left'));
	var ot_outer_w = $('.our-team-wrapper').outerWidth();
	var ot_inner_w = $('#our-team-wrapper-inner').outerWidth();
	
	var event_type = 'click';	

	
	function printPage() {
    window.print();

    //workaround for Chrome bug - https://code.google.com/p/chromium/issues/detail?id=141633
    if (window.stop) {
        location.reload(); //triggering unload (e.g. reloading the page) makes the print dialog appear
        window.stop(); //immediately stop reloading
    }
    return false;
	}
	
	function isScrolledIntoView(elem) {
	    var $elem = $(elem);
	    var $window = $(window);

	    var docViewTop = $window.scrollTop();
	    var docViewBottom = docViewTop + ($window.height() / 2);
	
	    var elemTop = $elem.offset().top;
	    var elemBottom = elemTop + $elem.height();
	    
	    if (docViewTop === 0) {
		return false;  
	    } else {
		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));   
	    }
	}
	
		
	$(window).on("resize", function(){
	ot_outer_w = $('.our-team-wrapper').outerWidth();
	});
		
	$(document).ready(function (){
	
	var section_targets = $('a.section-target');
	
	if (section_targets.length > 0) {
		section_targets.each(function(index, elem){
		
			if ( isScrolledIntoView($(elem)) ) {
			current_section_id = $(elem).attr('id');
			current_section = "#"+current_section_id;
			//console.log(current_section);
			}	
			
		});
	}

	 $(".selectpicker").selectpicker({
      style: 'btn-lg hp-select',
      size: 5
	  });
	  
	 $('.selectpicker').find('select').selectpicker({
		style: 'btn btn-group btn-default', 
		width: '100%'
	});
	
	//Scroll to button
	
	$('body').on(event_type,'a.scroll-to', function(){
		
		var id = $(this).attr('href');

		$('html, body').animate({scrollTop: ($("a"+id).offset().top)}, 500);	
		
		return false;
		
	});
	
	/* 	MAIN TOP NAVIGATION FUNCTIONS 
		Button functions to open top navigation and 
		control the internal menu functions as well
		as close the menu.
	*/
	
	$('body').on(event_type,'button#nav-btn', function(){
		
		var inner_h = $('#top-nav').find('.nav-wrapper').outerHeight();
		
		if ( $('#top-nav').hasClass('nav-closed') ) {
			
			$('#quick-links-sml').animate({left: '-70px'}, 100);
			
			$('#top-nav').animate({height: inner_h+"px"}, 500, function(){
			
				$(this).toggleClass('nav-closed nav-open').removeAttr('style');	
				
			});
		} 
		
		if ( $('#top-nav').hasClass('nav-open') ) {
			
			$('#top-nav').animate({height: "0px"}, 500, function(){
			
				$(this).toggleClass('nav-closed nav-open').removeAttr('style');	
				$('#quick-links-sml').animate({left: '20px'}, 400);
				
			});
			
		} 
		
		return false;
		
	});
	
	$('#top-nav').on(event_type,'button#close-nav', function(){
		
		$('#top-nav').animate({height: "0px"}, 500, function(){
			
			$(this).toggleClass('nav-open nav-closed').removeAttr('style');	
			$('li.with-sub-nav').removeClass('sub-open').addClass('sub-closed');
			$('#quick-links-sml').animate({left: '20px'}, 400);
			
		});
		
		return false;
		
	});
	
	
	$('#top-nav').on('click', "li.with-sub-nav > a", function(){
		var parent = $(this).parent();
		var siblings = $(parent).siblings();
		
		$(parent).siblings().removeClass('sub-open').addClass('sub-closed');
		
		if ($(siblings).find('.sub-open').length > 0) {
		$(siblings).find('.sub-open').removeClass('sub-open').addClass('sub-closed');		
		}
		
		//console.log($(siblings).find('.sub-open').length);
		
		$(parent).toggleClass('sub-open sub-closed');

	return false;	
	});
		
	/* 	HEADER SEARCH BUTTON 
		Button functions for search pop up menu
	*/
	
	$('body').on(event_type,'button#search-btn', function(){
	
		if ( $('#search-pop-up').hasClass('off') ) {
			
			$('#search-pop-up').removeClass('off').addClass('on');
		} 
		
		return false;
		
	});
	
	$('body').on(event_type,'button#close-search', function(){
	
		if ( $('#search-pop-up').hasClass('on') ) {
			$('#search-pop-up').removeClass('on').addClass('turn-off');
			
			$('.turn-off').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
				$(this).removeClass('turn-off').addClass('off');	
				
			});

		} 
		
		return false;
		
	});
	
	/* POP UP LOCATION MAP 
	Button functions for location map pop up
	*/
	
	$('body').on(event_type,'li.office-location-link a', function(){
	
		$('#office-location-pop-up').removeClass('off').addClass('turn-on');
		
		$('.turn-on').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	
			$(this).removeClass('turn-on').addClass('on');	
			
		});
		
		//location_map_init();
		
		return false;
		
	});
	$('body').on(event_type,'button#close-office-location', function(){
	
		$('#office-location-pop-up').removeClass('on').addClass('turn-off');
		
		$('.turn-off').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	
			$(this).removeClass('turn-off').addClass('off');	
			
		});
		
		return false;
		
	});
	
	//-------------------------------
	
		
	 /* SLIM SCROLL AREAS 
	Adds new styled scroll bars to media feeds   
   */
   	
	$('.feed-wrap').slimScroll({
        height: '300px'
    });
    
    /* POST CONTINUE READING BUTTONS
	   Functions for the read more button which reveals more
	   content it also has a close function as well. 
    */
    
	$('body').on('click','button#continue-read-btn', function(){
		
		var inner_h = $('#content-extra-inner').outerHeight();
			
		$('button#continue-read-btn').addClass('hidden');
		
		$('html, body').animate({scrollTop: ($('#content-extra-inner').offset().top - 20)}, 500);
		
		$('#content-extra').animate({height: inner_h+"px"}, 500, function(){
			$('#content-extra').removeClass('closed').addClass('open').removeAttr('style');
		});

		return false;
		
	});
	
	$('body').on('click','button#close-content-extra-btn', function(){
		
		$('button#continue-read-btn').removeClass('hidden');
		
		$('html, body').animate({scrollTop: ($('h1').offset().top - 200)}, 500);
			
		$('#content-extra').animate({height: "0px"}, 500, function(){
			$('#content-extra').removeClass('open').addClass('closed').removeAttr('style');	
		});	
		
		return false;
		
	});

     /* TOOLKIT SCROLLER 
	Adds new styled scroll bars to media feeds   
   */
   
   $('.scrollable-txt').slimScroll({
        height: '470px',
        size: '15px',
        position: 'left',
        alwaysVisible: true,
        railVisible: true,
        railColor: '#D7D7D7',
        color: '#4b4b4b'
    });
    
    /* ACCESSABILITY FUNCTIONS 
	   Button actions to control the text size
    */
	
	$('body').on(event_type,'#txt-only-content button.access-btn', function(){
    
    	var txt_size = $(this).attr('data-role');
    	
    	$(this).siblings().removeClass('active');
    	$(this).addClass('active');
    	
    	$('.main-txt').removeClass('txt-md txt-lg txt-sm').addClass(txt_size);
	     	     			
		return false;
		
	});	
		
	/* XMAS Pop up Function
	  This function controls the Xmas pop up box
    */
    
    	var xmasBox = function(){

			if ($('#xmas-popup-wrap').length === 1 && $('#xmas-popup-wrap').hasClass('pop-up-inactive')) {
				
				$('#xmas-popup-btn-wrap').removeClass('pop-up-inactive').addClass('pop-up-active');
		
				$('#xmas-popup-wrap').fadeIn('slow', function(){
				
					$('.xmas-popup-inner').removeClass('hidden').addClass('animated slideInUp');
				
				});
			
			}
    
		};

    	//Transition end actions
	    $('.xmas-popup-inner').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			
			if ($(this).hasClass('bounceOutDown')) {
			 $('#xmas-popup-wrap').fadeOut('fast').removeClass('pop-up-active').addClass('pop-up-inactive');	
			 $('#xmas-popup-btn-wrap').removeClass('pop-up-active').addClass('pop-up-inactive');
			 $(this).removeClass('animated bounceOutDown').addClass('hidden');
			}
		});
		
		//Button actions
		
		$('body').on(event_type,'button#xmas-popup-btn-open', function(){
	    	
	    	xmasBox();    			
			return false;
			
		});
	
	    
	    $('body').on(event_type,'button#close-xmas-popup', function(){
		    
		   $('.xmas-popup-inner').removeClass('slideInUp').addClass('bounceOutDown');   
	    	      			
			return false;
			
		});
		
		
		/* TOOLKIT SLIDER NAVIGATION 
			Functions for the toolkit buttons to 
			move to next slide.	
		*/
		
		$('body').on(event_type, '.tk-slider-nav a', function(){
			
			$(this).parent().siblings().removeClass('active');
			$(this).parent().addClass('active');

			
			var window_offset = $(window).scrollTop();
			var slides_offset = $('#toolkit-slides').offset().top - 110;
			var slide_id = $(this).attr('href');
			var current_slide = $('.tk-slide-active').attr('id');
			var id_split = slide_id.split('#');
			$('#'+current_slide).find('.scrollable-txt').slimScroll({scrollTo: '0px', start: 'top'});
			$('.slimScrollBar').animate({top: '0px'}, 500);
			
			$('.tk-slides-inner').removeClass(current_slide+"-active").addClass(id_split[1]+"-active");
			$('#'+current_slide).removeClass('tk-slide-active');
			$(slide_id).addClass('tk-slide-active');
			
			if (window_offset > slides_offset || window_offset < slides_offset) {
			$('html, body').animate({scrollTop: slides_offset }, 500);
			//console.log(window_offset);	
			}
			
			//console.log(current_slide);	

			return false;
			
		});
		
		/* PAGE TOOLS BTNS */
		
		$('body').on(event_type, 'button#print-pg-btn', function(){
			printPage();
		});
		
		/* TEXT ONLY FUNCTION */
		
		$('body').on(event_type, 'button#txt-only-btn', function(){
			
			var main_txt = $('.content-section').find('.main-txt');
			var title_txt = $('.banner-title .container').text();

			var txt_copy = $(main_txt).clone();
			var scroller_h = $('#txt-only-content').innerHeight() - 170;
			
			if (title_txt) {
			var title_copy = '<div class="title-header">'+ title_txt +'</div>';	
			$(title_copy).appendTo('#txt-only-wrapper');
			}
			
			$(txt_copy).appendTo('#txt-only-wrapper').slimScroll({height: scroller_h+'px'});
			
			$('#txt-only-wrapper').fadeIn('fast');
			$('body').addClass('txt-only-open');
			
			$('#txt-only-content').removeClass('closed').addClass('open');
			
			return false;
		});
		
		$('body').on(event_type, 'button#close-txt-only-btn', function(){
			
			$('#txt-only-wrapper').fadeOut('fast').empty();
			
			$('#txt-only-content').removeClass('open').addClass('closed');
			
			$('body').removeClass('txt-only-open');
			
			return false;
		});
		
		/* PAGE BANNER TAG SCROLLER */
		function startTagInterval() {
		tagInterval = setInterval(changeTag, 7000);
		}
	
		function changeTag() {
			
			var currentTag = $('.tag-scroller').find('.active');
			var nextTag = $(currentTag).next();
			
			
				if ($(nextTag).length === 0) {
				nextTag = $('.tag-scroller-txt').eq(0);	
				}
				
			$(currentTag).fadeToggle(500).removeClass('active');
			$(nextTag).fadeToggle(1000).addClass('active');
	
			//console.log(nextTag);
		}
		
		startTagInterval();
		
		/* PAGE FEEDBACK SCROLLER */
		function startFeedbackInterval() {
		tagInterval = setInterval(changeQuote, 7000);
		}
		
		function changeQuote() {
			
			var currentQuote = $('.feedback-section-inner').find('.item.active');
			var nextQuote = $(currentQuote).next();
			
			if ($(nextQuote).length === 0) {
			nextQuote = $('.feedback-section-inner').find('.item').eq(0);	
			}
			
			$(currentQuote).animate({left: '-100%'}, 500, function(){
				
				$(this).removeClass('active').css('left', '100%');
				
			});
			
			$(nextQuote).animate({left: '0%'}, 500, function(){
				
				$(this).addClass('active');
				
			});
			
			//console.log(nextTag);
		}
		
		if ($('.feedback-section-wrapper').length === 1) {
		startFeedbackInterval();
		}
		
		/* BANNER SECTION SCROLL DOWN BUTTON */
		
		$('body').on(event_type, 'button#scroll-down-btn', function(){
			var next = $(this).parent().next().find('a.section-target');
			var hash = $(next).attr('id');
    		var scrollTarget = $('#'+hash).offset().top - 40;
    		if (hash === 'service-info-txt' || hash === 'article-txt') {
	    	scrollTarget = $('#'+hash).offset().top - 4;	
    		}
    		current_section = '#'+hash;
    		
    		$('html, body').animate({ scrollTop: scrollTarget }, 500);
    		
			//console.log(next);
			
			return false;
		});
		
		/* SCROLL DOWN BUTTON 
		In the intro section on the home page
		 */
		$('body').on(event_type, 'button#intro-scroll-down-btn', function(){
			var next = $(this).parents('article.content-section').next().find('a.section-target');
			var hash = $(next).attr('id');
    		var scrollTarget = $('#'+hash).offset().top - 40;
    		current_section = '#'+hash;
    		
    		$('html, body').animate({ scrollTop: scrollTarget }, 500);
    		
			//console.log(next);
			
			return false;
		});
		
		/* QUICK LINKS BUTTONS */
		$('body').on(event_type,'button#quick-links-btn-show', function(){
    	
    		$('#quick-links').toggleClass('open closed');
    		     	     			
			return false;
		
		});
		
		$('body').on(event_type,'button#quick-links-close', function(){
    	
    		$('#quick-links').toggleClass('open closed');
    		     	     			
			return false;
		
		});
		
		$('body').on(event_type,'.ql-section-links a', function(){
    		 
    		var hash = $(this).attr('href');
    		var scrollTarget = $(hash).offset().top - 40;
    		
    		current_section = hash;
    		
    		if (current_section === "#toolkit-slides") {
				scrollTarget -= 60;	
			}
					
			if (current_section === "#service-info-txt" || current_section === "#article-txt") {
				scrollTarget = $(hash).offset().top - 4;
			}
				
			$(this).siblings().removeClass('active');
			$(this).addClass('active');
    		//console.log(hash);
    		 
    		$('html, body').animate({ scrollTop: scrollTarget }, 300);	   
    		  			
			return false;
		
		});
		
		$('body').on(event_type,'button#quick-links-2-top', function(){
	
		$('html, body').animate({ scrollTop: 0 }, 500);

		return false;
		
		});
		
		$('body').on(event_type,'button#quick-links-btn-up', function() {
			
			if (current_section !== "#top") {
				var prev_section = $(current_section).parent().prev();
				
				if ($(prev_section).find('a.section-target')) {
					
					var scrollTarget = $(prev_section).offset().top - 40;
				
					if ($(prev_section).hasClass('toolkit-slider')) {
					scrollTarget -= 60;	
					}
    			
					if ($(prev_section).hasClass('content-section')) {
					scrollTarget = $(prev_section).offset().top;
					}
				
					$('html, body').animate({ scrollTop: scrollTarget }, 300);
						
				} else {
					$('html, body').animate({ scrollTop: 0 }, 300);	
					current_section = "#top";	
				}
			 
			}

		return false;
		
		});
		
		$('body').on(event_type,'button#quick-links-btn-dwn', function(){
		var next_section;
		var scrollTarget;
			
			if (current_section !== "#top") {
				next_section = $(current_section).parent().next();
				
				if ($(next_section).find('a.section-target')) {
					
					scrollTarget = $(next_section).offset().top - 40;
					$('html, body').animate({ scrollTop: scrollTarget }, 300);		
				}
			 
			} else {

				next_section = $(section_targets[0]).parent();
				
				if ($(next_section).find('a.section-target')) {
				
				scrollTarget = $(next_section).offset().top - 40;
				
					if ($(next_section).hasClass('content-section')) {
					scrollTarget = $(next_section).offset().top;
					}
					
				$('html, body').animate({ scrollTop: scrollTarget }, 300);		
				}
			}
			
			current_section = next_section;

		return false;
		
		});

		/* SCROLL TO SECTION BUTTON */
		
		$('body').on(event_type,'a.jump-2-link', function(){
			
			//console.log($(this));
    		 
    		var hash = $(this).attr('href');
    		var scrollTarget = $(hash).offset().top - 40;
    		
    		current_section = hash;
    		 
    		$('html, body').animate({ scrollTop: scrollTarget }, 500);	   
    		  			
			return false;
		
		});
		
		/*
		OUR TEAM FUNCTIONS
		Button to show profile biog.
		Team section scrolling functions
		*/
		
		$('.team-profile').on(event_type, 'button.profile-info-btn', function(){
			
			$(this).parents('.team-profile').siblings().find('.profile-txt').removeClass('txt-view').addClass('txt-hide');
			
			$(this).parent().toggleClass('txt-hide txt-view');
			
			return false;
		});
		
		function teamScroll(dir) {
			var direction = dir;
			var move = Math.abs(ot_outer_w / 4);
			
			if (direction === 'end') {
			ot_target = (ot_outer_w - ot_inner_w);
			
				$('#scroll-left-btn').removeClass('disabled');
				$('#scroll-start-btn').removeClass('disabled');
				$('#scroll-right-btn').addClass('disabled');
				$('#scroll-end-btn').addClass('disabled');	
				
				$('#our-team-wrapper-inner').animate({left: ot_target + "px"}, 500, function(){
				ot_wrapper_pos = parseInt($('#our-team-wrapper-inner').css('left'));		
				});
			}
						
			if (direction === 'left') {
			ot_target = (ot_wrapper_pos - move);
			
				if ($('#scroll-start-btn').hasClass('disabled') && $('#scroll-left-btn').hasClass('disabled')) {
					$('#scroll-left-btn').removeClass('disabled');
					$('#scroll-start-btn').removeClass('disabled');	
				}
				
				if ( Math.abs(ot_target) > ( ot_inner_w - ot_outer_w ) ) {
				ot_target = Math.round( ot_outer_w - ot_inner_w );	
				$('#scroll-right-btn').addClass('disabled');
				$('#scroll-end-btn').addClass('disabled');
				}
			
				$('#our-team-wrapper-inner').animate({left: ot_target + "px"}, 500, function(){
				ot_wrapper_pos = parseInt($('#our-team-wrapper-inner').css('left'));	
				});
			}
			
			if (direction === 'right') {
			ot_target = (ot_wrapper_pos + move);
			
				if ($('#scroll-end-btn').hasClass('disabled') && $('#scroll-right-btn').hasClass('disabled')) {
					$('#scroll-right-btn').removeClass('disabled');
					$('#scroll-end-btn').removeClass('disabled');	
				}
				
				if ( ot_target >= 0 ) {
					ot_target = 0;	
					$('#scroll-left-btn').addClass('disabled');
					$('#scroll-start-btn').addClass('disabled');
				}
			
				$('#our-team-wrapper-inner').animate({left: ot_target + "px"}, 500, function(){
					ot_wrapper_pos = parseInt($('#our-team-wrapper-inner').css('left'));		
				});
			}
			
			if (direction === 'start') {
			ot_target = 0;
			
				$('#scroll-left-btn').addClass('disabled');
				$('#scroll-start-btn').addClass('disabled');
				$('#scroll-right-btn').removeClass('disabled');
				$('#scroll-end-btn').removeClass('disabled');	
			
				$('#our-team-wrapper-inner').animate({left: ot_target + "px"}, 500, function(){
					ot_wrapper_pos = parseInt($('#our-team-wrapper-inner').css('left'));		
				});
			}
		}
		
		$('.scroll-btns').on(event_type, 'button.btn', function(){
			
			var id = $(this).attr('id');
			
			if (!$(this).hasClass('disabled')) {
				
				if ($('.team-profile').find('.profile-txt').hasClass('txt-view')) {
					$('.team-profile').find('.profile-txt').removeClass('txt-view').addClass('txt-hide');
				}
			
				if (id === 'scroll-start-btn') {
					teamScroll("start");
				}
				
				if (id === 'scroll-left-btn') {
					teamScroll("right");
				}
				
				if (id === 'scroll-right-btn') {
					teamScroll("left");	
				}
				
				if (id === 'scroll-end-btn') {	
					teamScroll("end");
				}
			
			}

			return false;
		});
		
		
	});

	/* END DOC READY FUNCTION */
	
	$(window).load(function(){

		
		if ($('a#call-2-action-radio').length === 1) {
			$('#call-2-action-radio').removeAttr('disabled');
			$('i.fa-spinner').hide();
		}
		
		if ($('body').hasClass('loading') && $('#site-loader').length === 1) {
			$('body').removeClass('loading').addClass('loaded');	
		
			$('#site-loader').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				$(this).hide();	
			});

		}
		
		if ($('.scroll-sidebar').length === 1) {
		
			$('.sidebar').hcSticky({
			top: 20,
			bottom: 0,
			stickTo: '.content',
			followScroll: false
			});
		}

	});
	
	$(window).scroll(function(){

		var scroll = $(window).scrollTop();
		var h = $(window).height();
		var section_targets = $('a.section-target');
		var current_section_id;
		
		if (scroll <= (h / 2)) {
		current_section = "#top";
		}
		
		if (section_targets.length > 0) {
			section_targets.each(function(index, elem){
			
				if ( isScrolledIntoView($(elem)) ) {
				current_section_id = $(elem).attr('id');
				current_section = "#"+current_section_id;
				$('a[href='+current_section+']').siblings().removeClass('active');
				$('a[href='+current_section+']').addClass('active');
				return false;
				} else {
				current_section = "#top";	
				$('.ql-section-links a').removeClass('active');
				}	
				
			});
		}
		
	});
	
	
})(window.jQuery);