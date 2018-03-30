const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require("gulp-rename");
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function() {
  return gulp.src('resources/assets/sass/sb-admin.scss')
    .pipe(rename("sb-admin.css"))
    .pipe(sass({
      includePaths: ['node_modules']
    }).on('error', sass.logError))
    .pipe(gulp.dest('public/css'));
});

gulp.task('fonts', function() {
  return gulp.src([
    'node_modules/font-awesome/fonts/fontawesome-webfont.*'
  ])
  .pipe(gulp.dest('public/fonts/'));
});

gulp.task('scripts', function() {
  return gulp.src([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper.js/dist/umd/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'resources/assets/js/sb-admin.js',
    'node_modules/datatables.net/js/jquery.dataTables.js',
    'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js',
  ])
  .pipe(sourcemaps.init())
  .pipe(concat('libs.js'))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('public/js'));
});
