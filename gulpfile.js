import gulp from 'gulp';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const scss = gulpSass(dartSass);
import sourceMaps from 'gulp-sourcemaps';
import concat from 'gulp-concat';
import sassGlob from 'gulp-sass-glob';
import browserSync from 'browser-sync';


const folderDist = "public";

const dir = {
    appScss: `${folderDist}/assets/scss`,
    appCss: `${folderDist}/assets/css`,
}

export function sass() {
    return gulp.src([`${dir.appScss}/main.scss`])
        .pipe(sourceMaps.init())
        .pipe(sassGlob())
        .pipe(scss())
        .pipe(concat('main.css'))
        .pipe(sourceMaps.write())
        .pipe(gulp.dest(dir.appCss))
        .pipe(browserSync.stream())
}

function php() {
    return gulp.src(folderDist + '/**/*.php')
        .pipe(browserSync.stream())
}

export function watching() {
    gulp.watch([`${dir.appScss}/**/*.scss`], sass);
    gulp.watch([`${folderDist}/**/*.php`, `${folderDist}/**/blocks/*.php`], php);
}


export function browsersync() {
    browserSync.init({
        notify: false,
        proxy: "localhost:81",
    });
}

export default gulp.parallel(browsersync, sass, php, watching);