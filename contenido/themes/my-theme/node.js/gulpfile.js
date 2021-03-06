'use strict';

//Pluggins Globales
var gulp = 			require('gulp'),
	concatCss = 	require('gulp-concat-css'),
	sass = 			require('gulp-sass'),
	minifyCSS = 	require('gulp-minify-css'),
	sourcemaps = 	require('gulp-sourcemaps'),
	uglify =		require('gulp-uglifyjs');

// Bower comand: bower list -p
var JS_paths = [
	'bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
	'../source/js/*.js',
];

//Compilar sass
gulp.task('sass', function () {
	gulp.src('../source/estilos/sass/*.scss')
	.pipe(sass.sync().on('error', sass.logError))
	.pipe(gulp.dest('../source/estilos/css-to-sass'))
});

//Unificar y minificar archivos compilados oir SASS
gulp.task('unificar', function () {
	return gulp.src('../source/estilos/css/unificar.css')
	.pipe(concatCss("style.css"))
	.pipe(sourcemaps.init())
	.pipe(minifyCSS({'compatibility':'ie8'}))
	.pipe(sourcemaps.write('maps'))
	.pipe(gulp.dest('../'));
});

//Escuchar y compilarautomaticamente SASS
gulp.task('sass:watch', function () {
	gulp.watch('../source/estilos/sass/*.scss', ['sass', 'unificar']);
});

//Contactenando javascript
gulp.task('scripts', function() {
	gulp.src(JS_paths)
	.pipe(uglify('script.js', {'outSourceMap': true}))
	.pipe(gulp.dest('../'))
});

//Escuchar y unifica javascript
gulp.task('js:watch', function () {
	gulp.watch('../source/js/*.js', ['scripts']);
});

//Ejecutar las tareas
gulp.task('build', ['sass','unificar','scripts']);
gulp.task('default', ['build']);
