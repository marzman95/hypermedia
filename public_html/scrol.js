// A $( document ).ready() block.
$( document ).ready(function() {

  var fixmeTop = $('#fixedmenu').offset().top;
  $(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('#fixedmenu').css({
            'position' : 'fixed',
            'width' : '20%',
            'top' : '0px',
            'left' : '-7%',

          });
          $('#fixedcontent').css({'left' : '0px'});
          $('#backtotop').css({'display' : 'block'});
        } else {
          $('#fixedmenu').css({
            'position' : 'static',
            'width' : '90%',
          });
          $('#fixedcontent').css({'left' : '0px'});
          $('#backtotop').css({'display' : 'none'});

  }
});
$("#backtotop").click(function(){
  document.body.scrollTop = 0; // For Chrome, Safari and Opera
  document.documentElement.scrollTop = 0; // For IE and Firefox
});

});
