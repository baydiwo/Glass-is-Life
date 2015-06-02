/*!
 * gulp
 * $ npm install gulp-ruby-sass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-notify gulp-rename gulp-livereload gulp-cache del --save-dev
 */

// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    // imagemin = require('gulp-imagemin'),
    plumber = require('gulp-plumber');
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    // notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    sourcemaps = require('gulp-sourcemaps');

function swallowError (error) {

    //If you want details of the error in the console
    console.log(error.toString());

    this.emit('end');
}

// Styles
gulp.task('css', function() {
return gulp.src('./src/css/*.scss', { style: 'compressed' })
    .pipe(sourcemaps.init())
    // .pipe(plumber())
    .pipe(sass())
    .on('error', swallowError)
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(concat('style.css'))
    .pipe(sourcemaps.write())
    .pipe(minifycss())
    .pipe(gulp.dest('assets/css'));
    // .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('copy', function() {
    gulp.src(
        [
            'src/css/bootstrap.min.css',
            'src/css/jquery.bxslider.css',
            'src/css/colorbox.css',
            'src/css/jquery.sidr.dark.css'
        ]
    )
    .pipe(gulp.dest('assets/css/'));

    gulp.src(
        [
            'src/css/images/*'
        ]
    )
    .pipe(gulp.dest('assets/css/images'));

    gulp.src(
        'src/fonts/*'
    )
    .pipe(gulp.dest('assets/fonts'));
});

// Scripts
gulp.task('js', function() {
  return gulp.src('src/js/**/*.js')
    // .pipe(jshint())
    // .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js'));
    // .pipe(notify({ message: 'Scripts task complete' }));
});

// Images
gulp.task('images', function() {
  return gulp.src('src/img/**/*')
    // .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest('assets/img'));
    // .pipe(notify({ message: 'Images task complete' }));
});

// Clean
gulp.task('clean', function(cb) {
    del(['assets/css/', 'assets/js', 'assets/img'], cb)
});

// Default task
gulp.task('default', ['clean'], function() {
    gulp.start('css', 'js', 'images', 'copy');
});

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('src/css/**/*', ['css']);
  gulp.watch('src/css/**/*', ['copy']);

  // Watch .js files
  gulp.watch('src/js/**/*.js', ['js']);

  // Watch image files
  gulp.watch('src/img/**/*', ['images']);

  // Create LiveReload server
  livereload.listen();

  // Watch any files in assets/, reload on change
  gulp.watch(['assets/**']).on('change', livereload.changed);

});
