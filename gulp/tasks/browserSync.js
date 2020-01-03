/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - BrowserSync
/* ***** ----------------------------------------------- ***** */

// Require all development dependencies
var browserSync = require('browser-sync'),
  config = require('../config'),
  gulp = require('gulp');

/*
** -- Initialize BrowserSync
** -- Watch *.php files for changes
** -- Use proxy specified in config (development server must be running)
*/
gulp.task('browserSync', function() {

  browserSync.init(config.browserSync.files, {
    proxy: config.browserSync.proxy
  });

});
