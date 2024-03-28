var a = 'active';


// no skroll

var block = $('<div>').css({'height':'50px','width':'50px'}),
	indicator = $('<div>').css({'height':'200px'});

$('body').append(block.append(indicator));
var w1 = $('div', block).innerWidth();    
block.css('overflow-y', 'scroll');
var w2 = $('div', block).innerWidth();
$(block).remove();

var scrollbar = w1 - w2;

$(':root').css('--scroll', scrollbar + 'px');



// Header and button up

$(window).scroll(function () {
	if ($(this).scrollTop() >= 20) {
		$('.header').addClass(a)
	} else {
		$('.header').removeClass(a)
	}

	if ($(this).scrollTop() >= $('.main').height()) {
		$('.up').addClass(a)
	} else {
		$('.up').removeClass(a)
	}	
})



// Media

media()
$(window).resize(media);

function media() {
	var w = $(window).width();

	if (w <= 900) {
		$('#nav-desktop > *').detach().prependTo('#nav-mobile');
		$('#btn_sign_in-desktop > *').detach().prependTo('#btn_sign_in-mobile');
		$('#btn_sign_up-desktop > *').detach().prependTo('#btn_sign_up-mobile');
	} else {
		$('#nav-mobile > *').detach().prependTo('#nav-desktop');
		$('#btn_sign_in-mobile > *').detach().prependTo('#btn_sign_in-desktop');
		$('#btn_sign_up-mobile > *').detach().prependTo('#btn_sign_up-desktop');
	}

	$(':root').css('--header', $('.header').outerHeight() + 'px');
};




// Slider

if ($('.reviews_slider').length) {
	$('.reviews_slider').slick({
		arrows: true,
		dots: true,
		infinite: true,
		autoplay: false,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					speed: 0
				}
			}
		]
	});
}



// Slow roll to the anchor

function scroll_to(e) {
	if ($(e).length != 0) {
		$('html, body').animate({
			scrollTop: $(e).offset().top
		}, 500);									//Время за которое происходит скролл
	}
}


// Nav scroll

var lastId,
	topMenu = $('.header_nav'),
	topMenuHeight = $('.header').outerHeight(),
	menuItems = topMenu.find('a'),
	scrollItems = menuItems.map(function(){
		var item = $($(this).attr('href'));
		if (item.length) { 
			return item; 
		}
	});

	menuItems.click(function(e){
	  var 	href = $(this).attr('href'),
			offsetTop = href === '#' ? 0 : $(href).offset().top-topMenuHeight+1;
	  $('html, body').stop().animate({ 
			scrollTop: offsetTop
	  }, 1000);
	  e.preventDefault();
	});

$(window).scroll(function(){
	var fromTop = $(this).scrollTop()+topMenuHeight;
	var cur = scrollItems.map(function(){
		if ($(this).offset().top < fromTop)
		return this;
	});
	cur = cur[cur.length-1];
	var id = cur && cur.length ? cur[0].id : "";
	
	if (lastId !== id) {
		lastId = id;
		$(menuItems).each(function () {
			

			// console.log($(this).attr('href') == '#' + id)

			if ($(this).attr('href') == '#' + id) {
				$(this).addClass(a);
			} else {
				$(this).removeClass(a)
			}
		})
	}
});



// Video play/stop

function video_play(e) {
	var video = $(e).find('video');

	setTimeout(function() {
		$(e).removeClass('stop');
	}, 300);

	if ($('.video').length) {
		$('.video').addClass(a);
	} else {
		$('body').prepend('<div class="video active"></div>')
	}

	video.prop('controls', false).get(0).play();
}

function video_stop(e) {
	$(e).addClass('stop').find('video').prop('controls', false).get(0).pause();
	$('.video').removeClass(a);
}

var video_timeout;

$(document).on('click', '.video', function(){
	var e = $(this),
		new_current_time = e.find('video').get(0).currentTime,
		new_duration = e.find('video').get(0).duration;

	clearInterval(video_timeout);

	if (e.hasClass('stop')) {
		$('.video').each(function () {
			video_stop(this)
		})
		
		video_play(e)

		video_timeout = setTimeout(function() {
			video_stop(e)
			e.find('video').get(0).currentTime = 0;
		}, (new_duration - new_current_time) * 1000);
	} else {
		video_stop(e)
	}
});

$(window).scroll(function () {
	$('.video').each(function () {
		var e = $(this);

		if (!e.hasClass('stop')) {
			clearInterval(video_timeout);

			video_stop(e);
		}
	})
})



// Modal

var modal_attr = {
	_video_3: '<div class="modal _video _video_3"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="video stop"><span><i></i></span><video playsinline data-src="video/arsensei"></video></div></div></div><div class="modal_viel"></div></div>',
	_video_5: '<div class="modal _video _video_5"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="video stop"><span><i></i></span><video playsinline data-src="video/klim"></video></div></div></div><div class="modal_viel"></div></div>',
	_photo_1: '<div class="modal _photo _photo_1"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r1" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
	_photo_2: '<div class="modal _photo _photo_2"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r2" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
	_photo_3: '<div class="modal _photo _photo_3"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r3.1" data-form="jpg"></picture><picture data-src="images/r3.2" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
	_photo_4: '<div class="modal _photo _photo_4"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r4" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
	_photo_5: '<div class="modal _photo _photo_5"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r5.1" data-form="jpg"></picture><picture data-src="images/r5.2" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
	_photo_9: '<div class="modal _photo _photo_9"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r6.1" data-form="jpg"></picture><picture data-src="images/r6.2" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
	_photo_10: '<div class="modal _photo _photo_10"><div class="modal_wrapper _glass"><div class="modal_close _close"></div><div class="modal_scroll"><div class="photo_slider"><picture data-src="images/r7.1" data-form="jpg"></picture><picture data-src="images/r7.2" data-form="jpg"></picture></div></div></div><div class="modal_viel"></div></div>',
}

