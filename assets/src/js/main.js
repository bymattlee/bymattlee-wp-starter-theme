/* ***** ----------------------------------------------- ***** **
/* ***** Main JS
/* ***** ----------------------------------------------- ***** */

import { Core } from '@unseenco/taxi';
import DefaultTransition from './transitions/Default';
import {
  setActiveLink,
  updateBodyClasses,
  trackGA,
} from './components/taxi.js';

import { init as globalInit } from './components/global.js';
import { init as richTextInit } from './components/richText.js';
import Scroll2Reveal from './vendors/Scroll2Reveal.js';

// Init on first load
globalInit();
richTextInit();
const s2r = new Scroll2Reveal();

// Init Taxi
const taxi = new Core({
  transitions: {
    default: DefaultTransition,
  },
  links:
    'a:not([target]):not([href^=\\#]):not([href*="wp-admin"]):not([data-taxi-ignore])',
});

// Executed at the start of every page load
taxi.on('NAVIGATE_IN', ({ to }) => {
  setActiveLink();
  updateBodyClasses(to);
  s2r.reInit();
  richTextInit();
});

// Executed when the page has loaded completely
taxi.on('NAVIGATE_END', ({ to }) => {
  const isLoggedIn = document.body.classList.contains('logged-in');
  if (isLoggedIn) {
    // Query admin bar links, and new page's admin bar links
    const adminBar = document.querySelector('#wpadminbar');
    const newAdminBar = to.page.body.querySelector('#wpadminbar');

    // Replace current admin bar with new admin bar content
    if (adminBar && newAdminBar) adminBar.innerHTML = newAdminBar.innerHTML;
  }

  trackGA(to);
});
