var gulp = require('gulp'),
	sass = require('gulp-sass'),
	watch = require('gulp-watch');

//task sass
//Compilando e comprimindo os arquivos para *** css	***
gulp.task('sass', function(){
	return gulp.src('./sass/**/*.sass')
	.pipe(sass({outputStyle: 'compressed' }).on('error', sass.logError))
	.pipe(gulp.dest('./css'));
});
//task Watch
//
gulp.task('watch', function(){
	gulp.watch('./sass/**/*.sass', ['sass']);
});
//task default do gulp
gulp.task('default', ['sass', 'watch']);