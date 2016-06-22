# ByMattLee WP Starter Theme
* A starter Wordpress theme that includes base Wordpress template files and optimized theme setup
* Theme is stripped down and does not contain any styles
* Uses Gulp as the build tool

## Installation
##### 1. Install Node: <https://nodejs.org/en/download/>
##### 2. Install all dependencies in theme directory
```
npm install
```
##### 3. Update Gulp Config
All Gulp settings can be found in `gulp/config.js`. To connect BrowserSync to the local development environment to enable browser reload, update `line 63` to local development address
##### 4. Enable Deployment
To enable deployment, create `hostSettings.json` and store in the `gulp` directory. This file should not be checked in as it contains sensitive information. Sample `hostSettings.json`:
```
{
	"staging": {
		"hostname": "X",
		"username": "X",
		"destination": "X"
	},
	"production": {
		"hostname": "X",
		"username": "X",
		"destination": "X"
	}
}
```

## Use
##### Initialize Gulp watch
```
gulp watch
```
##### Development Build - Build Project
```
gulp
```
##### Production Build - Build Project Without Sourcemaps
```
gulp --production
```
##### Deploy To Staging
```
gulp deploy --staging
```
##### Deploy To Production
```
gulp deploy --production
```

## General Features
* Browser reload when PHP, JS, image, SVG or asset files are updated
* Styles are injected when SCSS files are updated
* Uses Modernizr to detect flexbox compatibility.  If flexbox is not supported, a message will display asking the user to upgrade to latest version of the browser

##### Styles
* Includes linter (Stylelint), autoprefixer, minification and sourcemap creation
* SCSS files are located in `assets/src/scss`
* `main.scss` in `assets/src/scss` serves as the base that includes the other dependent SASS files
* `main.scss` gets compiled to `assets/dist/css/main.min.css`
* `.stylelintrc` contains the settings for Stylelint

##### Scripts
* Includes linting (ESLint), concatenation, minification and sourcemap creation
* JS files are located in the `assets/src/js` directory will be bundled into `assets/dist/js/main.min.js` when built
* `main.js` in `assets/src/js` serves as the main JS file that runs all modules
* All vendor libraries should be placed in `assets/src/js/vendors` so they can be bundled in `main.min.js`
* All modules should be placed in `assets/src/js/modules` so they can be bundled in `main.min.js`
* `svgxuse.js` serves as the polyfill for SVG icons in IE browsers

##### Images
* Place all unoptimized images in the `assets/src/images` directory
* They will then be optimized and placed in `assets/dist/images`

##### SVGS
* Place all SVG files in the `assets/src/svg` directory
* They will then be optimized and added to a sprite at `assets/dist/svg/sprite.svg`

##### Other Assets
* All assets (fonts, videos, swfs, etc) under `assets/src` will be copied to `assets/dist` on build

##### Deploy
* Deploys theme directory via SSH

## Wordpress Requirements
* Advanced Custom Fields PRO plugin is recommended to create custom fields and Option pages. Default settings can be imported from `acf-export.json`

## References
* [ByMattLee Web Starter Files](https://github.com/bymattlee/bymattlee-web-starter-files)
* [Underscores](https://github.com/Automattic/_s)
* [Bones](https://github.com/eddiemachado/bones)
* [FoundationPress](https://github.com/olefredrik/FoundationPress)
* [HTML5 Blank](https://github.com/toddmotto/html5blank)
* [Sage](https://github.com/roots/sage)