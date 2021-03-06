@extends('admin.baseLayOut')
@section('page_css')
    <link type=text/css rel="stylesheet" href="../css/admin/homePageNew.css?{{env('timestamp')}}">
    <link type=text/css rel="stylesheet" href="../css/external/wechatCode.css?{{env('timestamp')}}">
    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?32573db0e6d7780af79f38632658ed95";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!--[if lt IE 8]>
    <!--<link rel="stylesheet" type="text/css" href="../css/ie/ie.css">-->
    <!--<script src="../js/external/html5shiv.min.js"></script>-->
    <![endif]-->
@endsection
@section('page_js')
    {{-- cookie --}}
    <script src="../js/external/jquery.cookie.js?{{env('timestamp')}}"></script>
    <script type="text/javascript" src="../js/external/wxLogin.js?{{env('timestamp')}}"></script>
    <script type="text/javascript" src="../js/admin/homePageNew.js?{{env('timestamp')}}"></script>
@endsection
@section('mainContent')
    <div class="picContent">
    <div class="header">
        <div class="headerDScreen"></div>
        {{--横幅--}}
        <div class="banner">

            <div class="bannerTitleSmall">这里改动</div>
            <div class="bannerTitleBig">这是小标题</div>
            <div class="bannerBtnGroup">
                <div id="signIn" class="btnBlue experienceBtn loginLink">一键创建知识店铺</div>
                {{--<div class="btnGrey openBtn experienceLink">快速体验</div>--}}
            </div>
        </div>
    </div>
    <div class="productInterface ">
        <div class="productInterfaceContent z-depth-1-half">
            <video width="800" autoplay="" loop="" poster="">
                <source src="https://200026219.vod.myqcloud.com/200026219_7f009a6c33e911e7a64347cccd9a442c.f0.mp4" type="video/mp4">

                {{--<source src="https://assets-cdn.shimo.im/assets/images/home/index/video/op_final-b0cd06a163.ogg" type="video/ogg">--}}
            </video>
        </div>
    </div>
    <div class="content">
        <div class="mainContent">
            <div class="productFunction" id="productFunction">
                <div class="partTitle">
                    产品功能
                    <div class="partTitleLine"></div>
                </div>
                <div class="functionContent">
                    <div class="functionPart">
                        <div class="functionIcon"><img src="../images/homepage/invalid-name1.png" alt="">
                        </div>
                        <div class="functionPartContent">
                            <div class="functionPartTitle">内容付费</div>
                            <div class="functionPartIntro">音视频、图文、直播、问答等多种付费形式，让知识更立体</div>
                        </div>
                    </div>
                    <div class="functionPart">
                        <div class="functionIcon"><img src="../images/homepage/invalid-name2.png" alt="">
                        </div>
                        <div class="functionPartContent">
                            <div class="functionPartTitle">用户管理</div>
                            <div class="functionPartIntro">用户信息一手掌握，实现与用户多维度高频互动</div>
                        </div>
                    </div>
                    <div class="functionPart" style="margin: 0">
                        <div class="functionIcon"><img src="../images/homepage/invalid-name3.png" alt="">
                        </div>
                        <div class="functionPartContent">
                            <div class="functionPartTitle">会员系统</div>
                            <div class="functionPartIntro">圈层化管理用户，社群运营精细化，发掘消费潜力</div>
                        </div>
                    </div>
                    <div class="functionPart">
                        <div class="functionIcon"><img src="../images/homepage/invalid-name4.png" alt="">
                        </div>
                        <div class="functionPartContent">
                            <div class="functionPartTitle">数据分析</div>
                            <div class="functionPartIntro">多项数据指标及分析，实时观测运营效果</div>
                        </div>
                    </div>
                    <div class="functionPart">
                        <div class="functionIcon"><img src="../images/homepage/invalid-name5.png" alt="">
                        </div>
                        <div class="functionPartContent">
                            <div class="functionPartTitle">营销推广</div>
                            <div class="functionPartIntro">多种营销方式促进内容裂变式传播，持续拉新，巩固留存</div>
                        </div>
                    </div>
                    <div class="functionPart" style="margin: 0">
                        <div class="functionIcon"><img src="../images/homepage/invalid-name6.png" alt="">
                        </div>
                        <div class="functionPartContent">
                            <div class="functionPartTitle">线下互动</div>
                            <div class="functionPartIntro">针对特定社群的活动管理，实现线上线下一体化运营</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productModule">
                <div class="moduleWordL">
                    <div class="moduleTitle">个人模式/企业模式</div>
                    <div class="moduleIntro">两种运营模式自由切换， 一分钟开通自己的知识店铺，快速实现低门槛内容变现</div>
                </div>
                <div class="modulePicR"><img src="../images/homepage/pic_function1.png" alt=""></div>
            </div>
            <div class="productModule">
                <div class="moduleWordR">
                    <div class="moduleTitle">图文、音视频、直播、活动、问答</div>
                    <div class="moduleIntro">多种内容的交付与支付形式，满足不同变现需求
                    </div>
                </div>
                <div class="modulePicL"><img src="../images/homepage/pic_function2.png" alt=""></div>
            </div>
            <div class="productModule">
                <div class="moduleWordL">
                    <div class="moduleTitle">小程序、小社群、营销互动</div>
                    <div class="moduleIntro">加入小鹅通，让您拥有专属知识变现小程序；更有小社群功能，沉淀优质UGC，提升用户活性。
                        多种营销互动方式，助力销量增长
                    </div>
                </div>
                <div class="modulePicR"><img src="../images/homepage/pic_function3.png" alt=""></div>
            </div>
            <div class="excellentCase" id="excellentCase">
                <div class="partTitle">
                    精彩案例
                    <div class="partTitleLine"></div>
                </div>
                <div class="casePromptWords">(微信扫一扫查看案例)</div>
                <div class="caseContent">
                    <div class="casePart">
                        <img src="../images/homepage/1.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c1.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/2.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c2.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/3.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c3.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/4.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c4.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/5.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c5.png" alt=""></div>
                    </div>
                    <div class="casePart" style="margin-right: 0">
                        <img src="../images/homepage/6.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c6.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/7.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c7.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/8.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c8.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/9.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c9.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/10.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c10.png" alt=""></div>
                    </div>
                    <div class="casePart">
                        <img src="../images/homepage/11.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c11.png" alt=""></div>
                    </div>
                    <div class="casePart" style="margin-right: 0">
                        <img src="../images/homepage/12.png" alt="">
                        <div class="qrcodeImg z-depth-3" style="display: none;"><img
                                    src="../images/homepage/c12.png" alt=""></div>
                    </div>
                </div>
            </div>
            {{--<div class="excellentCase" id="partIntro">--}}
                {{--<div class="partTitle">--}}
                    {{--团队介绍--}}
                    {{--<div class="partTitleLine"></div>--}}
                {{--</div>--}}
                {{--<div class="casePromptWords casePromptWordsB">团队技术过硬，拥有丰富的移动互联网及自媒体行业经验，以工匠精神<br/>追求产品极致体验，多位核心成员来自腾讯，对微信生态圈有着深刻的理解。</div>--}}
                {{--<div class="caseContent">--}}
                    {{--<div class="xePart">--}}
                        {{--<div class="partImg">--}}
                            {{--<img src="../images/pic_bag.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="memberName">鲍春健</div>--}}
                        {{--<div class="memberJob">创始人</div>--}}
                        {{--<div class="memberIntro">--}}
                            {{--10年大数据相关研发经验--}}
                            {{--<br/>--}}
                            {{--原腾讯数据平台部总监，T4级专家--}}
                            {{--<br/>--}}
                            {{--国内大数据行业专家--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="xePart">--}}
                        {{--<div class="partImg">--}}
                            {{--<img src="../images/pic_nick.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="memberName">王良虎</div>--}}
                        {{--<div class="memberJob">联合创始人</div>--}}
                        {{--<div class="memberIntro">--}}
                            {{--6年移动互联网相关经验--}}
                            {{--<br/>--}}
                            {{--曾负责腾讯QQ空间产品设计研发--}}
                            {{--<br/>--}}
                            {{--主导空间来电APP等项目--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="xePart">--}}
                        {{--<div class="partImg">--}}
                            {{--<img src="../images/pic_jojonn.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="memberName">曾勇军</div>--}}
                        {{--<div class="memberJob">联合创始人</div>--}}
                        {{--<div class="memberIntro">--}}
                            {{--中南大学计算机硕士--}}
                            {{--<br/>--}}
                            {{--原腾讯T3高级工程师，7年大数据--}}
                            {{--<br/>--}}
                            {{--平台及应用的后台技术研发经验--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="xePart">--}}
                        {{--<div class="partImg">--}}
                            {{--<img src="../images/pic_vince.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="memberName">喻千里</div>--}}
                        {{--<div class="memberJob">联合创始人</div>--}}
                        {{--<div class="memberIntro">--}}
                            {{--武汉大学毕业--}}
                            {{--<br/>--}}
                            {{--负责QQ空间产品开发--}}
                            {{--<br/>--}}
                            {{--擅长前端开发和优化--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="xePart">--}}
                        {{--<div class="partImg">--}}
                            {{--<img src="../images/pic_helena.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="memberName">樊晓星</div>--}}
                        {{--<div class="memberJob">联合创始人</div>--}}
                        {{--<div class="memberIntro">--}}
                            {{--University of Sussex--}}
                            {{--<br/>--}}
                            {{--数字媒体硕士--}}
                            {{--<br/>--}}
                            {{--丰富的海内外品牌管理经验--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="wxScan">
            <div class="wxScanDScreen"></div>
            <div class="wxScanBanner">
                <div class="wxScanTitleBig">微信扫一扫 免费注册</div>
                <div class="wxScanTitleSmall">一分钟拥有自己的知识店铺，零门槛实现内容变现</div>
                <div class="qrContent">
                    <div class="IndexQrCode" id="m_IndexQrCode">
                        {{--<img src="../images/homepage/index_qrcode.png" alt="">--}}
                    </div>
                    <div class="IndexQrCodeWord">微信扫码免费注册</div>
                </div>
                {{--<div class="bannerBtnGroup">--}}
                {{--<div class="btnBlue experienceBtn">快速体验</div>--}}
                {{--<div class="btnGrey openBtn">免费自助开通</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    </div>
    <div class="mobileContent">
        <div class="m_nav">
            <div class="m_logo">
                <img class="logoLight" src="../images/homepage/logo.svg" style="display: none">
                <img class="logoDark" src="../images/homepage/logo_black.svg" style="display: none">
            </div>
            <div class="m_loginBtn m_btnGrey loginMLink">登录</div>
        </div>
        <div class="m_header">
            <div class="m_bigTitle">小鹅通，专注于知识服务与社群运营的SaaS云</div>
            <div class="m_smallTitle">一分钟拥有自己的知识店铺，零门槛实现内容变现</div>
            <div class="m_registerBtn m_btnBlue loginMLink">一键创建知识店铺</div>
            {{--<div class="m_experienceBtn m_btnGrey experienceLink">快速体验</div>--}}
        </div>
        <div class="m_productInterface">
            <div class="m_productInterfaceContent"><img src="../images/homepage/interface.png" alt=""></div>
        </div>
        <div class="m_content">
           <div class="m_mainContent">
               <div class="m_productFunction" id="m_productFunction">
                   <div class="m_partTitle">
                       产品功能
                       <div class="m_partTitleLine"></div>
                   </div>
                   <div class="m_functionContent">
                       <div class="m_functionPart">
                           <div class="m_functionIcon"><img src="../images/homepage/invalid-name1.png" alt="">
                           </div>
                           <div class="m_functionPartContent">
                               <div class="m_functionPartTitle">内容付费</div>
                               <div class="m_functionPartIntro">音视频、图文、直播、问答等多种付费形式，让知识更立体</div>
                           </div>
                       </div>
                       <div class="m_functionPart">
                           <div class="m_functionIcon"><img src="../images/homepage/invalid-name2.png" alt="">
                           </div>
                           <div class="m_functionPartContent">
                               <div class="m_functionPartTitle">用户管理</div>
                               <div class="m_functionPartIntro">用户信息一手掌握，实现与用户多维度高频互动</div>
                           </div>
                       </div>
                       <div class="m_functionPart">
                           <div class="m_functionIcon"><img src="../images/homepage/invalid-name3.png" alt="">
                           </div>
                           <div class="m_functionPartContent">
                               <div class="m_functionPartTitle">会员系统</div>
                               <div class="m_functionPartIntro">圈层化管理用户，社群运营精细化，发掘消费潜力</div>
                           </div>
                       </div>
                       <div class="m_functionPart">
                           <div class="m_functionIcon"><img src="../images/homepage/invalid-name4.png" alt="">
                           </div>
                           <div class="m_functionPartContent">
                               <div class="m_functionPartTitle">数据分析</div>
                               <div class="m_functionPartIntro">多项数据指标及分析，实时观测运营效果</div>
                           </div>
                       </div>
                       <div class="m_functionPart">
                           <div class="m_functionIcon"><img src="../images/homepage/invalid-name5.png" alt="">
                           </div>
                           <div class="m_functionPartContent">
                               <div class="m_functionPartTitle">营销推广</div>
                               <div class="m_functionPartIntro">多种营销方式促进内容裂变式传播，持续拉新，巩固留存</div>
                           </div>
                       </div>
                       <div class="m_functionPart">
                           <div class="m_functionIcon"><img src="../images/homepage/invalid-name6.png" alt="">
                           </div>
                           <div class="m_functionPartContent">
                               <div class="m_functionPartTitle">线下互动</div>
                               <div class="m_functionPartIntro">针对特定社群的活动管理，实现线上线下一体化运营</div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="m_productModule">
                       <div class="m_moduleTitle">个人模式/企业模式</div>
                       <div class="m_moduleIntro">两种运营模式自由切换， 一分钟开通自己的知识店铺，快速实现低门槛内容变现</div>
                   <div class="m_modulePic"><img src="../images/homepage/pic_function1.png" alt=""></div>
               </div>
               <div class="m_productModule">
                   <div class="m_moduleWord">
                       <div class="m_moduleTitle">图文、音视频、直播、活动、问答</div>
                       <div class="m_moduleIntro">多种内容的交付与支付形式，满足不同变现需求
                       </div>
                   </div>
                   <div class="m_modulePic"><img src="../images/homepage/pic_function2.png" alt=""></div>
               </div>
               <div class="m_productModule">
                   <div class="m_moduleWord">
                       <div class="m_moduleTitle">小程序、小社群、营销互动</div>
                       <div class="m_moduleIntro">加入小鹅通，让您拥有专属知识变现小程序；更有小社群功能，沉淀优质UGC，提升用户活性。
                           多种营销互动方式，助力销量增长
                       </div>
                   </div>
                   <div class="m_modulePic"><img src="../images/homepage/pic_function3.png" alt=""></div>
               </div>
               <div class="m_excellentCase" id="m_excellentCase">
                   <div class="m_partTitle">
                       精彩案例
                       <div class="m_partTitleLine"></div>
                   </div>
                   <div class="m_caseContent">
                       <div class="m_casePart">
                           <img src="../images/homepage/1.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/2.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/3.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/4.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/5.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/6.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/7.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/8.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/9.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/10.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/11.png" alt="">
                       </div>
                       <div class="m_casePart">
                           <img src="../images/homepage/12.png" alt="">
                       </div>
                   </div>
               </div>
           </div>
            <div class="m_wxScan">
                <div class="m_wxScanBanner">
                    <div class="m_wxScanTitleBig">小鹅通，专注于知识服务与社群运营的SaaS云</div>
                    <div class="m_wxScanTitleSmall">一分钟拥有自己的知识店铺，零门槛实现内容变现</div>
                    <div class="m_registerBtn m_btnBlue loginMLink">立即免费注册</div>
                </div>
            </div>
        </div>
        <div class="m_footer">
            <div class="m_footerContact">
                <div class="m_footerContactContent">
                    <div class="m_footerContactContentT">联系我们</div>
                    <div class="m_footerContactContentP">联系电话：18124689845 18126391294</div>
                    <div class="m_footerContactContentP">商务合作：support@xiaoe-tech.com</div>
                    <div class="m_footerContactContentP">公司地址： 深圳市南山区科技园讯美科技广场3号楼16A09</div>
                </div>
                <div class="m_footerQrCode">
                    <div class="m_footerQrCodeImg">
                        <img src="../images/homepage/xe_qrcode.jpg" alt="">
                    </div>
                    <div class="m_footerQrCodeIntro">
                        微信扫码关注小鹅通
                    </div>
                </div>
            </div>
            <div class="m_webInfo">
                <div class="m_webInfoContent">Copyright © 2015-2017 深圳小鹅网络技术有限公司
                    ALL Rights Reserved. 粤ICP备15020529号-1</div>
            </div>

        </div>
    </div>
@endsection