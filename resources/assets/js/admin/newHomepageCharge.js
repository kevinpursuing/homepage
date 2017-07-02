/**
 * Created by jserk on 2017/5/4.
 */
$(function () {
    chargePage.init();
});

var chargePage = function () {

    var chargePage = {};

    var REDIRECT_URL='http://admin.xiaoe-tech.com';

    chargePage.init = function () {
        $(".logoDark").show();
        $(".navHeader,.m_nav").addClass('light');
        $(".homePageNav").show();
        $(".versionSelectNav").addClass("activeNav");

        // $(".productFunctionNav").click(function () {
        //     window.location.href = "/#productFunction";
        // })
        //
        // $(".excellentCaseNav").click(function () {
        //     window.location.href = "/#excellentCase";
        // })
        // $(".navContent").on("click", ".navPart", function () {
        //
        //     var type = $(this).data("operate_type");
        //     switch (type) {
        //         case "home_page":
        //             window.location.href = "/";
        //             break;
        //         case "function":
        //             window.location.href = "/#productFunction";
        //             break;
        //         case "version":
        //             window.location.reload();
        //             break;
        //         case "excellent_case":
        //             window.location.href = "/#excellentCase";
        //             break;
        //         case "about_us":
        //             window.location.href = "/#partIntro";
        //             break;
        //         default:
        //             console.log("参数错误");
        //             break;
        //     }
        //
        // });

        $("#freeLoginBtn").click(function () {
            window.location = REDIRECT_URL+'/login?version_type=1';

        });
        $("#purchaseGrowUpVersion").click(function () {
            window.location = REDIRECT_URL+'/login?version_type=2';

        });
        $("#purchaseVipVersion").click(function () {
            window.location = REDIRECT_URL+'/login?version_type=3';

        });



    };



    return chargePage;
}();