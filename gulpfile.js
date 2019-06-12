

var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var moduleImporter = require('sass-module-importer');
var browserSync = require('browser-sync'); // we want to require a method called create
var webpack = require('webpack');

var prefixerOptions = {
    browsers: ['last 2 versions']
  };

gulp.task('styles', function () {
    return gulp.src('./src/css/style.scss')
        .pipe(sass({
            importer: moduleImporter()
        }))
        .pipe(cssnano())
        .pipe(gulp.dest('build/css'));
});

gulp.task('watch', function () {

    // server baseDir is app because that's where our index.html is
    browserSync.init({
        notify: false, // so we don't see the box on the top right 
        server: {
            baseDir: "build"
        } 
    });

    gulp.watch('./build/index.html', function(){
        // we want to reload our page everytime there is a change in our HTML file
        browserSync.reload();
    });

    gulp.watch('./src/css/**/*.scss', function(){
        gulp.start('cssInject');
    });

    gulp.watch('./src/js/**/*.js', function(){
        gulp.start('scriptsRefresh');
    });
});

gulp.task('cssInject', ['styles'], function(){
    return gulp.src('./build/css/style.css')
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