

var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var php = require('gulp-connect-php');
var moduleImporter = require('sass-module-importer');
var browserSync = require('browser-sync'); // we want to require a method called create
var webpack = require('webpack');

var prefixerOptions = {
    browsers: ['last 2 versions']
  };

gulp.task('php', function(){
    php.server({base:'./', port:3000, keepalive:true});
});

// Front-end Styles
gulp.task('styles', function () {
    return gulp.src('./src/css/style.scss')
        .pipe(sass({
            importer: moduleImporter()
        }))
        .pipe(cssnano())
        .pipe(gulp.dest('build/css'));
});

// Admin Styles
gulp.task('adminstyles', function () {
    return gulp.src('./src/admin-css/style.scss')
        .pipe(sass({
            importer: moduleImporter()
        }))
        .pipe(cssnano())
        .pipe(gulp.dest('build/admincss'));
});

gulp.task('watch', ['php'], function () {

    browserSync.init({
        proxy:"http://localhost:8888/FinalProjectphp/",
        baseDir: "./",
        open:true,
        notify:false

    });


    gulp.watch('./app/views/**/*.php', function(){
        // we want to reload our page everytime there is a change in our PHP file
        browserSync.reload();
    });

    gulp.watch('./src/css/**/*.scss', function(){
        gulp.start('cssInject');
    });

    gulp.watch('./src/admin-css/**/*.scss', function(){
        gulp.start('admincssInject');
    });

    gulp.watch('./src/js/**/*.js', function(){
        gulp.start('scriptsRefresh');
    });
});

gulp.task('cssInject', ['styles'], function(){
    return gulp.src('./build/css/style.css')
    .pipe(browserSync.stream());
})

gulp.task('admincssInject', ['adminstyles'], function(){
    return gulp.src('./build/admincss/style.css')
    .pipe(browserSync.stream());
})

gulp.task('scripts', function(callback){
    webpack(require('./webpack.config.js'), function(){
        console.log('hooray, webpack completed');
        callback();
    })
})

gulp.task('scriptsRefresh', ['scripts'], function(){
    browserSync.reload();
})