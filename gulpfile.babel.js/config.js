/* ***** ----------------------------------------------- ***** **
/* ***** Gulp Config
/* ***** ----------------------------------------------- ***** */

// Global variables
const src = './assets/src'
const dest = './assets/dist'

// Contains all main configurations for Gulp
module.exports = {
  fileHeader: [
    '/*',
    '**',
    '**',
    '**',
    '**',
    '**',
    '**              {{ @bymattlee }}',
    '**              {{ bymattlee.com }}',
    '**',
    '**',
    '**',
    '**',
    '**',
    '*/\n',
  ],
  wordpress: {
    src: ['./**/*.php', './tailwind.config.js'],
  },
  styles: {
    mainSrc: [src + '/scss/**/*.scss', '!' + src + '/scss/editorStyles.scss'],
    editorSrc: src + '/scss/editorStyles.scss',
    dest: dest + '/css',
    tailwindConfig: './tailwind.config.js',
    purgeContent: ['./**/*.php', src + '/js/components/**/*.js'],
  },
  scripts: {
    src: src + '/js/main.js',
    watchSrc: src + '/js/**/*.js',
    dest: dest + '/js',
  },
  images: {
    src: src + '/images/**/*',
    dest: dest + '/images',
  },
  svgs: {
    src: src + '/svgs/*.svg',
    dest: dest + '/svgs',
    sprite: 'sprite.svg',
  },
  copy: {
    src: [
      src + '/**/*.+(eot|svg|ttf|woff|woff2|swf|mp4|mp3)',
      '!' + src + '/svgs/*.svg',
      '!' + src + '/vendors/**/*',
    ],
    dest: dest,
  },
  clean: {
    dest: dest,
  },
  browserSync: {
    proxy: 'localhost:10008',
  },
}
