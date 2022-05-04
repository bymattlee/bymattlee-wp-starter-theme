/* ***** ----------------------------------------------- ***** **
/* ***** Main JS
/* ***** ----------------------------------------------- ***** */

import { init as globalInit } from './modules/global.js';
import { init as richTextInit } from './modules/richText.js';
import Scroll2Reveal from './vendors/Scroll2Reveal.js';

// Init on first load
globalInit();
richTextInit();
const s2r = new Scroll2Reveal();
