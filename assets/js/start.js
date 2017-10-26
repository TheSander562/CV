(function ($) {
    "use strict";
    jQuery(window).on('load', function () {
        $('div#loading').fadeOut(1000);
    });
})(jQuery);

$( document ).ready(function(){
  $(".button-collapse").sideNav({
      menuWidth: 300,
      edge: 'left',
      closeOnClick: true,
      draggable: true,
    }
  );
})