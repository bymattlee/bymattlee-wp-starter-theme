/* ***** ----------------------------------------------- ***** **
/* ***** Gulp - BrowserSync
/* ***** ----------------------------------------------- ***** */

import browserSync from 'browser-sync';
import config from '../config';

/*
** -- Initialize BrowserSync
** -- Use directory specified in config as the root for the server
*/
function browserSyncTask() {
  browserSync.init(config.browserSync.files, {
    proxy: config.browserSync.proxy
  });
}

export default browserSyncTask;
