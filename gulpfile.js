var gulp = require("gulp");
var fs = require("fs");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var rename = require("gulp-rename");

gulp.task("styles", function() {
  return gulp.src("sass/app.scss")
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(autoprefixer())
    .pipe(rename("style.css"))
    .pipe(gulp.dest("."))
});

gulp.task("watch", function () {
  gulp.watch(["styles/*"], ["styles"]);
});

gulp.task("default", ["styles"]);