/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Watch
/* ***** ----------------------------------------------- ***** */

import browserSync from 'browser-sync';
import browserSyncTask from './browserSync.js';
import config from '../config';
import copy from './copy.js';
import gulp from 'gulp';
import images from './images.js';
import { stylesMain, stylesEditor } from './styles.js';
import svgs from './svgs.js';
import scripts from './scripts.js';

/*
** -- Initialize BrowserSync
** -- Watch *.php files for changes
** -- Use proxy specified in config (development server must be running)
** -- Initialize watch for styles, scripts, images, svgs and asset files
** -- Force browser reload when changes are made to images, svgs and asset files
*/
const watchChanges = () => {
  gulp.watch(config.styles.mainSrc, gulp.series(stylesMain));
  gulp.watch(config.styles.editorSrc, gulp.series(stylesEditor));
  gulp.watch(config.scripts.watchSrc, gulp.series(scripts));
  gulp.watch(config.images.src, gulp.series(images)).on('change', browserSync.reload);
  gulp.watch(config.svgs.src, gulp.series(svgs)).on('change', browserSync.reload);
  gulp.watch(config.copy.src, gulp.series(copy)).on('change', browserSync.reload);
}

const watchInit = gulp.parallel(browserSyncTask, watchChanges);

export default watchInit;
