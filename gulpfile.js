var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
var concat = require('gulp-concat');

gulp.task('default', function () {
    return gulp.src('dist/**/*.css')
        .pipe(concatCss("styles/bundle.css"))
        .pipe(gulp.dest('out/'));
});

gulp.task('default', function() {
    return gulp.src('plugins/**/*.js')
        .pipe(concat('js/all.js'))
        .pipe(gulp.dest('out/'));
});

