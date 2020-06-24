/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Copy
/* ***** ----------------------------------------------- ***** */

import changed from 'gulp-changed';
import config from '../config';
import gulp from 'gulp';

// Copy all asset files to dist directory (fonts, swfs, videos, etc)
const copy = () => {
  return gulp.src(config.copy.src)
    .pipe(changed(config.copy.dest))
    .pipe(gulp.dest(config.copy.dest));
}

export default copy;
