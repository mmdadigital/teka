(function ($) {
  Drupal.behaviors.typeKit = {
    attach: function (context, settings) {
      !function(e){var t,a={kitId:settings.teka.typeKit.id,scriptTimeout:3e3},i=e.documentElement,c=setTimeout(function(){i.className=i.className.replace(/\bwf-loading\b/g,"")+" wf-inactive"},a.scriptTimeout),n=e.createElement("script"),o=!1,s=e.getElementsByTagName("script")[0];i.className+=" wf-loading",n.src="//use.typekit.net/"+a.kitId+".js",n.async=!0,n.onload=n.onreadystatechange=function(){if(t=this.readyState,!(o||t&&"complete"!=t&&"loaded"!=t)){o=!0,clearTimeout(c);try{Typekit.load(a)}catch(e){}}},s.parentNode.insertBefore(n,s)}(document);
    }
  };
}(jQuery));
