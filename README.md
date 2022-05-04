[![ByMattLee](http://hosted.bymattlee.com/github/bymattlee-logo.png)](http://bymattlee.com)

# ByMattLee WP Starter Theme
A starter boilerplate WordPress theme [Gulp](https://gulpjs.com/), [Tailwind CSS](https://tailwindcss.com/), [rollup.js](https://rollupjs.org/), [Alpine.js](https://alpinejs.dev/) and [Highway](https://highway.js.org/).

## Installation
##### 1. Install Node >=14.17.0: <https://nodejs.org/>
##### 2. Install Yarn: <https://yarnpkg.com/>
##### 3. Install all dependencies
```
$ yarn
```

## Configuration
##### Update Gulp Config
All Gulp settings can be found in `gulpfile.babel.js/config.js`. To connect BrowserSync to the local development environment to enable browser reload, update `browserSync.proxy` to local development address.

## Use
##### Build Files For Development And Initialize Watch
```
$ yarn dev
```
##### Build Files For Staging
```
$ yarn stage
```
##### Build Files For Production
```
$ yarn prod
```

## General Features
* Features [Gulp](https://gulpjs.com/) as the build pipeline that compiles styles and scripts, and optimizes assets
* Browser reload when PHP, JS, image, SVG or asset files are updated
* Styles are injected when SCSS files are updated

##### WordPress
* Includes base WordPress template files and optimized theme setup
* Advanced Custom Fields PRO plugin is recommended to create custom fields and Option pages. Default settings can be imported from `acf-global-options.json`

##### Styles
* Features [Tailwind CSS](https://tailwindcss.com/), a utility-first framework
* Includes linter (Stylelint), autoprefixer, minification and sourcemap creation
* SCSS files are located in `assets/src/scss`
* `main.scss` in `assets/src/scss` serves as the base that includes the other dependent SASS files
* `main.scss` gets compiled to `assets/dist/css/main.min.css`
* `.stylelintrc` contains the settings for Stylelint
* Info about class namespacing can be found in `src/assets/scss/main.scss`
* Unused CSS (PurgeCSS) will be removed in staging and production builds

##### Scripts
* Features [rollup.js](https://rollupjs.org/guide/en/) as the module bundler
* Includes linting (ESLint), concatenation, minification and sourcemap creation
* Includes [Highway](https://highway.js.org/) for seamless page transitions
* Includes a custom framework for reuseable content animations
* Includes [Alpine.js](https://alpinejs.dev/) for declarative DOM manipulation
* `main.js` in `src/assets/js` serves as the main JS file that includes and runs all modules and will be compiled to `dist/assets/js/main.min.js`
* All local modules should be placed in `src/assets/js/modules`
* All vendor JS can be manually added to `src/assets/js/vendors` if not found on Yarn 
* `.eslintrc` contains the settings for ESLint

##### Images
* Place all unoptimized images in the `assets/src/images` directory
* They will then be optimized and placed in `assets/dist/images`

##### SVGS
* Place all SVG files in the `assets/src/svg` directory
* They will then be optimized and added to a sprite at `assets/dist/svg/sprite.svg`

##### Other Assets
* All assets (fonts, videos, swfs, etc) under `assets/src` will be copied to `assets/dist` on build
