/* ***** ----------------------------------------------- ***** **
/* ***** Main JS
/* ***** ----------------------------------------------- ***** */

import Highway from '@dogstudio/highway';
import { setActiveLink, updateBodyClasses, trackGA } from './components/highway.js';
import Fade from './transitions/Fade'

import { init as globalInit } from './components/global.js';
import { init as richTextInit } from './components/richText.js';
import Scroll2Reveal from './vendors/Scroll2Reveal.js';

// Init on first load
globalInit();
richTextInit();
const s2r = new Scroll2Reveal();

// Init Highway
const H = new Highway.Core({
  transitions: {
    default: Fade
  }
});

// When user is logged into WordPress, update admin bar content on page load
const isLoggedIn = document.body.classList.contains( 'logged-in' );
if (isLoggedIn) {
  // Query admin bar links and detach them from Highway transitions
  const adminBarLinks = document.querySelectorAll('#wpadminbar a');
  H.detach(adminBarLinks);
}

// Executed at the start of every page load
H.on('NAVIGATE_IN', ({to, location}) => {
  setActiveLink(location);
  updateBodyClasses(to);
  s2r.reInit();
  richTextInit();
});

// Executed when the page has loaded completely
H.on('NAVIGATE_END', ({to, location}) => {
  if (isLoggedIn) {
    // Query admin bar links, and new page's admin bar links
    const adminBar = document.querySelector('#wpadminbar');
    const newAdminBar = to.page.body.querySelector('#wpadminbar');

    // Replace current admin bar with new admin bar content
    if (adminBar && newAdminBar) adminBar.innerHTML = newAdminBar.innerHTML;

    // Detach admin bar links from Highway transitions
    const adminBarLinks = document.querySelectorAll('#wpadminbar a');
    H.detach(adminBarLinks);
  }

  trackGA(to, location);
});
