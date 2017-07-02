/*** Created by jserk on 2017/5/5.*/
$(function () {
    aboutUs.init();
});

var aboutUs=function () {
    var aboutUs={},
        moreNewsDown=0;


    aboutUs.init=function () {
      $(".navHeader").addClass('light');
      $(".logoDark").show();
      $(".logoLight").hide();
      $(".partIntro").addClass("navActive");
        //正式
        var qrcode_app_id='wxd3ab22331c3b1470';
        var qrcode_redirect_url='https://admin.xiaoe-tech.com/codeinfo';
        var qrcode_href='https://admin.inside.xiaoe-tech.com/css/external/wechatCode.css';


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
        });
        
        $(".moreNews").click(function () {
            if(moreNewsDown==0){
            $(".newsMorePart").slideDown(200);
            moreNewsDown=1;
            $(this).text('收起报道');
            }else{
                $(".newsMorePart").slideUp(200);
                moreNewsDown=0;
                $(this).text('查看更多报道 >');
            }
        })
    }

    return aboutUs;
}();