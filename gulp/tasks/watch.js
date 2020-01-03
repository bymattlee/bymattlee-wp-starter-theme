/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Watch
/* ***** ----------------------------------------------- ***** */

// Require all development dependencies
var browserSync = require('browser-sync'),
  config = require('../config'),
  gulp = require('gulp'),
  watch = require('gulp-watch'),
  reload = browserSync.reload;

/*
** -- Initialize BrowserSync
** -- Watch *.php files for changes
** -- Use proxy specified in config (development server must be running)
** -- Initialize watch for styles, scripts, images, svgs and asset files
** -- Force browser reload when changes are made to images, svgs and asset files
*/
gulp.task('watch',
  gulp.parallel(['browserSync', function() {

    gulp.watch(config.styles.mainSrc, gulp.series('styles:main'));
    gulp.watch(config.styles.editorSrc, gulp.series('styles:editor'));
    gulp.watch(config.scripts.src, gulp.series('scripts:main'));
    gulp.watch(config.images.src, gulp.series('images')).on('change', reload);
    gulp.watch(config.svgs.src, gulp.series('svgs')).on('change', reload);
    gulp.watch(config.copy.src, gulp.series('copy')).on('change', reload);

  }]
));
