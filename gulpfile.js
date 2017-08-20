var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    minifyCss = require('gulp-minify-css'),
    del = require('del');

gulp.task('styles', function() {
    return gulp.src('wordpress/wp-content/themes/demo/sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCss({
            keepSpecialComments: 1
        }))
        .pipe(autoprefixer('last 2 version'))
        .pipe(cssnano())
        .pipe(gulp.dest('wordpress/wp-content/themes/demo'))
        .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('scripts', function() {
    return gulp.src([
        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
    ])
       // .pipe(jshint())
      //  .pipe(jshint.reporter('default'))
        .pipe(concat('scripts.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('wordpress/wp-content/themes/demo/js'))
        .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('fonts', function() {
    return gulp.src([
        'node_modules/font-awesome/fonts/*.*',
        'node_modules/bootstrap-sass/assets/fonts/bootstrap/*.*'
    ])
        .pipe(gulp.dest('wordpress/wp-content/themes/demo/fonts/'));
});

gulp.task('clean', function() {
    return del([
        'wordpress/wp-content/themes/demo/js/scripts.min.js',
        'wordpress/wp-content/themes/demo/fonts/',
        'wordpress/wp-content/themes/demo/style.css',
        'wordpress/wp-content/themes/demo/fonts']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'fonts');
});

gulp.task('watch', ['default'], function() {
    // Watch .scss files
    gulp.watch('wordpress/wp-content/themes/demo/sass/**/*.scss', ['styles']);

    // Watch .js files
    gulp.watch('wordpress/wp-content/themes/demo/js//*.js', ['scripts']);
});