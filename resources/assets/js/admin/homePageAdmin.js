$(document).ready(function () {
    var _width = $(window).width();

    if (device == "mobile") {
        $('#nav-wrap').children().eq(0).width('100%');
        $('.div_logo').eq(0).children().eq(0).css('margin-left', '6em');
        var Teamheight = 0;
        for (var i = 0; i < $('.Team').length; i++) {
            if ($('Team').eq(i).height() > Teamheight) Teamheight = $('Team').eq(i).height();
        }
        if (Teamheight) {
            $('.Team').css('height', Teamheight);
        }
    } else {
        //改变字体大小
        var temp = $('body').css('font-size').replace(/[^0-9]/ig, "");
        for (var i = 0; i < $('.title').length; i++) {
            $('.title').eq(i).css('font-size', (temp * 2 + "px"));
        }

        //content-s 对应14px字体大小是12px
        for (var i = 0; i < $('.content-s').length; i++) {
            $('.content-s').eq(i).css('font-size', (temp * 0.86) + "px");
        }

        //title-s 对应14px字体大小是18px
        for (var i = 0; i < $('.title-s').length; i++) {
            // $('.title-s').eq(i).css('font-size',(temp*1.685)+"px");
        }
        //title-m 对应14px字体大小是22px
        for (var i = 0; i < $('.title-m').length; i++) {
            $('.title-m').eq(i).css('font-size', (temp * 1.55) + "px");
        }
        //title-l 对应14px字体大小是36px
        for (var i = 0; i < $('.title-l').length; i++) {
            // $('.title-l').eq(i).css('font-size',(temp*3)+"px");
        }
    }

    //内容信息导航顶部固定
    var navHeight = $("#navHeight").offset().top;
    var navFix = $("#nav-wrap");
    $(window).scroll(function () {
        if ($(this).scrollTop() > $('#page-banner').height() - 64) {
            $('#btn_top').css('display', 'block');
        } else {
            $('#btn_top').css('display', 'none');
        }
        if ($(this).scrollTop() > navHeight) {
            navFix.addClass("navFix");
        }
        else {
            navFix.removeClass("navFix");
        }
    })
    //partner
    $('.ptnimg').on('mouseover', function () {
        $(this).find('.ptnimg_screen').fadeIn(200);
        $(this).find('.ptnimg_screen').css('box-shadow','0 15px 30px rgba(0,0,0,0.1)');
    }).on('mouseleave', function () {
        $(this).find('.ptnimg_screen').fadeOut(200);
        $(this).find('.ptnimg_screen').css('box-shadow','0 0 0 rgba(0,0,0,0.1)');
    })

    /*    $('.nav-wrap').on('click', '.nav-mobile', function (e) {
     e.preventDefault();
     $('.nav-wrap ul').slideToggle('fast');
     });*/

    //返回顶部事件绑定
    $('#btn_top').on('click', function() {
        if (!$('html,body').is(":animated")) {
            $('html,body').animate({scrollTop: '-1px'}, 800);
        }
    });

    var channel = GetQueryString('channel');
    $.cookie('channel', channel, {
        expires: 7,
        domain: 'xiaoe-tech.com',
        path: '/'
    });

    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        pagination : '.swiper-pagination',
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        initialSlide :1,
        autoplay: 5000,//可选选项，自动滑动
    });
    //加载navscroll插件
    var navigation = new navScroll({
        nav : {
            id : 'navigation',
            current : 'active',
            speed : 25,
            fixPx : 40
        }
    });

});



function GetQueryString(name) {  //获取search参数
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return null;
}
