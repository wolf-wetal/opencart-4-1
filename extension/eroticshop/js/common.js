$(function(){
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
	$('.catalog-page .filter-button').click(function() {
		$('.catalog-page .filter').toggleClass('opened');
	});
	$('body').on('click', '.password-control', function(){
		if ($('#password-input').attr('type') == 'password'){
			$(this).addClass('view');
			$('#password-input').attr('type', 'text');
		} else {
			$(this).removeClass('view');
			$('#password-input').attr('type', 'password');
		}
		return false;
	});
	$('.header .search-link').click(function() {
		$('.header form').toggleClass('opened');
	});
	$('.searchbg').click(function() {
		$('.searchbg').hide();
		$('.header form ul').hide();
		$('.header form').removeClass('opened');
	});
	$('.header .menu-button').click(function() {
		$('body').toggleClass('oh');
		$('.header .menu-button').toggleClass('active');
		$('.mobile-menu').toggleClass('opened');
	});
	$('.mobile-menu ul li a.with_sub').click(function() {
		$(this).toggleClass('active');
		$(this).next('ul').slideToggle();
	});
	$('.header .catalog-button').click(function() {
		$('.header .catalog-button').toggleClass('active');
		$('body').toggleClass('oh');
		$('.site-menu').toggleClass('opened');
	});
	$('.site-menu ul li a.with_sub').click(function() {
		$(this).toggleClass('active');
		$(this).next('ul').slideToggle();
	});
	$('.index-catalog-block .list').slick({
		variableWidth: true,
		responsive: [
	    {
	      breakpoint: 576,
	      settings: {
	        slidesToShow: 2,
	        variableWidth: false,
	        dots: true
	      }
	    }
	  ]
	});
	$('.index-steps-block .list').slick({
	  dots: true,
	  arrows: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 576,
	      settings: "unslick"
	    }
	  ]
	});
	$('.slider-for').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  arrows: false,
	  vertical: true,
	  focusOnSelect: true,
	  responsive: [
	    {
	      breakpoint: 576,
	      settings: {
	        slidesToShow: 3,
	        vertical: false
	      }
	    }
	  ]
	});
	$('.item-advantages-block .list').slick({
	  dots: true,
	  arrows: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 576,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	$('.slider-for2').slick({
	});
});