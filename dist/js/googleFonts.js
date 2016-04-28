(function ($) {
  Drupal.behaviors.googleFonts = {
    attach: function (context, settings) {
      var _families = settings.teka.googleFonts.families.split("|");
      WebFontConfig = {
        google: { families: _families }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    }
  };
}(jQuery));
