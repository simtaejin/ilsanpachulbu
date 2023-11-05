(function() {
	
	// 슬라이더
    $('.visual-slide').slick({
        //dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });

	// 뉴스 탭기능
      $('.news dl dd ul').hide();

    $('.news dl dt li a').on('click',function(e) {
        e.preventDefault();
        $(this).parent('li').addClass('on');
        $(this).parent('li').siblings().removeClass('on');

        var idx = $(this).parent('li').index();
        $('.news dl dd ul').hide();
        $('.news dl dd ul').eq(idx).show();
    });
    $('.news dl dt li a').parent('li').eq(0).find('a').trigger('click');

//	$('.btn_info').on('click', function(e) {
//		e.preventDefault();
//		$('.pop1').fadeIn(300);
//	});
//	$('.btn_use').on('click', function(e) {
//		e.preventDefault();
//		$('.pop2').fadeIn(300);
	});
	$('.pop1 .btn_close').on('click', function() {
		$('.pop1').fadeOut(300);
	});
	$('.pop2 .btn_close').on('click', function() {
		$('.pop2').fadeOut(300);
	});
})();