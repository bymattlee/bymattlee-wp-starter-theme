/* ***** ----------------------------------------------- ***** **
** ***** Rich Text Editor JS
** ***** ----------------------------------------------- ***** */

/* global Main */
(function($){
  'use strict';

  Main.modules.richTextEditor = function() {

    var responsiveVideoWrap = function() {

        var $this = $(this),
          thisSrc = $this.attr('src');

        if (thisSrc.indexOf('youtube') > -1 ||
          thisSrc.indexOf('vevo') > -1 || 
          thisSrc.indexOf('vimeo') > -1 || 
          thisSrc.indexOf('itunes') > -1 || 
          thisSrc.indexOf('facebook') > -1) {
          $this.wrap('<div class="o-embed"></div>');
        }

      };

    return {
      init: function() {
        $('.js-rich_text_editor iframe').each(responsiveVideoWrap);
      }
    };
    
  };

})(jQuery);