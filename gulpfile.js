var gulp = require("gulp");
var fs = require("fs");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var rename = require("gulp-rename");
var sftp = require("gulp-sftp");

gulp.task("styles", function() {
  return gulp.src("sass/app.scss")
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(autoprefixer())
    .pipe(rename("style.css"))
    .pipe(gulp.dest("."))
});

gulp.task("deploy", function() {
	return gulp.src([
		"./*",
		"./*/**",
		"!./node_modules/**",
		"!./sass/**",
		"!./.sass-cache/**",
		"!./.git/**"
	])
		.pipe(sftp({
			host: "178.62.95.105",
			user: "root",
			remotePath: "/var/www/html/wp-content/themes/pearshapedmagazine",
			key: { location: "~/.ssh/id_rsa", passphrase: "Joe09051989" }
		}));
});

gulp.task("watch", function () {
  gulp.watch(["styles/*"], ["styles"]);
});

gulp.task("default", ["styles"]);