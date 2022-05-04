/* ***** ----------------------------------------------- ***** **
** ***** Highway JS
** ***** ----------------------------------------------- ***** */

/* global gtag, gaId */

// Set active link on newly loaded page
// Check if user is on the same page as current nav item
// Or if user is in the same section as nav item
const setActiveLink = location => {
  const menuItem = document.querySelectorAll('.js-nav-menuItem');

  menuItem.forEach(item => {
    item.parentElement.classList.remove('o-nav-menuListItem--current');
    if (item.href === location.href) {
      item.parentElement.classList.add('o-nav-menuListItem--current');
    } else {
      const currentItemSlug = item.href.split('/')[3];
      const currentLocationSlug = location.href.split('/')[3];
      if (currentItemSlug === currentLocationSlug) item.parentElement.classList.add('o-nav-menuListItem--current');
    }
  });
};

// Update body classes from new page
const updateBodyClasses = to => {
  document.body.classList = to.page.body.classList;
};

// Track Google Analytics on a new page load
const trackGA = (to, location) => {
  if (typeof gtag === 'undefined') return;

  gtag('config', gaId, {
    'page_path': location.pathname,
    'page_title': to.page.title,
    'page_location': location.href
  });
};

export { setActiveLink, updateBodyClasses, trackGA };
