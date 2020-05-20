/* ***** ----------------------------------------------- ***** **
** ***** Rich Text Editor JS
** ***** ----------------------------------------------- ***** */

function responsiveVideoWrap() {
  const iframes = document.querySelectorAll('.js-rich_text_editor iframe');

  iframes.forEach(iframe => {
    const iframeSrc = iframe.getAttribute('src');
    if (iframeSrc.includes('youtube')) {
      const embedWrapper = document.createElement('div');
      embedWrapper.classList.add('o-embed');
      iframe.parentNode.insertBefore(embedWrapper, iframe);
      embedWrapper.appendChild(iframe);
    }
  });
}

function init() {
  responsiveVideoWrap();
}

export { init };
