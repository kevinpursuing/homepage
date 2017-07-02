@extends('admin.baseLayOut')
@section('page_css')
    <link type=text/css rel="stylesheet" href="../css/admin/aboutUs.css">
    <link type=text/css rel="stylesheet" href="../css/external/wechatCode.css">
@endsection
@section('page_js')
    <script type="text/javascript" src="../js/external/wxLogin.js"></script>
    <script type="text/javascript" src="../js/admin/aboutUs.js"></script>
@endsection
@section('mainContent')
    <div class="banner">
    </div>
    <div class="content">
        <div class="aboutUsContent">
            <div class="aboutUsPart">
                <div class="aboutUsPTitle" id="aboutUsLink">关于我们</div>
                <div class="aboutUsPIntro">
                    <p>
                        小鹅通是一家专注知识服务与社群运营的SaaS云科技公司，团队技术过硬，多位核心成员来自腾讯，拥有丰富的移动互联网及自媒体行业经验，以工匠精神追求产品极致体验。我们一直在努力为您提供稳定、安心的技术支持。</p>
                    <p>
                        我们希望通过工具升级，让精细化、个性化、专业化、随时随地的知识服务能够成为新的风向，更希望通过我们的工具，使越来越多的企业与个人能够参与到这个进程中，而大众的知识付费意识，可以随着这一系列变化，被进一步深化，最终实现对知识的鼓励与保护。</p>
                </div>
            </div>
            <div class="aboutUsPart">
                <div class="aboutUsPTitle">团队人员</div>
                <div class="aboutUsMember">
                    <div class="memberPhotoFounder">
                        <div class="founderImg"><img src="./images/members/1.png" alt=""></div>
                        <div class="founderName">鲍春健</div>
                        <div class="founderJob">创始人</div>
                        <div class="founderIntro">
                            10年大数据相关研发经验
                            <br>
                            原腾讯数据平台部总监，T4级专家，国内大数据行业专家
                        </div>
                    </div>
                    <div class="memberPhotoFounder">
                        <div class="founderImg"><img src="./images/members/2.png" alt=""></div>
                        <div class="founderName">王良虎</div>
                        <div class="founderJob">联合创始人</div>
                        <div class="founderIntro">
                            6年移动互联网相关经验
                            <br>
                            曾负责腾讯QQ空间产品设计研发
                            主导空间来电APP等项目
                        </div>
                    </div>
                    <div class="memberPhotoFounder">
                        <div class="founderImg"><img src="./images/members/3.png" alt=""></div>
                        <div class="founderName">曾勇军</div>
                        <div class="founderJob">联合创始人</div>
                        <div class="founderIntro">
                            中南大学计算机硕士
                            <br>
                            原腾讯T3高级工程师，7年大数据
                            平台及应用的后台技术研发经验
                        </div>
                    </div>
                    <div class="memberPhotoFounder">
                        <div class="founderImg"><img src="./images/members/4.png" alt=""></div>
                        <div class="founderName">喻千里</div>
                        <div class="founderJob">联合创始人</div>
                        <div class="founderIntro">
                            武汉大学毕业
                            <br>
                            负责QQ空间产品开发
                            <br>
                            擅长前端开发和优化
                        </div>
                    </div>
                    <div class="memberPhotoFounder">
                        <div class="founderImg"><img src="./images/members/5.png" alt=""></div>
                        <div class="founderName">樊晓星</div>
                        <div class="founderJob">联合创始人</div>
                        <div class="founderIntro">
                            University of Sussex
                            <br>
                            数字媒体硕士
                            <br>
                            丰富的海内外品牌管理经验
                        </div>
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/6.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/7.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/8.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/9.png" alt="">
                    </div>

                    <div class="memberPhoto">
                        <img src="./images/members/10.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/11.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/12.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/13.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/14.png" alt="">
                    </div>

                    <div class="memberPhoto">
                        <img src="./images/members/15.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/16.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/17.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/18.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/19.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/20.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/21.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/22.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/23.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/24.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/25.png" alt="">
                    </div>
                    <div class="memberPhoto">
                        <img src="./images/members/26.png" alt="">
                    </div>

                    <a target="_blank" href="https://www.lagou.com/gongsi/51478.html">
                        <div class="memberPhoto joinUsPart">
                            加入我们
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="content1" id="report">
        <div class="aboutUsContent1">
            <div class="aboutUsPart">
                <div class="aboutUsPTitle">媒体报道</div>
                <div class="aboutUsNews">
                    <a target="_blank" href="http://news.163.com/17/0417/15/CI800CQC00014AEE.html">

                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a target="_blank"
                                                            href="http://news.163.com/17/0417/15/CI800CQC00014AEE.html">查看报道
                                    ></a></div>
                            <div class="aboutUsNewslinkSource"><img src="../images/members/news_logo2.png"
                                                                    alt="">
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="http://business.sohu.com/20161212/n475574813.shtml">
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">这些自媒体大号，如何抓住几十万付费用户？ | 小鹅通上线</div>
                            <div class="aboutUsNewsIntro">
                                几周前,小巴曾向大家介绍过一款内容付费工具—小鹅通。如今,他们玩得越来越大。　我们频道通过小鹅通打造的《每天听见吴晓波》，自7月5日上线已迎来了9万余名付费会员。
                            </div>
                            <div class="aboutUsNewslink"><a target="_blank"
                                                            href="http://business.sohu.com/20161212/n475574813.shtml">查看报道
                                    ></a></div>
                            <div class="aboutUsNewslinkSource"><img src="../images/members/news_logo1.png"
                                                                    alt="">
                            </div>
                        </div>
                    </a>
                    <a target="_blank"
                       href="http://tech.qq.com/a/20161210/016002.htm?pgv_ref=guanjianews10">
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">专访小鹅通：吴晓波也烦恼过内容产品化 但他想要的不止这些</div>
                            <div class="aboutUsNewsIntro">
                                对于波涛汹涌的内容创业大军来说，都面临着如何将精彩的内容变成产品。简单的微信推文，图文、音频、视频如何带动社群运营，随后如何打通变现渠道与手段...
                            </div>
                            <div class="aboutUsNewslink"><a target="_blank"
                                                            href="http://tech.qq.com/a/20161210/016002.htm?pgv_ref=guanjianews10">查看报道
                                    ></a></div>
                            <div class="aboutUsNewslinkSource"><img src="../images/members/news_logo3.png"
                                                                    alt="">
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="http://36kr.com/p/5065099.html">
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">自媒体人要怎么管好自己的付费群？小鹅通为他们提供了一…</div>
                            <div class="aboutUsNewsIntro">
                                小鹅通的创始人鲍春健向我介绍了小鹅通产生的原因。原来最开始的时候，小鹅通只是为微信知名大号“吴晓波频道”提供技术的外包团队。
                            </div>
                            <div class="aboutUsNewslink"><a target="_blank"
                                                            href="http://36kr.com/p/5065099.html">查看报道 ></a>
                            </div>
                            <div class="aboutUsNewslinkSource"><img src="../images/members/news_logo4.png"
                                                                    alt="">
                            </div>
                        </div>
                    </a>
                    <div class="newsMorePart">
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource"><img src="../images/members/news_logo2.png"
                                                                    alt=""></div>
                        </div>
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource">网易新闻</div>
                        </div>
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource">网易新闻</div>
                        </div>
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource">网易新闻</div>
                        </div>
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource">网易新闻</div>
                        </div>
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource">网易新闻</div>
                        </div>
                        <div class="aboutUsNewsP">
                            <div class="aboutUsNewsTitle">内容创业者之春:小鹅通3.0发布会在京顺利举行</div>
                            <div class="aboutUsNewsIntro">4月11日，《小鹅通3.0发布会暨内容付费风起云涌中国新媒体探索者大会》在北京圆满落下帷幕。
                            </div>
                            <div class="aboutUsNewslink"><a href="#">查看报道 ></a></div>
                            <div class="aboutUsNewslinkSource">网易新闻</div>
                        </div>
                    </div>
                </div>
                {{--<div class="moreNews">查看更多报道 ></div>--}}
            </div>
        </div>
        <div class="wxScan">
            <div class="wxScanDScreen"></div>
            <div class="wxScanBanner">
                <div class="wxScanTitleBig">微信扫一扫 免费注册</div>
                <div class="wxScanTitleSmall">助您快速拥有自己的内容变现平台</div>
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
@endsection