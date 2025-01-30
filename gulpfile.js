import gulp from 'gulp';
import browserSync from 'browser-sync';


const folderDist = "public";

const dir = {
    appScss: `${folderDist}/assets/scss`,
    appCss: `${folderDist}/assets/css`,
}

export function css() {
    return gulp.src([`${dir.appCss}/output.css`])
        .pipe(browserSync.stream())
}

function php() {
    return gulp.src(folderDist + '/**/*.php')
        .pipe(browserSync.stream())
}

export function watching() {
    gulp.watch([`${dir.appScss}/public/assets/css/output.css`], css);
    gulp.watch([`${folderDist}/**/*.php`, `${folderDist}/**/blocks/*.php`, `${folderDist}/**/include/*.php`], php);
}


export function browsersync() {
    browserSync.init({
        notify: false,
        proxy: "localhost:82",
    });
}

export default gulp.parallel(browsersync, css, php, watching);