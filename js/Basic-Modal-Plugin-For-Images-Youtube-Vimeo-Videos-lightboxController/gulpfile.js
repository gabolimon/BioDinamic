"use strict";

// dependencies 
var gulp = require("gulp"),
    sass = require("gulp-sass"),
	maps = require("gulp-sourcemaps"),
	concat = require("gulp-concat"),
	uglify = require("gulp-uglify"),
	rename = require("gulp-rename");


// Sass Tasks
gulp.task("compileSass", function(){
	return gulp.src([
		"src/scss/lightbox.scss"
	])
	.pipe(maps.init())
    .pipe(sass().on('error', sass.logError))
	.pipe(maps.write("./"))
	.pipe(gulp.dest("src/css"))
});

gulp.task("demoSass", function(){
	return gulp.src([
		"demo/scss/lightbox_gbl.scss"
	])
	.pipe(maps.init())
    .pipe(sass().on('error', sass.logError))
	.pipe(maps.write("./"))
	.pipe(gulp.dest("demo/css"))
});

// Watch files - development pipeline
gulp.task("watchFiles", function(){
	gulp.watch("src/scss/**/*.scss", ["compileSass"])
	gulp.watch("demo/scss/**/*.scss", ["demoSass"])
});

// Production scripts
gulp.task("prodStyles", function(){
	gulp.src([
		"src/css/lightbox.css", 
	])
	.pipe(gulp.dest('dist/css'))
});

gulp.task("prodScripts", function(){
	return gulp.src([
		"src/js/lightboxController.js"
	])
	.pipe(gulp.dest("dist/js"))
	.pipe(uglify())
	.pipe(rename("lightboxController.min.js"))
	.pipe(gulp.dest("dist/js"))
});

gulp.task('production', ['prodStyles', 'prodScripts']);