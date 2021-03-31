var gulp = require('gulp'), // main
    sass = require('gulp-sass'), // scss compiler
    sourcemaps = require('gulp-sourcemaps'), // scss sourcemaps
    concat = require('gulp-concat'), // merge two files
    uglify = require('gulp-uglify'), // minify js files
    rename = require('gulp-rename'), // rename files
    cssmin = require('gulp-cssmin'), // minify css files
    merge = require('merge-stream'), // mearge two task
    gulpsequence = require('gulp-sequence'), //  execute multiple task
    babel = require("gulp-babel"), // convert next generation JavaScript, today.
    npmlodash = require("lodash"), // perfoming oops in gulp
    smushit = require('gulp-smushit'), // image optimizer
    autoprefixer = require('gulp-autoprefixer'), // css propertys autoprefixer
    cssbeautify = require('gulp-cssbeautify'), // css cssbeautify
    fileinclude = require('gulp-file-include'), // include html files
    browsersync = require("browser-sync"), // browser reload
    htmlmin = require('gulp-htmlmin'); // html minify


//  [ scss compiler ] start
gulp.task('sass', function() {
    // main style css
    return gulp.src('resources/assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('public/assets/css'))
})
//  [ scss compiler ] end

//  [ Copy assets ] start
gulp.task('build', function() {
    var required_libs = {
        js: [
            "node_modules/bootstrap/dist/js/bootstrap.min.js",
            "node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js",
            
            "node_modules/feather-icons/dist/feather.min.js",
            "node_modules/bootstrap-slider/dist/bootstrap-slider.min.js",
            "node_modules/clipboard/dist/clipboard.min.js",
            "node_modules/daterangepicker/moment.min.js",
            "node_modules/daterangepicker/daterangepicker.js",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js",
            "node_modules/bootstrap-maxlength/src/bootstrap-maxlength.js",
            "node_modules/jquery-validation/dist/jquery.validate.min.js",
            "node_modules/jquery-mask-plugin/dist/jquery.mask.min.js",
            "node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js",
            "node_modules/@claviska/jquery-minicolors/jquery.minicolors.min.js",
            "node_modules/select2/dist/js/select2.full.min.js",
            "node_modules/apexcharts/dist/apexcharts.min.js",
            "node_modules/peity/jquery.peity.min.js",
            "node_modules/gmaps/gmaps.min.js",
            "node_modules/moment/moment.js",
            "node_modules/components-jqueryui/jquery-ui.min.js",
            "node_modules/clipboard/dist/clipboard.min.js",
            "node_modules/isotope-layout/dist/isotope.pkgd.min.js",
            "node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
            "node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js",
            "node_modules/@yaireo/tagify/dist/tagify.min.js",
            "node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js",
            "node_modules/bootstrap-switch/dist/js/bootstrap-switch.min.js",
            "node_modules/bootstrap-select/dist/js/bootstrap-select.min.js",
            "node_modules/typeahead.js/dist/typeahead.bundle.min.js",
            "node_modules/jquery.repeater/jquery.repeater.min.js",
            "node_modules/ion-rangeslider/js/ion.rangeSlider.min.js",
            "node_modules/inputmask/dist/jquery.inputmask.min.js",
            "node_modules/autosize/dist/autosize.min.js",
            "node_modules/smartwizard/dist/js/jquery.smartWizard.min.js",
            "node_modules/sweetalert2/dist/sweetalert2.all.min.js",
            "node_modules/choices.js/public/assets/scripts/choices.min.js",
            "node_modules/isotope-layout/dist/isotope.pkgd.min.js",
        ],
        css: [

            "node_modules/smartwizard/dist/css/smart_wizard_theme_dots.min.css",
            "node_modules/smartwizard/dist/css/smart_wizard_theme_circles.min.css",
            "node_modules/smartwizard/dist/css/smart_wizard_theme_arrows.min.css",
            "node_modules/smartwizard/dist/css/smart_wizard.min.css",
            "node_modules/ion-rangeslider/css/ion.rangeSlider.min.css",
            "node_modules/bootstrap-select/dist/css/bootstrap-select.min.css",
            "node_modules/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css",
            "node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css",
            "node_modules/@yaireo/tagify/dist/tagify.css",
            "node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css",
            "node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css",
            "node_modules/flipclock/dist/flipclock.css",
            "node_modules/bootstrap/dist/css/bootstrap.min.css",
            "node_modules/animate.css/animate.min.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-1to10.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-horizontal.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-movie.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-pill.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-reversed.css",
            "node_modules/jquery-bar-rating/dist/themes/bars-square.css",
            "node_modules/jquery-bar-rating/dist/themes/bootstrap-stars.css",
            "node_modules/jquery-bar-rating/dist/themes/css-stars.css",
            "node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css",
            "node_modules/jquery-bar-rating/dist/themes/fontawesome-stars-o.css",
            "node_modules/perfect-scrollbar/css/perfect-scrollbar.css",
            "node_modules/ekko-lightbox/dist/ekko-lightbox.css",
            "node_modules/lightbox2/dist/css/lightbox.min.css",
            "node_modules/bootstrap-slider/dist/css/bootstrap-slider.min.css",
            "node_modules/daterangepicker/daterangepicker.css",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css",
            "node_modules/@claviska/jquery-minicolors/jquery.minicolors.css",
            "node_modules/@claviska/jquery-minicolors/jquery.minicolors.png",
            "node_modules/select2/dist/css/select2.min.css"
        ]
    };
    npmlodash(required_libs).forEach(function(assets, type) {
        if (type == "css") {
            gulp.src(assets)
                .pipe(gulp.dest("public/assets/css/plugins"));
        } else {
            gulp.src(assets)
                .pipe(gulp.dest("public/assets/js/plugins"));
        }
    });
    var cpyassets = gulp.src(['resources/assets/**/*.*', '!resources/assets/scss/**/*.*'])
        .pipe(gulp.dest('public/assets'));
    return merge(cpyassets);
});

//  [ Copy assets ] end

//  [ build js ] start
gulp.task('build-js', function() {
    var layoutjs = gulp.src('resources/assets/js/*.js')
        .pipe(gulp.dest('public/assets/js'))

    var pagesjs = gulp.src('resources/assets/js/pages/*.js')
        .pipe(gulp.dest('public/assets/js/pages'))

    return merge(layoutjs, pagesjs);
})
//  [ build js ] end

//  [ scss compiler ] start
gulp.task('mincss', function() {
    // main style css
    return gulp.src('resources/assets/scss/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css'))
        .pipe(cssmin())
        .pipe(gulp.dest('public/assets/css'))
})
//  [ scss compiler ] end

