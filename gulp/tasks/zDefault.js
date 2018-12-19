/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - Default
/* ***** ----------------------------------------------- ***** */

// Require all development dependencies
var config = require('../config'),
	gulp = require('gulp');

/*
** -- Clean dist directory
** -- Run all tasks to rebuild project
*/
gulp.task('default',
	gulp.series(
		'clean',
		gulp.parallel(
			'styles',
			'scripts',
			'images',
			'svgs',
			'copy'
		)
	)
);
