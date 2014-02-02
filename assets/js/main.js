
$(document).ready(function() {

  $("header h1").fitText(.5, {
    // minFontSize: '20px',
    maxFontSize: '80px'
  });

  $("#scroller").simplyScroll({
    pauseOnHover: false,
    pauseOnTouch: false
  });

});