//  [ uglify js ] start
gulp.task('uglify', function() {
    var layoutjs = gulp.src('resources/assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js'))

    var pagesjs = gulp.src('resources/assets/js/pages/*.js')
        .pipe(babel())
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js/pages'))

    return merge(layoutjs, pagesjs);
})
//  [ uglify js ] end

//  [ image optimizer ] start
gulp.task('imgmin', function() {
    return gulp.src('resources/assets/img/**/*.{jpg,png}')
        .pipe(smushit())
        .pipe(gulp.dest('public/assets/img'));
});
//  [ image optimizer ] end

//  [ browser reload ] start
gulp.task("browserSync", function() {
    browsersync.init({
        server: "public/"
    });
});
//  [ browser reload ] end

//  [ watch ] start
gulp.task('watch', function() {
    gulp.watch('resources/assets/scss/**/*.scss', gulp.series('sass')).on('change', browsersync.reload);
    gulp.watch('resources/assets/js/**/*.js', gulp.series('build-js')).on('change', browsersync.reload);
    gulp.watch('resources/views/html/**/*.html', gulp.series('build-html')).on('change', browsersync.reload);
    gulp.watch('resources/views/doc/**/*.html', gulp.series('build')).on('change', browsersync.reload);
})
//  [ watch ] start
const compile = gulp.parallel('browserSync', 'watch');
//  [ Default task ] start
gulp.task('default',
    gulp.series(
        'build',
        'sass',
        'build-js',
        'imgmin',
        compile
    )
);
// gulp.parallel('browserSync','watch')
//  [ Default task ] end

//  [ Build-Production task ] start
gulp.task(
    'prod-build',
    gulp.series(
        'build',
        'sass',
        'build-js',
        'imgmin'
    )
)
//  [ Build-Production task ] end

//  [ watch minify ] start
gulp.task('watch-minify', function() {
    gulp.watch('resources/assets/scss/**/*.scss', gulp.series('mincss'));
    gulp.watch('resources/assets/js/**/*.js', gulp.series('uglify'));
    gulp.watch('resources/views/html/**/*.html', gulp.series('htmlmin'));
    gulp.watch('resources/views/**/*.html', gulp.series('build'));
})
//  [ watch minify ] start
