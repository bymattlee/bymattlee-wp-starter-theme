/* ***** ----------------------------------------------- ***** **
** ***** Rich Text JS
** ***** ----------------------------------------------- ***** */

const responsiveVideoWrap = () => {
  const iframes = document.querySelectorAll('.js-richText iframe');

  iframes.forEach(iframe => {
    const iframeSrc = iframe.getAttribute('src');
    if (iframeSrc.includes('youtube') || iframeSrc.includes('vimeo')) {
      const embedWrapper = document.createElement('div');
      embedWrapper.classList = 'u-aspect-w-16 u-aspect-h-9 u-my-30 u-mx-0 sm:u-my-40';
      iframe.parentNode.insertBefore(embedWrapper, iframe);
      embedWrapper.appendChild(iframe);
    }
  });
}

const init = () => {
  responsiveVideoWrap();
}

export { init };
