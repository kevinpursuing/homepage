/*****
 * jserk
 */


var gulp = require('gulp'),

    path = require('path')

    plugins = require('gulp-load-plugins')();  //加载gulp-load-plugins插件，并马上运行它

const   pathI='./resources/assets/',     //文件输入目录
        pathO='./public/',    //文件输出目录

        gPath={
         bladeI:'./resource/assets/views/**/*.blade,php',  //模板文件输入目录
         jsI:path.join(pathI,'js/**/*.js'),   //js处理入口文件
         jsO:path.join(pathO,'js'),   //js入处理出口目录
         cssI:path.join(pathI,'css/**/*.css'),   //css压缩入口文件
         cssO:path.join(pathO,'css'),   //css压缩出口目录
         sassI:path.join(pathI,'sass/**/*.scss'),  //sass编译入口文件
      };



/***压缩混淆js****/
gulp.task('minify-js', function () {
    gulp.src(gPath.jsI) // 要压缩的js文件
        .pipe(plugins.uglify())  //使用uglify进行压缩
        // .pipe(plugins.obfuscate())  //使用obfuscate进行混淆
        .pipe(gulp.dest(gPath.jsO)); //压缩混淆后的路径
});



/**
 * 压缩css
 */
gulp.task('minify-css', function () {
    gulp.src(gPath.cssI) // 要压缩的js文件
        .pipe(plugins.minifyCss())  //使用uglify进行压缩
        .pipe(gulp.dest(gPath.cssO)); //压缩后的路径
});


/**
 * 编译sass
 */

gulp.task('compile-less', function () {
    gulp.src(gPath.sassI)
        .pipe(plugins.less())
        .pipe(gulp.dest(gPath.cssO));
});


/**
 * 实时监控
 */
gulp.task('laravel-views', function() {
    gulp.src('resources/views/admin/homepageNew.blade.php')
        .pipe(plugins.livereload());
});


/**
 * 文件加MD5后缀
 */
gulp.task("rev-css",function(){
    gulp.src(gPath.cssI)
        .pipe(plugins.rev())
        .pipe(gulp.dest(gPath.cssO));
});

gulp.task("rev-js",function(){
    gulp.src(gPath.jsI)
        .pipe(plugins.rev())
        .pipe(gulp.dest(gPath.jsO));
});






/**
 * 开发一键布置
 */
gulp.task('watch',function () {
    plugins.livereload.listen(); //要在这里调用listen()方法
    //监控js文件
    gulp.watch(gPath.jsI,['minify-js','laravel-views']);
    //监控css文件
    gulp.watch(gPath.cssI,['minify-css','laravel-views']);
    //改模板，css,js文件实时刷新
    gulp.watch('resources/views/admin/homepageNew.blade.php', ['laravel-views']);
});


/**
 * 一键上线
 */
gulp.task('goOnline',['minify-js','minify-css']);