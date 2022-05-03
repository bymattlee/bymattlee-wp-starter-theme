/* ***** ----------------------------------------------- ***** **
/* ***** Main JS
/* ***** ----------------------------------------------- ***** */

import { init as globalInit } from './modules/global.js';
import { init as richTextEditorInit } from './modules/richTextEditor.js';
import Scroll2Reveal from './vendors/Scroll2Reveal.js';

// Init on first load
globalInit();
richTextEditorInit();
const s2r = new Scroll2Reveal();
