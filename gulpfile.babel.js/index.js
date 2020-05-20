/* ***** ----------------------------------------------- ***** **
/* ***** Gulp
/* ***** ----------------------------------------------- ***** */

import gulp from 'gulp';
import build from './tasks/build.js';
import watch from './tasks/watch.js';
import deploy from './tasks/deploy.js';

// Available tasks
gulp.task('default', build);
gulp.task('watch', watch);
gulp.task('deploy', deploy);
