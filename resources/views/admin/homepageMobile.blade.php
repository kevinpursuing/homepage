<!DOCTYPE html>
<html>
<head>
    {{--meta标签--}}
    @include("headSetting.head_meta")
    {{--设置rem的基础font-size--}}
    @include("headSetting.set_htmlFontSize")

    <title>小鹅通，专注于知识服务与社群运营的聚合型工具</title>
    <link rel='icon' href='logo-64.ico' type='image/x-ico' />
    <meta name="description" content="基于微信公众号的内容付费解决方案">
    <meta name="author" content="小鹅技术">
    <meta name="keywords" content="基于微信公众号的内容付费解决方案,小鹅，让内容付费更简单,小鹅,微信工具,公众号,服务号,
    订阅号,小程序,H5,内容付费,知识变现,知识电商,知识经济,粉丝变现,流量变现,社群,自媒体,大V,用户管理,用户画像,粉丝画像,小鹅数据,
    小鹅科技,小鹅技术,微信小程序,鹅晓,知识服务,社群">

    <link type=text/css rel="stylesheet" href="../css/external/bootstrap.min.css">
    {{--菜单组件css--}}
    <link rel="stylesheet" type="text/css" href="../css/external/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/external/default.css">
    <link rel="stylesheet" type="text/css" href="../css/external/styles.css?20161109">

    {{--手机版首页css--}}
    <link rel="stylesheet" type="text/css" href="../css/admin/homepageMobile.css?2016201702282242">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/external/sui.nav.min.css')}}">--}}

    <fontbase family="Helvetica, Tahoma, Arial, “Hiragino Sans GB”, “Hiragino Sans GB W3”, “Microsoft YaHei”, STXihei, STHeiti, Heiti, SimSun, sans-serif"></fontbase>
    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?32573db0e6d7780af79f38632658ed95";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>


<body style="overflow-x: hidden">

