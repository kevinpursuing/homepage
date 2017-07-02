<?php
    $contentArr = [
        "付费内容载体：音频、视频、图文",
        "付费形式：单品、专栏",
        "运营管理：内容、用户关系、财务",
        "数据分析：营收趋势、用户活跃度等",
        "语音直播",
        "免费码",
        "渠道分发",
        "邀请卡",
        "推广员",
        "赠送好友",
        "评论互动",
        "小社群",
        "活动管理",
        "付费问答",
        "用户定向推送",
        "试听分享",
        "首页分类导航",
        "会员(按时长付费)",
        "独立小程序",
        "显示/隐藏订阅数、用户评论",
        "首页名称自定义",
        "日签功能",
        "视频+语音直播",
        "新功能内测试用",
    ];
    $baseVersionTypeArr = [1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0];

    $growUpVersionTypeArr = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0];

    $vipVersionTypeArr = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];

    /**
     * @param $contentArr - 所有的功能条目
     * @param $VersionTypeArr - 1 - 已开通 ； 0 - 受限制
     * @return string   - html代码
     */
    function getString($contentArr, $VersionTypeArr) {
        $result = "";
        foreach($contentArr as $key => $value) {
            $string =   '<div class="wordIconWrapper">' .
                            '<span class="word_11">'.$value.'</span>';

            if ($VersionTypeArr[$key]) {
                $string .=  '<span class="functionEnable"></span>';
            }
            $string .=  '</div>';
            $result .= $string;
        }
        return $result;
    }

?>
@extends('admin.baseLayOut')

@section('page_css')
    <link type=text/css rel="stylesheet" href="../css/admin/newHomepageCharge.css?{{env('timestamp')}}">
@stop

@section('page_js')
    <script type="text/javascript" src="../js/admin/newHomepageCharge.js?{{env('timestamp')}}"></script>
@stop

@section('mainContent')
    <div class="updateVersionPart">
        <div class="versionSelect baseVersion">
            <div class="baseVersionAbove">
                <div class="word_1">基础版</div>
                <div class="word_2">免费</div>
                <btn class="btnWhite" id="freeLoginBtn">免费注册</btn>
                <div class="word_4">开户即赠送价值50元的资源费</div>
                {{--<div class="word_5">相当于：5分钟音频完整收听3.5万次， 30分钟视频完整观看350次</div>--}}
            </div>
            <div class="baseVersionBelow">
                <?php echo getString($contentArr, $baseVersionTypeArr); ?>

            </div>
        </div>

        <div class="versionSelect growUpVersion">
            <div class="growUpVersionAbove">
                <div class="word_1">成长版</div>
                <div class="word_2">实际营收总额*1%</div>
                <div class="word_3">（不超过¥4500/年）</div>
                <btn class="btnWhite" id="purchaseGrowUpVersion">立即开通</btn>
                <div class="word_4">开户即赠送价值100元的资源费</div>
                {{--<div class="word_5">相当于：5分钟音频完整收听3.5万次， 30分钟视频完整观看350次</div>--}}
            </div>
            <div class="growUpVersionBelow">
                <?php echo getString($contentArr, $growUpVersionTypeArr); ?>

            </div>
        </div>

        <div class="versionSelect vipVersion">
            <div class="vipVersionAbove">
                <div class="word_1">专业版</div>
                <div class="word_2">¥4800/年</div>
                <btn class="btnWhite" id="purchaseVipVersion">立即开通</btn>
                <div class="word_4">开户即赠送价值500元的资源费</div>
                {{--<div class="word_5">相当于：5分钟音频完整收听3.5万次， 30分钟视频完整观看350次</div>--}}
            </div>
            <div class="vipVersionBelow">
                <?php echo getString($contentArr, $vipVersionTypeArr); ?>

            </div>
        </div>
    </div>

    <div class="horizontalDivideLine"></div>

    <div class="FAQPart">

        <div class="FAQPart_title">常见问题与解答</div>

        <div class="FAQContentList">
            <div class="FAQContentWrapper">
                <div class="FAQ_Title">问题1：小鹅通是什么？</div>
                <div class="FAQ_content">
                    小鹅通是针对知识付费与社群运营开发的聚合型工具，帮助内容创业者低门槛拥有自己的内容变现平台。产品形态分为两个部分：
                    <br>1、供管理员上传内容、操作、观测用的后台；
                    <br>2、手机端展示页面（默认表现为基于微信生态的Web App）。简而言之，小鹅通在后台提供模块化的工具，
                    由使用者自由组合手机端的付费产品和社群形式，有些类似在微信公众平台后台编辑文章，再在公号内发布并观看。
                    我们现在已有图文、音频、视频、直播、社群、问答等付费形式，以及会员系统等社群运营方案与营销玩法。
                </div>
            </div>

            <div class="FAQContentWrapper">
                <div class="FAQ_Title">问题2：为什么会有第三方运营商资源费用？</div>
                <div class="FAQ_content">小鹅通现使用第三方运营商资源存储及展示您的资源，用户在购买了您的音频、视频等商品后使用将会产生此类费用。
                    由于使用小鹅通搭建的内容付费平台隶属于您自己，所以在使用小鹅通的SaaS服务时，我们将为您代收这部分费用。
                    <br><span style="color: #275be6;">需要注意的是，这部分费用额度极低，举例来说，一家拥有10万付费用户的音频内容大商户，每月资源费用不超过1500元。
                    图文、社群类费用则极低。</span>
                    <br>小鹅通为您永久补贴语音直播产生的流量费用。
                </div>
            </div>

            <div class="FAQContentWrapper">
                <div class="FAQ_Title">问题3：第三方运营商资源费用代收规则</div>
                <div class="FAQ_content">包括文件存储于云服务器产生的存储费及用户访问产生的流量费。
                    <br>（1） 为规避用户多次视听导致流量费用不可控制，小鹅通采用“按独立访问用户数量计费”，即单个用户多次访问只计费一次。
                    <br>（2）存储时，原始上传的音频/视频/图文，大小不做改变。
                    流量计费将以压缩/优化后的用户访问文件大小计算。用户访问时，小鹅通会统一将音频按照64kbps转码处理，视频按照720p高清优化处理。图片暂不做任何处理，请自行把握图片大小及流量使用。
                    <br>1、存储费：0.03元/G/每天
                    <br>2、流量费：用户访问文件大小*当日新增访问用户数*综合流量单价（0.90元/G）</div>
            </div>

            <div class="FAQContentWrapper">
                <div class="FAQ_Title">问题4：基础版、成长版、专业版的区别是什么？</div>
                <div class="FAQ_content">不同版本包含功能会有不同。

                    <br><br>基础版包含基础功能，无高阶功能，功能使用永久免费。
                    <br>基础版可以通过充值100元资源费升级为成长版，我们将收取订单总流水的1%作为软件服务费，一年内提取的总服务费最高不超过4500元。
                    <br>专业版包含最多的高阶功能，需缴纳4800元年费开通。

                    <br><br>使用三个版本均需正常缴纳产生的第三方运营商资源费用。</div>
            </div>
        </div>
        <div class="word_31">如有更多疑问？</div>
        <div class="word_32">请联系我们 <span class="word_phoneNum">18124689845</span> 或 <span class="word_phoneNum">18126391294</span>（客服办公时间：9:00-19:00，周末不休）</div>

    </div>

    <div class="footerDivideLine"></div>

@stop