/**
 * Created by jserk on 2017/5/5.
 */
$(function () {
    pageBase.init();
});

var navId = '';

var pageBase = function () {
    var pageBase = {};

    function is_weixin(){
        var ua = navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i)=="micromessenger") {
            return true;
        } else {
            return false;
        }
    }
    pageBase.init = function () {

        $("#_navContentWrapper").on("click", ".chosen_shop", function () {
            window.location.href = "https://h5b.xiaoe-tech.com/login";
        });

        $(".homePageNav").click(function () {
            _hmt.push(['_trackEvent', '首页', 'indexNav', 'aboutTheSign']);
            $(".navPart").removeClass("navPartActive");
            if(document.getElementById("productFunction")) {
                console.log(1);
                if (navId != 'homePage') {
                    $('html,body').animate({scrollTop: 0}, 800);
                    navId = 'homePage';
                }
            }else{
                window.location = '/';
            }
        });

        $(".productFunctionNav").click(function () {
            _hmt.push(['_trackEvent', '功能', 'indexNav', 'aboutTheSign']);
            $(".navPart").removeClass("navPartActive")
            $(this).addClass("navPartActive");
            if(document.getElementById("productFunction")) {
                if (navId != 'productFunction') {
                    $('html,body').animate({scrollTop: $('#productFunction').offset().top - 60}, 800);
                    navId = 'productFunction';
                }
            }else{
                window.location = '/#productFunction';
            }
        });

        $(".excellentCaseNav").click(function () {
            _hmt.push(['_trackEvent', '案例', 'indexNav', 'aboutTheSign']);
            $(".navPart").removeClass("navPartActive")
            $(this).addClass("navPartActive");
            if(document.getElementById("productFunction")) {
                if (navId != 'excellentCase') {
                    $('html,body').animate({scrollTop: $('#excellentCase').offset().top - 60}, 800);
                    navId = 'excellentCase';
                }
            }else{
                window.location = '/#excellentCase';
            }
        });

        $(".partIntro").click(function () {
            _hmt.push(['_trackEvent', '关于我们', 'indexNav', 'aboutTheSign']);
            window.location = '/aboutUs';
        });

        $(".wxIcon").mouseenter(function () {
            $(".wxQrcodeBox").show();
        });

        $(".wxIcon").mouseleave(function () {
            $(".wxQrcodeBox").hide();
        });

        $(".loginMLink").click(function () {
            if(is_weixin()){
                window.location = 'http://console.xiaoe-tech.com/manage_index';
            }else{
                window.location = 'https://admin.xiaoe-tech.com/login?version_type=1';
            }

        });

        $(".loginLink").click(function () {
            _hmt.push(['_trackEvent', '登录', 'indexNav', 'aboutTheSign']);
            window.location = 'https://admin.xiaoe-tech.com/login?version_type=1';
        });

        $(".experienceLink").click(function () {
                window.location = 'https://admin.xiaoe-tech.com/login?type=1&version_type=1';
           });

        $(".versionSelectNav").click(function () {
            _hmt.push(['_trackEvent', '版本', 'indexNav', 'aboutTheSign']);
            window.location.href = '/homepage_charge';
        });

        $(".weiboIcon").click(function () {
            window.open('http://weibo.com/xiaoetong?refer_flag=1001030102_&is_hot=1');
        })
    };

    return pageBase;
}();