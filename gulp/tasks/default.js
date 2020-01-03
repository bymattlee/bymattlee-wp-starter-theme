/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Default
/* ***** ----------------------------------------------- ***** */

// Require all development dependencies
var config = require('../config'),
  gulp = require('gulp'),
  runSequence = require('gulp4-run-sequence');

/*
** -- Clean dist directory
** -- Run all tasks to rebuild project
*/
gulp.task('default', function(done) {
  runSequence('clean', ['styles', 'scripts', 'images', 'svgs', 'copy']);
  done();
});
