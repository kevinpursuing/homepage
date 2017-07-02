<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Http\Controllers\Tools\Mobile_Detect;

/********新主页********/
Route::get('/', function () {
//    $detect = new Mobile_Detect();
//    $device = "";
//    if($detect->isMobile()){
//        $device="mobile";
//        return view('admin.homepageMobile',compact('device'));
//    }else{
//        $device="computer";
        return view('admin.homePageNew');
//    }

});

/********关于我们********/
Route::get('/aboutUs', function () {
    $detect = new Mobile_Detect();
    $device = "";
    if($detect->isMobile()){
        $device="mobile";
        return view('admin.aboutUs',compact('device'));
    }else{
        $device="computer";
        return view('admin.aboutUs',compact('device'));
    }

});

Route::get('/indexOld', function () {
    $detect = new Mobile_Detect();
    $device = "";
    if($detect->isMobile()){
        $device="mobile";
        return view('admin.homepageMobile',compact('device'));
    }else{
        $device="computer";
        return view('admin.homepage',compact('device'));
    }

});
//Route::get('/', function () {
//    $detect = new Mobile_Detect();
//    $device = "";
//    if($detect->isMobile()){
//        $device="mobile";
//        return view('admin.homepageMobile',compact('device'));
//    }else{
//        $device="computer";
//        return view('admin.homepage',compact('device'));
//    }
//});
Route::get('/homepage_charge', function () {
//    $detect = new Mobile_Detect();
//    $device = "";
//    if($detect->isMobile()){
//        $device="mobile";
//        return view('admin.homepageCharge',compact('device'));
//    }else{
//        $device="computer";
//        return view('admin.homepageCharge',compact('device'));
//    }
    return view('admin.newHomepageCharge');

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
