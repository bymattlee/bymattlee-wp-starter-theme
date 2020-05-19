// ***** ----------------------------------------------- ***** **
// ** ***** Main JS
// ** ***** ----------------------------------------------- ***** 

import { init as globalInit } from './modules/global.js';
import { init as richTextEditorInit } from './modules/richTextEditor.js';
import { init as mobileLockInit } from './modules/mobileLock.js';

globalInit();
richTextEditorInit();
mobileLockInit();
