/**
 * Created by jserk on 2017/5/4.
 */
$(function () {
    homePageNew.init();
});

var homePageNew = function () {
    var homePageNew = {};
    //正式
    var qrcode_app_id='wxd3ab22331c3b1470';
    var qrcode_redirect_url='https://admin.xiaoe-tech.com/codeinfo';
    var qrcode_href='https://admin.xiaoe-tech.com/css/external/wechatCode.css';


    //测试
    // var qrcode_app_id='wxd321e17e386ddbca';
    // var qrcode_redirect_url='https://admin.inside.xiaoe-tech.com/codeinfo';
    // var qrcode_href='https://admin.inside.xiaoe-tech.com/css/external/wechatCode.css';


    function GetQueryString(name) {  //获取search参数
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    }
    homePageNew.init = function () {

        //将channel存入cookie
        var channel = GetQueryString('channel');
        $.cookie('channel', channel, {
            expires: 7,
            domain: 'xiaoe-tech.com',
            path: '/'
        });

        //生成二维码
        try {
            var obj = new WxLogin({
                id: "m_IndexQrCode",
                appid: qrcode_app_id,
                scope: "snsapi_login",
                redirect_uri: encodeURI(qrcode_redirect_url + "?version_type=null"),
                state: "",
                style: "black",
                href: qrcode_href
            });
            console.log(qrcode_redirect_url + "?version_type=null");
        } catch (ex) {
            console.error(ex);
        }

        var scroll_top = $(document).scrollTop();
        if (scroll_top != 0) {
            console.log('不是页面顶部');
            $(".navHeader,.m_nav").addClass('light');
            $(".m_loginBtn").addClass('m_btnBlue');
            $(".m_loginBtn").removeClass('m_btnGrey');
            $(".logoDark").show();
            $(".logoLight").hide();
        } else {
            console.log('已到达页面顶部');
            $(".navHeader,.m_nav").removeClass('light');
            $(".m_loginBtn").removeClass('m_btnBlue');
            $(".m_loginBtn").addClass('m_btnGrey');
            $(".logoDark").hide();
            $(".logoLight").show();
        }

        $(window).bind('scroll', function () {
            navId='';
            scroll_top = $(document).scrollTop();
            if (scroll_top != 0) {
                console.log('不是页面顶部');
                $(".navHeader,.m_nav").addClass('light');
                $(".m_loginBtn").addClass('m_btnBlue');
                $(".m_loginBtn").removeClass('m_btnGrey');
                $(".logoDark").show();
                $(".logoLight").hide();
            } else {
                console.log('已到达页面顶部');
                $(".m_loginBtn").removeClass('m_btnBlue');
                $(".m_loginBtn").addClass('m_btnGrey');
                $(".navHeader,.m_nav").removeClass('light');
                $(".logoDark").hide();
                $(".logoLight").show();
            }

            if(scroll_top>=$('#productFunction').offset().top - 60&&scroll_top < $('#productFunction').offset().top + 300){
                $(".navPart").removeClass("navPartActive");
                $(".productFunctionNav").addClass("navPartActive");
            }else if (scroll_top>=$('#excellentCase').offset().top - 60&&scroll_top < $('#excellentCase').offset().top + 300){
                $(".navPart").removeClass("navPartActive");
                $(".excellentCaseNav").addClass("navPartActive");
            }else{
                $(".navPart").removeClass("navPartActive")
            }

        })

        $(".casePart").mouseenter(function () {
            $(this).find(".qrcodeImg").fadeIn(200);
        })

        $(".casePart").mouseleave(function () {
            $(this).find(".qrcodeImg").fadeOut(200);
        })

        $(".btnGrey,.m_btnGrey").mousedown(function () {
            $("this").addClass('btnGreyClick')
        });

        $(".btnGrey,.m_btnGrey").mouseup(function () {
            $("this").removeClass('btnGreyClick')
        });

        $(".btnBlue,.m_btnBlue").mousedown(function () {
            $("this").addClass('btnBlueClick')
        });

        $(".btnBlue,.m_btnBlue").mouseup(function () {
            $("this").removeClass('btnBlueClick')
        });

        //设置来源cookie
        function GetQueryString(name) {  //获取search参数
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]);
            return null;
        }
        var channel = GetQueryString('channel');

        $.cookie('channel', channel, {
            expires: 7,
            domain: 'xiaoe-tech.com',
            path: '/'
        });
    }
    $('#signIn').on('click',function(){//百度点击事件统计
        // alert("signin");
        _hmt.push(['_trackEvent', '立即免费注册', 'clickEvent', 'aboutTheSign']);
        // alert(_hmt);
    })
    $('#quickTry').on('click',function(){
        // alert("quickTry");
        // alert(_hmt);
        _hmt.push(['_trackEvent', '快速体验', 'clickEvent', 'aboutTheTry']);
        // alert(_hmt);
    })
    return homePageNew;
}();