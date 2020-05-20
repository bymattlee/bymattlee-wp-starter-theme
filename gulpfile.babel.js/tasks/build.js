/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Build
/* ***** ----------------------------------------------- ***** */

import clean from './clean.js';
import copy from './copy.js';
import gulp from 'gulp';
import images from './images.js';
import { scriptsBuild } from './scripts.js';
import { styles } from './styles.js';
import svgs from './svgs.js';

/*
** -- Clean dist directory
** -- Run all tasks to rebuild project
*/
const build = gulp.series(
  clean,
  gulp.parallel(styles, scriptsBuild, images, svgs, copy)
);

export default build;
