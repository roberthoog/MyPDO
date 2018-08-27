var gulp = require("gulp");
var sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src('assets/scss/main.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('assets/css'))
});


//
//gulp.task('minify-css',function(){
//    return gulp.src('assets/css/main.css')
//        .pipe(cleanCSS({debug: true}, (details), function() {
//                console.log('${details.name}: ${details.stats.originalSize}');
//console.log('${details.name}: ${details.stats.minifiedSize}');
//}))
//.pipe(gulp.dest('dist'));
//});