function modal(name) {
	var modal = '.modal.' + name;

	$.each(modal_attr,function(index,value){
		if (name == index) {
			$('body').append(value);
		}
	});

	setTimeout(function() {
		$(modal).addClass(a);

		$('html').addClass('hidden');
	}, 10);

	
	if ($(modal).find('picture[data-src]').length) {
		$(modal).find('picture[data-src]').each(function () {
			var src = $(this).attr('data-src'),
					format = $(this).attr('data-form');

			$(this).html('<source srcset="' + src + '.webp" type="image/webp"><img src="' + src + '.' + format +'" alt srcset="' + src + '.' + format +' 1x, ' + src + '@2x.' + format +' 2x">')
		})

		$('.photo_slider').slick({
			arrows: true,
			dots: false,
			infinite: true,
			autoplay: false,
			slidesToShow: 1,
			responsive: [
				{
					breakpoint: 900,
					settings: {
						arrows: false,
					}
				}
			]
		});
	}

	if ($(modal).find('video[data-src]').length) {
		$(modal).find('video[data-src]').each(function () {
			var src = $(this).attr('data-src');

			$(this).html('<source src="' + src + '.mp4" type="video/mp4"><source src="' + src + '.webm" type="video/webm">');
		})
	}
}

$(document).on('click', '.modal_viel, .modal_close, __close_modal', function () {
	var modal = $(this).parents('.modal');
	modal.removeClass(a);
	$('html').removeClass('hidden');

	if (!modal.hasClass('_sign')) {
		setTimeout(function() {
			modal.remove();
		}, 600);
	}
})



// Bar

$('.bar_burger').on('click', function () {
	$(this).toggleClass(a);
	$('.bar_wrapper').slideToggle();
	$('html').toggleClass('hidden');
});


$(document).on('click', '.bar_nav .header_bottom_nav_li._parent', function (event) {
	if ($(event.target).closest('.header_bottom_nav_children').length === 0) {
		$(this).toggleClass(a)
			.find('.header_bottom_nav_children').slideToggle();
		$(this).siblings().removeClass(a)
			.find('.header_bottom_nav_children').slideUp();
	}
})


// Scroll animation


const animItems = document.querySelectorAll('.__anim');

if (animItems.length > 0) {
	window.addEventListener('scroll', animOnScroll);
	function animOnScroll() {
		for (let index = 0; index < animItems.length; index++) {
			const animItem = animItems[index];
			const animItemHeight = animItem.offsetHeight;
			const animItemOffset = offset(animItem).top;
			const animStart = 2;

			let animItemPoint = window.innerHeight - animItemHeight - animStart;
			if (animItemHeight > window.innerHeight) {
				animItemPoint = window.innerHeight - window.innerHeight / animStart;
			}

			if (animItem.classList.contains('anim_wis')) {
					animItemPoint = animItemOffset - window.innerHeight + 100;
					if (pageYOffset > animItemPoint) {
						animItem.classList.add('anim_act');
					} else {
						animItem.classList.remove('anim_act');
					}
				} else {
					if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
						animItem.classList.add('anim_act');
					} else {
						animItem.classList.remove('anim_act');
					}
				}
		}
	}

	function offset(el) {
		const rect = el.getBoundingClientRect(),
			scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
			scrollTop = window.pageXOffset || document.documentElement.scrollTop;
		return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
	}

	setTimeout(() => {
		animOnScroll();
	}, 600);
};



// Scroll animation coins

$(window).on('load', function () {
    lax.init()

    lax.addDriver('scrollY', function () {
      return window.scrollY
    })

    // Under cards

	lax.addElements('._coin-up', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['100', '-100']
	  	],
	  }
	})

	lax.addElements('._coin-up_20', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['120', '-120']
	  	],
	  }
	})

	lax.addElements('._coin-up_40', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['180', '-180']
	  	],
	  }
	})

	lax.addElements('._coin-up_60', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['50', '-50']
	  	],
	  }
	})

	lax.addElements('._coin-up_80', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['80', '-80']
	  	],
	  }
	})

	lax.addElements('._coin-down', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['-100', '100']
	  	],
	  }
	})

	lax.addElements('._coin-down_20', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['-20', '20']
	  	],
	  }
	})

	lax.addElements('._coin-down_40', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['-50', '50']
	  	],
	  }
	})

	lax.addElements('._coin-down_60', {
	  scrollY: { 
	  	translateZ: [
	  		['elInY'],
	  		[0]
	  	],
	  	translateY: [
	  		['elInY', 'elOutY - 100'],
	    	['-120', '120']
	  	],
	  }
	})
})



// Animation number up

$(window).scroll(function() {
	var start_animation = $('[data-number]').offset().top,
		bottom_scroll = $(this).scrollTop() + $(window).height();
	
	if (start_animation <= bottom_scroll) {
		num_go()
	}
});

var check_num = 0;
var seperator = 'ru';

function num_go() {
	 if (check_num == 0) {
		$('[data-number]').each(function () {
			if ($(this).attr('data-seperator')) {
				seperator = $(this).attr('data-seperator');
			};
			$(this).prop('Counter', 0).animate({
				Counter: $(this).attr('data-number')
			}, {
				duration: 1500,
				easing: 'swing',
				step: function (now) {
					console.log();
					$(this).text(Math.ceil(now).toLocaleString(seperator));
				}
			});
		});

		check_num = 1;
	}
};



// Scrollbar

$('.reviews_text').overlayScrollbars({
  className:"os-theme-thin-dark"
});
