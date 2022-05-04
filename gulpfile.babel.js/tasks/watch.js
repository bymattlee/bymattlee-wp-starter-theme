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
  gulp.watch(config.wordpress.src, stylesMain).on('change', browserSync.reload);
  gulp.watch(config.styles.mainSrc, stylesMain);
  gulp.watch(config.styles.editorSrc, stylesEditor);
  gulp.watch(config.scripts.watchSrc, scripts);
  gulp.watch(config.images.src, images).on('change', browserSync.reload);
  gulp.watch(config.svgs.src, svgs).on('change', browserSync.reload);
  gulp.watch(config.copy.src, copy).on('change', browserSync.reload);
}

const watchInit = gulp.parallel(browserSyncTask, watchChanges);

export default watchInit;
