$('.menu-mobile-button').click(function() {
	if($('section.menu-mobile').attr('class')=="menu-mobile menu-mobile-active"){
		$('section.menu-mobile').removeClass('menu-mobile-active');
		$('.menu-mobile-box').removeClass('menu-mobile-box-active');
		$(this).removeClass('menu-mobile-button-active');
	}else{
		$(this).addClass('menu-mobile-button-active');
		$('.menu-mobile-box').addClass('menu-mobile-box-active');
		$('section.menu-mobile').addClass('menu-mobile-active');
	}
});
$('.menu-mobile-bg').click(function() {
	$('section.menu-mobile').removeClass('menu-mobile-active');
	$('.menu-mobile-box').removeClass('menu-mobile-box-active');
	$('.menu-mobile-button').removeClass('menu-mobile-button-active');
});
