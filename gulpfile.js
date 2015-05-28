'use strict'

var gulp        = require('gulp'),
    uglify      = require('gulp-uglify'),
    minify      = require('gulp-minify-css'),
    concat      = require('gulp-concat'),
    sass        = require('gulp-sass'),
    livereload  = require('gulp-livereload'),
    plumber     = require('gulp-plumber'),
    spritesmith = require('gulp.spritesmith'),
    neat        = require('node-neat').includePaths;

//////////////////////////////
// PATHS
//////////////////////////////
var path = {
  sassWatch: [
    'assets/scss/*.scss',
    'assets/scss/**/*.scss'
  ],
  sass_src: 'assets/scss/*.scss',
  sass_dest: 'dist/css',
  js_lint_src: [
      'dist/js/*.js'
  ],
  js_src : [
      'assets/js/*.js'
  ],
  js_dest : 'dist/js/'
};

//////////////////////////////
// JS Tasks
//////////////////////////////
gulp.task('js', function () {
    gulp.src(path.js_src)
        .on('error',console.log.bind(console))
        .pipe(uglify())
        .on('error',console.log.bind(console))
        .pipe(concat('output.min.js'))
        .on('error',console.log.bind(console))
        .pipe(gulp.dest('dist/js'))
        .on('error',console.log.bind(console))
        .pipe(livereload());
});

//////////////////////////////
// SASS Tasks
//////////////////////////////
gulp.task('sass', function(){
    gulp.src(path.sass_src)
        .pipe(sass({
            includePaths: ['styles'].concat(neat)
        }))
        .on('error',console.log.bind(console))
        .pipe(minify())
        .on('error',console.log.bind(console))
        .pipe(concat('style.css'))
        .on('error',console.log.bind(console))
        .pipe(gulp.dest('dist/css'))
        .on('error',console.log.bind(console))
        .pipe(livereload())
        .on('error',console.log.bind(console));
});

//////////////////////////////
// SPRITE Tasks
//////////////////////////////
gulp.task('sprite', function () {
  var spriteData = gulp.src('dist/img/sprite/*.png')
  .pipe(spritesmith({
    imgName: 'sprite.png',
    cssName: 'sprite.scss',
    optimizationLevel: 7
  })).on('error',console.log.bind(console));
  spriteData.img.pipe(gulp.dest('dist/img/')).on('error',console.log.bind(console));
  spriteData.css.pipe(gulp.dest('assets/scss/config/')).on('error',console.log.bind(console));
});

//////////////////////////////
// Watch Tasks
//////////////////////////////
gulp.task('watch', function () {
    livereload();
    gulp.watch(path.js_src, ['js']).on('error',console.log.bind(console));
    gulp.watch(path.sassWatch, ['sass']).on('error',console.log.bind(console));
    gulp.watch('gulpfile.js', ['default']).on('error',console.log.bind(console));
    gulp.watch('assets/img/sprite/*.*', ['sprite']).on('error',console.log.bind(console));
});

//////////////////////////////
//Default Tasks
//////////////////////////////
gulp.task('default', [
    'sass',
    'js',
    'watch',
    'sprite'
]);
