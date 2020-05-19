/* ***** ----------------------------------------------- ***** **
** ***** Rich Text Editor JS
** ***** ----------------------------------------------- ***** */


const responsiveVideoWrap = () => {
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

const init = () => {
  responsiveVideoWrap();
}

export { init };
