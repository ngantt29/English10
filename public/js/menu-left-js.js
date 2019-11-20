var tt = true ;
$('ul.menu-left-ul-lv-1>li>i').click(function(event) {
	if (tt===true) {
        $(this).siblings('ul.menu-left-ul-lv-child').addClass('menu-left-ul-lv-child-active');
        $('ul.menu-left-ul-lv-1>li>ul.menu-left-ul-lv-child-active').show(300);
        return tt = false;
	}else {
        $(this).siblings('menu-left-ul-lv-child-active').addClass('ul.menu-left-ul-lv-child');
        $('ul.menu-left-ul-lv-1>li>ul.menu-left-ul-lv-child-active').hide(300);
        return tt = true;
	}
});
