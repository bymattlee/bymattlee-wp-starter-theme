/* ***** ----------------------------------------------- ***** **
/* ***** Gulp Config
/* ***** ----------------------------------------------- ***** */

// Global variables
var src = 'assets/src',
  dest = 'assets/dist';

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
    '*/\n'
  ],
  styles: {
    mainSrc: [
      src + '/scss/**/*.scss',
      '!' + src + '/scss/editorStyles.scss'
    ],
    editorSrc:  src + '/scss/editorStyles.scss',
    dest: dest + '/css',
    purgeContent: [
      './**/*.php',
      src + '/js/modules/**/*.js'
    ],
    purgeWhitelistPatterns: [
      /body/,
      /richTextEditor/,
      /wp-core-ui/
    ]
  },
  scripts: {
    src: src + '/js/main.js',
    watchSrc: [
      src + '/js/**/*.js',
      '!' + src + '/js/vendors/modernizr.js'
    ],
    dest:  dest + '/js',
    modernizr: {
      src: [
        src + '/scss/**/*',
        src + '/js/**/*',
      ],
      options: {
        'options' : [
          'setClasses'
        ]
      }
    },
    modernizrDest: src + '/js/vendors',
    modernizrFileSrc: src + '/js/vendors/modernizr.js'
  },
  images: {
    src: src + '/images/**/*',
    dest:  dest + '/images'
  },
  svgs: {
    src: src + '/svgs/*.svg',
    dest:  dest + '/svgs',
    sprite: 'sprite.svg'
  },
  copy: {
    src: [
      src + '/**/*.+(eot|svg|ttf|woff|woff2|swf|mp4|mp3)',
      '!' + src + '/svgs/*.svg',
      '!' + src + '/vendors/**/*'
    ],
    dest:  dest
  },
  clean: {
    dest:  dest
  },
  browserSync: {
    files: '**/*.php',
    proxy: 'local.bymattleedev.test'
  },
  deploy: {
    src: './',
    root: './',
    exclude: [
      '.DS_Store',
      'node_modules',
      'acf-export.json',
      'LICENSE.md',
      'README.md',
      'hostSettings.json',
      'assets/src/vendors',
      '.git'
    ]
  },
};