<div class="container-fluid" style="padding: 0 0">

    <div class="UpDiv" style="display: none"></div>

    <div class="head-div" style="position: fixed;width: 100%;z-index: 9;background: white;">
        <img src="../images/xiaoeTC_logo.png" style="padding-left: 0.35rem;margin-top: 0.3rem;height: 0.6rem;
        position: absolute;left:0;z-index: 2">
        {{--<div class="nav-toggle" style="margin-top: 0.08rem;display:inline-block;">--}}
            {{--<div class="icon"></div>--}}
        {{--</div>--}}
        <div id="btn_menu" class="dropdown" style="float: right;height: 1.18rem;line-height: 1.18rem">
            <button style="height: 0.8rem;margin-right: 0.35rem" onclick="jumpPage(5)" type="button" class="btn btn-default sub">
                登录
            </button>
            {{--<img src="../images/homepageMobile/btn_icon.png" style="border: none;height: 1rem;width: 1rem;height: 1rem;" class="dropdown-toggle" data-toggle="dropdown">--}}

            {{--<ul class="dropdown-menu dropdown-menu-right" role="menu">--}}
                {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(0)">首 页</a></li>--}}
                {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(1)">产品功能</a></li>--}}
                {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(2)">合作案例</a></li>--}}
                {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(3)">关于我们</a></li>--}}
                {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(4)">立即体验</a></li>--}}
                {{--<li> <button style="width: 100%" onclick="jumpPage(5)" type="button" class="btn btn-default sub">--}}
                        {{--登录--}}
                    {{--</button></li>--}}
            {{--</ul>--}}

        </div>

    </div>

    {{--<nav class="nav">--}}
        {{--<ul class="list" style="display: none;width: 2.35rem; margin: 0px 0% 0px auto;">--}}
            {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(0)">首 页</a></li>--}}
            {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(1)">产品功能</a></li>--}}
            {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(2)">合作案例</a></li>--}}
            {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(3)">关于我们</a></li>--}}
            {{--<li><a href="JavaScript:void(0)" onclick="jumpPage(4)">立即体验</a></li>--}}
            {{--<li> <button style="width: 100%" onclick="jumpPage(5)" type="button" class="btn btn-default sub">--}}
                    {{--登录--}}
                {{--</button></li>--}}
        {{--</ul>--}}
    {{--</nav>--}}

        <div class="lower-screen" style=";padding-bottom:0">

            <div id="page-banner" class="card" style="width: 100%;margin: 0;background:url('../images/homepageMobile/banner_phone1.png');background-size: 100% 100%;height: 4.5rem">
            </div>

            <div id="page-product" class="section-content" style="text-align: center;padding-top: 0.45rem;margin: 0 auto;background:#F4FCFF; width: 100%;overflow: hidden">
                <div><p class="title_product">内容载体维度升级</p></div>
                <div class="product_box">
                    <p class="product_text" >支持图文, 音视频, 直播, 一对一咨询等多类别内容形式</p>
                    <p class="product_text" >同一场景内的多样化表达，让知识更立体</p>
                </div>
                <div style="text-align: center;margin:0.4rem 0.05rem -2.1rem"><img src="../images/pic_function.png" style="width: 100%"  /></div>
            </div>
            <div class="section-content" style="text-align: center;padding-top: 0.6rem;margin: 0 auto;background:#fffef5; width: 100%;overflow: hidden">
                <div><p class="title_product">量身打造付费体系</p></div>
                <div class="product_box">
                    <p class="product_text" >专为虚拟商品设计的一键式购买流程，更易释放消费潜能</p>
                    <p class="product_text" >多种付费方式，满足不同需求，有效提高转化率</p>
                </div>
                <div style="text-align: center;margin: 0.5rem 0.05rem -2rem;"><img src="../images/pic_function21.png" style="width: 100%" /></div>
            </div>
            <div class="section-content" style="text-align: center;padding-top: 0.6rem;margin: 0 auto;background:#f7fff7; width: 100%;overflow: hidden">
                <div><p class="title_product">后台用户数据分析</p></div>
                <div class="product_box">
                    <p class="product_text" >各平台数据互通一站式管理所有用户</p>
                    <p class="product_text" >多维分析方式，精准描述用户画像，实时进化运营手段</p>
                </div>
                <div style="text-align: center;margin:0.5rem 0.05rem 10px;"><img src="../images/pic_function3.png" style="width: 100%" /></div>
            </div>
            <div class="section-content" style="text-align: center;padding-top: 0.6rem;margin: 0 auto;background:#fff6f6; width: 100%;overflow: hidden">
                <div><p class="title_product">社群营销解决方案</p></div>
                <div class="product_box">
                    <p class="product_text" >实施舆论监控、社群直播等多种创意营销玩法</p>
                    <p class="product_text" >专家级定制服务，形成高活性专属社群，引爆内容传播</p>
                </div>
                <div style="text-align: center;margin:0.4rem 0.05rem -1.3rem;"><img src="../images/pic_function5.png" style="width: 100%" /></div>
            </div>

            <div class="section-content" style="text-align: center;padding-top: 0.6rem;margin: 0 auto;background:#ffffff; width: 100%;overflow: hidden">
                <div><p class="pr_sys">联结海量内容 打造专属社群</p></div>
                <div style="text-align: center;margin-top: 2px;padding: 0 5px;">
                    <p class="sys_text" >Connection Open</p>
                </div>
                <div style="text-align: center; margin: 0.4rem auto; padding: 0 0.1rem;"><img src="../images/pic_Product System.png" style="width: 100%" /></div>
            </div>

            <div class="section-content" style="text-align: center;margin: 0 auto;background:#f5f5f5; width: 100%;overflow: hidden">
                <div><p class="partner_title">精彩案例</p></div>
                <div style="text-align: center;margin-bottom: 12px;padding: 0 5px;">
                    <p class="pr_text" >（排名不分先后）</p>
                </div>
                <div style="text-align: center;margin:0.4rem 0.05rem 0.36rem;"><img src="../images/homepageMobile/pic_Partner2.png" style="width: 100%" /></div>
            </div>




            <div id="page-team" class="card" style="width: 100%;margin: 0">
                <div>
                    <p class="title" style="margin-bottom: 0.2rem;margin-top: 0.2rem">团队介绍</p>
                    <p style="margin-bottom: 0.2rem;font-size: 0.25rem">团队技术过硬，拥有丰富的移动互联网及自媒体行业经验，以工匠精神追求产品极致体验，多位核心成员来自腾讯，对微信生态圈有着深刻的理解。</p>
                </div>
                <div class="div-Team-info" style="text-align: left; width: 100%;  overflow: hidden">
                    <div class="Team" style="text-align: center;float: left;width: 50%;    overflow: hidden">
                        <img style="width: 1.5rem" src="../images/pic_bag.png">
                        <h4>鲍春健</h4>
                        <p style="margin-bottom: 10px" class="info-team">创始人<br></p>
                        <p class="info-team">10年大数据相关研发经验<br>原腾讯数据平台部总监，T4级专家<br>国内大数据行业专家</p>
                    </div>
                    <div class="Team" style="text-align: center;float: left;width: 50%;     overflow: hidden">
                        <img style="width: 1.5rem" src="../images/pic_nick.png">
                        <h4>王良虎</h4>
                        <p style="margin-bottom: 10px" class="info-team">联合创始人<br></p>
                        <p class="info-team">6年移动互联网相关经验<br>曾负责腾讯QQ空间产品设计研发<br>主导空间来电APP等项目<br></p>
                    </div>
                    <div class="Team" style="margin-top: 0;text-align: center;float: left;width: 50%;      overflow: hidden">
                        <img style="width: 1.5rem" src="../images/pic_jojonn.png">
                        <h4>曾勇军</h4>
                        <p style="margin-bottom: 10px" class="info-team">联合创始人<br></p>
                        <p class="info-team">中南大学计算机硕士<br>原腾讯T3高级工程师7年大数据平台<br>及应用的后台技术研发经验</p>
                    </div>
                    <div class="Team" style="margin-top: 0;text-align: center;float: left;width: 50%;    overflow: hidden">
                        <img style="width: 1.5rem" src="../images/pic_vince.png">
                        <h4>喻千里</h4>
                        <p style="margin-bottom: 10px" class="info-team">联合创始人<br></p>
                        <p class="info-team">武汉大学毕业<br>负责QQ空间产品开发<br>擅长前端开发和优化<br><br>&nbsp;</p>
                    </div>
                    <div class="Team" style="margin-top: 0;text-align: center;float: left;width: 50%;     overflow: hidden">
                        <img style="width: 1.5rem" src="../images/pic_helena.png">
                        <h4>樊晓星</h4>
                        <p style="margin-bottom: 10px" class="info-team">联合创始人<br></p>
                        <p class="info-team">University of Sussex<br>数字媒体硕士<br>丰富的海内外品牌管理经验</p>
                    </div>
                </div>
            </div>

            <div id="page-joinUs"class="card" style="width: 100%;margin: 0;background-color: #37353b">
                <div class="div-joinUs-info" style="text-align: left; width: 100%;overflow: hidden">
                    <div class="" style="width: 100%;height: 100%;">
                        <h5 class="info-white">联系我们</h5>
                        <h5 class="info-gray">联系电话：+86 400-640-8800</h5>
                        <h5 class="info-gray">商务合作：support@xiaoe-tech.com</h5>
                        <h5 class="info-gray">公司地址： 深圳市南山区科技园讯美科技广场3号楼16A09</h5>
                    </div>

                    <div style="width: 100%;height:0.01rem;background-color: #C1C1C1;"></div>

                    <div class="" style="margin-top: 0.3rem;text-align: center;width: 100%;height: 100%;">
                        <div style="text-align: center">
                            <img style="width: 1.5rem;height: 1.5rem;" src="../images/homepageMobile/pic_gongzhonghao.jpg">
                            <h5 class="info-white" style="margin-top: 0.5em;color:#C1C1C1;">长按二维码 关注小鹅通</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="text-align: center;width: 100%;margin: 0;padding: 0.2rem;background-color: #28292d">
                <p style="margin: 0;font-size: 0.2rem;color: #666666">Copyright © 2015-2017 深圳小鹅网络技术有限公司 ALL Rights Reserved.<br><a class="a-record" href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备15020529号-1</a></p>
                {{--<a id= "btn_top" onclick="" style="display: none;position: fixed;height: 60px;width: 60px;right: 5%;bottom: 5%;z-index: 9999;" href="javasript:;">--}}
                    {{--<img style="height: 5rem;width: 5rem" src="../images/top@3x.png">--}}
                {{--</a>--}}
            </div>
        </div>
</div>

<script src='../js/admin/config/config.js'></script>
<script src="../js/external/jquery.js"></script>
<script type="text/javascript" src="../js/admin/jquery-1.js"></script>
<script>

    $("#page-banner").click(function () {
        window.location='/homepage_charge'
    })
</script>
<script src="../js/external/bootstrap.min.js"></script>
{{--<script src="../js/external/sui.nav.js"></script>--}}

<script>
    $('.UpDiv').height($(window).height());
    $('.UpDiv').width($(window).width());
    $('.UpDiv').css('background-color','rgba(74,117,230,0.95)');
    $('.UpDiv').css('z-index','9');

    $('.lower-screen').height($(window).height());
    var height = $('.head-div').height();
    $('.lower-screen').css('margin-top',height+"px");

//    $('.nav-toggle').click(function () {
//        if($('.list').css('display')=='none'){
//            $('.list').css('display','block');
////            $('.UpDiv').css('display','block');
//
//        }else{
//            $('.list').css('display','none');
////            $('.UpDiv').css('display','none');
//        }
//        $('body').toggleClass('nav-open');
//    });
    $('#btn_menu').click(function () {
//        $('body').toggleClass('nav-open');
    });

    function jumpPage(which) {
        //0 首页 1 产品功能 2 合作案例 3 关于我们
//        $('body').toggleClass('nav-open');
        switch (which){
            case 0:
                window.location.href = HOME_URL+"#page-banner";
                $(document).scrollTop(-height);
                break;
            case 1:
                window.location.href = HOME_URL+"#page-product";
                $(document).scrollTop(-height);
                break;
            case 2:
                window.location.href = HOME_URL+"#page-example";
                $(document).scrollTop(-height);
                break;
            case 3:
                window.location.href = HOME_URL+"#page-team";
                $(document).scrollTop(-height);
                break;
            case 4:
                window.location.href = REDIRECT_URL+'/login?type=1';
                break;
            case 5:
                window.location = REDIRECT_URL+'/login?version_type=1';
                break;
        }
//        if($('.list').css('display')=='none'){
//            $('.list').css('display','block');
////            $('.UpDiv').css('display','block');
//        }else{
//            $('.list').css('display','none');
////            $('.UpDiv').css('display','none');
//        }
    }

</script>
</body>

</html>
