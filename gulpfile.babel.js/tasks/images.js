/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Images
/* ***** ----------------------------------------------- ***** */

import changed from 'gulp-changed';
import config from '../config';
import gulp from 'gulp';
import imagemin from 'gulp-imagemin';
import imageminJpegRecompress from 'imagemin-jpeg-recompress';
import size from 'gulp-size';

/*
** -- Check if image is already in dist directory and has changed
** -- Optimize image for production
*/
const images = () => {
  return gulp.src(config.images.src)
    .pipe(changed(config.images.dest))
    .pipe(imagemin([
      imagemin.gifsicle({ interlaced: true }),
      imageminJpegRecompress(),
      imagemin.optipng({ optimizationLevel: 5 })
    ]))
    .pipe(size({
      title: 'Optimized File Size:',
      showFiles: true
    }))
    .pipe(gulp.dest(config.images.dest));
}

export default images;
